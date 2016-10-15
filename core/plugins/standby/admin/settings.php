<?php
/**
 * Set the pluggin
 *
 * @since 1.0
 */

add_action('admin_menu', 'stand_by_add_menu_page', 999);

function stand_by_add_menu_page () {
	add_options_page(
		//título que aparece en la página de opciones
			__('Stand By plugin opciones','standby-lacueva'),
		//texto que aparece en el link principal del menú
			__('StandBy-settings','standby-lacueva'),
		//permisos del usuario
			'manage_options',
		//string que identifica el menu internamente
			'standby_settings',
		//funcion que imprime html
			'stand_by_menu_page'
		);
}

function stand_by_menu_page () {
	?>
	<div class="lqva-sb-wrap">
		<h1><?php _e('Stand By - configuración', 'standby-lacueva'); ?></h1>

		<form action="options.php" method="POST">
			<?php  
			//imprime html necesario para las validaciones
				settings_fields( 'standby_settings_group' );
			?>
			<?php  
			//imprime la seccion html del plugin y los campos asociados
				do_settings_sections('standby_settings');
			?>
			<?php  
			//imprime el botón de confirmacion
				submit_button();
			?>
		</form>
	</div>

	<?php
}

add_action( 'admin_init', 'standby_settings_api_init' );

function standby_settings_api_init () {
	//registramos la seccion
	add_settings_section(
			//tag 'id' de la seccion
			'standby-settings-section',
			//título de la seccion
			__('Stand by opciones', 'standby-lacueva'),
			//funcion que imprime el html de la seccion
			'standby_settings_section_callback_html',
			//slug del menu donde aparece la seccion
			'standby_settings'
		);

	//registramos un campo asociado a esta seccion de arriba
	add_settings_field (
			//texto del tag 'id' del campo
			'standby-settings-section-field',
			//título del campo
			__('Datos de contacto', 'standby-lacueva'),
			//funcion que imprime el html del input
			'standby_settings_field_callback_html_contacto',
			//slug del menu donde debe aparecer
			'standby_settings',
			//id de la seccion que pertenece
			'standby-settings-section'
		);
//registramos un campo asociado a esta seccion de arriba
	add_settings_field (
			//texto del tag 'id' del campo
			'standby-settings-section-field-imagen',
			//título del campo
			__('Imagen de fondo', 'standby-lacueva'),
			//funcion que imprime el html del input
			'standby_settings_field_callback_html_image',
			//slug del menu donde debe aparecer
			'standby_settings',
			//id de la seccion que pertenece
			'standby-settings-section'
		);


	//registramos un campo asociado a esta seccion de arriba
	add_settings_field (
			//texto del tag 'id' del campo
			'standby-settings-section-field-redes',
			//título del campo
			__('Redes sociales', 'standby-lacueva'),
			//funcion que imprime el html del input
			'standby_settings_field_callback_html_redes',
			//slug del menu donde debe aparecer
			'standby_settings',
			//id de la seccion que pertenece
			'standby-settings-section'
		);

	register_setting(
			//palabra clave igual que se uso en setting fields
			'standby_settings_group',
			//nombre de nuestra opcion dentro de la options API
			'standby_settings'
			//funcion que sanitiza las entradas
			//'standby_sanitize'
		);
}

//callback para la seccion
function standby_settings_section_callback_html () {
	_e('Configurar los datos de Stand By aquí', 'standby-lacueva');
}

//callback para el campo, solo input y label, seccion contacto
function standby_settings_field_callback_html_contacto () {
	$standbySettings = get_option('standby_settings');
	$telContact = $standbySettings['standby_tel_contact'];
	$emailContact = $standbySettings['standby_email_contact'];
	
	
	?>
	<div class="lqva-sb-wrap-inputs">
		<label for="tel-contact"><?php _e('Teléfono de contacto', 'standby-lacueva'); ?></label>
		<input id="tel-contact" name="standby_settings[standby_tel_contact]" type="number" value="<?php echo $telContact; ?>">
		<label for="email-contact"><?php _e('Email de contacto', 'standby-lacueva'); ?></label>
		<input id="email-contact" name="standby_settings[standby_email_contact]" type="email" value="<?php echo $emailContact; ?>">
	</div>
	
<?php
}

