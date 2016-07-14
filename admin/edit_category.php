<?php include 'includes/header.php' ?>
<?php
  $id = $_GET['id'];
  //Create DB Object
  $db = new Database(); //this is how we create an object in PHP

  //Create query
  $query = "SELECT * FROM categories WHERE id = ".$id;

  //Run Query
  $category = $db->select($query)->fetch_assoc(); //we got the $query from above

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
      $query = "UPDATE categories
                SET
                name = '$name'
                WHERE id =".$id;

      $update_row = $db->update($query);

    }
  }
?>

<?php

  if(isset($_POST['delete'])){
    $query = "DELETE FROM categories WHERE id=".$id;
    $delete_row = $db->delete($query);
  }

?>
<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>
  <input name="submit" type="submit" class="btn btn-default" value="submit">
  <a class="btn btn-default" href="index.php">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="delete">
</form>
<br>
<?php include 'includes/footer.php' ?>