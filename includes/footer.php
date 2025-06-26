<footer class="footer mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <h5>SoundWave</h5>
                <p>Your ultimate music streaming destination</p>
            </div>
            <div class="col-md-3 mb-3">
                <h6>Product</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3">
                <h6>Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3">
                <h6>Follow Us</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Community</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-3">
            <small>© 2024 SoundWave. All rights reserved.</small>
        </div>
    </div>
    <!-- Modal for Coming Soon -->
    <div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="comingSoonLabel">Coming Soon!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            This feature will be available soon. Stay tuned!
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Highlight active nav link
        const navLinks = document.querySelectorAll('.navbar .nav-link');
        const path = window.location.pathname.split('/').pop();
        navLinks.forEach(link => {
            if(link.getAttribute('href') === path) {
                link.classList.add('active');
            }
        });
        // Sticky navbar shadow
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if(window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        // Back to top button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if(window.scrollY > 200) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
        if(backToTop) {
          backToTop.onclick = function() {
              window.scrollTo({top: 0, behavior: 'smooth'});
          };
        }
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        function setTheme(theme) {
            if(theme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
            }
        }
        darkModeToggle && darkModeToggle.addEventListener('click', function() {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            setTheme(isDark ? 'light' : 'dark');
        });
        if(localStorage.getItem('theme') === 'dark') {
            setTheme('dark');
        }
        // Clickable cards (show coming soon)
        document.querySelectorAll('.card-playlist, .card-release').forEach(card => {
            card.style.cursor = 'pointer';
            card.addEventListener('click', function(e) {
                e.preventDefault();
                var modal = new bootstrap.Modal(document.getElementById('comingSoonModal'));
                modal.show();
            });
        });
    </script>
    <button id="backToTop" class="back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>
</footer>
</body>
</html>
