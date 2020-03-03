<?php
require_once 'system.php';
require_once 'header.php';

if ($_POST) {
    $user_id = $auth['id'];
    $message = $_POST['message'];
    $time = time();

    mysqli_query($conn, "insert into chat (user_id, message, time) values ('$user_id', '$message', '$time')");

    header('location: chat.php');
    exit;


}

$result = mysqli_query($conn, "select * from chat order by time desc");

?>

<div class="card border-light mt-1">
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="message"><?=$lang['message']?></label>
                <textarea id="message" name="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-secondary"><?=$lang['send_button']?></button>
        </form>

        <?php foreach ($result as $post):?>
            <hr>
            <?=$post['user_id']?> : <?=date('d.m.y / h:i', $post['time'])?><br>
            <?=$post['message']?>
        <?php endforeach;?>
    </div>
</div>


<?php
require_once 'footer.php';
