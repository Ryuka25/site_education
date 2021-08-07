<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="../">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact - Site éducation</title>
</head>
<body>
    <div class="page">
        <!--!En-tête de page-->

        <div class="header">

            <?php include '../header.php';?>

            <div class="topNav ">
                <ul>
                    <li><a href="pages/home.php">Acceuil</a></li>
                    <li><a href="pages/about.php">A-propos</a></li>
                    <li><a href="pages/speciality.php">Spécialité</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
                    <li id="active" ><a href="pages/blog.php">Blog</a></li>
                </ul>
            </div>

        </div>
        
        <!--!Contenu du page-->

        <div class="body ">

            <div class="sideNav">
                <ul>
                    <li><a href="pages/blog.php#june21">June 21</a></li>
                </ul>
            </div>

            <div class="content">
            <div class="container"  id="june21">
                    <div class="image-container">
                        <img src="assets/images/programmeur.jpg" alt=""/>
                    </div>
                    <div class="text-container">
                        <div class="container-header">
                            <h2> Blog du 21 June </h2>
                        </div>

                        <div class="container-content">
                            <p>
                                Lorem ipsum dolor sit amet,  consectetur adipiscing elit, cutie kha, love you yeah ! sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>
                                Cutie kha, love you yeah !Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--!Pied de page-->

        <div class="footer">
            <?php include '../footer.php';?>
        </div>
    </div>
</body>
</html>