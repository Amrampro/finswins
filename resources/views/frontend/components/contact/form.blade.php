<section class="contact-main volunteer">
    <div class="container">
        <div class="row gutter-40">
            <div class="col-12 col-xl-6">
                <div class="contact__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i> Votre Voix, Notre Force Commune</span>
                        <h2 class="title-animation">Contactez nous</h2>
                        <p>Notre équipe est à votre écoute pour toute demande de collaboration, de soutien ou
                            d'information complémentaire.
                        </p>
                    </div>
                    <div class="contact-main__inner cta">
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h6>Location</h6>
                                <p><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank">
                                        55 Main street, 2nd block,
                                        Melbourne, Australia
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h6>Tel</h6>
                                <p><a href="tel:+32485150430">+32 (0) 485 15 04 30 </a></p>
                                <p><a href="tel:+3210881053">+32 (0) 10 88 10 53</a></p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6>Email</h6>
                                <p><a href="mailto:info@fins-wins.org">info@fins-wins.org</a></p>
                                {{-- <p><a href="mailto:support@example.com">charifund@email.com</a></p> --}}
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="content">
                                <h6>Social</h6>
                                <div class="social">
                                    <a href="https://www.facebook.com/pages/FINS-WINS/211692755519680" target="_blank"
                                        aria-label="Suivre sur facebook" title="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UChvndfEO7pG5PhaH-oKO_Og" target="_blank"
                                        aria-label="Suivre sur youtube" title="youtube">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    {{-- <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                       title="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       aria-label="share us on linkedin"
                                       title="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-main__thumb cta">
                        {{-- <img src="assets/images/contact-thumb.png" alt="Image"> --}}
                        <img src="{{ asset('assets/images/banner/banner-one-bg.png') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <div class="volunteer__form-content">
                        <h4 class="title-animation">Envoyez-nous un message</h4>
                        <p>Nous sommes à votre écoute. Les champs marqués d’un * sont obligatoires.
                            Nous vous répondrons dans les meilleurs délais.</p>
                    </div>
                    <form action="#" method="post" class="cta">
                        <div class="input-single">
                            <input type="text" name="full-name" id="fullName" placeholder="Nom complet" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-single">
                            <input type="email" name="c-email" id="cEmail" placeholder="Adresse email" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-single">
                            <input type="text" name="phone-number" id="phoneNumber"
                                placeholder="Numéro de téléphone (facultatif)">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input-single alter-input">
                            <textarea name="contact-message" id="contactMessage" placeholder="Votre message..."></textarea>
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="form-cta">
                            <button type="submit" aria-label="submit message" title="submit message"
                                class="btn--primary">Envoyer la demande <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
