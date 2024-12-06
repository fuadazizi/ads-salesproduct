<div class="previewer position-absolute col-12" style="">
    <div class="container position-sticky h-100">
        <div class="row">
            <h1 id="pbnr-name"> {name} </h1>
        </div>
        <div class="row bg-white border border-secondary rounded-5 p-3">
            <div class="col px-4" style="height: fit-content">
                <div class="previewer-detail">
                    <h2>Rules and Specification</h2>
                    <hr class="mt-0">
                    <table class="w-100">
                        <tr>
                            <td>
                                <h3>Platform</h3>
                            </td>
                            <td>
                                <p id="pbnr-platform">{platform}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Position Used</h3>
                            </td>
                            <td>
                                <p id="pbnr-positionused">{positionused}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Banner Specification</h3>
                            </td>
                            <td>
                                <div id="pbnr-rulesize">
                                    {rulesize}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Method Buying</h3>
                            </td>
                            <td>
                                <p id="pbnr-buying">{buying}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Reporting</h3>
                            </td>
                            <td id="pbnr-reporting">
                                {reporting}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex flex-column align-items-center">
                <img id="pbnr-image" src="https://cdnstatic.detik.com/live/html5/sales-product-source/8KCB.gif" alt="img">
                <div class="dropdown select-channel text-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        style="width:125px;" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                        Detikcom
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                        <li><a class="dropdown-item" href="#">detikcom</a></li>
                        <li><a class="dropdown-item" href="#">detikNews</a></li>
                        <li><a class="dropdown-item" href="#">detikFinance</a></li>
                    </ul>
                    <br>
                    <button class="btn btn-preview mt-3 text-white" style="width:125px;background-color: #ef672f;">
                        Preview
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
