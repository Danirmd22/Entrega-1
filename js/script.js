function ScrollNav() {
    var nav = document.querySelector('.nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrollBlack');
        } else {
            nav.classList.remove('scrollBlack');
        }
    });
}


