<?php

namespace item_uvo_extra
{
	//允许卡牌包额外功能的模式，暂时仅有肉鸽模式
	$allow_uvo_extra_gametype = array(20);
	
	//素材卡
	$material_cards = array(1101,1102,1103,1104);
	
	function init()
	{
	}
	
	//记录获得的卡片，$get_cards可为单个卡片id或卡片id数组，$tmp为0表示暂存的卡片，为1表示已使用过的卡片
	function add_card_uvo_extra($get_cards, &$pa, $tmp = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$cards_uvo = get_cards_uvo_extra($pa, $tmp);
		if (is_array($get_cards)) $cards_uvo = array_merge($cards_uvo, $get_cards);
		else $cards_uvo[] = $get_cards;
		if ($tmp) $k = 'cards_used';
		else $k = 'cards_temp';
		\skillbase\skill_setvalue(951, $k, encode_uvo_extra($cards_uvo), $pa);
	}
	
	//移除获得的卡片，$tmp同上
	function remove_card_uvo_extra($cardid, &$pa, $tmp = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$cards_uvo = get_cards_uvo_extra($pa, $tmp);
		$key = array_search($cardid, $cards_uvo);
		if ($key !== false)
		{
			unset($cards_uvo[$key]);
			if ($tmp) $k = 'cards_used';
			else $k = 'cards_temp';
			\skillbase\skill_setvalue(951, $k, encode_uvo_extra($cards_uvo), $pa);
		}
	}
	
