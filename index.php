<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);

curl_close($ch);


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Marvel movie</title>
    <!-- Centered viewport -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
   <section>
      <img src="<?php echo $data["poster_url"] ?>" width="400" 
       style="border-radius: 16px;"
      >
   </section>

   <hgroup>
        <h2><?php echo $data["title"] ?> se estrena en <?php echo $data["days_until"] ?> dias.</h2>
        <p>Fecha de estreno: <?php echo $data["release_date"]?></p>
        <p>La siguiente pelicula es: <?php echo $data["following_production"]["title"]?></p>
        <p>hecho por: elias :3</p>
   </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>