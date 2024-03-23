<?php 
session_start();

require('app/app.php');


if (is_user_authenticated()) {
    redirect('admin/index.php');
}


if (is_post()) {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = sanitize($_POST['password']); 

    //% Compare with data storage
    if (auhtenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin/index.php');
    } else {
        $view_bag['status'] = "The provided credentials didn't work";
    }

    if ($email == false) {
        $view_bag['status'] = "Please enter a valid email address.";
    }
}

view('login');
