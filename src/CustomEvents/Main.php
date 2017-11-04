<?php

namespace CustomEvents;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->notice('CustomEvents Plugin Enabled and Created by Angel');
  }
  
  public function testCustomEvent(){
    $this->getServer()->getPluginManager()->callEvent($ev = new TestCustomEvent($this));
  }
}
