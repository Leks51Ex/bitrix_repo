<?
$MESS["INTR_MAIL_AJAX_ERROR"] = "執行查詢時，發生錯誤";
$MESS["INTR_MAIL_CHECK_JUST_NOW"] = "秒前";
$MESS["INTR_MAIL_CHECK_TEXT"] = "最後檢查日期 #DATE#";
$MESS["INTR_MAIL_CHECK_TEXT_NA"] = "沒有網域狀態的資料";
$MESS["INTR_MAIL_CHECK_TEXT_NEXT"] = "下一次郵件將在 #DATE# 檢查";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM"] = "您是否想要中斷網域連線？";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM_TEXT"] = "您是否想要中斷網域連結？<br>連結入口網站的所有信箱也將中斷連結！";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME"] = "名稱無效";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME_HINT"] = "網域名稱可以包含拉丁字元、數字和連字號；不可用連字號開始或結束，或在位置 3 和 4 重複連字號。用 <b>.com</b> 作為名稱結尾。";
$MESS["INTR_MAIL_DOMAIN_CHECK"] = "驗證";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_HINT"] = "在 .com 網域選擇名稱";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_TITLE"] = "選擇網域";
$MESS["INTR_MAIL_DOMAIN_EMPTY_NAME"] = "輸入名稱";
$MESS["INTR_MAIL_DOMAIN_EULA_CONFIRM"] = "我接受 <a href=\"http://www.bitrix24.ru/about/domain.php\" target=\"_blank\">授權合約</a>條款";
$MESS["INTR_MAIL_DOMAIN_HELP"] = "如果尚未將您的網域設定用於 Yandex Hosted E-Mail，立即進行該項程序。
<br/><br/>
- <a href=\"https://passport.yandex.com/registration/\" target=\"_blank\">建立 Yandex Hosted E-Mail 帳戶</a>，或使用現有的信箱（如果您有的話）。
- <a href=\"https://pdd.yandex.ru/domains_add/\" target=\"_blank\">將您的網域連結</a>至 Yandex Hosted E-Mail<sup> (<a href=\"http://help.yandex.ru/pdd/add-domain/add-exist.xml\" target=\"_blank\" title=\"我要如何進行？\">?</a>)</sup><br/>
- 驗證您的網域擁有權 <sup>(<a href=\"http://help.yandex.ru/pdd/confirm-domain.xml\" target=\"_blank\" title=\"我要如何進行？\">?</a>)</sup><br/>
- 設定 MX 記錄 <sup>(<a href=\"http://help.yandex.ru/pdd/records.xml#mx\" target=\"_blank\" title=\"我要如何進行？\">?</a>)</sup> 或是將您的網域委派至 Yandex <sup>(<a href=\"http://help.yandex.ru/pdd/hosting.xml#delegate\" target=\"_blank\" title=\"我要如何進行？\">?</a>)</sup>
<br/><br/>
一旦您的 Yandex Hosted E-Mail 帳戶已經設定，請將網域連結至您的 Bitrix24：
<br/><br/>
- <a href=\"https://pddimp.yandex.ru/api2/admin/get_token\" target=\"_blank\" onclick=\"window.open(this.href, '_blank', 'height=480,width=720,top='+parseInt(screen.height/2-240)+',left='+parseInt(screen.width/2-360)); return false; \">取得權杖</a>（填寫表單欄位，並按一下「取得權杖」。一旦顯示了權杖，請將它複製到剪貼簿）<br/>
- 將網域和權杖新增至參數。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1"] = "步驟&nbsp;1.&nbsp;&nbsp;確認網域的擁有權";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_A"] = "將名稱為 <b>#SECRET_N#.html</b> 的檔案上傳至您的網站根目錄。檔案必須包含文字：<b>#SECRET_C#</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B"] = "用登錄器或虛擬主機服務註冊您的網域後，如果要設定 CNAME 記錄，您需要擁有您網域 DNS 記錄的寫入權限。您可在您的帳戶或控制台找到這些設定。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAME"] = "記錄名稱： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAMEV"] = "<b>yamail-#SECRET_N#</b>（或者視介面不同而定的 <b>yamail-#SECRET_N#.#DOMAIN#.</b>。注意結尾有個句點。）";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_PROMPT"] = "指定這些數值：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_TYPE"] = "記錄類型： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUE"] = "數值： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUEV"] = "<b>mail.yandex.ru.</b>（再次注意，有個句點）";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C"] = "在您的網域註冊資訊中，將連絡人電子郵件地址設定為 <b>#SECRET_N#@yandex.ru</b>。使用您網域登錄器的控制台，進行電子郵件地址設定。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C_HINT"] = "一旦此網域獲得確認，請將此位址變更為您的真實電子郵件。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_HINT"] = "如果有驗證您網域擁有權的任何問題，請聯絡技術服務人員：<a href=\"http://www.bitrixsoft.com/support/\" target=\"_blank\">www.bitrixsoft.com/support/</a>。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_OR"] = "或";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_PROMPT"] = "您需要使用下列方法之一，確認您擁有了指定的網域名稱：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2"] = "步驟&nbsp;2.&nbsp;&nbsp;設定 MX 記錄";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_HINT"] = "刪除與 Yandex 無關的所有其他 MX 和 TXT 記錄。如果要透過 Internet 對 MX 記錄的變更進行更新，可能需要花上幾個小時、甚至三天的時間。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_MXPROMPT"] = "利用下列參數建立新的 MX 記錄：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAME"] = "記錄名稱：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAMEV"] = "<b>@</b>（或者 <b>#DOMAIN#.</b> - 如有需要的話。注意結尾有個句點）";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PRIORITY"] = "優先順序： ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PROMPT"] = "一旦您已經確認自己的網域擁有權，您必須在您的虛擬主機變更對應的 MX 記錄。";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TITLE"] = "設定 MX 記錄";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TYPE"] = "記錄類型：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUE"] = "數值：";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUEV"] = "<b>mx.yandex.net.</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_TITLE"] = "若要將您的網域連線至 Bitrix24，請進行數項步驟。 ";
$MESS["INTR_MAIL_DOMAIN_LONG_NAME"] = ".com 前最多 63 個字元";
$MESS["INTR_MAIL_DOMAIN_NAME_FREE"] = "本名稱可用";
$MESS["INTR_MAIL_DOMAIN_NAME_OCCUPIED"] = "本名稱不可用";
$MESS["INTR_MAIL_DOMAIN_NOCONFIRM"] = "未確認的網域";
$MESS["INTR_MAIL_DOMAIN_NOMX"] = "未設定的 MX 記錄";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TEXT"] = "一旦連線，您將無法變更網域名稱<br>或取得另一個網域名稱。因為，您僅可為您的 Bitrix24 註冊<br>一個網域。<br><br>如果您發現名稱 <b>#DOMAIN#</b> 是正確的，請確認您的新網域。";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TITLE"] = "請檢查您輸入的網域名稱是否正確。";
$MESS["INTR_MAIL_DOMAIN_REMOVE"] = "中斷連結";
$MESS["INTR_MAIL_DOMAIN_SAVE"] = "儲存";
$MESS["INTR_MAIL_DOMAIN_SAVE2"] = "連結";
$MESS["INTR_MAIL_DOMAIN_SETUP_HINT"] = "網域名稱可能需要花上 1 小時到數日時間進行確認。";
$MESS["INTR_MAIL_DOMAIN_SHORT_NAME"] = ".com 前至少 2 個字元";
$MESS["INTR_MAIL_DOMAIN_STATUS_CONFIRM"] = "已確認";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOCONFIRM"] = "未確認";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOMX"] = "未設定的 MX 記錄";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE"] = "網域連結狀態";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE2"] = "已確認網域";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_MORE"] = "顯示其他選項";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_TITLE"] = "請提出另一個名稱或挑選其中一個名稱";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_WAIT"] = "正在搜尋可能的名稱……";
$MESS["INTR_MAIL_DOMAIN_TITLE"] = "如果您的網域被設定為供 Yandex.Mail 網域工作使用，只要輸入底下表單中的網域名稱和權杖即可";
$MESS["INTR_MAIL_DOMAIN_TITLE2"] = "現在，網域已經連結至您的入口網站";
$MESS["INTR_MAIL_DOMAIN_TITLE3"] = "您電子郵件的網域";
$MESS["INTR_MAIL_DOMAIN_WAITCONFIRM"] = "等候確認";
$MESS["INTR_MAIL_DOMAIN_WAITMX"] = "未設定的 MX 記錄";
$MESS["INTR_MAIL_DOMAIN_WHOIS"] = "檢查";
$MESS["INTR_MAIL_GET_TOKEN"] = "取得";
$MESS["INTR_MAIL_INP_CANCEL"] = "取消";
$MESS["INTR_MAIL_INP_DOMAIN"] = "網域名稱";
$MESS["INTR_MAIL_INP_PUBLIC_DOMAIN"] = "員工可以在本網域中註冊信箱";
$MESS["INTR_MAIL_INP_TOKEN"] = "權杖";
$MESS["INTR_MAIL_MANAGE"] = "設定員工信箱";
?>