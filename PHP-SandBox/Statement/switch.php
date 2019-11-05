<?php
$mood = "sad";
switch ( $mood ) {
    case "happy":
        print "I'm in a good mood";
        break;
    case "sad":
        print "Don't be down!";
        break;
    default:
        print "Neither happy nor sad but $mood";
}
?>