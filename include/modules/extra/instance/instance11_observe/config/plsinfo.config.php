<?php

namespace instance11
{
	//地点数据，地点编号 => 地点名
	$plsinfo11 = Array(
		101 => '作战会议室',
		102 => '蓝凝的卧室',
		103 => '蓝凝的展示室',
		104 => '洗手间',
	);

	$xyinfo11 = Array(
		101 => 'B-2',
		102 => 'A-1',
		103 => 'C-3',
		104 => 'C-2',
	);

	$areainfo11 = Array(
		101 => "这是一个用旧车间改造而成的小型会议室。<br>简洁现代的桌椅似乎在竭力装作一副严肃的模样，但四周墙上贴满了的各种二次元海报让它们的努力都化为了泡影。<br>见到此情此景你不仅再一次小声嘀咕：<span class=\"b\">我是来开会的，这些人要干什么？</span><br>另外，<span class=\"yellow b\">墙角还有一台商品琳琅满目的自动售货机，可以用来购买道具。</span><br>",
		102 => "鲜红色、粉红色、朱红色、棕红色……<br>和其人的印象色截然不同，蓝凝的这间卧室完全是一片红颜色的海洋。<br>很难把这些粉红色的蓬松被褥和可可爱爱的抱枕同「红杀精英」、「时空特使」这样的字眼联系到一起。<br>",
		103 => "这里摆满了蓝凝的个人收藏。<br><span class='cyan b'>“这些都是我的宝贝，可不准乱碰！”</span><br>甚至还有一个其本人的高仿幻影在守卫着这里……<br>",
		104 => "一个狭小但是干净的卫生间。<br>值得注意的是那个大得足以容纳得下一个人的马桶。<br>美少女显然是不需要如厕的，这个东西是用来干什么的呢？<br>",
	);

	eval(import_module('map'));

	if(!empty($xyinfo)) {
		$xyinfo += $xyinfo11;
		$areainfo += $areainfo11;
	}
}

?>