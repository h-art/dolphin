<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dolphin</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#121010">
    <meta name="theme-color" content="#121010">

    <meta name="description" content=""/>

    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <meta name="twitter:title" content="">
    <meta name="twitter:description" content=" ">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="summary_large_image">




</head>
<body class="is-touch">

    <div class="l-site">




        <form id="my-form-element" cf-form>
            <fieldset>
                <label for="name">What's your name?</label>
                <input required cf-questions="Ciao! Come ti chiami? 😊" type="text" class="form-control" name="name" id="name">
            </fieldset>

            <fieldset>
                <label for="user-office">Dove lavori?</label>
                <select cf-questions="Piacere di conoscerti {previous-answer}! In quale ufficio lavori?" name="user-office" id="user-office" class="form-control">
                    <option></option>
                    <option>Treviso</option>
                    <option>Milano</option>
                    <option>Roma</option>
                    <option>Firenze</option>
                </select>
            </fieldset>

            <fieldset>
                <label for="user-email">Email</label>
                <input
                    pattern=".+\@.+\..+"
                    cf-error="E-mail not correct"
                    cf-questions="Lasciaci la tua mail, non appena saremo pronti ti scriveremo." type="email" class="form-control" name="user-email" id="user-email">
            </fieldset>

            <fieldset>
                <label for="thats-all">Are you ready to submit the form?</label>
                <select cf-questions="Sei pronto a partecipare al più innovativo pranzo del mondo?" name="submit-form" id="submit-form" class="form-control">
                    <option></option>
                    <option>Si!</option>
                </select>
            </fieldset>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <div class="site-wrapper">
            <div class="intro-wrapper">
                <a href="#" class="m-logo">Mi e voi altri</a>

                <div>
                    <span class="m-title">
                        A lunch with "strangers".
                    </span>
                    <p class="m-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ex exercitationem tempore ipsa, molestias dicta doloremque eius commodi, est placeat iusto, deserunt rem, sequi numquam suscipit consectetur illo? Eligendi, cum!
                    </p>
                </div>
                <div class="thanks">
                    <p>
                        Bravi tutti.
                    </p>
                </div>
            </div>
            <div class="akqa-cf-form">
                <div cf-context class="akqa-cf-form__inner"></div>
            </div>
        </div>




    </div>

    <script type="text/javascript" src="https://cf-4053.kxcdn.com/conversational-form/0.9.5/conversational-form.min.js" crossorigin></script>

</body>
</html>
