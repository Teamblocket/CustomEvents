<?php

namespace CustomEvents\Events;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\event\Cancellable;
use pocketmine\plugin\Plugin;

/**
 * Class CustomEventAPI
 * @package CustomEvents\Events
 */
class CustomEventAPI extends PluginEvent implements Cancellable{

	/** @var Plugin */
	protected $plugin;

	/**
	 * CustomEventAPI constructor.
	 * @param Plugin $plugin
	 */
	public function __construct (Plugin $plugin){
		parent::__construct($plugin);
	}
}
