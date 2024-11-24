<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>A propos</title>
</head>

<body>

    @include('Details.header')


    <section class="about-us">
        <h1 class="fade-in">EVOLU-TIC</h1>
        <p>
            <span class="slide-in">Il y a quelques années, plongés dans le monde de l’entreprise, nous avons observé une vérité simple mais puissante : la performance durable de demain ne dépendra plus seulement de l'excellence dans un domaine unique. Nous avons compris qu'une réussite véritable et pérenne nécessite la symbiose parfaite de trois piliers essentiels : <strong>les finances</strong>, <strong>le marketing</strong>, et <strong>l’intégration du web</strong>.</span>
            <span class="slide-in">C'est cette observation qui a donné naissance à <strong>Evolutic</strong>. Notre vision était claire : construire un pont entre ces trois pôles et offrir aux entreprises une solution complète et intégrée. Nous ne voulions pas simplement ajouter des services, mais redéfinir l'approche même de la gestion de projet et de la croissance d’entreprise. Nous avons voulu faire d'Evolutic un levier qui propulse nos partenaires vers une reconnaissance sur les réseaux et une solidité dans le monde réel.</span>
            <span class="slide-in">À travers <strong>Evolutic</strong>, nous accompagnons nos clients dans la structuration de leurs processus, la transformation de leur image, et la maîtrise de leurs finances. Notre but est simple : faire de votre projet ou société une référence dans votre domaine, grâce à une approche holistique où chaque aspect de votre activité est soutenu par les deux autres.</span>
            <span class="slide-in">Dans un monde où la compétitivité ne se limite plus à un seul terrain, Evolutic se positionne comme votre allié stratégique pour une performance globale et durable.</span>
        </p>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const aboutUsSection = document.querySelector(".about-us");

            const revealOnScroll = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("reveal");
                        observer.unobserve(entry.target);
                    }
                });
            };

            const observer = new IntersectionObserver(revealOnScroll, {
                threshold: 0.5
            });

            observer.observe(aboutUsSection);
        });

    </script>

    @include('Details.footer')
</body>
</html>