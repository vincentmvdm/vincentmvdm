<?php $title = "Vincent van der Meulen - Amazon"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <a href="#top" id="back-to-top" class="smooth-scroll grow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 14"><defs><style>.a{fill:none;stroke:#616D73;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>chevron</title><polyline class="a" points="23.5 13.5 12 0.5 0.5 13.5"/></svg>
        </a>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="flex justify-center">
                    <div class="col-12 md-col-9 px2">
                        <div class="relative" id="about-container">
                            <div class="absolute" id="blue">
                            </div>
                            <img src="images/about/vincent.jpg" alt="Vincent" id="vincent">
                        </div>
                        <div class="max-width-measure mx-auto">
                            <?php $streak = floor((time() - strtotime("2017-05-25")) / (60 * 60 * 24)); ?>
                            <h2 class="mt3">About</h2>
                            <p>
                                Hi! My name is Vincent, and I'm a junior studying Informatics, a mix between design and computer science, at the University of Washington in Seattle. I'm originally from the Netherlands (you'll notice the funky accent) and am a designer who codes. At the moment, I'm interested in captology, design systems, AR and React.
                            </p>
                            <p>
                                As I'm learning how design is used to gain people's attention and influence what they do on a day-to-day basis, I'm trying to use this knowledge to develop habits. Every day, I sit down to write some code and publish it on GitHub. Today is day <?= $streak ?> of doing that.
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
                        <div class="book-container mt3">
                            <a href="http://a.co/cM9Bomk" target="_blank">
                                <svg version="1.1" class="book" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 32 40" style="enable-background:new 0 0 32 40;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;}
                                    .st1{fill:#1F2933;}
                                </style>
                                <title>book</title>
                                <path class="st0" d="M-8-4h48v48H-8V-4z"/>
                                <path class="st1" d="M28,0H4C1.8,0,0,1.8,0,4v32c0,2.2,1.8,4,4,4h24c2.2,0,4-1.8,4-4V4C32,1.8,30.2,0,28,0z M4,4h10v16l-5-3l-5,3V4z
                                    "/>
                                </svg>

                                <div>
                                    <h4 class="mt2">Irresistible: The Rise of Addictive Technology and the Business of Keeping Us Hooked</h4>
                                    <p class="my0">by Adam Alter</p>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col-12 sm-col-4 px2">
                        <div class="book-container mt3">
                            <a href="http://a.co/iy4OiE9" target="_blank">
                                <svg version="1.1" class="book" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 32 40" style="enable-background:new 0 0 32 40;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;}
                                    .st1{fill:#1F2933;}
                                </style>
                                <title>book</title>
                                <path class="st0" d="M-8-4h48v48H-8V-4z"/>
                                <path class="st1" d="M28,0H4C1.8,0,0,1.8,0,4v32c0,2.2,1.8,4,4,4h24c2.2,0,4-1.8,4-4V4C32,1.8,30.2,0,28,0z M4,4h10v16l-5-3l-5,3V4z
                                    "/>
                                </svg>

                                <div>
                                    <h4 class="mt2">Zero to One: Notes on Startups, or How to Build the Future</h4>
                                    <p class="my0">by Peter Thiel and Blake Masters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 sm-col-4 px2">
                        <div class="book-container mt3">
                            <a href="http://a.co/h7ScsII" target="_blank">
                                <svg version="1.1" class="book" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 32 40" style="enable-background:new 0 0 32 40;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;}
                                    .st1{fill:#1F2933;}
                                </style>
                                <title>book</title>
                                <path class="st0" d="M-8-4h48v48H-8V-4z"/>
                                <path class="st1" d="M28,0H4C1.8,0,0,1.8,0,4v32c0,2.2,1.8,4,4,4h24c2.2,0,4-1.8,4-4V4C32,1.8,30.2,0,28,0z M4,4h10v16l-5-3l-5,3V4z
                                    "/>
                                </svg>

                                <div>
                                    <h4 class="mt2">The Idealist: Aaron Swartz and the Rise of Free Culture on the Internet</h4>
                                    <p class="my0">by Justin Peters</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php require("includes/footer.php"); ?>
