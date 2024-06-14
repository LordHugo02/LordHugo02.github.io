<?php
    
    $json = file_get_contents('src/forums.json');
    
    // Decode the JSON file
    $listeForum = json_decode($json,true);
    $listeForum = $listeForum['forum'];
    $forum = "null";
//    var_dump($listeForum[0]['id'], true);
//    echo ('id :');
//    var_dump($_GET['id']);
//    echo ('<br>');
//    echo ('foreach forum :');
//    echo ('<br>');
    
    foreach ($listeForum as $f){
//        var_dump($f['id']);
//        echo ('<br>');
//        var_dump(intval($_GET['id']));
//        echo ('<br>');
        if ($f['id'] == intval($_GET['id'])){
            $forum = $f;
        }
        
        
    }
//    echo(' <br> le forum : ');
//    var_dump($forum);
    
    
    
