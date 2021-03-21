/* HANBURGER */
const hamburger = document.querySelector('#hamburger');
const navContent = document.querySelector('.navbar-content');

hamburger.addEventListener('click', function (e) {
    navContent.classList.toggle('show');
})

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

/* BUTTON REVENIR EN HAUT */
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function(ev) {
      document.getElementById("goTop").className = (window.pageYOffset > 100) ? "show" : "unshow";
    };
  });