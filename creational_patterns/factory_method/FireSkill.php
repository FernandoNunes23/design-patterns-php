<?php

include_once("SkillInterface.php");

class FireSkill implements SkillInterface
{

    public function useSkill()
    {
        echo "Used Fire Skill\n";
    }
}