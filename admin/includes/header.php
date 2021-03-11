<?php include '../config/config.php'; ?>
<?php include '../libraries/Database.php'; ?>
<?php include '../helpers/format_helper.php'; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Admin Area</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">

    
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Dashboard</a>  
            </li>
            <li>
              <a class="nav-link" href="add_post.php">Add Post</a>
            </li>
            <li>
              <a class="nav-link" href="add_category.php">Add Category</a>
            </li>
            <li>
              <a class="nav-link pull-right" href="index.php">Visit Blog</a>
            </li>
      </ul>
    </div>
  </nav>
    <div class="container">

      <div class="blog-header">
        <h2>Admin Area</h2>
      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">