<div class="sidebar overflow-y-scroll">
    <div class="accordion" id="accordion-platform">
        @foreach ($listperformance as $perf)
        <!--  -->
        @if (count($perf) > 0)
        @php
        $id = $perf[0]->id
        @endphp
        <div class="accordion-item rounded-0" style="border: none;">
            <h2 class="accoridon-header mb-0" id="headplatform-{{ $id }}">
                <button class="accordion-button rounded-0 collapsed bg-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#colplatform-{{ $id }}" aria-expanded="false" aria-controls="colplatform-{{ $id }}" value="{{ $id }}">
                    {{$perf[0]->type_cpm}}
                </button>
            </h2>
            
            {{-- <div id="colplatform-{{ $id }}" class="accordion-collapse collapse collapse-horizontal platform" aria-labelledby="headplatform-{{ $id }}" data-mdb-parent="#accordion-platform" style="left: 70px;position: absolute;top: 0;background: white;overflow-y:scroll;border-left: 1px solid #e0e0e0;">
                <div class="accordion-body accordion p-0 position-sticky" id="accordion-banner-{{ $id }}" style="height: 100vh;">
                    @foreach($listposition->where('id_platform', $i) as $pos)
                    <div class="accordion-item rounded-0 border-0 mb-2">
                        <h2 class="accordion-header" id="heading{{ $pos->id_slot }}">
                            <button class="accordion-button rounded-0 collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapse{{ $pos->id_slot }}" aria-expanded="true" aria-controls="collapse{{ $pos->id_slot }}" value="{{ $pos->id_slot }}" name="banneritem">
                                {{ $pos->slot_name }}
                            </button>
                        </h2>
                        <div id="collapse{{ $pos->id_slot }}" class="accordion-collapse collapse preview" aria-labelledby="heading{{ $pos->id_slot }}" data-mdb-parent="#accordion-banner-{{ $id }}" style="">
                            <div class="accordion-body p-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach ($joinbanner->where('id_slot', $pos->id_slot ) as $banner)
                                    <li class="nav-item w-100" role="presentation">
                                        <p class="nav-link b-select"
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
            </div> --}}
        </div>
        @endif
        @endforeach
    </div>
</div>