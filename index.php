<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>TicketSud</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <?php
        include_once 'navbar.php';
        ?>
    </head>

    <body>
        <div class="all">
            <div class="container py-3 list">
                <div class="container-row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <div class="title-text">
                                <h2>Scegli l'evento adatto a te!</h2>
                            </div>
                            <p>
                                Immergiti nella Puglia meridionale, piena di profumi e odori mediterranei che ti faranno
                                vivere
                                un esperienza indimenticabile
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div id="list-events" class="container">

            </div>
            <!-- Code for fetch -->
            <script>
                var myHeaders = new Headers();
                myHeaders.append("Authorization", "token e841659c-3aaa-4d79-bf5c-bc1ebb7cec22");

                var requestOptions = {
                    method: 'GET',
                    headers: myHeaders,
                    redirect: 'follow'
                };
                let startDate;


                fetch("https://events.abattaglia.it/api/event/list", requestOptions)
                    .then(response => response.json()) // convertire la risposta in formato JSON
                    .then(events => { // elaborare i dati degli eventi
                        const container = document.querySelector('#list-events');
                        events.forEach(event => {
                            /* gestione tempo */
                            let months = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
                            let startDate;
                            let endDate;
                            let eventTimeStart;
                            let eventTimeFinish;
                            let eventMonthStart;
                            let eventMonthFinish;
                            let eventLocation = event.location;
                            // creare un blocco evento per ogni evento
                            const newEvent = document.createElement('div');
                            newEvent.classList.add('row', 'align-items-center', 'event-block', 'no-gutters', 'margin-40px-bottom');
                            if (event.startsAt != null) {
                                startDate = event.startsAt.slice(8, 10);
                                eventTimeStart = "Inizio: " + event.startsAt.slice(11, 16);
                                switch (event.startsAt.slice(5, 7)) {
                                    case '01':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '02':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '03':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '04':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '05':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '06':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '07':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '08':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '09':
                                        eventMonthStart = months[event.startsAt.slice(6, 7) - 1];
                                        break;

                                    case '10':
                                        eventMonthStart = months[event.startsAt.slice(5, 7) - 1];
                                        break;

                                    case '11':
                                        eventMonthStart = months[event.startsAt.slice(5, 7) - 1];
                                        break;

                                    case '12':
                                        eventMonthStart = months[event.startsAt.slice(5, 7) - 1];

                                }
                            }
                            else {
                                startDate = "";
                                eventTimeStart = "";
                                eventMonthStart = "";
                            }

                            if (event.endsAt != null) {
                                endDate = event.endsAt.slice(8, 10);
                                eventTimeFinish = "Fine: " + event.endsAt.slice(11, 16);
                                switch (event.endsAt.slice(5, 7)) {
                                    case '01':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '02':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '03':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '04':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '05':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '06':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '07':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '08':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '09':
                                        eventMonthFinish = months[event.endsAt.slice(6, 7) - 1];
                                        break;

                                    case '10':
                                        eventMonthFinish = months[event.endsAt.slice(5, 7) - 1];
                                        break;

                                    case '11':
                                        eventMonthFinish = months[event.endsAt.slice(5, 7) - 1];
                                        break;

                                    case '12':
                                        eventMonthFinish = months[event.endsAt.slice(5, 7) - 1];

                                }
                            }
                            else {
                                endDate = "";
                                eventTimeFinish = "";
                                eventMonthFinish = "";
                            }

                            let poster;

                            if (!event.poster) {
                                poster = '<img class="img-poster" src="icon-image-512.webp" alt="Poster Not Available"/>';
                            } else {
                                poster = '<img class="img-poster" src="' + event.poster + '" alt="Event Poster"/>';
                            }


                            newEvent.innerHTML = `
                        <div class="event-schedule-area-two bg-color pad100 col-lg-12">
                        <div class="container col-lg-12">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show align-middle" id="home" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table text-center align-middle">
                                        <thead class="bg-danger">
                                        <tr>
                                            <th class="col data" scope="col">Data</th>
                                            <th class="col logo" scope="col">Poster</th>
                                            <th class="col event" scope="col">Evento</th>
                                            <th class="col location" scope="col">Location</th>
                                            <th class="col pay" scope="col">Carrello</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row" class="col-1">
                                                    <div class="event-date">
                                                        <span>${startDate}</span>
                                                        <p>${eventMonthStart}</p>
                                                        <span>${endDate}</span>
                                                        <p>${eventMonthFinish}</p>
                                                    </div>
                                                </th>
                                            <td class="event-img">
                                                <div class="event-img">
                                                    ${poster}
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="event-wrap fs-4 text">
                                                    <h3><a href="#" class="text-danger ">${event.title}</a></h3>
                                                    <div class="meta">
                                                    <div class="time">
                                                        <span>${eventTimeStart}</span>
                                                        <span><br>${eventTimeFinish}</span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="r-no fs-4 text">
                                                    <span>${eventLocation}</span>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="primary-btn">
                                                    <a class="text-danger" href="carrello.php?">
                                                    <span class="material-symbols-outlined fs-1 text">shopping_cart</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /col end-->
                            </div>
                            <!-- /row end-->
                        </div>
                        </div>

                `;
                            container.appendChild(newEvent);
                        });
                    })
                    .catch(error => {
                        const container = document.querySelector('#list-events');
                        const newEvent = document.createElement('div');
                        newEvent.classList.add('row', 'align-items-center', 'event-block', 'no-gutters', 'margin-40px-bottom', "text-center", "fs-4", "text-danger", "fw-bold");
                        newEvent.innerHTML = `
                            <div class="event-schedule-area-two bg-color pad100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 pb-4">
                                            Ci dispiace, c'è stato un errore nella comunicazione con il database :(
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            `;
                        console.log(newEvent);
                        container.appendChild(newEvent);
                        console.log('error', error)
                    }
                    );
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>

        </div>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>