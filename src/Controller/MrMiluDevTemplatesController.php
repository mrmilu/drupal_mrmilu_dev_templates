<?php

namespace Drupal\mrmilu_dev_templates\Controller;

use Drupal\Core\Controller\ControllerBase;

class MrMiluDevTemplatesController extends ControllerBase {

  public function render() {
    return ['#theme' => 'dev_template'];
  }
}