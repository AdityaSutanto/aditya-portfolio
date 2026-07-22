const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-scroll');

window.addEventListener('scroll', () => {

    let current = '';

    sections.forEach(section => {

        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.clientHeight;

        if(window.scrollY >= sectionTop){

            current = section.getAttribute('id');

        }

    });

    navLinks.forEach(link => {

        link.classList.remove('active-link');

        if(
            link.getAttribute('href') === '#' + current
        ){
            link.classList.add('active-link');
        }

    });

});