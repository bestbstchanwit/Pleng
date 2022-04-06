<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/main.ico" />
    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/d574317350.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Pleng</title>
</head>

<body>
    <?php include "navigator.php"?>
    <?php include "navbar.php"?>
    <div class="container-album-main">
        <?php include "album-collection/album-header.php"?>
        <div class="container-body">
            <?php include "album-collection/album-content.php"?>
            <?php include "album-collection/album-footer.php"?>
        </div>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script/scrollbar-smooth.js"></script>

</body>


</html>