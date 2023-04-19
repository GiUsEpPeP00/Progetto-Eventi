<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
                            <div class="mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                </svg>
                                <label for="inputCard" class="form-label">Numero Carta *</label>
                                <input type="text" class="form-control" id="InputCard" placeholder="0000 0000 0000 0000"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="inputDate" class="form-label">Data Scadenza *</label>
                                <input type="text" class="form-control" id="InputDate" placeholder="mm/yyyy" required>
                            </div>
                            <div class="mb-2">
                                <label for="inputCvv" class="form-label">CVV *</label>
                                <input type="text" class="form-control" id="InputCvv" placeholder="cvv" required>
                            </div>
                            <hr>
                            <input type="submit" value="Conferma e paga" class="btn btn-danger">
                        </div>

                    </div>

                </form>
            </div>
        </div>

    </div>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>