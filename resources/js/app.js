import './bootstrap';
import * as THREE from 'three';
import confetti from 'canvas-confetti';
import { createIcons, icons } from 'lucide';

// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });
    initAudioFX();
    initThreeScene();
    initCard3DTilt();
    initCounterAnimation();
    initPPDBForm();
    initFacilityTabs();
    initFaqAccordion();
    initMobileMenu();
    initMultiStepForm();
});


/* ==========================================================
   1. SOUND EFFECTS (Web Audio API - No external files needed)
   ========================================================== */
let audioCtx = null;
let soundEnabled = true;

function initAudioFX() {
    const soundToggleBtn = document.getElementById('sound-toggle');
    const soundIcon = document.getElementById('sound-icon');

    if (soundToggleBtn) {
        soundToggleBtn.addEventListener('click', () => {
            soundEnabled = !soundEnabled;
            if (soundIcon) {
                soundIcon.setAttribute('data-lucide', soundEnabled ? 'volume-2' : 'volume-x');
                createIcons({ icons });
            }
            if (soundEnabled) {
                playPopSound(520, 'sine', 0.15);
            }
        });
    }

    // Attach gentle pop sound to all clickable buttons
    document.querySelectorAll('.sound-click').forEach(el => {
        el.addEventListener('click', () => {
            if (soundEnabled) playPopSound(440, 'triangle', 0.1);
        });
    });
}

function getAudioContext() {
    if (!audioCtx) {
        audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    }
    if (audioCtx.state === 'suspended') {
        audioCtx.resume();
    }
    return audioCtx;
}

