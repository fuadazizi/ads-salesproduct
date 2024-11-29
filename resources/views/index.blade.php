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
    <link href="https://cdnstatic.detik.com/live/html5/sales-product-source/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <header class="position-fixed w-100 top-0">
        <nav class="navbar navbar-light bg-body-tertiary">
            <div class="container">
                <a href="/" style="margin: 4px 0 4px auto;">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo-salesproduct"
                        class="logo-salesproduct" style="width: 100%;">
                </a>
            </div>
        </nav>
    </header>

    <main class="d-flex align-item-stretch" style="">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-9 mb-3">
                <div class="input-group mb-4 p-2 rounded-pill shadow border border-dark">
                    <i class="fa-solid fa-magnifying-glass p-2"></i>
                    <input type="text" name="q" class="form-control border-0 shadow-none" autofocus="true" id="search-ms" onkeyup="FunctionSearch()" placeholder="Search Banner's or inventory name...">
                </div>
            </div>
        </div> -->

        <!-- Search Banner -->
        <div class="row row-cols-1 row-cols-md-12 row-cols-lg-12 g-4" id="searchM" style="display: none">
            <table id='premium-tbl' class='table-banner table'>
                @foreach ($listbanner as $LM)
                <tr>
                    <td>
                        <div class="card h-100 rounded-7 jumping" style="background-color: darkslateblue;">
                            <div class="card-body row">
                                <div class="col-sm-12 col-lg-7 col-xl-6">
                                    <img class="card-img-top img-fluid rounded-7 rounded-bottom lazyload w-100 p-2" data-src="{{ $LM->image }}" src="https://cdnstatic.detik.com/live/html5/sales-product-source/8KCB.gif" alt="{{ $LM->name }}" />
                                </div>
                                <div class="card col-sm-12 col-lg-5 col-xl-6">
                                    <div class="card-header text-center">
                                        <h3 class="card-title"><b>{{ $LM->name }}</b></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0"><b>Position Used:</b> <br>
                                        <ul>
                                            @foreach(explode(',', $LM->positionused) as $pos)
                                            <li> {{ $pos }} </li>
                                            @endforeach
                                        </ul>
                                        </p>
                                        <p><b>Platform:</b> {{ $LM->platform }}</p>
                                        <p><b>Banner Type:</b> {{ $LM->typebanner }}</p>
                                        <p><b>Blocked Slot:</b> {{ $LM->blockedslot }}</p>
                                        <p><b>Methode buying:</b> {{ $LM->buying }}</p>
                                        <p class="mb-0"><b>Rules:</b> <br>
                                        <ul>
                                            @foreach(explode(';',$LM->rulesize) as $rule)
                                            @if (Str::contains($rule, ':'))
                                            <li> {{ $rule }} </li>
                                            @else
                                            {{ $rule }} </br>
                                            @endif
                                            @endforeach
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="detail-banner?id={{ $LM->id }}&typebanner={{ $LM->typebanner }}&platform={{ $LM->platform }}" class="btn btn-warning text-center">See all details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <!-- 3in1 & BR -->
        <div class="accordion" id="highlight-banner">
            {{-- @include('partials/3in1-banner') --}}

            {{-- @include('partials/brand-reminder') --}}
        </div>

        <!-- <div class="tab-content col-12"> -->
        <!-- </div> -->

        <!-- Banner -->
        @include ('partials/sidebar_v2')
        <div class="col-md-12 mb-5 position-absolute p-0 start-0">
            <!-- Tabs navs Each Platform -->
            <!-- <ul class="container main-container nav nav-tabs nav-justified mb-3 position-sticky top-0 bg-white p-0" id="platform-tabs" role="tablist" style="z-index: 999;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="bnr-tab-1" data-mdb-toggle="tab" href="#bnr-tabs-1" role="tab" aria-controls="bnr-tabs-1" aria-selected="true"><i class="fa-solid fa-desktop"></i> Desktop</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bnr-tab-2" data-mdb-toggle="tab" href="#bnr-tabs-2" role="tab" aria-controls="bnr-tabs-2" aria-selected="false"><i class="fa-solid fa-mobile-alt"></i> Mobile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bnr-tab-3" data-mdb-toggle="tab" href="#bnr-tabs-3" role="tab" aria-controls="bnr-tabs-3" aria-selected="false"><i class="fa-solid fa-mobile"></i> Apps</a>
                    </li>
                </ul> -->
            <!-- Tabs navs -->
            <div class="container main-container p-0 position-relative" id="platform-contents">
                <!-- Tabs content Each Platform -->
                    @include ('partials/previewer')
            </div>
        </div>
        <!-- Tabs content -->
        <center class="mb-5" id="empty-notice" style="display: none; height: 450px; padding-top: 45px;">
            <img class="mb-3" src="images/man-box.png" width="300">
            <p> No data match. <br> Please check again. </p>
        </center>
    </main>
    <!-- SCRIPT -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>