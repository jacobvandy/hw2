<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
  
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay() {
        if (isset($_POST['jacob-vandy'])) {

 return "<p>the value sent is: </p>" . $_POST['jacob-vandy'];
} else {

 return "<p>Nothing posted to the page</p>";

}
}
?>
