<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_renders_successfully(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Admin PPDB');
        $response->assertSee('SD Negeri 1 Suka Cita Purwokerto');
    }

    public function test_authenticated_admin_is_redirected_to_dashboard_from_login_page(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@sukacita.sch.id',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->actingAs($admin)->get('/admin/login');
        $response->assertRedirect('/admin/pendaftaran');
    }

    public function test_login_validation_fails_with_empty_inputs(): void
    {
        $response = $this->post('/admin/login', [
            'email' => '',
            'password' => '',
        ]);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    public function test_login_fails_with_invalid_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@sukacita.sch.id',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/admin/login', [
            'email' => 'admin@sukacita.sch.id',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_succeeds_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@sukacita.sch.id',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/admin/login', [
            'email' => 'admin@sukacita.sch.id',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/admin/pendaftaran');
        $response->assertSessionHas('success');
        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_can_logout_and_session_is_invalidated(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@sukacita.sch.id',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->actingAs($user)->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $response->assertSessionHas('info');
        $this->assertGuest();
    }
}
