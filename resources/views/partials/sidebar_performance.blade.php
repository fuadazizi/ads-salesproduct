<aside class="sidebar" id="sidebar-performance">
    <div class="accordion" id="accordion-performance">
        @foreach ($listperformance as $category => $performance_cat)
            @php
                $iter = $loop->iteration;
            @endphp
            <div class="accordion-item rounded-0" style="border: none;">
                <h2 class="accoridon-header mb-0" id="headcat-{{ $iter }}">
                    <button class="accordion-button rounded-0 collapsed bg-white" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#bodycat-{{ $iter }}" aria-expanded="false"
                        aria-controls="bodycat-{{ $iter }}" value="{{ $category }}">
                        {{ $category }}
                    </button>
                </h2>

                {{-- DESKTOP --}}
                <div id="bodycat-{{ $iter }}" class="accordion-collapse collapse collapse-horizontal platform"
                    aria-labelledby="headcat-{{ $iter }}" data-mdb-parent="#accordion-performance"
                    style="left: 100%;position: absolute;top: 0;background: white;overflow-y:scroll;border-left: 1px solid #e0e0e0;">
                    <div class="accordion-body" id="accordion-platform-{{ $iter }}">
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-desktop">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#bodyplat-desktop" aria-expanded="false"
                                    aria-controls="bodyplat-desktop" value="desktop">
                                    Desktop
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-desktop"
                                aria-labelledby="headplat-desktop"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body">
                                    <ul>
                                        @foreach ($performance_cat->where('id_platform', '=', '1') as $perf)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link b-select"> {{ $perf->name }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- =============== MOBILE ================ --}}
                <div id="bodycat-{{ $iter }}" class="accordion-collapse collapse collapse-horizontal platform"
                    aria-labelledby="headcat-{{ $iter }}" data-mdb-parent="#accordion-performance"
                    style="left: 100%;position: absolute;top: 0;background: white;overflow-y:scroll;border-left: 1px solid #e0e0e0;">
                    <div class="accordion-body" id="accordion-platform-{{ $iter }}">
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-desktop">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#bodyplat-desktop" aria-expanded="false"
                                    aria-controls="bodyplat-desktop" value="desktop">
                                    Desktop
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-desktop"
                                aria-labelledby="headplat-desktop"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body">
                                    <ul>
                                        @foreach ($performance_cat->where('id_platform', '=', '1') as $perf)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link b-select"> {{ $perf->name }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- DESKTOP --}}
                <div id="bodycat-{{ $iter }}" class="accordion-collapse collapse collapse-horizontal platform"
                    aria-labelledby="headcat-{{ $iter }}" data-mdb-parent="#accordion-performance"
                    style="left: 100%;position: absolute;top: 0;background: white;overflow-y:scroll;border-left: 1px solid #e0e0e0;">
                    <div class="accordion-body" id="accordion-platform-{{ $iter }}">
                        <div class="accordion-item rounded-0" style="border: none;">
                            <h2 class="accoridon-header mb-0" id="headplat-desktop">
                                <button class="accordion-button rounded-0 collapsed bg-white" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#bodyplat-desktop" aria-expanded="false"
                                    aria-controls="bodyplat-desktop" value="desktop">
                                    Desktop
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse banner" id="bodyplat-desktop"
                                aria-labelledby="headplat-desktop"
                                data-mdb-parent="#accordion-platform-{{ $iter }}">
                                <div class="accordion-body">
                                    <ul>
                                        @foreach ($performance_cat->where('id_platform', '=', '1') as $perf)
                                            <li class="nav-item w-100" role="presentation">
                                                <p class="nav-link b-select"> {{ $perf->name }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</aside>