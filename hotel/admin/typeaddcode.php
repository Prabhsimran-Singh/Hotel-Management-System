<?php

$typename = $_REQUEST["typename"];
$typecharges = $_REQUEST["typecharges"];

$image1="";
$image2="";
$image3="";



$target_dir = "uploads/";

  foreach($_FILES["fileToUpload"]["tmp_name"] as $key=>$tmp_name)
   {
      
      if($key==0)
      {
          $image1=basename($_FILES["fileToUpload"]["name"][$key]);
      }
      else if($key==1)
      {
          $image2=basename($_FILES["fileToUpload"]["name"][$key]);
      }
      else if($key==2)
      {
          $image3=basename($_FILES["fileToUpload"]["name"][$key]);
      }
     
      
      $ppp=basename($_FILES["fileToUpload"]["name"][$key]);
      
$target_file = $target_dir .$ppp;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
echo $key."<br>";

if(isset($_POST["submit"])) {
    $check = getimagesize($tmp_name);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

     // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
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
} 
 else {


if (move_uploaded_file($tmp_name, $target_file)) {
echo "The file ". basename($_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
}

}

}


$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="insert into type (typename,charges,img1,img2,img3) values(?,?,?,?,?)";

$stmt = $db->prepare($query);
$stmt->bind_param("sssss",$typename,$typecharges,$image1,$image2,$image3);
$stmt->execute();


header("Location:typeshow.php");

?>