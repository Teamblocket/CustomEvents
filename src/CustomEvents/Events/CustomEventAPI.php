<?php

namespace CustomEvents\Events;

use CustomEvents\Main;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\event\Cancellable;

class CustomEventAPI extends PluginEvent implements Cancellable{ 
	
	public function __construct(Main $plugin){
		parent::__construct($plugin);
	}
}
