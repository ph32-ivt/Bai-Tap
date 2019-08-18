<?php
 // var_dump($_FILES['file']);
if (isset($_FILES['file']) && !empty($_FILES['file'])) {
    $no_files = count($_FILES["file"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["file"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["file"]["error"][$i] . "<br>";
        } else {
            if (file_exists('uploads/' . $_FILES["file"]["name"][$i])) {
                echo 'File already exists : uploads/' . $_FILES["file"]["name"][$i];
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"][$i], 'uploads/' . $_FILES["file"]["name"][$i]);
                echo 'File successfully uploaded : uploads/' . $_FILES["file"]["name"][$i] . ' ';
            }
        }
    }
} else {
    echo 'Please choose at least one file';
}
    
/* 
 * End of script
 */