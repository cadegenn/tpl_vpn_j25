<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$category_id = "";
?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
			<?php //var_dump($item); ?>
			<?php $category_id = $item->catid; ?>
			<?php $url = parse_url($item->link);
				  //var_dump($url);
				  preg_match("/.*Itemid=([0-9]*)[&]*.*/",$url['query'],$matches);
				  //var_dump($matches);
			?>
	</li>
<?php endforeach; ?>
</ul>
<?php // on créé un lien vers la catégorie sélectionnée dans le module ?>
<a class="readmore" href="index.php?option=com_content&view=category&id=<?php echo $category_id; ?>&Itemid=<?php echo $matches[1]; ?>">En voir plus dans le blog...</a>
