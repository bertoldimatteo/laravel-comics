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
   </main>
   @include('partials.footer') 
   
</body>
</html>