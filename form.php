<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registracijos forma</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid fst-italic col-10 text-white bg-primary bg-opacity-75 pb-3 ps-5">
        <h3 class="text-end m-5 pt-5">Studento registracija</h3>
        <form action="response.php" method="POST">
            <div class="col-6">
                <label for="exampleDataList" class="form-label fs-5">Vardas</label>
                <input class="form-control mb-3" list="datalistOptions" id="exampleDataList" name="vardas" required>

                <label for="exampleDataList" class="form-label fs-5" required>Pavardė</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="pavarde" required>
            </div>
            <div class="col-6 mt-5">
                <h5 class="mb-3">Lytis</h5>
                <div class="d-flex mb-5">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="lytis" id="exampleRadios1" value="Vyras" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Vyras
                        </label>
                    </div>
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="lytis" id="exampleRadios2" value="Moteris">
                        <label class="form-check-label" for="exampleRadios2">
                            Moteris
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lytis" id="exampleRadios3" value="Kita">
                        <label class="form-check-label" for="exampleRadios3">
                            Kita
                        </label>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <h5>Į paskaitas atvyksiu:</h5>
                    <div class="d-flex mt-3 mb-5">
                        <div class="form-check me-5">
                            <input class="form-check-input" type="checkbox" value="Automobiliu" id="flexCheckDefault" name="transport[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Automobiliu
                            </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" type="checkbox" value="Autobusu" id="flexCheckChecked" name="transport[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Autobusu
                            </label>
                        </div>
                        <div class="form-check me-5">
                            <input class="form-check-input" type="checkbox" value="Dviračiu" id="flexCheckDefault" name="transport[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dviračiu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pėsčiomis" id="flexCheckChecked" name="transport[]">
                            <label class="form-check-label" for="flexCheckChecked">
                                Pėsčiomis
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4 d-grid col-12">
                    <div>
                        <h5>Kokiame mieste studijuojate?</h5>
                    </div>

                    <div class="btn-group mt-3 mb-5 d-grid col-12">

                        <select class="p-2 rounded-2" name="city" required>
                            <option value="" class="text-muted">Pasirinkite miestą</option>
                            <option value="Vilnius" class="fs-5">Vilnius</option>
                            <option value="Kaunas" class="fs-5">Kaunas</option>
                            <option value="Klaipeda" class="fs-5">Klaipėda</option>
                            <option value="Kitas" class="fs-5">Kitas</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 d-grid col-12">
                    <h5>Trumpai apie save</h5>
                    <div class="form-floating mb-5 text-muted mt-3">
                        <textarea class="form-control" placeholder="Apie save" id="floatingTextarea2" name="aboutme" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Apie save...</label>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mb-5">
                    <button class="btn btn-secondary" type="submit">Pateikti</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>