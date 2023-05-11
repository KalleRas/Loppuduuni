<?php

require "dbconnection.php";
$dbcon = createDbConnection();

$playlistid = 24;

try {
    $dbcon -> beginTransaction();
    $statement = $dbcon->prepare("DELETE playlist_track, playlists FROM playlist_track INNER JOIN playlists ON playlist_track, playlists PlaylistId = playlists.PlaylistId WHERE playlist_track. PlaylistId = ?");
    $statement->execute(array($playlistid));

    $dbcon->commit();
}catch(Exception $e){
    $dbcon->rollback();
    echo "Cancel". $e->getMessage();
}

?>