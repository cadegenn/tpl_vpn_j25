<?php

/**
 * @version		$Id: default_address.php 21097 2011-04-07 15:38:03Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/* marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<?php if (($this->params->get('address_check') > 0) &&  ($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>
	<div class="contact-address">
	<?php if ($this->params->get('address_check') > 0) : ?>
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
			<!--<?php echo $this->params->get('marker_address'); ?>-->
                        <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/mail.png" alt="<?php echo JText::_('COM_CONTACT_ADDRESS'); ?>" />
		</div>
		<address>
	<?php endif; ?>
	<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
		<span class="contact-street">
			<?php echo nl2br($this->contact->address); ?>
		</span><br />
	<?php endif; ?>
	<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
		<span class="contact-postcode">
			<?php echo $this->contact->postcode; ?>
		</span>
	<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
		<span class="contact-suburb">
			<?php echo $this->contact->suburb; ?>
		</span>
	<?php endif; ?>
	<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
		<span class="contact-state">
			<?php echo $this->contact->state; ?>
		</span>
	<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<span class="contact-country">
			<?php echo $this->contact->country; ?>
		</span>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->params->get('address_check') > 0) : ?>
	</address>
	</div>
<?php endif; ?>

<?php if($this->params->get('show_email') || $this->params->get('show_telephone')||$this->params->get('show_fax')||$this->params->get('show_mobile')|| $this->params->get('show_webpage') ) : ?>
	<div class="contact-contactinfo">
<?php endif; ?>
<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
            <div class="contact-emailto">
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
                    <!--<?php echo $this->params->get('marker_email'); ?>-->
                    <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/email.png" alt="<?php echo JText::_('COM_CONTACT_EMAIL_LABEL'); ?>" />
		</div>
                <email>
                    <?php echo $this->contact->email_to; ?>
                </email>
            </div>
<?php endif; ?>

<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
            <div class="contact-telephone">
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
                    <!--<?php echo $this->params->get('marker_telephone'); ?>-->
                    <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/telephone.png" alt="<?php echo JText::_('COM_CONTACT_TELEPHONE'); ?>" />
		</div>
                <div class='telephone'>
			<?php echo nl2br($this->contact->telephone); ?>
                </div>
            </div>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
                    <!--<?php echo $this->params->get('marker_fax'); ?>-->
                    <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/printer.png" alt="<?php echo JText::_('COM_CONTACT_FAX'); ?>" />
		</div>
		<div class="contact-fax">
		<?php echo nl2br($this->contact->fax); ?>
		</div>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
            <div class="contact-mobile">
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
                    <!--<?php echo $this->params->get('marker_mobile'); ?>-->
                    <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/telephone.png" alt="<?php echo JText::_('COM_CONTACT_MOBILE'); ?>" />
		</div>
                <div class='telephone'>
                    <?php echo nl2br($this->contact->mobile); ?>
		</div>
            </div>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
            <div class="contact-webpage">
		<div class="<?php echo $this->params->get('marker_class'); ?>" >
                    <img src="<?php echo JURI::base(); ?>/images/apl/ico_16x16/world_go.png" alt="<?php echo JText::_('COM_CONTACT_LINKS'); ?>" />
                </div>
		<div class="webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank">
			<?php echo $this->contact->webpage; ?></a>
		</div>
            </div>
<?php endif; ?>
<?php if($this->params->get('show_email') || $this->params->get('show_telephone')||$this->params->get('show_fax')||$this->params->get('show_mobile')|| $this->params->get('show_webpage') ) : ?>
	</div>
<?php endif; ?>
