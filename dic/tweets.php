<?php

// return new Service\TweetsService(
//     require "config/db-connection.php"
// );
return new PDO("mysql:host=192.168.0.2;dbname=proyecto1", "sampleuser", 'samplepass');