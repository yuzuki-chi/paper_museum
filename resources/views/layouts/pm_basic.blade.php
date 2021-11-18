<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/pm_basic.css')}}">
        <title>@yield('title') - PAPER MUSEUM</title>
    </head>
    <body>
        <header>
            <h1><a href="/"><img src="{{asset('images/loho.svg')}}" alt="Paper Museum"></a></h1>
            <nav class="main_nav">
                <li><a href="/">ナビゲーション例</a></li>
                <li><a href="/">ナビゲーション例</a></li>
                <li><a href="/">ナビゲーション例</a></li>
            </nav>
            <hr/>
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>            
        </main>

        <footer>
            <hr/>
            <p>©︎2021 ragdoll.</p>
        </footer>
    </body>
</html>