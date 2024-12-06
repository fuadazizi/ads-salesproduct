<aside class="sidebar tab-pane fade show " id="sidebar-performance" role="tabpanel"
    aria-labelledby="tab-performance">
    <div class="accordion" id="accordion-performance">
        {{-- <div class=""> --}}
        @foreach ($listperformance as $category => $performance_cat)
            @php
                $iter = $loop->iteration;
            @endphp
            <div class="accordion-item rounded-0" style="border: none;">
                <h2 class="accoridon-header mb-0" id="headcat-{{ $iter }}">
                    <span class="accordion-button rounded-0 collapsed bg-white grand-selector" data-mdb-collapse-init
                        data-mdb-toggle="collapse" data-mdb-target="#bodycat-{{ $iter }}" aria-expanded="false"
                        aria-controls="bodycat-{{ $iter }}" value="{{ $category }}" style="width: 253px">
                        {{ $category }}
                    </span>
                </h2>
            </div>
            <div id="bodycat-{{ $iter }}" class="accordion-collapse collapse collapse-horizontal platform"
                aria-labelledby="headcat-{{ $iter }}" data-mdb-parent="#accordion-performance"
                style="left: 253px;position: fixed;top: 70px;background: white;border-left: 1px solid #e0e0e0;z-index: 999">
                <div class="accordion-body p-0 position-sticky" id="accordion-platform-{{ $iter }}"
                    style="height: 100vh;">
                    {{-- =============== DESKTOP ================ --}}
                    @if (count($performance_cat->where('id_platform', '=', '1')) > 0)
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-desktop">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-collapse-init data-mdb-toggle="collapse"
                                    data-mdb-target="#bodyplat-desktop-{{ $iter }}" aria-expanded="false"
                                    aria-controls="bodyplat-desktop-{{ $iter }}" value="desktop">
                                    Desktop
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-desktop-{{ $iter }}"
                                aria-labelledby="headplat-desktop"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body p-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach ($performance_cat->where('id_platform', '=', '1') as $banner)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link banner-select" id="bnr-{{ $banner->id }}"
                                                    data-name="{{ $banner->name }}"
                                                    data-platform="{{ $banner->platform }}"
                                                    data-tyebanner="{{ $banner->typebanner }}"
                                                    data-positionused="{{ $banner->positionused }}"
                                                    data-rulesize="{{ $banner->rulesize }}"
                                                    data-buying="{{ $banner->buying }}"
                                                    data-reporting="{{ $banner->reporting }}"
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
                    @endif
        
                    {{-- =============== MOBILE ================ --}}
                    @if (count($performance_cat->where('id_platform', '=', '2')) > 0)
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-mobile">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-collapse-init data-mdb-toggle="collapse"
                                    data-mdb-target="#bodyplat-mobile-{{ $iter }}" aria-expanded="false"
                                    aria-controls="bodyplat-mobile-{{ $iter }}" value="mobile">
                                    Mobile
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-mobile-{{ $iter }}"
                                aria-labelledby="headplat-mobile"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body p-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach ($performance_cat->where('id_platform', '=', '2') as $banner)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link banner-select" id="bnr-{{ $banner->id }}"
                                                    data-name="{{ $banner->name }}"
                                                    data-platform="{{ $banner->platform }}"
                                                    data-tyebanner="{{ $banner->typebanner }}"
                                                    data-positionused="{{ $banner->positionused }}"
                                                    data-rulesize="{{ $banner->rulesize }}"
                                                    data-buying="{{ $banner->buying }}"
                                                    data-reporting="{{ $banner->reporting }}"
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
                    @endif
        
                    {{-- =============== APPS ================ --}}
                    @if (count($performance_cat->where('id_platform', '=', '3')) > 0)
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-apps">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-collapse-init data-mdb-toggle="collapse"
                                    data-mdb-target="#bodyplat-apps-{{ $iter }}" aria-expanded="false"
                                    aria-controls="bodyplat-apps-{{ $iter }}" value="apps">
                                    Apps
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-apps-{{ $iter }}"
                                aria-labelledby="headplat-apps"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body p-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach ($performance_cat->where('id_platform', '=', '3') as $banner)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link banner-select" id="bnr-{{ $banner->id }}"
                                                    data-name="{{ $banner->name }}"
                                                    data-platform="{{ $banner->platform }}"
                                                    data-tyebanner="{{ $banner->typebanner }}"
                                                    data-positionused="{{ $banner->positionused }}"
                                                    data-rulesize="{{ $banner->rulesize }}"
                                                    data-buying="{{ $banner->buying }}"
                                                    data-reporting="{{ $banner->reporting }}"
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
                    @endif
                </div>
            </div>
        @endforeach
        {{-- </div> --}}
    </div>
</aside>
