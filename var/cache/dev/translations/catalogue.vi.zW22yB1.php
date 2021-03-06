<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Giá trị này phải là sai.',
    'This value should be true.' => 'Giá trị này phải là đúng.',
    'This value should be of type {{ type }}.' => 'Giá trị này phải là kiểu  {{ type }}.',
    'This value should be blank.' => 'Giá trị này phải rỗng.',
    'The value you selected is not a valid choice.' => 'Giá trị bạn vừa chọn không hợp lệ.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Bạn phải chọn ít nhất {{ limit }} lựa chọn.|Bạn phải chọn ít nhất {{ limit }} lựa chọn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Bạn phải chọn nhiều nhất {{ limit }} lựa chọn.|Bạn phải chọn nhiều  nhất {{ limit }} lựa chọn.',
    'One or more of the given values is invalid.' => 'Một hoặc nhiều giá trị được chọn không hợp lệ.',
    'This field was not expected.' => 'Lĩnh vực này không được dự kiến.',
    'This field is missing.' => 'Lĩnh vực này bị thiếu.',
    'This value is not a valid date.' => 'Giá trị không phải là ngày hợp lệ.',
    'This value is not a valid datetime.' => 'Giá trị không phải là ngày tháng hợp lệ.',
    'This value is not a valid email address.' => 'Giá trị này không phải là email hợp lệ.',
    'The file could not be found.' => 'Tập tin không tìm thấy.',
    'The file is not readable.' => 'Tập tin không thể đọc được.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn ({{ size }} {{ suffix }}). Kích thước tối đa cho phép {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Kiểu mime của tập tin không hợp lệ ({{ type }}). Kiểu hợp lệ là {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Giá trị phải bằng hoặc nhỏ hơn {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.|Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.',
    'This value should be {{ limit }} or more.' => 'Giá trị phải lớn hơn hoặc bằng {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.|Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.',
    'This value should not be blank.' => 'Giá trị không được phép để trống.',
    'This value should not be null.' => 'Giá trị không được phép rỗng.',
    'This value should be null.' => 'Giá trị phải rỗng.',
    'This value is not valid.' => 'Giá trị không hợp lệ.',
    'This value is not a valid time.' => 'Giá trị không phải là thời gian hợp lệ.',
    'This value is not a valid URL.' => 'Giá trị không phải là địa chỉ URL hợp lệ.',
    'The two values should be equal.' => 'Hai giá trị phải bằng nhau.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn. Kích thước tối đa cho phép là {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tập tin quá lớn.',
    'The file could not be uploaded.' => 'Tập tin không thể tải lên.',
    'This value should be a valid number.' => 'Giá trị phải là con số.',
    'This file is not a valid image.' => 'Tập tin không phải là hình ảnh hợp lệ.',
    'This is not a valid IP address.' => 'Địa chỉ IP không hợp lệ.',
    'This value is not a valid language.' => 'Giá trị không phải là ngôn ngữ hợp lệ.',
    'This value is not a valid locale.' => 'Giá trị không phải là một bản địa địa phương hợp lệ.',
    'This value is not a valid country.' => 'Giá trị không phải là quốc gia hợp lệ.',
    'This value is already used.' => 'Giá trị đã được sử dụng.',
    'The size of the image could not be detected.' => 'Kích thước của hình ảnh không thể xác định.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Chiều rộng của hình quá lớn ({{ width }}px). Chiều rộng tối đa phải là {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Chiều rộng của hình quá thấp ({{ width }}px). Chiều rộng tối thiểu phải là {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Chiều cao của hình quá cao ({{ height }}px). Chiều cao tối đa phải là {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Chiều cao của hình quá thấp ({{ height }}px). Chiều cao tối thiểu phải là {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Giá trị này phải là mật khẩu hiện tại của người dùng.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Giá trị này phải có chính xác {{ limit }} kí tự.|Giá trị này phải có chính xác {{ limit }} kí tự.',
    'The file was only partially uploaded.' => 'Tập tin chỉ được tải lên một phần.',
    'No file was uploaded.' => 'Tập tin không được tải lên.',
    'No temporary folder was configured in php.ini.' => 'Thư mục tạm không được định nghĩa trong php.ini.',
    'Cannot write temporary file to disk.' => 'Không thể ghi tập tin tạm ra đĩa.',
    'A PHP extension caused the upload to fail.' => 'Một PHP extension đã phá hỏng quá trình tải lên của tập tin.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Danh sách phải chứa {{ limit }} thành phần hoặc nhiều hơn.|Danh sách phải chứa {{ limit }} thành phần hoặc nhiều hơn.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Danh sách phải chứa {{ limit }} thành phần hoặc ít hơn.|Danh sách phải chứa {{ limit }} thành phần hoặc ít hơn.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Danh sách phải chứa chính xác {{ limit }} thành phần.|Danh sách phải chứa chính xác {{ limit }} thành phần.',
    'Invalid card number.' => 'Số thẻ không hợp lệ.',
    'Unsupported card type or invalid card number.' => 'Thẻ không được hỗ trợ hoặc số thẻ không hợp lệ.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Giá trị không phải là International Bank Account Number (IBAN) hợp lệ.',
    'This value is not a valid ISBN-10.' => 'Giá trị không phải là ISBN-10 hợp lệ.',
    'This value is not a valid ISBN-13.' => 'Giá trị không phải là ISBN-13 hợp lệ.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Giá trị không phải là ISBN-10 hoặc ISBN-13 hợp lệ.',
    'This value is not a valid ISSN.' => 'Giá trị không phải là ISSN hợp lệ.',
    'This value is not a valid currency.' => 'Giá trị không phải là đơn vị tiền tệ hợp lệ.',
    'This value should be equal to {{ compared_value }}.' => 'Giá trị phải bằng {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Giá trị phải lớn hơn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Giá trị phải lớn hơn hoặc bằng {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị phải giống  {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Giá trị phải bé hơn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Giá trị phải nhỏ hơn hoặc bằng {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Giá trị không được phép bằng {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị không được phép giống như {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Tỷ lệ bức ảnh quá lớn ({{ ratio }}). Tỷ lệ tối đa cho phép là {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Tỷ lệ bức ảnh quá nhỏ ({{ ratio }}). Tỷ lệ tối thiểu mong muốn là {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bức ảnh là hình vuông ({{ width }}x{{ height }}px). Ảnh hình vuông không được phép.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bức ảnh theo chiều ngang ({{ width }}x{{ height }}px). Ảnh chiều ngang không được phép.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bức ảnh theo chiều dọc ({{ width }}x{{ height }}px). Ảnh chiều dọc không được phép.',
    'An empty file is not allowed.' => 'Một file rỗng không được phép.',
    'The host could not be resolved.' => 'Máy chủ không thể được tìm thấy.',
    'This value does not match the expected {{ charset }} charset.' => 'Giá trị này không đúng định dạng bộ ký tự mong muốn {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Giá trị này không đúng định dạng mã định danh doanh nghiệp (BIC).',
    'Error' => 'Lỗi',
    'This is not a valid UUID.' => 'Giá trị này không đúng định dạng UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Giá trị này nên là bội số của {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Mã định danh doanh nghiệp (BIC) này không liên kết với IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Giá trị này nên đúng định dạng JSON.',
    'This collection should contain only unique elements.' => 'Danh sách này chỉ nên chứa các phần tử khác nhau.',
    'This value should be positive.' => 'Giá trị này có thể thực hiện được.',
    'This value should be either positive or zero.' => 'Giá trị này có thể thực hiện được hoặc bằng không.',
    'This value should be negative.' => 'Giá trị này nên bị từ chối.',
    'This value should be either negative or zero.' => 'Giá trị này nên bị từ chối hoặc bằng không.',
    'This value is not a valid timezone.' => 'Giá trị này không phải là múi giờ hợp lệ.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Mật khẩu này đã bị rò rỉ dữ liệu, không được sử dụng nữa. Xin vui lòng sử dụng mật khẩu khác.',
    'This value should be between {{ min }} and {{ max }}.' => 'Giá trị này nên thuộc giữa {{ min }} và {{ max }}.',
    'This value is not a valid hostname.' => 'Giá trị này không phải là tên máy chủ hợp lệ.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Số lượng các phần tử trong bộ sưu tập này nên là bội số của {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Giá trị này nên thỏa mãn ít nhất một trong những ràng buộc sau:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Mỗi phần tử trong bộ sưu tập này nên thỏa mãn những ràng buộc của nó.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Giá trị này không phải là mã số chứng khoán quốc tế (ISIN) hợp lệ.',
    'This value should be a valid expression.' => 'Giá trị này phải là một biểu thức hợp lệ.',
    'This value is not a valid CSS color.' => 'Giá trị này không phải là màu CSS hợp lệ.',
    'This value is not a valid CIDR notation.' => 'Giá trị này không phải là ký hiệu CIDR hợp lệ.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Giá trị của mặt nạ mạng phải nằm trong khoảng từ {{ min }} đến {{ max }}.',
    'This form should not contain extra fields.' => 'Mẫu này không nên chứa trường mở rộng.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Tập tin tải lên quá lớn. Vui lòng thử lại với tập tin nhỏ hơn.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token không hợp lệ. Vui lòng thử lại.',
    'This value is not a valid HTML5 color.' => 'Giá trị này không phải là màu HTML5 hợp lệ.',
    'Please enter a valid birthdate.' => 'Vui lòng nhập ngày sinh hợp lệ.',
    'The selected choice is invalid.' => 'Lựa chọn không hợp lệ.',
    'The collection is invalid.' => 'Danh sách không hợp lệ.',
    'Please select a valid color.' => 'Vui lòng chọn một màu hợp lệ.',
    'Please select a valid country.' => 'Vui lòng chọn đất nước hợp lệ.',
    'Please select a valid currency.' => 'Vui lòng chọn tiền tệ hợp lệ.',
    'Please choose a valid date interval.' => 'Vui lòng chọn một khoảng thời gian hợp lệ.',
    'Please enter a valid date and time.' => 'Vui lòng nhập ngày và thời gian hợp lệ.',
    'Please enter a valid date.' => 'Vui lòng nhập ngày hợp lệ.',
    'Please select a valid file.' => 'Vui lòng chọn tệp hợp lệ.',
    'The hidden field is invalid.' => 'Phạm vi ẩn không hợp lệ.',
    'Please enter an integer.' => 'Vui lòng nhập một số nguyên.',
    'Please select a valid language.' => 'Vui lòng chọn ngôn ngữ hợp lệ.',
    'Please select a valid locale.' => 'Vui lòng chọn miền hợp lệ.',
    'Please enter a valid money amount.' => 'Vui lòng nhập một khoảng tiền hợp lệ.',
    'Please enter a number.' => 'Vui lòng nhập một con số.',
    'The password is invalid.' => 'Mật khẩu không hợp lệ.',
    'Please enter a percentage value.' => 'Vui lòng nhập một giá trị phần trăm.',
    'The values do not match.' => 'Các giá trị không phù hợp.',
    'Please enter a valid time.' => 'Vui lòng nhập thời gian hợp lệ.',
    'Please select a valid timezone.' => 'Vui lòng chọn múi giờ hợp lệ.',
    'Please enter a valid URL.' => 'Vui lòng nhập một URL hợp lệ.',
    'Please enter a valid search term.' => 'Vui lòng nhập chuỗi tìm kiếm hợp lệ.',
    'Please provide a valid phone number.' => 'Vui lòng cung cấp số điện thoại hợp lệ.',
    'The checkbox has an invalid value.' => 'Hộp kiểm có một giá trị không hợp lệ.',
    'Please enter a valid email address.' => 'Vui lòng nhập địa chỉ email hợp lệ.',
    'Please select a valid option.' => 'Vui lòng chọn một phương án hợp lệ.',
    'Please select a valid range.' => 'Vui lòng nhập một phạm vi hợp lệ.',
    'Please enter a valid week.' => 'Vui lòng nhập một tuần hợp lệ.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Có lỗi trong quá trình xác thực.',
    'Authentication credentials could not be found.' => 'Thông tin dùng để xác thực không tìm thấy.',
    'Authentication request could not be processed due to a system problem.' => 'Yêu cầu xác thực không thể thực hiện do lỗi của hệ thống.',
    'Invalid credentials.' => 'Thông tin dùng để xác thực không hợp lệ.',
    'Cookie has already been used by someone else.' => 'Cookie đã được dùng bởi người dùng khác.',
    'Not privileged to request the resource.' => 'Không được phép yêu cầu tài nguyên.',
    'Invalid CSRF token.' => 'Mã CSRF không hợp lệ.',
    'No authentication provider found to support the authentication token.' => 'Không tìm thấy nhà cung cấp dịch vụ xác thực nào cho mã xác thực mà bạn sử dụng.',
    'No session available, it either timed out or cookies are not enabled.' => 'Không tìm thấy phiên làm việc. Phiên làm việc hoặc cookie có thể bị tắt.',
    'No token could be found.' => 'Không tìm thấy mã token.',
    'Username could not be found.' => 'Không tìm thấy tên người dùng.',
    'Account has expired.' => 'Tài khoản đã hết hạn.',
    'Credentials have expired.' => 'Thông tin xác thực đã hết hạn.',
    'Account is disabled.' => 'Tài khoản bị tạm ngừng.',
    'Account is locked.' => 'Tài khoản bị khóa.',
    'Too many failed login attempts, please try again later.' => 'Đăng nhập sai quá nhiều lần, vui lòng thử lại lần nữa.',
    'Invalid or expired login link.' => 'Liên kết đăng nhập không hợp lệ hoặc quá hạn.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Quá nhiều lần thử đăng nhập không thành công, vui lòng thử lại sau %minutes% phút.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Quá nhiều lần thử đăng nhập không thành công, vui lòng thử lại sau %minutes% phút.',
  ),
));

