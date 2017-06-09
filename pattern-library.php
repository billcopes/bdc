<?php
	// Edit these Variables to change the page header information
	$title = 'BDC Pattern Library';
	$date = 'June 6,2016';
	//$credit='Presented by Moth Design';
	//$description='UX Pattern Library and Copy Count';
?>
<?php include'inc/head.php'; //<main> start tag is inside this element ?>
<?php ?>
<body class="library">
	<?php include'inc/header.php'; //<main> start tag is inside this element ?>
		<aside class="page-nav">
			<h4>Table of Contents</h4>
			<ol class="contents">
				<li>
					<a href="#templates">Templates</a>
					<ul>
						<li><a href="#template-map">Template Map</a></li>
					</ul>
					<ol start="0">
						<li><a href="#home-page">Homepage</a></li>
						<li>
							<a href="#research">Research Landing</a>
							<ol>
								<li><a href="#focus">Focus Areas Template</a></li>
							</ol>
						</li>
						<li>
							<a href="#team">Team</a>
							<!--ol>
								<li><a href="#leader">Leadership Detail</a></li>
							</ol-->
						</li>
						<li>
							<a href="#content-landing">Content Landing</a>
							<ol>
								<li><a href="#content-article">Content Article</a></li>
							</ol>
						</li>
						<li>
							<a href="#news-events">News &amp; Events</a>
							<ol>
								<li><a href="#news-article">News Article</a></li>
								<li><a href="#event">Event Article</a></li>
							</ol>
						</li>
						<li><a href="#tools-tech">Tools &amp; Tech</a></li>
						<li><a href="#contact">Contact Us</a></li>
						<li><a href="#search">Search</a></li>
					</ol>
				</li>
				<li>
					<a href="#flex-patterns">Flexible Patterns</a>
					<ol>
						<li><a href="#photo-divider">Photography Divider</a></li>
						<li><a href="#news-spotlight">News Article Spotlight</a></li>
						<li><a href="#news-block">News Article Block</a></li>
						<li><a href="#events-block">Events Block</a></li>
						<li><a href="#engagement-block">Engagement Block</a></li>
						<li><a href="#fact-blocks">Fact Blocks</a></li>
						<li><a href="#quote">Quote</a></li>
						<li><a href="#contact-block">Contact Info Block</a></li>
						<li><a href="#linked-headline-group">Linked Headline Group</a></li>
						<li><a href="#3-column-link-group">3-column Link Group</a></li>
						<li><a href="#featured-content">Featured Content Blocks</a></li>
					</ol>
				</li>
				<li>
					<a href="#static-patterns">Static Patterns</a>
					<ol>
						<li><a href="#static-homeblock">Homepage Experience</a></li>
						<li><a href="#static-focus-entry">Focus Area Entry Block</a></li>
						<li><a href="#static-content-entry">Content Entry Block</a></li>
						<li><a href="#static-leader-block">Team Leader Block</a></li>
						<li><a href="#static-team-list">Team Card List</a></li>
						<li><a href="#static-card-list">News Card List</a></li>
						<li><a href="#static-applications">Products/Applications Card List</a></li>
						<li><a href="#static-publications">Publications List</a></li>
						<li><a href="#static-search-list">Search Result List</a></li>	
						<li><a href="#static-feature-story">Featured News Story</a></li>
						<li><a href="#static-tab-filter">Large Tab Filter</a></li>
						<li><a href="#static-news-head">News Article Header</a></li>
						<li><a href="#static-event-head">Event Header</a></li>
						<li><a href="#static-search-head">Search Header</a></li>
					</ol>
				</li>
				<li>
					<a href="#nav-patterns">Navigation Patterns</a>
					<ol>
						<li><a href="#header">Header</a></li>
						<li><a href="#footer">Footer</a></li>
						<li><a href="#herojump">Hero with Jump Links</a></li>
						<li><a href="#heroselect">Hero with Select Menu</a></li>
						<li><a href="#herolist">Hero with Link List</a></li>
						<li><a href="#stickysidebar">Sticky Sidebar</a></li>
						<li><a href="#gateway">Gateway Blocks</a></li>
					</ol>
				</li>
				<li>
					<a href="#components">Components</a>
					<ol>
						<li><a href="#"></a></li>
					</ol>
				</li>
			</ol>			
		</aside>
		
		<?php include'inc/templates.php'; ?>
		<?php include'inc/flex-patterns.php'; ?>
		<?php include'inc/static-patterns.php'; ?>
		<?php include'inc/nav-patterns.php'; ?>
		
		
		
		

		<section id="components">
			<h2>Components</h2>
		</section>
		
<?php include'inc/footer.php'; //</main> close tag is inside this element ?>