function playPopSound(freq = 440, type = 'sine', duration = 0.15) {
    if (!soundEnabled) return;
    try {
        const ctx = getAudioContext();
        const osc = ctx.createOscillator();
        const gain = ctx.createGain();
        osc.type = type;
        osc.frequency.setValueAtTime(freq, ctx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(freq * 1.5, ctx.currentTime + duration);

        gain.gain.setValueAtTime(0.2, ctx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.01, ctx.currentTime + duration);

        osc.connect(gain);
        gain.connect(ctx.destination);

        osc.start();
        osc.stop(ctx.currentTime + duration);
    } catch (e) {
        console.warn('Audio not allowed yet or not supported');
    }
}

function playFanfareSound() {
    if (!soundEnabled) return;
    try {
        const ctx = getAudioContext();
        const notes = [392, 523.25, 659.25, 783.99, 1046.5];
        notes.forEach((freq, idx) => {
            setTimeout(() => {
                const osc = ctx.createOscillator();
                const gain = ctx.createGain();
                osc.type = 'triangle';
                osc.frequency.setValueAtTime(freq, ctx.currentTime);
                gain.gain.setValueAtTime(0.25, ctx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.01, ctx.currentTime + 0.35);
                osc.connect(gain);
                gain.connect(ctx.destination);
                osc.start();
                osc.stop(ctx.currentTime + 0.35);
            }, idx * 90);
        });
    } catch (e) {}
}

/* ==========================================================
   2. THREE.JS 3D INTERACTIVE HERO PLAYGROUND
   ========================================================== */
function initThreeScene() {
    const container = document.getElementById('hero-3d-canvas');
    if (!container) return;

    const width = container.clientWidth || 500;
    const height = container.clientHeight || 500;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
    camera.position.set(0, 1.5, 9);

    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    container.appendChild(renderer.domElement);

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 1.6);
    scene.add(ambientLight);

    const sunLight = new THREE.DirectionalLight(0xfff3d0, 2.0);
    sunLight.position.set(6, 10, 8);
    sunLight.castShadow = true;
    scene.add(sunLight);

    const blueRimLight = new THREE.PointLight(0x38bdf8, 2.5, 20);
    blueRimLight.position.set(-6, -2, 4);
    scene.add(blueRimLight);

    const pinkFillLight = new THREE.PointLight(0xf43f5e, 1.8, 20);
    pinkFillLight.position.set(4, -4, 3);
    scene.add(pinkFillLight);

    // Main 3D Objects Group
    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // Material palette
    const matYellow = new THREE.MeshStandardMaterial({ color: 0xfbbf24, roughness: 0.25, metalness: 0.1 });
    const matSkyBlue = new THREE.MeshStandardMaterial({ color: 0x0284c7, roughness: 0.3, metalness: 0.15 });
    const matPastelBlue = new THREE.MeshStandardMaterial({ color: 0x38bdf8, roughness: 0.25, metalness: 0.1 });
    const matCoralRed = new THREE.MeshStandardMaterial({ color: 0xf43f5e, roughness: 0.3, metalness: 0.1 });
    const matLimeGreen = new THREE.MeshStandardMaterial({ color: 0x10b981, roughness: 0.3, metalness: 0.1 });
    const matWood = new THREE.MeshStandardMaterial({ color: 0xfcd34d, roughness: 0.6 });
    const matGraphite = new THREE.MeshStandardMaterial({ color: 0x1e293b, roughness: 0.4 });
    const matWhitePages = new THREE.MeshStandardMaterial({ color: 0xffffff, roughness: 0.8 });
    const matGoldShiny = new THREE.MeshStandardMaterial({ color: 0xf59e0b, roughness: 0.15, metalness: 0.6 });
    const matSilver = new THREE.MeshStandardMaterial({ color: 0xe2e8f0, roughness: 0.2, metalness: 0.8 });

    // 1. Stack of 3D Books
    const bookGroup = new THREE.Group();

    function createBook(colorMat, width, height, depth, yPos, rotY) {
        const book = new THREE.Group();
        // Cover
        const coverGeom = new THREE.BoxGeometry(width, height, depth);
        const coverMesh = new THREE.Mesh(coverGeom, colorMat);
        coverMesh.castShadow = true;
        book.add(coverMesh);

        // White pages inner
        const pageGeom = new THREE.BoxGeometry(width * 0.94, height * 0.75, depth * 0.96);
        const pageMesh = new THREE.Mesh(pageGeom, matWhitePages);
        pageMesh.position.set(width * 0.03, 0, 0);
        book.add(pageMesh);

        book.position.y = yPos;
        book.rotation.y = rotY;
        return book;
    }

    const b1 = createBook(matCoralRed, 2.2, 0.36, 1.6, -1.1, -0.15);
    const b2 = createBook(matSkyBlue, 2.0, 0.34, 1.5, -0.73, 0.25);
    const b3 = createBook(matLimeGreen, 1.8, 0.32, 1.4, -0.38, -0.08);
    bookGroup.add(b1, b2, b3);
    mainGroup.add(bookGroup);

    // 2. 3D Pencil
    const pencilGroup = new THREE.Group();
    // Pencil body (Hexagonal prism / 6-sided cylinder)
    const pencilBodyGeom = new THREE.CylinderGeometry(0.18, 0.18, 2.4, 6);
    const pencilBodyMesh = new THREE.Mesh(pencilBodyGeom, matYellow);
    pencilGroup.add(pencilBodyMesh);

    // Pencil sharpened wood cone
    const pencilWoodGeom = new THREE.ConeGeometry(0.18, 0.5, 6);
    const pencilWoodMesh = new THREE.Mesh(pencilWoodGeom, matWood);
    pencilWoodMesh.position.y = 1.45;
    pencilGroup.add(pencilWoodMesh);

    // Pencil lead tip
    const pencilTipGeom = new THREE.ConeGeometry(0.08, 0.2, 6);
    const pencilTipMesh = new THREE.Mesh(pencilTipGeom, matGraphite);
    pencilTipMesh.position.y = 1.6;
    pencilGroup.add(pencilTipMesh);

    // Eraser metal band
    const bandGeom = new THREE.CylinderGeometry(0.185, 0.185, 0.2, 16);
    const bandMesh = new THREE.Mesh(bandGeom, matSilver);
    bandMesh.position.y = -1.25;
    pencilGroup.add(bandMesh);

    // Eraser rubber
    const eraserGeom = new THREE.CylinderGeometry(0.175, 0.175, 0.28, 16);
    const eraserMesh = new THREE.Mesh(eraserGeom, matCoralRed);
    eraserMesh.position.y = -1.45;
    pencilGroup.add(eraserMesh);

    pencilGroup.position.set(1.9, 0.5, 0.8);
    pencilGroup.rotation.z = -0.55;
    pencilGroup.rotation.x = 0.3;
    mainGroup.add(pencilGroup);

    // 3. 3D Graduation Cap (Toga Cilik)
    const capGroup = new THREE.Group();
    // Diamond top
    const capTopGeom = new THREE.BoxGeometry(1.5, 0.08, 1.5);
    const capMat = new THREE.MeshStandardMaterial({ color: 0x1e293b, roughness: 0.3 });
    const capTopMesh = new THREE.Mesh(capTopGeom, capMat);
    capTopMesh.rotation.y = Math.PI / 4;
    capGroup.add(capTopMesh);

    // Cap base
    const capBaseGeom = new THREE.CylinderGeometry(0.5, 0.55, 0.45, 24);
    const capBaseMesh = new THREE.Mesh(capBaseGeom, capMat);
    capBaseMesh.position.y = -0.25;
    capGroup.add(capBaseMesh);

    // Cap button & tassel
    const capButtonGeom = new THREE.SphereGeometry(0.08, 12, 12);
    const capButtonMesh = new THREE.Mesh(capButtonGeom, matGoldShiny);
    capButtonMesh.position.y = 0.08;
    capGroup.add(capButtonMesh);

    const tasselLineGeom = new THREE.CylinderGeometry(0.02, 0.02, 0.65, 8);
    const tasselLineMesh = new THREE.Mesh(tasselLineGeom, matGoldShiny);
    tasselLineMesh.position.set(0.35, -0.2, 0.35);
    tasselLineMesh.rotation.z = 0.4;
    capGroup.add(tasselLineMesh);

    capGroup.position.set(-0.2, 0.25, 0.2);
    capGroup.rotation.x = 0.18;
    mainGroup.add(capGroup);

    // 4. 3D Globe
    const globeGroup = new THREE.Group();
    const sphereGeom = new THREE.SphereGeometry(0.85, 32, 32);
    const sphereMesh = new THREE.Mesh(sphereGeom, matPastelBlue);
    globeGroup.add(sphereMesh);

    // Ring around globe
    const ringGeom = new THREE.TorusGeometry(1.15, 0.06, 16, 64);
    const ringMesh = new THREE.Mesh(ringGeom, matGoldShiny);
    ringMesh.rotation.x = Math.PI / 2.2;
    globeGroup.add(ringMesh);

    // Globe stand
    const standPoleGeom = new THREE.CylinderGeometry(0.08, 0.08, 0.6, 16);
    const standPoleMesh = new THREE.Mesh(standPoleGeom, matGoldShiny);
    standPoleMesh.position.y = -1.25;
    globeGroup.add(standPoleMesh);

    const standBaseGeom = new THREE.CylinderGeometry(0.6, 0.65, 0.15, 24);
    const standBaseMesh = new THREE.Mesh(standBaseGeom, matSkyBlue);
    standBaseMesh.position.y = -1.55;
    globeGroup.add(standBaseMesh);

    globeGroup.position.set(-2.2, 0.7, -0.4);
    globeGroup.scale.set(0.75, 0.75, 0.75);
    mainGroup.add(globeGroup);

    // 5. Floating 3D Stars
    function createStarMesh() {
        const shape = new THREE.Shape();
        const points = 5;
        const outerRadius = 0.4;
        const innerRadius = 0.2;
        for (let i = 0; i < points * 2; i++) {
            const angle = (i * Math.PI) / points;
            const radius = i % 2 === 0 ? outerRadius : innerRadius;
            const x = Math.cos(angle) * radius;
            const y = Math.sin(angle) * radius;
            if (i === 0) shape.moveTo(x, y);
            else shape.lineTo(x, y);
        }
        shape.closePath();

        const extrudeSettings = { depth: 0.12, bevelEnabled: true, bevelSegments: 3, steps: 1, bevelSize: 0.04, bevelThickness: 0.04 };
        const geom = new THREE.ExtrudeGeometry(shape, extrudeSettings);
        geom.center();
        return new THREE.Mesh(geom, matGoldShiny);
    }

    const star1 = createStarMesh();
    star1.position.set(2.4, 2.0, 0.2);
    star1.scale.set(0.9, 0.9, 0.9);
    mainGroup.add(star1);

    const star2 = createStarMesh();
    star2.position.set(-2.3, 2.3, 0.6);
    star2.scale.set(0.65, 0.65, 0.65);
    mainGroup.add(star2);

    const star3 = createStarMesh();
    star3.position.set(0.2, 2.4, -0.5);
    star3.scale.set(0.75, 0.75, 0.75);
    mainGroup.add(star3);

    // 6. Floating Candy Bubble Spheres
    const bubbles = [];
    const bubbleColors = [0x38bdf8, 0xf43f5e, 0x10b981, 0xa855f7, 0xfbbf24];
    for (let i = 0; i < 8; i++) {
        const radius = 0.15 + Math.random() * 0.22;
        const bMat = new THREE.MeshStandardMaterial({
            color: bubbleColors[i % bubbleColors.length],
            roughness: 0.1,
            metalness: 0.3,
            transparent: true,
            opacity: 0.85
        });
        const bMesh = new THREE.Mesh(new THREE.SphereGeometry(radius, 20, 20), bMat);
        const angle = (i / 8) * Math.PI * 2;
        const dist = 2.8 + Math.random() * 0.8;
        bMesh.position.set(Math.cos(angle) * dist, Math.sin(angle) * 1.8 + (Math.random() - 0.5), (Math.random() - 0.5) * 2);
        bMesh.userData = {
            baseY: bMesh.position.y,
            speed: 0.015 + Math.random() * 0.02,
            phase: Math.random() * Math.PI * 2
        };
        mainGroup.add(bMesh);
        bubbles.push(bMesh);
    }

    // Mouse Parallax & Physics Control
    let targetX = 0;
    let targetY = 0;
    let mouseX = 0;
    let mouseY = 0;
    let spinVelocityY = 0;
    let bounceOffsetY = 0;
    let bounceVelocity = 0;

    window.addEventListener('mousemove', (e) => {
        const halfW = window.innerWidth / 2;
        const halfH = window.innerHeight / 2;
        targetX = (e.clientX - halfW) / halfW;
        targetY = (e.clientY - halfH) / halfH;
    });

    // Touch support for mobile with smooth damping
    window.addEventListener('touchmove', (e) => {
        if (e.touches.length > 0) {
            const halfW = window.innerWidth / 2;
            const halfH = window.innerHeight / 2;
            targetX = (e.touches[0].clientX - halfW) / halfW;
            targetY = (e.touches[0].clientY - halfH) / halfH;
        }
    }, { passive: true });

    // Interactive Click on 3D objects with elastic bounce and spin
    const raycaster = new THREE.Raycaster();
    const mouseVector = new THREE.Vector2();

    container.addEventListener('click', (e) => {
        const rect = container.getBoundingClientRect();
        mouseVector.x = ((e.clientX - rect.left) / container.clientWidth) * 2 - 1;
        mouseVector.y = -((e.clientY - rect.top) / container.clientHeight) * 2 + 1;

        raycaster.setFromCamera(mouseVector, camera);
        const intersects = raycaster.intersectObjects(mainGroup.children, true);

        if (intersects.length > 0) {
            playPopSound(660, 'sine', 0.2);
            // Elastic impulse
            spinVelocityY += 0.25;
            bounceVelocity = 0.09;

            confetti({
                particleCount: 30,
                spread: 55,
                origin: {
                    x: e.clientX / window.innerWidth,
                    y: e.clientY / window.innerHeight
                },
                colors: ['#38bdf8', '#fbbf24', '#f43f5e', '#10b981', '#a855f7']
            });
        }
    });

    // Animation Loop with Fluid Multi-Frequency Physics
    let clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);
        const delta = Math.min(clock.getDelta(), 0.1);
        const t = clock.getElapsedTime();

        // 1. Soft Spring Mouse Tracking (No stiff linear jumps)
        mouseX += (targetX - mouseX) * 0.045;
        mouseY += (targetY - mouseY) * 0.045;

        // 2. Click Spin & Bounce Damping
        spinVelocityY *= 0.94; // smooth exponential friction
        bounceVelocity = (bounceVelocity - bounceOffsetY * 0.18) * 0.85; // damped harmonic spring
        bounceOffsetY += bounceVelocity;

        // 3. Main Group Organic Floating with Aerodynamic Banking
        const idleFloatY = Math.sin(t * 1.3) * 0.13 + Math.sin(t * 0.65) * 0.06;
        const bankZ = (targetX - mouseX) * -0.16 + Math.sin(t * 0.8) * 0.03;

        mainGroup.position.y = idleFloatY + bounceOffsetY;
        mainGroup.rotation.y += spinVelocityY;
        mainGroup.rotation.y = (mouseX * 0.35) + Math.sin(t * 0.45) * 0.07;
        mainGroup.rotation.x = (-mouseY * 0.25) + Math.cos(t * 0.4) * 0.06;
        mainGroup.rotation.z = bankZ;

        // 4. Books Floating & Gentle Wobble
        bookGroup.position.y = -0.1 + Math.sin(t * 1.1) * 0.05;
        bookGroup.rotation.z = Math.sin(t * 0.7) * 0.02;
        b3.rotation.y = -0.08 + Math.sin(t * 1.5) * 0.04;

        // 5. Zero-G Astronaut Pencil Floating
        pencilGroup.position.y = 0.5 + Math.sin(t * 1.5 + 1.2) * 0.16;
        pencilGroup.position.x = 1.9 + Math.cos(t * 1.1) * 0.06;
        pencilGroup.rotation.z = -0.55 + Math.sin(t * 1.3) * 0.12;
        pencilGroup.rotation.x = 0.3 + Math.cos(t * 1.1) * 0.08;
        pencilGroup.rotation.y += delta * 0.5;

        // 6. Graduation Cap & Dynamic Swinging Tassel
        capGroup.position.y = 0.25 + Math.sin(t * 1.4 + 0.3) * 0.1;
        capGroup.rotation.y = Math.sin(t * 0.8) * 0.18;
        capGroup.rotation.x = 0.18 + Math.cos(t * 1.1) * 0.06;

        // Tassel responds to motion physics!
        tasselLineMesh.rotation.z = 0.4 + Math.sin(t * 2.6) * 0.18 + (targetX - mouseX) * 0.4;
        tasselLineMesh.rotation.x = Math.cos(t * 2.0) * 0.12;

        // 7. Globe Orbital Spin & Bobbing
        globeGroup.position.y = 0.7 + Math.sin(t * 1.2 + 2.0) * 0.14;
        globeGroup.rotation.z = Math.sin(t * 0.8) * 0.05;
        sphereMesh.rotation.y += delta * 0.7;

        // 8. Shiny Stars Twinkling Pulse & Gentle Drift
        const s1 = 0.9 + Math.sin(t * 2.5) * 0.06;
        star1.scale.set(s1, s1, s1);
        star1.position.y = 2.0 + Math.sin(t * 1.6) * 0.12;
        star1.rotation.y += delta * 1.0;

        const s2 = 0.65 + Math.sin(t * 2.2 + 1) * 0.05;
        star2.scale.set(s2, s2, s2);
        star2.position.y = 2.3 + Math.cos(t * 1.4) * 0.1;
        star2.rotation.y -= delta * 0.9;

        star3.position.y = 2.4 + Math.sin(t * 1.7 + 2) * 0.11;
        star3.rotation.y += delta * 0.8;

        // 9. Floating Candy Bubbles
        bubbles.forEach((b) => {
            b.position.y = b.userData.baseY + Math.sin(t * 1.4 + b.userData.phase) * 0.22;
            b.position.x += Math.cos(t * 1.0 + b.userData.phase) * 0.002;
            b.rotation.x += delta * 0.3;
            b.rotation.y += delta * 0.4;
        });

        renderer.render(scene, camera);
    }

    animate();

    // Window Resize Handler
    window.addEventListener('resize', () => {
        if (!container) return;
        const newW = container.clientWidth;
        const newH = container.clientHeight;
        camera.aspect = newW / newH;
        camera.updateProjectionMatrix();
        renderer.setSize(newW, newH);
    });
}

