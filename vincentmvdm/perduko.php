<?php $title = "Vincent van der Meulen - Perduko"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

        <div id="project-image">
            <picture>
                <source srcset="images/perduko/hero-2560w.jpg, images/perduko/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/perduko/hero-640w.jpg, images/perduko/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/perduko/hero-832w.jpg, images/perduko/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/perduko/hero-1024w.jpg, images/perduko/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/perduko/hero-2048w.jpg, images/perduko/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/perduko/hero-2560w.jpg, images/perduko/hero-2560w@2x.jpg 2x" alt="The perduko app's 'Explore' page at different points in the design stage">
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
                            For the final project of the class INFO 200, I designed a financial management app, Perduko, together with Jared Trelles and Helene Shea. Our goal was to help University of Washington students manage their finances and share information about their financial health with their parents.
                        </p>
                        <h2>Contents</h2>
                        <ul id="contents">
                            <li><a href="#problem" class="smooth-scroll">Problem</a></li>
                            <li><a href="#stageone" class="smooth-scroll">Stage 1: Competitor Analysis</a></li>
                            <li><a href="#stagetwo" class="smooth-scroll">Stage 2: Stakeholders and Personas</a></li>
                            <li><a href="#stagethree" class="smooth-scroll">Stage 3: Sketches and Wireframes</a></li>
                            <li><a href="#solution" class="smooth-scroll">Solution</a></li>
                            <li><a href="#lessonslearned" class="smooth-scroll">Lessons Learned</a></li>
                        </ul>
                        <h2 id="problem">Problem</h2>
                        <p>
                            Students who live on campus have to purchase a dining account. They can use the money that goes towards this dining account, which is at least $82 per week, to pay for food on campus. A small sum of this money goes to their Husky Card account, a second account that is used to pay for laundry and printing with.
                        </p>
                        <p>
                            At the start of the quarter, every student gets access to their dining account and Husky Card account money. They can pay with their accounts by presenting their student card.
                        </p>
                        <p>
                            We hypothesized that this system results in stress for students. Our reasoning was that students have access to at least $700, but do not know how much money they can spend a day. We imagined that they also do not know how much money they actually spend a day and what they spend their money on.
                        </p>
                        <h2 id="stageone">Stage 1: Competitor Analysis</h2>
                        <p class="mb2">
                            Once we had defined the problem, we looked at existing solutions to it. Among other things, we discovered a tool that tried to tackle at least one of the subproblems we had set out to solve. This tool presented students with both their Husky Card account and dining account transaction history. As a result of the large number of steps that users had to take to access it, not a lot of students knew about its existence however. The experience was also not designed with mobile devices in mind.
                        </p>
                        <div class="max-width-1">
                            <figure class="pt3 pb2">
                                <a href="images/perduko/hcaccount.jpg">
                                    <img src="images/perduko/hcaccount.jpg" alt="The mobile view of the tool in question">
                                </a>
                                <figcaption>
                                    The mobile view of the tool in question
                                </figcaption>
                            </figure>
                        </div>
                        <h2 id="stagetwo">Stage 2: Stakeholders and Personas</h2>
                        <p>
                            While planning user research, we considered the problem that parents are not able to look into their child's financial situation even if their child wants them to. We added this problem to our list of (potential) problems and started to conduct user research.
                        </p>
                        <p>
                            It was our goal to interview members of both of our stakeholder groups: students and parents. Ultimately, we used our interview transcripts as the foundation for our personas. We wanted to make our app accessible to more 'extreme' users. For this reason, we created personas for users with little financial means and poor vision.
                        </p>
                        <p>
                            A document with an overview of our personas can be downloaded <a href="http://www.downloads.vincentmvdm.com/perduko/personas.docx">here</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-perduko">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="stagethree">Stage 3: Sketches and Wireframes</h2>
                        <p class="mb3">
                            We started off by making sketches, wireframes and two simple prototypes so that we could test our ideas without having to use a lot of resources.
                        </p>
                        <figure class="py3">
                            <a href="images/perduko/sketch.jpg">
                                <img src="images/perduko/sketch.jpg" alt="An overview of the features our app(s) had to have to satisfy the needs and desires of its potential users">
                            </a>
                            <figcaption>
                                An overview of the features our app had to have to solve the problems of its potential users
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center py3">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_1.jpg">
                            <img src="images/perduko/wf_1.jpg" alt="A wireframe for parents' settings page" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_2.jpg">
                            <img src="images/perduko/wf_2.jpg" alt="A wireframe for students' Husky Card Account page" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_3.jpg">
                            <img src="images/perduko/wf_3.jpg" alt="A wireframe for students' Dining Account page" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_4.jpg">
                            <img src="images/perduko/wf_4.jpg" alt="A wireframe for the 'Forgot Password' page" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_5.jpg">
                            <img src="images/perduko/wf_5.jpg" alt="A wireframe for adding the first parent account" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_6.jpg">
                            <img src="images/perduko/wf_6.jpg" alt="A wireframe for a parent's overview of their child's finances" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_7.jpg">
                            <img src="images/perduko/wf_7.jpg" alt="A wireframe for a parent's options for receiving financial reports" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/wf_8.jpg">
                            <img src="images/perduko/wf_8.jpg" alt="A wireframe for the view that informs parents that they have gained access to information about their child's finances" class="shadow-perduko">
                        </a>
                    </div>
                </div>
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <div class="pt3">
                            <p>
                                <a href="https://invis.io/JX4XUJ63U">View our prototype of the student's view of the app</a>
                            </p>
                            <p class="mb0">
                                <a href="https://invis.io/7Q4XV46AB">View our prototype of the parent's view of the app</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-perduko-alternative">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="solution">Solution</h2>
                        <p class="mb3">
                            Using our wireframes as a starting point, we made the final designs and prototypes for Perduko.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center pb3">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_1.jpg">
                            <img src="images/perduko/hf_1.jpg" alt="A parent's overview of their child's finances" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_2.jpg">
                            <img src="images/perduko/hf_2.jpg" alt="A message telling the recipient to confirm their new email" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_3.jpg">
                            <img src="images/perduko/hf_3.jpg" alt="The app's login screen" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_4.jpg">
                            <img src="images/perduko/hf_4.jpg" alt="A parent's setting page" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_5.jpg">
                            <img src="images/perduko/hf_5.jpg" alt="The screen for adding a new parent account" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_6.jpg">
                            <img src="images/perduko/hf_6.jpg" alt="Students' screen for indicating their off-campus days" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_7.jpg">
                            <img src="images/perduko/hf_7.jpg" alt="A student's dining account overview" class="shadow-perduko">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/perduko/hf_8.jpg">
                            <img src="images/perduko/hf_8.jpg" alt="A parent's overview of their child's finances" class="shadow-perduko">
                        </a>
                    </div>
                </div>
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <div class="pt3">
                            <p>
                                <a href="https://invis.io/CD58HVRYX">View our final prototype of the student's view of the app</a>
                            </p>
                            <p class="mb0">
                                <span class="italic">The final prototype of the parent's view of the app is currently unavailable</span>
                            </p>
                        </div>
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
                            <img src="images/perduko/presentation.jpg" alt="The team that designed Perduko">
                        </div>
                        <p class="mt2">
                            Designing Perduko has taught me that, ideally, user research is done at multiple points in the design process. We should have done user research up front and also made the mistake of not letting users interact with our prototypes.
                        </p>
                        <p>
                            Another thing I learned is that it is difficult, yet crucial for a product's development, to conduct interviews with unbiased users. Some of our interview participants were close friends and as a result we can not be sure that we solved a real problem.
                        </p>
                        <p class="mb0">
                            One of the most important takeaways of this project, is how to design for users that are not the average user. To quote Dan Formose, co-founder of Smart Design, "What we really need to do to design is look at the extremes. The weakest, or the person with arthritis, or the athlete, or the strongest person, or the fastest. Because if we understand what the extremes are, the middle will take care of itself."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
