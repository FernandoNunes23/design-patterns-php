<?php

require_once("AbstractMageFactory.php");
require_once("../../Skill/IceSkill.php");

class IceMage extends AbstractMageFactory
{
    function createSkill(): SkillInterface
    {
        return new IceSkill();
    }
}