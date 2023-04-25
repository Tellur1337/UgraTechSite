<?php
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];


$db = new SQLite3('deal.db');
$db->exec("INSERT INTO deals (email, phone,comment) VALUES ('" . $email . "', '" . $phone . "', '" . $comment . "')");
$db->close();
echo '';

// $sql = "CREATE TABLE deals(
// id INTEGER PRIMARY KEY,
// email TEXT NOT NULL,
// phone TEXT NOT NULL,
// comment TEXT NOT NULL
// );";
// $res = $db->exec($sql);
// $db->exec("INSERT INTO deals (email, phone,comment) VALUES ('test@mail.ru', '89043278040', 'some comment')");