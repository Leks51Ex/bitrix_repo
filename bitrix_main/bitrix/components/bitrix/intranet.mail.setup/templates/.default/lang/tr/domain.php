<?
$MESS["INTR_MAIL_AJAX_ERROR"] = "Sorgu yürütme hatası";
$MESS["INTR_MAIL_CHECK_JUST_NOW"] = "saniye önce";
$MESS["INTR_MAIL_CHECK_TEXT"] = "Son kontrol tarihi #DATE#";
$MESS["INTR_MAIL_CHECK_TEXT_NA"] = "Etki alanı durumu için veri yok";
$MESS["INTR_MAIL_CHECK_TEXT_NEXT"] = "Bir sonraki posta kontrolü şu tarihte: #DATE#";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM"] = "Alan'dan bağlantıyı kesmek istiyor musunuz?";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM_TEXT"] = "Alanadını ayırmak istiyor musunuz? <br> Portal'a bağlı tüm posta kutuları da ayrılacaktır!";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME"] = "geçersiz ad";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME_HINT"] = "Etki alanı adı Latin harf, sayı ve kısa çizgi içerebilir; kısa çizgiyle başlayamaz veya bitemez, veya kısa çizgi 3. ve 4. sırada tekrar kullanılamaz. Etki alanı adını şunun ile bitirin <b>.com</b>.";
$MESS["INTR_MAIL_DOMAIN_CHECK"] = "Doğrula";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_HINT"] = ".com alanadında bir isim seç";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_TITLE"] = "Alanadı Seç";
$MESS["INTR_MAIL_DOMAIN_EMPTY_NAME"] = "Adı gir";
$MESS["INTR_MAIL_DOMAIN_EULA_CONFIRM"] = "<a href=\"http://www.bitrix24.ru/about/domain.php\" target=\"_blank\">Lisans Sözleşmesi</a> 'nin koşullarını kabul ediyorum.";
$MESS["INTR_MAIL_DOMAIN_HELP"] = "Eğer alan adını Yandex E-Posta Barındırma hizmeti kullanması için yapılandırmadıysan, şimdi yap. <br/><br/>
- <a href=\"https://passport.yandex.com/registration/\" target=\"_blank\">Yandex Barındırmalı E-Posta hesabı oluştur</a> ya da eğer varsa, var olan posta kutusunu kullan.
- Yandex Barındırmalı E-Posta hizmetine <a href=\"https://pdd.yandex.ru/domains_add/\" target=\"_blank\">alan adını ekle</a><sup> (<a href=\"http://help.yandex.ru/pdd/add-domain/add-exist.xml\" target=\"_blank\" title=\"Nasıl yapacağım?\">?</a>)</sup><br/>
- Alan adı sahipliğini doğrula <sup>(<a href=\"http://help.yandex.ru/pdd/confirm-domain.xml\" target=\"_blank\" title=\"Nasıl yapacağım?\">?</a>)</sup><br/>
- MX kayıtların yapılandır <sup>(<a href=\"http://help.yandex.ru/pdd/records.xml#mx\" target=\"_blank\" title=\"Nasıl yapacağım?\">?</a>)</sup> ya da alan adını Yandex’e delege et <sup>(<a href=\"http://help.yandex.ru/pdd/hosting.xml#delegate\" target=\"_blank\" title=\"Nasıl yapacağım?\">?</a>)</sup>
<br/><br/>
Yandex Barındırmalı E-Posta hesabın yapılandırıldığında, alan adını Bitrix24’üne ekle.:
<br/><br/>
- <a href=\"https://pddimp.yandex.ru/api2/admin/get_token\" target=\"_blank\" onclick=\"window.open(this.href, '_blank', 'height=480,width=720,top='+parseInt(screen.height/2-240)+',left='+parseInt(screen.width/2-360)); return false; \">Bir jeton al</a> (Formdaki alanları doldur ve \"Jeton al&quot;’a tıkla. Jeton göründüğünde, Panoya kopyala.)<br/>
- Alan adını ve jetonu parametrelere ekle.
";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1"] = "Adım&nbsp;1.&nbsp;&nbsp; Alanadı sahipliğini doğrula";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_A"] = "U <b>#SECRET_N#.html</b> adında bir dosyayı web sitesi kök dizinine yükle. Dosya şu metni içermelidir: <b>#SECRET_C#</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B"] = "CNAME kaydını yapılandırmak için, alanadını kaydettiğin kayıt ya da barındırma hizmetinde DNS kayıtlarına yazma iznin olmalı. Bu ayarları hesabında ya da kontrol panelde bulabilirsin.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAME"] = "Kayıt ismi: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAMEV"] = "<b>yamail-#SECRET_N#</b> (veya <b>yamail-#SECRET_N#.#DOMAIN#.</b> - arayüze bağlı. Bitimindeki noktaya dikkat et.)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_PROMPT"] = "Bu değerleri belirt:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_TYPE"] = "Kayıt türü: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUE"] = "Değer: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUEV"] = "<b>mail.yandex.ru.</b> (tekrar, noktaya dikkat et)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C"] = "Alanadı kayıt bilgilerindeki iletişim e-posta adresini  <b>#SECRET_N#@yandex.ru</b> olarak ayarla. E-posta adresini ayarlamak için alanadı servis sağlayıcının kontrol panelini kullan.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C_HINT"] = "Alanadı onaylanır onaylanmaz bu adresi gerçek e-posta adresinle değiştir.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_HINT"] = "Alan sahipliğini doğrularken herhangi bir sorun olursa lütfen <a href=\"http://www.bitrixsoft.com/support/\" target=\"_blank\">www.bitrixsoft.com/support/</a> adresindeki yardım masasıyla iletişime geç.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_OR"] = "VEYA";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_PROMPT"] = "Aşağıdaki yöntemlerden birini kullanarak, belirlenen alanadının sahibi olduğunu onaylaman gerekiyor:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2"] = "Adım&nbsp;2.&nbsp;&nbsp; MX kayıtlarını yapılandır";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_HINT"] = "Yandex ile ilgisi olmayan diğer tüm MX ve TXT kayıtlarını sil. MX kayıtlarında yapılan değişikliklerin internet üzerinde güncellenmesi birkaç saat ile 3 gün arasında bir zaman alabilir.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_MXPROMPT"] = "Ekteki parametrelerle yeni bir MX kayıt oluştur:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAME"] = "Kayıt ismi: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAMEV"] = "<b>@</b> (ya da <b>#DOMAIN#.</b> - gerekirse. Sondaki noktaya dikkat et)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PRIORITY"] = "Öncelik: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PROMPT"] = "Etki alanının sahipliğini onayladığın zaman, web barındırmandaki, onun yerini tutan MX kayıtlarını da değiştirmen gerekecek.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TITLE"] = "MX kayıtlarını yapılandır";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TYPE"] = "Kayıt türü:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUE"] = "Değer:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUEV"] = "<b>mx.yandex.net.</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_TITLE"] = "Alanadını Bitrix24'e bağlamak için birkaç adım var.";
$MESS["INTR_MAIL_DOMAIN_LONG_NAME"] = ".com'dan önce maks. 63 karakter";
$MESS["INTR_MAIL_DOMAIN_NAME_FREE"] = "bu isim kullanılabilir";
$MESS["INTR_MAIL_DOMAIN_NAME_OCCUPIED"] = "bu isim kullanılamaz";
$MESS["INTR_MAIL_DOMAIN_NOCONFIRM"] = "Etki alanı onaylanmadı";
$MESS["INTR_MAIL_DOMAIN_NOMX"] = "MX kayıtları yapılandırılmadı";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TEXT"] = "Bir kez bağlandığında, alanadını değiştiremeyeceksin <br>ya da başka bir tane alacaksın çünkü <br>Bitrix24'üne sadece bir alanadı kayıt edebilirsin.<br><br><b>#DOMAIN#</b> adını uygun bulursan yeni alanadını onayla.";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TITLE"] = "Lütfen alanadını düzgün girdiğini kontrol et.";
$MESS["INTR_MAIL_DOMAIN_REMOVE"] = "Ayır";
$MESS["INTR_MAIL_DOMAIN_SAVE"] = "Kaydet";
$MESS["INTR_MAIL_DOMAIN_SAVE2"] = "Ekle";
$MESS["INTR_MAIL_DOMAIN_SETUP_HINT"] = "Alanadının onaylanması 1 saatten birkaç güne kadar sürebilir.";
$MESS["INTR_MAIL_DOMAIN_SHORT_NAME"] = ".com'dan önce en az iki karakter";
$MESS["INTR_MAIL_DOMAIN_STATUS_CONFIRM"] = "Onaylandı";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOCONFIRM"] = "Onaylanmadı";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOMX"] = "MX kayıtları yapılandırılmadı";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE"] = "Etki alanı bağlantı durumu";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE2"] = "Etki alanı doğruladı";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_MORE"] = "Diğer seçenekleri göster";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_TITLE"] = "Lütfen başka bir isim uydur veya birini seç";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_WAIT"] = "Olası isimleri arıyor...";
$MESS["INTR_MAIL_DOMAIN_TITLE"] = "Alanadın Yandex.Mail ile çalışması için yapılandırıldıysa, alanadını ve jetonu aşağıdaki forma gir.";
$MESS["INTR_MAIL_DOMAIN_TITLE2"] = "Etki alanı artık portalına bağlandı";
$MESS["INTR_MAIL_DOMAIN_TITLE3"] = "E-posta için etki alanı";
$MESS["INTR_MAIL_DOMAIN_WAITCONFIRM"] = "Onay bekliyor";
$MESS["INTR_MAIL_DOMAIN_WAITMX"] = "MX kayıtları yapılandırılmadı";
$MESS["INTR_MAIL_DOMAIN_WHOIS"] = "Kontrol Et";
$MESS["INTR_MAIL_GET_TOKEN"] = "Al";
$MESS["INTR_MAIL_INP_CANCEL"] = "İptal";
$MESS["INTR_MAIL_INP_DOMAIN"] = "Etki alanı adı";
$MESS["INTR_MAIL_INP_PUBLIC_DOMAIN"] = "Çalışanlar bu alanadında e-posta kutularına kayıt olabilir";
$MESS["INTR_MAIL_INP_TOKEN"] = "Belirteç";
$MESS["INTR_MAIL_MANAGE"] = "Çalışan posta kutularını yapılandır";
?>