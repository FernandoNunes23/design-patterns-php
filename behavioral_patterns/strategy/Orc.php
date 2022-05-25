<?php

require_once("EnemySpawn.php");

class Orc implements EnemySpawn
{
    public function spawn(): void
    {
        echo "Spawned a Orc.\n";
    }
}