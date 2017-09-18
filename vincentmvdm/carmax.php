<?php $title = "Vincent van der Meulen - CarMax"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

        <div id="project-image">
            <picture>
                <source srcset="images/carmax/hero-2560w.jpg, images/carmax/hero-2560w@2x.jpg 2x" media="(min-width: 128em)">
                <source srcset="images/carmax/hero-640w.jpg, images/carmax/hero-640w@2x.jpg 2x" media="(max-width: 40em)">
                <source srcset="images/carmax/hero-832w.jpg, images/carmax/hero-832w@2x.jpg 2x" media="(max-width: 52em)">
                <source srcset="images/carmax/hero-1024w.jpg, images/carmax/hero-1024w@2x.jpg 2x" media="(max-width: 64em)">
                <source srcset="images/carmax/hero-2048w.jpg, images/carmax/hero-2048w@2x.jpg 2x" media="(max-width: 128em)">
                <img srcset="images/carmax/hero-2560w.jpg, images/carmax/hero-2560w@2x.jpg 2x" alt="The CarMax app's 'Explore' page at different points in the design stage">
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
                            In Autumn 2016, I took the class INFO 360: Design Thinking, taught by Amazon Senior User Experience Manager Jason Levine. As our final project, my team and I made a prototype for an iPhone app for used-car retailer CarMax.
                        </p>
                        <h2>Contents</h2>
                        <ul id="contents">
                            <li><a href="#problem" class="smooth-scroll">Problem</a></li>
                            <li><a href="#personas" class="smooth-scroll">Personas and Use Cases</a></li>
                            <li><a href="#whiteboard" class="smooth-scroll">Whiteboard Sketches</a></li>
                            <li><a href="#userflow" class="smooth-scroll">User Flow and Paper Prototypes</a></li>
                            <li><a href="#wireframes" class="smooth-scroll">Wireframes</a></li>
                            <li><a href="#digitalprototype" class="smooth-scroll">Digital Prototype</a></li>
                            <li><a href="#firstiteration" class="smooth-scroll">The First Iteration</a></li>
                            <li><a href="#seconditeration" class="smooth-scroll">The Second Iteration</a></li>
                            <li><a href="#oursolution" class="smooth-scroll">Our Solution</a></li>
                            <li><a href="#lessonslearned" class="smooth-scroll">Lessons Learned</a></li>
                        </ul>
                        <h2 id="problem">Problem</h2>
                        <p>
                            Picking the right car is difficult, because there are a lot of options. Customers often feel the need to visit multiple car dealerships before making a choice. As a result, buying a car becomes a stressful experience. A consequence for car dealerships is that visiting customers are likely to purchase a car elsewhere.
                        </p>
                        <p>
                            We set out to make the car selection process less stressful for customers by making it easier for them to narrow down their options and schedule test drives.
                        </p>
                        <h2 id="personas">Personas and Use Cases</h2>
                        <p class="mb0">
                            As part of the project brief, we were given two personas that represented possible users of our app. We derived a list of use cases from their descriptions. Perhaps the most interesting use case on this list was that users had to be able to find cars that fit their personality.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-carmax">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="whiteboard">Whiteboard Sketches</h2>
                        <p class="mb3">
                            After studying the problem and defining the needs/desires of our users, our first step was to take four hours to come up with ideas and sketch possible solutions to the problem.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_1.jpg">
                            <img src="images/carmax/sketch_1.jpg" alt="A whiteboard drawing showing the For You page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_2.jpg">
                            <img src="images/carmax/sketch_2.jpg" alt="A whiteboard drawing showing the Find Cars page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_3.jpg">
                            <img src="images/carmax/sketch_3.jpg" alt="A whiteboard drawing showing an individual car's page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_4.jpg">
                            <img src="images/carmax/sketch_4.jpg" alt="A whiteboard drawing showing the profile page" class="shadow-carmax">
                        </a>
                    </div>

                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_5.jpg">
                            <img src="images/carmax/sketch_5.jpg" alt="A whiteboard drawing showing how cars can be compared to each other" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_6.jpg">
                            <img src="images/carmax/sketch_6.jpg" alt="A whiteboard drawing showing cars being compared to each other" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_7.jpg">
                            <img src="images/carmax/sketch_7.jpg" alt="A whiteboard drawing showing driving statistics" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/sketch_8.jpg">
                            <img src="images/carmax/sketch_8.jpg" alt="A whiteboard showing how users can inform the app about their personality" class="shadow-carmax">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="userflow">User Flow and Paper Prototypes</h2>
                        <p class="mb3">
                            We tried to increase our understanding of what we regarded as the most complicated use case: finding a car by filtering by requirements and comparing models to each other. We did this by developing a user flow for it. This user flow, and the whiteboard sketches we had made earlier, formed the basis for the paper prototypes that we subsequently made.
                        </p>
                        <figure class="py3">
                            <a href="images/carmax/uf_1.png">
                                <img src="images/carmax/uf_1.png" alt="A user flow showing how users can find cars by filtering by requirements and comparing models to each othe">
                            </a>
                            <div class="max-width-measure">
                                <figcaption>
                                    A user flow showing how users can find cars by filtering by requirements and comparing models to each other
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_1.jpg">
                            <img src="images/carmax/pp_1.jpg" alt="A sketch showing the scheduled test drives page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_2.jpg">
                            <img src="images/carmax/pp_2.jpg" alt="A sketch showing the page with driving statistics" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_3.jpg">
                            <img src="images/carmax/pp_3.jpg" alt="A sketch showing nearby stores where a specific car can be found" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_4.jpg">
                            <img src="images/carmax/pp_4.jpg" alt="A sketch showing a screen from where a test drive can be scheduled" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_5.jpg">
                            <img src="images/carmax/pp_5.jpg" alt="A sketch showing that scheduled test drives can also be viewed on an Apple Watch" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_6.jpg">
                            <img src="images/carmax/pp_6.jpg" alt="A sketch showing the Find Cars page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_7.jpg">
                            <img src="images/carmax/pp_7.jpg" alt="A sketch showing an error message because there are no stores near the user that offer that particular car" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/pp_8.jpg">
                            <img src="images/carmax/pp_8.jpg" alt="A sketch showing the For You screen" class="shadow-carmax">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-carmax">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="wireframes">Wireframes</h2>
                        <p class="mb3">
                            Our paper prototypes made it relatively easy to create wireframes of the app. We expanded upon them by, among other things, fleshing out the app's onboarding as well as other verbose parts that we had only briefly discussed earlier.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_1.jpg">
                            <img src="images/carmax/wf_1.jpg" alt="A wireframe showing the end of the onboarding experience" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_2.jpg">
                            <img src="images/carmax/wf_2.jpg" alt="A wireframe showing the Find Cars page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_3.jpg">
                            <img src="images/carmax/wf_3.jpg" alt="A wireframe showing two cars being compared to each other" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_4.jpg">
                            <img src="images/carmax/wf_4.jpg" alt="A wireframe showing the beginning of the onboarding" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_5.jpg">
                            <img src="images/carmax/wf_5.jpg" alt="A wireframe showing an individual car's page" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_6.jpg">
                            <img src="images/carmax/wf_6.jpg" alt="A wireframe showing how cars can be compared to each other" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_7.jpg">
                            <img src="images/carmax/wf_7.jpg" alt="A wireframe showing how the user is prompted to share their location upon launch" class="shadow-carmax">
                        </a>
                    </div>
                    <div class="col-6 sm-col-3 px2 mt3">
                        <a href="images/carmax/wf_8.jpg">
                            <img src="images/carmax/wf_8.jpg" alt="A wireframe showing an onboarding question" class="shadow-carmax">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="digitalprototype">Digital Prototype</h2>
                        <p>
                            The wireframes allowed us to quickly make a functioning prototype using Flinto. Finishing our first digital prototype was a major milestone, since it meant that people could interact with our design in a realistic way and provide feedback.
                        </p>
                        <p>
                            In our initial design, users could find a car in two different ways. One way was by picking a car from an automatically generated category. These categories were based on self-reported information about the user's personality as well as any driving data they had collected using the CarMax Apple Watch App.
                        </p>
                        <p class="mb3">
                            The other was to narrow down the selection of cars by answering questions about preferred requirements. If users did this, they were also able to compare cars to each other.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-4 px2 mt3">
                        <figure>
                            <video controls class="shadow-carmax">
                                <source src="https://dl.dropboxusercontent.com/s/ewb3t719rp8pqoh/dp_1.mp4?dl=0" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="max-width-measure mx-auto">
                                <figcaption>
                                    Finding a car by picking one from an automatically generated category
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    <div class="col-6 sm-col-4 px2 mt3">
                        <figure>
                            <video controls class="shadow-carmax">
                                <source src="https://dl.dropboxusercontent.com/s/s2k9jlmzt71t355/dp_2.mp4?dl=0" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="max-width-measure mx-auto">
                                <figcaption>
                                    Finding a car by answering questions about preferred requirements
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-carmax">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="firstiteration">The First Iteration</h2>
                        <p class="mb3">
                            After showing our prototype to our professor, we realized that the two ways in which we enabled users to find a car were very similar to each other. We created another prototype that supported only one way of finding a car.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-4 px2 mt3">
                        <video controls class="shadow-carmax">
                            <source src="https://dl.dropboxusercontent.com/s/4kpqlhs09eboyaz/dp_it_1.mp4?dl=0" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="seconditeration">The Second Iteration</h2>
                        <p>
                            A conversation with Melissa, a User Experience Designer working on Amazon trade-ins, prompted us to make a new prototype. Melissa had expressed her concerns about the personality questions' effectiveness, using a chat-based interface, the language we used throughout the app and our app not adequately supporting the needs of people who are not familiar with technology and/or cars. We decided to address all of these concerns except for Melissa's concern about the chat-based interface.
                        </p>
                        <p class="mb3">
                            Furthermore, we reduced the time users had to spend finding a car by replacing the app's question based filtering with a regular filter. Impulsively, we also removed our app's Apple Watch integration.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-4 px2 mt3">
                        <video controls class="shadow-carmax">
                            <source src="https://dl.dropboxusercontent.com/s/udxfwrke6klrjhl/dp_it_2.mp4?dl=0" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-carmax">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="oursolution">Our Solution</h2>
                        <p>
                            User testing (in which I was not involved) and presenting our work to the class made us realize three things: the number of filter options was overwhelming, our new solution made it impossible for users to find cars that fit their personality, and our app's Apple Watch integration, which we had just removed, was perceived as valuable and a unique selling point.
                        </p>
                        <p class="mb3">
                            At this point, it felt like our iterations had only made our design worse. With one week to go until the submission deadline, we decided to use what we had learned to develop one more prototype.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-6 sm-col-4 px2 mt3">
                        <video controls class="shadow-carmax">
                            <source src="https://dl.dropboxusercontent.com/s/9ieptmojv62kngy/solution.mp4?dl=0" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h2 class="mt0" id="lessonslearned">Lessons Learned</h2>
                        <p>
                            Prototyping a better customer experience for people who are looking to buy a car taught me several things.
                        </p>
                        <p>
                            I learned that you have to be careful when conducting usability studies with prototypes. Our prototypes only supported a few ways in which important tasks could be completed. On top of this, Flinto highlights every tappable item when you tap on something that is not supposed to be tapped on. As a result, it was easier for users to complete tasks than it would have been had they been using a fully functional app. This made our usability study's results less valuable. I ended up discussing the problem with my professor. He suggested asking users what they think they should do when presented with a particular screen before actually letting them try this.
                        </p>
                        <blockquote>
                            Moving fast sometimes means not making a decision right away, but carefully thinking about the problem, and how the feedback relates to it, first.
                        </blockquote>
                        <p>
                            We used the feedback we received from users, but also from peers and full-time designers, to try to improve our app. Looking back, we wanted to respond to feedback too quickly. I realized that moving fast sometimes means not making a decision right away, but carefully thinking about the problem, and how the feedback relates to it, first. We incorporated a lot of feedback into our design that, had we considered it in the context of our problem, should have been ignored. For example, we removed our questions about the user's personality while we were trying to help users find cars that match who they are.
                        </p>
                        <blockquote>
                            A lot of our ideas, once prototyped and tested, did not make the cut, but all of our iterations had something in common: none of them were a waste of time.
                        </blockquote>
                        <p>
                            At the same time, doing this project made it clear to me that there is something to be said for a willingness to experiment and try new things. A lot of our ideas, once prototyped and tested, did not make the cut, but all of our iterations had something in common: none of them were a waste of time. Some of them were more successful than others, but even the less successful ones lead to valuable insights. For instance, as part of one of our iterations, we made it more difficult to find cars for specific personalities and removed the Apple Watch integration. These were considered to be bad moves. However, in that same sprint, we realized that we could change the app's filter mechanism and help users save time.
                        </p>
                        <p class="mb0">
                            Lastly, I took away that language matters. For our prototypes, I used a lot of placeholder text that I had come up with while designing. For example, in our second prototype I talked about helping users find their 'dream' car. Melissa, the Amazon trade-ins designer, explained to me that language can be an important tool in making it easier for users to complete tasks. More importantly, she pointed out to me that not using the right language can distract users and negatively impact their experience. We talked about finding users' 'dream car', but what if they were just looking for the 'right car' instead? In that scenario, which was more than probable, users would perhaps think that our app was not for them. They could also be slightly annoyed by our lack of understanding, which would lessen their experience.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
