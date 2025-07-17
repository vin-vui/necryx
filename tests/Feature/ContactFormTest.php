<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_submission_with_valid_data()
    {
        Mail::fake();

        $formData = [
            'name' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'humanmessage' => 'This is a test message',
            'rgpdConsentContact' => 'on',
        ];

        $response = $this->post(route('contact-form'), $formData);

        $response->assertRedirect();
        $response->assertSessionHas('flash.banner', 'Email envoyé avec succès !');
        $response->assertSessionHas('flash.bannerStyle', 'success');

        Mail::assertSent(ContactForm::class);
    }

    public function test_contact_form_rejects_spam_when_honeypot_is_filled()
    {
        Mail::fake();

        $formData = [
            'name' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'humanmessage' => 'This is a test message',
            'rgpdConsentContact' => 'on',
            'honeypot' => 'spam content', // This should trigger spam detection
        ];

        $response = $this->post(route('contact-form'), $formData);

        $response->assertRedirect();
        $response->assertSessionMissing('flash.banner');

        Mail::assertNothingSent();
    }

    public function test_contact_form_validates_required_fields()
    {
        $response = $this->post(route('contact-form'), []);

        $response->assertSessionHasErrors([
            'name',
            'lastname',
            'email',
            'humanmessage',
            'rgpdConsentContact',
        ]);
    }

    public function test_contact_form_validates_email_format()
    {
        $formData = [
            'name' => 'John',
            'lastname' => 'Doe',
            'email' => 'invalid-email',
            'humanmessage' => 'This is a test message',
            'rgpdConsentContact' => 'on',
        ];

        $response = $this->post(route('contact-form'), $formData);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_honeypot_field_exists_in_form()
    {
        $response = $this->get(route('concepts'));

        $response->assertStatus(200);
        $response->assertSee('name="honeypot"', false);
        $response->assertSee('style="display: none;', false);
    }
}