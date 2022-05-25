<?php

require_once("EnemySpawn.php");

class Skeleton implements EnemySpawn
{
    public function spawn(): void
    {
        echo "Spawned a skeleton.\n";
    }
}