$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
  'message' => 
  array (
    'CRYPTO_DESCRIPTION_PHA' => 'Phala Network tackles the issue of trust in the computation cloud.<br><br>This blockchain is a trustless computation platform that enables massive cloud processing without sacrificing data confidentiality. Built around TEE-based privacy technology already embedded into modern processors, Phala Network’s distributed computing cloud is versatile and confidential. By separating the consensus mechanism from computation, Phala ensures processing power is highly scalable. Together, this creates the infrastructure for a powerful, secure, and scalable trustless computing cloud.<br><br>As a member parachain of the Polkadot cross-chain ecosystem, Phala will be able to provide computing power to other blockchain applications while protecting the data layer, enabling possibilities like privacy-protected DeFi trading positions and transaction history, co-computing DID confidential data, developing light-node cross-chain bridges, and more.<br><br>On-chain services currently being developed on Phala Network include Web3 Analytics -> high-performance smart contracts from Phala enable highly concurrent mass data analytics with privacy, paving the way for an alternative to Google Analytics that inherently respects individual confidentiality.',
    'ERROR_MESSAGE_PASSWORD_CONFIRM' => 'Vos mots de passe ne correspondent pas',
    'ERROR_MESSAGE_PASSWORD_MIN_LENGTH' => 'Votre mot de passe doit comporter au moins 8 caractères',
    'LABEL_ADDRESS' => 'Addresse',
    'LABEL_API_KEY' => 'Clé API',
    'LABEL_EMAIL' => 'E-mail',
    'LABEL_PASSPHRASE' => 'La phrase de sécurité de l\'API',
    'LABEL_PASSWORD' => 'Mot de passe',
    'LABEL_PASSWORD_REPEAT' => 'Confirmer le mot de passe',
    'LABEL_PLATFORMS' => 'Plateformes',
    'LABEL_PSEUDO' => 'Pseudo',
    'LABEL_PUBLIC_KEY' => 'Clé API publique',
    'LABEL_REMEMBER_ME' => 'Se souvenir de moi',
    'LABEL_SECRET_KEY' => 'Clé API secrète',
    'LABEL_SELECT_PLATFORM' => 'Sélectionner une plateforme',
    'PATH_HELP' => 'app_aide',
    'PATH_LOGIN' => 'app_connexion',
    'PATH_LOGOUT' => 'app_deconnexion',
    'PATH_PANEL' => 'app_panel',
    'PATH_PORTFOLIO' => 'app_portfolio',
    'PATH_SIGNIN' => 'app_inscription',
    'PLACEHOLDER_ADDRESS_CRYPTO' => '0x000000000000...',
    'PLACEHOLDER_API_KEY' => 'Insérer votre clé API',
    'PLACEHOLDER_EMAIL' => 'Entrer une adresse e-mail valide',
    'PLACEHOLDER_PASSPHRASE' => '7-32 caractères',
    'PLACEHOLDER_PASSWORD' => 'Entrer un mot de passe',
    'PLACEHOLDER_PASSWORD_REPEAT' => 'Confirmer votre mot de passe',
    'PLACEHOLDER_PSEUDO' => 'Choisissez un pseudonyme',
    'PLACEHOLDER_PUBLIC_KEY' => 'Insérer votre clé API publique',
    'PLACEHOLDER_SECRET_KEY' => 'Insérer votre clé API secrète',
    'TEXT_CGU' => 'Conditions générales d\'utilisations',
    'TEXT_I_HAVE_READ_AND_I_AGREE' => 'J\'ai lu et j\'accepte les',
    'TEXT_LEGAL_NOTICE' => 'Mentions légales',
    'TEXT_MODAL_ADD_EXCHANGE_DISCLAIMER' => '<b><u>⚠ ATTENTION ⚠</u></b><br> Les clé API doivent être en lecture seule, merci de vous référer à l\'icône d\'information à coté de la sélection de la platforme. Pour plus d\'informations -> <a href="#">aide</a>',
    'TITLE_ADD_EXCHANGE' => 'Ajouter un échange ou un wallet',
    'TITLE_ADD_OR_CONSULT_ACCOUNT' => 'Ajouter ou consulter vos comptes',
    'TITLE_ADMIN' => 'Admin',
    'TITLE_ATH' => 'ATH',
    'TITLE_ATL' => 'ATL',
    'TITLE_CIRCULATING_SUPPLY' => 'Circulating Supply',
    'TITLE_CLOSE' => 'Fermer',
    'TITLE_CONNECT' => 'Se connecter',
    'TITLE_CONNECT_WALLET' => 'Connecter un portfeuille',
    'TITLE_CONSULT_CRYPTO_WALLET' => 'Consulter votre portefeuille de crypto-monnaie',
    'TITLE_CONTRACT_ADDRESS' => 'Contrat',
    'TITLE_CREATE_ACCOUNT' => 'Créer votre compte ici',
    'TITLE_EDIT' => 'Modifier',
    'TITLE_HELP' => 'Aide',
    'TITLE_HOME' => 'Accueil',
    'TITLE_IS_MEMBER' => 'Déjà inscrit ?',
    'TITLE_LOG_YOU' => 'Connecter vous ici',
    'TITLE_LOGIN' => 'Connexion',
    'TITLE_LOGOUT' => 'Déconnexion',
    'TITLE_MARKET_CAP' => 'Capitalisation',
    'TITLE_MY_ACCOUNT' => 'Mon compte',
    'TITLE_MY_PLATFORMS' => 'Mes plateformes',
    'TITLE_MY_PORTFOLIO' => 'Mon portfolio',
    'TITLE_MY_WALLET' => 'Mon Portefeuille',
    'TITLE_NOT_MEMBER' => 'Pas encore membre ?',
    'TITLE_PORTFOLIO' => 'Portfolio',
    'TITLE_SAVE' => 'Enregistrer',
    'TITLE_SIGNIN' => 'Inscription',
    'TITLE_TOTAL_SUPPLY' => 'Total Supply',
    'TITLE_WELCOME' => 'Bienvenue',
    'TITLE_WELCOME_BACK' => 'Ravie de vous revoir',
    'TITLE_WELCOME_IN_WEBSTITE' => 'Bienvenue sur My Crypto Portfolio',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;
