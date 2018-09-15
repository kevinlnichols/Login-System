<?php 

    //Allow the config
    define('__CONFIG__', true);
    //Require the config
    require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="uk-section uk-container">
        <?php 
            echo "Hello world. Today is: "; 
            echo date("Y m d");
        ?>
        <p>
            <a href="/login-system/login.php">Login</a>
            <a href="/login-system/register.php">Register</a>
        </p>
    </div>

    <?php require_once "inc/footer.php"; ?>

</body>
</html>