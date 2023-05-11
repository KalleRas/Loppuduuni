<?php

require "dbconnection.php";
$dbcon = createDbConnection();

$playslist_id = 420;

$sql = "SELECT NAME, Composer From tracks, playlist_track Where playlist_track.playlistid = $playslist_id And playlist_track.TrackId = tracks.tracks.TrackId";

$statement = $dbcon->prepare($sql);
$statement->execute();

$songs = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($songs as $playlist_song){
    echo $playlist_song["Name"]." ";

    echo $playlist_song["Composer"]."<hr>";
}

?>