<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bird_the_world
 */

$catgories = get_categories([]);

?>


<aside id="secondary" class="widget-area">
	<div class="menu-aside">
		<p class="title_aside">Danh mục</p>
		<?php

		if (is_page_template('page-search-animals.php') || is_archive()) : ?>
			<nav class="aside-menu listcate">
				<?php hierarchical_category_tree(0); ?>
			</nav>

		<?php else :
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	=> 'aside-menu',
					'link_before'	=> '<span class="iconify" data-icon="bi:arrow-left-circle" data-flip="horizontal"></span>'
				)
			);
		endif
		?>
	</div>

	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->