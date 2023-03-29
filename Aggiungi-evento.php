<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Evento</title>
    <?php
    include("navbar.php");
    ?>
</head>

<body>
    <!-- Form START -->
    <form class="file-upload" method="POST">
        <div class="row mb-5 gx-5">
            <div class="col-xxl-8 mb-5 mb-xxl-0">
                <div class="bg-secondary-soft px-4 py-5 rounded">
                    <div class="row g-3">
                        <h4 class="mb-4 mt-0">Nuovo Evento</h4>
                        <h6 class="mb-4 mt-0 ms-3 text-danger">* Campi Obbligatori</h6>
                        <div class="col-md-6">
                            <label class="form-label">Nome Evento </label>
                            <input type="text" class="form-control" id="Name-event">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Luogo Evento *</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div>
                            <label for="cap" class="form-label">Data inizio*</label>
                            <input type="date" class="form-control" id="data-inizio">
                        </div>
                        <div>
                            <label for="cap" class="form-label">Data fine*</label>
                            <input type="date" class="form-control" id="data-fine">
                        </div>
                        <input type="submit" value="Aggiungi" class="btn btn-danger" id="invio">

                    </div>
                </div>
            </div>
    </form> <!-- Form END -->
</body>
<footer>
    <?php
    include("footer.php");
    ?>
</footer>
<script>

    let submit = document.getElementById("invio");

    submit.addEventListener("submit", (e) => {
        e.preventDefault();


        var myHeaders = new Headers();
        myHeaders.append("Authorization", "token 6711a971-8f97-45b0-998b-5cf00e0f20a0");
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify(
            {
                "title": document.getElementById("Name-event").value,
                "location": document.getElementById("city").value,
                "poster": null,
                "activitiesCount": 0,
                "startsAt": document.getElementById("data.inizio").value,
                "endsAt": document.getElementById("data.fine").value,

            }
        );

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("https://events.abattaglia.it/api/event/create", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
    });
</script>

</html>