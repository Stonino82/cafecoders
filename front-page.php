<?php get_header(); ?>

<section class="home" id="section__home">

    <article class="home__content">
        <h3>Hello everybody, we are</h3>
        <h1>cafe:{coders}</h1>
        <hr>
        <p>We are here to help you with your website!<br> Have a look to our project</p>
    </article>

</section> <!-- /home section -->

<section class="about" id="section__about">

    <article class="about__content">
        <h3>About us</h3>
        <hr>
        <p>We are two web developers, who have worked for many years as a front-end developers, seo engineers and web designers. We came from Italy and Slovakia and now we live in Barcelona.</p>
        <p>We have been working on hundreds of projects for many different clients from many different countries in Europe. We decided to connect our skills to provide a complex solutions in the web development.</p>
        <p>We realized that by time we both collected a lot of various knowhow and contacts. By sharing them we can create our joint projects. We can even help each other with our work, and above all we can improve our knowledge and reach a better progress and enjoy our work even more.</p>
        <p>If you like our project and would like to use our help with your own website or project, you are definitely welcomed to contact us here: </p>
        <a class="fa fa-arrow-down about__link" href="#section__contact"></a>
    </article>

    <div class="about__image"></div>

</section> <!-- /about section -->

<section class="services" id="section__services">

    <article class="services__content">
        <h3>Services</h3>
        <hr>
        <p>We can offer you a partial works on your web project, as design or HTML codes. We can also prepare the whole website.</p>
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
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nascetur, venenatis dui suspendisse vestibulum erat lectus dis netus, aliquet donec class imperdiet justo eu at. Sociosqu quam convallis in lectus netus congue litora rhoncus posuere, porta vehicula nisl hendrerit ridiculus sagittis suspendisse orci. Euismod hac congue auctor nostra donec nulla integer aliquam, rutrum volutpat ultricies pellentesque cum cursus nisl ut, malesuada luctus maecenas sociosqu est diam faucibus.</p> -->
    </article>

    <div class="team__block">

        <a class="team__item" href="#modal-team--1">
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--1.jpg" alt=""></div>
            <h5>Antonino Lattene</h5>
            <h4>Web designer</h4>
        </a>

        <a class="team__item team__item--bg-2" href="#modal-team--2">
            <div>
                <h5>Barbora Majernikova</h5>
                <h4>Front end developer</h4>
            </div>
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--2.jpg" alt=""></div>
        </a>

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
                <h5>Antonino Lattene</h5>
                <h4>UX/UI - Web designer</h4>
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
            <div class="team__slider js-team__slider">
                <div class="team__testimonial">We have been working with Ms Majernikova for more than two years with a great satisfaction.  We've implemented more than 20 projects together and she did all of them very professionally and always to full satisfaction. We appreciate her flexibility, reliability, speed and quality work.  Negotiation is always without any problem and the price is adequate. I'm pleased to recommend Ms. Majerikova.
                    <div class="team__testimonial-client">Ing. J. Šmigura, CEO, SnugDesign s.r.o.</div>
                </div>
                <div class="team__testimonial">"We have been cooperating with Bára for several years. Thanks to the codes, she has provided us with, we were able to finish plenty of interesting projects. What we appreciate the most is her professional attitude to work and her reliability at any time." 
                    <div class="team__testimonial-client">Team CorporatePRO</div>
                </div>
                <div class="team__testimonial">"We have cooperated with Barbora Majernikova on several projects and there has been always a great satisfaction with her work. Unlike some other front end developers we work with, there is no need to modify the code and fix it in the responsive resolutin. It is always a precisely processed output without any problems and, moreover, always delivered on time." 
                    <div class="team__testimonial-client">Inizio.cz</div>
                </div>
            </div>
        
    </div>

</section> <!-- /team section -->

<section class="references" id="section__references">

    <article class="references__content">
        <h3>Some Works</h3>
        <hr>
        <!-- <p>Take a look to our projects, these are just a few, we have participated on many more.<br /> And of course others are already in proces...<br /> If you get stocked with your project, or if you need a coworkers to give you a hand with a website, contact us, let's have a coffe and speak about it.</p> -->
    </article>


    <div class="references__item">
        <div class="references__text">
            <h4>2016 - now - front end - statusoid</h4>
            <p> Monitor, manage & maintain your website with ease. Clever website monitoring which will help you fix the issues, automatically pause running Online PPC ads and notify your social networks. </p>
            <a class="references__button" href="https://www.statusoid.com/" target="_blank">WEB SITE</a>
        </div>
        <img class="references__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--statusoid.jpg" alt="">
    </div>

    <!-- web doesn't work for now
    <div class="references__item">
        <div class="references__text">
            <h4>2018 - front end - Manopella</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
            <a class="references__button" href="https://www.manopella.com/" target="_blank">WEB SITE</a>
        </div>
        <img class="references__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--manopella.jpg" alt="">
    </div>
    -->

    <div class="references__item">
        <div class="references__text">
            <h4>2019 - front end - Karpis</h4>
            <p>High quality wooden furniture manufacturers. The website promotes the whole scale of designs of the furniture, mostly tables.</p>
            <a class="references__button" href="http://karpis.sk/en-index.html" target="_blank">WEB SITE</a>
        </div>
        <img class="references__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--karpis.jpg" alt="">
    </div>

    <div class="references__item">
        <div class="references__text">
            <h4>2019 - front end - SnugDesign</h4>
            <p>Real estate website in Czech Republic. Purchase, sale and financing of real estate.</p>
            <a class="references__button" href="http://vk-reality-sablony.snugdev.cz/" target="_blank">WEB SITE</a>
        </div>
        <img class="references__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--real.jpg" alt="">
    </div>

    <div class="references__item">
        <div class="references__text">
            <h4>2019 - front end - SnugDesign</h4>
            <p>Wealth management - Application designed for clients who want to keep track of their financial and personal assets.</p>
            <a class="references__button" href="http://roc-wm-sablony.snugdev.cz/" target="_blank">WEB SITE</a>
        </div>
        <img class="references__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/references__image--wealth.jpg" alt="">
    </div>


    

</section> <!-- /reference -->
<!--
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
                <h4 class="blog__item-name">Web design</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

        <a class="blog__item" href="">
            <div class="blog__item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/blog__image--2.jpg" alt="">
                <h4 class="blog__item-name">Web design</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

        <a class="blog__item" href="">
            <div class="blog__item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/blog__image--3.jpg" alt="">
                <h4 class="blog__item-name">Web design</h4>
            </div>
            <div class="blog__item-text">
                <h3 class="blog__item-heading">Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisl pharetra, tempor risus nec, aliquam dui, consectetur adipiscing elit.</p>
            </div>
        </a>

    </div>

</section>--> <!-- /blog  -->

<section class="contact" id="section__contact">

    <div class="contact__content">
        <h2>let’s have a coffee</h2>
        <hr>
        <p>If you like our project and would like to use our help with your own website or project, leave our contact and message here, we will write you ASAP back on your email or Whatsapp and we can have a coffee soon! </p>
        <p>And of course, feel free to speak English, Spanish, Italian or Slovak :-). </p>

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