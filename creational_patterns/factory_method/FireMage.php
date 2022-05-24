<?php

include_once("AbstractCharacter.php");
include_once("FireSkill.php");

class FireMage extends AbstractCharacter
{
    function createSkill(): SkillInterface
    {
        return new FireSkill();
    }
}