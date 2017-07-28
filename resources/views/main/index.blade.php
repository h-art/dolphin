<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Hai fame di gente nuova?</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#121010">
    <meta name="theme-color" content="#121010">

</head>
<body>


    <div class="splash">
        <div>
            <p>
                Hai fame di gente nuova?<br>
                Rispondi di sì a...
            </p>
        </div>
        <div>
            <div class="avatar">
                <div class="avatar__text">
                    <strong class="inline-logo">Magnitu?<sup>®</sup></strong>
                </div>
                <div class="avatar__disc">
                    <img src="/img/avatar.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="l-site">

        <form id="my-form-element" cf-form>
            <fieldset>
                <label for="name">Ciao, come te te ciami?</label>
                <input required type="text" class="form-control"
                    cf-questions="Ciao, come te te ciami? 😊"
                    cf-input-placeholder="Scrivi el to nome"
                    name="name" id="name">
            </fieldset>

            <fieldset>
                <label for="user-office">Dove lavori?</label>
                <select cf-questions="Ah, te gà un bel nome {previous-answer}... te lavori Treviso, Firenxe, Miàn o dai teròni?" cf-input-placeholder="Scrivime el to uficio" name="user-office" id="user-office" class="form-control">
                    <option></option>
                    <option>Treviso</option>
                    <option>Firenxe</option>
                    <option>Miàn</option>
                    <option>Roma</option>
                </select>
            </fieldset>

            <fieldset>
                <label for="user-email">Email</label>
                <input
                    pattern=".+\@.+\..+"
                    cf-error="Sta mail xe sbajata."
                    cf-input-placeholder="Scrivi ea to mail"
                    cf-questions="MAGNITU co’ nialtri? Dai, cussì te te integri o te te fidanxi... Dame a to’ email! ✉️" type="email" class="form-control" name="user-email" id="user-email">
            </fieldset>

            <fieldset>
                <label for="thats-all">Ben! Prima delle 13.00 PM te digo come se organixemo, OK?</label>
                <select cf-questions="Ben! Prima delle 13.00 PM te digo come se organixemo, OK?" name="submit-form" id="submit-form" class="form-control" cf-input-placeholder="Invia i to dati">
                    <option></option>
                    <option value="si">Invia e 'ndemo magnar!</option>
                </select>
            </fieldset>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <div class="site-wrapper">
            <div class="intro-wrapper">
                <a href="#" class="m-logo">
                    <img src="/img/avatar.jpg" alt="">
                    <span>Magnitu?</span>
                </a>
                <div>
                    <p class="m-text">
                        Alla festa tutti leoni, in ufficio tutti musoni (ma la rima giusta sappiamo qual è). È sempre così: quando i freni inibitori tornano a funzionare, non guardiamo più in faccia nessuno e torniamo gli orsi di sempre, aperti e ben disposti al lavoro come Salvini alla sagra del kebab di Islamabad.
                        <br><br>
                        Ma oggi c'è <strong class="inline-logo">Magnitu?<sup>®</sup></strong>
                        <br><br>
                        <strong class="inline-logo">Magnitu?<sup>®</sup></strong> è la webapp aziendale che ci fa tornare bambini, entusiasti e pronti a conoscere gente nuova. Nata dall’asocialità malata dei programmatori AKQA Italia e dal burberismo tipico della profonda campagna veneta (cioè di Treviso), <strong class="inline-logo">Magnitu?<sup>®</sup></strong> è un bot che - in minaccioso dialetto - ti chiede la disponibilità a condividere la tua pausa pranzo con colleghi selezionati a caso nel tuo ufficio (Milano, Roma, Firenze e Treviso). <strong class="inline-logo">Magnitu?<sup>®</sup></strong> crea eterogenei gruppi di 4 o 5 persone dentro cui avrai l’occasione di misurare la tua voglia di avventura e di conoscere colleghi e colleghe piccanti, belli, intelligenti, spiritosi... ma anche asessuati, brutti, sempliciotti e noiosi. Cioè se i vuttu sono fighi eora no te ga’ proprio capìo el spirito pionieristico che vol coso lì… Umberto… il capo dai.
                    </p>
                </div>
            </div>
            <div class="akqa-cf-form">
                <div cf-context class="akqa-cf-form__inner"></div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://cf-4053.kxcdn.com/conversational-form/0.9.5/conversational-form.min.js" crossorigin></script>
    <script src="/js/app.js"></script>

</body>
</html>
