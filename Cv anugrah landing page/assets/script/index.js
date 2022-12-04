gsap.from('.nav-logo, .title-header, .card-header, .nav-item, .button-header', {
    opacity: 0,
    duration: 2,
    delay: 1.5,
    y: 25,
    ease: 'expo.out',
    stagger: .2
});

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal(`.aplikasi-right, .aplikasi-left, .benefits, .portofolio`, {
    interval: 100
})