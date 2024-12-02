<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ads Showcase of Detiknetwork Salesproduct</title>
    <meta name="description" content="One stop detiknetwork Digital Business toolkit. Find everything you need here!" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnstatic.detik.com/live/html5/sales-product-source/favicon.ico" rel="shortcut icon"
        type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/wp.css') }}">

</head>

<body>

    @include('partials/wp')

    {{-- <main class="" style=""> --}}

    {{-- <!-- Banner -->
        @if (Route::is('banners'))
        @include('partials/sidebar_banner')
        @elseif (Route::is('performances'))
        @include('partials/sidebar_performance')
        @endif --}}

    {{-- <div class="col-md-12 mb-5 position-absolute p-0 start-0">
            <div class="container main-container p-0 position-relative" id="platform-contents">
                {{-- @include ('partials/previewer')
        </div>
        </div>
        <center class="mb-5" id="empty-notice" style="display: none; height: 450px; padding-top: 45px;">
            <img class="mb-3" src="images/man-box.png" width="300">
            <p> No data match. <br> Please check again. </p>
        </center> --}}
    {{-- </main> --}}
    <!-- SCRIPT -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
