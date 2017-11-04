<?php

namespace CustomEvents\Events;

use CustomEvents\Main;

class TestCustomEvent extends CustomEventAPI{
  
  private $plugin;
  
  public function __construct(Main $plugin){
    $this->plugin = $plugin;
  }
  
  public function doTest(){
    $this->plugin->getServer()->getLogger()->notice('TestCustomEvent fired!');
  }
}
