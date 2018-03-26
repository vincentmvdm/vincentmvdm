<?php
    $title = "Portfolio Vincent van der Meulen";

    require("includes/head.php"); 
    require("includes/nav.php");
    require("components/experiment.php");

    $experiments = file_get_contents("data/experiments.json");
    $experiments = array_values(json_decode($experiments, TRUE));

?>
        <section class="py4">
            <div class="max-width-4 mx-auto">
                <div class="col-12 px2">
                    <div class="max-width-measure mx-auto">
                        <h1 class="mt0">Experiments</h1>
                        <p>
                            Whenever I am not working on a clearly defined project, I try to do side projects and explore what is possible with design and code. These are some of the more interesting ones I have done over the years. To get an idea of what I am currently working on, visit my <a href="https://github.com/vincentmvdm" target="_blank" class="blue-fill">GitHub</a>.
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
                    
                    experiment($experiment["mediaType"], $experiment["media"], $experiment["title"], $experiment["subtitle"], $experiment["tools"], $experiment["description"], $experiment["content"], $experiment["period"], $isLast);
                }
            ?>
        </section>

<?php require("includes/footer.php"); ?>
