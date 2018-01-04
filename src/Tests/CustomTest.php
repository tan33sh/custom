<?php

namespace Drupal\custom\Tests;

use Drupal\simpletest\WebTestBase;

class CustomTest extends WebTestBase {

	// Modules to Install
	public static $modules = ['custom', 'node'];

	// Tests if 'custom' returns a 200.
	public function testCustomRouterURLIsAccessible() {
		$this->drupalGet('custom');
		$this->assertResponse(200, 'User is able to access the URL');
	}

	// Tests if there is text present on the page.
	public function testCustomText{
		$this->drupalGet('custom');
		$this->assertText('Functional testing of this module.', 'Message is shown');
	}
}