<div class="row" style="position: relative; z-index: 1;">
    <div class="d-flex justify-content-center">
        <div class="rounded-9 mb-3 justify-content-center w-100" id="tin1banner" style="background-color: rgb(2, 110, 211);">
            <button class="accordion-button text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#tin1-collapse" aria-expanded="true" aria-controls="tin1-collapse" style="background: none;">
                <h6 class="m-0"> <strong><i class="fa-solid fa-boxes-stacked"></i> 3 in 1 Banner </strong> </h6>
            </button>
            <div class="accordion-collapse collapse show col-12 col-xl-10" aria-labelledby="tin1-header" id="tin1-collapse">
                <div class="row text-white rounded-9 h-100 bg-transparent px-4 card-body">
                    <!-- DESKTOP -->
                    <div class="col-6 col-lg-3">
                        <div class="card-header border-bottom-0 px-1">
                            <h5 class="fw-bold"><i class="fa-solid fa-desktop"></i> Desktop </h5>
                        </div>
                        @foreach ($tin1banner->where('id_platform', '1') as $banner)
                        <div class="card rounded-6 jumping">
                            <div class="bg-image hover-overlay ripple d-flex justify-content-center" data-mdb-ripple-color="light">
                                <img class="img-fluid mt-3 mb-2 lazyload" data-src="{{ $banner->image }}" src="../images/8KCB(16x9).gif" class="card-img-top" alt="{{ $banner->name }}" style="width: 80%;" />
                                <a href="detail-banner?id={{ $banner->id }}&typebanner={{ $banner->typebanner }}&platform={{ $banner->platform }}&id_slot={{ $banner->id_slot }}" class="text-decoration-none" data-site="{{ $banner->link_rules }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $banner->name }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- MOBILE -->
                    <div class="col-6 col-lg-3">
                        <div class="card-header border-bottom-0 px-1">
                            <h5 class="fw-bold"><i class="fa-solid fa-mobile-alt"></i> Mobile </h5>
                        </div>
                        @foreach ($tin1banner->where('id_platform', '2') as $banner)
                        <div class="card rounded-6 jumping">
                            <div class="bg-image hover-overlay ripple d-flex justify-content-center" data-mdb-ripple-color="light">
                                <img class="img-fluid mt-3 mb-2 lazyload" data-src="{{ $banner->image }}" src="../images/8KCB(16x9).gif" class="card-img-top" alt="{{ $banner->name }}" style="width: 80%;" />
                                <a href="detail-banner?id={{ $banner->id }}&typebanner={{ $banner->typebanner }}&platform={{ $banner->platform }}&id_slot={{ $banner->id_slot }}" class="text-decoration-none" data-site="{{ $banner->link_rules }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $banner->name }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- APPS -->
                    <div class="col-12 col-lg-6 row d-flex justify-content-evenly m-0 p-0">
                        <div class="card-header border-bottom-0 px-3">
                            <h5 class="fw-bold"><i class="fa-solid fa-mobile"></i> Apps </h5>
                        </div>
                        @foreach ($tin1banner->where('id_platform', '3') as $banner)
                        <div class="col-6 jumping">
                            <div class="card rounded-6">
                                <div class="bg-image hover-overlay ripple d-flex justify-content-center" data-mdb-ripple-color="light">
                                    <img class="img-fluid mt-3 mb-2 lazyload" data-src="{{ $banner->image }}" src="../images/8KCB(16x9).gif" class="card-img-top" alt="{{ $banner->name }}" style="width: 80%;" />
                                    <a href="detail-banner?id={{ $banner->id }}&typebanner={{ $banner->typebanner }}&platform={{ $banner->platform }}&id_slot={{ $banner->id_slot }}" class="text-decoration-none" data-site="{{ $banner->link_rules }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{ $banner->name }}</small>
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