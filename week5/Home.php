<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

//  Renaming upload File (PHP)
if(!empty($_FILES['stdimage']['name']))
{
    echo "file Name : " . $_FILES['stdimage']['name'];
    echo "<hr>";

    echo "File Size: " . $_FILES['stdimage']['size'];
    echo "<hr>";

    echo "Temporary Name: " . $_FILES['stdimage']['tmp_name'];
    echo "<hr>";

    echo "File Type: " . $_FILES['stdimage']['type'];

    // Rename uploaded file
    $ext = explode(".", $_FILES['stdimage']['name']);
    $ext = end($ext);

    // Move the uploaded file
    $temp = $_FILES['stdimage']['tmp_name'];
    $destination = "d:/PHP/New PHP_Update/Test/" . $_POST['fullName'] . "." . $ext;

    if (move_uploaded_file($temp, $destination)) {
        echo "File uploaded successfully";
    } else {
        echo "File upload failed";
    }
}
else
{
    echo "no file is selected";
}









// file_exists 
if (file_exists ("Docs/". $_FILES['scertificate']['name']))       
    echo ("<br>Sorry, file: ". $_FILES['scertificate']['name']. " already exists.");


// Check file size
if($_FILES["stdimage"]['size'] < 10 * 1024)
{
    // Move the uploaded file
    if (move_uploaded_file($temp, $destination)) {
        echo "File uploaded successfully";
    } else {
        echo "File upload failed";
    }
}
else
{
    echo "File size is Not allowed";
}










//  Uploading multiple files 

if (!empty($_FILES['stdimage']['name'][0]))
{
    // Loop through multiple files
    for ($i = 0; $i < count($_FILES['stdimage']['name']); $i++)
    {
        echo "File Name: " . $_FILES['stdimage']['name'][$i];
        echo "<hr>";
        
        echo "File Size: " . $_FILES['stdimage']['size'][$i];
        echo "<hr>";
        
        echo "Temporary Name: " . $_FILES['stdimage']['tmp_name'][$i];
        echo "<hr>";
        
        echo "File Type: " . $_FILES['stdimage']['type'][$i];
        echo "<hr>";
        
        // Get temporary file
        $temp = $_FILES['stdimage']['tmp_name'][$i];
        
        // Destination folder
        $destination = "d:/PHP/New PHP_Update/Test/" . $_FILES['stdimage']['name'][$i];
        
        // Check whether file already exists
        if (file_exists($destination))
        {
            echo "Sorry, file already exists";
        }
        else
        {
            // Check file size
            if ($_FILES['stdimage']['size'][$i] > 50 * 1024)
            {
                // Check file extension
                $extension = array("png", "pdf");
                $name_ext = explode(".", $_FILES['stdimage']['name'][$i]);
                $ext = strtolower(end($name_ext));
                
                if (!in_array($ext, $extension))
                {
                    echo "File extension: $ext is not allowed";
                }
                else
                {
                    // Move uploaded file
                    if (move_uploaded_file($temp, $destination))
                    {
                        echo "File uploaded successfully";
                    }
                    else
                    {
                        echo "File upload failed";
                    }
                }
            }
            else
            {
                echo "File size is Not allowed";
            }
        }
        echo "<hr>";
    }
}
else
{
    echo "No file is selected";
}



 ?>
    
</body>
</html>
