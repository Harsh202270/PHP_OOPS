<?php
class base
{
    protected $num1,$num2,$num3;
    public function input($num1,$num2)
    {
                $this->num1=$num1;
	$this->num2=$num2;
    }
    
    public function output()
    {
                echo "First number is". $this->num1 . "<br>";
	echo "Second number is". $this->num2 . "<br>";
	echo "Result is". $this->num3;
    }
}

class child extends base
{
    public function calc()
    {
	$this->num3= ($this->num1) + ($this->num2);	
        parent::output();
        
    }
}
$cobj1=new child();
$cobj1->input(90,90);
$cobj1->calc();
$obj1->output();