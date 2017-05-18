<?php

    class dog
    {
        public $name = null;
        public $nr_of_legs = null;
        public $time_of_birth = null;
        public $location = null;

        protected static $number_of_dogs = 0;

        public function __construct($name = 'Unknown', $location = 'street')
        {
            echo 'A dog was just created';

            $this->$name = 'Unknown';
            $this->nr_of_legs = 4;
            $this->time_of_birth = date('Y-m-d H:i:s');
            $this->location = $location;

            dog::$number_of_dogs++;
            // self::$number_of_dogs++;
            // static::$number_of_dogs++;
        }    

        
        public function __destruct()
        {
            global $number_of_dogs;
            $number_of_dogs--;
        }
    } 

    public static function getNumberOfDogs()
    {
        return dog::$number_of_dogs;
    }

    $my_dog = new dog('Ben', 'shelter');

    var_dump(dog::getNumberOfDogs());

    $another_dog = new dog('Jackie', 'Atenas');

    var_dump(dog::$number_of_dogs);