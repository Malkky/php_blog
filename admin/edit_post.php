<?php include 'includes/header.php' ?>
<?php
  $id = $_GET['id'];
  //Create DB Object
  $db = new Database(); //this is how we create an object in PHP

  //Create query
  $query = "SELECT * FROM posts WHERE id = ".$id;

  //Run Query
  $post = $db->select($query)->fetch_assoc(); //we got the $query from above

  //Create query
  $query = "SELECT * FROM categories";

  //Run Query
  $categories = $db->select($query); //we got the $query from above
?>

<?php

  if(isset($_POST['submit'])){
    //Assign Vars
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    //Simple Validation
    if($title == '' || $body == '' || $category == '' || $author == ''){
      //Set error
      $error = 'Please fill out all required fields';
    } else {
      $query = "UPDATE posts
                SET
                title = '$title',
                body = '$body',
                category = '$category',
                author = '$author',
                tags = '$tags'
                WHERE id =".$id;

      $update_row = $db->update($query);

    }
  }
?>

<?php

  if(isset($_POST['delete'])){
    $query = "DELETE FROM posts WHERE id=".$id;
    $delete_row = $db->delete($query);
  }

?>
<form method="post" action="edit_post.php?id=<?php echo $id;?>">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Category</label>
    <select name="category" class="form-control">
      <?php while($row = $categories->fetch_assoc()) : ?>
          <?php if($row['id'] == $post['category']){
            $selected = 'selected';
          } else {
            $selected = '';
          }
          ?>
	       <option value="<?php echo $row['id']; ?>"<?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
	</select>
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
  </div>
  <input name="submit" type="submit" class="btn btn-default" value="submit">
  <a class="btn btn-default" href="index.php">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="delete">

</form>
<br>

<?php include 'includes/footer.php' ?>