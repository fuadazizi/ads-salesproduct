<div class="layout container position-sticky" style="top: 66px;">
    <div class="row">
        <h1 id="pbnr-name"> {{ $banner->name }} </h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5">
            <img id="pbnr-image" src="{{ $banner->image }}" alt="({ $banner->name }}" style="width:-webkit-fill-available">
        </div>
        <div class="col previewer-detail">
            <h2>Rules and Specification</h2>
            <hr class="mt-0">
            <h3>Platform</h3>
            <p id="pbnr-platform">{{ $banner->platform }}</p>
            <h3>Position Used</h3>
            <p id="pbnr-positionused">{{ $banner->positionused }} </p>
            <h3>Banner Specification</h3>
            <ul class="ps-3" id="pbnr-rulesize">
                @foreach(explode(';',$banner->rulesize) as $rule)
                @if (Str::contains($rule, ':'))
                <li> {{ $rule }} </li>
                @else
                {{ $rule }} </br>
                @endif
                @endforeach
            </ul>
            </p>
            <h3>Method Buying</h3>
            <p id="pbnr-buying">{{ $banner->buying }}</p>
            <h3>Reporting</h3>
            <p id="pbnr-reporting">{{ $banner->reporting }}</p>
            <!-- <h3>Scenario</h3> -->
        </div>
    </div>
</div>