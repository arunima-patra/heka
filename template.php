<?php
	/**
	 * Navigation Tabs
	 */
	class NavTab {

		public $name;
		public $href;
		public $icon;

		function __construct($name, $href, $icon) {
			$this->name = $name;
			$this->href = $href;
			$this->icon = $icon;
		}
	}
	$headerNavTabs = array(
						new NavTab(
							"Cart",
							"cart",
							"cart-shopping"
						),
						new NavTab(
							"Notifications",
							"notifications",
							"bell"
						),
						new NavTab(
							"Profile",
							"./profile",
							"user"
						)
					);
	$bottomNavTabs = array(
						new NavTab(
							"Home",
							"./",
							"house"
						),
						new NavTab(
							"Consultation",
							"./consultation",
							"bell"
						),
						new NavTab(
							"Tests",
							"./tests",
							"microscope"
						),
						new NavTab(
							"Medicine",
							"./medicine",
							"pills"
						)
					);
	if (!isset($activeNavTabs)):
		$activeNavTabs = array();
	endif;
?>

<div class="splash">
	<img
		src="Images/logo-aru-green.png"
		class="splash-logo"
		alt="logo"
	>
</div>

<header>
	<h1>
		<img
			src="Images/logo-aru-green.png"
			class="header-logo"
		>
		<span class="header-organisation-name">
			Heka
		</span>
		<img
			src="Images/logo-rx-white.png"
			class="header-organisation-name-image"
			alt="RX"
		>
	</h1>
	<nav>
		<?php foreach ($headerNavTabs as $navTab): ?>
		<a
			href="<?php echo $navTab->href ?>"
			aria-label="<?php echo $navTab->name ?>"
			title="<?php echo $navTab->name ?>"
			<?php if (in_array($navTab->name, $activeNavTabs)): ?>
			class="active-nav-tab"
			<?php endif; ?>
		>
			<i class="fa-solid fa-<?php echo $navTab->icon ?>"></i>
			<span class="nav-name"><?php echo $navTab->name ?></span>
		</a>
		<?php endforeach; ?>
	</nav>
</header>
<nav class="bottom-nav">
	<?php foreach ($bottomNavTabs as $navTab): ?>
	<a
		href="<?php echo $navTab->href ?>"
		aria-label="<?php echo $navTab->name ?>"
		title="<?php echo $navTab->name ?>"
		<?php if (in_array($navTab->name, $activeNavTabs)): ?>
		class="active-nav-tab"
		<?php endif; ?>
	>
		<i class="fa-solid fa-<?php echo $navTab->icon ?>"></i>
		<span class="nav-name"><?php echo $navTab->name ?></span>
	</a>
	<?php endforeach; ?>
</nav>