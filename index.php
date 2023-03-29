<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketSud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once("navbar.php");
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <div class="container py-5 list">

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
        let StartDate = "Inizio: ";
        let EndDate = "Fine: ";
        let EventTimeStart;
        let EventTimeFinish;
        fetch("https://events.abattaglia.it/api/event/list", requestOptions)
            .then(response => response.json()) // convertire la risposta in formato JSON
            .then(events => { // elaborare i dati degli eventi
                const container = document.querySelector('.container');
                events.forEach(event => {
                    let StartDate = "Inizio: ";
                    let EndDate = "Fine: ";
                    let EventTimeStart;
                    let EventTimeFinish;
                    console.log(event);
                    // creare un blocco evento per ogni evento
                    const newEvent = document.createElement('div');
                    newEvent.classList.add('row', 'align-items-center', 'event-block', 'no-gutters', 'margin-40px-bottom');
                    
                    if(event.startsAt != null){
                        StartDate += event.startsAt;
                        StartDate = StartDate.slice(0, 18);
                        EventTimeStart = event.startsAt.slice(11, 20);
                    }
                    else{
                        StartDate = "";
                    }
                    if (event.endsAt != null) {
                        EndDate += event.endsAt;
                        EndDate = EndDate.slice(0, 16);
                        EventTimeFinish = event.endsAt.slice(11, 20);
                    }
                    else {
                        EndDate = "";
                    }

                    if(EventTimeStart === "00:00:00"){
                        EventTimeStart = "";
                    }
                    
                    if(EventTimeFinish === "00:00:00"){
                        EventTimeFinish = "";
                    }

                    newEvent.innerHTML = `
                <div class="col-lg-5 col-sm-12">
                    <div class="position-relative">
                        <img src="https://www.bootdey.com/image/450x280/FFB6C1/000000" alt="">
                        <div class="events-date">
                            <div class="font-size28">${StartDate}</div>
                            <div class="font-size14">${EndDate}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                        <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500">
                            <a href="${event.link}" class="text-theme-color">${event.title}</a>
                        </h5>
                        <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                            <li><i class="far fa-clock margin-10px-right"></i> ${EventTimeStart}</li>
                            <li><i class="far fa-clock margin-10px-right"></i> ${EventTimeFinish}</li>
                            <li><i class="fas fa-user margin-5px-right"></i> Speaker : ${event.speaker}</li>
                        </ul>
                        <p>${event.description}</p>
                        <a class="butn small margin-10px-top md-no-margin-top" href="${event.link}">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                    </div>
                </div>
            `;
                    container.appendChild(newEvent);
                });
            })
            .catch(error => console.log('error', error));

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
</body>

</html>