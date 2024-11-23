<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>Accueil</title>
</head>

<body>
    @include('Details.header')
    
    <!------course------>

    {{-- <section class="course">
        <h1>Courses We Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsam similique, molestiae
                    accusantium perspiciatis voluptatem architecto? Sunt, beatae? Voluptas vel libero quos totam atque,
                    architecto inventore nisi. Tempora, rerum consequatur.</p>
            </div>

            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsam similique, molestiae
                    accusantium perspiciatis voluptatem architecto? Sunt, beatae? Voluptas vel libero quos totam atque,
                    architecto inventore nisi. Tempora, rerum consequatur.</p>
            </div>

            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsam similique, molestiae
                    accusantium perspiciatis voluptatem architecto? Sunt, beatae? Voluptas vel libero quos totam atque,
                    architecto inventore nisi. Tempora, rerum consequatur.</p>
            </div>
        </div>
    </section> --}}

    <!------service------>

    <section class="service">
        <br>
        <h1>Nos Services</h1>
        <p class="titre-serv">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="wrapper">
            <div class="content-box">
                <div class="card" onclick="window.location.href = '{{ url('service/gestion-financiere') }}'">
                    <i class="bx bx-bar-chart-alt bx-md"></i>
                    <h2>Finance Comptabilité</h2>
                    <p>Nous assurons une gestion comptable rigoureuse pour renforcer la stabilité de votre entreprise et soutenir sa croissance durable.</p>
                </div>

                <div class="card" onclick="window.location.href = '{{ url('service/marketing-digital') }}'">
                    <i class="bx bx-mail-send bx-md"></i>
                    <h2>Marketing digital</h2>
                    <p>Boostez votre visibilité en ligne avec nos solutions de marketing digital : création de contenu, gestion des réseaux sociaux, infolettre,...</p>
                </div>

                <div class="card" onclick="window.location.href = '{{ url('service/developpement-web') }}'">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Conception site web</h2>
                    <p>Créez une présence en ligne avec nos sites sur mesure, alliant design élégant et fonctionnalité pour une expérience utilisateur fluide et performante.</p>
                </div>

                {{-- <div class="card">
                    <i class="bx bx-mail-send bx-md"></i>
                    <h2>Social Media</h2>
                    <p>Illum, ullam impedit consectetur repellat nihil quos itaque voluptatum deleniti dignissimos</p>
                </div>

                <div class="card">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Website Development</h2>
                    <p>Illum, ullam impedit consectetur repellat nihil quos itaque voluptatum deleniti dignissimos</p>
                </div>

                <div class="card">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Call Center</h2>
                    <p>Illum, ullam impedit consectetur repellat nihil quos itaque voluptatum deleniti dignissimos</p>
                </div> --}}
            </div>
        </div>
    </section>

    <!------timeline------>

    <section class="big-timeline">
        <h1>Pourquoi nos services ?</h1>
        <div class="timeline-box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="timeline">
            {{-- <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Gagnez du temps</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero dolorem laborum, suscipit
                        perferendis nisi nemo cumque maiores ratione! Porro quae pariatur nobis. Architecto, nihil quam.
                        Rem est possimus temporibus aperiam!</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Prix Abordable</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero dolorem laborum, suscipit
                        perferendis nisi nemo cumque maiores ratione! Porro quae pariatur nobis. Architecto, nihil quam.
                        Rem est possimus temporibus aperiam!</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Meilleur Strategie</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero dolorem laborum, suscipit
                        perferendis nisi nemo cumque maiores ratione! Porro quae pariatur nobis. Architecto, nihil quam.
                        Rem est possimus temporibus aperiam!</p>
                </div>
            </div> --}}
            {{-- <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Gain de temps</h2>
                    <p>Nous gérons vos besoins en finances, communication, et intégration web, vous permettant de vous concentrer sur le cœur de votre activité.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Offre sur mesure</h2>
                    <p>Chaque service est adapté à vos spécificités et vos objectifs pour maximiser l'impact sur votre entreprise.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Un service 3-en-1</h2>
                    <p>Une solution complète qui combine la gestion financière, le marketing, et la présence numérique pour un soutien cohérent et efficace.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Renforcer votre présence en ligne et votre visibilité</h2>
                    <p>Grâce à notre expertise, votre entreprise se démarque sur les réseaux sociaux et les plateformes numériques.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Mettre à jour votre image</h2>
                    <p>Nous modernisons et ajustons votre image de marque pour qu'elle reflète vos valeurs et votre positionnement actuel.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Équipe pluridisciplinaire</h2>
                    <p>Nos experts freelance allient compétences variées pour offrir des solutions complètes et innovantes.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Flexibilité et réactivité</h2>
                    <p>En tant qu’équipe freelance, nous nous adaptons rapidement à vos besoins et aux changements du marché.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Accompagnement personnalisé</h2>
                    <p>Nous travaillons en étroite collaboration avec vous pour assurer une communication fluide et des résultats alignés à vos attentes.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Rapport qualité-prix</h2>
                    <p>Profitez de services de haute qualité sans les frais généraux associés aux grandes agences.</p>
                </div>
            </div>
            <div class="checkpoint">
                <div class="checkpoint-col">
                    <h2>Transparence et confiance</h2>
                    <p>Des échanges clairs et un suivi régulier pour que vous soyez toujours informé de l’avancement de vos projets.</p>
                </div>
            </div> --}}
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

    <!------timeline------>

    <!------campus------>
    {{-- <section class="out-campus">
        <section class="campus">
             <h1>Exemple of project We have Done</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="row">
                <div class="campus-col">
                    <img src="{{ asset('assets/image/london.png')}}">
                    <div class="layer">
                        <h3>LONDON</h3>
                        <p><span class="layer-title">LONDON</span> <br> <br> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor
                            sit amet consectetur adipisicing elit
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam minus, dolores pariatur
                            recusandae optio quae ipsum quisquam voluptatem reprehenderit officiis? Minima iste
                            necessitatibus atque praesentium quas similique. Ea, corrupti exercitationem.
                            <br><br> <a href="" class="hero-btn plus-more">Plus de details</a>
                        </p>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="{{ asset('assets/image/newyork.png')}}">
                    <div class="layer">
                        <h3>NEW YORK</h3>
                        <p><span class="layer-title">NEW YORK</span> <br> <br> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor
                            sit amet consectetur adipisicing elit
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam minus, dolores pariatur
                            recusandae optio quae ipsum quisquam voluptatem reprehenderit officiis? Minima iste
                            necessitatibus atque praesentium quas similique. Ea, corrupti exercitationem.
                            <br><br> <a href="" class="hero-btn plus-more">Plus de details</a>
                        </p>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="{{ asset('assets/image/washington.png')}}">
                    <div class="layer">
                        <h3>WASHINGTON</h3>
                        <p><span class="layer-title">WASHINGTON</span> <br> <br> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor
                            sit amet consectetur adipisicing elit
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima iste necessitatibus atque
                            praesentium quas similique. Ea, corrupti exercitationem.
                            <br><br> <a href="" class="hero-btn plus-more">Plus de details</a>
                        </p>
                    </div>
                </div>
            </div>
            <a href="" class="hero-btn">Voir plus</a>
            <br><br><br>
        </section>
    </section> --}}


    <!------slider client------>
    {{-- <section class="client">
        <h1>Les clients qui nous ont fait confiance</h1>
        <div class="slider">
            <div class="slider-items">
                <img src="https://www.zarla.com/images/nike-logo-2400x2400-20220504.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://www.zarla.com/images/apple-logo-2400x2400-20220512-1.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://www.zarla.com/images/disney-logo-2400x2400-20220513-2.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4d/Loon_%28company%29_logo.svg/800px-Loon_%28company%29_logo.svg.png"
                    alt="">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/37/Jumpman_logo.svg/1200px-Jumpman_logo.svg.png"
                    alt="">
                <img src="https://www.svgrepo.com/show/303123/bmw-logo.svg" alt="">
                <img src="https://brandlogos.net/wp-content/uploads/2014/12/starbucks_coffee_company-logo_brandlogos.net_9jqys.png"
                    alt="">
                <img src="https://www.zarla.com/images/nike-logo-2400x2400-20220504.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://www.zarla.com/images/apple-logo-2400x2400-20220512-1.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://www.zarla.com/images/disney-logo-2400x2400-20220513-2.png?crop=1:1,smart&width=150&dpr=2"
                    alt="">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4d/Loon_%28company%29_logo.svg/800px-Loon_%28company%29_logo.svg.png"
                    alt="">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/37/Jumpman_logo.svg/1200px-Jumpman_logo.svg.png"
                    alt="">
                <img src="https://www.svgrepo.com/show/303123/bmw-logo.svg" alt="">
                <img src="https://brandlogos.net/wp-content/uploads/2014/12/starbucks_coffee_company-logo_brandlogos.net_9jqys.png"
                    alt="">
            </div>
        </div>
    </section> --}}

    <section class="cta">
        <h1>Contactez-nous pour en savoir plus sur <br> Evolutic</h1>
        <a href="/contact" class="hero-btn">Nous Contacter</a>
    </section>


    @include('Details.footer')

</body>

</html>
