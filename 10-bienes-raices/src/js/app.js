


document.addEventListener('DOMContentLoaded', () => {
    showMobileMenu();
    darkMode();
});

const showMobileMenu = () => {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', () => {
        const nav = document.querySelector('.wrap-navbar--navigation');
        nav.classList.toggle('show');
    });
}

const darkMode = () => {
    const prefDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if(prefDarkMode) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefDarkMode.addEventListener('change', () => {
        if(prefDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const darkModeBtn = document.querySelector('.dark-mode-btn');
    darkModeBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}