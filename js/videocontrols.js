(function() {
    const showLogo = () => {
        document.querySelector('video+span').style.opacity = 1;
        document.querySelector('video').style.filter = 'grayscale(0.3)';
    };
    setTimeout(showLogo, 13000);
    document.querySelector('video').play();
})();