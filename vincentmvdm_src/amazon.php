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
                            I interned at Amazon as a UX designer during the Summer of 2017.
                        </p>

                        <blockquote>

                        </blockquote>
                        <h2>Project 1</h2>
                        <p>
                            Pellentesque lobortis ultricies dignissim. Suspendisse pretium velit ac tincidunt scelerisque. Nullam ac accumsan eros. Mauris eget faucibus tellus, sollicitudin luctus urna. In quis placerat purus. Donec varius sem eget cursus commodo. Pellentesque vel ultrices orci. Sed blandit eu massa aliquam varius. Suspendisse dignissim dignissim aliquet. Duis ac augue finibus, lobortis metus ut, volutpat nunc. Sed rutrum, arcu ut blandit pulvinar, turpis leo condimentum ante, id mollis nisi ligula quis nisi. Ut id ante ut urna tristique aliquet. Suspendisse sem lorem, rhoncus a cursus condimentum, volutpat sit amet massa. Pellentesque vel augue in nisl gravida interdum.
                        </p>
                        <h2>Project 2</h2>
                        <p>
                            Pellentesque lobortis ultricies dignissim. Suspendisse pretium velit ac tincidunt scelerisque. Nullam ac accumsan eros. Mauris eget faucibus tellus, sollicitudin luctus urna. In quis placerat purus. Donec varius sem eget cursus commodo. Pellentesque vel ultrices orci. Sed blandit eu massa aliquam varius. Suspendisse dignissim dignissim aliquet. Duis ac augue finibus, lobortis metus ut, volutpat nunc. Sed rutrum, arcu ut blandit pulvinar, turpis leo condimentum ante, id mollis nisi ligula quis nisi. Ut id ante ut urna tristique aliquet. Suspendisse sem lorem, rhoncus a cursus condimentum, volutpat sit amet massa. Pellentesque vel augue in nisl gravida interdum.
                        </p>
                    </div>
                </div>
            </div>
        </section>

<?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
