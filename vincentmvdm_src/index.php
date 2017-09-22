<?php $title = "Portfolio Vincent van der Meulen"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <section id="introduction">
            <div class="max-width-4 mx-auto h-100">
                <div class="flex items-center h-100">
                    <div class="col-10 px2">
                        <h1 class="my0 fadeIn1">
                            I am a designer and developer studying HCI at the University of Washington in Seattle.
                        </h1>
                        <h2 class="mt2 mb0 regular fadeIn1">
                            Currently, I am working on <a href="http://dubhacks.co/" target="_blank">DubHacks</a>. Previously, I designed experiences at <a href="https://www.amazon.com/" target="_blank">Amazon</a>.
                        </h2>
                    </div>
                </div>
                <div class="col-12 px2 fadeIn2">
                    <div class="mt3">
                        <a href="mailto:meulen@uw.edu?Subject=Hi%20Vincent!" class="btn btn-primary py1 px2">meulen@uw.edu</a>
                        <a href="getthere.php" class="btn btn-primary ml1 py1 px2">Explore my work</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="selected-projects" class="bg-section py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <h2 class="mt0 mb2">Selected Projects</h2>
                </div>

                <div class="flex flex-wrap justify-center">
                    <?php
                        $projects = file_get_contents("data/projects.json");
                        $projects = json_decode($projects, TRUE);
                    ?>

                    <?php foreach ($projects as $project) { ?>

                        <div class="col-12 sm-col-6 md-col-4 px2 mt3">
                            <a href="<?= $project["url"]; ?>" class="fadeBetween">
                                <article class="card">
                                    <div class="sixteen-by-nine">
                                        <img srcset="<?= $project["image"]; ?>" alt="<?= $project["title"]; ?>">
                                    </div>
                                    <div class="p2">
                                        <h3 class="mt0 mb1"><?= $project["title"]; ?></h3>
                                        <span class="lighten"><?= $project["period"]; ?></span>
                                        <p class="mb0">
                                            <?= $project["description"]; ?>
                                        </p>
                                    </div>
                                </article>
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>

<?php require("includes/footer.php"); ?>
