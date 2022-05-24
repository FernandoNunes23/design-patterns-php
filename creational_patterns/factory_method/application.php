<?php

require_once("FireMage.php");
require_once("IceMage.php");

/**
 * We could instantiate FireMage and the it'll use the FireMage skill
 * maintaining the behavior of AbstractCharacter for useSkill method.
 */
$character = new FireMage();
$character->useSkill();

/**
 * We could instantiate FireMage and the it'll use the IceMage skill
 * maintaining the behavior of AbstractCharacter for useSkill method.
 */
$character = new IceMage();
$character->useSkill();