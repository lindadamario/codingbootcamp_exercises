<?php



public function __construct($i, $j)
{
for($i=0; $i<=8; $i++){
            for ($j=0; $j<8; $j++){
                // if($j%2 == $i%2){
                //     echo 'dark';
                } else {
                    echo 'light';
                }
            }
        }
    }
}

?>