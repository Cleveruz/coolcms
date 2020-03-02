<?php
require_once 'system.php';
require_once 'header.php';

?>

<div class="card mt-1 border-light">
    <div class="card-body">
        Hello <b><?=$auth['username']?></b>!
    </div>
</div>

<?php
require_once 'footer.php';