<!DOCTYPE html>
<html lang="en">

<head>
    @include('Details.metaHeader')
    <title>Contact</title>
</head>

<body>

    @include('Details.header')

    <!------contact Us------>
    <section class="service">
        <br>
        <h1>Contactez-nous</h1>
        <p class="titre-serv">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120799.69938950808!2d47.43011300205804!3d-18.887497926440602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07de34f1f4eb3%3A0xdf110608bcc082f9!2sTananarive!5e0!3m2!1sfr!2smg!4v1716367668381!5m2!1sfr!2smg"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYU Antananarivo</h5>
                        <p>Antananarivo, Madagascar 101</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>82753819731</h5>
                        <p>YAYAYAYAYA</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>mick@gmail.com</h5>
                        <p>Email Us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="#">
                    <input type="text" name="" id="" placeholder="Votre nom" required>
                    <input type="email" name="" id="" placeholder="Votre email">
                    <input type="text" name="" id="" placeholder="Sujet">
                    <textarea name="" id="" cols="30" rows="8" required placeholder="message"></textarea>
                    <button class="hero-btn red-btn">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>


    @include('Details.footer')
</body>

</html>
