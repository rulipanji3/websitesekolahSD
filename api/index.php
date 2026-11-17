<?php

// Pastikan direktori storage sementara di /tmp tersedia pada environment read-only Vercel
foreach ([
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
] as $dir) {
    if (! is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Teruskan semua request serverless Vercel ke entry point publik Laravel
require __DIR__.'/../public/index.php';
