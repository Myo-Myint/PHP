<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson4 Assignment</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<style>
    body{
        background:#f3ede0;
    }
</style>
<body class="vh-100  d-flex flex-column justify-content-center align-items-center">
    <div class=""><img src="images/sc.jpg" class="img-fluid" alt=""></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-4 p-4 ">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h5 class="card-title mb-4"> Task For student</h5>
                        <ul>
                            <?php foreach ($task as $key => $value) : ?>
                               <li>
                                    <?= "$key = $value" ?>
                               </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>