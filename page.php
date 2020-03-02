<?php
    get_header(); ?>

    <?php
    while(have_posts()){
        the_post(); ?>
        
<header class="site-header">
    <div class="container" id="">
    <h1 class="school-logo-text float-left"><a href="<?php echo site_url('') ?>"><strong>Kannon</strong> Education</a></h1>
    <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
    <div class="site-header__menu group">
        <nav class="main-navigation">
        <ul>
            <li class="current-menu-item"><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li><a href="#">Cards</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
        </nav>
        <div class="site-header__util">
        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
    </div>
    </div>
</header>

    <div class="page-banner" >
    <div class="page-banner__bg-image"  style="background-image: url(<?php echo get_theme_file_uri('images/background.png') ?>);"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
        <p>REPLACE this later</p>
    </div>
    </div>  
</div>

    <div class="container container--narrow page-section">

<?php 
    $theParent = wp_get_post_parent_id(get_the_ID());
    if($theParent){ ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
    <i class="fa fa-home" aria-hidden="true"></i>
    Back to <?php echo get_the_title($theParent); ?></a>
    <span class="metabox__main"><?php the_title();  ?></span></p>
    </div>
    <?php }
?>

<?php
$testArray = get_pages(array(
    'child_of' => get_the_ID()
));

if($theParent or $testArray){ ?>
    <div class="page-links">
        <h2 class="page-links__title">
            <a href="<?php echo get_permalink($theParent); ?> "><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
            <?php 
            if($theParent){
                $findChildrenOf= $theParent;
            } else {
                $findChildrenOf= get_the_ID();
            }
            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
                'sort_column' => 'menu_order'
            ));
            ?>
        </ul>
    </div>
<?php }  ?>
    <div class="generic-content">
        <?php the_content();  ?>
    </div>

    </div>


    <?php }
    get_footer();
?>