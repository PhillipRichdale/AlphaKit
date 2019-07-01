<?php

if (!defined('ABSPATH')) {
    die;
}

function generateShellScripts()
{
    if (is_dir($_SERVER['DOCUMENT_ROOT']."/wp-content/uploads")) {
        $uploadDir = $_SERVER['DOCUMENT_ROOT']."/wp-content/uploads";
    } elseif (is_dir("../../uploads")) {
        $uploadDir = "../../uploads";
    } else {
        echo "AlphaKit says: curl shellscript generation error -> WP uploads directory not found.";
        return false;
    }

    $objects = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($uploadDir),
        RecursiveIteratorIterator::SELF_FIRST
    );

    $output = "#!/bin/bash\n";
    $output .= "tput sc\n";
    $output .= "count=0\n";
    $output .= "if [ ! -d \"wp-content\" ]\n";
    $output .= "    then echo \"This is not a WordPress root directory!\"; exit\n";
    $output .= "fi\n";

    $wgetOutput = "";
    $count = 0;

    $total = 0;
    foreach ($objects as $name => $object) {
        $total++;
    }

    foreach ($objects as $name => $object) {
        if ((stripos($name, ".jpg") !== false)
            ||
            (stripos($name, ".jpeg") !== false)
            ||
            (stripos($name, ".png") !== false)
            ||
            (stripos($name, ".gif") !== false)
        ) {
            $count++;
            $relFilePath = str_replace($_SERVER['DOCUMENT_ROOT'] . "/", "", $name);
            $thisFileUrl = "http://" . $_SERVER['SERVER_NAME'] . "/$relFilePath";

            $output .= "if [ ! -e $relFilePath ]\n";
            $output .= "    tput ed\n";
            $output .= "    tput rc\n";
            $output .= "    then curl $thisFileUrl --create-dirs -o $relFilePath\n";
            $output .= "    let \"count += 1\"\n";
            $output .= '    echo "$(tput setaf 7)Filefetch # $(tput setaf 1)$count$(tput setaf 7) '
                                .':: Fetching file'." $count of $total\"$(tput setaf 4)\n";
            $output .= "fi\n";
        }
    }
    $output .= "(tput setaf 7)\n";
    
    $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . "/wp-content/uploads/curl-media-dl.bash", "w")
                    or die("Can't create a file! Permissions?");
    fwrite($myfile, $output);
    fclose($myfile);

    return true;
}
