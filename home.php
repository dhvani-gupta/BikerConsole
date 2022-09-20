<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['Username'])) {
    ?>
    <! DOCTYPE html>
    <html>
        <head>
            <title> HOME </title>
            <link rel = "stylesheet" href = "styleHome.css">
</head>
<body>
    <h1> Hello, <?php echo $_SESSION['Username']; ?> </h1>
    <a href = "logout.php"> Logout </a>
</body>
</html>

<?php
}
else{
    header("Location: index.php");
    exit();
}

?>