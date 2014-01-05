<?php

class IntegrationTest extends WP_UnitTestCase
{
    public function testCurrentThemeIsActive()
    {
        $this->assertEquals('wp-skeleton-theme', get_option('current_theme'));
    }
}