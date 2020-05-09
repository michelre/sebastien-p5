<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<div id="blog_presentation">

	<div id="blog_posts">
        <div id='top'></div>
		<a href="post_page.php"><div id="header_article"><div id="main_title">Mon titre d'article</div></div></a>
		<div id="article_block_one">
			<a href="post_page.php"><div id="article_first_category"><div class="category_title">Mon premier Maine Coon</div></div></a>
			<a href="post_page.php"><div id="article_second_category"><div class="category_title">Soins</div></div></a>
		</div>
		<div id="article_block_two">
			<a href="post_page.php"><div id="article_third_category"><div class="category_title">Education</div></div></a>
			<a href="post_page.php"><div id="article_fourth_category"><div class="category_title">Quotidien</div></div></a>
		</div>
	</div>	
    
	<div id="listing">

		<div id="last_publications"><div class="header_title">Articles récents</div>
			<div class="title_listing">
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
			</div>

		</div>
		<div id="popular_publications"> <div class="header_title">Articles populaires</div>
			<div class="title_listing">
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
				<div>Titre titre titre</div>
			</div>
		</div>
	</div>
	
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>