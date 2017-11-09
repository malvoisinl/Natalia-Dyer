<?php

class Serie
{
    public $name;
    public $description;
    public $time;
    public $releaseDate;
    
    public function __construct($name,$description,$time,$releaseDate)
    {
        $this->name=$name;
        $this->description=$description;
        $this->time=$time;
        $this->releaseDate=$releaseDate;
    }
    
    public function display()
    {
        echo "The serie's name ".'"'.$this->name.'"'."\nDescription : " . $this->description ."\nThe serie lasts ".$this->time ." minutes\nThe serie was released on ". $this->releaseDate ."\n" ;
        
    }
    public function getName()
    {
        return $this->name."\n";
    }
    public function setName($name="")
    {
        $this->name=$name;
    }
    public function getDescription()
    {
        return $this->description."\n";
    }
    public function setDescription($description="")
    {
        $this->description=$description;
    }
    public function getTime()
    {
        return $this->Time."\n";
    }
    public function setTime($time="")
    {
        $this->time=$time;
    }
    public function getReleaseDate()
    {
        return $this->releaseDate."\n";
    }
    public function setReleaseDate($releaseDate="")
    {
        $this->releaseDate=$releaseDate;
    }
}   
$ST = new Serie("Stranger Things","I love kids and Nancy Wheeler <3.", "48","16-07-15");
$GOT = new Serie("Game Of Throne","Daenerys Targaryen is pretty good.","52","11-04-17");
$MR = new Serie("Mr. Robot","Elliot is very CHARISMATIC","46","15-06-24");
$serie = array($ST,$GOT,$MR);
foreach($serie as $element){
 $element->display();
}
