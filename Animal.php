<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Animal
{
    private $family;
    private $food;
    
    public function __construct($family,$food) {
        $this->family = $family;
        $this->food = $food;
    }
    
    public function getFamily()
    {
        return $this->family;
    }
    
    public function setFamily()
    {
        $this->family = family;
    }
    
    public function getFood($food)
    {
        return $this->food = food;
    }
    
    public function setFood()
    {
       $this->food = $food;   
    }
}

?>