/* ==========================================================
   3. 3D PERSPECTIVE TILT CARDS (Stable Untransformed Bounding Box)
   ========================================================== */
function initCard3DTilt() {
    const wraps = document.querySelectorAll('.card-3d-wrap');
    wraps.forEach(wrap => {
        const card = wrap.querySelector('.card-3d');
        if (!card) return;

        let targetRotX = 0;
        let targetRotY = 0;
        let currentRotX = 0;
        let currentRotY = 0;
        let isHovered = false;
        let animFrame = null;
        let wrapRect = null;

        function renderCard() {
            // Smooth spring lerp
            currentRotX += (targetRotX - currentRotX) * 0.12;
            currentRotY += (targetRotY - currentRotY) * 0.12;

            const scale = isHovered ? 1.02 : 1.0;
            card.style.transform = `perspective(1000px) rotateX(${currentRotX.toFixed(2)}deg) rotateY(${currentRotY.toFixed(2)}deg) scale3d(${scale}, ${scale}, ${scale})`;

            // Keep loop active until card has fully settled to resting state
            if (isHovered || Math.abs(currentRotX) > 0.02 || Math.abs(currentRotY) > 0.02) {
                animFrame = requestAnimationFrame(renderCard);
            } else {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                cancelAnimationFrame(animFrame);
                animFrame = null;
            }
        }

        wrap.addEventListener('mouseenter', () => {
            isHovered = true;
            // Measure against the UNTRANSFORMED wrapper to prevent jitter feedback loops!
            wrapRect = wrap.getBoundingClientRect();
            if (!animFrame) animFrame = requestAnimationFrame(renderCard);
        });

        wrap.addEventListener('mousemove', (e) => {
            if (!wrapRect) wrapRect = wrap.getBoundingClientRect();
            const x = e.clientX - wrapRect.left;
            const y = e.clientY - wrapRect.top;
            const centerX = wrapRect.width / 2;
            const centerY = wrapRect.height / 2;

            // Clamped, smooth tilt angles
            const rawRotX = ((y - centerY) / centerY) * -8.5;
            const rawRotY = ((x - centerX) / centerX) * 8.5;

            targetRotX = Math.max(-10, Math.min(10, rawRotX));
            targetRotY = Math.max(-10, Math.min(10, rawRotY));

            if (!animFrame) animFrame = requestAnimationFrame(renderCard);
        });

        wrap.addEventListener('mouseleave', () => {
            isHovered = false;
            targetRotX = 0;
            targetRotY = 0;
            wrapRect = null;
            if (!animFrame) animFrame = requestAnimationFrame(renderCard);
        });
    });
}



