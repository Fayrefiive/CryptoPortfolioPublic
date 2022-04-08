<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr_FR', array (
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

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% année|%count% années',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% an|%count% ans',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;