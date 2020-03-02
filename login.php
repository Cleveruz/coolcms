<?php
require_once 'system.php';
require_once 'header.php';

if ($_POST) {
    $username = $_POST['username'];

    $result = mysqli_query($conn, "select * from users where username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user and password_verify($_POST['password'], $user['password'])) {
        // logged in
        header('location: index.php');
        exit;
    } else {
        header('location: login.php');
        exit;
    }
}

?>

<div class="card border-light mt-1">
    <div class="card-body">
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="username">
            </div>

            <button type="submit" class="btn btn-secondary">Login</button>
        </form>
    </div>
</div>

<?php
require_once 'footer.php';
