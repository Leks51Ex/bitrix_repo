<?
$MESS["INTR_MAIL_AJAX_ERROR"] = "要求の処理中にエラーが発生しました";
$MESS["INTR_MAIL_CHECK_JUST_NOW"] = "ただチェックした";
$MESS["INTR_MAIL_CHECK_TEXT"] = "最後にチェックされた日付:#DATE#";
$MESS["INTR_MAIL_CHECK_TEXT_NA"] = "利用可能なメールボックスステータスデータはありません";
$MESS["INTR_MAIL_CHECK_TEXT_NEXT"] = "次のメールチェックは#DATE#";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM"] = "ドメインを切断しますか?";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM_TEXT"] = "ドメインをデタッチしますか?<br>ポータルに接続されているすべてのメールボックスもデタッチされます";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME"] = "無効な名前";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME_HINT"] = "ドメイン名には、ラテン文字、数字、ハイフンを含めることができます。 ハイフンで開始または終了できません。また、3および4の位置でハイフンを繰り返すことはできません。<b>.com</b>で名前を終了してください。";
$MESS["INTR_MAIL_DOMAIN_CHECK"] = "確認";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_HINT"] = ".ruドメインで名前を選択する";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_TITLE"] = "ドメインを選択";
$MESS["INTR_MAIL_DOMAIN_EMPTY_NAME"] = "名前を入力";
$MESS["INTR_MAIL_DOMAIN_EULA_CONFIRM"] = "私は <a href=\"http://www.bitrix24.ru/about/domain.php\" target=\"_blank\">ライセンス条項</a>に同意します";
$MESS["INTR_MAIL_DOMAIN_HELP"] = "「Yandex Hosted E-Mailで使用するようにドメインを設定していない場合は、今すぐお試しください。
<br/> <br/>
 -  <a href=\"https://passport.yandex.com/registration/\"\" target=\"_blank\"\">Yandex Hosted E-Mailアカウントを作成</a>するか、既存のメールボックスを使用する場合は既存のメールボックスを使用します。
 -  Yandex Hosted E-Mailに<<a href=\"https://pdd.yandex.ru/domains_add/\"\" target=\"_blank\"\">あなたのドメインを接続する</a> <a href=\"http://help.yandex.ru/pdd/add-domain/add-exist.xml \"\" target=\"_ blank \"\" title=\"どうすればよいですか? \" )</sup> <br/>
 - ドメインの所有権を確認する(<a href=\"http://help.yandex.ru/pdd/confirm-domain.xml \"\" target=\"_ blank \"\" title=\"どうすればいいですか? ?\">?</a>)</sup> <br/>
 -  MXレコードを設定する(<a href=\"http://help.yandex.ru/pdd/records.xml#mx \"\" target=\"_blank \"\" title=\"どうすればいいですか?あなたのドメインをYandex <sup>(<a href=\"http://help.yandex.ru/pdd/hosting.xml#delegate \"\" target> \"\"_blank \"\" title=\"どうすればいいですか?\">?</a>)</sup>
<br/> <br/>
Yandex Hosted E-Mailアカウントが設定されたら、ドメインをBitrix24に接続します。
<br/> <br/>
 -  <a href=\"https://pddimp.yandex.ru/api2/admin/get_token \"\" target=\"_ blank \"\" onclick=\"window.open(this.href、 '_blank'、 'height=480、width=720、top='+ parseInt(screen.height/2-240)+'、left='+ parseInt(screen.width/2-360));偽を返します。\">トークンを取得する</a>(フォームフィールドに記入し、 \"\"トークンを取得 \"\"をクリックします。トークンが表示されたら、それをクリップボードにコピーします)<br/>
 - ドメインとトークンをパラメータに追加してください \"";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1"] = "ステップ1&nbsp;&nbsp;ドメインの所有権を確認する";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_A"] = "<b>#SECRET_N#.html</b>という名前のファイルをウェブサイトのルートディレクトリにアップロードします。ファイルには次のテキストが含まれている必要があります:<b>#SECRET_C#</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B"] = "CNAMEレコードを設定するには、ドメインを登録したレジストラまたはWebホスティングサービスでドメインのDNSレコードへの書き込みアクセス権が必要です  これらの設定は、アカウントまたはコントロールパネルで確認できます";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAME"] = "レコード名:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAMEV"] = "インタフェースに依存する<b>yamail-#SECRET_N#</b>(または<b>yamail-#SECRET_N#.#DOMAIN#.</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_PROMPT"] = "次の値を指定します";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_TYPE"] = "レコードタイプ:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUE"] = "値:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUEV"] = "<b>mail.yandex.ru.</b>(再度、期間をお知らせください)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C"] = "ドメイン登録情報の連絡先電子メールアドレスを<b>#SECRET_N#@yandex.ru</b>に設定してください。ドメインレジストラのコントロールパネルを使用して電子メールアドレスを設定します";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C_HINT"] = "ドメインが確認されるとすぐに、このアドレスを実際の電子メールに変更してください";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_HINT"] = "ドメインの所有権を確認する質問がある場合は、<a href=\"https://helpdesk.bitrix24.com/\" target=\"_blank\">helpdesk.bitrix24.com</a>のヘルプデスクにお問い合わせください";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_OR"] = "または";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_PROMPT"] = "次のいずれかの方法を使用して、指定したドメイン名を所有していることを確認する必要があります";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2"] = "ステップ2&nbsp;&nbsp; MXレコードを設定する";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_HINT"] = "Yandexに関連しない他のすべてのMXレコードとTXTレコードを削除します  MXレコードの変更は、インターネットを通じて更新されるまで数時間から3日かかることがあります";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_MXPROMPT"] = "次のパラメータを使用して新しいMXレコードを作成します";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAME"] = "レコード名:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAMEV"] = "必要に応じて<b>@</b>(または<b>#DOMAIN#。</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PRIORITY"] = "優先度:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PROMPT"] = "ドメインの所有権を確認したら、ウェブホスティングの対応するMXレコードを変更する必要があります";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TITLE"] = "MXレコードを設定する";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TYPE"] = "レコードタイプ:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUE"] = "値:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUEV"] = "<b>mx.yandex.net。</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_TITLE"] = "ドメインをBitrix24に接続するには、いくつかの手順があります";
