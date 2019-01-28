<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Lion extends Animal
{
    private $name;
    
    public function __construct($family,$food) {
        parent::Animal($family,$food);
    }
   
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
}
?>