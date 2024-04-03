<?php

    // if(isset($_FILES['file']['name'][0])) {
    //     if ($_FILES['file']['name'][0]) {
    //         $totalFiles = count($_FILES['file']['name']);
    
    //         // Loop melalui semua file yang diunggah
    //         for ($i = 0; $i < $totalFiles; $i++) {
    //             $file_name = $_FILES['file']['name'][$i];
    //             $errors = array();
    //             $file_size = $_FILES['file']['size'][$i];
    //             $file_tmp = $_FILES['file']['tmp_name'][$i];
    //             $file_type = $_FILES['file']['type'][$i];
    //             @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'][$i])) . "");
    //             $extension = array("pdf", "doc", "docx", "txt");
    
    //             //Pindahkan file yang diunggah ke direktori penyimpanan
    //             // if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
    //             //     echo "File $fileName berhasil diunggah.<br>";
    //             // }
    //             // else {
    //             //     echo "Gagal mengunggah file $fileName.<br>";
    //             // }
    //         }
    //         if (in_array($file_ext, $extension) === false) {
    //             $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    //         }
    
    //         if ($file_size > 524288) {
    //             $errors[] = 'Ukuran file tidak boleh lebih dari 4 MB';
    //         }
    
    //         if (empty($errors) == true) {
    //             move_uploaded_file($file_tmp, "images/" . $file_name);
    //             echo "File berhasil diunggah.";
    //         }
    //         else {
    //             echo implode(" ", $errors);
    //         }
    //     }
    // }
    if (isset($_FILES["file"])) {
        $errors = array();
        $file_name = $_FILES["file"]["name"];
        $file_size = $_FILES["file"]["size"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $file_type = $_FILES["file"]["type"];
        @$file_ext = strtolower("" . end(explode(".", $_FILES["file"]["name"])) . "");
        $extension = array("pdf", "doc", "docx", "txt");
        // $extension = array("jpg", "jpeg", "png");

        if(in_array($file_ext, $extension) == false) {
            $errors[] = "Ekstensi file yang diizinkan adaf PDF, DOC, DOCX, atau TXT.";
            // $errors[] = "Ekstensi file yang diizinkan adaf JPG, JPEG, PNG.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih 2 MB";
        }

        if(empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" .$file_name);
            // move_uploaded_file($file_tmp, "images/" .$file_name);
            echo "File $file_name berhasil diunggah";
            // move_uploaded_file($file_tmp, "images/" .$file_name);
            // echo "Gambar berhasil diunggah";
        } else {
            echo implode(" ", $errors);
        }
    }
?>;