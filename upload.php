
<?php
if($_FILES["userfile"]["error"] > 0){
  die("An error ocurred when uploading.");
}

if($_FILES["userfile"]["size"] > 10000000){
  die("File uploaded exceeds maximum upload size.");
}

if($_FILES["userfile"]["name"]){
  $check = filesize($_FILES["userfile"]["tmp_name"]);
  echo "size: " . $_FILES["userfile"]["size"] . " bytes";
  echo "<br>";
  echo "type: " . $_FILES['userfile']['type'];
}
?>