	//获得记录的卡片列表，$tmp同上
	function get_cards_uvo_extra(&$pa, $tmp = 0)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if ($tmp) $k = 'cards_used';
		else $k = 'cards_temp';
		return decode_uvo_extra(\skillbase\skill_getvalue(951, $k, $pa));
	}
	
	function encode_uvo_extra($arr)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return implode('_', $arr);
	}
	
	function decode_uvo_extra($str)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if(empty($str)) return Array();
		return explode('_', $str);
	}
	
	function item_uv_getcard($get_card_id, $get_cardinfo, $itm, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','item_uvo_extra','logger'));
		if (!in_array($gametype, $allow_uvo_extra_gametype)) return $chprocess($get_card_id, $get_cardinfo, $itm, $pa);
		
		//将卡片记录到技能中
		add_card_uvo_extra($get_card_id, $pa, 0);
		
		//碎闪等级和是否为新在游戏结束发卡时候再判断
		$blink = 0;
		$is_new = 0;
		
		$log .= '<span class="yellow b">你获得了卡片「'.$get_cardinfo['name'].'」！获得的卡片可在卡片列表中查看。<br>所有暂存的和已使用的卡片会在游戏结束时获得。</span><br>';
		
		addnews ( 0, 'VOgetcard', $pa['name'], $itm, $get_cardinfo['name'] );
		
		return array($blink, $is_new);
	}
	
	function act()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;	
		eval(import_module('sys'));
		if ($mode == 'command' && $command == 'card')
		{
			eval(import_module('player','logger','item_uvo_extra'));
			if (!in_array($gametype, $allow_uvo_extra_gametype))
			{
				$log .= '该游戏模式无法进行此操作。<br>';
				$mode = 'command';
				return;
			}
			$card_choice1 = (int)get_var_in_module('card_choice1', 'input');
			$card_choice2 = (int)get_var_in_module('card_choice2', 'input');
			if (!empty($card_choice1))
			{
				if ($card_choice2 == -1)
				{
					use_card_uvo_extra($card_choice1, $sdata);
					$mode = 'command';
					return;
				}
				elseif ($card_choice2 > 0)
				{
					mix_cards_uvo_extra($card_choice1, $card_choice2, $sdata);
				}
				else
				{
					$log .= '参数不合法。<br>';
				}
			}
			include template(MOD_ITEM_UVO_EXTRA_UVO_EXTRA_USE);
			$cmd = ob_get_contents();
			ob_clean();
			return;
		}
		$chprocess();
	}
	
	//使用暂存的卡片
	function use_card_uvo_extra($cardid, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('logger'));
		$cards_uvo = get_cards_uvo_extra($pa);
		if (!in_array($cardid, $cards_uvo))
		{
			$log .= '输入卡片参数错误。<br>';
			return;
		}
		eval(import_module('cardbase'));
		if (in_array($cardid, $material_cards))
		{
			$log .= '素材卡不能使用。<br>';
			return;
		}
		//待完成
		
		remove_card_uvo_extra($cardid, $pa, 0);
		add_card_uvo_extra($cardid, $pa, 1);
	}
	
	//合成暂存的卡片
	function mix_cards_uvo_extra($cardid1, $cardid2, &$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;	
		eval(import_module('logger'));
		$cards_uvo = get_cards_uvo_extra($pa);
		if (!in_array($cardid1, $cards_uvo) || !in_array($cardid2, $cards_uvo))
		{
			$log .= '输入卡片参数错误。<br>';
			return;
		}
		if ($cardid1 == $cardid2)
		{
			$card_counts = array_count_values($cards_uvo);
			if (!isset($card_counts[$cardid1]) || $card_counts[$cardid1] < 2)
			{
				$log .= '输入卡片参数错误。<br>';
				return;
			}
		}
		eval(import_module('cardbase','item_uvo_extra'));
		$rare1 = $cards[$cardid1]['rare'];
		$rare2 = $cards[$cardid2]['rare'];
		
		//素材卡特判
		$skip_flag = 0;
		if (in_array($cardid1,$material_cards) && in_array($cardid2,$material_cards))
		{
			$log .= '一次只能使用一张素材卡。<br>';
			return;
		}
		if (in_array($cardid1,$material_cards)) $mcardpos = 1;
		elseif (in_array($cardid2,$material_cards)) $mcardpos = 2;
		if (!empty($mcardpos))
		{
			$mcardid = ${'cardid'.$mcardpos};
			if ($mcardid == 1101)
			{
				$rare = 'C';
				$skip_flag = 1;
			}
			elseif ($mcardid == 1103)
			{
				if ($mcardpos == 1) $rare1 = $rare2;
				else $rare2 = $rare1;
			}
			elseif ($mcardid == 1104)
			{
				$pack = 'Ranmen';
			}
		}
		//丑陋但有效
		if (!$skip_flag)
		{
			if ($rare1 == $rare2)
			{
				if ($rare1 == 'A') $rare = 'S';
				elseif ($rare1 == 'B') $rare = 'A';
				elseif ($rare1 == 'C') $rare = 'B';
				elseif ($rare1 == 'M') $rare = 'S';
			}
			elseif ($rare1 == 'M') $rare = $rare2;
			elseif ($rare2 == 'M') $rare = $rare1;
			elseif (($rare1 == 'S' && $rare2 == 'A') || ($rare1 == 'A' && $rare2 == 'S')) $rare = 'S';
			elseif (($rare1 == 'A' && $rare2 == 'B') || ($rare1 == 'B' && $rare2 == 'A')) $rare = 'A';
			elseif (($rare1 == 'B' && $rare2 == 'C') || ($rare1 == 'C' && $rare2 == 'B')) $rare = 'B';
		}
		if (empty($rare))
		{
			$log .= '这两张卡不能合成。<br>';
			return;
		}
		if (!empty($pack))
		{
			do{
				$get_card_id = array_randompick($cardindex[$rare]);
			}while($cards[$get_card_id]['pack'] !== $pack);
		}
		else $get_card_id = array_randompick($cardindex[$rare]);
		
		remove_card_uvo_extra($cardid1, $pa, 0);
		remove_card_uvo_extra($cardid2, $pa, 0);
		add_card_uvo_extra($get_card_id, $pa, 0);
		$blink = 0;
		$is_new = 0;
		$log .= '<span class="yellow b">你用「'.$cards[$cardid1]['name'].'」和「'.$cards[$cardid2]['name'].'」合成了卡片「'.$cards[$get_card_id]['name'].'」！</span><br>';
		
		ob_clean();
		include template('MOD_CARDBASE_CARDFLIP_RESULT');
		$log .= ob_get_contents();
		ob_clean();
	}
	
	//游戏结束时获得暂存的和已使用的卡片
	function gameover_set_credits()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess();
		eval(import_module('sys','item_uvo_extra'));
		if(!in_array($gametype, $allow_uvo_extra_gametype)) return;
		if(empty($gameover_plist)) return;
		foreach($gameover_plist as $key => $pa)
		{
			$pa_cards = array_merge(get_cards_uvo_extra($pa), get_cards_uvo_extra($pa, 1));
			if (!empty($pa_cards))
			{
				eval(import_module('cardbase'));
				foreach ($pa_cards as $get_card_id)
				{
					if($room_prefix) {
						$ext = '来自'.$gtinfo[$gametype].'的卡片奖励。';
					}else{
						$ext = '来自第'.$gamenum.'局的卡片奖励。';
					}
					if($cards[$get_card_id]['rare'] == 'A') $ext.='运气不错！';
					elseif($cards[$get_card_id]['rare'] == 'S') $ext.='一定是欧洲人吧！';
					$blink = \cardbase\get_card_calc_blink($get_card_id, $pa);
					$is_new = \cardbase\get_card_message($get_card_id,$ext,$blink);
				}
			}
		}
	}
	
	//杀人夺卡
	function player_kill_enemy(&$pa,&$pd,$active)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($pa,$pd,$active);
		eval(import_module('sys','item_uvo_extra'));
		if (in_array($gametype, $allow_uvo_extra_gametype))
		{
			$pd_cards = get_cards_uvo_extra($pd);
			if (!empty($pd_cards))
			{
				eval(import_module('logger'));
				$log .= "<span class=\"yellow b\">物尽其用！你夺走了对方所有未使用的卡片。</span><br>";
				add_card_uvo_extra($pd_cards, $pa);
			}
		}
	}
	
}

?>
