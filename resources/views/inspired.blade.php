<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonies | Inspired</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="https://use.fontawesome.com/4b9b01d581.js"></script>
</head>
<body>

    <section class="wrapper">
        <header>
            <div class="logo">
                <img src="{{ asset('assets/img/logo-alt.png') }}" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="">TRUWord</a></li>
                    <li><a href="">Give</a></li>
                    <li><a href="">Be Inspired</a></li>
                </ul>
            </nav>
        </header>

        <div class="messages">
            @foreach($testimonies as $testimony)
                <div class="message">
                    {{$testimony->testimony}}
                    <label for="">{{\Carbon\Carbon::parse($testimony->created_at)->isoFormat('Do MMM, h:mm a')}}</label>
                    <label class="brand">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                        @truworldlove
                    </label>
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>