<?php include 'includes/header.php' ?>
<?php
  //Create DB Object
  $db = new Database(); //this is how we create an object in PHP

  //Create query
  $query = "SELECT * FROM categories";

  //Run Query
  $categories = $db->select($query); //we got the $query from above
?>

<?php

  if(isset($_POST['submit'])){
    //Assign Vars
    $name = mysqli_real_escape_string($db->link, $_POST['name']);

    //Simple Validation
    if($name == ''){
      //Set error
      $error = 'Please fill out all required fields';
    } else {
      $query = "INSERT INTO categories (name)
      			VALUES ('$name')";

      $update_row = $db->update($query);

    }
  }
?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <input name="submit" type="submit" class="btn btn-default" value="submit">
</form>
<br>
<?php include 'includes/footer.php' ?>