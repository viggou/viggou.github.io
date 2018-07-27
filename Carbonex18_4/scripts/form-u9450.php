<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envoi de Contact Form',
	'heading' => 'Envoi du nouveau formulaire',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Coché',
		'checkbox_unchecked' => 'Non coché',
		'submitted_from' => 'Formulaire envoyé depuis le site web :%s',
		'submitted_by' => 'Adresse IP du visiteur :%s',
		'too_many_submissions' => 'Trop d\'envois effectués récemment à partir de cette adresse IP',
		'failed_to_send_email' => 'Echec de l\'envoi du courrier électronique',
		'invalid_reCAPTCHA_private_key' => 'Clé privée reCAPTCHA non valide',
		'invalid_reCAPTCHA2_private_key' => 'Clé privée reCAPTCHA 2.0 non valide.',
		'invalid_reCAPTCHA2_server_response' => 'Réponse du serveur à l\'outil reCAPTCHA 2.0 non valide.',
		'invalid_field_type' => 'Type de champ inconnu « %s »',
		'invalid_form_config' => 'Le champ « %s » a une configuration non valide.',
		'unknown_method' => 'Méthode de requête inconnue du serveur'
	),
	'email' => array(
		'from' => 'form@carbonex.fr',
		'to' => 'form@carbonex.fr'
	),
	'fields' => array(
		'custom_U9481' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Votre nom',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Votre nom » est obligatoire.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Votre adresse email',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Votre adresse email » est obligatoire.',
				'format' => 'Le champ « Votre adresse email » contient une adresse électronique non valide.'
			)
		),
		'custom_U9476' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Votre société',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Votre société » est obligatoire.'
			)
		),
		'custom_U9458' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Message » est obligatoire.'
			)
		),
		'custom_U9451' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Numéro de téléphone',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Numéro de téléphone » est obligatoire.'
			)
		)
	)
);

process_form($form);
?>
