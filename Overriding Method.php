<?php
class base
{
    protected $num1,$num2,$num3;
    public function input($num1,$num2)
    {
                $this->num1=$num1;
	$this->num2=$num2;
	$this->num3= ($this->num1) + ($this->num2);
	echo "First number is". $this->num1 . "<br>";
	echo "Second number is". $this->num2 . "<br>";
	echo "Result is". $this->num3 . "<br>";
    }    
   
}

class child extends base
{
    public function input($num1,$num2)
   {
        $this->num1=$num1;
	$this->num2=$num2;
	$this->num3= ($this->num1) - ($this->num2);
        echo "First number is". $this->num1 . "<br>";
	echo "Second number is". $this->num2 . "<br>";
	echo "Result is". $this->num3 . "<br>";
    } 
    
}
$bobj1=new base();
$bobj1->input(90,90);
$bobj1=new child();
$bobj1->input(80,90);
?>