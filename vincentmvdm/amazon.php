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
                        <h2>What I did</h2>
                        <h3>The two projects</h3>
                        <p>
                            Over the course of three months, I did two projects. The goal of my first, 3-week project was to improve the Trade-In experience as it exists today. As my second project, which took up the remaining three months, I came up with a new Trade-In feature. This project was unconventional as I was responsible for coming up with the feature (how is it going to make money?) as well as design it. I ultimately accomplished this with the following deliverables:
                        </p>

                        <ul class="pl0 mt2 list-style-none">
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Competitor Analysis and Literature Review
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Preliminary Recommendations I
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        6 User Interviews
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        User Research Report
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    &bull;
                                    <div class="ml2">
                                        Preliminary Recommendations II
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
                                        Working Backwards document
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

                        <h3>Side projects</h3>
                        <p>
                            Apart from my two main projects, I worked on several things on the side. I participated in an Alexa hackathon and learned how to design voice interfaces. Because my team, consisting out of three engineers, had their hands full with the database, I learned how to use Node.js and wrote the part of our skill that is responsible for making API calls myself. Furthermore, I prototyped part of a new Amazon feature, that makes use of object recognition, in Origami.
                        </p>

                        <h2>What I Learned</h2>
                        <p>
                            During my internship, I improved a lot at in two specific areas: systems thinking and customer obsession. I got better at systems thinking because I was responsible for the business logic at the heart of designs. Junior designers do not frequently get to do this. I had to ensure that my feature can be successful for several years, and that required me to synthesize answers to multiple questions focused on the future: “What are our customers going to want?”, “What is our competition going to do?” and “Where is the Trade-In industry going?”.
                        </p>
                        <p>
                            I became more customer obsessed since I learned that the words we use in our designs are just as important as the pixels. Towards the end of my internship, I spend more time polishing sentences than visuals. I also picked up on something I noticed my colleagues did a lot: making decisions that at first seem counterintuitive from a business perspective to better serve the customer.
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
