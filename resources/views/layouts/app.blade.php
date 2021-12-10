<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sarl Sobar - Exploitation de la Barytine de Farès</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta name="keywords" content="Barytine, Forage, Sarl Sobar, exploitation, Barytine de Farès, Exploitation mécanisée, gisement filonien de Barytine, Exploitation mécanisée du gisement filonien de Barytine à ciel ouvert" />
    <meta name="description" content="Sarl Sobar est une société d’exploitation de la Barytine de Farès, Exploitation mécanisée du gisement filonien de Barytine à ciel ouvert." />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-213778405-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-213778405-1');
    </script>
</head>

<body class="antialiased">
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
</body>

</html>
