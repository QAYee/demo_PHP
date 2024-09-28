<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>

    <?php 
    if(isset($_GET["tama"])){
    ?>
    <p><?php echo $_GET["tama"] ?></p>
    <?php 
    }
    ?>
    <?php 
    if(isset($_GET["turon"])){
    ?>
    <p><?php echo $_GET["turon"] ?></p>
    <?php 
    }
    ?>
    
    <form action="output.php" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1">
    </div>
    <div>
        <label for="username2">Username</label>
        <input type="password" name="username2" id="username2">
    </div>

    <input type="submit" name="okay" id="okay" value="okay">

   

    </form>
</body>
</html>