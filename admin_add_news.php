<?php
require_once 'system.php';
require_once 'header.php';

admin_only();

if ($_POST) {
    $title = $_POST['title'];
    $message = $_POST['message'];
    $time = time();

    mysqli_query($conn, "insert into news (title, message, time) values ('$title', '$message', '$time')");

    redirect('index.php');
}

?>

<div class="card border-light mt-1">
    <div class="card-body">
        <form method="post" action="admin_add_news.php">
            <div class="form-group">
                <label for="title"><?=$lang['title']?></label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message"><?=$lang['message']?></label>
                <textarea name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><?=$lang['add_button']?></button>
        </form>
    </div>
</div>

<?php
require_once 'footer.php';
