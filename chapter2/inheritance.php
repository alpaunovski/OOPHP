<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

    require 'PremiumCheckingAccount.php';

    // $checkingAccount = new CheckingAccount();

    // $checkingAccount->deposit(20);

    // $checkingAccount->withdraw(10);

    $premiumCheckingAccount = new PremiumCheckingAccount();

    $premiumCheckingAccount->balance = 3;
    
    echo 'Minimum balance: '. $premiumCheckingAccount->minimumBalance;
    echo "<br>";
    echo $premiumCheckingAccount->deposit(10);
    echo $premiumCheckingAccount->withdraw(5);
    echo 'Balance: '. $premiumCheckingAccount->getBalance() . "<br>";

    echo $premiumCheckingAccount->transfer(1);
    ?>
</body>
</html>