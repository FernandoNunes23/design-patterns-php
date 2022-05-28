<?php

require_once("../../Skill/SkillInterface.php");

abstract class AbstractMageFactory
{
    abstract function createSkill(): SkillInterface;
}