<?php

namespace skill28
{
	function init() 
	{
		define('MOD_SKILL28_INFO','club;');
		eval(import_module('clubbase'));
		$clubskillname[28] = '毅重';
	}
	
	function acquire28(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function lost28(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked28(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return $pa['lvl']>=3;
	}
	
	function check_available28(&$pa){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (!\skillbase\skill_query(28, $pa) || !check_unlocked28($pa)) return false;
		$tmp_wepsk = str_replace(array('z','x'), '', $pa['wepsk']);//天然和奇迹不算属性
		return \itemmain\count_itmsk_num($tmp_wepsk)===0;
	}
	
	function get_ex_def_array(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		//if (!\skillbase\skill_query(28, $pd) || !check_unlocked28($pd)) return $chprocess($pa, $pd, $active);
		$r = $chprocess($pa, $pd, $active);
		if(check_available28($pd)) array_push($r, 'A');
		return $r;
	}
}

?>
