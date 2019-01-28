<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'GameSubscriber.php';

class GameMonitor
{
   private $sub;
   private $laneCount;
 
   public function __construct($subscriber,$maxLanes) {
       $this->sub = $subscriber;
       $this->laneCount = $maxLanes;
   }
   
   public function PerformUpdate()
   {
       $pinCount = Rand(1,10);
       $laneNum = Rand(1,(int)$laneCount);
       
       sub.Update($pinCount,$laneNum);
   }
   
}



