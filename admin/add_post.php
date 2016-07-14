<?php include 'includes/header.php'; ?>
<?php
  //Create DB Object
  $db = new Database(); //this is how we create an object in PHP

  //Create query
  $query = "SELECT * FROM categories";

  //Run Query
  $categories = $db->select($query); //we got the $query from above

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
      $query = "INSERT INTO posts(title, body, category, author, tags)
                VALUES('$title', '$body', '$category', '$author', '$tags')";

      $insert_row = $db->insert($query);
    }
  }

?>
<form method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group" >
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category Select</label>
    <select name="category" class="form-control">
      <?php while($row = $categories->fetch_assoc()): ?>
       <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
	</select>
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group" method="post" action="add_post.php" >
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
  </div>
  <input name="submit" type="submit" class="btn btn-default" value="submit">
  <a class="btn btn-default" href="index.php">Cancel</a>
  <?php if(isset($error)): ?>
      <p class="text-center label label-danger"><?php echo $error; ?></p>
    <?php endif; ?>
</form>
<br>

<?php include 'includes/footer.php'; ?>