<?php
    session_start();
    include_once("db.php");

?>  



<!DOCTYPE html>
<html>
<head>
    <title>Pericol</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.php">

<script type="text/javascript" src="index.js"></script>

<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


</head>
<body>


<div class="loader">
        <img src="giphy.gif" alt="Loading..." />
    </div>



<script type="text/javascript">
    document.write("<img src= \"media/" + Math.floor(1 + Math.random() * 44) + ".png\" />");   
</script>

<p class="blogtitle">Pericol</p>

<p class="login" align="right"><a href="post.php" class="log">POST</a></p>
<div class="post">
    <?php
        require_once("nbbc/nbbc.php");

        $bbcode = new BBCODE;

        $sql = "SELECT * FROM posts ORDER BY id DESC";

        $res = mysqli_query($db, $sql) or die(mysqli_error($db));

        $posts = "";

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content']; 
                    $date = $row['date'];

                    $admin= "<div><a href='del_post.php?pid=$id' class='log'>Delete</a>&nbsp;<a href = 'edit_post.php?pid=$id' class='log' >Edit</a></div>";

                    $output = $bbcode->Parse($content);

                    $posts .= "<div><h2><p class='titlu'>$title</p></h2><p class = 'titlu'>$date</p><p class='content'>$output</p><br>$admin</div>";
                }
                echo $posts;
        }
        else {
            echo "There are no posts to display";
        }


    ?>
</div>

<footer>
<p class="fot"> Fiindca mi-a fost dor de tine. </p>
</footer>

</body>



</html>