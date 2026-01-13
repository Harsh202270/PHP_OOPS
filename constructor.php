<html>
<body>
<?php
class constructor
{
	private $color;
		
	public function __construct($color)
	{
		
		$this->color=$color;
	}
	
	public function display()
	{
		print "Color is" . $this->color;
	}
		
}
$obj2=new constructor("Blue");
echo "<H1> Constructor is called ". $obj2->display() . "</H1>";
?>
</body>
</html>