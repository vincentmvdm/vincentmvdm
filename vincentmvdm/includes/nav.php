        <?php if (basename($_SERVER['PHP_SELF'], '.php') !== 'index') { ?>
            <nav class="py3" id="top">
        <?php } else { ?>
            <nav class="pt3" id="top">
        <?php } ?>
                <div class="max-width-4 mx-auto">
                    <div class="flex justify-between">
                        <div class="px2">
                            <span id="vincentmvdm">
                                <a href="index.php" class="fadeBetween sm-hide md-hide lg-hide">Vincent</a>
                                <a href="index.php" class="fadeBetween xs-hide">Vincent van der Meulen</a>
                            </span>
                        </div>
                        <ul class="flex list-reset">
                            <?php if (basename($_SERVER['PHP_SELF'], '.php') !== 'index') { ?>
                                <?php if (basename($_SERVER['PHP_SELF'], '.php') === 'about') { ?>
                                    <a href="index.php#selected-work" class="fadeBetween"><li class="px2">Work</li></a>
                                <?php } else { ?>
                                    <a href="index.php#selected-work" class="fadeBetween current"><li class="px2">Work</li></a>
                                <?php } ?>
                            <?php } ?>

                            <?php if (basename($_SERVER['PHP_SELF'], '.php') === 'about') { ?>
                                <a href="about.php" class="fadeBetween current"><li class="px2">About</li></a>
                            <?php } else { ?>
                                <a href="about.php" class="fadeBetween"><li class="px2">About</li></a>
                            <?php } ?>

                            <a href="http://www.downloads.vincentmvdm.com/resume.pdf" target="_blank"><li class="px2">Resume</li></a>
                        </ul>
                    </div>
                </div>
            </nav>