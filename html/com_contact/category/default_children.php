<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$class = ' class="first"';
if (count($this->children[$this->category->id]) > 0 && $this->maxLevel != 0) :
?>
<?php foreach($this->children[$this->category->id] as $id => $child) : ?>
	<?php
	if($this->params->get('show_empty_categories') || $child->numitems || count($child->getChildren())) :
	if(!isset($this->children[$this->category->id][$id + 1]))
	{
		$class = ' class="last"';
	}
	?>
	<h2<?php echo $class; ?>>
		<?php $class = ''; ?>
			<span class="item-title"><a href="<?php echo JRoute::_(ContactHelperRoute::getCategoryRoute($child->id));?>">
				<?php echo $this->escape($child->title); ?></a>
			</span></h2>

			<?php if ($this->params->get('show_subcat_desc') == 1) :?>
			<?php if ($child->description) : ?>
				<div class="category-desc">
					<?php echo JHtml::_('content.prepare', $child->description, '', 'com_contact.category'); ?>
				</div>
			<?php endif; ?>
            <?php endif; ?>

			<?php //echo $this->loadTemplate('items'); ?>
			<?php //$model = $this->getModel(); ?>
			<?php //$item = $model->getItems() ?>
			
			<pre><?php //var_dump($model); ?></pre>
			<pre><?php //var_dump($model->getItems()); ?></pre>
			<pre><?php //var_dump($model->getItems(21)); ?></pre>
			<pre><?php //var_dump($model->getChildren()); ?></pre>
			<pre><?php //var_dump($child->id); ?></pre>
			<pre><?php //var_dump($child); ?></pre>

			<?php //echo $this->loadTemplate('subItems'); ?>
			<?php
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('*')->from('#__contact_details')->where('catid='.$child->id);
			$db->setQuery($query);
			$db->query();
			$contacts = $db->loadObjectList();

			?>
			<!--<pre><?php //var_dump($query->dump()); ?></pre>
			<pre><?php //var_dump($contacts); ?></pre>-->
			<ul>
			<?php // 1ère boucle pour afficher les liens
				foreach ($contacts as $key => $contact) : ?>
					<li><a href='<?php echo $contact->webpage; ?>' target='_blank'><?php echo $contact->name; ?></a></li>
			<?php endforeach; ?>
			</ul>
			
			<p></p>
			
			<ul class='partenaires'>
			<?php // 2ème boucle pour afficher les logos
				foreach ($contacts as $key => $contact) : ?>
					<li><a href='<?php echo $contact->webpage; ?>' target='_blank'><img src='<?php echo $contact->image; ?>' alt='logo <?php echo $contact->name; ?>'/></a></li>
			<?php endforeach; ?>
			</ul>
			
            <?php if ($this->params->get('show_cat_items') == 1) :?>
			<dl><dt>
				<?php echo JText::_('COM_CONTACT_CAT_NUM'); ?></dt>
				<dd><?php echo $child->numitems; ?></dd>
			</dl>
		<?php endif; ?>
            <?php if(count($child->getChildren()) > 0 ) :
				$this->children[$child->id] = $child->getChildren();
				$this->category = $child;
				$this->maxLevel--;
				echo $this->loadTemplate('children');
				$this->category = $child->getParent();
				$this->maxLevel++;
			endif; ?>
	<?php endif; ?>
	<?php endforeach; ?>
<?php endif;
