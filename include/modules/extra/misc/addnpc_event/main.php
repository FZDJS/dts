<?php

namespace addnpc_event
{
	function init() {}
	
	//ɱ��NPCʱ�����NPC������������������������ʼ�ж������Ƿ�û�л��ŵ�NPC��
	function player_kill_enemy(&$pa,&$pd,$active){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($pa, $pd, $active);		
		eval(import_module('sys','gameflow_combo'));
		if ( $pd['type'] && $pd['hp'] <= 0 && $deathnum > $combonum)
		{
			$pdpid = $pd['pid'];
			$result = $db->query("SELECT pid FROM {$tablepre}players WHERE pid != '{$pdpid}' AND type > 0 AND hp > 0");
			if(!$db->num_rows($result)){
				addnpc_event(42);
			}
		}
	}
	
	function addnpc_event($ntype, $nsub=0, $num=1){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\addnpc\addnpc($ntype,$nsub,$num,1);
	}
}
?>