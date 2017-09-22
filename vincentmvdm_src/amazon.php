<?php $title = "Vincent van der Meulen - Amazon"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>
        <div id="project-image">
            <picture>
                <source srcset="images/amazon/hero-2560w.jpg, images/amazon/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/amazon/hero-640w.jpg, images/amazon/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/amazon/hero-832w.jpg, images/amazon/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/amazon/hero-1024w.jpg, images/amazon/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/amazon/hero-2048w.jpg, images/amazon/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/amazon/hero-2560w.jpg, images/amazon/hero-2560w@2x.jpg 2x" alt="The amazon app's 'Explore' page at different points in the design stage">
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
                            I interned as a UX designer for Amazon Trade-In during the Summer of 2017. Trade-In enables customers to send in their used items and get paid for them.
                        </p>

                        <h2>The Two Projects</h2>
                        <p>
                            Over the course of three months, I did two projects. The goal of my first, three-week project was to improve the Trade-In experience as it exists today. For my second project, which took up the remaining three months, I both came up with and designed a new Trade-In feature. This project was unconventional because junior designers are seldom responsible for making the business decisions that drive their designs.
                        </p>

                        <p class="pb1">
                            To make my second project a success, I worked towards a Working Backwards document, the document that is used to decide whether Amazon should pursue ideas or not, as well as a prototype. Ultimately, I provided the following deliverables:
                        </p>

                        <ul class="pl0 mt2 list-style-none">
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Competitor analysis and literature review
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Preliminary recommendations I
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        6 user interviews
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        User research report
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Preliminary recommendations II
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Sketches
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Wireframes
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Mockups
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Prototypes
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Guerilla tests
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        High fidelity prototype
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Working backwards document
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Presentation (2x)
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <h2>Side Projects</h2>
                        <p>
                            When I was not busy working on my main projects, I tried to learn new things on the side. My manager shared an idea for a new Amazon feature that makes use of object recognition with me. I decided to see if we could make a proof of concept for an internal pitch competition. This question led me to Origami, and several days/YouTube videos later I had a prototype that simulated object recognition using the iOS camera.
                        </p>
                        <p>
                            I also participated in an Alexa hackathon and learned how to design voice interfaces. My team, consisting out of three engineers, had their hands full with the database, so I learned Node.js and wrote the code that is responsible for making API calls myself.
                        </p>

                        <h2>Lessons Learned</h2>
                        <p>
                            Throughout my internship, I improved a lot in two specific areas: systems thinking and customer obsession. I got better at systems thinking because I was responsible for the business decisions at the heart of my designs. I had to ensure that my feature can be successful for several years, and that required me to synthesize answers to multiple questions focused on the future: “What are our customers going to want?”, “What is our competition going to do?” and “Where is the Trade-In industry going?”.
                        </p>
                        <p>
                            I became more customer-obsessed since I learned that the words we use in our designs are just as important as the pixels. Towards the end of my internship, I spend more time polishing sentences than visuals. I also picked up on something I noticed my colleagues do a lot: making decisions that at first seem counterintuitive from a business perspective to better serve the customer.
                        </p>

                        <figure class="py3">
                            <a href="images/amazon/friends.jpg">
                                <img src="images/amazon/friends.jpg" alt="My friends and I near the end of our internships">
                            </a>
                            <figcaption>
                                My friends and I near the end of our internships. "3 months went by quick."
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

<?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
