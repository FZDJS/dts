<?php

namespace randnpc
{
	$randnpc_skills = array
	(
		//等级不完全代表强度
		1 => array('27'=>'0', '32'=>'0', '35'=>'0', '37'=>'0', '40'=>'0', '44'=>'0', '52'=>'1', '61'=>'0', '64'=>'0', '65'=>'0', '66'=>'0', '201'=>'1', '202'=>'1', '204'=>'0', '207'=>'1', '211'=>'1', '217'=>'1', '218'=>'1', '225'=>'0', '238'=>'0', '239'=>'0', '258'=>'0', '267'=>'0', '400'=>'1', '401'=>'1', '416'=>'0', '443'=>'0', '444'=>'0', '445'=>'0', '450'=>'0', '464'=>'0', '471'=>'0', '478'=>'0', '496'=>'0', '511'=>'0', '570'=>'0', '585'=>'0', '703'=>'0'),
		2 => array('35'=>'1', '44'=>'1', '50'=>'0', '52'=>'3', '54'=>'0', '65'=>'1', '202'=>'2', '201'=>'3', '207'=>'3', '209'=>'0', '211'=>'3', '217'=>'3', '218'=>'3', '221'=>'0', '239'=>'4', '243'=>'0', '245'=>'0', '258'=>'4', '263'=>'0', '267'=>'2', '268'=>'0', '273'=>'0', '400'=>'2', '401'=>'2', '403'=>'1', '404'=>'1', '409'=>'0', '410'=>'0', '411'=>'0', '416'=>'1', '441'=>'0', '442'=>'0', '448'=>'0', '452'=>'0', '463'=>'0', '465'=>'0', '466'=>'0', '467'=>'0', '468'=>'0', '469'=>'0', '473'=>'0', '481'=>'0', '482'=>'0', '485'=>'0', '488'=>'0', '489'=>'0', '491'=>'0', '558'=>'0', '705'=>'0'),
		3 => array('25'=>'0', '35'=>'2', '44'=>'2', '52'=>'6', '54'=>'1', '65'=>'2', '70'=>'0', '81'=>'0', '201'=>'6', '202'=>'3', '206'=>'0', '207'=>'6', '211'=>'6', '217'=>'6', '218'=>'6', '240'=>'0', '251'=>'0', '254'=>'0', '270'=>'0', '271'=>'0', '400'=>'3', '401'=>'3', '403'=>'2', '404'=>'2', '422'=>'0', '447'=>'0', '459'=>'0', '461'=>'0', '462'=>'0', '486'=>'0', '492'=>'0', '520'=>'0', '541'=>'0', '567'=>'0', '580'=>'0'),
		4 => array('58'=>'0', '400'=>'4', '401'=>'4', '402'=>'1', '403'=>'3', '404'=>'3', '405'=>'0', '406'=>'0', '407'=>'0', '432'=>'0', '434'=>'0', '439'=>'0', '461'=>'1', '508'=>'0', '513'=>'0', '515'=>'0', '516'=>'0', '591'=>'0'),
		5 => array('400'=>'5', '401'=>'5', '402'=>'3', '403'=>'4', '404'=>'4', '412'=>'0', '415'=>'0', '509'=>'0', '510'=>'0'),
		6 => array('400'=>'6', '401'=>'6', '402'=>'4', '403'=>'5', '404'=>'5', '507'=>'0', '514'=>'0')
	);
	
	$randnpc_itmsk = array
	(
		'W' => array(
			1 => array('z','c','z','c','u','e','i','w','p'),
			2 => array('u','e','i','w','p','N'),
			3 => array('n','y','r','d','Z'),
			4 => array('f','k','t','L','^ac1')
		),
		'D' => array(
			1 => array('U','E','I','W','q','z','c'),
			2 => array('P','K','C','G','D','F','M','H'),
			3 => array('A','a','R','m','Z'),
			4 => array('B','b','h','^wc1')
		),
		'A' => array(
			1 => array('z','c'),
			2 => array('A','a','H','M','m'),
			3 => array('n','y'),
			4 => array('B','b','h')
		),
	);
	
