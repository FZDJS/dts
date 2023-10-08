<?php

namespace skill567
{
	function init() 
	{
		define('MOD_SKILL567_INFO','card;');
		eval(import_module('clubbase'));
		$clubskillname[567] = '毒雾';
	}
	
	function acquire567(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function lost567(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked567(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return 1;
	}

	function itemdrop($item)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','itemmain'));			
		if(strpos($item,'itm') === 0)
		{
			$itmn = substr($item,3,1);
			$itmk = & ${'itmk'.$itmn};
			$itmsk = & ${'itmsk'.$itmn};
		}
		if (\skillbase\skill_query(567))
		{
			if (in_array($itmk[0], array('H','P')))
			{
				$itmk = substr_replace($itmk,'P',0,1);
				//check_poison_factor还有额外的log……直接判技能吧
				if(\skillbase\skill_query(220) && (int)substr($itmk,2,1) < 2) $itmk = substr_replace($itmk,$p_factor,2,1);
				$itmsk = $pid;
				eval(import_module('logger'));
				$log .= "<span class=\"purple b\">你周身散发出的毒雾渗透了丢弃的物品！</span><br>";
			}
		}
		$chprocess($item);
	}
	
	function strike_finish(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(567, $pa))
		{
			$flag = 0;
			for ($i=0; $i<=6; $i++)
			{
				if (in_array($pd['itmk'.$i][0], array('H','P')))
				{
					if (rand(0,2) < 1)
					{
						$pd['itmk'.$i][0] = 'P';
						if (\skillbase\skill_query(220, $pa) && (int)substr($pd['itmk'.$i],2,1) < 2) $pd['itmk'.$i] = substr_replace($pd['itmk'.$i],'2',2,1);
						$pd['itmsk'.$i] = $pa['pid'];
						$flag = 1;
					}
				}
			}
			if (1 === $flag)
			{
				eval(import_module('logger'));
				if ($active) $log .= "<span class=\"purple b\">你周身散发出的毒雾渗透了敌人包裹中的物品！</span><br>";
				else $log .= "<span class=\"purple b\">敌人周身散发出的毒雾渗透了你包裹中的物品！</span><br>";
			}
		}
		$chprocess($pa, $pd, $active);
	}
	
	function itemuse(&$theitem) 
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('player'));
		if (\skillbase\skill_query(567) && ($theitem['itmk'][0] === 'P') && ($pid === $theitem['itmsk']))
		{
			$theitem['itmk'][0] = 'H';
			$ret = $chprocess($theitem);
			if ($theitem['itmk'] != '') $theitem['itmk'][0] = 'P';
			return $ret;
		}
		else return $chprocess($theitem);
	}

}

?>