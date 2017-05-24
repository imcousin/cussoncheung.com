<?php 
$title = "Home";
$page = "home";
include_once('header.php'); ?>
	<main  id="content" class="site-content">
		<section data-bg-text="who I am">
			<div class="container">
			<p class="big-heading">Welcome!</p>
				<h1>Hello! I’m <strong>Cusson Cheung</strong> a BCIT graduate, Designer & Developer with over 3 years work experience.</h1>
				
				<p>Find out more <a href="./about-me.php">about me</a>.</p>
				
			</div>
		</section>
<section class="latest-work">
	<div class="container">
	<h2 class="big-heading">Get an overview <br />of my latest work</h2>
	<div class="work-wrapper">
		<div class="work">
			<a class="work_link" href="./work.php#chilliwack-garden-club">
				<h3 class="work_headline">Chilliwack Garden Club</h3>
				<div class="section__workInfo">
					<ul class="section__sublineList">
					<li class="section__sublineListItem"><span>Year.</span> 2016</li>
					<li class="section__sublineListItem"><span>Client.</span> Chilliwack Garden Club</li>
					</ul>
				</div>
			</a>
		</div>
		<div class="work">
			<a class="work_link" href="./work.php#responsive-website">
				<h3 class="work_headline">Food Responsive Website</h3>
				<div class="section__workInfo">
					<ul class="section__sublineList">
					<li class="section__sublineListItem"><span>Year.</span> 2016</li>
					<li class="section__sublineListItem"><span>Client.</span> Group Project</li>
					</ul>
				</div>
			</a>
		</div>
		<div class="work">
			<a class="work_link" href="./work.php#jquery-tutorial">
				<h3 class="work_headline">jQuery Tutorial</h3>
				<div class="section__workInfo">
					<ul class="section__sublineList">
					<li class="section__sublineListItem"><span>Year.</span> 2016</li>
					<li class="section__sublineListItem"><span>Client.</span> Personal Project</li>
					</ul>
				</div>
			</a>
		</div>
		<div class="work">
			<a class="work_link" href="./work.php#wordpress">
				<h3 class="work_headline">Wordpress</h3>
				<div class="section__workInfo">
					<ul class="section__sublineList">
					<li class="section__sublineListItem"><span>Year.</span> 2016</li>
					<li class="section__sublineListItem"><span>Client.</span> Personal Project</li>
					</ul>
				</div>
			</a>
		</div>
	</div>
	<div class="button-wrapper">
	<a href="./work.php" class="button">
		Show all Projects
		</a>
	</div><!-- button-wrapper -->
	</div>
</section>
	</main>
	<?php include_once('footer.php'); ?>