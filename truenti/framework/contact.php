<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main>
<!-- Contact Section-->
<section class="contact" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-uppercase  mb-0 text-align: left">Acerca de nosotros</h2>
            <p>
¡Bienvenido a Truenti!

Nuestro objetivo es ofrecer a nuestros clientes las últimas novedades de deporte y productos relacionados. Contamos con gran experiencia, por lo que sabemos exactamente qué necesitas al ofrecerte productos de alta calidad y a precios accesibles. Ofrecemos todo esto mientras brindamos un excelente servicio al cliente y un trato amable.

Siempre vigilamos las mejores tendencias de productos para el gimnasio y ponemos en primer lugar los deseos de nuestros clientes. Es por eso que tenemos clientes satisfechos en todo el mundo y estamos encantados de ser parte de la industria del fitness.

Los intereses de nuestros clientes son siempre la máxima prioridad para nosotros, por lo que esperamos que disfrutes de nuestros productos tanto como nosotros disfrutamos poniéndolos a tu disposición.
</p>
           
            <br>
            <h2 class="page-section-heading text-uppercase  mb-0 text-align: left">Servicio de soporte y atención al cliente</h2>
            <p>Truenti se compromete a asegurarse de que tenga toda la información que necesita, por lo que le proporcionamos un soporte técnico rapido y eficaz, a continuación,  para responder cualquier pregunta que pueda tener.

Como siempre, si tiene otras dudas relacionadas con algún producto o servicio, comuníquese con nuestro equipo de servicio al cliente, que estará encantado de ayudarle.</p>

            <br>
            <h2 class="page-section-heading text-uppercase  mb-0 text-align: left">Formulario de contacto</h2>
            <br>
            <!-- Contact Section Form-->
            <div class="row justify-content-left">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Nombre Completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es necesario</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un email es necesario</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">EL email no es valido</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="644567465"
                                data-sb-validations="required" />
                            <label for="phone">Nº Teléfono</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un número de teléfono es necesario
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Mensaje</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Un mensaje es necesario
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button type="button" class="btn btn-primary"> Enviar</button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php");?>

</body>
</html>