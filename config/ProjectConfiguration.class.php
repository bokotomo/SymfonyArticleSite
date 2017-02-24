<?php

require_once '/Applications/MAMP/htdocs/symfony-1.4.9/symfony-1.4.9/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
