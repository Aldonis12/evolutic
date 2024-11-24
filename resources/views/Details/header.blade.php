@if (request()->is('/'))
    <section class="header">
    @else
        <section class="sub-header">
    @endif
<nav>
    <a href="/"><img src="{{ asset('assets/image/logo.png') }}" alt=""></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="/">ACCUEIL</a></li>
            <li><a href="/service">SERVICES</a></li>
            <li><a href="/contact">CONTACT</a></li>
            <li><a href="/a-propos">A PROPOS</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>

@if (request()->is('/'))
    <div class="text-box">
        <h1>E V O L U - T I C</h1>
        <p><i>Finances, Marketing et Développement web, Votre trio performant<br><br>Evolutic est né de la vision que la performance durable repose sur l'alliance stratégique des <strong>finances</strong>, de la <strong>communication marketing</strong> et de l'<strong>intégration web</strong>. 
            Avec une expertise complète, nous aidons les entreprises à structurer leurs processus, améliorer leur image et maîtriser leurs finances. Evolutic transforme vos projets en références, en assurant une présence forte sur les réseaux et une solidité dans le monde réel.</i></p>
        {{-- <a href="" class="hero-btn">Visit Us to Know More</a> --}}
    </div>
@elseif(request()->is('service'))
    <h1>S E R V I C E S</h1>
@elseif(request()->is('a-propos'))

@elseif(request()->is('contact'))
    <h1>C O N T A C T</h1>
@elseif(request()->is('service/gestion-financiere'))
    <h1>G E S T I O N - F I N A N C I E R E</h1>
@elseif(request()->is('service/marketing-digital'))
    <h1>M A R K E T I N G - D I G I T A L</h1>
@elseif(request()->is('service/developpement-web'))
    <h1>D E V E L O P P E M E N T - W E B</h1>
@else
    <h1>T - I - T - R - E</h1>
@endif
</section>
