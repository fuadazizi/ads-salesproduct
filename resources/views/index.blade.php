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
    <header class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo-salesproduct"
                    class="logo-salesproduct mb-5" style="width: 100%; max-width: 350px;">
            </div>
        </div>
    </header>

    <main class="container mt-4">
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


        <!-- Banner -->
        <div class="row" id="allbanner">
            <div class="col-md-12 mb-5 position-absolute p-0 start-0">
                <!-- Tabs navs Each Platform -->
                <ul class="container main-container nav nav-tabs nav-justified mb-3 position-sticky top-0 bg-white p-0" id="platform-tabs" role="tablist" style="z-index: 999;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="bnr-tab-1" data-mdb-toggle="tab" href="#bnr-tabs-1" role="tab" aria-controls="bnr-tabs-1" aria-selected="true"><i class="fa-solid fa-desktop"></i> Desktop</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bnr-tab-2" data-mdb-toggle="tab" href="#bnr-tabs-2" role="tab" aria-controls="bnr-tabs-2" aria-selected="false"><i class="fa-solid fa-mobile-alt"></i> Mobile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bnr-tab-3" data-mdb-toggle="tab" href="#bnr-tabs-3" role="tab" aria-controls="bnr-tabs-3" aria-selected="false"><i class="fa-solid fa-mobile"></i> Apps</a>
                    </li>
                </ul>
                <!-- Tabs navs -->
                <div class="container main-container mt-4 p-0 position-relative" id="platform-contents">
                    <!-- Tabs content Each Platform -->
                    <div class="tab-content col-12">
                        @foreach (range(1, 3) as $i)
                        <div class="tab-pane fade show {{ $loop->first ? 'active': ''}}" id="bnr-tabs-{{ $i }}" role="tabpanel" aria-labelledby="bnr-tab-{{ $i }}">
                            <div class="accordion" id="accordion-{{ $i }}">
                                @foreach($listposition->where('id_platform', $i) as $pos)
                                <div class="accordion-item border-0 mb-2">
                                    <h2 class="accordion-header" id="heading{{ $pos->id_slot }}">
                                        <button class="accordion-button rounded-4 collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapse{{ $pos->id_slot }}" aria-expanded="true" aria-controls="collapse{{ $pos->id_slot }}" value="{{ $pos->id_slot }}" name="banneritem">
                                            {{ $pos->slot_name }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $pos->id_slot }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $pos->id_slot }}" data-mdb-parent="#accordion-{{ $i }}">
                                        <div class="accordion-body p-1">
                                            <ul class="nav nav-tabs" role="tablist">
                                                @foreach ($joinbanner->where('id_slot', $pos->id_slot ) as $banner)
                                                <li class="nav-item w-100" role="presentation">
                                                    <p class="nav-link ps-5 py-3 b-select"
                                                        id="bnr-{{ $banner->id }}"
                                                        data-name="{{ $banner->name }}"
                                                        data-platform="{{ $banner->platform }}"
                                                        data-tyebanner="{{ $banner->typebanner }}"
                                                        data-positionused="{{ $banner->positionused }}"
                                                        data-rulesize="{{ $banner->rulesize }}"
                                                        data-buying="{{ $banner->buying }}"
                                                        data-scenario="{{ $banner->scenario }}"
                                                        data-image="{{ $banner->image }}"
                                                        data-id_cpm="{{ $banner->id_cpm }}"> {{ $banner->name }}
                                                    </p>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="previewer position-absolute col-12 col-lg-9 bg-white" style="z-index:-1">
                        @include ('partials/previewer')
                    </div>
                </div>
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