


document.addEventListener('DOMContentLoaded', function() {
    fixNavigation();
    createGallery();
    highlightLink();
    scrollNav();
});

function fixNavigation() {
    const header = document.querySelector('.wrap-header');
    const fest = document.querySelector('.wrap-festival');

    window.addEventListener('scroll', function() {
        if(fest.getBoundingClientRect().bottom < 1) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    });
}

function createGallery() {
    const gallery = document.querySelector('.wrap-gallery-imgs');
    const lengthImgs = 16;

    for(let i = 1; i <= lengthImgs; i++) {
        const image = document.createElement('IMG');
        image.src = `src/assets/img/gallery/full/${i}.jpg`;
        image.alt = 'Imagen de la Galería';
        image.title = 'Imagen de la Galería';

        // Event Handler
        image.onclick = function() {
            showModalImage(i);
        };

        gallery.appendChild(image);
    }
}

function showModalImage(i) {
    const image = document.createElement('IMG');
    image.src = `src/assets/img/gallery/full/${i}.jpg`;
    image.alt = 'Imagen de la Galería';
    image.title = 'Imagen de la Galería';

    // Generar modal
    const modal = document.createElement('DIV');
    modal.classList.add('wrap-modal');
    modal.onclick = closeModal;
    modal.appendChild(image);
    // Botón cerrar Modal
    const btnClose = document.createElement('BUTTON');
    btnClose.textContent = 'X';
    btnClose.classList.add('btn-close');
    btnClose.onclick = closeModal;
    modal.appendChild(btnClose);
    // Agregar al HTML
    const body = document.querySelector('body');
    body.classList.add('no-scroll');
    body.appendChild(modal);
    console.log(modal);
}

function closeModal() {
    const modal = document.querySelector('.wrap-modal');
    const body = document.querySelector('body');
    body.classList.remove('no-scroll');
    modal.classList.add('fade-out');
    setTimeout(() => {
        modal?.remove();
    }, 500);
}

function highlightLink() {
    document.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.header-content__navbar .header-content__navbar--link');
        let currentSection = '';
        sections.forEach( section => {
            const sectionTop = section.offsetTop;
            const sectionHight = section.clientHeight;
            if(window.scrollY >= (sectionTop - sectionHight / 3)) {
                currentSection = section.id;
            }
            navLinks.forEach(link => {
                if(link.getAttribute('href') === `#${currentSection}`) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            })
        })
    });
}

function scrollNav() {
    const navLinks = document.querySelectorAll('.header-content__navbar .header-content__navbar--link');
    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const sectionScroll = e.target.getAttribute('href');
            const section = document.querySelector(sectionScroll);

            section.scrollIntoView({
                behavior: 'smooth'
            });
        });
    })
}