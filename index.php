<?php
require_once 'system.php';
require_once 'header.php';

$news_result = mysqli_query($conn, "select * from news order by time desc limit 1");
$news = mysqli_fetch_assoc($news_result);

?>

<div class="card border-light">
    <div class="card-body">
        <?php if ($news):?>
            <b><?=$news['title']?></b> <?=date('d.m.y / h:i', $news['time'])?><br>
            <?=substr($news['message'], 0, 100)?>...
        <?php else:?>
            <?=$lang['no_news_yet']?>
        <?php endif;?>
    </div>
</div>


<div class="card border-light">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="chat.php"><?=$lang['chat']?></a>
            </li>
        </ul>
    </div>

    <div class="card-body">
        <?php
            $chat_result = mysqli_query($conn, "select * from chat order by time desc limit 5");
        ?>

        <h5><?=$lang['latest_messages_from_chat']?></h5>

        <?php foreach($chat_result as $post):?>
            <?=username($post['user_id'])?>: <?=$post['message']?><br>
        <?php endforeach;?>
    </div>
</div>

<div class="card mt-1 border-light">
    <div class="card-body">
        <?=$lang['download_coolcms_from']?>
    </div>
</div>

<?php
require_once 'footer.php';