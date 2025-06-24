document.addEventListener('DOMContentLoaded', () => {

    // --- FITUR 1: EFEK KETIK (TYPEWRITER) ---
    function typeEffect(element, text, speed = 75) {
        let i = 0;
        element.innerHTML = ""; // Kosongkan elemen terlebih dahulu
        
        function typing() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, speed);
            }
        }
        typing();
    }

    const heroTitle = document.querySelector('.hero-section h1');
    if (heroTitle) {
        const text = heroTitle.textContent;
        typeEffect(heroTitle, text);
    }
    
    // Cek jika kita di halaman challenges.php dengan mencari elemen .grid
    const challengesContainer = document.querySelector('.grid');
    if (challengesContainer) {
        const challengesTitle = document.querySelector('h1');
        if (challengesTitle) {
            const text = challengesTitle.textContent;
            typeEffect(challengesTitle, text);
        }
    }


    // --- FITUR 2: ANIMASI FADE-IN SAAT SCROLL ---
    const hiddenElements = document.querySelectorAll('.hidden-on-load');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1 // Muncul saat 10% elemen terlihat
    });

    hiddenElements.forEach((el) => observer.observe(el));


    // --- FITUR 3: EFEK SPOTLIGHT MENGIKUTI MOUSE ---
    const body = document.body;
    body.addEventListener('mousemove', (e) => {
        // Set posisi X dan Y ke CSS custom properties
        body.style.setProperty('--mouse-x', `${e.clientX}px`);
        body.style.setProperty('--mouse-y', `${e.clientY}px`);
    });

});