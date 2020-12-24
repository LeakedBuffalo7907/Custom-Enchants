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

	public function onDamage(EntityDamageEvent $event): void{
		if($event instanceof EntityDamageByEntityEvent){
			$damager = $event->getDamager();

			if(!$damager instanceof Player) return;
			if($damager->getInventory()->getItemInHand()->getEnchantment(100)){
				$damager->setHealth($damager->getMaxHealth());
			}
		}
	}
}
