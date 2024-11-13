<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .balance {
            float: right;
            width: 6%;
            color: #fff;
            background: red;
            padding: 7px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if (! isset($_SESSION)) {
            session_start();
        }
    // print_r($_SESSION);
        if (empty($_SESSION['balance'])) {
            $_SESSION['balance'] = 100;
        }

        // echo "<pre>";
        // print_r($_SESSION);
        // exit;
    ?>
    <div class="main" style="float: left; width: 100%;">
        <div class="header" style="width: 100%;">
            <div class="balance">
                <span>Rs. <?php echo $_SESSION['balance']; ?></span>
            </div>
        </div>
        <div class="select-bets" style="clear: both;">
            <a style="text-decoration: none;" href="http://localhost/AscendeumInteviewCode/dice.php?bet=below_7&balance=<?php echo $_SESSION['balance']; ?>">
                <div class="bets" style="width: 33.33%; float: left; height: 100px; background-color: #fbd277; text-align: center; ">
                    <p>Below 7</p>
                </div>
            </a>
            <a style="text-decoration: none;" href="http://localhost/AscendeumInteviewCode/dice.php?bet=lucky_7&balance=<?php echo $_SESSION['balance']; ?>">
                <div class="bets" style="width: 33.33%; float: left; height: 100px; background-color: #85fb77; text-align: center; ">
                    <p>Lucky 7</p>
                </div>
            </a>
            <a style="text-decoration: none;" href="http://localhost/AscendeumInteviewCode/dice.php?bet=above_7&balance=<?php echo $_SESSION['balance']; ?>">
                <div class="bets" style="width: 33.33%; float: left; height: 100px; background-color: #77ebfb; text-align: center; ">
                    <p>Above 7</p>
                </div>
            </a>
        </div>
        <div class="dice" style="<?php echo ( ! empty($_SESSION['dice_1']) && ! empty($_SESSION['dice_2'])) ? '' : 'display: none;'; ?> height: 100px; width: 100%; float: left">
            <div class="dice-1" style="width: 50%; text-align: center; background-color:cadetblue; float: left; height: 100%;">
                <p><?php echo $_SESSION['dice_1']; ?></p>
            </div>
            <div class="dice-2" style="width: 50%; text-align: center; background-color:cornflowerblue; float: left; height: 100%;">
                <p><?php echo $_SESSION['dice_2']; ?></p>
            </div>
        </div>
        <div class="result" style="background-color: green; text-align: center; height: 100px; float: left; width: 100%; <?php echo empty($_SESSION['result']) ? 'display: none' : ''; ?>;">
            <h1>You <?php echo $_SESSION['result']; ?></h1>
        </div>
        <div class="reset" style="text-align: center;">
            <a href="http://localhost/AscendeumInteviewCode/dice.php?reset=true" style="text-decoration: none; color: red;">Reset</a>
        </div>
    </div>
</body>
</html>