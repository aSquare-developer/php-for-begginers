<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

// Form was submitted. Delete the current code
$db->query('DELETE FROM notes where id = :id', [
    'id' => $_POST['id']
]);

header('Location: /notes');
exit();
