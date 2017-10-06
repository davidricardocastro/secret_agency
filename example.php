<?php

//1
$name = 'James';

//2
$name .= "bond";

//3
$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 25
    
];

//4
echo 'The name is '. $bond_info['last_name'].'. ' .$bond_info['first_name'].' '. $bond_info['last_name'].'.';
echo '<br>';

//5
 //'One day when I was driving my Aston Martin in the Alps Stavro Blofeld came along and made me a widower. If only I had my Walther PPK with me!'


 echo 'One day when I was driving my '.$bond_info['car'].' in the Alps '.$bond_info['enemy'].'came along and made me a '.$bond_info['relationship_status'].'. '.'If only I had my ' .$bond_info['gun'] .'with me!';
 echo '<br>';

 //6
$bond_info['last_case'] = 'Spectre';



 //7
 class bondCase
 {
        protected $name = null;
        protected $year = null;
        protected $enemy = null;

        //10
        protected $girls= [];

        public static $cases_solved = 0;
        public static $girls_met = 0;
       
        //9

        public function __construct($year)
        {
            $this->year = $year;

            //17
            static :: $cases_solved++;


        }

         //11
         public function addGirl($name)
         {
            $this->girls[] = $name;
            //18
            static :: $girls_met++;
         }

         


        //8


        //get method for property $name
        public function getName()
        {
            return $this->name;
        }
        //set method for property $name
        public function setName($value)
        {
            $this->name = $value;
        }



        public function getYear()
        {
            return $this->year;
        }
        public function getYear($value)
        {
            $this->year = $value;

        }
        public function getEnemy()
        {
            return $this->enemy;
        }

        public function getEnemy($value)
        {
            $this->enemy = $value;


        }

            public static function getAvgGirlsPerCase()
            {
               return static::$girls_met / static::$cases_solved;
            }
     }

//12
$spectre = new bondCase(2015);
$spectre->setName('Spectre');
$spectre->setEnemy('Ernst Stavro Blofeld');



//13
$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');


//14
$Casino_Royale = new bondCase(2006);
$Casino_Royale->setName('Casino Royale');
$spectre->setEnemy('Le Chiffre');

//15
$Casino_Royale->addGirl('Vesper Lynd');
$Casino_Royale->addGirl('Solange Dimitrios');


//20
echo 'On average Bond has met'.bondCase::getAvgGirlsPerCase().'girls per case.';