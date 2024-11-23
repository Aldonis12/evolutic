<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>Service</title>
</head>

<body>

    @include('Details.header')

    <!------contact Us------>

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
        <br><br><br>
    </section>

    @include('Details.footer')
</body>

</html>