/* ==========================================================
   4. STATS COUNTER ON SCROLL
   ========================================================== */
function initCounterAnimation() {
    const counters = document.querySelectorAll('.stat-number');
    if (!counters.length) return;

    let hasRun = false;
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasRun) {
                hasRun = true;
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target') || '0', 10);
                    const duration = 1800;
                    const stepTime = 25;
                    const steps = duration / stepTime;
                    const increment = target / steps;
                    let current = 0;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.innerText = target.toLocaleString('id-ID');
                            clearInterval(timer);
                        } else {
                            counter.innerText = Math.floor(current).toLocaleString('id-ID');
                        }
                    }, stepTime);
                });
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.getElementById('stats-section');
    if (statsSection) observer.observe(statsSection);
}

/* ==========================================================
   5. PPDB ONLINE INTERACTIVE FORM & CELEBRATION MODAL
   ========================================================== */
function initPPDBForm() {
    const ppdbForm = document.getElementById('ppdb-form');
    const modal = document.getElementById('ppdb-success-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const regNumberSpan = document.getElementById('registration-number');
    const applicantNameSpan = document.getElementById('applicant-name-display');

    if (!ppdbForm) return;

    ppdbForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const studentName = document.getElementById('student_name')?.value || 'Calon Siswa';
        const parentName = document.getElementById('parent_name')?.value || 'Orang Tua';
        const track = document.getElementById('admission_track')?.value || 'Reguler';

        // Generate Registration code
        const randomCode = 'PPDB-' + new Date().getFullYear() + '-' + Math.floor(10000 + Math.random() * 90000);

        if (regNumberSpan) regNumberSpan.innerText = randomCode;
        if (applicantNameSpan) applicantNameSpan.innerText = studentName;

        // Sound effect
        playFanfareSound();

        // Confetti explosion
        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 },
            colors: ['#0284c7', '#f59e0b', '#10b981', '#f43f5e', '#a855f7']
        });

        setTimeout(() => {
            confetti({
                particleCount: 50,
                angle: 60,
                spread: 55,
                origin: { x: 0 }
            });
            confetti({
                particleCount: 50,
                angle: 120,
                spread: 55,
                origin: { x: 1 }
            });
        }, 300);

        // Show modal
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        ppdbForm.reset();
    });

    if (closeModalBtn && modal) {
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    }

    // Modal background click close
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    }
}

