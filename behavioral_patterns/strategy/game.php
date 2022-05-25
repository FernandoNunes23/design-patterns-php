<?php

require_once("EnemySpawner.php");
require_once("Goblin.php");
require_once("Orc.php");
require_once("Skeleton.php");

$goblin = new Goblin();
$orc = new Orc();
$skeleton = new Skeleton();

$goblinSpawner = new EnemySpawner($goblin);
$goblinSpawner->spawnEnemy();

$skeletonSpawner = new EnemySpawner($skeleton);
$skeletonSpawner->spawnEnemy();

$orcSpawner = new EnemySpawner($orc);
$orcSpawner->spawnEnemy();
