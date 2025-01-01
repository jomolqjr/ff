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
    $x=$num;
    $r=0;
    while($num>1){
        $r=$r*10;
        $r=$r+($num%10);
        $num=$num/10;
    }
    echo "Reverse of number".$x."is:".$r;
    return 0;
    
}
?>