//callback para el campo, solo input y label, seccion contacto
function standby_settings_field_callback_html_image() {
	$standbySettings = get_option('standby_settings');
	$imgBackground = $standbySettings['standby_img_background'];

?>

	<!-- redes sociales -->
	<div class="lqva-sb-wrap-img">
		
<label for="upload-image"><?php _e('Si se deja en blanco carga la imagen por defecto', 'standby-lacueva'); ?></label>
<input id="upload-image" type="text" name="standby_settings[standby_img_background]" value="<?php echo $imgBackground; ?>" />

<input id="upload-image-button" type="button" value="<?php _e('Subir imagen', 'standby-lacueva'); ?>" />


	</div>

<?php
}


//callback para el campo, solo input y label, seccion redes
function standby_settings_field_callback_html_redes () {
	$standbySettings = get_option('standby_settings');
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

		<!-- redes sociales -->
		<div class="lqva-sb-wrap-inputs">
			<label for="skype-contact"><?php _e('Skype', 'standby-lacueva'); ?></label>
			<input id="skype-contact" name="standby_settings[standby_skype]" type="text" value="<?php echo $skypeSB; ?>">

			<label for="facebook-contact"><?php _e('Facebook', 'standby-lacueva'); ?></label>
			<input id="facebook-contact" name="standby_settings[standby_facebook]" type="url" value="<?php echo $facebookSB; ?>">

			<label for="twitter-contact"><?php _e('Twitter', 'standby-lacueva'); ?></label>
			<input id="twitter-contact" name="standby_settings[standby_twitter]" type="url" value="<?php echo $twitterSB; ?>">

			<label for="googleplus-contact"><?php _e('Google Plus', 'standby-lacueva'); ?></label>
			<input id="googleplus-contact" name="standby_settings[standby_googleplus]" type="url" value="<?php echo $googlePlusSB; ?>">

			<label for="linkedin-contact"><?php _e('Linkedin', 'standby-lacueva'); ?></label>
			<input id="linkedin-contact" name="standby_settings[standby_linkedin]" type="url" value="<?php echo $linkedinSB; ?>">

			<label for="github-contact"><?php _e('GitHub', 'standby-lacueva'); ?></label>
			<input id="github-contact" name="standby_settings[standby_github]" type="url" value="<?php echo $githubSB ; ?>">

			<label for="pinterest-contact"><?php _e('Pinterest', 'standby-lacueva'); ?></label>
			<input id="pinterest-contact" name="standby_settings[standby_pinterest]" type="url" value="<?php echo $pinterestSB; ?>">

			<label for="behance-contact"><?php _e('Behance', 'standby-lacueva'); ?></label>
			<input id="behance-contact" name="standby_settings[standby_behance]" type="url" value="<?php echo $behanceSB; ?>">

			<label for="snapchat-contact"><?php _e('Snapchat', 'standby-lacueva'); ?></label>
			<input id="snapchat-contact" name="standby_settings[standby_snapchat]" type="url" value="<?php echo $snapchatSB; ?>">

			<label for="instagram-contact"><?php _e('Instagram', 'standby-lacueva'); ?></label>
			<input id="instagram-contact" name="standby_settings[standby_instagram]" type="url" value="<?php echo $instagramSB; ?>">
		</div>
	<?php
}


//funcion de sanitizacion para el campo de arriba
//function standby_sanitize ( $data ) {}


//agrego stylos y script:
function load_standby_wp_admin_script() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('standby-admin-script', plugin_dir_url( __FILE__ ) .'assets/js/standby-admin-script.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('standby-admin-script');
} 


function load_standby_wp_admin_style() {
        wp_register_style( 'standby_wp_admin_css', plugin_dir_url( __FILE__ ) .'assets/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style('thickbox');
        wp_enqueue_style( 'standby_wp_admin_css' );

}

add_action( 'admin_enqueue_scripts', 'load_standby_wp_admin_style' );
add_action( 'admin_enqueue_scripts', 'load_standby_wp_admin_script' );