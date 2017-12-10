<?php

namespace skill300
{
	//旧成就精力所限，未全部修改，请以skill327以后的成就为模板！
	$ach300_name = array(
		0=>'及时补给',
		1=>'衣食无忧',
		2=>'奥义很爽',
	);
	
	function init() 
	{
		define('MOD_SKILL300_INFO','achievement;');
		define('MOD_SKILL300_ACHIEVEMENT_ID','0');
	}
	
	function acquire300(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_setvalue(300,'cnt','0',$pa);
	}
	
	function lost300(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function finalize300(&$pa, $data)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if ($data=='')					
			$x=0;						
		else $x=$data;
		$ox=$x;
		$x+=\skillbase\skill_getvalue(300,'cnt',$pa);		
		$x=min($x,(1<<30)-1);
		
		if (($ox<32767)&&($x>=32767)){
			\cardbase\get_qiegao(200,$pa);
		}
		if (($ox<142857)&&($x>=142857)){
			\cardbase\get_qiegao(300,$pa);
		}
		if (($ox<999983)&&($x>=999983)){
			\cardbase\get_qiegao(500,$pa);
			\cardbase\get_card(86,$pa);
		}
		
		return $x;
	}
	
	/*function edible_recover($itm, $hpup, $spup)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(300))
		{
			$x=(int)\skillbase\skill_getvalue(300,'cnt');
			$x+=$hpup+$spup;
			\skillbase\skill_setvalue(300,'cnt',$x);
		}
		$chprocess($itm,$hpup,$spup);
	}*/
	
	function get_edible_spup(&$theitem)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(300))
		{
			$x=(int)\skillbase\skill_getvalue(300,'cnt');
			$x+=$theitem['itme'];
			\skillbase\skill_setvalue(300,'cnt',$x);
		}
		return $chprocess($theitem);
	}
	
	function get_edible_hpup(&$theitem)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (\skillbase\skill_query(300))
		{
			$x=(int)\skillbase\skill_getvalue(300,'cnt');
			$x+=$theitem['itme'];
			\skillbase\skill_setvalue(300,'cnt',$x);
		}
		return $chprocess($theitem);
	}

	function show_achievement300($data)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if ($data=='')
			$p300=0;
		else	$p300=$data;	
		$c300=0;
		if ($p300>=999983){
			$c300=999;
		}else if ($p300>=142857){
			$c300=2;
		}else if ($p300>=32767){
			$c300=1;
		}
		include template('MOD_SKILL300_DESC');
	}
}

?>
