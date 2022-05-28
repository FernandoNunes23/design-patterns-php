<?php

require_once("Character/CharacterFactoryInterface.php");

class Player
{
    /**
     * @var CharacterFactoryInterface
     */
    private $charFactory;

    /**
     * Player constructor.
     * @param CharacterFactoryInterface $charFactory
     */
    public function __construct(CharacterFactoryInterface $charFactory)
    {
        $this->charFactory = $charFactory;
    }

    public function usePlayerSkill(): void
    {
        $this->charFactory->createSkill()->useSkill();
    }
}