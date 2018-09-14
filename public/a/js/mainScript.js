$(document).ready(function () {
    $("#copyLink").click(function () {
        $(this).select();
    });
    $("#copyLink").keyup(function () {
        $(this).html('&lt;script src="https://rgbplaza.github.io/RGBSlide/rgbSlide.min.js"> &lt;/script>');
    });

    $("#exampleSlider").rgbslide();
});