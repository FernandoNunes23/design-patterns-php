<?php

require_once("EnemySpawn.php");

class Goblin implements EnemySpawn
{
    public function spawn(): void
    {
        echo "Spawned a Goblin.\n";
    }
}