<?php
    $title = "Portfolio Vincent van der Meulen";

    require("includes/head.php"); 
    require("includes/nav.php");
    require("components/experiment.php");

    $experiments = file_get_contents("data/experiments.json");
    $experiments = json_decode($experiments, TRUE);
?>

        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h1 class="mt0">Experiments</h1>
                        <p>
                            Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-section">
            <?php
                for ($i = 0; $i < count($experiments); $i++) {
                    $experiment = $experiments[$i];
                    $isLast = ($i === count($experiments) - 1);

                    experiment($experiment["media"], $experiment["mediaType"], $experiment["title"], $experiment["tools"], $experiment["description"], $isLast);
                }
            ?>
        </section>

<?php require("includes/footer.php"); ?>
