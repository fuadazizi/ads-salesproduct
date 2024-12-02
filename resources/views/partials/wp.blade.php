<div class="wp-container">
    <div class="wp-container-text" id="wpContainerText">
        <div class="image-brand">
            <img src="{{ asset('assets/images/brand-logo.png') }}" alt="" />
        </div>
        <div class="text">
            <h1>Power Your Ads on Indonesia's Top News Platform</h1>
            <p>
                Discover countless inventory ad options on detikcom, perfectly
                suited to your needs. Available on various platforms.
            </p>
        </div>
        <div class="button-cta">
            <a href="#" class="btn-cta-primary" onclick="closeWP()">Explore Ad Options</a>
            <a href="#" class="btn-cta-secondary">Text Button</a>
        </div>
    </div>
    <div class="wp-container-image" id="wpContainerImage">
        <img src="{{ asset('assets/images/image-sales-product-wp.png') }}" alt="" />
    </div>
</div>

<script>
    function closeWP() {
        document.getElementById("wpContainerText").style.height = "0px";
        document.getElementById("wpContainerText").style.padding = "0px";
        // document.getElementById("wpContainerImage").style.overflow = "hidden";
        document.querySelector("#wpContainerImage img").style.marginTop = "800px";
        console.log("clicked");
    }
</script>
