<?php
$ind = isset($root) ? './' : '../';
$menu = array(
    "Clients" => array(
        "Ajouter" => "ajouter-utilisateur",
        "Voir" => "voir-utilisateur",
    ),
    // "Newsletter" => array(
    //     "Creer" => '',
    //     "Voir" => "voir-newsletter",
    // ),
    "Newsletter" => '',
    "Voir Site Web" => '',
);

include $ind . 'php/includes/db.php';
include $ind . 'php/includes/func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $ind ?>css/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<body>
<?php include $ind . 'php/includes/nav.php';
