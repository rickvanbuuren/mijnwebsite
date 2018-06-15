<?php
switch(gethostname()){
    case '.com':
        $rootFolder = ''; break;
    case 'Rick-PC':
        $rootFolder = '/mywebsite'; break;
    default:
}
//    echo $rootFolder;
?>

<!doctype html>
<html lang="en">
<head>
    <?php
        include_once ('includes/head.php');
    ?>
</head>
<body>

<?php
    include_once ('includes/nav.php');
?>

<?php
    include_once ('includes/homepage.php')
?>

<?php
    include_once ('includes/footer.php')
?>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
