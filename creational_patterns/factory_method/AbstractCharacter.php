<?php


abstract class AbstractCharacter
{
    abstract function createSkill(): SkillInterface;

    public function useSkill()
    {
        $skill = $this->createSkill();

        $skill->useSkill();
    }
}