<?php $title = "Vincent van der Meulen - Amazon"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <?php
            $projects = file_get_contents("data/projects.json");
            $projects = json_decode($projects, TRUE);
            $project = $projects[$page];
        ?>

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
                        <blockquote>
                            It is difficult to be objective and make rational decisions when you and your team have been working on something for several months.
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

<?php include("includes/recommended.php"); ?>

<?php require("includes/footer.php"); ?>
