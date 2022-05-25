<?php

require_once("EnemySpawn.php");

class EnemySpawner
{
    /**
     * @var EnemySpawn
     */
    private $enemySpawn;

    /**
     * EnemySpawner constructor.
     *
     * @param EnemySpawn $enemySpawn
     */
    public function __construct(EnemySpawn $enemySpawn)
    {
        $this->enemySpawn = $enemySpawn;
    }

    public function spawnEnemy()
    {
        $this->enemySpawn->spawn();
    }
}