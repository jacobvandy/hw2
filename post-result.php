<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
  
<?php
if (isset($_POST['jacob-vandy'])) {
  ?>
  <p>the value sent is: </p>
  <?php 
  echo $_POST['jacob-vandy'];
} else {
  ?>
  <p>Nothing posted to the page</p>
  <?php
}
include "view-footer.php";
?>
