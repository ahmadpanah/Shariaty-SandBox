<?php
$character = array (name=>"Joe",
                    occupation=>"Programmer",
                    age=>30,
                    "Learned language "=>"Java"
);
foreach ( $character as $key=>$val ){
    print "$key = $val<br>";
}
?>