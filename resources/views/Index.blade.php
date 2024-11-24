<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>Accueil</title>
</head>

<body>
    @include('Details.header')
    
    <!------course------>
    {{-- @include('include.include-course') --}}

    <!------service------>

    @include('include.include-service')

    <!------timeline------>

    <section class="big-timeline">
        <h1>Pourquoi nos services ?</h1>
        <div class="timeline-box">
            @for($i = 1; $i < 11; $i++)
                <div></div>
            @endfor
        </div>
        <div class="timeline">
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Gain de temps et expertise sur mesure</h2>
                    <p>Confiez-nous vos besoins en finances, communication et web, pour que vous puissiez vous concentrer sur l’essentiel de votre activité. Chaque service est ajusté à vos objectifs pour maximiser l'impact.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Une solution complète 3-en-1</h2>
                    <p>Notre approche unique combine gestion financière, marketing, et présence numérique, garantissant un soutien cohérent et aligné sur vos ambitions.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Boost de votre présence en ligne</h2>
                    <p>Grâce à notre expertise, votre marque se démarque sur les réseaux sociaux et les plateformes numériques, renforçant ainsi votre visibilité.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Équipe pluridisciplinaire et flexible</h2>
                    <p>Nos freelances expérimentés allient compétences variées pour des solutions innovantes et s'adaptent rapidement à vos besoins, assurant une réactivité optimale.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Qualité, transparence et suivi personnalisé</h2>
                    <p>Bénéficiez d’un service de haute qualité sans les frais d’une grande agence. Des échanges clairs et un suivi régulier vous assurent une gestion transparente et de confiance.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- @include('include.include-campus') --}}

    <section class="cta">
        <h1>Contactez-nous pour en savoir plus sur <br> Evolutic</h1>
        <a href="/contact" class="hero-btn">Nous Contacter</a>
    </section>


    @include('Details.footer')

</body>

</html>
