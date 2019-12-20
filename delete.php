
<?php 
        include_once("config.php");
        $stb = $_GET['stambuk'];
        $result = mysqli_query($mysqli, "delete from biodata where stambuk = '$stb'");
        
        header("Location:biodata.php");
    ?>

