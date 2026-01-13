<html>
<body>
<?php
class constructor
{
	private $color;
	//Overloaded constructor is not allowed in PHP.
	/*public function constructor()
	{
		$this->color="Red";
	}*/
	public function constructor($color)
	{
		$this->color=$color;
	}
	
	public function display()
	{
		print "Color is" . $this->color;
	}
		
}
//$obj1=new constructor();
//$obj1->display();
$obj2=new constructor("Blue");
echo "<H1> Constructor is called ". $obj2->display() . "</H1>";
?>
</body>
</html>