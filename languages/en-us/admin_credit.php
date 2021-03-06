<?php
$lang = array (
  'managecredit' => '积分管理',
  'managecreditdesc' => '您可以在下面的列表内查看所有当前已定制的自定义积分模块',
  'creditlist' => '积分列表',
  'creditlistdesc' => '您可以在下面的列表内查看所有当前已定制的自定义积分模块',
  'creditname' => '名称',
  'creditlimit' => '积分下限',
  'display' => '显示',
  'no_any_credits' => '目前尚未定义任何积分扩展字段，请点击下面的添加按钮进行添加',
  'add_new_credit' => '添加新的扩展积分策略',
  'edit_credit' => '编辑积分',
  'add_credit' => '添加新的积分',
  'credit_name' => '积分名称',
  'credit_tag_name' => '唯一标签名称',
  'credit_tag_name_desc' => '请注意该标签不能与其他已定义标签重复，并且必须为英文字符。
请注意此参数一旦设定，将无法更改！',
  'credit_limit' => '积分下限',
  'credit_explain' => '积分规则添加说明',
  'credit_explain_1' => '操作积分规则说明:当为正数(可带加号)时，用于执行该正数与用户积分的加运算(数值前带减乘除符号与此雷同)；当数值前面带等号时,为定值运算(表示不管用户积分是多少都强制等于等号后面的值);',
  'credit_explain_2' => '“积分规则下限”的意思是如果用户积分到达指定的下限值时，不可以再执行扣分操作。譬如：用户积分为 -110，积分下限为 -100，如果帖子搜索操作为 -3分 (搜索扣3分)的话，则此操作将无法被执行，积分必须高于下限才可以执行搜索;',
  'require_credit_name' => '请设定积分名称',
  'only_letter_num' => '唯一标签名称只能使用字母或数字方式',
  'credit_edited' => '积分已成功编辑',
  'credit_added' => '积分已成功添加',
  'credit_deleted' => '积分已成功删除',
  'key_already_used' => '该英文唯一标识名称已被使用，请更改其他名称',
  'set_cash_info' => '设置积分基本资料',
  'set_credit_forum' => '设置版面全局积分策略规则',
  'set_credit_forum_detail' => '设置版面明细积分策略规则',
  'forumdetail' => '版面明细积分',
  'set_credit_usergroup' => '设置用户组全局积分策略规则',
  'set_credit_usergroup_detail' => '设置用户组明细积分策略规则',
  'usergroupdetail' => '用户组明细积分',
  'set_credit_eval' => '设置评价全局积分策略规则',
  'set_credit_eval_detail' => '设置评价明细积分策略规则',
  'set_credit_revise' => '设置积分事件全局修正',
  'evaldetail' => '评价明细积分',
  'credit_unit' => '积分单位',
  'credit_unit_desc' => '积分的单位名称，例如“点”、“分”等',
  'credit_ratio' => '兑换比率',
  'credit_ratio_desc' => '积分进行兑换的比率，表示单位该积分可以换取多少个兑换比率为 1 的积分
例如：A积分兑换比率为 1、B积分兑换比率为 3，表示 3 个 A 积分可以换取 1 个 B 积分
可以理解为积分权重，数值越大价值越
大于 0 的整数',
  'credit_save_to_advanced' => '保存并进入详细积分规则设置',
  'credit_save_forum_advanced' => '保存版面详细积分规则设置',
  'credit_save_usergroup_advanced' => '保存用户组详细积分规则设置',
  'credit_save_eval_advanced' => '保存评价详细积分规则设置',
  'advanced_credit' => '设置积分详细规则',
  'advanced_credit_desc' => '您可以在下面的表单中设置当前积分 %s 的详细规则',
  'credit_used' => '是否启用',
  'advanced_used' => '启用',
  'credit_explain_5' => '“是否全局启用本积分”如果积分明细画面设定了此项后全局设定将不起作用',
  'credit_explain_6' => '列表中每个输入框弹出的title中的数值为该对应项正在使用的数据,如果之前没有设定此项则显示上级设置中的对应数据',
  'credit_explain_7' => '积分规则设定中的数值可以带加减乘除等号(范围值除外只可以带正负号)的0-9数值或正在启用的积分或公式型积分的唯一标签名称或设为"_limit"字符表示和该积分下限相同,空,NULL(null)或0<br> 若某项积分明细设为空或NULL则此项积分明细将对应继承全局积分规则中的数值,若某项明细积分设为0则表示此项不起作用',
  'credit_explain_8' => '积分列表中的"启用设定"如果用户没有选中此项,则表示该积分的该行设置不起任何作用',
  'credit_explain_9' => '评价设定规则,评价上下限输入框的中的数据可以是带正负号的0-9数值或正在启用的积分或公式型积分的唯一标签名称或设为"_limit"字符表示和该积分下限相同,空,NULL(null)或0<br>若某项评价明细设为空或NULL则此项评价明细将对应继承上一级规则中的数值,若某项评价明细设为0则表示此项不起作用',
  'usergroupcreditedit' => '用户组积分编辑',
  'creditadvanced_edited' => '积分明细已成功编辑',
  'forumcreditedit' => '版面积分编辑',
  'evalcreditedit' => '评价积分编辑',
  'fixrevise' => '赋值修正',
  'multirevise' => '乘修正',
  'divrevise' => '除修正',
  'addrevise' => '加修正',
  'subrevise' => '减修正',
  'creditexchange' => '积分兑换管理',
  'creditexchange_set' => '积分兑换已成功设置',
  'credit_exchange_desc' => '积分列表中的兑换顺序是从纵坐标的积分向横坐标的积分兑换',
  'autoexchange' => '自动兑换',
  'hourevaloverflow' => '24小时最大评分数',
  'credit_singlethread' => '单主题最高收入',
  'credit_reset' => '重置用户积分',
  'credit_reset_condition' => '积分重置条件',
  'credit_reset_confirm' => '此操作将重置搜索条件下的用户的扩展积分为设定值，您是否确认此操作？',
  'credit_reset_notvalue' => '重置积分不能为空',
  'credit_reset_formaterror' => '积分重置的内容格式填写不正确',
  'credit_reset_sucess' => '积分重置成功',
  'credit_reset_desc' => '重置条件只能是带正负号而重置积分可以带加,减,乘,除,等于号的0-9数值,小数,已启用积分的唯一标签和_limit字符(该积分下限)</br>重置积分若没加运算符则默认为加运算,若没有填写条件默认为所有用户组.</br>加运算时,在搜索条件下的用户积分=用户积分+数值(减乘除运算与此雷同);</br>等值运算时,在搜索条件下的用户积分=数值;',
  'credit_formula' => '积分公式设置',
  'credit_formula_notice' => '请注意: 一旦修改积分公式，将可能导致所有用户的积分重新计算，因此会加重服务器负担，直至全部用户更新完毕。请慎用',
  'credit_formula_error' => '积分公式不能为空',
  'credit' => '积分',
  'allusergroup' => '全部用户组',
  'canshowforum' => '可显示的版面',
  'canshowusergroup' => '可查看的用户组',
  'credit_type' => '积分类型',
  'set_credit_type' => '设置积分类型',
  'credit_type_error' => '请选择积分类型',
  'credit_type_normal' => '普通积分',
  'credit_type_formula' => '公式积分',
  'creditfixvalerror' => '填写积分内容错误,内容只能是前面带加、减、乘、除、等号(+-*/=)的0-9数值,正在启用的或公式型积分的唯一标签名称,"_limit"字符,或内容为"null(NULL)"值',
  'creditrangevalerror' => '填写积分的范围内容错误,内容只能是前面带正负号的0-9数值,正在启用的或公式型积分的唯一标签名称,"_limit"字符,或内容为"null(NULL)"值',
  'creditevalvalerror' => '填写积分的评价内容错误,内容只能是前面带正负号的0-9数值,正在启用的或公式型积分的唯一标签名称,"_limit"字符,或内容为"null(NULL)"值',
  'overflowerror' => '24小时最大评分数错误,内容只能是前面带正负号的0-9数值,正在启用的或公式型积分的唯一标签名称,"_limit"字符,或内容为"null(NULL)"值',
  'singlethreaderror' => '单主题最高收入错误,内容只能是前面带正负号的0-9数值,正在启用的或公式型积分的唯一标签名称,"_limit"字符,或内容为"null(NULL)"值',
  'credit_current_value' => '该项当前正在使用的值:',
  'nogroupselect' => '不选择用户组',
  'noforumselect' => '不选择版面',
  'bankdefaultcredit' => '该货币为银行的默认货币,若要删除首先要对银行的默认货币进行修改！',
  'gotoback' => '返回上一步',
  'deletecredit' => '删除积分',
  'deletecreditdesc' => '如果此积分有数据的话，在删除积分前需要确定此积分数据的处理方式。
若删除积分的转换比率值比需转换的积分比率值大的话，则出现的余数可能会被丢失',
  'movecreditto' => '移动此积分值到',
  'notrevertcredit' => '不兑换',
  'creditratioerror' => '积分兑换比率只能是大于0的整数',
  'notcreditshowforum' => '积分可显示版面不能为空',
  'notcreditshowgroup' => '积分可查看用户组不能为空',
  'resetcreditconderror' => '积分的重置条件只能是带正负数的0-9数值,小数,已启用积分的唯一标签和_limit字符(该积分下限)',
  'creditrulelist' => '积分规则列表',
  'managecreditruledesc' => '您可以在下面的列表内查看所有的积分规则',
  'credit_rule_name' => '规则名称',
  'credit_rule_group' => '规则所属类型',
  'credit_rule_text' => '规则输入框类型',
  'credit_rule_desction' => '规则描述',
  'no_any_creditrules' => '目前尚未定义任何积分规则，请点击下面的添加按钮进行添加',
  'add_new_creditrule' => '添加新的积分规则',
  'edit_creditrule' => '编辑积分规则',
  'add_creditrule' => '添加积分规则',
  'credit_usergroup' => '用户组',
  'credit_forum' => '版面',
  'credit_revise' => '修正',
  'credit_global' => '默认',
  'credit_evaluation' => '评价',
  'credit_fixvalue' => '固定值',
  'credit_rangevalue' => '范围值',
  'require_creditrule_name' => '请设定积分规则名称',
  'creditrule_edited' => '积分规则已成功编辑',
  'creditrule_added' => '积分规则已成功添加',
  'creditrule_deleted' => '积分规则已成功删除',
  'creditrule_confirm_deleted' => '请再次确认删除积分规则',
  'confirm_deleted_rule_desc' => '你确实要删除这个积分规则吗？
请注意删除这个规则会一并删除积分中已设定的该规则值！',
  'credit_evallimit' => '评价积分限制',
  'credit_evallimit_desc' => '用户评价本帖时所给出的评价积分值的范围',
  'confirm_deleted' => '我已确认要刪除',
  'selreviseactevent' => '作用事件',
  'selreviseactevent_desc' => '创建的修正只作用于选择的事件',
  'require_credit_tag' => '请设定积分唯一标签',
  'addcreditrule' => '添加新的积分规则',
  'editcreditrule' => '编辑积分规则',
  'managecreditrule' => '积分规则管理',
  'crediteventlists' => '积分事件列表',
  'no_any_creditevents' => '目前尚未定义任何积分事件',
  'set_rule_info' => '设置规则基本资料',
  'conncreditname' => '关联积分名称',
  'credittypeforum' => '版面',
  'credittypegroup' => '用户组',
  'creditruletype' => '规则类型',
  'creditrulerange' => '规则作用范围',
  'creditruledetail' => '规则详细内容',
  'editdefaultrule' => '编辑默认规则',
  'creditinitvalue' => '积分默认值',
  'creditinittime' => '积分恢复默认值时间周期(单位:小时)',
  'creditinittimedesc' => '系统会根据该时间定时将用户该积分设为初始值，若不设定该值积分初始值将不起作用',
  'rulelistidexsite' => '%s 已在该积分的其他规则中定义过',
  'delcreditdesc' => '删除该积分的同时一并删除所属该积分的规则?',
  'delcreditruledesc' => '确定删除该积分规则?',
  'defrulenotvalue' => '默认规则的事件值不能设为空',
  'editevalset' => '编辑评价设置',
  'evalinitvalue' => '评价默认值',
  'evalinitvaluedesc' => '不设定或将值设为零该积分评价都将不起作用',
  'evalinittime' => '评价恢复默认值时间周期(单位:小时)',
  'evalinittimedesc' => '系统会根据该时间定时将用户该积分评价值设为默认值',
  'evalsetsuccess' => '评价设置成功',
);
?>