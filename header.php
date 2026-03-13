<?php session_start(); ?>
<?php  require('db.php');?>
<?php 
    $sql = 'SELECT * FROM `field`'; 
    $result = mysqli_query($mysqli, $sql);
    if(mysqli_errno($mysqli)) echo mysqli_error();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe&family=Vend+Sans:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe&family=Bungee+Spice&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Vend+Sans:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Practica</title>
</head> 
<body>
    <header>
        
        <nav>
            <?php if(isset($_SESSION['role']) != 'admin' && isset($_SESSION['role']) != 'read'):?>
                <a class="my-button dancing-script-uniquifier" href="SignIn.php">Registration</a>
                <a class="my-button dancing-script-uniquifier" href="SignUp.php">Login</a>
            <?php endif;?>
            <?php if(isset($_SESSION['role']) == 'read' || isset($_SESSION['role']) == 'admin'):?>  
                    <a class="my-button dancing-script-uniquifier" href="create.php">Create</a>
                    <a class="my-button dancing-script-uniquifier" href="SignUp.php">Exit</a>
                    <form action="">
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <select class="my-button dancing-script-uniquifier" id="cd-dropdown" class="cd-select" onchange="top.location=this.value">
                              <option value="">-- Выберите город --</option>
                              <option value="admin_panel.php"><?php echo htmlspecialchars($row['name']); ?></option>
                              <option value="samara">Самара</option>
                              <option value="perm">Пермь</option>
                              <option value="novosibirsk">Новосибирск</option>
                            </select>
                        <?php endwhile; ?>
                    </form>
            <?php endif;?>
            <?php if(isset($_SESSION['role'])):?>
                <?php if($_SESSION['role'] == 'admin'):?>
                    <a class="my-button dancing-script-uniquifier" href="admin_panel.php">Admin</a>
                <?php endif;?>
            <?php endif;?>
        </nav>
        
    </header>
    <main>
        <div class="container alumni-sans-pinstripe-regular">