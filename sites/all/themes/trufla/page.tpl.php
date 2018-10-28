<section class="intro" id="zen-intro">
    <!-- header -->
    <header role="banner" >
        <?php if ($site_name): ?>
            <h1><?php print $site_name; ?></h1>
            <h2>The Beauty of <abbr title="Cascading Style Sheets">CSS</abbr> Design</h2>
        <?php endif; ?>

        <?php if ($page['header']) : ?>
            <?php print render($page['header']); ?>
        <?php endif; ?>
    </header>
    <!-- EOF: #header --> 
</section>

<div class="main supporting" id="zen-supporting" role="main">
    <!-- #main -->
    <!-- EOF:#content-wrapper -->
    <div id="content-wrapper" class="intro">
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>

    </div>
    <!-- EOF:#content-wrapper -->
    <?php if ($page['bottom_content']): ?>
        <!-- #bottom-content -->
        <div id="bottom-content">
            <?php print render($page['bottom_content']); ?>
        </div>
        <!-- EOF: #bottom-content -->
    <?php endif; ?>
    <footer>
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
    </footer>
    <!-- EOF:#footer -->
</div>
<?php if ($page['sidebar_second']): ?>
    <aside>
        <!--#sidebar-second-->
        <section class="sidebar" role="complementary">
            <div class="wrapper">
                <div class="design-archives" id="design-archives">
                    <h3 class="archives">Archives:</h3>
                    <nav role="navigation">
                        <ul>
                            <li class="next">
                                <a href="/214/page1">
                                    Next Designs <span class="indicator">&rsaquo;</span>
                                </a>
                            </li>
                            <li class="viewall">
                                <a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden.">
                                    View All Designs							</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <?php print render($page['sidebar_second']); ?>
            </div>
        </section>
        <!--EOF:#sidebar-second-->
    </aside>
<?php endif; ?>

