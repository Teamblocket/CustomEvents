<?php

namespace CustomEvents;

use CustomEvents\Events\TestCustomEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

/**
 * Class Main
 * @package CustomEvents
 */
class Main extends PluginBase implements Listener{

	public function onEnable (){
		$this->getServer()->getLogger()->notice('CustomEvents Plugin Enabled and Created by Angel');
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getPluginManager()->callEvent($ev = new TestCustomEvent($this));
	}

	/**
	 * @param TestCustomEvent $event
	 */
	public function onTest(TestCustomEvent $event){
		$event->doTest();
		$this->getServer()->getLogger()->notice('It works!');
	}
}
