<?php

/**
 * Class Teacher
 */

class Teacher extends Person
{

    private $groups = [];
    private $department;

    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }
}