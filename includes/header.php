<?php include './functions/showNavFunc.php'; ?>
<?php include './includes/data.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Welcome to the Best Hotel in CT">
  <meta name="keywords" content="hotel, ct hotel, best hotels in ct">
  <title>Stay Hotel | Best Hotel in CT</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>
  <header id="main-header">

    <nav id="main-nav">
      <div class="container">
      <h1 class="logo"><a href="index.html" id="logo-link"><span class="text-primary">SH</span>CT</a></h1>
        <?php echo showNav($myNav); ?>
      <div class="clear-fix"></div>
      </div>
    </nav>
  </header>