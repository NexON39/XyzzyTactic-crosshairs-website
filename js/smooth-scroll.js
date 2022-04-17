// Author: NexON39
// Discord: NexON39#5665

$(".navbar ul a[href*='#']").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 1000);
});

$(".home-content .container a[href*='#']").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 500);
});