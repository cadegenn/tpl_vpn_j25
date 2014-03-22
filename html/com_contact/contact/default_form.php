<?php

 /**
 * @version		$Id: default_form.php 11845 2009-05-27 23:28:59Z robs
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<fieldset>
			<legend><?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?></legend>
			<table>				
				<tr><td><?php echo $this->form->getLabel('contact_name'); ?></td>
					<td><?php echo $this->form->getInput('contact_name'); ?></td></tr>
				<tr><td><?php echo $this->form->getLabel('contact_email'); ?></td>
					<td><?php echo $this->form->getInput('contact_email'); ?></td></tr>
				<tr><td><?php echo $this->form->getLabel('contact_subject'); ?></td>
					<td><?php echo $this->form->getInput('contact_subject'); ?></td></tr>
				<tr><td><?php echo $this->form->getLabel('contact_message'); ?></td>
					<td><?php echo $this->form->getInput('contact_message'); ?></td></tr>
				<?php //Dynamically load any additional fields from plugins. ?>
					 <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
						  <?php if ($fieldset->name != 'contact'):?>
							   <?php $fields = $this->form->getFieldset($fieldset->name);?>
							   <?php foreach($fields as $field): ?>
									<?php if ($field->hidden): ?>
										 <?php echo $field->input;?>
									<?php else:?>
										 <tr><td>
											<?php echo $field->label; ?>
											<?php if (!$field->required && $field->type != "Spacer"): ?>
											   <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
											<?php endif; ?>
										 </td>
										 <td><?php echo $field->input;?></td></tr>
									<?php endif;?>
							   <?php endforeach;?>
						  <?php endif ?>
					 <?php endforeach;?>

				<tr><td><button class="button validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</td><td>
					<?php 	if ($this->params->get('show_email_copy')){ ?>
						<span class="checkbox"><?php echo $this->form->getInput('contact_email_copy'); ?></span>
						<span><?php echo $this->form->getLabel('contact_email_copy'); ?></span>
					<?php 	} ?>
				</td></tr>
			</table>
		</fieldset>
	</form>
</div>
