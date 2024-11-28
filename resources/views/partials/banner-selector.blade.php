<div class="row g-4 banner-selector">
    <div class="col-5">
        <ul class="nav nav-tabs" role="tablist">
            @foreach ($joinbanner->where('id_slot', $listPD->id_slot ) as $banner)
            <li class="nav-item w-100" role="presentation">
                <a class="nav-link" id="bnr-{{ $banner->id }}" data-mdb-toggle="tab" href="#detail-{{ $banner->id }}" role="tab" aria-controls="detail-{{ $banner->id }}" aria-selected="true"> {{ $banner->name }} </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="col">
        <div class="tab-content">
            @foreach ($joinbanner->where('id_slot', $listPD->id_slot ) as $banner)
            <div class="tab-pane fade" id="detail-{{ $banner->id }}" role="tabpanel" aria-labelledby="bnr-{{ $banner->id }}">
                <img src="{{ $banner->image }}" width="100%">
            </div>
            @endforeach
        </div>
    </div>
</div>