<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Lane.php';

class GameSubscriber
{
    private $laneNumbers;

    public function __construct()
    {
        $laneNumbers = arr (1,2,3,4,5,6,7,8,9,10);        
    }
    
    public function Update($pinCount,$laneNumber)
    {
  
    }
} 