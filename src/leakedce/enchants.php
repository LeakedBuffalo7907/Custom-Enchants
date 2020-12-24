<?php

declare(strict_types=1);

namespace leakedce;

use pocketmine\item\enchantment\Enchantment as Enchant;

use xXNiceYT\CE\enchants\LifeSteal;

class Enchantment{

	public const LIFESTEAL = 100;

	public function __construct(){
		$this->init();
	}

	public function init(){
		Enchant::registerEnchantment(new Enchant(self::LIFESTEAL, "Lifesteal", Enchant::RARITY_COMMON, Enchant::SLOT_SWORD, Enchant::SLOT_NONE, 5));
		new LifeSteal();
	}
}
