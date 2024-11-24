<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>Service - {{$index}}</title>
</head>

<body>

    @include('Details.header')

    <!------About------>

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                @if (request()->is('service/gestion-financiere'))
                    <img src="{{ asset('assets/image/compta.jpeg') }}" alt="">
                    <h2>Gestion Financière</h2>
                    <p>Nous croyons que la gestion financière n’est pas seulement une question de chiffres ; c’est le moteur qui propulse l’entreprise vers la stabilité et la croissance durable. C’est pourquoi nous avons développé une offre complète et intégrée pour accompagner nos clients dans tous les aspects de la gestion financière.</p>
                    <br>
                    <p><strong>Services Financiers</strong></p>
                    <p>Pour soutenir la croissance de votre entreprise, notre équipe d'experts vous offre des solutions comptables et financières adaptées, vous permettant ainsi de vous concentrer sur votre cœur de métier.</p>
                    <br>
                    <p>
                        <ul>
                            <li>Mise à jour de la comptabilité :
                                <ul>
                                    <li>Tenue des livres comptables à jour.</li>
                                    <li>Suivi des transactions et gestion des écritures comptables.</li>
                                    <li>Préparation de rapports réguliers pour une vision financière précise.</li>
                                </ul>
                            </li>
                            <li>Établissement du bilan :
                                <ul>
                                    <li>Analyse et préparation des bilans annuels et trimestriels.</li>
                                    <li>Présentation claire des actifs, passifs et capitaux propres.</li>
                                    <li>Accompagnement dans l’interprétation des bilans pour une prise de décision éclairée.</li>
                                </ul>
                            </li>
                            <li>Rapproche bancaire :
                                <ul>
                                    <li>Vérification et harmonisation des relevés bancaires avec la comptabilité interne.</li>
                                    <li>Identification et résolution des écarts pour assurer l’exactitude des comptes.</li>
                                </ul>
                            </li>
                            <li>Élaboration de budget :
                                <ul>
                                    <li>Création de budgets personnalisés selon les besoins de l'entreprise.</li>
                                    <li>Suivi des écarts entre les prévisions et les résultats réels.</li>
                                    <li>Recommandations pour optimiser les dépenses et améliorer la rentabilité.</li>
                                </ul>
                            </li>
                            <li>Création de business plan :
                                <ul>
                                    <li>Rédaction complète de plans d'affaires professionnels</li>
                                    <li>Analyse de marché et prévisions financières incluses.</li>
                                    <li>Structuration des plans pour attirer des investisseurs ou des partenaires financiers.</li>
                                </ul>
                            </li>
                            <li>Gestion de la paie :
                                <ul>
                                    <li>Préparation et distribution des fiches de paie.</li>
                                    <li>Gestion des cotisations sociales et conformité légale.</li>
                                    <li>Support dans la mise à jour des données salariales et gestion des déclarations.</li>
                                </ul>
                            </li>
                            <li>Analyse financière et conseil :
                                <ul>
                                    <li>Évaluation des performances financières.</li>
                                    <li>Conseils stratégiques pour la gestion de trésorerie et les investissements.</li>
                                    <li>Outils de reporting pour une gestion proactive.</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                @elseif (request()->is('service/marketing-digital'))
                    <img src="{{ asset('assets/image/market.jpeg') }}" alt="">
                    <h2>Marketing Digital</h2>
                    <p>Dans une approche holistique du marketing digital, Evolutic aide les entreprises à construire une présence en ligne forte, dynamique et authentique afin de se démarquer. C’est pourquoi nous avons développé une expertise pointue en marketing digital, permettant aux entreprises de raconter leur histoire de manière captivante et engageante.</p>
                    <br>
                    <p><strong>Services de Marketing Digital</strong></p>
                    <p>Grâce à notre social media manager et les community managers, vous bénéficierez d’une approche intégrée et stratégique qui booste votre visibilité et améliore votre image de marque en vue d’attirer des clients potentiels.</p>
                    <br>
                    <p>
                        <ul>
                            <li>Gestion des réseaux sociaux :
                                <ul>
                                    <li>Élaboration de stratégies digitales personnalisées et adaptées à votre audience, votre marché, vos objectifs</li>
                                    <li>Planification et publication régulière de posts engageants</li>
                                    <li>Surveillance des tendances et actualités pertinentes pour votre secteur</li>
                                </ul>
                            </li>
                            <li>Community management :
                                <ul>
                                    <li>Interaction proactive avec votre communauté en ligne</li>
                                    <li>Gestion des commentaires, messages et mentions pour renforcer l'engagement</li>
                                    <li>Organisation d'événements et de concours pour dynamiser la communauté</li>
                                </ul>
                            </li>
                            <li>Création de contenu :
                                <ul>
                                    <li>Rédaction d'articles de blog, newsletters et autres contenus écrits</li>
                                    <li>Production de visuels attractifs et de vidéos captivantes</li>
                                    <li>Développement de contenu interactif, comme des sondages et des quiz</li>
                                </ul>
                            </li>
                            <li>Publicité sur les réseaux sociaux (Meta Ads) :
                                <ul>
                                    <li>Conception et gestion de campagnes publicitaires ciblées</li>
                                    <li>Analyse des performances des annonces et optimisation continue</li>
                                    <li>Segmentation de l’audience pour maximiser le retour sur investissement</li>
                                </ul>
                            </li>
                            <li>Analyse et reporting :
                                <ul>
                                    <li>Suivi des métriques de performance sur les réseaux sociaux</li>
                                    <li>Rapports réguliers sur l'engagement, la portée et la croissance de l'audience</li>
                                    <li>Recommandations stratégiques basées sur les données collectées</li>
                                </ul>
                            </li>
                            <li>Formation et accompagnement :
                                <ul>
                                    <li>Accompagnement personnalisé pour renforcer votre autonomie en gestion des réseaux sociaux</li>
                                    <li>Création de guides et de ressources pour votre équipe</li>
                                </ul>
                            </li>
                            <li>Graphisme :
                                <ul>
                                    <li>Création de visuels (logo, affiche, post,...)</li>
                                    <li>Montage vidéo (Short, etc)</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                @elseif (request()->is('service/developpement-web'))
                    <img src="{{ asset('assets/image/web.jpg') }}" alt="">
                    <h2>Développement web</h2>
                    <p>Nous croyons fermement que votre site web est la pierre angulaire de votre présence en ligne. C’est pourquoi nous mettons notre expertise en développement web au service de votre succès, en créant des solutions digitales sur mesure qui reflètent votre vision et répondent aux besoins de vos utilisateurs.</p>
                    <br>
                    <p><strong>Services de Développement Web</strong></p>
                    <p>En optant pour notre expertise en conception de sites web, vous bénéficiez d'une solution complète et personnalisée qui propulse votre présence en ligne.</p>
                    <br>
                    <p>
                        <ul>
                            <li>Création de sites web sur mesure :
                                <ul>
                                    <li>Développement de sites vitrines et de plateformes e-commerce adaptés à votre identité</li>
                                    <li>Solutions personnalisées pour refléter la vision de votre marque</li>
                                </ul>
                            </li>
                            <li>Optimisation de l’expérience utilisateur (UX) :
                                <ul>
                                    <li>Conception d’interfaces fluides et intuitives</li>
                                    <li>Recherche et tests pour garantir une navigation agréable</li>
                                </ul>
                            </li>
                            <li>Développement responsive :
                                <ul>
                                    <li>Sites adaptés à tous les appareils (smartphones, tablettes, ordinateurs)</li>
                                    <li>Expérience utilisateur optimale sur chaque écran</li>
                                </ul>
                            </li>
                            <li>Intégration de fonctionnalités avancées :
                                <ul>
                                    <li>Ajout de systèmes de réservation, formulaires personnalisés et solutions de paiement</li>
                                    <li>Amélioration de la convivialité et de l’efficacité du site</li>
                                </ul>
                            </li>
                            <li>Gestion de boutique sur Shopify :
                                <ul>
                                    <li>Création et gestion de votre boutique en ligne sur la plateforme Shopify</li>
                                    <li>Configuration de l’inventaire, des paiements et des options de livraison pour maximiser vos ventes</li>
                                </ul>
                            </li>
                            <li>Création d'outils numériques sur mesure :
                                <ul>
                                    <li>Développement de mini CRM pour le suivi de vos finances, ventes et actions marketing</li>
                                    <li>Solutions adaptées pour améliorer la gestion de vos opérations et optimiser votre efficacité</li>
                                </ul>
                            </li>
                            <li>Maintenance et support technique :
                                <ul>
                                    <li>Service de maintenance régulière pour assurer la sécurité et la rapidité de votre site</li>
                                    <li>Assistance rapide en cas de problème technique</li>
                                </ul>
                            </li>
                            <li>SEO et optimisation de la visibilité :
                                <ul>
                                    <li>Intégration des meilleures pratiques de référencement pour améliorer votre positionnement</li>
                                    <li>Augmentation du trafic organique pour attirer plus de visiteurs</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                @endif
            
            </div>

            <div class="comment-form-right">
                <div class="comment-box">
                    <h3>Laisser un commentaire</h3>
                    <form class="comment-form">
                        <input type="text" placeholder="Nom">
                        <input type="text" placeholder="Email">
                        <textarea rows="5" placeholder="Votre commentaire"></textarea>
                        <button type="submit" class="hero-btn red-btn">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('Details.footer')
</body>
</html>