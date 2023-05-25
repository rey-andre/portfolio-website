<?php
$berkas = "data/data.json";
$jsonData = file_get_contents($berkas);
$dataPesanAll = json_decode($jsonData, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Message</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <table class="table table-dark table-striped table-hover mt-4">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i=0; $i<count($dataPesanAll); $i++){
                    ?>
                    <tr>
                        <td><?=$dataPesanAll[$i][0]?></td>
                        <td><?=$dataPesanAll[$i][1]?></td>
                        <td><?=$dataPesanAll[$i][2]?></td>
                        <td><?=$dataPesanAll[$i][3]?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>