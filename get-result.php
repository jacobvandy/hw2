<?php
$pageTitle = "Get Result";
include "view-header.php";
?>
    <h1>Get Result</h1>
  
<?php
if (isset($_GET['jacob-vandy'])) {
  ?>
  <p>the value sent is: </p>
  <?php 
  echo $_GET['jacob-vandy'];
} else {
  ?>
  <p>Nothing sent to the page</p>
  <?php
}
include "view-footer.php";
?>
