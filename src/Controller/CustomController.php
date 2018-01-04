<?php 

namespace Drupal\custom\Controller;

class CustomController {
	public function text() {
		return array(
			'#title' => "This is a custom module",
			'#markup' => 'Functional testing of this module.'
		);

	}
}