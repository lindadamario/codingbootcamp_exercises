

<?php
 

class cat 
{   
    public $color = null;
    public $legs = 4;
    public $name = null;
    public $state = 'sleeping';

    public function  wakingUp() {

        echo 'wake up!';
        
        $this->state=$this->(state='awake');
    }
}

    $cat1 = new cat();
    $cat1 -> color = 'white';
    $cat1 -> name = 'Sirius';
    
    $cat1 -> wakingUp();

var_dump($cat1);
?>