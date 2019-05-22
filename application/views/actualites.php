<div class="content formation">
	<div class="header_formation">
		<div class="top_header">
			<img class="deskImg" src="<?php echo base_url() ?>assets/images/header_actu.jpg" alt="">
			<img class="mobImg" src="<?php echo base_url() ?>assets/images/header_actu_MOB.jpg" alt="">
			<div class="main">
				<div class="text">
					<p><span>Toute l'actualité</span>de IPFOPS.</p>
				</div>
			</div>
		</div>
		<div class="bottom_header">	
				<div class="main">	
					<p>Vous êtes ici:</p>
					<ul>
						<li>accueil /</li>
						
						<li class="current">actualités</li>
					</ul>
				</div>
		</div>
	</div>
	<div class="clearfix"></div>
<div class="contenu actualite">
		<h1><span>En ce moment</span>à l’IPFOPS</h1>
		<div class="main">
			<div class="all_actu">
				<?php foreach ($actualites as $key => $actualite) { ?>
					<div class="bloc_actu">
						<a href="<?php echo base_url() ?>actualites/voir/<?php echo $actualite->id ?>">
							<img class="img-actu" src="<?php echo base_url() ?>assets/uploads/<?php echo $actualite->image; ?>" alt="">
							<div class="content_bloc_actu">
								<span><?php echo $actualite->publicationDate ?></span>
								<h2><a href="<?php echo base_url() ?>actualites/voir/<?php echo $actualite->id ?>" title=""><?php echo $actualite->title; ?></a></h2>
								<p><?php echo getExcerpt($actualite->content); ?></p>
							</div>
						</a>
					</div>
				<?php } ?>
				<div class="pagination">
					<?php echo $links; ?>
				</div>
			</div>
			</div>
			<?php require_once 'template/sidebar2.php'; ?>
			<div class="clearfix"></div>
		
		</div>
	</div>