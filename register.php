<?php
require_once 'system.php';
require_once 'header.php';

if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    mysqli_query($conn, "insert into users (email, username, password) values ('$email', '$username', '$password')");

    header('location: index.php');
    exit;
}

?>

<div class="card mt-1 border-light">
    <div class="card-body">
        <form method="post" action="register.php">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control" id="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <button type="submit" class="btn btn-secondary">Register</button>

        </form>

    </div>
</div>


<?php
require_once 'footer.php';
