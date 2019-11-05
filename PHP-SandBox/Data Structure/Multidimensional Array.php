<?php
$characters = array (
                array ( name=>"name 1",
                        occupation=>"developer",
                        age=>30,
                        specialty=>"Java" ),
                array ( name=>"name 2",
                        occupation=>"Programmer",
                        age=>24,
                        specialty=>"C++" ),
                array ( name=>"name 3",
                        occupation=>"designer",
                        age=>63,
                        specialty=>"Javascript" )
);

foreach ( $characters as $val ){
    foreach ( $val as $key=>$final_val ){
        print "$key: $final_val<br>";
    }
    print "<br>";
}
?>