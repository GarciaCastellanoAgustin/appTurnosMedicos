window.sr = ScrollReveal();

sr.reveal('.navbar', {
    duration: 1450,
    origin: 'bottom',
    distance: '100%'
});

sr.reveal('.intro', {
    duration: 1450,
    origin: 'left',
    distance: '120%'
});

sr.reveal('.steps', {
    duration: 1500,
    origin: 'left',
    distance: '500%',
    interval: 106
});

sr.reveal('article', {
    duration: 1500,
    origin: 'right',
    distance: '400%',
    interval: 106
});

sr.reveal('iframe', {
    duration: 2500,
    origin: 'bottom',
    distance: '400%',
    interval: 106
});