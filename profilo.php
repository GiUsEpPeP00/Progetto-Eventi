<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impostazioni profilo</title>
    <link rel="stylesheet" href="profilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php include "navbar.php" ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-5">
                    <h3>Profilo</h3>
                    <hr>
                </div>
                <form class="file-upload">
                    <div class="row mb-5 gx-5">
                        <div class="col-xxl-8 mb-5 mb-xxl-0">
                            <div class="bg-secondary-soft px-4 py-5 rounded">
                                <div class="row g-3">
                                    <h4 class="mb-4 mt-0">Contatti</h4>
                                    <div class="col-md-6">
                                        <label class="form-label">Nome *</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Cognome *</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class=" col-md-6">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address" class="form-label">Indirizzo *</label>
                                        <input type="text" class="form-control" id="address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Città *</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cap" class="form-label">CAP *</label>
                                        <input type="text" class="form-control" id="cap">
                                        <a href="index.php" class="btn btn-outline-danger mt-4">Salva</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </form> <!-- Form END -->
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>