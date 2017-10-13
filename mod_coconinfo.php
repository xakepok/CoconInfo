<?php
defined('_JEXEC') or die;
require_once 'helper.php';
$cocon = ModCoconinfoHelper::getCocon();
//$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_coconinfo', $params->get('layout', 'default'));
