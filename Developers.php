<?php

class  Developer {

    private  $firstName;
    private  $lastName;
    private  $profession;

    function setFirstName($name){
        $this->firstName=$name;
    }

    function setLastName($name){
        $this->lastName=$name;
    }

    function setProfession($profession){
        $this->profession=$profession;
    }

}
