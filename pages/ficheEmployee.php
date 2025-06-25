<?php
    include('../inc/fonction.php');
    $emp_no = $_GET['emp_no'];
    $info = ficheEmployee($emp_no);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <div class="container">
            <header>
                <strong><?= $info['first_name'] ?> <?= $info['first_name'] ?></strong>
            </header>
        </div>
    </main>
</body>
</html>