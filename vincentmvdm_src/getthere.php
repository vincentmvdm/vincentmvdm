<?php $title = "Vincent van der Meulen - Get There"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

        <div id="project-image">
            <picture>
                <source srcset="images/getthere/hero-2560w.jpg, images/getthere/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/getthere/hero-640w.jpg, images/getthere/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/getthere/hero-832w.jpg, images/getthere/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/getthere/hero-1024w.jpg, images/getthere/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/getthere/hero-2048w.jpg, images/getthere/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/getthere/hero-2560w.jpg, images/getthere/hero-2560w@2x.jpg 2x" alt="The getthere app's 'Explore' page at different points in the design stage">
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
                            I was hired by Get There, a Dutch software company, to design parts of their new website within a month in the summer of 2016.
                        </p>
                        <h2>Contents</h2>
                        <ul id="contents">
                            <li><a href="#problem" class="smooth-scroll">Problem</a></li>
                            <li><a href="#projectstructure" class="smooth-scroll">Project Structure</a></li>
                            <li><a href="#research" class="smooth-scroll">Stage 1: Research</a></li>
                            <li><a href="#contentmapping" class="smooth-scroll">Stage 2: Content Mapping</a></li>
                            <li><a href="#sketches" class="smooth-scroll">Stage 3: Sketches and Wireframes</a></li>
                            <li><a href="#design" class="smooth-scroll">Stage 4: Design</a></li>
                            <li><a href="#deliverables" class="smooth-scroll">Deliverables</a></li>
                            <li><a href="#lessonslearned" class="smooth-scroll">Lessons Learned</a></li>
                        </ul>
                        <h2 id="problem">Problem</h2>
                        <p>
                            Get There was concerned that their website was not attractive enough to attract potential new hires and clients. I shared these concerns, but the team and I ultimately agreed that a bigger problem was that the website's design made it difficult for users to complete important tasks, like applying to an open position.
                        </p>
                        <h2 id="projectstructure">Project Structure</h2>
                        <p>
                            The project team consisted out of five people in total. The project manager and I were responsible for the delivery of the designs. Overseen by the project manager, I prepared and gave weekly presentations to the other team members about the progress we had made the prior week.
                        </p>
                        <h2 id="research">Stage 1: Research</h2>
                        <p>
                            The first days of the four week period we had to complete the project were used for research. I Get There's Google Analytics data and summarized my findings in a report. In addition to this, I conducted a simple competitor analysis to find out how our competition used their websites to set themselves apart. As a team, we made a collection of websites that solved problems that we had to solve in the near future elegantly.
                        </p>
                        <h2 id="contentmapping">Stage 2: Content Mapping</h2>
                        <p class="mb0">
                            Next, I mapped out the existing website's page structure and included information about what content could be found where. I used this document in combination with the Google Analytics report and conversations I had with engineers, recruiters and one of the two CEOs to make a proposal for the new website's sitemap.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-getthere">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="sketches">Stage 3: Sketches and Wireframes</h2>
                        <p class="mb3">
                            It was difficult to validate the new page structure with only a spreadsheet. For this reason, I made sketches and created wireframes. These wireframes also enabled me to already test for potential user experience problems. I made several iterations of the wireframes and incorporated the team's feedback into my work.
                        </p>
                        <figure class="py3">
                            <a href="images/getthere/sketch.jpg">
                                <img src="images/getthere/sketch.jpg" alt="A sketch outlining the possible information architecture and layout of the Careers page">
                            </a>
                            <figcaption>
                                A sketch outlining the possible information architecture and layout of the Careers page
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/wf_home_mobile.jpg">
                            <img src="images/getthere/wf_home_mobile.jpg" alt="A wireframe for the mobile version of the Home page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/wf_werkenbij_mobile.jpg">
                            <img src="images/getthere/wf_werkenbij_mobile.jpg" alt="A wireframe for the mobile version of the Careers page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/wf_vacature_mobile.jpg">
                            <img src="images/getthere/wf_vacature_mobile.jpg" alt="A wireframe for the mobile version of a Job Description page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/wf_cases_mobile.jpg">
                            <img src="images/getthere/wf_cases_mobile.jpg" alt="A wireframe for the mobile version of the Past Work page" class="shadow-getthere">
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/wf_home_desktop.jpg">
                            <img src="images/getthere/wf_home_desktop.jpg" alt="A wireframe for the desktop version of the Home page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/wf_werkenbij_desktop.jpg">
                            <img src="images/getthere/wf_werkenbij_desktop.jpg" alt="A wireframe for the desktop version of the Careers page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/wf_vacature_desktop.jpg">
                            <img src="images/getthere/wf_vacature_desktop.jpg" alt="A wireframe for the desktop version of a Job Description page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/wf_cases_desktop.jpg">
                            <img src="images/getthere/wf_cases_desktop.jpg" alt="A wireframe for the desktop version of the Past Work page" class="shadow-getthere">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="design">Stage 4: Design</h2>
                        <p>
                            Ultimately, I created high fidelity designs based off the wireframes. Get There did not have enough photos that I could use for the designs, so I helped coordinate the creation of the photos that were used as hero images.
                        </p>
                        <p>
                            I shared early versions of the design with the Spec.fm team and received feedback on it from Brian Lovin, Bryn Jackson, Gabriel Valdivia and Diana Mounter. I was able to greatly improve my designs thanks to this feedback.
                        </p>
                        <p class="mb3">
                            In my free time, I used FramerJS to imagine how motion could be used to make the website's design more appealing. I recorded my interactions with these prototypes to speed up the development process that would follow when I would be back in the United States.
                        </p>
                    </div>
                    <figure class="pt3">
                        <div class="sixteen-by-nine">
                            <div>
                                <iframe src="https://www.youtube.com/embed/rGAzCCnv2TE?start=714" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                Brian Lovin, Bryn Jackson and Gabriel Valdivia critiquing my work
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="py4 bg-getthere">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="deliverables">Deliverables</h2>
                        <p>
                            The final deliverables were a sitemap, designs for several pages, three (videos of) prototypes and a style guide.
                        </p>
                        <p class="mb3">
                            On my final day, I presented my work to the rest of the company. This presentation helped get the greenlight for the project's continuation.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/home_mobile.jpg">
                            <img src="images/getthere/home_mobile.jpg" alt="The design for the mobile version of the Home page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/werkenbij_mobile.jpg">
                            <img src="images/getthere/werkenbij_mobile.jpg" alt="The design for the mobile version of the Careers page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/getthere/vacature_mobile.jpg">
                            <img src="images/getthere/vacature_mobile.jpg" alt="The design for the mobile version of a Job Description page" class="shadow-getthere">
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/home_desktop.jpg">
                            <img src="images/getthere/home_desktop.jpg" alt="A wireframe for the desktop version of the Home page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-12 md-col-6 px2 mt3">
                        <a href="images/getthere/werkenbij_desktop.jpg">
                            <img src="images/getthere/werkenbij_desktop.jpg" alt="A wireframe for the desktop version of the Careers page" class="shadow-getthere">
                        </a>
                    </div>
                    <div class="col-12 sm-col-6 px2 mt3">
                        <a href="images/getthere/vacature_desktop.jpg">
                            <img src="images/getthere/vacature_desktop.jpg" alt="A wireframe for the desktop version of a Job Description page" class="shadow-getthere">
                        </a>
                    </div>
                </div>
                <div class="col-12 px2 pt3">
                    <figure class="py3">
                        <video controls>
                            <source src="https://dl.dropboxusercontent.com/s/cawswx9u6pnnnqc/werkenbij_desktop_type.mp4?dl=0" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                A Framer prototype I made for the Careers page. It shows how a type effect can be used to communicate to users that Get There does a variety of work and motivate them to make an impact at Get There. The text reads "Helps us improve..."
                            </figcaption>
                        </div>
                    </figure>
                    <figure class="pt3">
                        <video controls>
                            <source src="https://dl.dropboxusercontent.com/s/laoiv3ohwcjqbb5/cases_desktop_hover.mp4?dl=0" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="max-width-measure mx-auto">
                            <figcaption>
                                A Framer prototype that shows how motion can be used to make the website feel more modern and perhaps look more appealing to a younger audience. It also demonstrates that motion can be utilized to signify affordances
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
                        <h2 class="mt0" id="lessonslearned">Lessons Learned</h2>
                        <p>
                            Working at Get There has made a me a lot better at design thinking and designing away from the computer for as long as possible. The feedback from Bryn Jackson et al. reminded me that, regardless of the quality of your process up to that point, it is easy to lose sight of users' needs and goals at any stage in a project.
                        </p>
                        <p class="mb0">
                            Above all, my time at Get There has made me aware that the design process perhaps benefits more from soft skills, like listening, presenting and giving/receiving feedback, than design skills.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
