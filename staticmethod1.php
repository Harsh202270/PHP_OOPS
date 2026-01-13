<html>
<body>
<?php
class staticmethod1
{
	
	privte static $x1,$y1;
	public static function accept($x,$y)
	{
		staticmethod1::$x1=$x;
		staticmethod1::$y1=$y;
	}
	public static function display()
	{
		echo "Value at x is" . staticmethod1::$x1 . "<br>";	
		echo "Value at y is" . staticmethod1::$y1 . "<br>";
		
	}
}
echo "accept method" . staticmethod1::accept(90,80);
echo  staticmethod1::display();

?>
</body>
</html>