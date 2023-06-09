<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aggiungi Evento</title>
        <?php
            include 'navbar.php'
        ?>
    </head>

    <body>
        <div class="all">
            <form class="file-upload" method="POST" id="upload">
                <div class="row mb-5 gx-5">
                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Nuovo Evento</h4>
                                <h6 class="mb-4 mt-0 text-danger">* Campi Obbligatori</h6>
                                <div class="col-md-6">
                                    <label class="form-label">Nome Evento </label>
                                    <input type="text" class="form-control" id="name-event" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Luogo Evento *</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                                <div>
                                    <label for="data-inizio" class="form-label">Data inizio*</label>
                                    <input type="date" class="form-control" id="data-inizio" required>
                                </div>
                                <div>
                                    <label for="event-time-start" class="form-label">Orario di inzio*</label>
                                    <input type="time" class="form-control" id="event-time-start" required>
                                </div>
                                <div>
                                    <label for="data-fine" class="form-label">Data fine (se impostata, impostare anche ora
                                        di
                                        fine)</label>
                                    <input type="date" class="form-control" id="data-fine">
                                </div>
                                <div>
                                    <label for="event-time-finish" class="form-label">Orario di fine</label>
                                    <input type="time" class="form-control" id="event-time-finish">
                                </div>
                                <input type="submit" value="Aggiungi" class="btn btn-danger" id="invio">
                            </div>
                        </div>
                    </div>
            </form>
            <script>

                let form = document.querySelector(".file-upload");
                console.log(form);
                form.addEventListener("submit", (e) => {
                    e.preventDefault();
                    console.log("nome:" + form.querySelector("#name-event").value);
                    console.log("citta:" + form.querySelector("#city").value);
                    console.log("inzio:" + form.querySelector("#data-inizio").value + "T" + form.querySelector("#event-time-start").value);
                    console.log("fine:" + form.querySelector("#data-fine").value + "T" + form.querySelector("#event-time-finish").value);



                    var myHeaders = new Headers();
                    myHeaders.append("Authorization", "token e841659c-3aaa-4d79-bf5c-bc1ebb7cec22");
                    myHeaders.append("Content-Type", "application/json");

                    let title = form.querySelector("#name-event").value;
                    let city = form.querySelector("#city").value;
                    let startDate = form.querySelector("#data-inizio").value + "T" + form.querySelector("#event-time-start").value;
                    let endDate = form.querySelector("#data-fine").value + "T" + form.querySelector("#event-time-finish").value;
                    if (endDate == "T") {
                        var raw = JSON.stringify({
                            "title": title,
                            "location": city,
                            "startsAt": startDate,
                        });
                    }
                    else {
                        var raw = JSON.stringify({
                            "title": title,
                            "location": city,
                            "startsAt": startDate,
                            "endsAt": endDate
                        });
                    }



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
                })
            </script>
        </div>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>