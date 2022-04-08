<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'validators' => 
  array (
    'This value should be false.' => '該變數的值應為 false 。',
    'This value should be true.' => '該變數的值應為 true 。',
    'This value should be of type {{ type }}.' => '該變數的類型應為 {{ type }} 。',
    'This value should be blank.' => '該變數應為空。',
    'The value you selected is not a valid choice.' => '選定變數的值不是有效的選項。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要選擇 {{ limit }} 個選項。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能選擇 {{ limit }} 個選項。',
    'One or more of the given values is invalid.' => '一個或者多個給定的值無效。',
    'This field was not expected.' => '此字段是沒有預料到。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '該值不是一個有效的日期（date）。',
    'This value is not a valid datetime.' => '該值不是一個有效的日期時間（datetime）。',
    'This value is not a valid email address.' => '該值不是一個有效的郵件地址。',
    'The file could not be found.' => '找不到檔案。',
    'The file is not readable.' => '無法讀取檔案。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大 ({{ size }} {{ suffix }})。檔案大小不可以超過 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '無效的檔案類型 ({{ type }}) 。允許的檔案類型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '這個變數的值應該小於或等於 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字串太長，長度不可超過 {{ limit }} 個字元。',
    'This value should be {{ limit }} or more.' => '該變數的值應該大於或等於 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字串太短，長度不可少於 {{ limit }} 個字元。',
    'This value should not be blank.' => '該變數不應為空白。',
    'This value should not be null.' => '該值不應為 null 。',
    'This value should be null.' => '該值應為 null 。',
    'This value is not valid.' => '無效的數值 。',
    'This value is not a valid time.' => '該值不是一個有效的時間。',
    'This value is not a valid URL.' => '該值不是一個有效的 URL 。',
    'The two values should be equal.' => '這兩個變數的值應該相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '檔案太大，檔案大小不可以超過 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '檔案太大。',
    'The file could not be uploaded.' => '無法上傳此檔案。',
    'This value should be a valid number.' => '該值應該為有效的數字。',
    'This file is not a valid image.' => '該檔案不是有效的圖片。',
    'This is not a valid IP address.' => '該值不是有效的IP地址。',
    'This value is not a valid language.' => '該值不是有效的語言名。',
    'This value is not a valid locale.' => '該值不是有效的區域值（locale）。',
    'This value is not a valid country.' => '該值不是有效的國家名。',
    'This value is already used.' => '該值已經被使用。',
    'The size of the image could not be detected.' => '不能解析圖片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '圖片太寬 ({{ width }}px)，最大寬度為 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '圖片寬度不夠 ({{ width }}px)，最小寬度為 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '圖片太高 ({{ height }}px)，最大高度為 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '圖片高度不夠 ({{ height }}px)，最小高度為 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '該變數的值應為用戶目前的密碼。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '該變數應為 {{ limit }} 個字元。',
    'The file was only partially uploaded.' => '該檔案的上傳不完整。',
    'No file was uploaded.' => '沒有上傳任何檔案。',
    'No temporary folder was configured in php.ini.' => 'php.ini 裡沒有配置臨時目錄。',
    'Cannot write temporary file to disk.' => '暫存檔寫入磁碟失敗。',
    'A PHP extension caused the upload to fail.' => '某個 PHP 擴展造成上傳失敗。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '該集合最少應包含 {{ limit }} 個元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '該集合最多包含 {{ limit }} 個元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '該集合應包含 {{ limit }} 個元素 element 。',
    'Invalid card number.' => '無效的信用卡號。',
    'Unsupported card type or invalid card number.' => '不支援的信用卡類型或無效的信用卡號。',
    'This is not a valid International Bank Account Number (IBAN).' => '該值不是有效的國際銀行帳號（IBAN）。',
    'This value is not a valid ISBN-10.' => '該值不是有效的10位國際標準書號（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '該值不是有效的13位國際標準書號（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '該值不是有效的國際標準書號（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '該值不是有效的國際標準期刊號（ISSN）。',
    'This value is not a valid currency.' => '該值不是有效的貨幣名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '該值應等於 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '該值應大於 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '該值應大於或等於 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '該值應小於 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '該值應小於或等於 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '該值應不等於 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '該值不應與 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '圖像格式過大 ({{ ratio }})。 最大允許尺寸 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '圖像格式過小 ({{ ratio }})。最小尺寸 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '方形圖像 ({{ width }}x{{ height }}px)。不接受方形圖像。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '紀念冊布局圖像 ({{ width }}x{{ height }}px)。 不接受紀念冊布局圖像。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '書籍布局圖像 ({{ width }}x{{ height }}px)。不接受圖像書籍布局。',
    'An empty file is not allowed.' => '不接受空白文件。',
    'The host could not be resolved.' => '未找到服務器。',
    'This value does not match the expected {{ charset }} charset.' => '該數值不符合預期 {{ charset }} 符號編碼。',
    'This is not a valid Business Identifier Code (BIC).' => '無效企業識別碼 (BIC)。',
    'Error.' => '錯誤。',
    'This is not a valid UUID.' => '無效的通用唯壹標識符 (UUID)。',
    'This value should be a multiple of {{ compared_value }}.' => '該值必須是倍數 {{ compared_value }}。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '該企業識別碼 (BIC) 與銀行賬戶國際編號不壹致 (IBAN) {{ iban }}。',
    'This value should be valid JSON.' => '該數值必須序列化為JSON格式。',
    'This collection should contain only unique elements.' => '該集合應僅包含唯壹元素。',
    'This value should be positive.' => '數值應為正數。',
    'This value should be either positive or zero.' => '數值應是正數，或為零。',
    'This value should be negative.' => '數值應為負數。',
    'This value should be either negative or zero.' => '數值應是負數，或為零。',
    'This value is not a valid timezone.' => '無效時區。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '此密碼已被泄露，切勿使用。請更換密碼。',
    'This value should be between {{ min }} and {{ max }}.' => '該數值應在 {{ min }} 和 {{ max }} 之間。',
    'This value is not a valid hostname.' => '該數值不是有效的主機名稱。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '該集合內的元素數量得是 {{ compared_value }} 的倍數。',
    'This value should satisfy at least one of the following constraints:' => '該數值需符合以下其中一個約束：',
    'Each element of this collection should satisfy its own set of constraints.' => '該集合內的每個元素需符合元素本身規定的約束。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '該數值不是有效的國際證券識別碼 （ISIN）。',
    'This value should be a valid expression.' => '該值需為一個有效的表達式。',
    'This value is not a valid CSS color.' => '該值不是有效的CSS顏色。',
    'This value is not a valid CIDR notation.' => '該值不是一個有效的CIDR表示。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => '網絡掩碼的值應當在 {{ min }} 和 {{ max }} 之間。',
    'This form should not contain extra fields.' => '該表單中不可有額外字段。',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上傳文件太大， 請重新嘗試上傳一個較小的文件。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 驗證符無效， 請重新提交。',
    'This value is not a valid HTML5 color.' => '該數值不是個有效的 HTML5 顏色。',
    'Please enter a valid birthdate.' => '請輸入有效的生日日期。',
    'The selected choice is invalid.' => '所選的選項無效。',
    'The collection is invalid.' => '集合無效。',
    'Please select a valid color.' => '請選擇有效的顏色。',
    'Please select a valid country.' => '請選擇有效的國家。',
    'Please select a valid currency.' => '請選擇有效的貨幣。',
    'Please choose a valid date interval.' => '請選擇有效的日期間隔。',
    'Please enter a valid date and time.' => '請輸入有效的日期與時間。',
    'Please enter a valid date.' => '請輸入有效的日期。',
    'Please select a valid file.' => '請選擇有效的文件。',
    'The hidden field is invalid.' => '隱藏字段無效。',
    'Please enter an integer.' => '請輸入整數。',
    'Please select a valid language.' => '請選擇有效的語言。',
    'Please select a valid locale.' => '請選擇有效的語言環境。',
    'Please enter a valid money amount.' => '請輸入正確的金額。',
    'Please enter a number.' => '請輸入數字。',
    'The password is invalid.' => '密碼無效。',
    'Please enter a percentage value.' => '請輸入百分比值。',
    'The values do not match.' => '數值不匹配。',
    'Please enter a valid time.' => '請輸入有效的時間。',
    'Please select a valid timezone.' => '請選擇有效的時區。',
    'Please enter a valid URL.' => '請輸入有效的網址。',
    'Please enter a valid search term.' => '請輸入有效的搜索詞。',
    'Please provide a valid phone number.' => '請提供有效的手機號碼。',
    'The checkbox has an invalid value.' => '無效的選框值。',
    'Please enter a valid email address.' => '請輸入有效的電子郵件地址。',
    'Please select a valid option.' => '請選擇有效的選項。',
    'Please select a valid range.' => '請選擇有效的範圍。',
    'Please enter a valid week.' => '請輸入有效的星期。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份驗證發生異常。',
    'Authentication credentials could not be found.' => '沒有找到身份驗證的憑證。',
    'Authentication request could not be processed due to a system problem.' => '由於系統故障，身份驗證的請求無法被處理。',
    'Invalid credentials.' => '無效的憑證。',
    'Cookie has already been used by someone else.' => 'Cookie 已經被其他人使用。',
    'Not privileged to request the resource.' => '沒有權限請求此資源。',
    'Invalid CSRF token.' => '無效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '沒有找到支持此 token 的身份驗證服務提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。回話超時或沒有啓用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用戶名。',
    'Account has expired.' => '賬號已逾期。',
    'Credentials have expired.' => '憑證已逾期。',
    'Account is disabled.' => '賬號已被禁用。',
    'Account is locked.' => '賬號已被鎖定。',
    'Too many failed login attempts, please try again later.' => '登入失敗的次數過多，請稍後再試。',
    'Invalid or expired login link.' => '失效或過期的登入鏈接。',
    'Too many failed login attempts, please try again in %minutes% minute.' => '登錄失敗的次數過多，請在%minutes%分鐘後再試。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => '登錄失敗的次數過多，請在%minutes%分鐘後再試。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
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
$catalogueZh->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;
