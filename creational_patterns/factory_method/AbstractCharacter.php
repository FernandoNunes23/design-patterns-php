<?php


abstract class AbstractCharacter
{
    abstract function createSkill(): SkillInterface;

    public function useSkill(): void
    {
        $skill = $this->createSkill();

        $skill->useSkill();
    }
}