	$randnpc_item = array
	(
		'WP' => array(
			array('轻质球棒'),
			array('“大眼蛙”布偶'),
			array('水濑 名雪的半身像'),
			array('某种机械设备'),
			array('太阳伞'),
			array('怪蜀黍鬼作的半身像','l'),
			array('藤枝御姐的瓷半身像','g'),
			array('藤枝御姐的木制半身像','g'),
			array('藤枝御姐的水晶半身像','g'),
			array('神北 小毬的半身像'),
			array('一之濑 琴美的半身像'),
			array('SSS团长的半身像'),
			array('月宫 亚由的半身像'),
			array('神尾 观铃的半身像'),
			array('古河 渚的半身像'),
			array('枣 铃的半身像'),
			array('天泽 郁末的半身像'),
			array('长森 瑞佳的半身像'),
			array('巨大谜之石像'),
			array('萨卡斑甲鱼的标本像'),
			array('Vampire Killer'),
			array('巨大透镜'),
			array('棍棒'),
			array('小棍棒'),
			array('★好折凳★','N'),
			array('立华 奏的半身像'),
			array('钟摆'),
			array('巨大钟摆'),
			array('拖把'),
			array('人体模型'),
			array('巨大三角板'),
			array('椅子'),
			array('木质球棒'),
			array('铝球棒'),
			array('御币'),
			array('☆東方電氣笛☆','w^sv1'),
			array('御柱'),
			array('坂木老人的半身像','r'),
			array('高压线圈'),
			array('秋生大叔的球棒','zx'),
			array('『心灵激光鞭』','u'),
			array('『晴空绵羊大游行』','rdxy'),
			array('铁链'),
			array('铁棒'),
			array('钉棍棒'),
			array('☆电击器☆','e'),
			array('电击鞭','e'),
			array('原型武器P'),
			array('火腿肠'),
			array('普通的太鼓棍棒'),
			array('玄人的太鼓棍棒','N'),
			array('机械咚的机械鼓棍棒','Ndx'),
			array('达人的太鼓棍棒','Nr'),
			array('巨大路灯柱','i'),
			array('ｃ－飞拳','i'),
			array('鹿标本'),
			array('字典'),
			array('熊雕像'),
			array('女王的皮鞭','l'),
			array('铁锤'),
			array('哑铃'),
			array('钉槌'),
			array('绷带'),
			array('锁链钉槌'),
			array('阎魔像'),
			array('绿玉打狗棒'),
			array('☆拳王之拳☆'),
			array('☆红楼梦精装本☆'),
			array('☆星云锁链☆'),
			array('☆黄金神槌☆'),
			array('☆暗阎魔像☆'),
			array('肯德基爷爷','g'),
			array('麦当劳叔叔','l'),
			array('《チト的日记》'),
			array('德国BOY的键盘','er'),
			array('葱娘の葱','wr^sa1'),
			array('新华里的乱舞','cw'),
			array('吉太'),
			array('寂寞','i'),
			array('【北斗百裂拳】','r'),
			array('被遗忘的伞'),
			array('火把','u'),
			array('★少林寺十八铜人★','c'),
			array('★不朽王之槌★','d'),
			array('■翠玉白菜雕像■','p'),
			array('MIKU的小葱','^sv1^sa2'),
			array('变砖的PSP'),
			array('受王拳'),
			array('☆黄金麦克风☆','wy^sv1^sa3'),
		),
		'WK' => array(
			array('镰刀'),
			array('艾丽的镰刀'),
			array('白色的羽毛','i'),
			array('闪耀的羽毛','i'),
			array('彩虹光芒的羽毛','i'),
			array('翼人的羽毛','i'),
			array('德古拉的牙'),
			array('【纳吉尼的毒牙】','p'),
			array('电焊刀','eu'),
			array('巨大圆规'),
			array('独角虫角','p'),
			array('菜刀'),
			array('『淑女的竹刀』','Nx'),
			array('针筒'),
			array('雾岛 圣的手术刀'),
			array('巨型非战斗用光剑','zx'),
			array('『风魔激光刃』','u'),
			array('『风魔手中剑』','u'),
			array('幻之刃'),
			array('『王国之键』'),
			array('『王国之键D』'),
			array('『去往黎明』','e'),
			array('『约定守护』','r'),
			array('『地裂坚刃』','c'),
			array('『大地尽头』','c'),
			array('『寻星勇者』','d'),
			array('『英雄之证』','r'),
			array('『精灵之翼』','e'),
			array('『午夜钟声』','w'),
			array('冰封的『Oathkeeper』','u'),
			array('冰封的『Oblivion』','i'),
			array('『人心的键刃』','xNnyrd'),
			array('『χ-blade』','puk'),
			array('『虚空装备』','pt'),
			array('『无名』','f'),
			array('原型武器K'),
			array('二重战斗匕首','i'),
			array('巨大太刀','i'),
			array('断钢太刀','iy'),
			array('HB铅笔'),
			array('2H铅笔'),
			array('长刀'),
			array('刀'),
			array('笔刀'),
			array('鹤嘴锄','n'),
			array('两刃小刀'),
			array('军用小刀'),
			array('剑'),
			array('战斗小刀'),
			array('太刀'),
			array('蜻蛉切'),
			array('东洋刀'),
			array('细剑'),
			array('斧'),
			array('脅差陽光'),
			array('☆碧藍怒火☆'),
			array('☆八念丁佛团子☆'),
			array('☆平家宝刀小鸟☆'),
			array('☆柴刀☆'),
			array('☆白楼剑☆','Hy'),
			array('☆名刀压刀☆'),
			array('☆秘剑－燕返☆'),
			array('☆名刀正宗☆'),
			array('☆近景☆'),
			array('☆楼观剑☆','n'),
			array('☆草薙之剑☆','n'),
			array('★瑞士刀－真打★'),
			array('★传家宝刀★'),
			array('★古典军刀★'),
			array('★名剑－祖父★'),
			array('★和道一文字★','n'),
			array('★兽矛★'),
			array('☆神刀灭却☆','l'),
			array('☆光刀无形☆','g'),
			array('☆灵剑－荒鹰☆','l'),
			array('☆神剑白羽鸟☆','g'),
			array('容嬷嬷的针','wr'),
			array('新华里的手势','cw'),
			array('寂寞','i'),
			array('【狂暴凶刃】','r'),
			array('★电浆剑★','ey'),
			array('■隆基弩斯之枪■','cn'),
			array('■洞爷湖■','c'),
			array('■电锯■','cn'),
			array('■魔剑－雷瓦丁■','uny'),
			array('★Unlimited Blade Works★','nc'),
		),
		'WC' => array(
			array('「人造人-念力震慑者」-仮'),
			array('棒球'),
			array('雷神喵喵球','c'),
			array('罐子'),
			array('「电子龙」-仮'),
			array('★多鲁基★','c'),
			array('No.9 天盖星 戴森球 ☆9','rea^xyz9'),
			array('空瓶'),
			array('小型闹钟'),
			array('飞刀'),
			array('地板砖块'),
			array('冰冻青蛙','i'),
			array('「奥利哈刚·天神荡」-仮','z'),
			array('「骷髅指挥」-仮'),
			array('「僵尸之主」-仮'),
			array('「死灵之颜」-仮'),
			array('「吸血鬼领主」-仮'),
			array('「黄金卿 埃尔德里奇」-仮'),
			array('长矛'),
			array('岩石'),
			array('碗'),
			array('锅','G'),
			array('玻璃杯'),
			array('杯子'),
			array('电视机'),
			array('饭桌'),
			array('柜子','^st1^vol4'),
			array('沙发'),
			array('冰箱','i^st1^vol6'),
			array('强相互作用【水滴】','d'),
			array('粉笔灰','p'),
			array('黑板擦'),
			array('装有未知试剂的烧瓶','p'),
			array('《221的照片》'),
			array('《广辞苑》'),
			array('灯油','u'),
			array('蝴蝶鳞粉','p'),
			array('精灵球'),
			array('雾岛 圣的手术刀'),
			array('团子'),
			array('『心灵圣水』','u'),
			array('永恒飞刃','r'),
			array('垃圾花束'),
			array('原型武器C'),
			array('对魔物用卵石','i'),
			array('对魔物用巨大卵石','i'),
			array('「欧贝利斯克之巨神兵」-仮'),
			array('「太阳神之翼神龙」-仮'),
			array('扑克牌'),
			array('十六张台湾麻将'),
			array('高级麻将'),
			array('飞盘'),
			array('钻石'),
			array('保龄球'),
			array('☆投掷小刀☆'),
			array('☆塔罗牌☆'),
			array('☆回力镖☆'),
			array('★正宗麻将全套★'),
			array('★液晶电视★','e'),
			array('■56寸电浆电视■','e'),
			array('好人卡13连击','gr'),
			array('情人玫瑰99朵套装','gr'),
			array('结婚请柬','l'),
			array('新娘捧花','l'),
			array('鱼骨'),
			array('SGL签名CD'),
			array('新华里的投入','cw'),
			array('曾哥的签名CD','i'),
			array('春哥的签名CD','u'),
			array('寂寞','i'),
			array('幻符【杀人玩偶】','r'),
			array('毒镖','p'),
			array('夜雀歌谱'),
			array('☆山蘑菇粉☆','p'),
			array('残存的结婚喜糖-紫','f'),
			array('糖衣炮弹-紫','f'),
			array('「奥西里斯之天空龙」-仮'),
			array('■噪音手榴弹■','wd'),
			array('★Unlimited Code Works★','Nc'),
			array('风景明信片'),
			array('☆杀人扑克牌☆','r'),
			array('『藤林杏的广辞苑』'),
			array('★库洛牌★'),
			array('■木之本樱小樱牌■','d'),
			),
		'WG' => array(
			array('.357 Magnum','d'),
			array('.50 Magnum','cd'),
			array('★沙漠之鹰★','d'),
			array('贝雷塔92F手枪'),
			array('霰弹枪','do'),
			array('★RPG-7★','dyo'),
			array('★M-134 Minigun★','r'),
			array('物质湮灭炮','edo'),
			array('玩具手枪'),
			array('★P-90轻机枪★','r'),
			array('★柯尔特38口径手枪★'),
			array('★白朗宁9mm大口径手枪★'),
			array('★P230乌齐9mm冲锋枪★','r'),
			array('★柯尔特45口径自动手枪★'),
			array('★标枪反坦克导弹★','cdyo'),
			array('★M-200狙击步枪★','co'),
			array('★乙炔焊枪★','u'),
			array('老式火枪','o'),
			array('『60mm火神炮』'),
			array('『120mm火神炮』'),
			array('『环形激光』','uo'),
			array('『高性能子机』','r'),
			array('『单发榴弹炮』','cdoy'),
			array('『黑洞激光』','io'),
			array('『单向火箭炮』','do'),
			array('『贯穿激光』','ne'),
			array('『连射激光』','r'),
			array('『精神震荡弹』','e'),
			array('『音波装备』','w'),
			array('『热源制导导弹』','co'),
			array('『高性能环形激光』','uo'),
			array('『高性能黑洞激光』','No'),
			array('『高性能双重激光』','uNo'),
			array('『奥丁巨核装备』','uewo'),
			array('『干扰用强袭装备』','epo'),
			array('『对舰用闪击装备』','uio'),
			array('『传说中的旋风激光』','NZ'),
			array('『传说中的穿刺激光』','nZ'),
			array('ユーリ的38式小铳'),
			array('「女武神的骑行」','r'),
			array('原型武器G'),
			array('RV『METALION』','rox'),
			array('『9mm鲁格枪』','i'),
			array('ｃ－光线','i'),
			array('超级篝酱加农炮','i'),
			array('究级篝酱加农炮','ir'),
			array('★M92F手枪★'),
			array('★機槍 P230 9mm★','rc'),
			array('★P-90机关枪★','rc'),
			array('★PPK9mm手枪★','c'),
			array('★英格拉姆M10轻机枪★','rc'),
			array('★棒球发射机★','rco'),
			array('会打飞机的枪'),
			array('新华里的呐喊','cwo'),
			array('寂寞','i'),
			array('【盖特机炮】','r'),
			array('毒液枪','po'),
			array('不来一发么？','e'),
			array('安式回旋加速喷气安式回旋炮','rN'),
			array('『特尔斯的龙旋风型』'),
			array('『AK-47』','r'),
			array('冷冻光束枪','i'),
			array('『军用火焰放射器』','u'),
			array('■金属风暴■','r'),
		),
		'WD' => array(
			array('电磁IED','ed'),
			array('电磁脉冲IED','ed'),
			array('塑料瓶火箭','d'),
			array('☆礼花弹☆','d'),
			array('辐射IED','ed'),
			array('☆三村式爆彈☆','d'),
			array('幻之使魔','d'),
			array('永恒之桶','d'),
			array('焦臭的哑弹','d'),
			array('微温的哑弹','d'),
			array('开孔的哑弹','d'),
			array('泥泞的哑弹','d'),
			array('变形的哑弹','d'),
			array('裂缝的哑弹','d'),
			array('潮湿的哑弹','d'),
			array('定时炸弹','d'),
			array('☆遥控炸弹☆','d'),
			array('★玩具直升机炸弹★','d'),
			array('『不可视之力爆发』','x'),
			array('【心灵风暴】','wdy'),
			array('原型武器D'),
			array('节操炸弹','id'),
			array('ｃ－火焰','id'),
			array('爆竹'),
			array('照明弹','d'),
			array('鞭炮','r'),
			array('炸弹','d'),
			array('塑胶炸弹','d'),
			array('铅笔炸弹','d'),
			array('☆超级爆弹☆','d'),
			array('☆C4炸药☆','d'),
			array('☆塑胶炸弹☆','d'),
			array('摸西摸-摸一级多','dn'),
			array('新华里的震撼','cwd'),
			array('寂寞','id'),
			array('【泰迪熊炸弹】','dr'),
			array('毒气弹','dp'),
			array('弱爆了！','d'),
			array('雏人形','d'),
			array('★次声波炸弹★','wdN'),
			array('■Astrolite G 液态炸弹■','dN'),
			array('■E.M.P.脉冲炸弹■','deN'),
			array('最天使','id'),
			array('【测试用具】','rd'),
		),
		'WF' => array(
			array('念力震撼波','ew'),
			array('花符「幻想乡之开花」','w'),
			array('落魂符','d'),
			array('超距作用【智子】'),
			array('维度跌落【二向箔】','dy'),
			array('弹幕符札'),
			array('蛇符【神代大蛇】'),
			array('蛙符【操控群蛙】','d'),
			array('开海【海水分开之日】','i'),
			array('天流【天水奇迹】'),
			array('神具【洩矢的铁轮】','r'),
			array('【信仰之山】','x'),
			array('奇迹【神之风】'),
			array('祟符【诹访明神】','d'),
			array('乱入【御社神的作祟】'),
			array('『精神操控』','cx'),
			array('『幻想重构崩灭』','dxy'),
			array('【妖精的波纹疾走】','uie'),
			array('原型武器F'),
			array('黑魔法-权利','i'),
			array('黑魔法-奇技','i'),
			array('★太极印★','dNy'),
			array('新华里的眼神','cw'),
			array('寂寞','i'),
			array('【西方秋霜玉】','r'),
			array('【波纹疾走】','w'),
			array('【紫棠花色波纹疾走】','ew'),
			array('☆博丽护符☆','d'),
			array('★太极符印★','dNy'),
			array('★超能力爆发★','dn'),
		),
		'WB' => array(
			array('★RPG-22★','fo'),
			array('★RPG-30★','ro'),
			array('★黄鸡大炮★','uiwepo'),
		),
		'WJ' => array(
			array('短弓'),
			array('最终兵器【Apollon】','f'),
			array('【流星一条】','rd'),
			array('■落月弓■','i'),
		),
		'DB' => array(
			array('【宇航服】','a'),
			array('粉色睡衣','Zc'),
			array('巫女服','q'),
			array('德古拉的斗篷','B'),
			array('高级军服','PC'),
			array('『扭曲力场』','UI^wc1'),
			array('救生服','I'),
			array('潜水服','I'),
			array('【智代专用熊装】','GD'),
			array('光坂高校校服'),
			array('蓝白巫女服'),
			array('铁甲蛹壳','E'),
			array('治愈之叶','H'),
			array('《小黄的背心》','G'),
			array('安全裤'),
			array('白衣'),
			array('『传说中的飞行员服』','ZA'),
			array('『传说中的公主服』','za'),
			array('『天使队』制服','G'),
			array('『传说中的银白裙』','Aa'),
			array('『天使队』制服G','GD'),
			array('高性能『天使队』制服','A'),
			array('桔黄色的大衣','I'),
			array('幻之甲','q'),
			array('永恒之甲','R'),
			array('实验装甲B'),
			array('风祭学院校服'),
			array('宅男装'),
			array('萝莉装'),
			array('女仆装'),
			array('伪娘装'),
			array('纸铠甲'),
			array('塑料铠甲'),
			array('女王装'),
			array('兄贵装'),
			array('SM装'),
			array('假面骑士装'),
			array('德军军服'),
			array('哥特萝莉装'),
			array('☆龟甲缚☆'),
			array('☆光学迷彩试验型☆'),
			array('☆防弹背心☆','G'),
			array('☆高级军服☆','I'),
			array('☆AT力场☆'),
			array('海尔兄弟的内裤','I'),
			array('MIKU的原味内裤','^sa2'),
			array('新华里的西服','c'),
			array('寂寞'),
			array('节操'),
			array('防化服','q'),
			array('防火服','U'),
			array('MIKU的内裤','F^sa3'),
			array('★光学迷彩★','PK'),
			array('绝热工作服','UI'),
			array('★I-力场★','b'),
			array('★AT力场★','Aa^wc1'),
			array('死库水'),
			array('防弹背心','G'),
		),
		'DH' => array(
			array('精神界面','F'),
			array('项圈'),
			array('面具'),
			array('鼎','G'),
			array('蛇发饰','c'),
			array('青蛙发卡','I'),
			array('《小黄的草帽》'),
			array('厨师帽','U'),
			array('护士帽'),
			array('红色的发圈'),
			array('幻之盔'),
			array('永恒之盔'),
			array('实验装甲H'),
			array('寂寞'),
			array('节操'),
			array('围巾'),
			array('太阳镜'),
			array('棒球帽'),
			array('兔耳頭带'),
			array('DC军头盔'),
			array('安全帽'),
			array('电焊面具','E'),
			array('☆钢盔☆','G'),
			array('☆装甲兵头盔☆','U'),
			array('新八的眼镜'),
			array('新华里的领带','c'),
			array('防毒面具','q'),
			array('隔音头盔','W'),
			array('杨叔的眼镜','M'),
			array('战斗力指示器','c'),
			array('陷阱透视镜','M'),
			array('【楼主头】','GCF'),
			array('【主角光环】','AM^wc1'),
			array('『小毬的草帽挂件』','G'),
		),
		'DA' => array(
			array('棒球手套','C'),
			array('肩章'),
			array('《小黄的钓鱼竿》'),
			array('『胜利烈焰』','fx'),
			array('带翅膀的书包'),
			array('幻之手镯'),
			array('永恒之手镯'),
			array('弱点探测器','c'),
			array('实验装甲A'),
			array('寂寞'),
			array('节操'),
			array('卫生贴纸'),
			array('结婚戒指'),
			array('手镯'),
			array('护腕'),
			array('手套'),
			array('☆防暴盾牌☆'),
			array('☆金属拳套☆'),
			array('电子马克笔','Z'),
			array('新华里的手表','c'),
			array('★蔷薇水晶★'),
			array('动感超人手表','c'),
		),
		'DF' => array(
			array('轮椅'),
			array('曾经的荣光-迷宫'),
			array('《小黄的行军靴》'),
			array('幻之靴'),
			array('永恒之靴'),
			array('实验装甲F'),
			array('寂寞'),
			array('节操'),
			array('过街鞋'),
			array('小五拖鞋'),
			array('性感的高跟鞋','l'),
			array('旱冰鞋'),
			array('军靴'),
			array('☆胶鞋☆','E'),
			array('☆黑丝☆'),
			array('新华里的皮鞋','c'),
			array('蓝蓝路的大鞋','E'),
			array('【哥哥鞋】','am'),
		),
		'A' => array(
			array('去死去死团员证','l'),
			array('亲热天堂','l'),
			array('好人证书','g'),
			array('11区GV大全','g'),
			array('某种电子零件'),
			array('光玉','x'),
			array('小黄的常磐之力','uix'),
			array('随身听','W'),
			array('实验饰品A'),
			array('毒物说明书'),
			array('一个能打的都没有','H'),
			array('新华里的增员','c'),
			array('电暖宝','I'),
			array('制冰机','U'),
			array('便携空调','UI'),
			array('法拉第笼','E'),
			array('空气护盾','W'),
			array('预言挂坠','M'),
			array('火焰纹章','u'),
			array('冰霜纹章','i'),
			array('剧毒纹章','p'),
			array('力量纹章','N'),
			array('贯穿纹章','n'),
			array('★闪光迎击神话★','m'),
			array('波动防御护盾','WE'),
			array('妖精的羽翼','q'),
		)
	);
	
