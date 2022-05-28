<?php

require_once("AbstractMageFactory.php");
require_once("../../Skill/FireSkill.php");

class FireMage extends AbstractMageFactory
{
    function createSkill(): SkillInterface
    {
        return new FireSkill();
    }
}