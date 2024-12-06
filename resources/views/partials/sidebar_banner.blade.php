<aside class="sidebar tab-pane fade show active" id="sidebar-banner" role="tabpanel" aria-labelledby="tab-banner">
    <div class="accordion" id="accordion-platform">
        @foreach (range(1, 3) as $i)
            <!-- <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="bnr-tabs-{{ $i }}" role="tabpanel" aria-labelledby="bnr-tab-{{ $i }}"> -->
            <div class="accordion-item rounded-0" style="border: none;">
                <h2 class="accordion-header mb-0" id="headplatform-{{ $i }}">
                    <span class="accordion-button rounded-0 collapsed bg-white grand-selector"
                        data-mdb-target="#colplatform-{{ $i }}" aria-expanded="false"
                        aria-controls="colplatform-{{ $i }}" value="{{ $i }}">
                        @if ($i == 1)
                            <i class="fa-solid fa-desktop me-2"></i> Desktop
                        @elseif ($i == 2)
                            <i class="fa-solid fa-mobile-alt me-2"></i> Mobile
                        @elseif ($i == 3)
                            <i class="fa-solid fa-cube me-2"></i> Apps
                        @else
                            Invalid
                        @endif
                    </span>
                </h2>
            </div>
            <div id="colplatform-{{ $i }}" class="accordion-collapse collapse collapse-horizontal platform"
                aria-labelledby="headplatform-{{ $i }}" data-mdb-parent="#accordion-platform"
                style="left: 100%;position: absolute;top: 70px;background: white;overflow-y:scroll;border-left: 1px solid #e0e0e0;">
                <div class="accordion-body accordion p-0 position-sticky" id="accordion-banner-{{ $i }}"
                    style="height: 100vh;">
                    @foreach ($listposition->where('id_platform', $i) as $pos)
                        <div class="accordion-item rounded-0 border-0 mb-2">
                            <h2 class="accordion-header" id="heading{{ $pos->id_slot }}">
                                <button class="accordion-button rounded-0 collapsed" type="button"
                                    data-mdb-collapse-init data-mdb-toggle="collapse"
                                    data-mdb-target="#collapse{{ $pos->id_slot }}" aria-expanded="true"
                                    aria-controls="collapse{{ $pos->id_slot }}" value="{{ $pos->id_slot }}"
                                    name="banneritem">
                                    {{ $pos->slot_name }}
                                </button>
                            </h2>
                            <div id="collapse{{ $pos->id_slot }}" class="accordion-collapse collapse banner"
                                aria-labelledby="heading{{ $pos->id_slot }}"
                                data-mdb-parent="#accordion-banner-{{ $i }}" style="">
                                <div class="accordion-body p-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach ($joinbanner->where('id_slot', $pos->id_slot) as $banner)
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
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</aside>
