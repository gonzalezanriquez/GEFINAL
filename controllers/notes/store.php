<?php

use Core\Validator;
use Core\Database;

$errors = [];

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than a 1,000 characters is required';
    }

    if (! empty($errors))
    {
       return view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors
        ]);
    }

    if (empty($errors)) {
        $db->query('insert into notes(body, user_id) values(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        header('lcoation: /notes');
        die();
    }

