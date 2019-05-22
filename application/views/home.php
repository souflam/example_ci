<div class="content">
	<div class="slider">
		<ul class="bxslider">
			<a href="http://www.ipfops.net/institut/presentation"><li>
					<img class="deskImg" src="<?php echo base_url() ?>assets/images/slide_institut_ifops.jpg" alt="institut de formation ipfops">
					<img class="mobImg" src="<?php echo base_url() ?>assets/images/640x567_institut_ipfops.jpg" alt="institut de formation ipfops">
					<div class="main">
						<div class="description">
							<div class="inner">
								<h2>IPFOPS</h2>
								<p>Depuis 2002 nous prenons<br>soin de votre avenir...</p>
							</div>
						</div>
				</li></a>
			<a href="http://www.ipfops.net/formations"><li>
					<img class="deskImg" src="<?php echo base_url() ?>assets/images/slide_nosFormations_ipfops.jpg" alt="Nos formations ipfops">
					<img class="mobImg" src="<?php echo base_url() ?>assets/images/640x567_nosFormations_ipfops.jpg" alt="Nos Formations ipfops">
					<div class="main">
						<div class="description">
							<div class="inner">
								<h2>Nos Formations</h2>
								<p>Aux professions de santé</p>
							</div>
						</div>
				</li></a>
			<li>
				<img class="deskImg" src="<?php echo base_url() ?>assets/images/slide2.jpg" alt="licences professionnelles ipfops">
				<img class="mobImg" src="<?php echo base_url() ?>assets/images/640x567_LP_ipfops.jpg" alt="licences professionnelles ipfops">

				<div class="description">
					<div class="inner">
						<h2>Licences Professionnelles d'Université</h2>
						<p>En Management de Santé</p>
					</div>
				</div>
			</li>
			<li>
				<img class="deskImg" src="<?php echo base_url() ?>assets/images/slide1.jpg" alt="convention avec UMI et ipfops">
				<img class="mobImg" src="<?php echo base_url() ?>assets/images/640x567_LP_UMI_ipfops.jpg" alt="convention avec UMI et ipfops">
				<div class="main">
					<div class="description">
						<div class="inner">
							<h2>Formation Continue</h2>
							<p>Signature de convention<br>avec l'UMI</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div><!-- fin slider -->
	<div class="formations">
		<div class="main">
			<h2 class="decouvrir">Découvrir nos formations</h2>
			<p class="proposition">Nous proposons des filières diplomantes accréditées par l'Etat et des formations continues certifiantes.</p>
			<div class="bloc_formations">
				<figure class="formation _1">
					<h2 class="red"><a href="#">Kinésithérapeute</a></h2>
					<img src="<?php echo base_url() ?>assets/images/keni.png" alt="Kinésithérapeute ipfops">
					<figcaption class="infos">
						<p>Le spécialiste de la rééducation motrice et fonctionnelle prescrite par le médecin...</p>
						<a href="<?php echo base_url(); ?>formations/kinesitherapeute" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
				<figure class="formation _2">
					<h2 class="move"><a href="#">Sage-Femme</a></h2>
					<img src="<?php echo base_url() ?>assets/images/sage_femme.png" alt="Sage-Femme ipfops">
					<figcaption class="infos">
						<p>Pour mission d'accompagner les femmes enceintes tout au long de leur grossesse...</p>
						<a href="<?php echo base_url(); ?>formations/sage_femme" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
				<figure class="formation _3">
					<h2 class="green"><a href="#">Infirmier<br/> Polyvalent</a></h2>
					<img src="<?php echo base_url() ?>assets/images/polyvalent.png" alt="Infirmier Polyvalent ipfops">
					<figcaption class="infos">
						<p>Dispense sur prescription médicale ou en fonction de son rôle propre, les soins infirmiers...</p>
						<a href="<?php echo base_url(); ?>formations/infirmier_polyvalent" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
				<figure class="formation _4">
					<h2 class="blue"><a href="#">Infirmier<br/>Auxiliaire</a></h2>
					<img src="<?php echo base_url() ?>assets/images/auxiliare.png" alt="Infirmier Auxiliaire ipfops">
					<figcaption class="infos">
						<p>Assiste l’infirmier, et est en charge du confort à la fois physique et moral du patient...</p>
						<a href="<?php echo base_url(); ?>formations/infirmier_auxiliare" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
				<figure class="formation _5">
					<h2 class="orange"><a href="#">Délégué <br /> Médical</a></h2>
					<img src="<?php echo base_url() ?>assets/images/deleguer.png" alt="Délégué Médical ipfops">
					<figcaption class="infos">
						<p>Il est le porte-parole du laboratoire pharmaceutique qui l’emploie, toujours en déplacement...</p>
						<a href="<?php echo base_url(); ?>formations/deleguer_medical" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
				<figure class="formation _6">
					<h2 class="bluee"><a href="#">Licences <br /> Professionnelles</a></h2>
					<img src="<?php echo base_url() ?>assets/images/deleguer.png" alt="Licences Professionnelles">
					<figcaption class="infos">
						<p>Il est le porte-parole du laboratoire pharmaceutique qui l’emploie, toujours en déplacement...</p>
						<a href="<?php echo base_url(); ?>formations/licence_pro" class="savois_plus">EN SAVOIR PLUS</a>
					</figcaption>
				</figure>
			</div>

			<a href="<?php echo base_url(); ?>formations" title="nos formations" class="btn-default"><span>Voir toutes nos formations</span></a>
		</div>
	</div> <!-- fin formation -->
	<div class="actualite_evenement">
		<div class="main">
			<div class="actualite">
				<div class="inner">
					<h2 class="big_title">ACTUALITés</h2>
					<div class="carousel">
						<?php foreach ($actualites as $key => $actualite): ?>
							<li>
								<!-- <?php $year = DateTime::createFromFormat('Y-m-d', $actualite->publicationDate)->format('Y'); ?>
								<?php $month = DateTime::createFromFormat('Y-m-d', $actualite->publicationDate)->format('m'); ?>
								<?php $day = DateTime::createFromFormat('Y-m-d', $actualite->publicationDate)->format('d'); ?> -->
								<!-- <div class="date">
									<span class="jour"><?php echo $day ?></span>
									<span class="mois"><?php echo utf8_encode($month) ?></span>
									<span class="anner"><?php echo $year ?></span>
								</div> -->
								<div class="bg_slide_actu">
									<img  src="<?php echo base_url() ?>assets/uploads/<?php echo $actualite->image; ?>" alt="">
								</div>
								
								<div class="content_text_slide">
									<a href="<?php echo base_url() ?>actualites/voir/<?php echo $actualite->id ?>">
										<h2 class="title"><?php echo getExcerpthome($actualite->title) ?></h2>
									</a>
									
									<p><?php echo getExcerpthome($actualite->content); ?></p>
								</div>
								
								<!-- <a href="<?php echo base_url() ?>actualites/voir/<?php echo $actualite->id ?>" class="lire_plus">LIRE L’ARTICLE</a> -->
							</li>
						<?php endforeach; ?>
					</div>
					<div class="clearfix"></div>
					<a href="<?php echo base_url() ?>actualites" class="voir_plus_tous">Voir toutes les actualités</a>
				</div>
			</div><!-- fin actualite -->
			<!-- <div class="evenement">
				<div class="inner vie_etudiant">
					<img src="<?php echo base_url() ?>assets/images/vie_etudiant.png" alt="etudiant ipfops" width="275" height="230">
					<div class="text">
						<p><a href="#">Dévouvrez la vie éstudiantine de IPFOPS</a></p>
					</div>
				</div>
			</div> --><!-- fin evenement -->
			<div class="hp_agenda">
				<h2 class="big_title">agenda</h2>
				<?php foreach($events as $event): ?>
					<?php $year = DateTime::createFromFormat('Y-m-d', $event->date_debut)->format('Y'); ?>
					<?php $month = strftime("%b", strtotime(DateTime::createFromFormat('Y-m-d', $event->date_debut)->format('Y-m-d H:i:s'))); ?>
					<?php $day = DateTime::createFromFormat('Y-m-d', $event->date_debut)->format('d'); ?>
					<a href="<?php echo base_url() ?>agenda/details/<?php echo $event->id ?>">
						<div class="one_agenda">
							<div class="hp-date-agenda">
								<span>Le <strong><?php echo $day; ?></strong><?php echo $month; ?></span>
							</div>
							<div class="hp-img-agenda">
								<img alt="agenda" src="<?php echo base_url('assets/uploads/').$event->image; ?>">
							</div>
							<div class="hp-resume-agenda">
								<h3><?php echo getExcerpthome($event->title); ?> </h3>
								<span class="linked"> voir la suite</span>
							</div>
						</div>
					</a>
				<?php endforeach; ?>

				<div class="clearfix"></div>
				<a href="<?php echo base_url() ?>agenda" class="voir_plus_tous">Voir toutes les événements</a>
			</div>

		</div>
	</div><!-- fin actualite evenemet -->
	<div class="clearfix"></div>
	<div class="partenaire">
		<div class="main">
			<div class="inner">
				<h2 class="big_title">Nos partenaires</h2>
				<div class="img_partenaire">
					<ul id="owl-example" class="owl-carousel">
						<li>
							<a href="#" class="bwWrapper">
								<img   src="<?php echo base_url() ?>assets/images/partenaire_1.png" alt="UMI">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_2.png" alt="EST Meknès">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_3.png" alt="ENSAM Meknès">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_4.png" alt="PNFK">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_5.png" alt="Societe Generale">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_6.png" alt="SIDIIEF">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_7.png" alt="Ministère santé Maroc">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_8.png" alt="ANAPEC Meknès">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_9.png" alt="Ministère Education Maroc">
							</a>
						</li>
						<li>
							<a href="#" class="bwWrapper">
								<img src="<?php echo base_url() ?>assets/images/partenaire_10.png" alt="AMEP Maroc">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