	$randnpc_item_randname = array(
		'prefix' => array('神秘的','沉默的','毁灭的','黑暗的','荣耀的','诡异的','闪耀的','幽灵的','贪婪的','恐怖的','狡猾的','腐蚀的','机械的','平凡的','狂野的','幻觉的','无畏的'),
		'WP' => array('铁锤','皮鞭','手杖'),
		'WK' => array('大刀','长剑','利刃','刺枪'),
		'WG' => array('手枪','火铳','火箭炮'),
		'WC' => array('雪球','飞镖','卡牌'),
		'WD' => array('炸弹','爆弹','地雷'),
		'WF' => array('符卡','魔弹','节杖'),
		'WB' => array('猎弓','角弓','箭雨'),
		'WJ' => array('巨炮','狙击枪','重枪'),
		'DB' => array('盔甲','大衣','西装','战甲B'),
		'DH' => array('头盔','护目镜','风帽','战甲H'),
		'DA' => array('盾牌','利爪','手套','战甲A'),
		'DF' => array('跑鞋','皮靴','尾巴','战甲F'),
		'A' => array('挂件','项链','插件','饰品A'),
	);
	
	//这里的键名是随机NPC的rank
	$randnpc_presets = array
	(
		1 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		2 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		3 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		4 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		5 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		6 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		7 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => 'NN-A',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '剧情道具1',
				'itmk1' => 'X',
				'itme1' => 1,
				'itms1' => 1,
			)
		),
		8 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		9 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		10 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		11 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => 'NN-B',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '剧情道具2',
				'itmk1' => 'X',
				'itme1' => 1,
				'itms1' => 1,
				'itm2' => '测试用结局道具·幸存',
				'itmk2' => 'Z',
				'itme2' => 1,
				'itms2' => 1,
			)
		),
		12 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		13 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		14 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		15 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => 'NN-C',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '剧情道具3',
				'itmk1' => 'X',
				'itme1' => 1,
				'itms1' => 1,
			)
		),
		16 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		17 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		18 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => '复读机',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '压缩饼干',
				'itmk1' => 'HB',
				'itme1' => 35,
				'itms1' => 10,
			)
		),
		19 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => 'B-1',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '测试用结局道具·解离',
				'itmk1' => 'Z',
				'itme1' => 1,
				'itms1' => 1,
				'itm2' => '召唤道具2',
				'itmk2' => 'Z',
				'itme2' => 1,
				'itms2' => 1,
			)
		),
		20 => array
		(
			array
			(
				'mode' => 2,
				'pass' => 'bra',
				'club' => 0,
				'bid' => 0,
				'inf' => '',
				'rage' => 0,
				'pose'=> 0,
				'tactic' => 0,
				'killnum' => 0,
				'teamID' => '',
				'teamPass' => '',
				'gd' => 'r',
				'pls' => 99,
				'mhp' => 500,
				'msp' => 200,
				'att' => 130,
				'def' => 150,
				'lvl' => 10,
				'skill' => 40,
				'money' => 220,
				'name' => 'B-2',
				'icon' => 25,
				'wep' => '水群之枪',
				'wepk' => 'WG',
				'wepe' => 50,
				'weps' => 50,
				'arb' => '跟风群皮',
				'arbk' => 'DB',
				'arbe' => 35,
				'arbs' => 30,
				'arh' => '萌豚头像',
				'arhk' => 'DH',
				'arhe' => 25,
				'arhs' => 30,
				'arf' => '女装丝袜',
				'arfk' => 'DF',
				'arfe' => 25,
				'arfs' => 30,
				'ara' => '发送按钮',
				'arak' => 'DA',
				'arae' => 25,
				'aras' => 30,
				'art' => '键盘侠之证',
				'artk' => 'A',
				'arte' => 20,
				'arts' => 10,
				'itm1' => '奇怪的按钮',
				'itmk1' => 'Z',
				'itme1' => 1,
				'itms1' => 1,
				'itmsk1' => 1,
			)
		)
	);
	
}
?>