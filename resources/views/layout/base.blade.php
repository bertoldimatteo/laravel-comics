<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'DC-Comics')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

   @include('partials.header') 
   <main>
        <div class="comic-container container-lg">
            <div class="title-section">
                <p>CURRENT SERIES</p>
            </div>
            <section class="comic-content">
                @yield('page-content')
            </section>
            <div class="btn-more-comics">
                <button type="button">LOAD MORE</button>
            </div>
        </div>
        <div class="merchandising-container">
            <div class="container-md">
                <div class="link-section">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="merch-image-1">
                                <p>DIGITAL COMICS</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merch-image-2">
                                <p>DC MERCHANDISE</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="merch-image-3">
                                <p>SUBSCRIPTION</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="merch-image-4">
                                <p>COMIC SHOP LOCATOR</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="visa-svg" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="merch-image-5s">
                                <p>DC POWER VISA</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
   </main>
   @include('partials.footer') 
   
</body>
</html>