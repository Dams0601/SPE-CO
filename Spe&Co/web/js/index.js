const hamburger = document.querySelector('#hamburger');
const navContent = document.querySelector('.navbar-content');

hamburger.addEventListener('click', function(e){
    navContent.classList.toggle('show');
})

/* CREER LE DIAGRAMME CIRCULAIRE */
var ctx = document.getElementById('myChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            backgroundColor: ['#c22f36', '#46cf37', '#cdcdcd', '#c73c6f', '#2ab4d9', '#373735', '#d25124', '#3074d3', '#f8b112'],
            data: [25.96, 13.07, 15.58, 16.25, 8.88, 4.19, 12.06, 2.85, 1.17]
        }],
        labels: [
            'Mathématiques',
            'SVT',
            'SES',
            'PH-CH',
            'LLCE',
            'NSI',
            'HGGSP',
            'HLPHI',
            'SI'
        ]
    },
    options: {
        legend: {
            fullWidth: false,
            labels: {
                fontColor:'#FFF',
                fontSize: 14,
            }
        }
    },
});

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