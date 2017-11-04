<?php

namespace CustomEvents;

use CustomEvents\Events\TestCustomEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getLogger()->notice('CustomEvents Plugin Enabled and Created by Angel');
    $this->callCustomTestEvent();
  }
  
  public function callCustomTestEvent(){
    $this->getServer()->getPluginManager()->callEvent($ev = new TestCustomEvent($this));
  }
  
  public function onTest(TestCustomEvent $event){
    $event->doTest();
  }
}
