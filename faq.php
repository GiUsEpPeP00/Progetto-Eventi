<!DOCTYPE html>
<html lang="it">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faq</title>
    <?php
        include 'navbar.php';
    ?>
</head>

<body>
    <section>
        <h3 class="text-center mb-4 mt-2 pb-2 text-danger fw-bold">Domande più frequenti</h3>
        <p class="text-center m-4">
            Qui potrai trovare le risposte alle domande più frequenti riguardanti il nostro sito
        </p>

        <div class="p-5 border border-dark rounded-5 m-2">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger">
                        <u>Quali modalità di pagamento sono disponibili?</u>
                    </h6>
                    <p>
                        <u><strong>E' possibile</strong></u> pagare attraverso le carte di credito dei circuiti Visa,
                        Visa Electron, Mastercard, American Express, JCB, Discover, Diners e Postepay e con PayPal,
                        Klarna e Sofort Banking.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger"><u>In caso di smarrimento del biglietto</u></h6>
                    <p>
                        <strong><u>E' necessario</u> </strong> effettuare denuncia di smarrimento presso le Autorità
                        competenti indicando: Titolare dell'ordine, Numero d'ordine, Numero dei biglietti, Intestatari
                        dei singoli biglietti, Artista, Data e luogo dell'evento, Data presunta dello
                        smarrimento/furto/danneggiamento.
                        Attenzione! La denuncia deve essere inoltrata al nostro servizio clienti entro e non oltre 48
                        ore lavorative prima della data dell'evento attraverso questo form, specificando id ordine ed
                        evento.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger"><u>Posso usare il mio Voucher di rimborso per acquistare un evento
                            diverso da quello per il quale è stato erogato il rimborso?</u>
                    </h6>
                    <p>
                        <strong><u>No.</u></strong> Il Voucher di rimborso può essere utilizzato solo per acquistare
                        eventi programmati dallo
                        stesso Organizzatore per il quale è stato erogato il rimborso.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger"><u>Posso modificare i dati del profilo? </u>
                    </h6>
                    <p>
                        <strong><u>Sì</u></strong>, puoi modificare i dati del profilo in qualsiasi momento.
                    </p>
                    <a href="profilo.php" class="btn btn-outline-danger">Area personale</a>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger"><u>Posso cedere il mio biglietto a terzi? </u>
                    </h6>
                    <p>Prima dell'inizio delle vendite l'organizzatore potrà indicare il periodo in cui il servizio di
                        ticketing dovrà rendere possibili le operazioni di ripersonalizzazione e di rivendita, e il
                        numero di ripersonalizzazioni massimo possibile. In mancanza di tale indicazione sarà
                        considerato valido tutto il periodo fino a data evento e non ci saranno limitazioni al numero di
                        ripersonalizzazioni possibili.
                        Tutte le informazioni saranno pubblicate sul nostro sito nella pagina evento.</p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-danger"><u>Per l'accesso da giornalisti? </u></h6>
                    <p>
                        Gli accrediti sono gestiti dall'Organizzatore dell'evento. Le informazioni relative
                        all'Organizzatore sono riportate nella scheda dell’evento. Accedi alla pagina della data
                        desiderata e apri il menu a tendina "Informazioni sull'Organizzatore" presente sotto il bottone
                        Biglietti.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h6 class="mb-3 text-dark"><u>Per eventuali dubbi non esitate a contattarci </u></h6>

                    <a href="contatti.php" class="btn btn-danger">Contattaci</a>
                </div>


            </div>

    </section>
    
    <footer>
        <?php include 'footer.php';?>  
    </footer>
</body>

</html>