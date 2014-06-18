<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    /* Load the quotes JSON file */
    $file = "quotes.json";
    $string = file_get_contents($file);
    $json = json_decode($string, true);

    /* Select a quote at random */
    $num_quotes = count($json["quotes"]) - 1;
    $random_number = rand(0, $num_quotes);
    $quote = $json["quotes"][$random_number]["text"];
    $author = $json["quotes"][$random_number]["author"];
?>