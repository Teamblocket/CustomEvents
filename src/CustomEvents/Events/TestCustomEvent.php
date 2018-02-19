<?php

namespace CustomEvents\Events;

use CustomEvents\Main;

/**
 * Class TestCustomEvent
 * @package CustomEvents\Events
 */
class TestCustomEvent extends CustomEventAPI{

	/** @var null  */
	public static $handlerList = null;

	/**
	 * TestCustomEvent constructor.
	 * @param Main $plugin
	 */
	public function __construct(Main $plugin){
		parent::__construct($plugin);
		$this->plugin = $plugin;
	}

	public function doTest() : void{
		$this->plugin->getServer()->getLogger()->notice('TestCustomEvent fired!');
	}
}
