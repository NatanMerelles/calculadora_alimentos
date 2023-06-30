<?php
//$_FILES["fileToUpload"]
function upload_file($file, $id) {
$imageFileType = strtolower(pathinfo($file["name"],PATHINFO_EXTENSION));
$target_dir = "uploads/";
$target_file = $target_dir . "food_" . $id . "." . $imageFileType;
$uploadOk = 1;

// Check if image file is a actual image or fake image
$check = getimagesize($file["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}

// Check file size
if ($file["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($file["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if($uploadOk){
  return $target_file;
}

}
?>