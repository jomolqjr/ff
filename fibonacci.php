<html>
    <head><title>FACTORIAL</title></head>
<body>
    <form method="POST"><br>
    Enter number : <input type="text" name="num"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
<?php
if (isset($_POST['submit'])) { 
    $num=$_POST['num'];
    $a=0;
    $b=1;
    echo "Fibanacci series for".$num."element are:<br>";
    echo $a.' '.$b;
    $i=0;
    while($i<$num-2)
   {
    $next=$a+$b;
    echo ' '.$next;
    $a=$b;
    $b=$next;
    $i++;
   }

}

?>