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