/* ==========================================================
   6. FACILITY & GALLERY FILTER TABS
   ========================================================== */
function initFacilityTabs() {
    const tabButtons = document.querySelectorAll('.facility-tab-btn');
    const items = document.querySelectorAll('.facility-card');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');

            tabButtons.forEach(b => {
                b.classList.remove('bg-sky-500', 'text-white', 'shadow-lg');
                b.classList.add('bg-white', 'text-slate-700');
            });
            btn.classList.add('bg-sky-500', 'text-white', 'shadow-lg');
            btn.classList.remove('bg-white', 'text-slate-700');

            items.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                if (category === 'all' || itemCat === category) {
                    item.style.display = 'block';
                    item.classList.add('animate-fade-in');
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

/* ==========================================================
   7. FAQ ACCORDION
   ========================================================== */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (btn && content) {
            btn.addEventListener('click', () => {
                const isExpanded = content.classList.contains('hidden');

                // Close other items
                faqItems.forEach(otherItem => {
                    const otherContent = otherItem.querySelector('.faq-content');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    if (otherContent) otherContent.classList.add('hidden');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                });

                if (isExpanded) {
                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                    playPopSound(500, 'sine', 0.08);
                } else {
                    content.classList.add('hidden');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        }
    });
}

/* ==========================================================
   8. MOBILE MENU TOGGLE
   ========================================================== */
function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            playPopSound(480, 'sine', 0.1);
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }
}

/* ==========================================================
   9. MULTI-STEP REGISTRATION WIZARD (PPDB BERTAHAP)
   ========================================================== */
