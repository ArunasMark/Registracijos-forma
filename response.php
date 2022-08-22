<?php
$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$lytis = $_POST['lytis'];
$transport = (isset($_POST['transport'])) ? $_POST['transport'] : array();


$city = $_POST['city'];

$about = $_POST['aboutme'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registracijos duomenys</title>
</head>

<body>
    <div class="col-4 m-auto bg-success p-2 text-dark bg-opacity-25 mt-5 px-3">
        <table class="table">
            <thead>
                <h4 class="text-center mt-2 mb-3">Registracijos duomenys</h4>
            </thead>
            <tbody>
                <tr>
                    <th scope=" row">VARDAS:</th>
                    <td class="text-end"><?php echo $vardas ?></td>
                </tr>
                <tr>
                    <th scope="row">PAVARDĖ:</th>
                    <td class="text-end"><?php echo $pavarde ?></td>
                </tr>
                <tr>
                    <th scope="row">LYTIS:</th>
                    <td class="text-end"><?php echo $lytis ?></td>
                </tr>
                <tr>
                    <th scope="row">Į PASKAITAS VYKSIU:</th>
                    <td class="text-end"> <?php if (count($transport) > 0) {
                                                foreach ($transport as $trans) {
                                                    echo $trans, "<br>";
                                                }
                                            } else {
                                                echo "Nepasirinkote transporto priemones";
                                            }
                                            ?></td>

                </tr>
                <tr>
                    <th scope="row">MIESTAS:</th>
                    <td class="text-end"><?php echo $city ?></td>
                </tr>
                <tr>
                    <th class="pb-0" scope="row" colspan="5">APIE SAVE:</th>

                </tr>
                <tr>
                    <td colspan="2" class="pt-0"><?php echo $about ?></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center my-3">
            <a href="form.php" class="btn btn-secondary">Grįžti atgal</a>
        </div>
    </div>


</body>

</html>