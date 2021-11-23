<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9964610093113815" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7345627527663152" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9536360163274413" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6761673564112234" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.04810957117471104" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7589791282180229" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6935780642428402"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.09399800553064441" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6562045879605234">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22394389227243106">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5910115288090931">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9482646420833911">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.6568813089481707"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.6305985429915888"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8661943473731901"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.708859775986451"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.04150955491302488"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.2720949624196527"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.45110812618015106"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5097075350058415"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.7709027772625194"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.3602317697911315"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.031522580161136515"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8986764783739458"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.10704850660389265"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4158260333856778"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.141754905398791"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.07355873143573999"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.041252998666373664"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8285574672180149"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.2980360476642667"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
