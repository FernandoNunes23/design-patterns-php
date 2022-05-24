<?php

include_once("AbstractCharacter.php");
include_once("IceSkill.php");

class IceMage extends AbstractCharacter
{
    public function createSkill(): SkillInterface
    {
        return new IceSkill();
    }
}