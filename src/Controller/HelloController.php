<?php

namespace Drupal\hello\Controller;

class HelloController {

  /**
   * Constructs a page with descriptive content.
   *
   * Our router maps this method to the path 'hello/demo'.
   */
  public function demo() {
    $build = array(
      '#markup' => t('<p>This is simple hello world greating module.</p>',
      ),
    );

    return $build;
  }
}