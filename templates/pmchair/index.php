<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.beez5
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;


JHtml::_('behavior.framework', true);

// get params
$color			= $this->params->get('templatecolor');
$logo			= $this->params->get('logo');
$navposition	= $this->params->get('navposition');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
$catid = JRequest::getInt('catid');

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript', true);
?>
<?php if(!$templateparams->get('html5', 0)): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php else: ?>
	<?php echo '<!DOCTYPE html>'; ?>
<?php endif; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>

	<body>
<div id="all">
    <div id="header">
        <h1 id="logo"></h1>
        <div id="menu"><jdoc:include type="modules" name="menu" /></div>
    </div>
    <div id="slider"><jdoc:include type="modules" name="slider" /></div>

    <?php if ($this->countModules('announcement')): ?>
    <div id="announcement"> <jdoc:include type="modules" name="announcement" /></div>
    <?php endif; ?>

    <div id="content"><jdoc:include type="component" /></div>
    <jdoc:include type="modules" name="discipliny" />
    <?php if ($this->countModules('teacherblog') and ($option=='com_content') and ($view=='article') and ($catid==8) ): ?>
    <div id="teacherblog"> <jdoc:include type="modules" name="teacherblog" /></div>
    <?php endif; ?>

</div>
	</body>
</html>
