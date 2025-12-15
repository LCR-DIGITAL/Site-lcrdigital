function initBannerVideo() {
var $overlay = $(".banner-video-overlay");
var $videoContainer = $("#videoContainer");

setTimeout(function() {
    $overlay.css("opacity", 1);

    setTimeout(function() {
    $videoContainer.css("display", "block");
    $videoContainer.html(`
        <iframe 
        src="https://www.youtube.com/embed/RPjZMjB55wU?autoplay=1&mute=1&controls=0&rel=0&disablekb=1&modestbranding=1&playsinline=1&fs=0&loop=1&playlist=RPjZMjB55wU" 
        frameborder="0" 
        allow="autoplay; encrypted-media" 
        allowfullscreen>
        </iframe>`);
    }, 2000);
}, 3000);
}

$(document).ready(function() {
    initBannerVideo();
});
