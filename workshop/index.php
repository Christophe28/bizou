<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

    <header class="header">
    <?php get_header();?>
        <a href="<?php echo home_url('/');?>">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
        </a>
    </header>
    <h1>Hello world</h1>

    <?php get_footer();?>
</body>
</html>