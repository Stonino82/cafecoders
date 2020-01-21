<?php get_header(); ?>

<section class="home" id="section__home">

    <article class="home__content">
        <h2>cafe:{coders}</h2>
        <hr>
        <h1>web development agency<br> based in Barcelona</h1>
    </article>

</section> <!-- /home section -->

<section class="about" id="section__about">

    <article class="about__content">
        <!-- <h3>About us</h3>
        <hr> -->
        <h4>Web developers,<br>addicted to coffee.<br>We are cafecoders!</h4>
        <p>Our passion for the world of web development is second only to our addiction to coffee, in fact ... we don't start a project without having had a good coffee (and some others in the meantime).</p>
        <p>In our team there are those who prefer a good espresso italian coffee , others long American-style, others add milk, and others drink it without sugar.</p>
        <p>In the same way, each one of us is preferably dedicated to a particular aspect of development, flirting with close topics: we have an experience and user interface designer, a Front-End developer, a development specialist focused on SEO, etc.</p>
        <h4>Everything we do, we do it with passion!<br>(and a good coffee by our side!)</h4>
        <p>We have worked on hundreds of projects for different clients from different countries in Europe, this translates into hundreds and hundreds of coffee, and a good background of experience.</p>
        <p>Take a look at some of our services and some of the projects we have worked on, maybe we can help you out.</p>
        <p>If you want to develop a web project, or improve your application, you know: turn on your coffee machine, and fill out the form below, we will be there before it gets cold!</p>
        <!-- <a class="fa fa-arrow-down about__link" href="#section__contact"></a> -->
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
        <a class="services__item" href="#section__contact">
            <h4 class="services__name">UX/UI<br> Web design</h4>
            <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/services__image--1.png" alt="">
        </a>

        <a class="services__item" href="#section__contact">
            <h4 class="services__name">Front end<br> development</h4>
            <img class="services__image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/services__image--2.png" alt="">
        </a>

        <a class="services__item" href="#section__contact">
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
            <div class="team__item--caption">
                <h5>Antonino Lattene</h5>
                <h4>Web designer</h4>
            </div>
        </a>

        <a class="team__item team__item--bg-2" href="#modal-team--2">
            <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--2.jpg" alt=""></div>
            <div class="team__item--caption">
                <h5>Barbora Majernikova</h5>
                <h4>Front end developer</h4>
            </div>
        </a>

        <a class="team__item team__item--joinus team__item--bg-4" href="#section__contact">
            <div class="team__item-image"></div>
            <div class="team__item--caption">
                <h5>This could be you</h5>
                <h4>Join our team</h4>
            </div>
        </a>

    </div>

    <div id="modal-team--1" class="team__remodal-dialog">
        <div class="team__remodal">
            <a href="#close" title="Close" class="team__remodal-close"></a>

            <div class="team__remodal-primary">
                <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--1.jpg" alt=""></div>
                <div>
                    <h5>Antonino Lattene</h5>
                    <h4>UX/UI - Web designer</h4>
                    <hr>
                    <p>
                        <a class="team__link" href="https://www.linkedin.com/in/antoninolattene/" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a class="team__link" href="https://github.com/Stonino82" target="_blank"><i class="fab fa-github fa-lg"></i></a>
                        <a class="team__link" href="http://www.antoninolattene.com" target="_blank"><i class="fas fa-external-link-alt fa-lg"></i></a>
                    </p>
                </div>
            </div>
            <div class="team__remodal-secondary">
                <div class="team__remodal-header">“Nothing better than a cappuccino to start coding!”</div>
                <p>UX & UI designer, Front End developer (HTML5, CSS3), also experienced in Marketing (SEO off page and on page).</p>
                <p>I am fascinated by the world of audiovisual communication, online marketing, new technologies, and digital art. These themes defined my field of study and, subsequently, my career. I consider myself a dynamic and versatile person, and with a natural enthusiasm to learn new concepts and tools that help me expand my knowledge and constantly advance on a personal and professional level.</p>
                <p>In recent years I have oriented my training and experience in the design and development of web environments and applications towards two parallel areas:</p>
                <ul>
                    <li>Client-side programming (Javascript, jQuery, etc.)</li>
                    <li>User Experience and User Interface: UX / UI, usability and information architecture.</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="modal-team--2" class="team__remodal-dialog">
        <div class="team__remodal">
            <a href="#close" title="Close" class="team__remodal-close"></a>

            <div class="team__remodal-primary">
                <div class="team__item-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/team__image--2.jpg" alt=""></div>
                <div>
                    <h5>Barbora Majernikova</h5>
                    <h4>Front End developer</h4>
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
        </div>
    </div>

</section> <!-- /team section -->

<section class="references" id="section__references">

    <article class="references__content">
        <h3>Some Works</h3>
        <hr>
        <!-- <p>Take a look to our projects, these are just a few, we have participated on many more.<br /> And of course others are already in proces...<br /> If you get stocked with your project, or if you need a coworkers to give you a hand with a website, contact us, let's have a coffe and speak about it.</p> -->
    </article>

    <!-- ACF -->
    <?php if( have_rows('projects') ): ?>

        <?php while( have_rows('projects') ): the_row(); 
            // vars
            $client = get_sub_field('client');
            $year_type = get_sub_field('year-type');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            $shadow = get_sub_field('shadow');
        ?>
            <?php if( $client ): ?>
                <article class="references__item">
                    <div class="references__text">
                        <h4><?php echo $client; ?></h4>
                        <h6><?php echo $year_type; ?></h6>
                        <p><?php echo $description; ?></p>
                    </div>
                    <a href="<?php echo $link; ?>" target="_blank"><img class="references__image <?php echo $shadow; ?>" src="<?php echo $image; ?>" alt=""></a>
                </article>
            <?php endif; ?> 

        <?php endwhile; ?>

    <?php endif; ?>

    <!-- /ACF -->


  

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

        <?php echo do_shortcode('[contact-form-7 id="68" title="Contact form" html_class="contact__form"]'); ?> <!-- Contact Form 7 Wordpress Plugin -->

    </div>

</section> <!-- /contact section -->

<?php get_footer(); ?>