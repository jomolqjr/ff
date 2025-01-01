<html>
    <head><title>SUM</title></head>
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
// echo "num is $num";
$sum=0;
$rem=0;
for($i=0;$i<=strlen($num);$i++){
    $rem=$num%10;
    $sum=$sum+$rem;
    $num=$num/10;
}
echo "Sum of digits:$sum";
}
?>