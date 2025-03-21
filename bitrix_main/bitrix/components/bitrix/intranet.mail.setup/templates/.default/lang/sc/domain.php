<?
$MESS["INTR_MAIL_AJAX_ERROR"] = "执行查询时出错";
$MESS["INTR_MAIL_CHECK_JUST_NOW"] = "秒前";
$MESS["INTR_MAIL_CHECK_TEXT"] = "上次检查 #DATE#";
$MESS["INTR_MAIL_CHECK_TEXT_NA"] = "没有域状态数据";
$MESS["INTR_MAIL_CHECK_TEXT_NEXT"] = "下一次邮件检查 #DATE#";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM"] = "您要断开域名连接吗？";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM_TEXT"] = "您要断开域吗？<br>这将断开所有附加到门户网站的邮箱！";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME"] = "无效名称";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME_HINT"] = "域名可以包括拉丁字符、数字和连字符；不能以连字符开头或结尾，也不能在位置 3 和 4 重复连字符。名称需以 <b>.com</b> 结尾。";
$MESS["INTR_MAIL_DOMAIN_CHECK"] = "验证";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_HINT"] = "选择一个 .com 域名";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_TITLE"] = "选择域";
$MESS["INTR_MAIL_DOMAIN_EMPTY_NAME"] = "输入名称";
$MESS["INTR_MAIL_DOMAIN_EULA_CONFIRM"] = "我接受<a href=\"http://www.bitrix24.ru/about/domain.php\" target=\"_blank\">许可协议</a>中的条款";
$MESS["INTR_MAIL_DOMAIN_HELP"] = "如果还没有为您的域配置由 Yandex 托管的电子邮件，请立即执行。
<br/><br/>
- <a href=\"https://passport.yandex.com/registration/\" target=\"_blank\">创建一个由 Yandex 托管的电子邮件帐户</a>或使用一个现有的邮箱（如果您已拥有的话）。
- <a href=\"https://pdd.yandex.ru/domains_add/\" target=\"_blank\">将您的域附加到</a>由 Yandex 托管的电子邮件<sup> (<a href=\"http://help.yandex.ru/pdd/add-domain/add-exist.xml\" target=\"_blank\" title=\"我该如何操作？\">?</a>)</sup><br/>
- 验证您的域名所有权 <sup>(<a href=\"http://help.yandex.ru/pdd/confirm-domain.xml\" target=\"_blank\" title=\"我该如何操作？\">?</a>)</sup><br/>
- 配置 MX 记录 <sup>(<a href=\"http://help.yandex.ru/pdd/records.xml#mx\" target=\"_blank\" title=\"我该如何操作？\">?</a>)</sup> 或将您的域名授权到 Yandex <sup>(<a href=\"http://help.yandex.ru/pdd/hosting.xml#delegate\" target=\"_blank\" title=\"我该如何操作？\">?</a>)</sup>
<br/><br/>
一旦配置好由 Yandex 托管的电子邮件账户，即将该域名附加到您的 Bitrix24：
<br/><br/>
- <a href=\"https://pddimp.yandex.ru/api2/admin/get_token\" target=\"_blank\" onclick=\"window.open(this.href, '_blank', 'height=480,width=720,top='+parseInt(screen.height/2-240)+',left='+parseInt(screen.width/2-360)); return false; \">获取令牌</a>（填写表单字段并点击\"获取令牌\"。将显示的令牌复制到剪贴板）<br/>
- 将域和令牌添加到参数中。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1"] = "步骤 1：确认域的所有权";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_A"] = "上传一个名为 <b>#SECRET_N#.html</b> 的文件到您的网站根目录。该文件必须包含文本：<b>#SECRET_C#</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B"] = "若要配置 CNAME 记录，您需要拥有权限在该域名的注册商或 Web 托管服务上写入域名 DNS 记录。可以在您的账户或控制面板中找到这些设置。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAME"] = "记录名称： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAMEV"] = "<b>yamail-#SECRET_N#</b> （或 <b>yamail-#SECRET_N#.#DOMAIN#.</b> 取决于具体接口。注意末尾句点）。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_PROMPT"] = "指定这些值：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_TYPE"] = "记录类型： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUE"] = "值： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUEV"] = "<b>mail.yandex.ru.</b> （请注意句点）";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C"] = "将您的域名注册信息中的联系电子邮件地址设置为 <b>#SECRET_N#@yandex.ru</b>。使用域名注册商的控制面板来设置电子邮件地址。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C_HINT"] = "一旦此域获得确认，请将此地址更改为您的真实电子邮件。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_HINT"] = "如果您在验证域名所有权方面有任何问题，请联系支持部门 <a href=\"http://www.bitrixsoft.com/support/\" target=\"_blank\">www.bitrixsoft.com/support/</a>。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_OR"] = "或";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_PROMPT"] = "您必须使用下面的方法之一，确认您拥有指定域名的所有权：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2"] = "步骤 2：配置 MX 记录";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_HINT"] = "删除所有其他与 Yandex 不相关的 MX 和 TXT 记录。对 MX 记录所做更改可能需要几个小时到三天时间才能在整个 Internet 上完成更新。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_MXPROMPT"] = "使用以下参数新建 MX 记录：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAME"] = "记录名称：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAMEV"] = "<b>@</b>（或 <b>#DOMAIN#.</b> - 如必须。注意末尾句点）";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PRIORITY"] = "优先级： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PROMPT"] = "一旦确认您对该域名拥有所有权，您必须更改虚拟主机上相应的 MX 记录。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TITLE"] = "配置 MX 记录";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TYPE"] = "记录类型：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUE"] = "值：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUEV"] = "<b>mx.yandex.net.</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_TITLE"] = "请执行下面的步骤，将您的域连接到 Bitrix24。 ";
$MESS["INTR_MAIL_DOMAIN_LONG_NAME"] = "在 .com 前面最多 63 个字符";
$MESS["INTR_MAIL_DOMAIN_NAME_FREE"] = "此名称可用";
$MESS["INTR_MAIL_DOMAIN_NAME_OCCUPIED"] = "此名称不可用";
$MESS["INTR_MAIL_DOMAIN_NOCONFIRM"] = "域未确认";
$MESS["INTR_MAIL_DOMAIN_NOMX"] = "未配置 MX 记录";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TEXT"] = "一旦建立连接，您将无法更改域名<br>或使用另一个域名，因为您只能为您的 Bitrix24 <br>注册一个域名。<br><br>如果此名称 <b>#DOMAIN#</b> 是正确的，请确认您的新域名。";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TITLE"] = "请检查确认您已输入正确的域名。";
$MESS["INTR_MAIL_DOMAIN_REMOVE"] = "断开";
$MESS["INTR_MAIL_DOMAIN_SAVE"] = "保存";
$MESS["INTR_MAIL_DOMAIN_SAVE2"] = "附加";
$MESS["INTR_MAIL_DOMAIN_SETUP_HINT"] = "可能需要 1 小时到几天时间才能完成域名确认。";
$MESS["INTR_MAIL_DOMAIN_SHORT_NAME"] = "在 .com 前面至少要有两个字符";
$MESS["INTR_MAIL_DOMAIN_STATUS_CONFIRM"] = "已确认";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOCONFIRM"] = "未确认";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOMX"] = "未配置 MX 记录";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE"] = "域链接状态";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE2"] = "已确认域";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_MORE"] = "显示其他选项";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_TITLE"] = "请提示另一个名称，或从中选择一个";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_WAIT"] = "正在搜索可能的名称...";
$MESS["INTR_MAIL_DOMAIN_TITLE"] = "如果在 Yandex.Mail 配置的是工作域，请在下表中输入域名和令牌";
$MESS["INTR_MAIL_DOMAIN_TITLE2"] = "该域现在已链接到您的门户网站";
$MESS["INTR_MAIL_DOMAIN_TITLE3"] = "您的电子邮件域";
$MESS["INTR_MAIL_DOMAIN_WAITCONFIRM"] = "等待确认";
$MESS["INTR_MAIL_DOMAIN_WAITMX"] = "未配置 MX 记录";
$MESS["INTR_MAIL_DOMAIN_WHOIS"] = "检查";
$MESS["INTR_MAIL_GET_TOKEN"] = "获取";
$MESS["INTR_MAIL_INP_CANCEL"] = "取消";
$MESS["INTR_MAIL_INP_DOMAIN"] = "域名";
$MESS["INTR_MAIL_INP_PUBLIC_DOMAIN"] = "员工可以在这个域注册邮箱";
$MESS["INTR_MAIL_INP_TOKEN"] = "令牌";
$MESS["INTR_MAIL_MANAGE"] = "配置员工邮箱";
?>