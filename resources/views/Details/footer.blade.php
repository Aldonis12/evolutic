<footer>
    <div class="footer-row">
        <div class="footer-col">
            <img src="{{ asset('assets/image/logo.png') }}" class="footer-logo">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero architecto consectetur at sit
                dignissimos voluptates voluptate velit numquam aliquam laudantium, impedit, nihil consequatur,
                dolore minima magni quas enim reiciendis ad.</p>
        </div>
        <div class="footer-col">
            <h3>Office <div class="footer-underline"><span></span></div>
            </h3>
            <p>Tana 101</p>
            <p>Antananarivo, Madagascar</p>
            <p class="email-id">+26189263</p>
        </div>
        <div class="footer-col">
            <h3>Links <div class="footer-underline"><span></span></div>
            </h3>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/a-propos">A propos</a></li>
                <li><a href="/service">Service</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Newsletter <div class="footer-underline"><span></span></div>
            </h3>
            <form action="" class="footer-form">
                <i class="far fa-envelope"></i>
                <input type="email" placeholder="Entrez votre email" class="footer-email" required>
                <button type="submit"><i class="fas fa-arrow-right"></i></button>
            </form>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-pinterest"></i>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">Copyright © <span id="currentYear"></span> - <span class="petit-copyright">Made
            by&nbsp;&nbsp;<i>HERITRA Aldonis Mick Lewis</i></span></p>
</footer>


<script>
    const currentYearElement = document.getElementById('currentYear');
    const currentYear = new Date().getFullYear();
    currentYearElement.textContent = currentYear;

    function showMenu() {
        document.getElementById("navLinks").style.right = "0";
    }

    function hideMenu() {
        document.getElementById("navLinks").style.right = "-200px";
    }
</script>
