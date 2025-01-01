<html>
    <head></head>
    <body><?php
    $name=$email=$gender=$comment=$website="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $website=test_input($_POST["website"]);
        $comment=test_input($_POST["comment"]);
        $gender=test_input($_POST["gender"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr="Invalid email format";
        }
    

    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
        <h2>PHP form validation example</h2>
        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name:<input type="text" name="name"><br><br>
Email:<input type="text" name="email"><br><br>
<?php 
if(isset($emailErr)){
    echo "<span class='error'>$emailErr</span>";
}
?>
<br<br>
Website:<input type="text" name="website"><br><br>
Comment:<textarea name="comment" rows="5" cols="40"></textarea>
Gender:<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="other">other<br><br>
<input type="submit" name="submit" value="submit">

    </form>
    <?php
    echo "<h2>Your input:</h2>";
    echo $name;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
    </body>
</html>