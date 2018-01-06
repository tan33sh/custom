<?php

namespace Drupal\custom\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provide some basic tests for our custom module.
 *
 * @group custom
 */
class CustomTest extends WebTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = ['custom', 'node'];

  /**
   * Tests that 'custom' returns a 200.
   */
  public function testCustomRouterUrlIsAccessible() {
    $this->drupalGet('custom');
    $this->assertResponse(200, 'User is able to access the URL');
  }

  /**
   * Tests that the form has some text.
   */
  public function testCustomText() {
    $this->drupalGet('custom');
    $this->assertText('Functional testing of this module.', 'Message is shown');
  }

}
