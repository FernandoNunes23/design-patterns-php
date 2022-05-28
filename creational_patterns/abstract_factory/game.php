<?php

require_once ("Character/Knight/FireKnight.php");
require_once ("Player.php");

$fireKnight = new FireKnight();

$player = new Player($fireKnight);
$player->usePlayerSkill();