<?php
include('../inc/fonction.php');
$getdepartement = getDepartements();
$getmanager = getManagerLoading();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Donner massif</title>
</head>
<body>
    <head>
        <?php 
            include('header.php')
        ?>
    </head>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <?php while($donne = mysqli_fetch_assoc($getdepartement)){ ?>
                            <a class="nav-link active shadow text-center" aria-current="page" href="dept_emp.php?dept_no=<?php echo $donne['dept_no'] ?>"><?php echo $donne['dept_name'] ?></a>
                        <?php } ?>
                    </li>
                </ul>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row shadow">
                        <head>
                            <div class="header">
                                <h3 class="text-center">Manager Disposnible</h3>
                            </div>
                            <main>
                                <div class="container shadow">
                                    <div class="container overflow-hidden text-center">
                                      <div class="row gy-5">
                                        <?php while($manager=mysqli_fetch_assoc($getmanager)){ ?>
                                        <div class="col-6">
                                          <div class="p-3"><?php echo $manager['first_name'] ?></div>
                                        </div>
                                        <?php } ?>
                                      </div>
                                    </div>
                                </div>
                            </main>
                        </head>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>