<?php
    session_start();
    include_once("db.php");

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        return;
    }

    if(isset($_POST['post'])){
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);

        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);

        $date = date('l jS \of F Y h:i:s A');

        $sql = "INSERT into posts (title, content, date) VALUES ('$title', '$content', '$date')";

        if($title == "" || $content == "")
        {
            echo "please complete your post";
            return;
        }

        mysqli_query($db, $sql);

        header("Location: index.php");

    }
?>

<?php
if(!isset($_SESSION['id'])){

    header("Location: login.php");
}
?>

<!Doctype html>
<html>
<head>
<title>
    titlu post\\
</title>
<link rel="stylesheet" href="style.php">
</head>
<body>

    <div class="forma" align="center">
    <h1 style="font-family: 'Oswald';" align='center'>Post</h1>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <input placeholder="Title" name="title" type="text" autofocus size="48" class="formi"><br /><br />
        <textarea placeholder="Content" name = "content" rows="20" cols="25" class="formi"> </textarea> <br />
        <input name="post" type= "submit" value= "Post" class="but">

    </form>
</div>

</body>
</html>
