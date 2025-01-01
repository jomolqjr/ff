<?php
include "incon17.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $sql="insert into contact(name,phone,email) values('$name','$number','$email')";
mysqli_query($conn,$sql);

}
?>
<html>
<head><title>HTML WEBPAGE</title></head>
<body style="margin:20px;">
<center>
<form style="maxwidth:400px;margin:auto;" method="POST">
<h1> Registration Form</h1>
Name : <input type="text" style="width:300px" name="name"><br><br>
Phone Number : <input type="text" name="number"><br><br>
Email : <input type="text" name="email"><br><br>

<input type="submit" name="submit" value="submit">
</form>
<table border="1">
    <tr><th>Name</th>
    <th>Email</th>
    <th>Phone Number</th></tr>
    <?php
    $sql2="select * from contact";
    $row=mysqli_query($conn,$sql2);
    while($result=mysqli_fetch_array($row)){
        // $name2=$row['name'];
        // $email2=$row['email'];
        // $number2=$row['phone'];
    
    ?>
<tr><th><?=$result['name'];?></th>
<th><?=$result['email'];?></th>
<th><?=$result['phone'];?></th></tr>

    <?php 
}
    ?>
</table>
</center>
</body>


</html>


