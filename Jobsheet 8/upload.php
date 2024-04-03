<?php
    // if (isset($_POST["submit"])) {
    //     $targetDirectory = "uploads/"; //Direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    //     $maxFileSize = 5 * 1024 * 1024;

    //     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //             $thumbWidth = 200;
    //             $thumbHeight = 0;
          
    //             // Mendapatkan dimensi gambar asli
    //             $originalImage = imagecreatefromstring(file_get_contents($targetFile));
    //             $originalWidth = imagesx($originalImage);
    //             $originalHeight = imagesy($originalImage);
          
    //             // Menghitung tinggi thumbnail
    //             $thumbHeight = round(($originalHeight / $originalWidth) * $thumbWidth);
          
    //             // Membuat gambar thumbnail
    //             $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
    //             imagecopyresized($thumbImage, $originalImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $originalWidth, $originalHeight);
          
    //             // Menyimpan gambar thumbnail
    //             $thumbFilename = "thumbail_" . basename($targetFile);
    //             imagejpeg($thumbImage, $targetDirectory . $thumbFilename);
          
    //             echo "File berhasil diunggah. Thumbnail juga telah dibuat.";
    //         }
    //         else {
    //             echo "Gagal mengunggah file.";
    //         }
    //     }
    //     else {
    //         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //     }
    // }

    if (isset($_POST["submit"])) {
        $targetDirectory = "uploads/"; //Direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("txt", "pdf", "doc", "docx");

        $maxFileSize = 10 * 1024 * 1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
            }
            else {
                echo "Gagal mengunggah file.";
            }
        }
        else {
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>