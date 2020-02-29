<?php get_header(); ?>
<header role="banner">
        <div class="container-fluid" id="top">
            <img src="<?php echo get_theme_file_uri('/images/header.png') ?>" class="img-fluid" alt="Header image">
        </div>    
</header>
<body>
    <div class="container" id="container">
		<div class="jumbotron" id="tagline">
			<h4>An independent Scottish company dedicated to supporting students through SQA exams.</h4>
		</div>

		<div class="kannonCards"  role="article"> 
	        <div class="jumbotron"  id="dev">
                <a href="https:www.kannoncards.com" class="btn btn-outline-primary" role="button" style="width:50%"> Buy Cards </a>
	        </div>
        
        
        
<?php
    while(have_posts()){
        the_post(); ?>
        <h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php }

    get_footer();
?>