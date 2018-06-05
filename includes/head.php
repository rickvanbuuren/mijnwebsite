<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26-5-2018
 * Time: 13:32
 */

switch(gethostname()){
    case '.com':
        $rootFolder = ''; break;
    case 'Rick-PC':
        $rootFolder = '/mywebsite'; break;
    default:
}

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Import Google Roboto Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<link href=<?= $rootFolder ."/styles/style.css"?> rel="stylesheet" type="text/css" />
<link href=<?= $rootFolder ."/styles/loginform.css"?> rel="stylesheet" type="text/css" />

<title>Rick van Buuren</title>
