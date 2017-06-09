	<nav class="sub">
		<a href="./" class="moth-logo"></a>
		<?php if ($title) { echo'<span>' . $title . '</span>'; } ?>
		<?php if ($date) { echo'<span class=date>' . $date . '</span>'; } ?>
	</nav>
	<main>
		<header>
			<?php if ($title) { echo'<h1>' . $title . '</h1>'; } ?>
			<?php if ($credit) { echo'<h5>' . $credit . '</h5>'; } ?>
			<?php if ($description) { echo'<small>' . $description . '</small>'; } ?>
		</header>