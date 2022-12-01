<?php
 
 class Fruits{
    public $name;
    public $color;

    //we set the names of the properties in the following methods.
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }

    //we set the colors of the properties in the following methods.
    function setColor($color){
        $this->color=$color;
    }
    function getColor(){
        return $this->color;
    }

 }
//objects created here
 $fruit1 = new Fruits();
$fruit2 = new Fruits();
$colorize = new Fruits();
//we assign values to the objects
 $fruit1->setName("Mangoe");
 $fruit2->setName("Pawpaw");

 //we set the colors here
$fruit1->setColor("Green");
$fruit2->setColor("Orange");

 //we display the values here
  echo  $fruit1->getName()."<br>";
  echo  $fruit2->getName();
  //we display the colors here
 echo "<br>";
 echo $fruit1->getColor();
 echo "<br>";
 echo $fruit2->getColor();
?>