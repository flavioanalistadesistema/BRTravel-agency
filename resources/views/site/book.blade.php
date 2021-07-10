@include('site.layouts._header')

<body class="text-center">
    <div class="hero-wrap js-fullheight">
        <div class="container">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <div class="row">
                    <main role="main" class="inner cover">
                        <h1 class="mb-2 success-title animated bounceIn"><strong>Hello, </strong>fill out the form below with your schedule</h1>
                    </main>
                </div>
            </div>

            <div class="row">
                <div class="search-wrap-book ftco-animate p-4">
                @include('site.layouts._forms.form_budget', ['numbersPerson' => $numbersPerson]);
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@extends('site.layouts._footer')
