<?php
    session_start();

    if(isset($_POST['login'])) {
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);
        
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql)or die( mysqli_error($db));
        $row = mysqli_fetch_array($query,1);
        $id = $row['id'];
        $db_password = $row['password'];

        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } else {
            echo "You didn't enter the correct details!";
        }

    }
?>

<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class= "forma">
    <h1 style="font-family: 'Oswald';" align='center'>Login</h1>
    <br>
    <form action="login.php" method="post" enctype="multipart/form-data" align='center'>
        <input placeholder="Username" name="username" type="text" autofocus class="formi">
        <br>
        <input placeholder="Password" name="password" type="password" class="formi">
        <br>
        <input name="login" type="submit" value="Login" class="but">
    </form>
    </div>
</body>
</html>