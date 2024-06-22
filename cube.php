<html>
<body>
<?php
function cube(&$x)
{
    $x= $x*$x*$x;
}
$result=5;
cube ($result);
echo $result;
?>
</body>
</html>