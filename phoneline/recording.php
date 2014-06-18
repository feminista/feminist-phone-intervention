<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    /* NOTE: Replace YOUR_APPLICATION_NAME with the name of your application. */
    $recordings_url = "http://YOUR_APPLICATION_NAME.appspot.com/recordings/";

    /* Load the recordings JSON file */
    $file = "recordings.json";
    $string = file_get_contents($file);
    $json = json_decode($string, true);

    /* Select a recording at random */
    $num_recordings = count($json["recordings"]) - 1;
    $random_number = rand(0, $num_recordings);
    $recording = $json["recordings"][$random_number]["file"];
?>

<!-- Play the selected recording -->
<Response>
    <Play><?php echo $recordings_url ?><?php echo $recording ?></Play>
</Response>

