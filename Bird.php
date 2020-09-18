<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    static $instatnce_count = 0;
    static $egg_num = 0;

    function can_fly() {
        if ( $this->flying == "yes" ) {
            $flying_string = "can fly";
        } else {
            $flying_string = "is stuck on the ground";
        }
        return  $flying_string ;
    }

    public static function create() {
        return self::$instatnce_count++;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
    static $egg_num = "3-4, sometimes 5";
}
