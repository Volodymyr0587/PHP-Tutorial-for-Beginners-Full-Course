<?php 

require('../app/app.php');

if (is_get()) {
    $key = sanitize($_GET['key']);

    if (empty($key)) {
        view('not_found');
        die();
    }

    $term = get_term($key);

    if ($term === false) {
        view('not_found');
        die();
    }

    view('admin/delete', $term);
}

if (is_post()) {
    $term = sanitize($_POST['term']);

    if (empty($term)) {
        // TODO: display message
    } else {
        delete_term($term);
        redirect('index.php');
    }
}
