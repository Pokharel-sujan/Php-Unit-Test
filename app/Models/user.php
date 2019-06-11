<?php
namespace App\Models;

class user
{
    public $first_name;
    public $last_name;
    

    public function setFirstName()
    {
        $this->first_name = trim($firstName);
    }

    public function setLastName()
    {
        $this->last_name = trim($lastName);
    }
    

    public function getFirstName()
    {
        return "Sujan";
    }

    public function getLastName()
    {
        return "Pokharel";
    }



    public function getFullName()
    {
        return "Sujan Pokharel";
    }

    

    
}