<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lafleur fleuristes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="public/reset.css" />
    <link rel="stylesheet" href="public/common.css" />
    <link rel="stylesheet" href="public/style.css" />
    <link rel="stylesheet" href="public/card.css" />
</head>

<body>
    <?php
    include 'App/view/v_header.php';

    switch ($uc) {
            // view controller
        case 'home':
            include 'App/view/v_home.php';
            break;
        case 'all':
            include 'App/view/v_all.php';
            break;
        case 'product':
            include 'App/view/v_showproduct.php';
            break;

            //customer account management
        case 'isRegistered':
            include 'App/view/v_isregistered.php';
            break;
        case 'log':
            include 'App/view/v_loguplogin.php';
            break;
        case 'account':
            include 'App/view/v_account.php';
            break;
        case 'cart':
            include 'App/view/v_cart.php';
            break;

            //orders
        case 'order':
            include 'App/view/v_order_success.php';
            break;
        case 'lottery':
            include 'App/view/v_lottery.php';
            break;

            //misc
        case 'us':
            include 'App/view/v_us.php';
            break;
        case 'terms':
            include 'App/view/v_terms.php';
            break;
        default:
            header('Location: App/view/404.php');
            break;
    }

    include 'App/view/v_footer.php';
    ?>
</body>
<script src="public/main.js"></script>
</html>