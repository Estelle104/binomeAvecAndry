<?php
include('../inc/fonction.php');
$dept_no = $_GET['dept_no'];
$val = getEmployees($dept_no);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Thème fond blanc, texte noir */

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #fff;
        /* fond blanc */
        color: #000;
        /* texte noir */
    }

    main {
        padding: 20px;
    }

    p {
        padding: 10px;
        margin: 10px 0;
        background-color: #f2f2f2;
        /* gris clair pour contraste */
        border-left: 4px solid #000;
        border-radius: 4px;
    }

    header,
    nav {
        background-color: #eee;
        padding: 10px 20px;
    }

    a {
        color: black;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <?php include('header.php'); ?>
    <main>
        <?php for ($i = 0; $i < count($val); $i++) { ?>
            <a href="ficheEmployee.php?emp_no=<?= $val[$i]['emp_no'] ?>"><p><?php echo $val[$i]['first_name']; ?> <?php echo $val[$i]['first_name']; ?> </p></a>
        <?php } ?>
    </main>
</body>

</html>