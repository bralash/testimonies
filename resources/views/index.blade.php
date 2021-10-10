<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonies</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>

    <section class="wrapper">
        <header>
            <div class="logo">
                <img src="{{ asset('assets/img/logo-alt.png') }}" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="{{URL::to('/')}}">TRUWord</a></li>
                    <li><a href="">Give</a></li>
                    <li><a href="{{URL::to('/inspired')}}">Be Inspired</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <p>Share Your Testimonies with ❤️</p>

            <form action="{{URL::to('/testify')}}" method="post">
                {{ csrf_field() }}
                <textarea name="testimony" id="" cols="30" rows="20" placeholder="Type in your testimony"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

</body>
</html>