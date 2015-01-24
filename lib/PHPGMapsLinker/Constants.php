<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPGMapsLinker;

class Constants{
    
    const GMAP_LINK = "https://maps.google.com/maps?z=12&t=m&q=loc:";
    
    private function __get($constant) {
        if(defined("self::$constant"))
      {
         return constant("self::$constant");
         
      }
      trigger_error ("$constant  isn't defined");
    }
    
}