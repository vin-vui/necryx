<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormHoneypotTest extends TestCase
{
    /**
     * Test that contact form rejects submissions when honeypot field is filled
     */
    public function test_contact_form_rejects_honeypot_submissions(): void
    {
        $response = $this->post(route('contact-form'), [
            'name' => 'Test Name',
            'lastname' => 'Test Lastname',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'humanmessage' => 'Test message',
            'rgpdConsentContact' => 'on',
            'honeypot' => 'filled by bot', // This should trigger rejection
        ]);

        // Should redirect back without success message
        $response->assertRedirect();
        $response->assertSessionMissing('flash.banner');
    }

    /**
     * Test that contact form accepts valid submissions without honeypot field
     */
    public function test_contact_form_accepts_valid_submissions(): void
    {
        // Mock the mail sending to avoid actual email sending during tests
        \Mail::fake();

        $response = $this->post(route('contact-form'), [
            'name' => 'Test Name',
            'lastname' => 'Test Lastname',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'humanmessage' => 'Test message',
            'rgpdConsentContact' => 'on',
            'honeypot' => '', // Empty honeypot should be fine
        ]);

        // Should redirect back with success message
        $response->assertRedirect();
        $response->assertSessionHas('flash.banner', 'Email envoyé avec succès !');
        $response->assertSessionHas('flash.bannerStyle', 'success');
    }

    /**
     * Test that concepts page loads successfully and contains the form
     */
    public function test_concepts_page_contains_honeypot_field(): void
    {
        $response = $this->get(route('concepts'));

        $response->assertStatus(200);
        $response->assertSee('name="honeypot"', false);
        $response->assertSee('style="display: none', false);
    }
}