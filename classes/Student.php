<?php

/**
 * Class Student
 */

class Student extends Person
{

    private $group;
    private $rating;

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function gerRating()
    {
        return $this->rating;
    }

}