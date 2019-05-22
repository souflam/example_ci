<div style='display:none'>
		<div id="rappeler">
			<div class="close"></div>
			<div class="inner">

				<div class="reponse">
					<h2><span>Votre message</span>a bien été envoyé</h2>
                    <div class="separateur"></div>
                    <p class="text_formation">
                        Nous essaierons d’y répondre dans les meilleurs délais. <br />
                        L'équipe d’<span class="gras">IPFOPS </span>
                    </p>
				</div>
				<div class="form">
					<h2><span>Laissez vos coordonnées</span>IPFOPS vous rappelle</h2>
					<div class="separateur"></div>
					<form action="<?php echo base_url(); ?>form/rappeler" id="rappler_popin" class="rappler">
						<p>
							<label for="nom">Nom *</label>
							<input type="text" name="nom">
						</p>
						<input type="hidden" name="type" value="rappeler">

						<p>
							<label for="prenom">Prénom *</label>
							<input type="text" name="prenom">
						</p>
						<p>
							<label for="prenom">Email *</label>
							<input type="text" name="email" placeholder="exemple : votre.email@exemple.com">
						</p>
						<p>
							<label for="tel">Téléphone *</label>
							<input type="text" name="tel" placeholder="exemple : 06 05 03 02 01">
						</p>
						<p>
							<label for="formation">Formation *</label>
							<select name="formation">
									<option value="">---choisissez une formation---</option>
								 	<option value="Licence Universitaire Professionnelle Gestion des services sanitaires et médico-sociaux">Licence Universitaire Professionnelle Gestion des services sanitaires et médico-sociaux</option>
						                            <option value="Licence Universitaire Professionnelle Qualité, Hygiène, Sécurité, Santé, Environnement">Licence Universitaire Professionnelle Qualité, Hygiène, Sécurité, Santé, Environnement</option>
						                            <option value="Kinésithérapeute">Kinésithérapeute</option>
						                            <option value="Sage femme">Sage femme</option>
						                            <option value="Infirmier(e) polyvalent(e)">Infirmier(e) polyvalent(e)</option>
						                            <option value="Infirmier(e) auxiliaire">Infirmier(e) auxiliaire</option>
						                            <option value="Kinésithérapie du sport">Kinésithérapie du sport</option>
						                            <option value="Délégué médical">Délégué médical</option>
							</select>
						</p>
						<p>
							<label for="horaire">Horaire souhaitée</label>
							<select name="horaire">
								<option value="">---choisissez la plage horaire souhaitée---</option>
									<option value="Entre 8h et 9h">Entre 8h et 9h</option>
									<option value="Entre 9h et 12h">Entre 9h et 12h</option>
									<option value="Entre 12h et 14h">Entre 12h et 14h</option>
									<option value=Entre 14h et 17h"">Entre 14h et 17h</option>
							</select>
						</p>
						<input type="submit" value="ENVOYER">
					</form>
				</div>
			</div>
		</div>
	</div>