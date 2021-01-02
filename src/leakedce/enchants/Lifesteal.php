<?php

declare(strict_types=1);

namespace leakedce\enchants;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\entity\{EntityDamageEvent, EntityDamageByEntityEvent};

use leakedce\main;

class Lifesteal implements Listener{

	public function __construct(){
		Main::get()->getServer()->getPluginManager()->registerEvents($this, Main::get());
	}
}
