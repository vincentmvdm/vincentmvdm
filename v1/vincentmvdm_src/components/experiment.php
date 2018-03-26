<?php
    function experiment($mediaType, $media, $title, $subtitle, $tools, $description, $content, $period, $isLast) {
        ?>
            <div class="py4">
                <div class="max-width-4 mx-auto">
                    <div class="col-12 px2">
                        <?php if ($mediaType === "video") { ?> 
                            <div class="max-width-3 mx-auto">
                                <div class="sixteen-by-nine">
                                    <div>
                                        <iframe src="<?= $media ?>" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        <?php } else if ($media === "tandem.png") { ?>
                            <div class="two-by-one">
                                <div>
                                    <img src="images/experiments/<?= $media ?>" alt="<?= $title ?>" style="width: 100%; height: 100%; object-fit: contain">
                                </div>
                            </div> 
                        <?php } else { ?>
                            <div class="max-width-3 mx-auto">
                                <img src="images/experiments/<?= $media ?>" alt="<?= $title ?>">
                            </div>
                        <?php } ?>

                        <div class="max-width-measure mx-auto">
                            <div class="pb1">
                                <h2 class="mb1"><?= $title ?></h2>
                                <span class="lighten mt0">
                                    <?= $subtitle ?>
                                </span>
                            </div>
                            <?php for ($i = 0; $i < count($content); $i++) { ?>
                                <p class="mt2">
                                    <?= $content[$i] ?>
                                </p>
                            <?php } ?>
                            <p class="lighten mt2 mb0 small">
                                Completed on <?= $period ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-3 mx-auto">
                        <?php if (!$isLast) { ?>
                            <hr />
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
    }
?>