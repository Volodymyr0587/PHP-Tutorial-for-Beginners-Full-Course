<?php
session_start();

$title = 'POST Input';

require_once ('../inc/config.php');
require_once ('../inc/functions.php');

if (is_user_authenticated()) {
    redirect('admin.php');
    die();
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST['password']; // TODO: validate this!

    //% Compare with data storage
    if (auhtenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin.php');
        die();
    } else {
        $status = "The provided credentials didn't work";
    }

    if ($email == false) {
        $status = "Please enter a valid email address.";
    }
}

    include ('../inc/header.php');
?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-4xl">
            <?= $title ?>
        </h1>
        <!-- <p class="mt-3 text-lg text-gray-300">Cover is a one-page template for building simple and beautiful home pages
            using Tailwind CSS.</p> -->
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">

            <!-- CONTENT GOES HERE  -->

            <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="text" placeholder="Email">
                    <p class="mt-2 text-red-500 text-sm">
                        <?php 
                            if (isset($status)) {
                                echo $status;
                            }
                        ?>
                    </p>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="******************">
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                    <input
                        class="bg-blue-500 hover:bg-blue-700 cursor-pointer  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" name="login" value="Login">
                    </input>
                    <!-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a> -->
                </div>
            </form>


        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->



<?php include ('../inc/footer.php'); ?>