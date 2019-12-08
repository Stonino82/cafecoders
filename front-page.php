<?php get_header(); ?>

<section class="home" id="section__home">

    <article class="home__content">
        <h3>Hello folks, we are</h3>
        <h1>cafe:{coders}</h1>
        <hr>
        <p>We create stunning digital experiences<br> that will help your business stand out.</p>
    </article>

</section> <!-- /home section -->

<section class="about" id="section__about">

    <article class="about__content">
        <h3>About us</h3>
        <hr>
        <p>We are a team of freelancers, living in Barcelona, who have worked for many years in the web development, as a front-end developers, seo engineers and web designers in hundreds of projects for many different clients. We decided to connect our skills to provide more complex solution in the web development.</p>
    </article>

    <div class="about__image"></div>

</section> <!-- /about section -->

<section class="services" id="section__services">

    <article class="services__content">
        <h3>Services</h3>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui. Cras mollis hendrerit risus, cursus efficitur sem luctus eget.</p>
    </article>

    <div class="services__block">
        <a class="services__item" href="">
            <h4 class="services__name">UX/UI<br> Web design</h4>
            <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/services__image--1.png" alt="">
        </a>

        <a class="services__item" href="">
            <h4 class="services__name">Front end<br> development</h4>
            <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/services__image--2.png" alt="">
        </a>

        <a class="services__item" href="">
            <h4 class="services__name">Full Project</h4>
            <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/services__image--3.png" alt="">
        </a>
    </div>

</section> <!-- /services section -->

<section class="team" id="section__team">

    <article class="team__content">
        <h3>Team</h3>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nascetur, venenatis dui suspendisse vestibulum erat lectus dis netus, aliquet donec class imperdiet justo eu at. Sociosqu quam convallis in lectus netus congue litora rhoncus posuere, porta vehicula nisl hendrerit ridiculus sagittis suspendisse orci. Euismod hac congue auctor nostra donec nulla integer aliquam, rutrum volutpat ultricies pellentesque cum cursus nisl ut, malesuada luctus maecenas sociosqu est diam faucibus.</p>
    </article>

    <div class="team__block">

        <a class="team__item" href="#modal-team--1">
            <div>
                <h5>Antonino Lattene</h5>
                <h4>Web designer</h4>
            </div>
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--1.jpg" alt=""></div>
        </a>

        <a class="team__item team__item--bg-2" href="#modal-team--2">
            <div>
                <h5>Barbora Majernikova</h5>
                <h4>Front end developer</h4>
            </div>
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--2.jpg" alt=""></div>
        </a>

        <div class="team__item team__item--bg-3">
            <div>
                <h5>John Doe</h5>
                <h4>Web designer</h4>
            </div>
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--3.jpg" alt=""></div>
        </div>

        <a class="team__item team__item--joinus team__item--bg-4" href="#section__contact">
            <div>
                <h4 class="team__title">Join us</h4>
                <h4 class="team__title team__title--hover">This could be you</h4>
            </div>
            <div class="team__item-image"></div>
        </a>

    </div>

    <div class="remodal team__remodal" data-remodal-id="modal-team--1">
        <button data-remodal-action="close" class="remodal-close"></button>

        <div class="team__remodal-primary">
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--1.jpg" alt=""></div>
            <div>
                <h3>UX/UI - Web designer</h3>
                <h2>Joe Doe</h2>
                <hr>
                <p>
                    <a class="team__link" href=""><i class="fab fa-linkedin fa-lg"></i></a>
                    <a class="team__link" href=""><i class="fab fa-twitter-square fa-lg"></i></a>
                    <a class="team__link" href=""><i class="fab fa-facebook-square fa-lg"></i></a>
                    <a class="team__link" href=""><i class="fab fa-instagram fa-lg"></i></a>
                </p>
                <p>
                    <a class="team__link" href=""><i class="fab fa-github-square fa-lg"></i>see on Github</a><br>
                    <a class="team__link" href=""><i class="fas fa-external-link-alt fa-lg"></i> visit the page</a>
                </p>
            </div>
        </div>
        <div class="team__remodal-secondary">
            <div class="team__remodal-header">“Nothing better than a cappuccino to start coding!”</div>
            <p>No sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.  </p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
        </div>

    </div>

    <div class="remodal team__remodal" data-remodal-id="modal-team--2">
        <button data-remodal-action="close" class="remodal-close"></button>

        <div class="team__remodal-primary">
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--2.jpg" alt=""></div>
            <div>
                <h3>Front end developer</h3>
                <h2>Barbora Majernikova</h2>
                <hr>
            </div>
        </div>
        <div class="team__remodal-secondary">
            <div class="team__remodal-header">“it's only rock'n'roll but I like it”</div>
            <p>I became self employed in 2009 right after my university studies. Despite having studied marketing communication, I work as a HTML/CSS front-end developer. I very much adore the freedom to travel my job gives me, while at the same time earning a living. I am from Bratislava, Slovakia and currently living in Barcelona.</p>
            <p><b>"We have been cooperating with Bára for several years. Thanks to the codes, she has provided us with, we were able to finish plenty of interesting projects. What we appreciate the most is her professional attitude to work and her reliability at any time."</b> - Team CorporatePRO</p>
            <p><b>"We have cooperated with Barbora Majernikova on several projects and there has been always a great satisfaction with her work. Unlike some other front end developers we work with, there is no need to modify the code and fix it in the responsive resolutin. It is always a precisely processed output without any problems and, moreover, always delivered on time."</b> - Inizio.cz</p>
        
    </div>

