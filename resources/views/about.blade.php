<html>
    <div>

    hello 
    <?php
        echo "world !";
        $a="god";
    ?>

<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>

<br/>

<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "数组长度" . count($cars);
?>

<h3>遍历数组<h3>
<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>


<?php
function writeName()
{
    echo "Arterning";
}
 
echo "My name is ";
writeName();
?>
</div>

<?php
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // 调用 Bar() 方法
    }

    function Bar()
    {
        echo "This is Bar";
    }

    function Talk()
    {
        echo "<br>";
        echo "叽叽喳喳";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // 调用 $foo->Variable()
$foo->Talk();
?>
</html>