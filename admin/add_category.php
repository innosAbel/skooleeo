<?php include 'includes/header.php'; ?>



<form method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Category">
  </div>
  <div>
  <input name= "submit" type="submit" class="btn btn-default" value="Submit"/>
  <a href="index.php" class="btn btn-default">Cancel</a> 
  </div>
</form>

<?php include 'includes/footer.php'; ?>