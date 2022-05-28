<?php

require_once("Skill/SkillInterface.php");

interface CharacterFactoryInterface
{
    public function createSkill(): SkillInterface;
}