<?php

require_once("Skill/SkillInterface.php");
require_once("Character/CharacterFactoryInterface.php");

abstract class AbstractKnightFactory implements CharacterFactoryInterface
{
    abstract function createSkill(): SkillInterface;
}