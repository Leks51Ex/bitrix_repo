<?
$MESS["INTR_MAIL_AJAX_ERROR"] = "Lỗi trong việc thực hiện truy vấn";
$MESS["INTR_MAIL_CHECK_JUST_NOW"] = "giây trước";
$MESS["INTR_MAIL_CHECK_TEXT"] = "Kiểm tra lần cuối vào #DATE#";
$MESS["INTR_MAIL_CHECK_TEXT_NA"] = "Không có dữ liệu cho tình trạng tên miền";
$MESS["INTR_MAIL_CHECK_TEXT_NEXT"] = "Lần kiểm tra mail kế tiếp #DATE#";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM"] = "Bạn có muốn tách các tên miền? Tất cả các hộp thư gắn liền với Bitrix24 sẽ được tách ra!";
$MESS["INTR_MAIL_DOMAINREMOVE_CONFIRM_TEXT"] = "Bạn có muốn để tách các tên miền?<br>Tất cả các hộp thư gắn vào portal sẽ được tách ra!";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME"] = "tên không hợp lệ";
$MESS["INTR_MAIL_DOMAIN_BAD_NAME_HINT"] = "Tên miền có thể bao gồm các ký tự Latin, chữ số và dấu gạch nối; không thể bắt đầu hoặc kết thúc với một dấu gạch ngang, hoặc lặp lại các dấu gạch ngang ở vị trí 3 và 4 Kết thúc tên với <b>.com</b>.";
$MESS["INTR_MAIL_DOMAIN_CHECK"] = "Xác minh";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_HINT"] = "Lựa chọn tên trong tên miền .com";
$MESS["INTR_MAIL_DOMAIN_CHOOSE_TITLE"] = "Lựa chọn Tên miền";
$MESS["INTR_MAIL_DOMAIN_EMPTY_NAME"] = "nhập tên";
$MESS["INTR_MAIL_DOMAIN_EULA_CONFIRM"] = "Tôi chấp nhận các điều khoản của <a href=\"http://www.bitrix24.ru/about/domain.php\" target=\"_blank\">Thỏa thuận Giấy phép</a>";
$MESS["INTR_MAIL_DOMAIN_HELP"] = "Nếu bạn không có tên miền của bạn được cấu hình để sử dụng với Yandex Hosted E-Mail, làm điều đó ngay bây giờ.
<br/><br/>
- <a href=\"https://passport.yandex.com/registration/\" target=\"_blank\">Tạo một tài khoản Yandex Hosted E-Mail</a> hoặc sử dụng một hộp thư hiện có nếu bạn có một.
- <a href=\"https://pdd.yandex.ru/domains_add/\" target=\"_blank\">Đính kèm tên miền của bạn</a> vào Yandex Hosted E-Mail<sup> (<a href=\"http://help.yandex.ru/pdd/add-domain/add-exist.xml\" target=\"_blank\" title=\"Làm thế nào để làm điều đó?\">?</a>)</sup><br/>
- Xác minh quyền sở hữu tên miền của bạn <sup>(<a href=\"http://help.yandex.ru/pdd/confirm-domain.xml\" target=\"_blank\" title=\"Làm thế nào để làm điều đó?\">?</a>)</sup><br/>
- Cấu hình các bản ghi MX <sup>(<a href=\"http://help.yandex.ru/pdd/records.xml#mx\" target=\"_blank\" title=\"Làm thế nào để làm điều đó?\">?</a>)</sup> hoặc uỷ quyền tên miền của bạn đến Yandex <sup>(<a href=\"http://help.yandex.ru/pdd/hosting.xml#delegate\" target=\"_blank\" title=\"Làm thế nào để làm điều đó?\">?</a>)</sup>
<br/><br/>
Một khi tài khoản Yandex Hosted E-Mail của bạn  đã được cấu hình, đính kèm các miền để Bitrix24 của bạn:
<br/><br/>
- <a href=\"https://pddimp.yandex.ru/api2/admin/get_token\" target=\"_blank\" onclick=\"window.open(this.href, '_blank', 'height=480,width=720,top='+parseInt(screen.height/2-240)+',left='+parseInt(screen.width/2-360)); return false; \">Nhận một mã thông báo</a> (điền vào mẫu và nhấp \"Nhận mã thông báo&quot;. Một khi các mã thông báo xuất hiện, sao chép nó vào clipboard)<br/>
- Thêm tên miền và mã thông báo đến các tham số.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1"] = "Bước&nbsp;1.&nbsp;&nbsp;Xác nhận quyền sở hữu tên miền";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_A"] = "Tải lên một tập tin có tên <b>#SECRET_N#.html</b> vào thư mục gốc trang web của bạn. Các tập tin phải có các văn bản:<b>#SECRET_C#</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B"] = "Để cấu hình các bản ghi CNAME, bạn cần phải có quyền ghi vào các bản ghi DNS của tên miền của bạn tại một công ty đăng ký hoặc các trang web dịch vụ hosting mà bạn đã đăng ký tên miền của bạn. Bạn sẽ tìm thấy các thiết lập trong tài khoản của bạn hoặc bảng điều khiển.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAME"] = "Tên bản ghi:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_NAMEV"] = "<b>yamail-#SECRET_N#</b> (or <b>yamail-#SECRET_N#.#DOMAIN#.</b> mà phụ thuộc vào giao diện. Chú ý thời gian ở cuối.)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_PROMPT"] = "Xác định các giá trị:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_TYPE"] = "Loại bản ghi:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUE"] = "Giá trị: ";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_B_VALUEV"] = "<b>mail.yandex.ru.</b> (một lần nữa, thông báo thời gian)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C"] = "Thiết lập các địa chỉ liên hệ e-mail trong thông tin đăng ký tên miền của bạn <b>#DOMAIN#+#SECRET_N#@yandex.ru</b>. Sử dụng bảng điều khiển đăng ký tên miền của bạn để thiết lập địa chỉ e-mail.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_C_HINT"] = "Tin nhắn gửi đến <b>#DOMAIN#+#SECRET_N#@yandex.ru</b> sẽ được gửi đến <b>#DOMAIN#@yandex.ru</b>. Nếu đăng ký của bạn không chấp nhận các dấu cộng ở địa chỉ e-mail, ghi rõ <b>#SECRET_N#@yandex.ru</b>.  Một khi tên miền của bạn được xác nhận, thay đổi địa chỉ này đến địa chỉ e-mail thật của bạn.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_HINT"] = "Nếu bạn có bất kỳ câu hỏi xác minh quyền sở hữu tên miền của bạn, xin vui lòng liên hệ với trung tâm hỗ trợ tại <a href=\"http://www.bitrixsoft.com/support/\" target=\"_blank\">www.bitrixsoft.com/support/</a>.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_OR"] = "hoặc";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP1_PROMPT"] = "Bạn cần phải xác nhận rằng bạn sở hữu tên miền được quy định bằng một trong những phương pháp sau đây:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2"] = "Bước&nbsp;2.&nbsp;&nbsp;Cấu hình các bản ghi MX";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_HINT"] = "Xóa tất cả các bản ghi MX và TXT khác mà không liên quan đến Yandex. Thay đổi trên bản ghi MX có thể mất từ ​​vài giờ đến ba ngày để được cập nhật trên Internet.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_MXPROMPT"] = "Tạo một bản ghi MX mới với các tham số sau:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAME"] = "Tên bản ghi:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_NAMEV"] = "<b>@</b> (or <b>#DOMAIN#.</b> - nếu có yêu cầu. Chú ý thời gian ở cuối)";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PRIORITY"] = "Ưu tiên:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_PROMPT"] = "Một khi bạn đã xác nhận quyền sở hữu tên miền của bạn, bạn sẽ phải thay đổi các bản ghi MX tương ứng trên máy chủ web của bạn.";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TITLE"] = "Cấu hình các bản ghi MX";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_TYPE"] = "Loại bản ghi:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUE"] = "Giá trị:";
$MESS["INTR_MAIL_DOMAIN_INSTR_STEP2_VALUEV"] = "<b>mx.yandex.net.</b>";
$MESS["INTR_MAIL_DOMAIN_INSTR_TITLE"] = "Để kết nối tên miền của bạn đến Bitrix24, có một vài bước.";
$MESS["INTR_MAIL_DOMAIN_LONG_NAME"] = "tối đa. 63 ký tự trước .com";
$MESS["INTR_MAIL_DOMAIN_NAME_FREE"] = "tên này có sẵn";
$MESS["INTR_MAIL_DOMAIN_NAME_OCCUPIED"] = "tên này không có sẵn";
$MESS["INTR_MAIL_DOMAIN_NOCONFIRM"] = "Tên miền không được xác nhận";
$MESS["INTR_MAIL_DOMAIN_NOMX"] = "Bản ghi MX không cấu hình";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TEXT"] = "Sau khi kết nối, bạn sẽ không thể thay đổi tên miền<br>hoặc lấy người khác do bạn có thể đăng ký<br>chỉ có một miền với Bitrix24 của bạn.<br><br>Nếu bạn tìm thấy tên <b>#DOMAIN#</b> là chính xác, xác nhận tên miền mới của bạn.";
$MESS["INTR_MAIL_DOMAIN_REG_CONFIRM_TITLE"] = "Hãy kiểm tra xem bạn đã nhập đúng tên miền.";
$MESS["INTR_MAIL_DOMAIN_REMOVE"] = "Tháo";
$MESS["INTR_MAIL_DOMAIN_SAVE"] = "Lưu";
$MESS["INTR_MAIL_DOMAIN_SAVE2"] = "Đính kèm";
$MESS["INTR_MAIL_DOMAIN_SETUP_HINT"] = "Tên miền có thể mất từ ​​1 giờ đến vài ngày để xác nhận.";
$MESS["INTR_MAIL_DOMAIN_SHORT_NAME"] = "ít nhất là hai ký tự trước .com";
$MESS["INTR_MAIL_DOMAIN_STATUS_CONFIRM"] = "Đã xác nhận";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOCONFIRM"] = "Không có tên miền";
$MESS["INTR_MAIL_DOMAIN_STATUS_NOMX"] = "Bản ghi MX không được cấu hình";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE"] = "Trạng thái liên kết Tên miền";
$MESS["INTR_MAIL_DOMAIN_STATUS_TITLE2"] = "Xác nhận tên miền";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_MORE"] = "Hiển thị các lựa chọn khác";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_TITLE"] = "Hãy đến với tên khác hoặc chọn một";
$MESS["INTR_MAIL_DOMAIN_SUGGEST_WAIT"] = "Tìm kiếm cho tên có thế...";
$MESS["INTR_MAIL_DOMAIN_TITLE"] = "Nếu tên miền của bạn được cấu hình để làm việc trong Yandex.Mail cho tên miền, chỉ cần nhập tên miền và mã thông báo theo mẫu dưới đây";
$MESS["INTR_MAIL_DOMAIN_TITLE2"] = "Tên miền hiện đang kết nối với portal của bạn";
$MESS["INTR_MAIL_DOMAIN_TITLE3"] = "Tên miền cho email của bạn";
$MESS["INTR_MAIL_DOMAIN_WAITCONFIRM"] = "Chờ xác nhận";
$MESS["INTR_MAIL_DOMAIN_WAITMX"] = "Bản ghi MX không cấu hình";
$MESS["INTR_MAIL_DOMAIN_WHOIS"] = "Kiếm tra";
$MESS["INTR_MAIL_GET_TOKEN"] = "lấy";
$MESS["INTR_MAIL_INP_CANCEL"] = "Hủy bỏ";
$MESS["INTR_MAIL_INP_DOMAIN"] = "Tên miền";
$MESS["INTR_MAIL_INP_PUBLIC_DOMAIN"] = "Nhân viên có thể đăng ký hộp thư trong tên miền này";
$MESS["INTR_MAIL_INP_TOKEN"] = "Mã thông báo";
$MESS["INTR_MAIL_MANAGE"] = "Cấu hình hộp thư nhân viên";
?>