<?php $title = "About Vincent van der Meulen"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <a href="#top" id="back-to-top" class="smooth-scroll grow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14"><defs><style>.a{fill:none;stroke:#616D73;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>chevron</title><polyline class="a" points="23.5 13.5 12 0.5 0.5 13.5"/></svg>
        </a>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="flex justify-center">
                    <div class="col-12 md-col-9 px2">
                        <div class="relative mb1" id="about-container">
                            <div class="absolute" id="blue"></div>
                            <img src="images/about/vincent.jpg" alt="Vincent" id="vincent">
                        </div>
                        <div class="max-width-measure mx-auto">
                            <?php $streak = floor((time() - strtotime("2017-05-25")) / (60 * 60 * 24)); ?>
                            <h2 class="mt3">About</h2>
                            <p>
                                Hi! My name is Vincent, and I'm a junior studying Informatics, a mix between design and computer science, at the University of Washington in Seattle. I'm originally from the Netherlands (you'll notice the funky accent) and am a designer who codes. At the moment, I'm interested in design tools and React (Native).
                            </p>
                            <p>
                                Every day, I sit down to write some code and publish it on <a href="https://github.com/vincentmvdm" target="_blank" class="blue-fill">GitHub</a>. Today is day <?= $streak ?> of doing that. I am currently working on a Slack-like chat app, a web app that helps air ambulance <a href="http://www.uwmedicine.org/airlift-nw" target="_blank" class="blue-fill">Airlift Northwest</a> manage their transports, and a Sketch plugin that makes it easier for designers to use color creatively. The last project I shipped was <a href="https://twitter.com/vincentmvdm/status/947870103810510849" target="_blank" class="blue-fill">a $75 per room Sonos alternative</a>.
                            </p>
                            <p>
                                I've wanted to visit Boston for forever, so if that's where you live, or you just want to reach out, my email is below ;)
                            </p>
                            <div class="mt3">
                                <a href="mailto:meulen@uw.edu?Subject=Hi%20Vincent!" class="btn btn-primary py1 px2">meulen@uw.edu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py4 bg-section">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <h3 class="my0">Current Bookshelf</h3>
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="col-12 sm-col-4 px2">
                        <a href="http://a.co/cyRnj2m" target="_blank">
                            <div class="book-container mt3">
                                <?php include("includes/book.php"); ?>
                                <div>
                                    <h4 class="mt2">High Output Management</h4>
                                    <p class="my0">by Andrew Grove</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 sm-col-4 px2">
                        <a href="http://a.co/hqDiNbN" target="_blank">
                            <div class="book-container mt3">
                                <?php include("includes/book.php"); ?>
                                <div>
                                    <h4 class="mt2">Understanding Power: The Indispensable Chomsky</h4>
                                    <p class="my0">by Noam Chomsky</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 sm-col-4 px2">
                        <a href="http://a.co/1Y94jv8" target="_blank">
                            <div class="book-container mt3">
                                <?php include("includes/book.php"); ?>
                                <div>
                                    <h4 class="mt2">Principles: Life and Work</h4>
                                    <p class="my0">by Ray Dalio</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

<?php require("includes/footer.php"); ?>
