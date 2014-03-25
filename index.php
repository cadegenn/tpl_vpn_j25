<?php
/**
 * Date         January 30, 2012
 * Copyright    Copyright (C) 2012 Lal B. Saud
 * License  GPL
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<LINK REL="SHORTCUT ICON" HREF="<?php echo $this->params->get('favicon') ?>" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/apl.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/div.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/googlemap-v3.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/img.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/text.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/widgets.css" type="text/css" />
</head>
<body>
    <?php //echo $app->getCfg('sitename');?>
    <?php // ------------------ header -------------------------- ?>
    <div id="header">
        <div id="logo">
            <?php if ($this->params->get('logoImage') != '') : ?>
                <a href="<?php echo JURI::base() ?>"><img src="<?php echo $this->params->get('logoImage') ?>" alt="logo" /></a>
            <?php endif; ?>
        </div>
        <div id="top">
            <jdoc:include type="modules" name="top" />
        </div>
    </div>
    
    <?php // --------------------- main body -------------------- ?>
    <?php if ($this->countModules('left')) : ?>
        <div id="left_sidebar">
            <jdoc:include type="modules" name="left" style="rounded" />
        </div>
    <?php endif; ?>
    <div id="main_content">
		<div style='padding: 0 0 25px 0;'>
			<jdoc:include type="module" name="breadcrumbs" />
			<div class='permalink'><jdoc:include type="modules" name="permalink" /></div>
		</div>
        <?php if ($this->countModules('user1')) : ?>
			<jdoc:include type="modules" name="user1" />
		<?php endif; ?>
        <?php if ($this->countModules('user2')) : ?>
			<div class="user2">
				<jdoc:include type="modules" name="user2" style="rounded" />
			</div>
		<?php endif; ?>
        <?php if ($this->countModules('user3')) : ?>
			<div class="user3">
				<jdoc:include type="modules" name="user3" style="rounded" />
			</div>
		<?php endif; ?>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
        <div style="clear: both;"></div>
        <?php if ($this->countModules('user4')) : ?>
			<div class="user4">
				<jdoc:include type="modules" name="user4" style="rounded" />
			</div>
		<?php endif; ?>
        <?php if ($this->countModules('user5')) : ?>
			<div class="user5">
				<jdoc:include type="modules" name="user5" style="rounded" />
			</div>
		<?php endif; ?>
        <?php if ($this->countModules('user6')) : ?>
				<jdoc:include type="modules" name="user6" />
		<?php endif; ?>
    </div>
    <?php if ($this->countModules('right')) : ?>
        <div id="right_sidebar">
             <jdoc:include type="modules" name="right" style="rounded" />
        </div>
    <?php endif; ?>
    
    <?php // ---------------------- footer ---------------------- ?>
    <div id="footer">
        <jdoc:include type="modules" name="footer" />
        <div id="syndication">
            <jdoc:include type="modules" name="syndicate" />
        </div>
    </div>
    <div id="debug">
        <jdoc:include type="modules" name="debug" />
    </div>
</body>
</html>