function initMultiStepForm() {
    const multiStepForm = document.getElementById('multi-step-form');
    if (!multiStepForm) return;

    let currentStep = 1;
    const totalSteps = 4;
    const progressBar = document.getElementById('step-progress-bar');

    // Navigation buttons
    const btnToStep2 = document.getElementById('btn-to-step-2');
    const btnBackToStep1 = document.getElementById('btn-back-to-step-1');
    const btnToStep3 = document.getElementById('btn-to-step-3');
    const btnBackToStep2 = document.getElementById('btn-back-to-step-2');
    const btnToStep4 = document.getElementById('btn-to-step-4');
    const btnBackToStep3 = document.getElementById('btn-back-to-step-3');
    const btnPrintCard = document.getElementById('btn-print-card');

    // State for uploaded files
    const uploadedFiles = {
        foto: null,
        fotoDataUrl: '',
        akta: null,
        kk: null,
        tk: null,
        prestasi: null
    };

    // Update UI for Steps
    function updateStepperUI(step) {
        currentStep = step;

        // Progress bar percentage
        const progressWidth = (step / totalSteps) * 100;
        if (progressBar) progressBar.style.width = `${progressWidth}%`;

        // Update step indicators
        for (let i = 1; i <= totalSteps; i++) {
            const indicator = document.getElementById(`step-indicator-${i}`);
            if (!indicator) continue;

            const circle = indicator.querySelector('.step-circle');
            const label = indicator.querySelector('.step-label');

            if (i < step) {
                // Completed Step
                circle.className = 'step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-emerald-500 text-white font-heading font-bold text-sm sm:text-base flex items-center justify-center shadow-md shadow-emerald-400/30 transition-all duration-300';
                circle.innerHTML = '<i data-lucide="check" class="w-5 h-5"></i>';
                label.className = 'step-label font-heading text-[11px] sm:text-xs font-bold text-emerald-700 mt-2 truncate';
            } else if (i === step) {
                // Active Step
                circle.className = 'step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-sky-500 text-white font-heading font-bold text-sm sm:text-base flex items-center justify-center shadow-md shadow-sky-400/40 ring-4 ring-sky-100 transition-all duration-300';
                circle.innerHTML = `<span>${i}</span>`;
                label.className = 'step-label font-heading text-[11px] sm:text-xs font-bold text-sky-700 mt-2 truncate';
            } else {
                // Future Step
                circle.className = 'step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-slate-100 text-slate-400 font-heading font-bold text-sm sm:text-base flex items-center justify-center border border-slate-200 transition-all duration-300';
                circle.innerHTML = `<span>${i}</span>`;
                label.className = 'step-label font-heading text-[11px] sm:text-xs font-semibold text-slate-400 mt-2 truncate';
            }
        }

        // Show active panel, hide others
        for (let i = 1; i <= totalSteps; i++) {
            const panel = document.getElementById(`step-panel-${i}`);
            if (panel) {
                if (i === step) {
                    panel.classList.remove('hidden');
                } else {
                    panel.classList.add('hidden');
                }
            }
        }

        createIcons({ icons });

        // Smooth scroll to top of wizard
        window.scrollTo({
            top: multiStepForm.offsetTop - 120,
            behavior: 'smooth'
        });
    }

    // Step 1 Validation
    function validateStep1() {
        let isValid = true;
        const requiredFields = [
            'step1_nama_lengkap',
            'step1_nama_panggilan',
            'step1_nik',
            'step1_tempat_lahir',
            'step1_tanggal_lahir',
            'step1_jenis_kelamin',
            'step1_alamat'
        ];

        requiredFields.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;
            const errorSpan = el.parentElement.querySelector('.error-msg');
            if (!el.value.trim()) {
                isValid = false;
                el.classList.add('border-rose-500', 'bg-rose-50/20');
                if (errorSpan) errorSpan.classList.remove('hidden');
            } else {
                el.classList.remove('border-rose-500', 'bg-rose-50/20');
                if (errorSpan) errorSpan.classList.add('hidden');
            }
        });

        // NIK digit check (should be 16 digits)
        const nikEl = document.getElementById('step1_nik');
        if (nikEl && nikEl.value.trim().length !== 16) {
            isValid = false;
            nikEl.classList.add('border-rose-500');
            const err = nikEl.parentElement.querySelector('.error-msg');
            if (err) {
                err.innerText = 'NIK harus berjumlah 16 digit angka.';
                err.classList.remove('hidden');
            }
        }

        return isValid;
    }

    // Step 2 Validation
    function validateStep2() {
        let isValid = true;
        const requiredFields = [
            'step2_nama_ayah',
            'step2_pekerjaan_ayah',
            'step2_nama_ibu',
            'step2_pekerjaan_ibu',
            'step2_whatsapp'
        ];

        requiredFields.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;
            const errorSpan = el.parentElement.querySelector('.error-msg');
            if (!el.value.trim()) {
                isValid = false;
                el.classList.add('border-rose-500', 'bg-rose-50/20');
                if (errorSpan) errorSpan.classList.remove('hidden');
            } else {
                el.classList.remove('border-rose-500', 'bg-rose-50/20');
                if (errorSpan) errorSpan.classList.add('hidden');
            }
        });

        // WhatsApp number validation (at least 9 digits)
        const waEl = document.getElementById('step2_whatsapp');
        if (waEl && waEl.value.replace(/\D/g, '').length < 9) {
            isValid = false;
            waEl.classList.add('border-rose-500');
            const err = waEl.parentElement.querySelector('.error-msg');
            if (err) {
                err.innerText = 'Nomor WhatsApp minimal 9 digit.';
                err.classList.remove('hidden');
            }
        }

        return isValid;
    }

    // Step 3 Validation (Required Document Uploads)
    function validateStep3() {
        let isValid = true;

        // Check Foto
        const fotoInput = document.getElementById('file_foto');
        const fotoErr = fotoInput?.closest('.flex-grow')?.querySelector('.error-msg');
        if (!uploadedFiles.foto) {
            isValid = false;
            if (fotoErr) fotoErr.classList.remove('hidden');
        } else {
            if (fotoErr) fotoErr.classList.add('hidden');
        }

        // Check Akta
        const aktaInput = document.getElementById('file_akta');
        const aktaErr = document.querySelector('#step-panel-3 [data-target-name="akta-file-info"]')?.closest('.p-5')?.querySelector('.error-msg');
        if (!uploadedFiles.akta) {
            isValid = false;
            if (aktaErr) aktaErr.classList.remove('hidden');
        } else {
            if (aktaErr) aktaErr.classList.add('hidden');
        }

        // Check KK
        const kkInput = document.getElementById('file_kk');
        const kkErr = document.querySelector('#step-panel-3 [data-target-name="kk-file-info"]')?.closest('.p-5')?.querySelector('.error-msg');
        if (!uploadedFiles.kk) {
            isValid = false;
            if (kkErr) kkErr.classList.remove('hidden');
        } else {
            if (kkErr) kkErr.classList.add('hidden');
        }

        return isValid;
    }

    // Format file size
    function formatBytes(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }

    // File Input change handlers
    function setupFileUploads() {
        const fileInputs = [
            { id: 'file_foto', key: 'foto', infoId: 'foto-file-info', previewId: 'preview-foto', placeholderId: 'preview-placeholder' },
            { id: 'file_akta', key: 'akta', infoId: 'akta-file-info' },
            { id: 'file_kk', key: 'kk', infoId: 'kk-file-info' },
            { id: 'file_tk', key: 'tk', infoId: 'tk-file-info' },
            { id: 'file_prestasi', key: 'prestasi', infoId: 'prestasi-file-info' }
        ];

        fileInputs.forEach(item => {
            const input = document.getElementById(item.id);
            const info = document.getElementById(item.infoId);

            if (input && info) {
                input.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (!file) return;

                    // Size check: 2.5 MB max
                    if (file.size > 2.5 * 1024 * 1024) {
                        alert(`File ${file.name} terlalu besar (${formatBytes(file.size)}). Maksimal ukuran file adalah 2.5 MB.`);
                        input.value = '';
                        return;
                    }

                    uploadedFiles[item.key] = file;
                    info.innerHTML = `✅ <strong class="text-emerald-700">${file.name}</strong> (${formatBytes(file.size)})`;

                    // Handle photo preview with FileReader
                    if (item.key === 'foto' && item.previewId) {
                        const reader = new FileReader();
                        reader.onload = (re) => {
                            uploadedFiles.fotoDataUrl = re.target.result;
                            const previewImg = document.getElementById(item.previewId);
                            const placeholder = document.getElementById(item.placeholderId);
                            const printImg = document.getElementById('print-foto-display');

                            if (previewImg) {
                                previewImg.src = re.target.result;
                                previewImg.classList.remove('hidden');
                            }
                            if (placeholder) {
                                placeholder.classList.add('hidden');
                            }
                            if (printImg) {
                                printImg.src = re.target.result;
                            }
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    }

    setupFileUploads();

    // Populate Step 4 Review
    function populateReview() {
        const jalur = document.querySelector('input[name="jalur_pendaftaran"]:checked')?.value || 'Reguler';
        const nama = document.getElementById('step1_nama_lengkap')?.value || '-';
        const panggilan = document.getElementById('step1_nama_panggilan')?.value || '-';
        const nik = document.getElementById('step1_nik')?.value || '-';
        const tempat = document.getElementById('step1_tempat_lahir')?.value || '';
        const tanggal = document.getElementById('step1_tanggal_lahir')?.value || '';
        const gender = document.getElementById('step1_jenis_kelamin')?.value || '-';
        const agama = document.getElementById('step1_agama')?.value || '-';
        const alamat = document.getElementById('step1_alamat')?.value || '-';

        const ayah = document.getElementById('step2_nama_ayah')?.value || '-';
        const jobAyah = document.getElementById('step2_pekerjaan_ayah')?.value || '-';
        const ibu = document.getElementById('step2_nama_ibu')?.value || '-';
        const jobIbu = document.getElementById('step2_pekerjaan_ibu')?.value || '-';
        const wa = document.getElementById('step2_whatsapp')?.value || '-';
        const penghasilan = document.getElementById('step2_penghasilan')?.value || '-';

        // Set Review elements
        const reviewJalur = document.getElementById('review_jalur');
        if (reviewJalur) reviewJalur.innerText = 'Jalur: ' + jalur;

        document.getElementById('review_nama_siswa').innerText = nama;
        document.getElementById('review_panggilan').innerText = panggilan;
        document.getElementById('review_nik').innerText = nik;
        document.getElementById('review_ttl').innerText = `${tempat}, ${tanggal}`;
        document.getElementById('review_gender').innerText = gender;
        document.getElementById('review_agama').innerText = agama;
        document.getElementById('review_alamat').innerText = alamat;

        document.getElementById('review_ayah').innerText = ayah;
        document.getElementById('review_pekerjaan_ayah').innerText = jobAyah;
        document.getElementById('review_ibu').innerText = ibu;
        document.getElementById('review_pekerjaan_ibu').innerText = jobIbu;
        document.getElementById('review_wa').innerText = wa;
        document.getElementById('review_penghasilan').innerText = penghasilan;

        // Review Documents
        const docFoto = document.getElementById('review_doc_foto');
        if (docFoto) docFoto.innerText = uploadedFiles.foto ? `Siap (${uploadedFiles.foto.name})` : 'Belum diunggah';

        const docAkta = document.getElementById('review_doc_akta');
        if (docAkta) docAkta.innerText = uploadedFiles.akta ? `Siap (${uploadedFiles.akta.name})` : 'Belum diunggah';

        const docKk = document.getElementById('review_doc_kk');
        if (docKk) docKk.innerText = uploadedFiles.kk ? `Siap (${uploadedFiles.kk.name})` : 'Belum diunggah';
    }

    // Step 1 -> Step 2
    if (btnToStep2) {
        btnToStep2.addEventListener('click', () => {
            if (validateStep1()) {
                updateStepperUI(2);
            }
        });
    }

    // Step 2 -> Step 1
    if (btnBackToStep1) {
        btnBackToStep1.addEventListener('click', () => {
            updateStepperUI(1);
        });
    }

    // Step 2 -> Step 3
    if (btnToStep3) {
        btnToStep3.addEventListener('click', () => {
            if (validateStep2()) {
                updateStepperUI(3);
            }
        });
    }

    // Step 3 -> Step 2
    if (btnBackToStep2) {
        btnBackToStep2.addEventListener('click', () => {
            updateStepperUI(2);
        });
    }

    // Step 3 -> Step 4
    if (btnToStep4) {
        btnToStep4.addEventListener('click', () => {
            if (validateStep3()) {
                populateReview();
                updateStepperUI(4);
            }
        });
    }

    // Step 4 -> Step 3
    if (btnBackToStep3) {
        btnBackToStep3.addEventListener('click', () => {
            updateStepperUI(3);
        });
    }

    // Final Form Submission (Step 4)
    multiStepForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const consent = document.getElementById('consent_checkbox');
        const consentError = document.getElementById('consent-error');

        if (!consent || !consent.checked) {
            if (consentError) consentError.classList.remove('hidden');
            return;
        } else {
            if (consentError) consentError.classList.add('hidden');
        }

        // Send Form Data to Server
        const submitBtn = document.getElementById('btn-submit-registration');
        const originalBtnHtml = submitBtn ? submitBtn.innerHTML : '';
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span class="inline-flex items-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Menyimpan data pendaftaran...</span>`;
        }

        const formData = new FormData();
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        // Student Data
        formData.append('jalur_pendaftaran', document.querySelector('input[name="jalur_pendaftaran"]:checked')?.value || 'Reguler');
        formData.append('nama_lengkap', document.getElementById('step1_nama_lengkap')?.value || '');
        formData.append('nama_panggilan', document.getElementById('step1_nama_panggilan')?.value || '');
        formData.append('nik', document.getElementById('step1_nik')?.value || '');
        formData.append('tempat_lahir', document.getElementById('step1_tempat_lahir')?.value || '');
        formData.append('tanggal_lahir', document.getElementById('step1_tanggal_lahir')?.value || '');
        formData.append('jenis_kelamin', document.getElementById('step1_jenis_kelamin')?.value || '');
        formData.append('agama', document.getElementById('step1_agama')?.value || 'Islam');
        formData.append('alamat', document.getElementById('step1_alamat')?.value || '');

        // Parent Data
        formData.append('nama_ayah', document.getElementById('step2_nama_ayah')?.value || '');
        formData.append('pekerjaan_ayah', document.getElementById('step2_pekerjaan_ayah')?.value || '');
        formData.append('nama_ibu', document.getElementById('step2_nama_ibu')?.value || '');
        formData.append('pekerjaan_ibu', document.getElementById('step2_pekerjaan_ibu')?.value || '');
        formData.append('whatsapp', document.getElementById('step2_whatsapp')?.value || '');
        formData.append('penghasilan', document.getElementById('step2_penghasilan')?.value || '');

        // Uploaded Files
        if (uploadedFiles.foto) formData.append('file_foto', uploadedFiles.foto);
        if (uploadedFiles.akta) formData.append('file_akta', uploadedFiles.akta);
        if (uploadedFiles.kk) formData.append('file_kk', uploadedFiles.kk);
        if (uploadedFiles.tk) formData.append('file_tk', uploadedFiles.tk);
        if (uploadedFiles.prestasi) formData.append('file_prestasi', uploadedFiles.prestasi);

        fetch('/pendaftaran', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(result => {
            const serverRegNumber = result.data?.nomor_registrasi || `PPDB-${new Date().getFullYear()}-${Math.floor(10000 + Math.random() * 90000)}`;
            const studentName = document.getElementById('step1_nama_lengkap')?.value || 'Calon Siswa';
            const studentPanggilan = document.getElementById('step1_nama_panggilan')?.value || '-';
            const studentNik = document.getElementById('step1_nik')?.value || '-';
            const studentTtl = `${document.getElementById('step1_tempat_lahir')?.value || ''}, ${document.getElementById('step1_tanggal_lahir')?.value || ''}`;
            const studentGender = document.getElementById('step1_jenis_kelamin')?.value || '-';
            const studentAlamat = document.getElementById('step1_alamat')?.value || '-';
            const jalur = document.querySelector('input[name="jalur_pendaftaran"]:checked')?.value || 'Reguler';

            const ayah = document.getElementById('step2_nama_ayah')?.value || '-';
            const ibu = document.getElementById('step2_nama_ibu')?.value || '-';
            const wa = document.getElementById('step2_whatsapp')?.value || '-';

            // Populate Printable Card
            const printRegNumber = document.getElementById('print-reg-number');
            if (printRegNumber) printRegNumber.innerText = serverRegNumber;

            const printTimestamp = document.getElementById('print-timestamp');
            if (printTimestamp) {
                printTimestamp.innerText = result.data?.created_at || (new Date().toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                }) + ' WIB');
            }

            const printJalur = document.getElementById('print-jalur');
            if (printJalur) printJalur.innerText = jalur;

            document.getElementById('print-nama').innerText = studentName;
            document.getElementById('print-panggilan').innerText = studentPanggilan;
            document.getElementById('print-nik').innerText = studentNik;
            document.getElementById('print-ttl').innerText = studentTtl;
            document.getElementById('print-gender').innerText = studentGender;
            document.getElementById('print-alamat').innerText = studentAlamat;

            document.getElementById('print-ayah').innerText = ayah;
            document.getElementById('print-ibu').innerText = ibu;
            document.getElementById('print-wa').innerText = wa;

            // Update WhatsApp Confirmation link
            const waConfirmBtn = document.getElementById('wa-confirm-btn');
            if (waConfirmBtn) {
                const waMsg = encodeURIComponent(
                    `Halo Panitia PPDB SD Negeri 1 Suka Cita Purwokerto,\n\nSaya telah berhasil mendaftarkan calon siswa secara online:\n` +
                    `• No. Registrasi: ${serverRegNumber}\n` +
                    `• Nama Siswa: ${studentName}\n` +
                    `• Jalur: ${jalur}\n` +
                    `• No. WA Orang Tua: ${wa}\n\n` +
                    `Mohon informasi mengenai jadwal observasi ramah anak selanjutnya. Terima kasih!`
                );
                waConfirmBtn.href = `https://wa.me/6281234567890?text=${waMsg}`;
            }

            // Hide form & stepper, show result card
            multiStepForm.classList.add('hidden');
            const successContainer = document.getElementById('registration-success-container');
            if (successContainer) successContainer.classList.remove('hidden');

            // Play sound & confetti
            playFanfareSound();
            confetti({
                particleCount: 120,
                spread: 80,
                origin: { y: 0.6 },
                colors: ['#0284c7', '#f59e0b', '#10b981', '#f43f5e', '#8b5cf6']
            });

            // Scroll to success card
            window.scrollTo({
                top: successContainer.offsetTop - 80,
                behavior: 'smooth'
            });
        })
        .catch(error => {
            console.error('Submission error:', error);
            let errMsg = 'Terjadi kesalahan saat menyimpan formulir pendaftaran.';
            if (error && error.errors) {
                const keys = Object.keys(error.errors);
                errMsg += '\n' + keys.map(k => error.errors[k].join(', ')).join('\n');
            } else if (error && error.message) {
                errMsg += ' ' + error.message;
            }
            alert(errMsg);
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
            }
        });
    });

    // Print Registration Card
    if (btnPrintCard) {
        btnPrintCard.addEventListener('click', () => {
            window.print();
        });
    }
}


