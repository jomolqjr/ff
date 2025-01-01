<html>
    <head><title>Prime or Not</title></head>
    <body>
        <form method="POST">
            Enter a number: <input type="text" name="num">
            <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) { 
$num=$_POST['num'];
$n=0;
for($i=2;$i<$num;$i++){
    if($num%$i==0)
    {
        $n++;
        break;
    }
}
if($n==0){
    echo $num."is a prime number";

}
else{
    echo $num."is not a prime number";
}
}
?>