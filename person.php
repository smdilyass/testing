<?php


class Person {
    private $name;
    private int $age;
    private $fonction;
    private int $year;

    public function __construct($name,$age,$fonction,$year){
        $this->name = $name;
        $this->age = $age;
        $this->fonction = $fonction;
        $this->year = $year;
    }
}

$person1 = new Person("imad",30,"charge" ,2002);
$person2 = new Person("iman",26,"admin",2003);
$person3 = new Person("omar",32,"formature",2010);
$person4 = new Person("khalid",27,"aiti",2005);
$person5 = new Person("youness",35,"charge",2022);

$persons =[$person1,$person2,$person3,$person4,$person5];

 function avg($fonction){
    foreach($persons as $person )
    if($fonction == $fonction){
        // $this->age = $age;
        $avg = $age++;
        $avgg = $avg/;
        return $avg;
    }
    else{
        echo"this fonction not exist";
    }
}
// 2>
// 5>2
// 5<10
// 10<
function year(){
    
    global $persons ;
   for($i = 0; $i<20;$i++){
   
        if($persons[$i]->year ){
            echo"sinior";
        }
       $e->date()-$year
        if($e < 2){
            echo"sinior";
        }
        if(2< $e && $e <5){
            echo"Jinior";
        }
        if(5<$e && $e <10){
            echo"confirm";
        }
        if($e >10){
            echo"exper";
        }
    }
}

year();