<?php

require_once("AbstractKnightFactory.php");
require_once("Skill/FireSkill.php");

class FireKnight extends AbstractKnightFactory
{
    function createSkill(): SkillInterface
    {
        return new FireSkill();
    }
}