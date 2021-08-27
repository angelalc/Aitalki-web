// ilustración Inicio Talki

var animation = bodymovin.loadAnimation({
    container: document.getElementById('bm'),
    path: document.getElementById('data-json').value,
    renderer: 'svg',
    loop: false,
    autoplay: true
})

