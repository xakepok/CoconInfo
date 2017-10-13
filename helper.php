<?php
class ModCoconinfoHelper {
	/* Запрос прав */
	static function canDo($p) {
		return JFactory::getUser()->authorise($p, 'com_railway2');
	}

	/* Инфа о коконах */
	public static function getCocon()
	{
		$db    =& JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('`dir`.`title`')
			->from('#__rw2_direction_info as `i`')
			->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `i`.`directionID`')
			->where("`i`.`cocon` = 1 AND `dir`.`active` = 1");
		$db->setQuery($query);
		$res = $db->loadObjectList();
		$result = array();
		foreach ($res as $direction)
		{
			$result[] = $direction->title;
		}
		return implode(', ', $result);
	}
}