<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <?php
    include 'navbar.php';
    ?>
</head>

<body>
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Carrello</h5>
                    </div>
                    <div class="single-item card-body">

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
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Prodotti
                                <span class="totalCostItems"> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Spedizione
                                <span class="shipment">7.99 €</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <strong >Totale</strong>
                                    <span class="totalCost"></span>
                            </li>
                        </ul>
                        <a href="checkout.php">
                            <button type="button" class="btn btn-danger btn-lg btn-block">Procedi al pagamento</button>
                        </a>
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
                        <img class="me-2" width="25px" src="PayPalLogo.svg" alt="PayPal-logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var myHeaders = new Headers();
        myHeaders.append("Authorization", "token e841659c-3aaa-4d79-bf5c-bc1ebb7cec22");

        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        let startDate;
        let totalCost = 0;

        fetch("https://events.abattaglia.it/api/event/list", requestOptions)
            .then(response => response.json()) // convertire la risposta in formato JSON
            .then(events => { // elaborare i dati degli eventi
                const container = document.querySelector('.single-item');
                let randomEvent = Math.floor(Math.random() * events.length);
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
                    newEvent.classList.add('row', 'align-self-center', 'event-block', 'no-gutters', 'margin-40px-bottom', "border");

                    if (event.startsAt != null) {
                        startDate = event.startsAt.slice(8, 10);
                        eventTimeStart = " " + event.startsAt.slice(11, 16);
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
                        poster = '<img class="img-poster" src="' + event.poster + '" alt="Not Available"/>';
                    }



                    newEvent.innerHTML = `
                    <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 align-self-center">
                                    <!-- Image -->
                                    <div class="bg-image">
                                        <div class="event-img">
                                            ${poster}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0 align-self-center">
                                    <p><strong>${event.title}</strong></p>
                                    <p>Location: ${event.location}</p>
                                    <p>${startDate} ${eventMonthStart}${eventTimeStart}</p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <div class="row mb-4 price" style="max-width: 300px">
                                        <div class="form-outline col">
                                            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" readonly/>
                                            <label class="form-label" for="form1"></label>
                                        </div>
                                        <p class="text-start text-md-center col">
                                        <strong class="price">20.00 €</strong>
                                    </p>
                                    </div>
                                    
                                </div>
                            </div>
                    `;
                    container.appendChild(newEvent);
                    let strongPrice = document.querySelector('strong.price');
                    let singleCost = strongPrice.innerText;
                    singleCost = parseFloat(singleCost);
                    let quantityInput = document.querySelector('input[name="quantity"]');
                    totalCost += singleCost;
                    let span = document.querySelector('span.totalCostItems');
                    span.innerHTML = totalCost.toFixed(2) + " €" ;
                });
                let totCost = document.querySelector('span.totalCost');
                let shipmentCost = document.querySelector('span.shipment').innerText;
                shipmentCost = parseFloat(shipmentCost);
                totalCost += shipmentCost;
                totalCost = totalCost.toFixed(2);
                totCost.innerHTML = '<strong>'+totalCost+' €</strong>';

            })
            .catch(error => console.log('error', error));
    </script>
    <?php
    include 'footer.php';
    ?>
</body>

</html>