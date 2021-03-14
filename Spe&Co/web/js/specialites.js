/* CAROUSEL - COMMENTARY */
$(".comments-border > div:gt(0)").hide();

setInterval(function() {
  $('.comments-border > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('.comments-border');
}, 4000);


/* APPARITION DES TITLES AU DEFILEMENT */
const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio,
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target);
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
})