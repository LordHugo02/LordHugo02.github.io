<?php
    $json = file_get_contents('src/forums.json');
    
    // Decode the JSON file
    $listeForum = json_decode($json,true);
    $listeForum = $listeForum['forum'];