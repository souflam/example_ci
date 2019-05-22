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
						
						<li >actualités / </li>
						<li class="current"><?php echo $article->title; ?></li>
					</ul>
				</div>
		</div>
	</div>
	<div class="clearfix"></div> 
	<div class="contenu ">
	
		<div class="main">
			<div class="all_actu">
				<div class="head_actu">
					<span>partager :</span>
					<?php $url = "base_url() ?>actualites/voir/".$article->id ; ?>
					<a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url() ?>" target="_blank"></a>
					<a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url=<?=urlencode($url)?>" title=""></a>
					<a class="g_plus" href="" title=""></a>
					<a class="back" href="<?php echo base_url() ?>actualites" title="">Retour</a>
				</div>
				<div class="inside_actu">
				<h1><?php echo $article->title; ?></h1>
				<span><?php echo $article->publicationDate; ?></span>
				<img src="<?php echo base_url() ?>assets/uploads/<?php echo $article->image ?>" alt="">
				<?php echo $article->content; ?>
				</div>
			</div>
			</div>
			<?php require_once 'template/sidebar2.php'; ?>
			<div class="clearfix"></div>
		
		</div>
	</div>