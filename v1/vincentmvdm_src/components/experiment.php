<?php
    function experiment($mediaType, $media, $title, $tools, $description, $isLast) {
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
                                    One line project description
                                </span>
                            </div>
                            <p class="mt2">
                                Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            </p>
                            <p class="mb0">
                                Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!$isLast) { ?>
                <div class="max-width-4 mx-auto">
                    <div class="col-12 px2">
                        <div class="max-width-3 mx-auto">
                            <hr />
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php
    }
?>