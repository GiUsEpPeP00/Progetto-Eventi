<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Check-out</title>

    <?php
    include 'navbar.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-5">
                    <h3>Check-out</h3>
                    <hr>
                </div>
                <form class="contacts" method="post" action="confermaOrdine.php">
                    <div class="row g-3">
                        <h4 class="mb-4 mt-0">Dati di spedizione</h4>
                        <div class="col">
                            <label class="form-label">Nome *</label>
                            <input type="text" class="form-control" required>

                            <div class="mb-2">
                                <label class="form-label">Cognome *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="mb-2">
                                <label for="inputEmail4" class="form-label">Indirizzo *</label>
                                <input type="text" class="form-control" id="inputEmail4" required>
                            </div>

                            <div class="mb-2">
                                <label for="inputDesc" class="form-label">Cap *</label>
                                <input type="text" class="form-control" id="inputDesc" required>

                            </div>
                            <hr>

                            <h4 class="mt-3 mb-3">Dati pagamento</h4>
                            <div class="mb-2 credit-card">
                                <!-- image credit: https://icons.getbootstrap.com/icons/credit-card/ -->
                                <i class="fa-regular fa-credit-card"></i>
                                <label for="inputCard" class="form-label">Numero Carta *</label>
                                <input type="text" class="form-control" id="InputCard" placeholder="0000 0000 0000 0000"
                                    inputmode="numeric" required>
                            </div>
                            <div class="mb-2">
                                <label for="inputDate" class="form-label">Data Scadenza *</label>
                                <input type="text" class="form-control" id="InputDate" placeholder="mm/yyyy"
                                    inputmode="numeric" required>
                            </div>
                            <div class="mb-2">
                                <label for="inputCvv" class="form-label">CVV *</label>
                                <input type="text" class="form-control" id="InputCvv" placeholder="cvv"
                                    inputmode="numeric" required>
                            </div>
                            <hr>
                            <input type="submit" value="Conferma e paga" class="btn btn-danger">
                        </div>

                    </div>

                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <?php
    include 'footer.php';
    ?>

</body>

</html>