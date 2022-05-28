<?php

require_once("AbstractKnightFactory.php");
require_once("../../Skill/IceSkill.php");

class IceKnight extends AbstractKnightFactory
{
    function createSkill(): SkillInterface
    {
        return new IceSkill();
    }
}