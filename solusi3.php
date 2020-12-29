<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "file gambar " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File upload bukan gambar";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "file sudah ada";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 102400) {
    echo "gagal! max size 100kb";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "hanya file .jpg/.png/.jpeg";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Upload gagal!";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " file di upload";
    } else {
        echo "upload error ";
    }
}
?>