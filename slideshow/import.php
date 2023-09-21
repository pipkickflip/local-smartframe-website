<?php
    $dir = './images';
    $file_display = array('jpg', 'jpeg', 'png', 'gif');

    if (file_exists($dir) == false) 
    {
        echo 'Directory "', $dir, '" not found!';
    } 
    else 
    {
        $dir_contents = scandir($dir);
        shuffle($dir_contents);

        foreach ($dir_contents as $file) 
        {
            $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true)     
            {
                $name = basename($file);
                echo "<div class='mySlides fade'><img src='images/{$name}'/></div>";
            }
        }
    }
?>