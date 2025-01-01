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
    $fact=1;
    $num=$_POST['num'];
    echo "Factorial of $num:<br><br>";
    for($i=1;$i<=$num;$i++){
        $fact=$fact*$i;
    
    }
    echo $fact."<br>";
}
?>
