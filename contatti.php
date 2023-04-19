<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impostazioni profilo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php
    include 'navbar.php'
        ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-5">
                    <h3>Contattaci</h3>
                    <hr>
                </div>
                <form class="contacts">
                    <div class="row mb-5 gx-5">
                        <div class="col-xxl-8 mb-5 mb-xxl-0">
                            <div class="bg-secondary-soft px-4 py-5 rounded">
                                <div class="row g-3">
                                    <h4 class="mb-4 mt-0">Contatti</h4>
                                    <div class="col-md-6">
                                        <label class="form-label">Nome *</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Cognome *</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputDesc" class="form-label">Descrizione *</label>
                                        <textarea class="form-control" name="text-desc" id="inputDesc" cols="1" rows="3" required></textarea>

                                    </div>
                                    <input type="submit" value="Invia" class="btn btn-danger">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    const form = document.querySelector('.contacts');
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        alert('Grazie per averci contattato!');
                    });
                </script>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>