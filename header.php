<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap.min.css">

    <title>CoolCMS</title>

    <style>
        body {
            max-width: 750px;
            margin: auto;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">CoolCMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=$lang['pages']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="chat.php"><?=$lang['chat']?></a>
                    <?php if ($auth):?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="account.php"><?=$lang['account']?></a>
                        <a class="dropdown-item" href="logout.php"><?=$lang['logout']?></a>
                    <?php endif;?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <?php if ($auth):?>
            <?php if ($auth['id'] == 1):?>
                <a class="btn btn-primary my-2 mr-1 my-sm-0" href="admin.php">Admin</a>
            <?php endif;?>
            <a class="btn btn-secondary my-2 mr-1 my-sm-0" href="account.php"><?=$lang['account']?></a>
        <?php else:?>
            <a class="btn btn-secondary my-2 mr-1 my-sm-0" href="login.php"><?=$lang['login_button']?></a>
            <a class="btn btn-danger my-2 my-sm-0" href="register.php"><?=$lang['register_button']?></a>
        <?php endif;?>
    </div>
</nav>