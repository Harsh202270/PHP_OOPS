<html>
<body>
<?php
class SimpleClass
{
    // property declaration
    private $var = "A default value";

    // method declaration
    public function displayVar() 
   {
        echo $this->var;
    }
}
$obj=new SimpleClass();
echo $obj->displayVar();
?>
</body>
</html>

