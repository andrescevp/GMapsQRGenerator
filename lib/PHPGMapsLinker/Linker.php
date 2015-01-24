<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPGMapsLinker;

require 'Constants.php';

class Linker {

    public function makeLink($latitude, $longitude) {
        try {
            $link = Constants::GMAP_LINK . $latitude . "+" . $longitude;
            return $link;
        } catch (Exception $ex) {
            return $ex;
        }
    }

}
