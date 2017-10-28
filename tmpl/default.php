<?php
/**
 * @copyright	Copyright (c) 2017 Ponto Mega (https://www.pontomega.com.br). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('script', 'mod_pmsocialnetworks/script.js', array(), true);
JHtml::_('stylesheet', 'mod_pmsocialnetworks/style.css', array(), true);
$social_links = $params->get('social_links');
?>
<ul class="social_links">
<?php foreach ( $social_links as $k=>$social_link) :?>
<li class="social_link"><a href="<?php echo $social_link->link;?>" target="_blank" class="sb <?php echo $social_link->social_icon;?> default"><i class="fa fa-<?php echo $social_link->social_icon;?>"></i></a></li>
<?php endforeach;?>
</ul>
