<?php
$MESS["BP_DBLA_APP"] = "已批准";
$MESS["BP_DBLA_APPROVE"] = "请批准或拒绝该文档。";
$MESS["BP_DBLA_APPROVE2"] = "请批准或拒绝该文档。";
$MESS["BP_DBLA_APPROVE2_TEXT"] = "您必须批准或拒绝文档 \"{=Document:NAME}\"。

作者：{=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE2_TITLE"] = "文档批准：阶段 2";
$MESS["BP_DBLA_APPROVE_TEXT"] = "您必须批准或拒绝文档 \"{=Document:NAME}\"。
		
作者：{=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_APPROVE_TITLR"] = "文档批准：阶段 1";
$MESS["BP_DBLA_APP_S"] = "状态：已批准";
$MESS["BP_DBLA_DESC"] = "推荐用于文档批准前需要专家预审的场合。在流程阶段 1 期间	由专家评估文档。如果专家拒绝文档	文档被返回到发起者进行修订。 	 如果文件被批准	文档被传送给选定的一组员工按照简单多数方式进行最终批准。如果最终投票不通过，	文档返回进行修订	批准程序从头开始。";
$MESS["BP_DBLA_M"] = "电子邮件消息";
$MESS["BP_DBLA_MAIL2_SUBJ"] = "请回复关于\"{=Document:NAME}\"";
$MESS["BP_DBLA_MAIL2_TEXT"] = "您必须批准或拒绝文档 \"{=Document:NAME}\"。

打开此链接以继续：http://#HTTP_HOST##TASK_URL#

作者：{=Document:CREATED_BY_PRINTABLE}";
$MESS["BP_DBLA_MAIL3_SUBJ"] = "\"{=Document:NAME} 的投票：文档已被通过。";
$MESS["BP_DBLA_MAIL3_TEXT"] = "已完成对 \"{=Document:NAME}\" 的投票。

已经以 {=ApproveActivity2:ApprovedPercent}% 的投票比例通过此文档。

已批准：{=ApproveActivity2:ApprovedCount}																										
已拒绝：{=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_MAIL4_SUBJ"] = "{=Document:NAME} 的投票：文档已被拒绝。";
$MESS["BP_DBLA_MAIL4_TEXT"] = "已完成阶段 1 的\"{=Document:NAME}\" 批准。

文档已被拒绝。

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_MAIL_SUBJ"] = "该文档已通过阶段 1";
$MESS["BP_DBLA_MAIL_TEXT"] = "文档 \"{=Document:NAME}\" 已通过阶段 1 的批准。											

文档已被批准。																										

{=ApproveActivity1:Comments}";
$MESS["BP_DBLA_NAME"] = "二级批准";
$MESS["BP_DBLA_NAPP"] = "\"{=Document:NAME} 的投票：文档已被拒绝。";
$MESS["BP_DBLA_NAPP_DRAFT"] = "已发送用于修订";
$MESS["BP_DBLA_NAPP_DRAFT_S"] = "状态：已发送用于修订";
$MESS["BP_DBLA_NAPP_TEXT"] = "已完成对 \"{=Document:NAME}\" 的投票。
						
文档已被拒绝。

已批准：{=ApproveActivity2:ApprovedCount}																										
已拒绝：{=ApproveActivity2:NotApprovedCount}

{=ApproveActivity2:Comments}";
$MESS["BP_DBLA_PARAM1"] = "阶段 1 投票人";
$MESS["BP_DBLA_PARAM2"] = "阶段 2 投票人";
$MESS["BP_DBLA_PUB_TITLE"] = "发布文件";
$MESS["BP_DBLA_S_1"] = "活动序列";
$MESS["BP_DBLA_T"] = "序列驱动型业务流程";
$MESS["BP_DBLA_TASK"] = "批准文档：\"{=Document:NAME}\"";
$MESS["BP_DBLA_TASK_DESC"] = "您必须批准或拒绝文档 \"{=Document:NAME}\"。

打开此链接以继续：http://#HTTP_HOST##TASK_URL#

作者：{=Document:CREATED_BY_PRINTABLE}";
