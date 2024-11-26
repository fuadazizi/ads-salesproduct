<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdnstatic.detik.com/live/html5/sales-product-source/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta property="og:image" content="https://cdnstatic.detik.com/live/2021/microsite/salesproduct/OG_IMAGE.jpg" />
    <meta name="description" content="Showcase display ads detiknetwork untuk medium desktop, mobile, dan apps" itemprop="description" />
    <meta property="og:title" content="Detiknetwork Sales Product - Ads Showcase" />
    <meta property="og:site_name" content="Detiknetwork Sales Product - Ads Showcase" />
    <meta property="og:url" content="https:/displaymicrosite.detik.com/salesproduct" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Detiknetwork Sales Product - Ads Showcase</title>
</head>

<body>
    <section id="header" class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo-salesproduct"
                        class="logo-salesproduct mb-5">
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="mb-5">
        <div class="container mycontainer">
            <div class="row nav-dashboard mb-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desktop-tab" data-toggle="tab" href="#desktop-panel" role="tab" aria-controls="desktop-panel" aria-selected="true">DESKTOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile-panel" role="tab" aria-controls="mobile-panel" aria-selected="false">MOBILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="apps-tab" data-toggle="tab" href="#apps-panel" role="tab" aria-controls="apps-panel" aria-selected="false">APPS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row tab-content">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="desktop-panel" role="tabpanel" aria-labelledby="desktop-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card mb-3">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Billboard
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 sm-12 text-center mb-3">
                                                    <img src="assets/images/laptop.png" alt="image-preview">
                                                    <h1>
                                                        <a href="#" target="_blank" class="btn btn-default mt-3">
                                                            Preview
                                                        </a>
                                                    </h1>
                                                </div>
                                                <div class="col-md-6 sm-12 text-left">
                                                    <h1>Rules and Specification</h1>
                                                    <hr>
                                                    <h3>Position Used</h3>
                                                    <p>Billboard</p>
                                                    <h3>Banner Specification</h3>
                                                    <p>Dimension: 970px x 250px</p>
                                                    <p>Max. Size: 150kb</p>
                                                    <p>Format: .jpg, .gif, .html</p>
                                                    <h3>Method Buying</h3>
                                                    <p>CPD</p>
                                                    <h3>Reporting</h3>
                                                    <p>Impression & CTR</p>
                                                    <h3>Scenario</h3>
                                                    <p>
                                                    <ol>
                                                        <li>
                                                            User open detikcom on desktop
                                                        </li>
                                                        <li>
                                                            Banner show on Billboard slot
                                                        </li>
                                                        <li>
                                                            When user clicks the Billboard Banner, they will be redirected to landing page
                                                        </li>
                                                    </ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="mobile-panel" role="tabpanel" aria-labelledby="mobile-tab">

                            B

                        </div>
                        <div class="tab-pane fade" id="apps-panel" role="tabpanel" aria-labelledby="apps-tab">

                            C

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/myscript.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 5,
            freeMode: true,
            loop: true,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                "@0.75": {
                    slidesPerView: 2,
                },
                "@1.00": {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>