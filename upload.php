<?php
session_start();
include_once 'dbh.php';
$id = $_SESSION['userid'];

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName); // Explode() splits up the string 
    $fileActualExt = strtolower(end($fileExt)); // strtolower() Make strings lowercase

    $allowed = array('jpg', 'jpeg', 'png', 'HEIC');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 10000000) {
               // $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'profile-pictures/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: profile.php?uploadsuccess");
            }
            else {
                echo "Your file is too big!";
            }
        }
        else {
            echo "There was an error uploading your file!";
        }

    }
    else {
        echo "You Cannot Upload Files of this type!";
    }
}