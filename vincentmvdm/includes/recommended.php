<?php
    $projects = file_get_contents("data/projects.json");
    $projects = json_decode($projects, TRUE);
    $index = -1;
    unset($projects[$page]);
    $projects = array_values($projects);
    $range = range(0, count($projects) - 1);
    shuffle($range);
?>

<section class="bg-gray py4" id="recommended">
    <div class="max-width-4 mx-auto">
        <div class="col-12 px2">
            <div class="max-width-measure mx-auto">
                <h2 class="mt0 mb2">Recommended For You</h2>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-12 sm-col-6 md-col-4 px2 mt3">
                    <a href="<?= $projects[$range[$i]]["url"]; ?>" class="fadeBetween">
                        <article class="card">
                            <div class="sixteen-by-nine">
                                <img srcset="<?= $projects[$range[$i]]["image"]; ?>" alt="placeholder">
                            </div>
                            <div class="p2">
                                <h3 class="mt0 mb1"><?= $projects[$range[$i]]["title"]; ?></h3>
                                <span class="lighten"><?= $projects[$range[$i]]["period"]; ?></span>
                                <p class="mb0">
                                    <?= $projects[$range[$i]]["description"]; ?>
                                </p>
                            </div>
                        </article>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
