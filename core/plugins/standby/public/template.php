<?php 
/**
 * muestra el html.
 *
 * @since 1.0
 */

function standby_getImg_Background () {
    $standbySettings = get_option('standby_settings');
    $imgBackground = $standbySettings['standby_img_background'];
    if ( $imgBackground == '') {
        $imgBackground = plugin_dir_url( __FILE__ ) . 'assets/images/image-background-template.jpg';
        echo $imgBackground; 
    } else {
        echo $imgBackground;
    }
}
    $standbySettings = get_option('standby_settings');
    $telContact = $standbySettings['standby_tel_contact'];
    $emailContact = $standbySettings['standby_email_contact'];
    $skypeSB = $standbySettings['standby_skype'];
    $facebookSB = $standbySettings['standby_facebook'];
    $twitterSB = $standbySettings['standby_twitter'];
    $googlePlusSB = $standbySettings['standby_googleplus'];
    $linkedinSB = $standbySettings['standby_linkedin'];
    $githubSB = $standbySettings['standby_github'];
    $pinterestSB = $standbySettings['standby_pinterest'];
    $behanceSB = $standbySettings['standby_behance'];
    $snapchatSB = $standbySettings['standby_snapchat'];
    $instagramSB = $standbySettings['standby_instagram'];
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, initial-scale=1, minimum-scale=1">
	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:type" content="Stand by"/>
	<meta property="og:url" content="<?php echo site_url(); ?>"/>
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php do_action('load_custom_scripts'); ?>

</head>
<body style="background-image:url(<?php standby_getImg_Background (); ?>)">
    
    <main role="main" class="main-site">
        <div class="container">
            <div class="contenido">
                <header>
                    <h1>
                        <?php _e( 'Gracias por visitar', 'standby-lacueva' ); ?>:
                        <strong><?php bloginfo('name'); ?></strong>
                    </h1>
                </header>
                <section>
                    <p>
                        <?php _e( 'Estamos haciendo reformas en el sitio. Por favor, vuelva a entrar en un ratito.', 'standby-lacueva' ); ?>
                        <br>
                        <em>
                        <?php _e( '¡Muchas gracias!', 'standby-lacueva' ); ?>
                        </em>
                    </p>

                    <!-- si están muestra los datos de contacto -->
                    <?php if ( ! $telContact == '' || ! $emailContact == ''): ?>
                        <div class="data-contact">
                            <?php _e( 'En caso de que quiera contactarnos de inmediato:', 'standby-lacueva' ); ?>
                        
                            <ul>
                            <?php if ( ! $telContact == '' ): ?>
                                <li><strong>
                                    <?php _e( 'Llámenos al', 'standby-lacueva' ); ?>
                                    </strong>:
                                    <?php echo $telContact; ?>
                                </li>
                                <?php endif ?>
                                <?php if ( ! $emailContact == ''): ?>
                                <li><strong>
                                    <?php _e( 'Escríbenos al', 'standby-lacueva' ); ?>
                                    </strong>: 
                                        <?php echo $emailContact; ?>
                                </li>
                                <?php endif ?>
                            </ul>
                        </div>

                    <?php endif ?>

                </section>
                <footer>
                    <h4>
                        <?php _e( 'Desarrollo:', 'standby-lacueva' ); ?>
                        <a href="http://lacueva.tv" target="_blank" tittle="
                        <?php _e( 'Agencia de desarrollo web', 'standby-lacueva' ); ?>">
                        LaCueva.tv
                        </a>
                    </h4>
                </footer>
            </div>
        </div>
    </main>
    
    <?php if ( ! $telContact == '' || ! $emailContact == '' || ! $skypeSB == '' || ! $facebookSB == '' || ! $twitterSB == '' || ! $googlePlusSB == '' || ! $linkedinSB == '' || ! $githubSB == '' || ! $pinterestSB == '' || ! $behanceSB == '' || ! $snapchatSB == '' || ! $instagramSB == ''): ?>
    <footer class="main-footer">
        <div>
            <h2>
                <?php _e( 'Contacto:', 'standby-lacueva' ); ?>
            </h2>
            <ul class="contacts-types">

            <?php if ( ! $emailContact == '') : ?>

                <li><a href="mailto:<?php echo $emailContact; ?>" target="_blank" class="icon-contact icon-contact-email">
                        <span class="sr-only">Email</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $telContact == '') : ?>


                <li><a href="tel:<?php echo $telContact; ?>" target="_blank" class="icon-contact icon-contact-telephone">
                        <span class="sr-only">Teléfono</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $skypeSB == '') : ?>

                <li><a href="callto:<?php echo $skypeSB; ?>" target="_blank" class="icon-contact icon-contact-skype">
                        <span class="sr-only">Skype</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $facebookSB == '') : ?>

                <li><a href="<?php echo $facebookSB; ?>" target="_blank" class="icon-contact icon-contact-facebook">
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $twitterSB == '') : ?>

                <li><a href="<?php echo $twitterSB; ?>" target="_blank" class="icon-contact icon-contact-twitter">
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $googlePlusSB == '') : ?>

                <li><a href="<?php echo $googlePlusSB; ?>" target="_blank" class="icon-contact icon-contact-googleplus">
                        <span class="sr-only">Google +</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $linkedinSB == '') : ?>

                <li><a href="<?php echo $linkedinSB; ?>" target="_blank" class="icon-contact icon-contact-linkedin">
                        <span class="sr-only">Linkedin</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $githubSB == '') : ?>

                <li><a href="<?php echo $githubSB; ?>" target="_blank" class="icon-contact icon-contact-github">
                        <span class="sr-only">GitHub</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $pinterestSB == '') : ?>

                <li><a href="<?php echo $pinterestSB; ?>" target="_blank" class="icon-contact icon-contact-pinterest">
                        <span class="sr-only">Pinterest</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $behanceSB == '') : ?>

                <li><a href="<?php echo $behanceSB; ?>" target="_blank" class="icon-contact icon-contact-behance">
                        <span class="sr-only">Behance</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $snapchatSB == '') : ?>

                <li><a href="<?php echo $snapchatSB; ?>" target="_blank" class="icon-contact icon-contact-snapchat">
                        <span class="sr-only">Snapchat</span>
                    </a>
                </li>

                <?php endif ?>
                <?php if ( ! $instagramSB == '') : ?>

                <li><a href="<?php echo $instagramSB; ?>" target="_blank" class="icon-contact icon-contact-instagram">
                        <span class="sr-only">Instagram</span>
                    </a>
                </li>
                <?php endif ?>
            </ul>
    </footer>
    <?php endif ?>
    </div>
</body>
</html>