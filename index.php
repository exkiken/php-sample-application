<?php

//$lastJoinedUsers = (require "dic/users.php")->getLastJoined();
$lastJoinedUsers = (require "dic/users.php")->query('SELECT id, joined, name FROM user ORDER BY joined DESC LIMIT 10')->fetchAll();;

(new Views\Layout(
    "Twitter - Newcomers", new src\Views\Users\Listing($lastJoinedUsers), true
))();

// switch (require "dic/negotiated_format.php") {
//     case "text/html":
//         (new Views\Layout(
//             "Twitter - Newcomers", new Views\Users\Listing($lastJoinedUsers), true
//         ))();
//         exit;

//     case "application/json":
//         header("Content-Type: application/json");
//         echo json_encode($lastJoinedUsers);
//         exit;
// }

http_response_code(406);
