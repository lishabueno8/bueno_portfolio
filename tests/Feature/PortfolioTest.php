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

        foreach (['home', 'about', 'education', 'projects', 'contact'] as $section) {
            $response->assertSee('id="'.$section.'"', false);
        }
    }

    public function test_home_page_renders_navigation_features(): void
    {
        $response = $this->get('/');

        $response->assertSee('id="theme-toggle"', false)
            ->assertSee('id="menu-btn"', false)
            ->assertSee('id="mobile-menu"', false)
            ->assertSee('data-nav-link="projects"', false);
    }

    public function test_home_page_renders_portfolio_content(): void
    {
        $response = $this->get('/');

        $response->assertSee('Alex Bueno')
            ->assertSee('Years of Experience', false)
            ->assertSee('Projects Completed', false)
            ->assertSee('Certifications Earned', false)
            ->assertSee('Certified Laravel Developer', false)
            ->assertSee('View Source', false)
            ->assertSee('GitHub Profile', false);
    }
}
