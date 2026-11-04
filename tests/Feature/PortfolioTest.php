<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_home_page_returns_successful_response(): void
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_home_page_renders_every_section(): void
    {
        $response = $this->get('/');

        foreach (['home', 'about', 'education', 'certificates', 'projects', 'contact'] as $section) {
            $response->assertSee('id="'.$section.'"', false);
        }
    }

    public function test_home_page_renders_navigation_features(): void
    {
        $response = $this->get('/');

        $response->assertSee('id="menu-btn"', false)
            ->assertSee('id="mobile-menu"', false)
            ->assertSee('data-nav-link="projects"', false);
    }

    public function test_home_page_renders_portfolio_content(): void
    {
        $response = $this->get('/');

        $response->assertSee('Celyn Lisha Bueno')
            ->assertSee('Bangued-Ka-Fuel')
            ->assertSee('Years of Experience', false)
            ->assertSee('Certifications Earned', false)
            ->assertSee('Introduction to Modern AI')
            ->assertSee('GitHub Profile', false);
    }

    public function test_certificates_are_ordered_from_latest_to_oldest(): void
    {
        $html = $this->get('/')->getContent();

        $latest = strpos($html, 'Introduction to Modern AI');
        $second = strpos($html, 'Understanding Startups &amp; Getting Your Idea Ready');
        $oldest = strpos($html, 'Empowering the Next Gen');

        $this->assertNotFalse($latest);
        $this->assertNotFalse($second);
        $this->assertNotFalse($oldest);
        $this->assertTrue($latest < $second);
        $this->assertTrue($second < $oldest);
    }
}
