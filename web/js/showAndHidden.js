function loop() {
    requestAnimationFrame(loop);
    if (window.pageYOffset > 800) {
        document.getElementById('hidden').style.opacity = 0;
        document.getElementById('hidden').style.transform = .5;
    } else {
        document.getElementById('hidden').style.opacity = 1;
        document.getElementById('hidden').style.transform = .5;
    }
}

loop();
