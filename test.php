<?php
    $json = file_get_contents("about.json");
    $about = json_decode($json, true);
    echo $about["when"];
?>