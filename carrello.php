<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
    <link rel="stylesheet" href="style.css">

    <?php
    include 'navbar.php';
    ?>
</head>

<body>
    <!-- da finire 
    <section class="h-100 gradient-custom">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
            integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <div class="container py-5 list">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Carrello</h5>
                            <h5 class="mb-0">(da inserire numero dinamico)</h5>
                        </div>
                        <div class="single-item card-body">
                            
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Modalita di spedizione</strong></p>
                            <p class="mb-0">Spedizione con corriere espresso</p>
                            <p class="mb-0">24-48 ore</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="25px" src="PayPalLogo.svg" alt="PayPal acceptance mark" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Checkout</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Prodotti
                                    <span>(da inserire prezzo)</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Spedizione
                                    <span>€7.99</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Totale</strong>
                                    </div>
                                    <span><strong>(da inserire prezzo)</strong></span>
                                </li>
                            </ul>
                            <a href="checkout.php" class="btn btn-danger">Vai al check-out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        /*document.querySelector('.plus').addEventListener('click' => {
            document.querySelector('input[type=number]').stepUp();
        })
        document.querySelector(".minus").addEventListener('click' => {
            document.querySelector('input[type=number]').stepDowns();
        })*/
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
                const container = document.querySelector('.single-item');
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
                    console.log(event);
                    // creare un blocco evento per ogni evento
                    const newEvent = document.createElement('div');
                    newEvent.classList.add('row', 'align-items-center', 'event-block', 'no-gutters', 'margin-40px-bottom');

                    if (event.startsAt != null) {
                        startDate = event.startsAt.slice(8, 10);
                        eventTimeStart = "Inizio: " + event.startsAt.slice(11, 20);
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
                        eventTimeFinish = "Fine: " + event.endsAt.slice(11, 20);
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
                        poster = '<i class="fa-solid fa-image"></i>';
                    } else {
                        poster = '<img src="' + event.poster + '"/>';
                    }


                    newEvent.innerHTML = `
                    <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                        data-mdb-ripple-color="light">
                                        <div class="event-img">
                                            ${poster}
                                        </div>
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <p><strong>${event.title}</strong></p>
                                    <p>Location: ${event.location}</p>
                                    <p>Date: ${eventMonthStart}</p>
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                        data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="minus btn btn-danger px-3 me-2">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                                class="form-control" />
                                            <label class="form-label" for="form1">Quantità</label>
                                        </div>

                                        <button class="plus btn btn-danger px-3 ms-3">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>

                                    <p class="text-start text-md-center">
                                        <strong>$17.99</strong>
                                    </p>
                                </div>
                            </div>
            `;
                    container.appendChild(newEvent);
                });
            })
            .catch(error => console.log('error', error));
    </script>
    <?php
    include 'footer.php';
    ?>
</body>
</html>