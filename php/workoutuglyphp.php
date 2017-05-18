<?php

    $name = "James";
    $name .= "Bond"; // ".=" is for concatenating two strings in the same variable


    $bond_info = [
        "first_name" => "James",
        "last_name" => "Bond",
        "gun" => "Walther PPK",
        "car" => "Aston Martin",
        "enemy" => "Stavro Blofeld",
        "relationship_status" => "widower"
    ];


//    echo join('|', ['first', 'second']);

// echo join('', [
//     'The name is ',
//     $bond_info['last_name'],
//     '.',
//     $bond_info['first_name']
// ]);

   

    // One day when I was driving my Aston Martin in the Alps Stavro Blofeld  came along and made me a widower. If only I had my Walther PPK . with me!

    echo  '<br> One day when I was driving my '.$bond_info['car']. 'in the Alps '. $bond_info['enemy']. 'came along and made me a '. $bond_info['relationship_status']. 'If only I had my '. $bond_info['gun']. "with me!";

    $bons_info['last_case'] = 'Spectre';

    class bondCase
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    // 10.
    protected $girls = [];
    // think of properties as an array
    // [
    //     name => null,
    //     year => null,
    //     enemy => null,
    //     girls = []
    // ]

    protected static $cases_solved = 0;
    protected static $girls_met = 0;


    // 9.
    public function __construct($year)
    {
        $this->year = $year;

        static::$cases_solved++;
        static::$girls_met++;
    }

    // 11.
    public function addGirl($name)
    {
        $this->girls[] = $name;
    }

    // 8.
    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($value)
    {
        $this->year = $value;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    public function setEnemy($value)
    {
        $this->enemy = $value;
    }



}

$case = new bondCase(2015);
$case->setName('Spectre');
$case->setEnemy('Ernst Stavro Blofeld');


$case = new addGirl('Estrella');
$case->setGirl('Lucia Sciarra');
$case->setGirl('Madeleine Swann');






?>