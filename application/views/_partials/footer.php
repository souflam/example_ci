<?php if(isset($admin_view) && $admin_view != null): ?>
<div class="footer">
	<div class="container">
		<p class="text-muted">&copy; <strong><?php echo date('Y'); ?></strong> All rights reserved.</p>
	</div>
</div>

<?php else: ?>
   <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 33.894082, lng: -5.544582};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcFhXfRGRIRx4PWSoP6fFR9t4cmgupWK4&callback=initMap">
</script>
<footer>
	<div class="main">
		<div class="top_footer">
			<div class="bloc">
				<h3>INSTITUT</h3>
				<ul>
					<li><a href="<?php echo base_url() ?>institut/mot_fondatrice">Mot de la fondatrice</a></li>
					<li><a href="<?php echo base_url() ?>institut/presentation">Présentation de IPFOPS</a></li>
					<li><a href="<?php echo base_url() ?>institut/nos_plus">Nos plus</a></li>
				</ul>
			</div>

			<div class="bloc">
				<h3>NOS FORMATIONS</h3>
				<ul>
					<li><a href="<?php echo base_url() ?>formations/kinesitherapeute">kinésithérapeute</a></li>
					<li><a href="<?php echo base_url() ?>formations/sage_femme">Sage-femme</a></li>
					<li><a href="<?php echo base_url() ?>formations/infirmier_polyvalen">Infirmier Polyvalent</a></li>
					<li><a href="<?php echo base_url() ?>formations/infirmier_auxiliare">Infirmier Auxiliaire</a></li>
					<li><a href="<?php echo base_url() ?>formations/kinesitherape_sport">Kinésithérapie du sport</a></li>
					<li><a href="<?php echo base_url() ?>formations/deleguer_medical">Délégué Médical</a></li>
					<li class="first-element"><a href="">Gestion des Services <br /> Sanitaires et Médico-Sociaux</a></li>
					<li><a href="<?php echo base_url() ?>formations/management_qualite">Management Qualité, Hygiène, <br />Santé,Sécurité, Environnement</a></li>


				</ul>
			</div>

			<div class="bloc">
				<h3>ADMISSION</h3>
				<ul>
					<li><a href="<?php echo base_url() ?>institut/comment_sinscrire">Comment s'inscrire</a></li>
					<li><a href="<?php echo base_url() ?>demande_information">Pré-inscription</a></li>
				</ul>
			</div>

			<div class="bloc">
				<h3>Actualités</h3>
				<ul>
					<li><a href="<?php echo base_url() ?>actualites">News</a></li>
					<li><a href="<?php echo base_url() ?>agenda">Agenda</a></li>
					<!-- <li><a href="#">Galerie photo</a></li>
                    <li><a href="#">Galerie vidéo</a></li> -->
					<!-- <li><a href="#">Nos brochures</a></li> -->
				</ul>
			</div>
			<div class="bloc suivre">
				<h3>Nous suivre</h3>
				<ul>
					<li><a href="#"><i class="fa fa-twitter fa-3"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-3"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-3"></i></a></li>
				</ul>

				<ul>
					<li><a target="_blank" href="https://www.facebook.com/Ipfops-P%C3%B4le-de-la-Formation-Continue-Mekn%C3%A8s-1451024115150099/"><i class="fa fa-facebook fa-3"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus fa-3"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube fa-3"></i></a></li>
				</ul>
			</div>

			<div id="news_letter" class="bloc newsletter">
				<h3>Newsletter</h3>
				<form class="form_label_on" method="post">
					<p>
						<label for="nom">Nom...</label>
						<input type="text" id="nom" name="nom">
					</p>
					<p>
						<label for="email">Adresse e-mail...</label>
						<input type="text" id="email" name="email">
					</p>
					<input type="submit">
					<div class="loader hide"></div>
					<p class="success hide"></p>
				</form>
			</div>
		</div><!-- fin bloc top footer -->

		<div class="middle_footer">
			<div class="logo_footer left">
				<img src="<?php echo base_url() ?>assets/images/logo_bottom.png" alt="" width="170" height="81">
			</div>
			<div class="description_footer left">
				<h3>IPFOPS</h3>
						<span>Institut de Formation
							aux Professions de
							Santé Privé</span>
				<p>L’Institut de Formations aux Professions de Santé, IPFOPS Meknès, est un établissement de formation professionnelle privée, il a été fondé en 2002 selon la loi 13.00 portant statut de la formation professionnelle privée.</p>
				<p>IPFOPS forme les kinésitherapeutes, les infirmiers polyvalents, les infirmiers auxiliaires et les sages femmes. Les formations assurées par l'IPFOPS sont sanctionnées par des diplômes reconnus et visés par l’Etat.</p>
			</div>
			<div class="adresse left">
				<p class="adresse_principale">Meknès Hamria</p>
				<p class="proche">(Derrière Lycée lalla Amina)</p>
				<p class="tel_email">
					+212 (0)5 35 52 65 87 <br />
					ipfops@ipfops.net
				</p>
			</div>
		</div><!-- fin bloc middle footer -->

		<div class="bottom_footer">
			<p class="copy_right left">© 2015 IPFOPS - Tous droits réservés</p>
			<div class="menu_bootom right">
				<ul>
					<li><a href="<?php echo base_url() ?>">Plan d’accès</a></li>
					<li><a href="<?php echo base_url() ?>contact">Contact</a></li>
					<li><a href="#"> Mentions Légales</a></li>
					<li class="last"><a href="#">Plan du site</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</div>
</body>
</html>

<?php endif; ?>