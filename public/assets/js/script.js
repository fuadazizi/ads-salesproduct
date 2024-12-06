lazyload();

// Close wp landing page
function closeWP() {
    document.getElementById("wpContainerText").style.height = "0px";
    document.getElementById("wpContainerText").style.padding = "0px";
    document.querySelector("#wpContainerImage img").style.marginTop = "700px";

    $("main").show();
    setTimeout(() => {
        $(".sidebars").removeClass("closed-panel");
        $("header").css({ top: "0" });
    }, 300);
}

// show sidebar banner
// function openBanner() {
//     closeWP();

//     $("#sidebar-banner").show();
//     setTimeout(() => {
//         $("#sidebar-banner").show();
//     }, 300);
// }

// show sidebar performance
// function openPerformance() {
//     closeWP();
//     $("#sidebar-performance").show();
//     setTimeout(() => {
//         $("#sidebar-performance").show();
//     }, 300);
// }

// close panel for navbar
$("#burgers").on("click", function () {
    if ($(".sidebars").hasClass("closed-panel")) {
        $(".sidebars").removeClass("hidden-panel");
    } else if (!$(".sidebars").hasClass("closed-panel")) {
        setTimeout(() => {
            $(".sidebars").addClass("hidden-panel");
        }, 300);
    }

    $(".sidebars").toggleClass("closed-panel");
    $(".previewer").toggleClass("closed-panel");
});

$(function () {
    // change banner previewed
    $(".banner-select").on("click", function (e) {
        e.preventDefault();
        const name = $(this).data("name");
        const image = $(this).data("image");
        const platform = $(this).data("platform");
        const positionused = $(this).data("positionused");
        const rulesize = $(this).data("rulesize");
        const buying = $(this).data("buying");
        const reporting = $(this).data("reporting");

        // === change content of previewed banner ===
        $("#pbnr-name").text(name);
        $("#pbnr-platform").text(platform);
        $("#pbnr-positionused").text(positionused);
        $("#pbnr-buying").text(buying);
        $("#pbnr-reporting").html(reporting.length == 0 ? "-" : reporting);

        $("#pbnr-image").attr("src", "https://cdnstatic.detik.com/live/html5/sales-product-source/8KCB.gif");
        $("#pbnr-image").css("width", 300 );
        $("#pbnr-image").attr("src", image);
        if (platform == "Mobile" || platform == "Apps") {
            $("#pbnr-image").css("width", 300);
        } else {
            $("#pbnr-image").css("width", 350);
        }

        const rules = rulesize.split(";");
        $("#pbnr-rulesize").empty();
        rules.forEach((rule) => {
            rule = rule.trim();
            if (rule.includes(":")) {
                $("#pbnr-rulesize").append(`<p>${rule}</p>`);
            } else if (rule != "") {
                $("#pbnr-rulesize").append(`<li>${rule}</li>`);
            }
        });

        // === change display and navbar go to right ===
        $("#platform-contents, #platform-tabs, .previewer").addClass("show");
        $(".tab-content").addClass("col-lg-3");
        $(".selected").removeClass("selected");
        $(this).addClass("selected");
    });

    $(".grand-selector").each(function () {
        const targetId = $(this).data("mdb-target");
        const target = $(targetId);

        $(this).on("mouseenter", function () {
            target.addClass("show"); // Show accordion
            $(this).attr("aria-expanded", "true"); // Show aria-expanded
            $(".grand-selector").addClass("collapsed"); // Reset selected effect
            $(this).removeClass("collapsed"); // Add selected effect
        });

        $(this).on("mouseleave", function () {
            // if ()
            target.removeClass("show"); // Hide accordion
            $(this).attr("aria-expanded", "true"); // Hide aria-expanded
            // $(this).addClass("collapsed"); // Remove selected effect
        });

        // event untuk menghindari penutupan accordion jika mouse masuk ke konten
        target
            .on("mouseenter", function () {
                $(this).addClass("show");
            })
            .on("mouseleave", function () {
                $(this).removeClass("show");
                $(".grand-selector").addClass("collapsed"); // Reset selected effect
            });
    });
});
