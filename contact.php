<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!--Main Navigation-->

<!--Main Layout-->
<div class="container px-5 contentContact">
    <!--Section: Contact v.2-->
    <section class="mb-5 px-5">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4 text-dark">Contáctenos</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5 text-dark">¿Tiene usted alguna pregunta? Por favor no dude en contactarnos directamente. Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="text-dark">Tu nombre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="text-dark">Tu correo electrónico</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="text-dark">Asunto</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message" class="text-dark">Tu mensaje</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li class="text-dark"><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li class="text-dark"><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li class="text-dark"><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
</div>

<!-- map -->
<div class="my-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15135.8310376155!2d-69.8240024!3d18.48557245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf87ab979bc25b%3A0xa663905b779e0932!2sComercial+Ganadera+S.A.!5e0!3m2!1ses-419!2sdo!4v1560631424113!5m2!1ses-419!2sdo" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!--Main Layout-->
<!-- Start your project here-->

<!-- HEADER -->
<?php include("includes/footer.php"); ?>