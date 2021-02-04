@include('site.layouts._header')

<body class="text-center">
    <div class="hero-wrap js-fullheight">
        <div class="container">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <div class="row">
                    <main role="main" class="inner cover">
                        <h1 class="mb-2 success-title">Hello <strong>{{$name}}</strong>, your quote was sent with success!!!</h1>
                        <p class="lead pink">Soon we will send your quote in <strong>{{$email}}</strong>. Thank you for choosing our services.</p>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@extends('site.layouts._footer')

