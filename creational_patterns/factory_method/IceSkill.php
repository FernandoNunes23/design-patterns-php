<?php

include_once("SkillInterface.php");

class IceSkill implements SkillInterface
{
    public function useSkill()
    {
        echo "Used Ice Skill\n";
    }
}