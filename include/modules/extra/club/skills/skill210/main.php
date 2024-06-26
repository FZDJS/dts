<?php

namespace skill210
{
	$skill210_cd = 900;
	$skill210_act_time = 120;
	
	function init() 
	{
		define('MOD_SKILL210_INFO','club;upgrade;buffer;');
		eval(import_module('clubbase','bufficons'));
		$clubskillname[210] = '歼灭';
		$bufficons_list[210] = Array(
			'dummy' => 1,
		);
	}
	
	function acquire210(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_setvalue(210,'end_ts',1,$pa);	
		\skillbase\skill_setvalue(210,'cd_ts',0,$pa);	
	}
	
	function lost210(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked210(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return $pa['lvl']>=21;
	}
	
	function activate210()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('skill210','player','logger','sys'));
		\player\update_sdata();
		eval(import_module('skill210'));
		list($is_successful, $fail_hint) = \bufficons\bufficons_activate_buff(210, $skill210_act_time, $skill210_cd);
		if(!$is_successful) {
			$log .= $fail_hint;
			return;
		}
		addnews ( 0, 'bskill210', $name );
		$log.='<span class="lime b">技能「歼灭」发动成功。</span><br>';
	}
	
	//return 1:技能生效中 2:技能冷却中 3:技能冷却完毕 其他:不能使用这个技能
	function check_skill210_state(&$pa){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return \bufficons\bufficons_check_buff_state(210, $pa);
	}
	
	/*function get_hitrate_multiplier(&$pa,&$pd,$active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (!\skillbase\skill_query(210,$pd) || !(check_skill210_state($pd)==1) || $pd['club']!=2 || $pd['wepk']!='WK') return $chprocess($pa, $pd, $active);
		return $chprocess($pa, $pd, $active)*0.75;
	}*/
	
	function get_basic_ex_dmg(&$pa,&$pd,$active,$key)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (!\skillbase\skill_query(210,$pa) || !(check_skill210_state($pa)==1) || \weapon\get_skillkind($pa,$pd,$active) != 'wk') return $chprocess($pa, $pd, $active,$key);
		eval(import_module('ex_dmg_att'));
		$var_210=$pa['att']/$ex_wep_dmg[$key];
		if ($pa['club']!=2) $var_210=$var_210/2;
		return $var_210+$chprocess($pa,$pd,$active,$key);
	}
	
	function get_physical_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r=Array();
		eval(import_module('logger','skill210'));
		$var_210=20;
		if ($pa['card']==5) $var_210=40;
		if ((\skillbase\skill_query(210,$pa))&&(check_skill210_state($pa)==1)&&(rand(0,99)<$var_210)&&(\weapon\get_skillkind($pa,$pd,$active) == 'wk')&&($pa['club']!=2)) 
		{
			$z=2;
			if ($active)
				$log.='<span class="red b">暴击！</span><span class="lime b">「歼灭」使你造成了'.$z.'倍物理伤害！</span><br>';
			else  $log.='<span class="red b">暴击！</span><span class="lime b">「歼灭」使敌人造成了'.$z.'倍物理伤害！</span><br>';
			$r=Array($z);
		}
		return array_merge($r,$chprocess($pa,$pd,$active));
	}
	
	function get_final_dmg_multiplier(&$pa, &$pd, $active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$r=Array();
		eval(import_module('logger','skill210'));
		$var_210=20;
		if ($pa['card']==5) $var_210=40;
		if ((\skillbase\skill_query(210,$pa))&&(check_skill210_state($pa)==1)&&(rand(0,99)<$var_210)&&(\weapon\get_skillkind($pa,$pd,$active) == 'wk')&&($pa['club']==2)) 
		{
			$z=2;
			if ($active)
				$log.='<span class="red b">暴击！</span><span class="lime b">「歼灭」使你造成了'.$z.'倍最终伤害！</span><br>';
			else  $log.='<span class="red b">暴击！</span><span class="lime b">「歼灭」使敌人造成了'.$z.'倍最终伤害！</span><br>';
			$r=Array($z);
		}
		return array_merge($r,$chprocess($pa,$pd,$active));
	}
	
	function parse_news($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr = array())
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player'));
		
		if($news == 'bskill210') 
			return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"cyan b\">{$a}发动了技能<span class=\"red b\">「歼灭」</span></span></li>";
		
		return $chprocess($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr);
	}
}

?>