<?php
require_once 'system.php';
require_once 'header.php';

guest_only();

if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_result = mysqli_query($conn, "select * from users where username = '$username'");
    $user = mysqli_fetch_assoc($user_result);

    if ($user) {
        redirect('register.php');
    }

    mysqli_query($conn, "insert into users (email, username, password) values ('$email', '$username', '$password')");

    redirect('login.php');
}

?>

<div class="card mt-1 border-light">
    <div class="card-body">
        <form method="post" action="register.php">

            <div class="form-group">
                <label for="username"><?=$lang['username']?></label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>

            <div class="form-group">
                <label for="email"><?=$lang['email']?></label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="password"><?=$lang['password']?></label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <button type="submit" class="btn btn-secondary"><?=$lang['register_button']?></button>

        </form>

    </div>
</div>


<?php
require_once 'footer.php';
