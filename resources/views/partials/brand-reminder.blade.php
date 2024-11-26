<div class="row" style="position: relative; z-index: 2;">
    <div class="d-flex justify-content-center">
        <div class="accordion-item row rounded-9 mb-3 w-100" id="br" style="background-color: rgb(35 138 208);">
            <button class="accordion-button text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#br-collapse" aria-expanded="true" aria-controls="br-collapse" style="background: none;">
                <h6 class="m-0"> <strong><i class="fa-solid fa-bell"></i> Brand Reminder </strong> </h6>
            </button>
            <div class="accordion-collapse collapse show col-md-12 col-lg-4 p-0" aria-labelledby="br-header" id="br-collapse">
                <div class="text-white rounded-9 h-100 bg-transparent">
                    <div class="card-body">
                        <div class="card-header border-bottom-0 px-0">
                            <h5 class="fw-bold"><i class="fa-solid fa-bell"></i> Brand Reminder 1</h5>
                        </div>
                        <div class="row row-cols-2 row-cols-sm-2 g-4 d-flex">
                            @foreach ($breminderbanner1 as $searchBrD)
                            <div class="col">
                                <div class="card rounded-6 jumping">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img class="img-fluid mt-3 mb-2 lazyload" data-src="{{ $searchBrD->image }}" src="../images/8KCB(16x9).gif" class="card-img-top" alt="{{ $searchBrD->name }}" />
                                        <a href="detail-banner?id={{ $searchBrD->id }}&typebanner={{ $searchBrD->typebanner }}&platform={{ $searchBrD->platform }}&id_slot={{ $searchBrD->id_slot }}" class="text-decoration-none" data-site="{{ $searchBrD->link_rules }}">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $searchBrD->name }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-collapse collapse show col-md-12 col-lg-8 p-0" aria-labelledby="br-header" id="br-collapse">
                <div class=" text-white rounded-9 h-100 bg-transparent">
                    <div class="card-body">
                        <div class="card-header border-bottom-0 px-0">
                            <h5 class="fw-bold"><i class="fa-solid fa-bell"></i> Brand Reminder 2</h5>
                        </div>
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-lg-4 g-4 d-flex">
                            @foreach ($breminderbanner2 as $searchBrM)
                            <div class="col">
                                <div class="card rounded-6 jumping">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img class="img-fluid mt-3 mb-2 lazyload" data-src="{{ $searchBrM->image }}" src="https://cdnstatic.detik.com/live/html5/sales-product-source/8KCB.gif" class="card-img-top" alt="{{ $searchBrM->name }}" />
                                        <a href="detail-banner?id={{ $searchBrM->id }}&typebanner={{ $searchBrM->typebanner }}&platform={{ $searchBrM->platform }}&id_slot={{ $searchBrM->id_slot }}" class="text-decoration-none" data-site="{{ $searchBrM->link_rules }}">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $searchBrM->name }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>