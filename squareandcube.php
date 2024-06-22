<html>
<head>
<title>php program for squaring</title>
</head>
<body>
<form method ="post">
<table border="0">
<tr>
<td><input type ="text" name="num1" value="" placeholder="enter a value"/></td>
</tr>
<tr>
<td><input type ="text" name ="num2" value="" placeholder="enter b value"/></td>
</tr>
<tr>
<td><input type ="submit" name="submit" value="submit"/></td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit"]))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $square=$a*$a;
    $cube=$b*$b*$b;
    echo "square=".$square;
    echo "cube=".$cube;
    return 0;
}
?>
</body>
</html>
 
