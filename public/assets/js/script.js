lazyload();

// SEARCH FUNCTION
// var input, filter, table, tr, td, i, txtValue, allbanner, seacrhM;

// function FunctionSearch() {
//     input = document.getElementById("search-ms");
//     allbanner = document.getElementById("allbanner");
//     seacrhM = document.getElementById("seacrhM");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("premium-tbl");
//     highlight = document.getElementById("highlight-banner");
//     tr = table.getElementsByTagName("tr");

//     countData = 0;
//     for (i = 0; i < tr.length; i++) {
//         td = tr[i].getElementsByTagName("td")[0];
//         if (td) {
//             txtValue = td.textContent || td.innerText;
//             if (txtValue.toUpperCase().indexOf(filter) > -1) {
//                 tr[i].style.display = "";
//                 countData++;
//             } else {
//                 tr[i].style.display = "none";
//             }

//             if (filter == '') {
//                 allbanner.style.display = "";
//                 highlight.style.display = "";
//                 searchM.style.display = "none";
//                 $('#empty-notice').hide();
//                 // console.log('tidak search data');
//             } else if (countData == 0 && filter != '') {
//                 allbanner.style.display = "none";
//                 highlight.style.display = "none";
//                 searchM.style.display = "none";
//                 $('#empty-notice').show();
//                 // console.log('data tidak ada dan search');
//             } else if (countData != 0 && filter != '') {
//                 allbanner.style.display = "none";
//                 highlight.style.display = "none";
//                 searchM.style.display = "block";
//                 $('#empty-notice').hide();
//                 // console.log('data ada');
//             }
//         }
//     }
// }

$(window).on('scroll', function() {

    const sidebar = $('.sidebar');
    const sidebarTop = sidebar.offset().top - $(window).scrollTop() - 90;

    if (sidebarTop <= 0) {
        $("nav").addClass("scrolled");
    } else {
        $("nav").removeClass("scrolled");
    }

});

// change banner previewed
$(".b-select").on('click', function(e) {
    e.preventDefault();
    const name = $(this).data('name');
    const image = $(this).data('image');
    const platform = $(this).data('platform');
    const positionused = $(this).data('positionused');
    const rulesize = $(this).data('rulesize');
    const buying = $(this).data('buying');
    const reporting = $(this).data('reporting');
    // const typebanner = $(this).data('typebanner');
    // const scenario = $(this).data('scenario');
    // const id_cpm = $(this).data('id_cpm');
    
    // === change content of previewed banner ===
    $("#pbnr-name").text(name);
    $("#pbnr-image").attr("src", image);
    $("#pbnr-platform").text(platform);
    $("#pbnr-positionused").text(positionused);
    $("#pbnr-buying").text(buying);
    console.log(reporting);
    $("#pbnr-reporting").text((reporting == undefined ? '-' : reporting)); // apakah set nilai default atau bagaimana
    
    const rules = rulesize.split(";");
    $("#pbnr-rulesize").empty();
    rules.forEach(rule => {
        rule = rule.trim();
        if (rule.includes(':')) {
            $("#pbnr-rulesize").append(`<li>${rule}</li>`);
        } else if (rule != "") {
            $("#pbnr-rulesize").append(`<p>${rule}</p>`);
        }
    });
    
    // $("#pbnr-typebanner").text(typebanner);
    // $("#pbnr-scenario").text(scenario);
    // $("#pbnr-idcpm").text(id_cpm);

    // === change display and navbar go to right ===
    $("#platform-contents, #platform-tabs, .previewer").addClass("show");
    $(".tab-content").addClass("col-lg-3");
    $(".selected").removeClass("selected");
    $(this).addClass("selected");

})

// Close wp landing page
function closeWP() {
    document.getElementById("wpContainerText").style.height = "0px";
    document.getElementById("wpContainerText").style.padding = "0px";
    document.querySelector("#wpContainerImage img").style.marginTop = "700px";
    setTimeout(() => {
        $("header").css({"top" : "0"});
    }, 300);
}

function openBanner() {
    closeWP();
    // show sidebar banner

    $("#sidebar-banner").show();
    setTimeout(() => {
        $("#sidebar-banner").addClass("show");
    }, 300);
}

function openPerformance() {
    closeWP();
    // show sidebar performance
    $("#sidebar-performance").show();
    setTimeout(() => {
        $("#sidebar-performance").addClass("show");
    }, 300);
}