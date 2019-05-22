<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="<?php echo $base_url; ?>" />
	<meta name="google-site-verification" content="34qv-33oK6ZglpdEb_o21cz3zl3O2GE9y2DC2xs8EpA" />
	<title>IPFOPS - Institut de Formation aux Professions de Santé</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
		#map {
			width: 960px;
			height: 400px;
			background-color: grey;
		}
	</style>
	<?php if((isset($article->image_fb) && $article->image_fb) && (isset($article->titre) && $article->titre) && (isset($article->description) && $article->description) ): ?>

		<!--  Essential META Tags -->

		<meta property="og:title" content="<?php echo $article->titre; ?>">
		<meta property="og:description" content='<?php echo addslashes($article->description); ?>'>
		<meta property="og:image" content="<?php echo base_url('assets/uploads') ?><?php echo '/'.$article->image_fb; ?>">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta name="twitter:card" content="summary_large_image">


		<!--  Non-Essential, But Recommended -->

		<meta property="og:site_name" content="<?php echo $article->titre; ?>.">
		<meta name="twitter:image:alt" content="<?php echo $article->description; ?>">
	<?php endif; ?>
	<?php if((isset($agenda->image_fb) && $agenda->image_fb) && (isset($agenda->titre) && $agenda->titre) && (isset($agenda->description) && $agenda->description) ): ?>

		<!--  Essential META Tags -->

		<meta property="og:title" content="<?php echo $agenda->titre; ?>">
		<meta property="og:description" content='<?php echo addslashes($agenda->description); ?>'>
		<meta property="og:image" content="<?php echo base_url('assets/uploads') ?><?php echo '/'.$agenda->image_fb; ?>">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta name="twitter:card" content="summary_large_image">


		<!--  Non-Essential, But Recommended -->

		<meta property="og:site_name" content="<?php echo $agenda->titre; ?>.">
		<meta name="twitter:image:alt" content="<?php echo $agenda->description; ?>">
	<?php else: ?>
		<meta property="og:image" content="<?php echo base_url() ?>assets/images/logo_face.jpg">
	<?php endif; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="keywords" content="Ipfops, Maroc, Meknès, Formation, Inscription, Continue, Santé, kinésithérapie, Diplômes">
	<meta name="description" content="L'IPFOPS, organisme de Conseil et de Formation Continue met le savoir-faire de l’École IPFOPS en formation initiale des futurs Diplômés de santé.">
	<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/gif" sizes="16x16">
	<script type="text/javascript">
		baseurl = '<?php echo base_url(); ?>';
	</script>
	<?php
		foreach ($meta_data as $name => $content)
		{
			if (!empty($content))
				echo "<meta name='$name' content='$content'>".PHP_EOL;
		}

		foreach ($stylesheets as $media => $files)
		{
			foreach ($files as $file)
			{
				$url = starts_with($file, 'http') ? $file : base_url($file);
				echo "<link href='$url' rel='stylesheet' media='$media'>".PHP_EOL;	
			}
		}
		
		foreach ($scripts['head'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}
	?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $body_class; ?>">

<?php if(isset($admin_view) && $admin_view != null): ?>
<?php else : ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-86523840-1', 'auto');
	ga('send', 'pageview');

</script>
<div class="global">
	<header>
		<div class="top_header">
			<div class="main">
				<div class="left">
					<!--<ul>
						<li><a href="<?php /*echo base_url() */?>institut/presentation">Qui Sommes-nous</a></li>
						<li><a href="<?php /*echo base_url() */?>agenda">Formation Continue</a></li>
						<li><a href="<?php /*echo base_url() */?>contact">Contact</a></li>
					</ul>-->
					<ul>
						<li><a href="<?php echo base_url();?>demande_information">Inscrivez-vous maintenant</a></li>
					</ul>


				</div>

				<div class="right">
					<ul>
<!--						<li><a href="#"><i class="fa fa-phone fa-3"></i>+212 (0)5 35 52 65 87</a></li>-->
						<!--<li ><a class="last" href="#news_letter">
								<i class="fa fa-envelope-o fa-2"></i>Recevez notre newsletter</a>
						</li>-->
						<!--<li ><a class="last" href="<?php /*echo base_url() */?>contact">
								<i class="fa fa-envelope-o fa-2"></i>Contactez-nous</a>
						</li>-->

					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="bottom_header">
			<div class="main">
				<div class="logo left">
					<h1><img src="<?php echo base_url() ?>assets/images/logo.png" alt="institut ipfops"></h1>
				</div>

				<div class="right bloc_search_social">
					<!-- <div class="social">
                        <p>Suivez notre actu sur :</p>
                        <ul>
                            <li class="facebook first"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="google"><a href="#"></a></li>
                            <li class="linkden last"><a href="#"></a></li>
                        </ul>
                    </div>
                                    <div class="clearfix"></div>
                    <div class="search right">
                        <form action="">
                            <p>
                                <label for="search">Rechercher sur IPFOPS</label>
                                <input type="text" name="search">
                            </p>
                            <input type="submit" value="">
                        </form>
                    </div> -->
					<img src="<?php echo base_url() ?>assets/images/acreddite.png" alt="accredite ipfops">
					<img src="<?php echo base_url() ?>assets/images/partenaire_acad.png" alt="partenaire umi">
				</div>

			</div>
		</div>
	</header>
	<nav id="cbp-spmenu-s2" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<div class="main">
			<div class="menu-mobile contactmobile">
				<a href="<?php echo base_url() ?>demande_information">INSCRIPTIONS <br /> 2018-2019</a>
			</div>
			<div class="menu-mobile">
				<a href="<?php echo base_url() ?>agenda">Formation Continue</a>
				<div class="mini-menu">
					<p>MENU</p>
					<button class="nav-icon1" id="showRightPush">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>

			</div>

			<ul  class="menu_container ">
				<li class=" first_menu __0"><span><a  href="javascript:;">menu principal</a></span><!-- <em class="close-menu nav-icon1"> --></em></li>
				<li class="first_menu logo __1"><span><a class="no-sub" href="<?php echo base_url(); ?>"><span><img src="<?php echo base_url() ?>assets/images/picto_home.png" alt=""></span></a></span></li>
				<li class="first_menu __2"><span>
					<a href="#">Institut</a></span>
					<div class="sous_menu">
						<div class="inner">
							<h2>INSTITUT IPFOPS</h2>
							<div class="listes">
								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>institut/mot_fondatrice">Mot de la fondatrice</a></li>
									<li><a href="<?php echo base_url() ?>institut/presentation">Présentation de IPFOPS</a></li>
								</ul>

								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>institut/nos_plus">Nos plus</a></li>
								</ul>
							</div>
							<div class="picture">
								<img src="<?php echo base_url() ?>assets/images/img_sous_menu.jpg" alt="formations ipfops">
								<p>
									IPFOPS forme aux diplômes reconnus et visés par l'Etat
									et aux Licences Professionnelles d'Université en partenariant avec UMI.
								</p>
							</div>
						</div>
					</div>
				</li>
				<li class="first_menu __3">
					<span><a href="<?php echo base_url(); ?>formations">Formations <br /> initiales</a></span>
					<div class="sous_menu">
						<div class="inner">
							<h2>Formations Initiales Diplômantes</h2>
							<div class="listes">
								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/kinesitherapeute">Kinésithérapeute</a></li>
									<li><a href="<?php echo base_url() ?>formations/sage_femme">Sage-Femme</a></li>
								</ul>

								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/infirmier_polyvalent">Infirmier Polyvalent</a></li>
									<li><a href="<?php echo base_url() ?>formations/infirmier_auxiliare">Infirmier Auxiliaire</a></li>
								</ul>
							</div>
							<div class="picture">
								<img src="<?php echo base_url() ?>assets/images/img_sous_menu.jpg" alt="formations ipfops">
								<p>
									IPFOPS forme aux diplômes reconnus et visés par l'Etat
									et aux Licences Professionnelles d'Université en partenariant avec UMI.
								</p>
							</div>
						</div>
					</div>
				</li>
				<li class="first_menu __4"><span><a href="#">Formation Continue<br />ET Certifications</a></span>
					<div class="sous_menu">
						<div class="inner">
							<h2>Formation Continue et Certifications</h2>
							<div class="listes">
								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/kinesitherape_sport">Kinésithérapie du sport</a></li>
								</ul>

								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/deleguer_medical">Délégué Médical</a></li>
								</ul>
							</div>
							<div class="picture">
								<img src="<?php echo base_url() ?>assets/images/img_sous_menu.jpg" alt="">
								<p>
									IPFOPS forme aux diplômes reconnus et visés par l'Etat
									et aux Licences Professionnelles d'Université en partenariant avec UMI.
								</p>
							</div>
						</div>
					</div>
				</li>
				<li class="first_menu __5"><span><a href="#">Licences<br />Professionnelles</a></span>
					<div class="sous_menu">
						<div class="inner">
							<h2>Licences Professionnelles (LPU)</h2>
							<div class="listes">
								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/gestion_services_Sanitaires_et_medico">Gestion des Services Sanitaires et Médico-Sociaux</a></li>
								</ul>

								<ul>
									<li class="first-element"><a href="<?php echo base_url() ?>formations/management_qualite">Management Qualité, Hygiène,Santé, Sécurité, Environnement</a></li>
								</ul>
							</div>
							<div class="picture">
								<img src="<?php echo base_url() ?>assets/images/img_sous_menu.jpg" alt="formations ipfops">
								<p>
									IPFOPS forme aux diplômes reconnus et visés par l'Etat
									et aux Licences Professionnelles d'Université en partenariant avec UMI.
								</p>
							</div>
						</div>
					</div>
				</li>
				<li class="first_menu __6"><span><a class="no-sub" href="<?php echo base_url(); ?>contact">contact</a></span></li>
				<li class="first_menu __7 last" style="background: orange; margin-left: 3px;"><span><a class="no-sub" href="<?php echo base_url() ?>demande_information">INSCRIPTIONS <br /> 2018-2019</a></span></li>
<!--				<li class="last first_menu __7"><span><a href="#">Admission</a></span>
					<div class="sous_menu">
						<div class="inner">
							<h2>Se former á IPFOPS</h2>
							<div class="listes">
								<ul>
									<li class="first-element"><a href="<?php /*echo base_url() */?>institut/comment_sinscrire">Comment S’inscrire</a></li>
								</ul>

								<ul>
									<li class="first-element"><a href="<?php /*echo base_url() */?>demande_information">Demande d’information</a></li>
								</ul>
							</div>
							<div class="picture">
								<img src="<?php /*echo base_url() */?>assets/images/img_sous_menu.jpg" alt="formations ipfops">
								<p>
									IPFOPS forme aux diplômes reconnus et visés par l'Etat
									et aux Licences Professionnelles d'Université en partenariant avec UMI.
								</p>
							</div>
						</div>
					</div>
				</li>
-->				<!-- <li class="first_menu"><a href="#">Actualités</a></li>-->
				<div class="social-mobile">
					<a target="_blank" href="https://www.facebook.com/Ipfops-P%C3%B4le-de-la-Formation-Continue-Mekn%C3%A8s-1451024115150099/" title=""><img src="<?php echo base_url() ?>assets/images/fb-mobile.png" alt=""></a>
					<a href="" title=""><img src="<?php echo base_url() ?>assets/images/twitter-mobile.png" alt=""></a>
					<a href="" title=""><img src="<?php echo base_url() ?>assets/images/gplus-mobile.png" alt=""></a>
					<a href="" title=""><img src="<?php echo base_url() ?>assets/images/youtube-mobile.png" alt=""></a>
				</div>
			</ul>
		</div>
	</nav>

<?php endif; ?>