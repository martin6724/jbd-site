console.log("working again!");

// home page content tabs
document.getElementById("defaultOpen").click();

function showContent(evt, tabInner) {
   var i, tabcontent, tabboxes;

tabcontent = document.getElementsByClassName("tab-content");
for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
}

tabboxes = document.getElementsByClassName("tab-box");
for (i = 0; i < tabboxes.length; i++) {
    tabboxes[i].className = tabboxes[i].className.replace(" active", "");
}

document.getElementById(tabInner).style.display = "block";
evt.currentTarget.className += " active";

}



jQuery('#myCarousel').on('slide.bs.carousel', function (e) {

    var $e = jQuery(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 6;
    var totalItems = jQuery('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                jQuery('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                jQuery('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
