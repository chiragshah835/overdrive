 const row = document.getElementById('cardRow');
    let index = 0;

    function nextSlide() {
        const cardsVisible = window.innerWidth > 992 ? 3 : (window.innerWidth > 600 ? 2 : 1);
        const totalCards = document.querySelectorAll('.car-card').length;
        
        index++;
        
        // Reset to start if we reach the end
        if (index > totalCards - cardsVisible) {
            index = 0;
        }

        const walk = index * (100 / cardsVisible);
        row.style.transform = `translateX(-${walk}%)`;
    }

    // Slide every 3 seconds
    setInterval(nextSlide, 3000);