    /* Slider-Selectors */
    const track = document.getElementById('track');
    const slides = document.querySelectorAll('.slide');
    const dotContainer = document.getElementById('dot-container');

    /* Slider-Variables */
    let currentIndex = 0;
    let autoPlayTimer;

    /* Slider-Functions */
    function initDots() {
        slides.forEach((_, i) => {
            const dot = document.createElement('div');
            dot.className = `dot ${i === 0 ? 'active' : ''}`;
            dot.addEventListener('click', () => goTo(i));
            dotContainer.appendChild(dot);
        });
    }

    function updateUI() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    }

    function move(direction) {
        currentIndex = (currentIndex + direction + slides.length) % slides.length;
        updateUI();
        resetTimer();
    }

    function goTo(index) {
        currentIndex = index;
        updateUI();
        resetTimer();
    }

    function startTimer() {
        autoPlayTimer = setInterval(() => move(1), 5000);
    }

    function resetTimer() {
        clearInterval(autoPlayTimer);
        startTimer();
    }

    const slider = document.getElementById('main-slider');
    slider.addEventListener('mouseenter', () => clearInterval(autoPlayTimer));
    slider.addEventListener('mouseleave', () => startTimer());

    initDots();
    startTimer();
