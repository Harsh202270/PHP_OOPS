<?php
abstract class One
{
	abstract function disp();
	public function display()
	{
		echo "Hello";
	}
}
class Two extends One
{
	public function disp()
	{
		echo "Inside the child class<br/>";

	}

}
class Three extends One
{
	public function disp()
	{
		echo "Inside the child class 2<br/>";
	}
}
$two=new Two();
           echo "<b>Calling from the child class Two:</b><br/>";
$two->disp();
$two->display();
	echo "<b>Calling from the child class Three:</b><br/>";
$three=new Three();
$three->disp();
?>
