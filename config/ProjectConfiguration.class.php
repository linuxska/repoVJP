<?php

require_once '/usr/lib/php/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
  	sfConfig::set('sf_upload_dir','uploads');
    $this->enablePlugins('sfPropelPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfGuardExtraPlugin');
    $this->enablePlugins('sfGuardPlugin');
  }
}