$MESS["INTR_MAIL_DOMAIN_LONG_NAME"] = "max  .ruの前に63文字";
$MESS["INTR_MAIL_DOMAIN_NAME_FREE"] = "この名前は利用可能です";
$MESS["INTR_MAIL_DOMAIN_NAME_OCCUPIED"] = "この名前は使用できません";
$MESS["INTR_MAIL_DOMAIN_NOCONFIRM"] = "ドメインが確認されていない";
$MESS["INTR_MAIL_DOMAIN_NOMX"] = "MXレコードが設定されていません";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TEXT"] = "接続後、ドメイン名を変更することはできません<br>or get another one because you can register<br>only one domain for your Bitrix24.<br><br>If you find the name <b>#DOMAIN#</b>あなたの新しいドメインを確認してください
<b>#DOMAIN#</b>が正しい場合は、新しいドメインをご確認ください";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TITLE"] = "ドメイン名を正しく入力したことを確認してください";
$MESS["INTR_MAIL_DOMAIN_REMOVE"] = "デタッチ";
$MESS["INTR_MAIL_DOMAIN_SAVE"] = "保存";
$MESS["INTR_MAIL_DOMAIN_SAVE2"] = "アタッチ";
$MESS["INTR_MAIL_DOMAIN_SETUP_HINT"] = "ドメイン名は、確認するのに1時間から数日かかることがあります";
$MESS["INTR_MAIL_DOMAIN_SHORT_NAME"] = ".ruの前に少なくとも2文字";
$MESS["INTR_MAIL_DOMAIN_STATUS_CONFIRM"] = "確認済み";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOCONFIRM"] = "確認されていません";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOMX"] = "MXレコードが設定されていません";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE"] = "ドメインリンクのステータス";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE2"] = "ドメイン確認済";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_MORE"] = "他のオプションを表示する";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_TITLE"] = "別の名前を持って来てください";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_WAIT"] = "可能な名前を検索しています...";
$MESS["INTR_MAIL_DOMAIN_TITLE"] = "あなたのドメインがYandex.Mailでドメイン用に設定されている場合は、ドメイン名とトークンを下のフォームに入力してください";
$MESS["INTR_MAIL_DOMAIN_TITLE2"] = "ドメインがポータルにリンクされました";
$MESS["INTR_MAIL_DOMAIN_TITLE3"] = "あなたのeメールのドメイン";
$MESS["INTR_MAIL_DOMAIN_WAITCONFIRM"] = "待機確認";
$MESS["INTR_MAIL_DOMAIN_WAITMX"] = "MXレコードが設定されていません";
$MESS["INTR_MAIL_DOMAIN_WHOIS"] = "チェック";
$MESS["INTR_MAIL_GET_TOKEN"] = "取得する";
$MESS["INTR_MAIL_INP_CANCEL"] = "キャンセル";
$MESS["INTR_MAIL_INP_DOMAIN"] = "ドメイン名";
$MESS["INTR_MAIL_INP_PUBLIC_DOMAIN"] = "従業員はこのドメインにメールボックスを登録できます";
$MESS["INTR_MAIL_INP_TOKEN"] = "トークン";
$MESS["INTR_MAIL_MANAGE"] = "従業員のメールボックスを構成する";
?>