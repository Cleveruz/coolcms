<?php
require_once 'system.php';
require_once 'header.php';

auth_only();

?>

<div class="card mt-1 border-light">
    <div class="card-body">
        <?=$lang['hello']?> <b><?=$auth['username']?></b>!
    </div>
</div>

<?php
require_once 'footer.php';