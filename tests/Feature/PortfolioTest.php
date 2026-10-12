<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that portfolio homepage loads successfully.
     */
    public function test_portfolio_page_can_be_rendered(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Mijanur Rahman');
        $response->assertSee('Mobile &amp; Flutter Application Engineer', false);
        $response->assertSee('PulseFlow - Fitness &amp; Habit Tracker', false);
    }

    /**
     * Test submitting a valid contact message.
     */
    public function test_user_can_submit_contact_form(): void
    {
        $payload = [
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'subject' => 'New Mobile Project',
            'message' => 'Hello Mijanur, we would love to collaborate on a new Flutter mobile app.',
        ];

        $response = $this->post(route('contact.submit'), $payload);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'subject' => 'New Mobile Project',
        ]);
    }

    /**
     * Test submitting an invalid contact message fails validation.
     */
    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => '',
            'email' => 'not-an-email',
            'message' => 'short',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
