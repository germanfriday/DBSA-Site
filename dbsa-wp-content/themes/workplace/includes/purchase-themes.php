<?php
add_action('admin_menu', 'p75_purchase_themes_menu');

function p75_purchase_themes_menu() {
  add_theme_page('More Themes by Press75.com', 'Purchase Themes', 8, 'p75_purchase_themes', 'p75_purchase_themes_options');
}

function p75_purchase_themes_options() {
?>

<style>
	.theme {width: 320px; height: 360px; float: left;}
	.screenshot { float: left; width: 320px; height: 250px; overflow: hidden;}
	.theme-title { font-size: 14px; margin: 0 0 5px 3px; }
	.description { width: 280px; margin: 0 0 0 3px; }
</style>

<div class="wrap">
<h2>More Themes by Press75.com</h2>
<p>You will find the latest themes by Press75.com below. Click any theme title for detailed information, a live demo and purchase options.</p>

<?php // Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss('http://www.press75.com/category/themes/feed/');
$maxitems = 5000;
$items = array_slice($rss->items, 0, $maxitems);
?>

<?php if (empty($items)) echo '<li>No items</li>';
else
foreach ( $items as $item ) : ?>

<div class="theme">
	<div class="screenshot">
		<?php echo $item['atom_content']; ?>
	</div>
	
	<div class="theme-title">
		<a href='<?php echo $item['link']; ?>' title='More Information'><?php echo $item['title']; ?></a>
	</div>
	
	<div class="description">
		<?php echo $item['description']; ?>
	</div>
</div>

<?php endforeach; ?>

</div>

<?php }; ?>