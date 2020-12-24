<?php

declare(strict_types=1);

namespace leakedce;

use pocketmine\item\enchantment\Enchantment as Enchant;

use leakedce\enchants\LifeSteal;
use leakedce\enchants\Grind;
use leakedce\enchants\Frosted;

class Enchantment{

	public const LIFESTEAL = lifesteal;
	public const GRIND = grind;
	public const FROSTED = frosted;

	public function __construct(){
		$this->init();
	}

	public function init(){
		Enchant::registerEnchantment(new Enchant(self::LIFESTEAL, "Lifesteal", Enchant::RARITY_COMMON, Enchant::SLOT_SWORD, Enchant::SLOT_NONE, 5));
		new LifeSteal();
		Enchant::registerEnchantment(new Enchant(self::GRIND, "Grind", Enchant::RARITY_UNCOMMON, Enchant::SLOT_SWORD, Enchant::SLOT_NONE, 2));
		new Grind();
		Enchant::registerEnchantment(new Enchant(self::FROSTED, "Frosted", Enchant::RARITY_RARE, Enchant::SLOT_SWORD, Enchant::SLOT_NONE, 3));
		new Frosted();
	}
}
