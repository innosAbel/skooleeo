<?php include 'config/bootstrap.php'; ?>
<?php if(!isset($_SESSION)) session_start(); ?>
<?php 

    //Create DB Object
    $db = new Database();

    //Check URL for category
    if (isset($_GET['category'])) {
      $category=$_GET['category'];

        //Create Query
    $query ="SELECT * FROM posts WHERE category = ".$category;

    //Run Query

    $posts = $db->select($query);
    }
   
    else {

      //Create Query
    $query ="SELECT * FROM posts";

    //Run Query

    $posts = $db->select($query);
    }

   //Create Query
  $query ="SELECT * FROM categories";

  //Run Query

  $categories = $db->select($query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple PHP Blog</title>
    <!-- Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php if($categories) : ?>
      <ul class="navbar-nav">
          <?php while($row=$categories->fetch_assoc()) : ?>
            <li class="nav-item">
              <a class="nav-link" href="posts.php?category=<?php echo $row['id'] ;?>"><?php echo $row['name'] ;?></a>
            </li>
          <?php endwhile; ?>
          <?php else : ?>
            <p>There are no categories yet</p>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-8 blog-main">

