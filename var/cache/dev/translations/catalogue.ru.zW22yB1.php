<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значение должно быть ложным.',
    'This value should be true.' => 'Значение должно быть истинным.',
    'This value should be of type {{ type }}.' => 'Тип значения должен быть {{ type }}.',
    'This value should be blank.' => 'Значение должно быть пустым.',
    'The value you selected is not a valid choice.' => 'Выбранное Вами значение недопустимо.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы должны выбрать хотя бы {{ limit }} вариант.|Вы должны выбрать хотя бы {{ limit }} варианта.|Вы должны выбрать хотя бы {{ limit }} вариантов.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы должны выбрать не более чем {{ limit }} вариант.|Вы должны выбрать не более чем {{ limit }} варианта.|Вы должны выбрать не более чем {{ limit }} вариантов.',
    'One or more of the given values is invalid.' => 'Одно или несколько заданных значений недопустимо.',
    'This field was not expected.' => 'Это поле не ожидалось.',
    'This field is missing.' => 'Это поле отсутствует.',
    'This value is not a valid date.' => 'Значение не является правильной датой.',
    'This value is not a valid datetime.' => 'Значение даты и времени недопустимо.',
    'This value is not a valid email address.' => 'Значение адреса электронной почты недопустимо.',
    'The file could not be found.' => 'Файл не может быть найден.',
    'The file is not readable.' => 'Файл не может быть прочитан.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой ({{ size }} {{ suffix }}). Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значение должно быть {{ limit }} или меньше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значение слишком длинное. Должно быть равно {{ limit }} символу или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.',
    'This value should be {{ limit }} or more.' => 'Значение должно быть {{ limit }} или больше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значение слишком короткое. Должно быть равно {{ limit }} символу или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.',
    'This value should not be blank.' => 'Значение не должно быть пустым.',
    'This value should not be null.' => 'Значение не должно быть null.',
    'This value should be null.' => 'Значение должно быть null.',
    'This value is not valid.' => 'Значение недопустимо.',
    'This value is not a valid time.' => 'Значение времени недопустимо.',
    'This value is not a valid URL.' => 'Значение не является допустимым URL.',
    'The two values should be equal.' => 'Оба значения должны быть одинаковыми.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой. Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл слишком большой.',
    'The file could not be uploaded.' => 'Файл не может быть загружен.',
    'This value should be a valid number.' => 'Значение должно быть числом.',
    'This file is not a valid image.' => 'Файл не является допустимым форматом изображения.',
    'This is not a valid IP address.' => 'Значение не является допустимым IP адресом.',
    'This value is not a valid language.' => 'Значение не является допустимым языком.',
    'This value is not a valid locale.' => 'Значение не является допустимой локалью.',
    'This value is not a valid country.' => 'Значение не является допустимой страной.',
    'This value is already used.' => 'Это значение уже используется.',
    'The size of the image could not be detected.' => 'Не удалось определить размер изображения.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина изображения слишком велика ({{ width }}px). Максимально допустимая ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина изображения слишком мала ({{ width }}px). Минимально допустимая ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Высота изображения слишком велика ({{ height }}px). Максимально допустимая высота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Высота изображения слишком мала ({{ height }}px). Минимально допустимая высота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значение должно быть текущим паролем пользователя.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значение должно быть равно {{ limit }} символу.|Значение должно быть равно {{ limit }} символам.|Значение должно быть равно {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл был загружен только частично.',
    'No file was uploaded.' => 'Файл не был загружен.',
    'No temporary folder was configured in php.ini.' => 'Не настроена временная директория в php.ini.',
    'Cannot write temporary file to disk.' => 'Невозможно записать временный файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Расширение PHP вызвало ошибку при загрузке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Эта коллекция должна содержать {{ limit }} элемент или больше.|Эта коллекция должна содержать {{ limit }} элемента или больше.|Эта коллекция должна содержать {{ limit }} элементов или больше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Эта коллекция должна содержать {{ limit }} элемент или меньше.|Эта коллекция должна содержать {{ limit }} элемента или меньше.|Эта коллекция должна содержать {{ limit }} элементов или меньше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Эта коллекция должна содержать ровно {{ limit }} элемент.|Эта коллекция должна содержать ровно {{ limit }} элемента.|Эта коллекция должна содержать ровно {{ limit }} элементов.',
    'Invalid card number.' => 'Неверный номер карты.',
    'Unsupported card type or invalid card number.' => 'Неподдерживаемый тип или неверный номер карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Значение не является допустимым международным номером банковского счета (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значение имеет неверный формат ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значение имеет неверный формат ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значение не соответствует форматам ISBN-10 и ISBN-13.',
    'This value is not a valid ISSN.' => 'Значение не соответствует формату ISSN.',
    'This value is not a valid currency.' => 'Некорректный формат валюты.',
    'This value should be equal to {{ compared_value }}.' => 'Значение должно быть равно {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значение должно быть больше чем {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значение должно быть больше или равно {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значение должно быть меньше чем {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значение должно быть меньше или равно {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значение не должно быть равно {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение не должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соотношение сторон изображения слишком велико ({{ ratio }}). Максимальное соотношение сторон {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соотношение сторон изображения слишком мало ({{ ratio }}). Минимальное соотношение сторон {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображение квадратное ({{ width }}x{{ height }}px). Квадратные изображения не разрешены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображение в альбомной ориентации ({{ width }}x{{ height }}px). Изображения в альбомной ориентации не разрешены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображение в портретной ориентации ({{ width }}x{{ height }}px). Изображения в портретной ориентации не разрешены.',
    'An empty file is not allowed.' => 'Пустые файлы не разрешены.',
    'The host could not be resolved.' => 'Имя хоста не может быть разрешено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значение не совпадает с ожидаемой {{ charset }} кодировкой.',
    'This is not a valid Business Identifier Code (BIC).' => 'Значение не соответствует формату BIC.',
    'Error' => 'Ошибка',
    'This is not a valid UUID.' => 'Значение не соответствует формату UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значение должно быть кратно {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Данный BIC не связан с IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Значение должно быть корректным JSON.',
    'This collection should contain only unique elements.' => 'Эта коллекция должна содержать только уникальные элементы.',
    'This value should be positive.' => 'Значение должно быть положительным.',
    'This value should be either positive or zero.' => 'Значение должно быть положительным или равным нулю.',
    'This value should be negative.' => 'Значение должно быть отрицательным.',
    'This value should be either negative or zero.' => 'Значение должно быть отрицательным или равным нулю.',
    'This value is not a valid timezone.' => 'Значение не является корректным часовым поясом.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Данный пароль был скомпрометирован в результате утечки данных и не должен быть использован. Пожалуйста, используйте другой пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значение должно быть между {{ min }} и {{ max }}.',
    'This value is not a valid hostname.' => 'Значение не является корректным именем хоста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Количество элементов в этой коллекции должно быть кратным {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Значение должно удовлетворять как минимум одному из следующих ограничений:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Каждый элемент этой коллекции должен удовлетворять своему собственному набору ограничений.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значение не является корректным международным идентификационным номером ценных бумаг (ISIN).',
    'This value should be a valid expression.' => 'Это значение должно быть корректным выражением.',
    'This value is not a valid CSS color.' => 'Значение не является корректным CSS цветом.',
    'This value is not a valid CIDR notation.' => 'Значение не соответствует нотации CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Значение маски подсети должно быть от {{ min }} до {{ max }}.',
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'This value is not a valid HTML5 color.' => 'Значение не является допустимым HTML5 цветом.',
    'Please enter a valid birthdate.' => 'Пожалуйста, введите действительную дату рождения.',
    'The selected choice is invalid.' => 'Выбранный вариант недопустим.',
    'The collection is invalid.' => 'Коллекция недопустима.',
    'Please select a valid color.' => 'Пожалуйста, выберите допустимый цвет.',
    'Please select a valid country.' => 'Пожалуйста, выберите действительную страну.',
    'Please select a valid currency.' => 'Пожалуйста, выберите действительную валюту.',
    'Please choose a valid date interval.' => 'Пожалуйста, выберите действительный период.',
    'Please enter a valid date and time.' => 'Пожалуйста, введите действительные дату и время.',
    'Please enter a valid date.' => 'Пожалуйста, введите действительную дату.',
    'Please select a valid file.' => 'Пожалуйста, выберите допустимый файл.',
    'The hidden field is invalid.' => 'Значение скрытого поля недопустимо.',
    'Please enter an integer.' => 'Пожалуйста, введите целое число.',
    'Please select a valid language.' => 'Пожалуйста, выберите допустимый язык.',
    'Please select a valid locale.' => 'Пожалуйста, выберите допустимую локаль.',
    'Please enter a valid money amount.' => 'Пожалуйста, введите допустимое количество денег.',
    'Please enter a number.' => 'Пожалуйста, введите номер.',
    'The password is invalid.' => 'Пароль недействителен.',
    'Please enter a percentage value.' => 'Пожалуйста, введите процентное значение.',
    'The values do not match.' => 'Значения не совпадают.',
    'Please enter a valid time.' => 'Пожалуйста, введите действительное время.',
    'Please select a valid timezone.' => 'Пожалуйста, выберите действительный часовой пояс.',
    'Please enter a valid URL.' => 'Пожалуйста, введите действительный URL.',
    'Please enter a valid search term.' => 'Пожалуйста, введите действительный поисковый запрос.',
    'Please provide a valid phone number.' => 'Пожалуйста, введите действительный номер телефона.',
    'The checkbox has an invalid value.' => 'Флажок имеет недопустимое значение.',
    'Please enter a valid email address.' => 'Пожалуйста, введите допустимый email адрес.',
    'Please select a valid option.' => 'Пожалуйста, выберите допустимый вариант.',
    'Please select a valid range.' => 'Пожалуйста, выберите допустимый диапазон.',
    'Please enter a valid week.' => 'Пожалуйста, введите действительную неделю.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
    'Too many failed login attempts, please try again later.' => 'Слишком много неудачных попыток входа, пожалуйста, попробуйте позже.',
    'Invalid or expired login link.' => 'Ссылка для входа недействительна или просрочена.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% минуту.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% мин.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% год|%count% года|%count% лет',
    '%count% month|%count% months' => '%count% месяц|%count% месяца|%count% месяцев',
    '%count% day|%count% days' => '%count% день|%count% дня|%count% дней',
    '%count% hour|%count% hours' => '%count% час|%count% часа|%count% часов',
    '%count% minute|%count% minutes' => '%count% минута|%count% минуты|%count% минут',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% год|%count% года|%count% лет',
    '%count% month|%count% months' => '%count% месяц|%count% месяца|%count% месяцев',
    '%count% day|%count% days' => '%count% день|%count% дня|%count% дней',
    '%count% hour|%count% hours' => '%count% час|%count% часа|%count% часов',
    '%count% minute|%count% minutes' => '%count% минута|%count% минуты|%count% минут',
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
