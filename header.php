<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header class="gymfitnessflex-site-header">
    <div class="gymfitnessflex-container">
        <div class="gymfitnessflex-navigation-bar">
            <div class="gymfitnessflex-logo">
                <img src="<?= get_template_directory_uri(); ?>/public/img/logo.svg" alt="logo sitio" />
            </div>
            <?php 
                $args = array(
                    'theme_location' => 'gymfitnessflex_main_menu',
                    'container' => 'nav',
                    'container_class' => 'gymfitnessflex-main-menu'
                );

                wp_nav_menu($args);
            ?>
        </div>
    </div>
</header>