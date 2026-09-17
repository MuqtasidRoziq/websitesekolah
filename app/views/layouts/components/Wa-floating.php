    <!-- FLOATING ACTION BUTTONS -->
    <div class="floating-wa-wrapper">
        <!-- Scroll to top button -->
        <button id="scrollToTopBtn" class="btn btn-primary rounded-circle shadow d-flex align-items-center justify-content-center scroll-top-btn" onclick="window.scrollTo({top: 0, behavior: 'smooth'});" aria-label="Scroll to top">
            <i class="bi bi-chevron-up fs-5"></i>
        </button>

        <!-- WhatsApp Button -->
        <a href="<?= URL_WHATSAPP ?>" target="_blank" class="floating-wa-btn">
            <span class="bg-white text-dark shadow-sm rounded-pill px-3 py-2 me-2 fw-medium wa-hover-text" style="font-size: 14px;">
                Konsultasikan sekarang
            </span>
            <div class="bg-success text-white rounded-circle shadow d-flex align-items-center justify-content-center wa-icon">
                <i class="bi bi-whatsapp"></i>
            </div>
        </a>
    </div>

    <script>
        // Scroll to Top Logic
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });
    </script>