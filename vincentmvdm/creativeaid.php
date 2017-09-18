<?php $title = "Vincent van der Meulen - Creative Aid"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

        <div id="project-image">
            <picture>
                <source srcset="images/creativeaid/hero-2560w.jpg, images/creativeaid/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/creativeaid/hero-640w.jpg, images/creativeaid/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/creativeaid/hero-832w.jpg, images/creativeaid/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/creativeaid/hero-1024w.jpg, images/creativeaid/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/creativeaid/hero-2048w.jpg, images/creativeaid/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/creativeaid/hero-2560w.jpg, images/creativeaid/hero-2560w@2x.jpg 2x" alt="The Creative Aid website displayed on a MacBook Pro">
            </picture>
        </div>
        <a href="#top" id="back-to-top" class="smooth-scroll grow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14"><defs><style>.a{fill:none;stroke:#616D73;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>chevron</title><polyline class="a" points="23.5 13.5 12 0.5 0.5 13.5"/></svg>
        </a>
        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h1 class="mt0"><?= $project['title']; ?></h1>
                        <p class="lighten"><?= $project['period']; ?></p>
                        <p><a href="http://creativeaid.vincentmvdm.com">http://creativeaid.vincentmvdm.com/</a></p>
                        <h2>Introduction</h2>
                        <p>
                            Martin Kamminga and I ran a nonprofit organization called Creative Aid (formerly known as GFX4Cancer) in high school. Creative Aid used graphic design to raise money for cancer research. In our senior year, we designed and developed a website for the organization as part of our Computer Science class.
                        </p>
                        <h2>Contents</h2>
                        <ul id="contents">
                            <li><a href="#process" class="smooth-scroll">Process</a></li>
                            <li><a href="#requirements" class="smooth-scroll">Requirements</a></li>
                            <li><a href="#wireframes" class="smooth-scroll">Wireframes</a></li>
                            <li><a href="#sketches" class="smooth-scroll">Sketches</a></li>
                            <li><a href="#challenges" class="smooth-scroll">Technical Challenges</a></li>
                            <li><a href="#product" class="smooth-scroll">Product</a></li>
                            <li><a href="#differently" class="smooth-scroll">Things I Would Do Differently</a></li>
                        </ul>
                        <h2 id="process">Process</h2>
                        <p>
                            We used the waterfall software development method Cap Gemini SDM. For this reason, Martin and I focused on logistics for the first weeks of the six months period in which the project had to be completed. We defined what requirements our website had to meet, timeboxed every activity and started to think about the database's design as well as tests we would ultimately have to conduct.
                        </p>
                        <p>
                            Martin and I created the initial designs over the course of several weeks of Computer Science classes. We eventually converted these draft designs to high fidelity designs, after which we started development.
                        </p>
                        <p>
                            We were both responsible for different parts of the development process. I was responsible for the website's back end (PHP and SQL). Martin was mostly concerned with its front end. In the end, I connected the website's front end to its back end while Martin started to conduct tests and write documentation.
                        </p>
                        <h2 id="requirements">Requirements</h2>
                        <p class="mb0">
                            The website had to support four use cases: users had to be able to learn more about cancer, donate money to Creative Aid, order prints and contact the organization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-creativeaid">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="wireframes">Wireframes</h2>
                        <p class="mb3">
                            Prior to the design phase, I made wireframes to get an idea of how users might use Creative Aid's website to order a print.
                        </p>
                        <figure class="py3">
                            <a href="images/creativeaid/wireframe_1.jpg">
                                <img src="images/creativeaid/wireframe_1.jpg" alt="Step 1: Select a print">
                            </a>
                            <figcaption>
                                Step 1: Select a print
                            </figcaption>
                        </figure>
                        <figure class="py3">
                            <a href="images/creativeaid/wireframe_2.jpg">
                                <img src="images/creativeaid/wireframe_2.jpg" alt="Step 2: Indicate preferences and add poster(s) to cart">
                            </a>
                            <figcaption>
                                Step 2: Indicate preferences and add poster(s) to cart
                            </figcaption>
                        </figure>
                        <figure class="py3">
                            <a href="images/creativeaid/wireframe_3.jpg">
                                <img src="images/creativeaid/wireframe_3.jpg" alt="Step 3: Choose to view cart">
                            </a>
                            <figcaption>
                                Step 3: Choose to view cart
                            </figcaption>
                        </figure>
                        <figure class="py3">
                            <a href="images/creativeaid/wireframe_4.jpg">
                                <img src="images/creativeaid/wireframe_4.jpg" alt="Step 4: Review order and proceed to checkout">
                            </a>
                            <figcaption>
                                Step 4: Review order and proceed to checkout
                            </figcaption>
                        </figure>
                        <figure class="pt3">
                            <a href="images/creativeaid/wireframe_5.jpg">
                                <img src="images/creativeaid/wireframe_5.jpg" alt="Step 5: Provide contact/billing information and check out">
                            </a>
                            <figcaption>
                                Step 5: Provide contact/billing information and check out
                            </figcaption>
                        </figure>

                    </div>
                </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="sketches">Sketches</h2>
                        <p class="mb3">
                            After we finished an early version of the website's design for desktop, I made sketches to explore what the 'store' page eventually had to look like.
                        </p>
                        <figure class="py3">
                            <a href="images/creativeaid/sketch_1.jpg">
                                <img src="images/creativeaid/sketch_1.jpg" alt="A sketch of the 'store' page's final design on mobile">
                            </a>
                            <figcaption>
                                A sketch of the 'store' page's final design on mobile
                            </figcaption>
                        </figure>
                        <figure class="py3">
                            <a href="images/creativeaid/sketch_2.jpg">
                                <img src="images/creativeaid/sketch_2.jpg" alt="A sketch of the 'store' page's final design on desktop">
                            </a>
                            <figcaption>
                                A sketch of the 'store' page's final design on desktop
                            </figcaption>
                        </figure>
                        <h2 class="mt3" id="challenges">Technical Challenges</h2>
                        <p>
                            We had to overcome several technical challenges while developing the website. Martin had limited experience as a developer and I was more familiar with front end development than with back end development.
                        </p>
                        <p class="mb0">
                            It was especially difficult to make our website secure, since we wanted to create its store from scratch. It also proved to be difficult to implement the store's masonry layout.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-creativeaid">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="product">Product</h2>
                        <p class="mb3">
                            The final product can be viewed <a href="http://creativeaid.vincentmvdm.com/">here</a>.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/creativeaid/home_mobile.jpg">
                            <img src="images/creativeaid/home_mobile.jpg" alt="Home - Mobile" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/creativeaid/donate_mobile.jpg">
                            <img src="images/creativeaid/donate_mobile.jpg" alt="Donate - Mobile" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/creativeaid/store_mobile.jpg">
                            <img src="images/creativeaid/store_mobile.jpg" alt="Store - Mobile" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/creativeaid/about_mobile.jpg">
                            <img src="images/creativeaid/about_mobile.jpg" alt="About - Mobile" class="shadow-creativeaid">
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/creativeaid/home_desktop.jpg">
                            <img src="images/creativeaid/home_desktop.jpg" alt="Home - Desktop" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/creativeaid/donate_desktop.jpg">
                            <img src="images/creativeaid/donate_desktop.jpg" alt="Donate - Desktop" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/creativeaid/store_desktop.jpg">
                            <img src="images/creativeaid/store_desktop.jpg" alt="Store - Desktop" class="shadow-creativeaid">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/creativeaid/about_desktop.jpg">
                            <img src="images/creativeaid/about_desktop.jpg" alt="About - Desktop" class="shadow-creativeaid">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="differently">Things I Would Do Differently</h2>
                        <p class="mb0">
                            From a design perspective, there is a lot that I would do differently. At the time of this project, which was completed in Winter 2015, I was not familiar with User Centered Design. We did not define a problem nor did we research our users' needs and desires. (As a result) virtually all of our design decisions were made with the company, and not the user, in mind. Furthermore, we did not do any user testing. If I were to do this project again, I would try to take a more user focused approach.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
