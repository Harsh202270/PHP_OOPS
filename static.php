<html>
<body>
<?php
class car
{
	public $color;
	public $manufacturer;
	static public $number=123;
}
car::$number++;
echo "<h1>".car::$number."</h1>";
?>
</body>
</html>