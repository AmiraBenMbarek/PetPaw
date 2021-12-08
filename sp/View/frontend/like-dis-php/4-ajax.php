<?php
// (A) INIT
require "2-reactions.php";
$uid = 2; // USER ID, USE $_SESSION IN YOUR PROJECT

// (B) SAVE/UPDATE REACTION
if (!$_REACT->save($_POST["id"], $uid, $_POST["react"])) {
  exit(json_encode(["error" => $_REACT->error]));
}

// (C) GET UPDATED REACTIONS
$result = $_REACT->get($_POST["id"]);
echo json_encode($result["react"]);

// POSSIBLE RESPONSES
// ["ERROR" => ERROR MESSAGE]
// [LIKES, DISLIKES]
