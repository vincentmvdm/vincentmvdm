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
                                <a href="index.php#selected-projects" class="fadeBetween current"><li class="px2">Projects</li></a>
                            <?php } else { ?>
                                <a href="index.php#selected-projects" class="smooth-scroll"><li class="px2">Projects</li></a>
                            <?php } ?>
                                <a href="http://www.downloads.vincentmvdm.com/resume.pdf"><li class="px2">Resume</li></a>
                        </ul>
                    </div>
                </div>
            </nav>
