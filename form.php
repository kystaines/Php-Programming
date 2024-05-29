<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method='POST'>
        <h2>Please input your name: </h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])){
        $name = $_POST['name'];
        echo "<h3> Hello $name! Your IP Address is...</h3>";
    }
    ?>
    <?php
    if (!empty($_SERVER['HTTP_X_CLIENT_IP'])){
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip_address = $_SERVER['HTTP_X_FORWARED_FOR'];
    }
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    echo $ip_address;
    echo "<br/> Your User Agent is :" . $_SERVER['HTTP_USER_AGENT'];
    ?>
</body>
</html>