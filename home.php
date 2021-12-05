<?php
session_start();

?>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <a href="logout.php">Log Out</a>
        <a href="QLHS.php">Quản lý sinh viên</a>
        <a href="comment.php">Chức năng comment</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
        
        
    </body>
</html>