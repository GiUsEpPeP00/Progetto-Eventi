<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chi_siamo.css">
    <title>Chi siamo</title>
    <?php
    include("navbar.php");
    ?>
</head>

<body class="chi_siamo">
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="text-danger">Chi siamo</h3>
                        <h6 class="theme-color lead"></h6>
                        <p> Siamo un <u><strong>team appassionato e dedicato</strong></u> alla creazione di
                            un'esperienza di supporto eccezionale per i nostri clienti.
                            Il nostro obiettivo principale è quello di fornire un servizio affidabile e di alta qualità
                            per risolvere qualsiasi problema o domanda che possa sorgere durante l'utilizzo del nostro
                            sistema di ticketing.</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media ">
                                    <label class="text-danger">Email</label>
                                    <p>ticketsud-amm@puglia.com</p>
                                </div>
                                <div class="media">
                                    <label class="text-danger">Località</label>
                                    <p>76012 Canosa di Puglia</p>
                                </div>
                                <div class="media">
                                    <label class="text-danger">Telefono</label>
                                    <p>0883 610.111</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://www.comune.canosa.bt.it/sites/default/files/styles/medium/public/2018-02/comune.jpg?itok=GTV3iTRo" alt="">
                    </div>
                </div>
                <div class="counter mt-4">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2 text-danger" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600 ">Clienti soddisfatti</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center ">
                                <h6 class="count h2 text-danger" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600 ">Vendite totali</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2 text-danger" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600 ">Eventi disponibili</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2 text-danger" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600 ">Richieste giornaliere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
<footer>
    <?php
    include("footer.php");
    ?>
</footer>

</html>