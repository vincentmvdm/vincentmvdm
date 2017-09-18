<?php $title = "Vincent van der Meulen - Scout"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

        <div id="project-image">
            <picture>
                <source srcset="images/scout/hero-2560w.jpg, images/scout/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/scout/hero-640w.jpg, images/scout/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/scout/hero-832w.jpg, images/scout/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/scout/hero-1024w.jpg, images/scout/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/scout/hero-2048w.jpg, images/scout/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/scout/hero-2560w.jpg, images/scout/hero-2560w@2x.jpg 2x" alt="The scout app's 'Explore' page at different points in the design stage">
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
                        <h2>Introduction</h2>
                        <p>
                            Scout is an application, made by University of Washington Information Technology, that aims to help students find places to eat, places to study and Student Technology Fee funded items on campus. I worked on Scout for several months as a researcher and designer.
                        </p>
                        <h2>Contents</h2>
                        <ul id="contents">
                            <li><a href="#phaseone" class="smooth-scroll">Phase 1: Mapping the Item Finding Process</a></li>
                            <li><a href="#phasetwo" class="smooth-scroll">Phase 2: Usability Tests</a></li>
                            <li><a href="#phasethree" class="smooth-scroll">Phase 3: A Landing Page</a></li>
                            <li><a href="#lessonslearned" class="smooth-scroll">Lessons Learned</a></li>
                        </ul>
                    </div>
                </dov>
            </div>
        </section>

        <section class="py4 bg-scout">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="phaseone">Phase 1: Mapping the Item Finding Process</h2>
                        <p class="mb3">
                            One of my first responsibilities was capturing how students go about finding items on campus. I did this using a user flow diagram and subsequently defined what information Scout's different pages needed to display to aid students in their search.
                        </p>
                    </div>
                    <figure class="py3">
                        <a href="images/scout/uf.png">
                            <img src="images/scout/uf.png" alt="A user flow diagram showing how students find items on campus">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                A user flow diagram showing how students find items on campus
                            </figcaption>
                        </div>
                    </figure>
                    <div class="max-width-measure mx-auto">
                        <figure class="py3">
                            <a href="images/scout/pf_sketch.jpg">
                                <img src="images/scout/pf_sketch.jpg" alt="A sketch detailing the Information Architecture of Scout's item finding functionality.">
                            </a>
                            <figcaption>
                                A sketch detailing the information architecture of Scout's item finding functionality
                            </figcaption>
                        </figure>
                    </div>
                    <figure class="py3">
                        <a href="images/scout/pf.png">
                            <img src="images/scout/pf.png" alt="A diagram detailing the Information Architecture of Scout's item finding functionality">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                A diagram detailing the information architecture of Scout's item finding functionality
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="phasetwo">Phase 2: Usability Tests</h2>
                        <p>
                            The rest of the team had focused on the part of Scout that needed to help students find food on campus. Once they finished a minimum viable product, I conducted two user studies on campus together with Dr. Henry Lyle, a researcher at UW-IT. For both of these studies, we interviewed around ten random students.
                        </p>
                        <h3>The First Study</h3>
                        <p>
                            Our first study showed that students were unable to find nearby food places that served specific types of food. They did not share their location and as a result Scout never listed food places that were nearby. Dr. Lyle and I identified users mistaking the default location for their current location as the problem. This misunderstanding made users not share their location and receive suboptimal suggestions.
                        </p>
                        <p class="mb3">
                            After documenting the study's results, I tried to address the encountered problem by changing the design of Scout's location services. I changed users' default location from an arbitrary landmark, Drumheller Fountain, to Red Square, the busiest and most central place on campus. Furthermore, I used iconography and language to show that a default location and a shared location are not one and the same. Lastly, I used spacing to emphasize the action of sharing a location.
                        </p>
                    </div>
                    <figure class="py3">
                        <a href="images/scout/prestudyone.jpg">
                            <img src="images/scout/prestudyone.jpg" alt="The discover page used in our first study">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The discover page used in our first study
                            </figcaption>
                        </div>
                    </figure>
                    <div class="max-width-measure mx-auto">
                        <div class="max-width-1">
                            <figure class="py3">
                                <a href="images/scout/defaultlocation.jpg">
                                    <img src="images/scout/defaultlocation.jpg" alt="My proposal for the 'off' state of location sharing">
                                </a>
                                <figcaption>
                                    My proposal for the "off" state of location sharing
                                </figcaption>
                            </figure>
                            <figure class="pt2 pb3">
                                <a href="images/scout/yourlocation.jpg">
                                    <img src="images/scout/yourlocation.jpg" alt="My proposal for the 'on' state of location sharing">
                                </a>
                                <figcaption>
                                    My proposal for the "on" state of location sharing
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <figure class="pt3 pb2">
                        <a href="images/scout/poststudyone.jpg">
                            <img src="images/scout/poststudyone.jpg" alt="My proposal for the 'on' state of location sharing">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The discover page after the team had taken my proposal into account. This was also the discover page used in our second study
                            </figcaption>
                        </div>
                    </figure>
                    <div class="max-width-measure mx-auto">
                        <h3>The Second Study</h3>
                        <h4>Location Services</h4>
                        <p>
                            The results of our second study indicated that the users were still confused by Scout's location services. They did not share their location, because they either missed the location bar or did not understand the options that were presented to them. In both cases, they thought that the application was already using their location.
                        </p>
                        <p class="mb3">
                            After our second study, I tried to make more radical changes. I made the location bar more prominent and made the action of enabling location services much more explicit by turning the old design's link into a switch. Furthermore, I used text to clarify what location the app was basing its suggestions on.
                        </p>
                    </div>
                    <figure class="py3">
                        <div class="marvel">
                            <div>
                                <iframe src="https://marvelapp.com/e4gie3?emb=1" allowTransparency="true" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                A prototype that I created after our second study to show how I thought that we could solve the encountered problems
                            </figcaption>
                        </div>
                    </figure>
                    <figure class="py3">
                        <a href="images/scout/poststudytwo_1.jpg">
                            <img src="images/scout/poststudytwo_1.jpg" alt="The discover page in June 2015. Some of the changes that I proposed had been implemented">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The discover page in June 2015. Some of the changes that I proposed had been implemented
                            </figcaption>
                        </div>
                    </figure>
                    <div class="max-width-measure mx-auto">
                        <h4 class="mt2">Filters</h4>
                        <p>
                            Our second study also brought to light another problem: users did not understand the page that had to help them find specific food places. The initial state, which showed all the food places on campus, was confusing to them. They also overlooked the option to narrow down results using filters. This resulted in inefficient workflows, such as reviewing every result in the initial list when asked to find a nearby food place that served Chinese food.
                        </p>
                        <p class="mb3">
                            The changes I subsequently made had to help users realize that the first list that was shown listed all of the food places on campus. My changes also had to improve the filters' discoverability.
                        </p>
                    </div>
                    <figure class="py3">
                        <a href="images/scout/prestudytwo.jpg">
                            <img src="images/scout/prestudytwo.jpg" alt="The places page that we used in our second study. This page failed to help users find specific places to eat near them">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The places page that we used in our second study. This page failed to help users find specific places to eat near them
                            </figcaption>
                        </div>
                    </figure>
                    <figure class="py3">
                        <a href="images/scout/proposal.jpg">
                            <img src="images/scout/proposal.jpg" alt="The redesign that I proposed for the places page based on the results of our second study">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The redesign that I proposed for the places page based on the results of our second study
                            </figcaption>
                        </div>
                    </figure>
                    <figure class="pt3">
                        <a href="images/scout/poststudytwo_2.jpg">
                            <img src="images/scout/poststudytwo_2.jpg" alt="The the places page in June 2015. Some of the changes I had proposed were made">
                        </a>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                The the places page in June 2015. Some of the changes I had proposed were made
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="py4 bg-scout">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="phasethree">Phase 3: A Landing Page</h2>
                        <p>
                            <a href="http://scout.vincentmvdm.com/">http://scout.vincentmvdm.com/</a><br>
                            <a href="https://github.com/uw-it-aca/scout_landing_page">https://github.com/uw-it-aca/scout_landing_page</a>
                        </p>
                        <p class="mt3 mb3">
                            I was given the opportunity to make the landing page that needed to inform incoming freshmen about Scout. I was responsible for both the design and the development of the page.
                        </p>
                        <figure class="py3">
                            <a href="images/scout/sketch.jpg">
                                <img src="images/scout/sketch.jpg" alt="Sketches that my manager, Jason Civjan, and I made to identify what information needed to be on the page as well as how the page might look">
                            </a>
                            <div class="max-width-measure mx-auto">
                                <figcaption>
                                    Sketches that my manager, Jason Civjan, and I made to identify what information needed to be on the page as well as how the page might look
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-4 sm-col-3 px2 mt3">
                        <a href="images/scout/landing_mobile.jpg">
                            <img src="images/scout/landing_mobile.jpg" alt="The landing page - Mobile" class="shadow-scout">
                        </a>
                    </div>
                    <div class="col-8 sm-col-6 px2 mt3">
                        <a href="images/scout/landing_desktop.jpg">
                            <img src="images/scout/landing_desktop.jpg" alt="The landing page - Desktop" class="shadow-scout">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0 mb2" id="lessonslearned">Lessons Learned</h2>
                        <div class="py3">
                            <img src="images/scout/presentation.jpg" alt="Vincent tellings students about Scout at a technology expo">
                        </div>
                        <p class="mt2">
                            Scout took up a large part of my first year as a designer at UW-IT. My work on mapping the item finding process was one of my first exercises in trusting that good process will result in good design. It convinced me that it is indeed better to start off with low fidelity deliverables as opposed to jumping to visual design.
                        </p>
                        <blockquote>
                            It is difficult to be objective and make rational decisions when you and your team have been working on something for several months.
                        </blockquote>
                        <p>
                            The usability tests I did together with Dr. Henry Lyle were a good reminder that it is crucial to get out of the office and get products in the hands of real users, for it is difficult to be objective and make rational decisions when you and your team have been working on something for several months.
                        </p>
                        <p class="mb0">
                            Lastly, having my manager, Jason Civjan, look over my code for the landing page made me aware that making websites accessible is a skill of its own, and one that is important to learn. It also served as a good reminder that page speed is a commonly overlooked, yet crucial factor in a website's success.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
