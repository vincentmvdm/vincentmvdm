<?php $title = "Portfolio Vincent van der Meulen"; ?>

<?php require("includes/head.php"); ?>
<?php require("includes/nav.php"); ?>

        <section id="introduction">
            <div class="max-width-4 mx-auto h-100">
                <div class="flex items-center h-100">
                    <div class="col-10 px2">
                        <h1 class="my0">
                            I am a product designer from the Netherlands studying Human Computer Interaction at the University of Washington.
                        </h1>
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