</section> <!-- /team section -->

<section class="references" id="section__references">

    <div class="references__block">
        <a class="references__item" href="https://www.statusoid.com/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--statusdroid.jpg" alt="Statusdroid">
            <div class="references__name">Statusdroid<br>Front end</div>
        </a>
        <a class="references__item references__item--landscape" href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--2.jpg" alt="">
            <div class="references__name">Project name</div>
        </a>
        <a class="references__item references__item--portrait" href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--3.jpg" alt="">
            <div class="references__name">Project name</div>
        </a>
        <a class="references__item" href="http://karpis.sk/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--karpis.jpg" alt="Karpis">
            <div class="references__name">Karpis<br>Front end</div>
        </a>
        <a class="references__item" href="https://www.manopella.com/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--manopella.jpg" alt="Manopella">
            <div class="references__name">Manopella<br>Front end</div>
        </a>
        <a class="references__item" href="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--4.jpg" alt="">
            <div class="references__name">Project name</div>
        </a>
        <a class="references__item references__item--more" href="">
            
        </a>
    </div>

    <!-- ex modal for first reference - to be erased -->

    <!-- <div class="remodal references__remodal" data-remodal-id="modal-references--1">
        <button data-remodal-action="close" class="remodal-close"></button>

        <div class="references__grid">
            <img class="references__grid-item references__grid-item--landscape" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__statusdroid--1.jpg" alt="statusdroid">
            <img class="references__grid-item" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__statusdroid--2.jpg" alt="statusdroid">
            <img class="references__grid-item" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__statusdroid--3.jpg" alt="statusdroid">
        </div>
        <div class="references__remodal-text">
            <h3>Front end</h3>
            <h2>Statusdroid</h2>
            <hr>
            <h6>I am the front end developer of this project</h6>
            <p>Statusoid offers a free trial of website monitoring. It’s completely free. It possible to choose a subscription plan at any point during the trial and pay by credit card.</p>
            <p>When your website goes down, statusdroid helps you fix the issues, pause PPC ads and notify your social networks. Statusoid is your website’s new best friend forever!</p>
            <p>Everything in one place. Choose which part of the world you want your website to be monitored and discover issues in the blink of an eye.</p>
            <p>It contains integrated public status pages which keep your customers up to date automatically during downtime. Customer satisfaction is a key, so it’s the best to manage their expectations</p>

            <p>
                <a class="references__link" href="https://www.facebook.com/pg/statusoid/about/?ref=page_internal"><i class="fab fa-facebook-square fa-lg"></i>see on Facebook</a><br>
                <a class="references__link" href="https://www.statusoid.com/"><i class="fas fa-external-link-alt fa-lg"></i> visit the page</a>
            </p>
        </div>

    </div> -->

    <article class="references__content">
        <h3>Some Works</h3>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui. Cras mollis hendrerit risus, cursus efficitur sem luctus eget.</p>
    </article>

</section> <!-- /team references -->

<section class="blog" id="section__blog">

    <article class="blog__content">
        <h3>Blog</h3>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nascetur, venenatis dui suspendisse vestibulum erat lectus dis netus, aliquet donec class imperdiet justo eu at. Sociosqu quam convallis in lectus netus congue litora rhoncus posuere, porta vehicula nisl hendrerit ridiculus sagittis suspendisse orci. Euismod hac congue auctor nostra donec nulla integer aliquam, rutrum volutpat ultricies pellentesque cum cursus nisl ut, malesuada luctus maecenas sociosqu est diam faucibus.</p>
    </article>

    <div class="blog__block">

        <a class="blog__item" href="">
            <div class="blog__item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/blog__image--1.jpg" alt="">
                <h4 class="blog__item-name">Web designer</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

        <a class="blog__item" href="">
            <div class="blog__item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/blog__image--2.jpg" alt="">
                <h4 class="blog__item-name">Web designer</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

        <a class="blog__item" href="">
            <div class="blog__item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/blog__image--3.jpg" alt="">
                <h4 class="blog__item-name">Web designer</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

    </div>

</section> <!-- /blog references -->

<section class="contact" id="section__contact">

    <div class="contact__content">
        <h3>Get in touch</h3>
        <h2>let’s have a coffee</h2>
        <hr>

        <!-- <form class="contact__form">
            <input placeholder="Name*">
            
            <div class="contact__form-row">
                <input placeholder="Email*" type="email">
                <input placeholder="Phone*">
            </div>
                
            <textarea placeholder="Message*" rows="1"></textarea>

            <input type="submit" value="Contact us">
        </form> -->

        <?php echo do_shortcode('[contact-form-7 id="68" title="Contact form" html_class="contact__form"]'); ?> <!-- Contact Form 7 Wordpress Plugin -->

    </div>

</section> <!-- /contact section -->

<?php get_footer(); ?>