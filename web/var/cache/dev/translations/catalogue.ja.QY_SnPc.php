<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ja', array (
  'validators' => 
  array (
    'This value should be false.' => 'falseでなければなりません。',
    'This value should be true.' => 'trueでなければなりません。',
    'This value should be of type {{ type }}.' => '型は{{ type }}でなければなりません。',
    'This value should be blank.' => '空でなければなりません。',
    'The value you selected is not a valid choice.' => '有効な選択肢ではありません。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '{{ limit }}個以上選択してください。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '{{ limit }}個以内で選択してください。',
    'One or more of the given values is invalid.' => '無効な選択肢が含まれています。',
    'This field was not expected.' => 'このフィールドは予期されていませんでした。',
    'This field is missing.' => 'このフィールドは、欠落しています。',
    'This value is not a valid date.' => '有効な日付ではありません。',
    'This value is not a valid datetime.' => '有効な日時ではありません。',
    'This value is not a valid email address.' => '有効なメールアドレスではありません。',
    'The file could not be found.' => 'ファイルが見つかりません。',
    'The file is not readable.' => 'ファイルを読み込めません。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます({{ size }} {{ suffix }})。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ファイルのMIMEタイプが無効です({{ type }})。有効なMIMEタイプは{{ types }}です。',
    'This value should be {{ limit }} or less.' => '{{ limit }}以下でなければなりません。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '値が長すぎます。{{ limit }}文字以内でなければなりません。',
    'This value should be {{ limit }} or more.' => '{{ limit }}以上でなければなりません。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '値が短すぎます。{{ limit }}文字以上でなければなりません。',
    'This value should not be blank.' => '空であってはなりません。',
    'This value should not be null.' => 'nullであってはなりません。',
    'This value should be null.' => 'nullでなければなりません。',
    'This value is not valid.' => '有効な値ではありません。',
    'This value is not a valid time.' => '有効な時刻ではありません。',
    'This value is not a valid URL.' => '有効なURLではありません。',
    'The two values should be equal.' => '2つの値が同じでなければなりません。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The file is too large.' => 'ファイルのサイズが大きすぎます。',
    'The file could not be uploaded.' => 'ファイルをアップロードできませんでした。',
    'This value should be a valid number.' => '有効な数字ではありません。',
    'This file is not a valid image.' => 'ファイルが画像ではありません。',
    'This is not a valid IP address.' => '有効なIPアドレスではありません。',
    'This value is not a valid language.' => '有効な言語名ではありません。',
    'This value is not a valid locale.' => '有効なロケールではありません。',
    'This value is not a valid country.' => '有効な国名ではありません。',
    'This value is already used.' => '既に使用されています。',
    'The size of the image could not be detected.' => '画像のサイズが検出できません。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '画像の幅が大きすぎます({{ width }}ピクセル)。{{ max_width }}ピクセルまでにしてください。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '画像の幅が小さすぎます({{ width }}ピクセル)。{{ min_width }}ピクセル以上にしてください。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '画像の高さが大きすぎます({{ height }}ピクセル)。{{ max_height }}ピクセルまでにしてください。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '画像の高さが小さすぎます({{ height }}ピクセル)。{{ min_height }}ピクセル以上にしてください。',
    'This value should be the user\'s current password.' => 'ユーザーの現在のパスワードでなければなりません。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ちょうど{{ limit }}文字でなければなりません。',
    'The file was only partially uploaded.' => 'ファイルのアップロードは完全ではありません。',
    'No file was uploaded.' => 'ファイルがアップロードされていません。',
    'No temporary folder was configured in php.ini.' => 'php.iniで一時フォルダが設定されていません。',
    'Cannot write temporary file to disk.' => '一時ファイルをディスクに書き込むことができません。',
    'A PHP extension caused the upload to fail.' => 'PHP拡張によってアップロードに失敗しました。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '{{ limit }}個以上の要素を含んでなければいけません。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '要素は{{ limit }}個までです。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '要素はちょうど{{ limit }}個でなければなりません。',
    'Invalid card number.' => '無効なカード番号です。',
    'Unsupported card type or invalid card number.' => '未対応のカード種類又は無効なカード番号です。',
    'This is not a valid International Bank Account Number (IBAN).' => '有効なIBANコードではありません。',
    'This value is not a valid ISBN-10.' => '有効なISBN-10コードではありません。',
    'This value is not a valid ISBN-13.' => '有効なISBN-13コードではありません。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '有効なISBN-10コード又はISBN-13コードではありません。',
    'This value is not a valid ISSN.' => '有効なISSNコードではありません。',
    'This value is not a valid currency.' => '有効な貨幣ではありません。',
    'This value should be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくなければなりません。',
    'This value should be greater than {{ compared_value }}.' => '{{ compared_value }}より大きくなければなりません。',
    'This value should be greater than or equal to {{ compared_value }}.' => '{{ compared_value }}以上でなければなりません。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくなければなりません。',
    'This value should be less than {{ compared_value }}.' => '{{ compared_value }}未満でなければなりません。',
    'This value should be less than or equal to {{ compared_value }}.' => '{{ compared_value }}以下でなければなりません。',
    'This value should not be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくてはいけません。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくてはいけません。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '画像のアスペクト比が大きすぎます({{ ratio }})。{{ max_ratio }}までにしてください。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '画像のアスペクト比が小さすぎます({{ ratio }})。{{ min_ratio }}以上にしてください。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '画像が正方形になっています({{ width }}x{{ height }}ピクセル)。正方形の画像は許可されていません。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '画像が横向きになっています({{ width }}x{{ height }}ピクセル)。横向きの画像は許可されていません。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '画像が縦向きになっています({{ width }}x{{ height }}ピクセル)。縦向きの画像は許可されていません。',
    'An empty file is not allowed.' => '空のファイルは許可されていません。',
    'The host could not be resolved.' => 'ホストを解決できませんでした。',
    'This value does not match the expected {{ charset }} charset.' => 'この値は予期される文字コード（{{ charset }}）と異なります。',
    'This is not a valid Business Identifier Code (BIC).' => '有効なSWIFTコードではありません。',
    'Error' => 'エラー',
    'This is not a valid UUID.' => '有効なUUIDではありません。',
    'This value should be a multiple of {{ compared_value }}.' => '{{ compared_value }}の倍数でなければなりません。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'このSWIFTコードはIBANコード（{{ iban }}）に関連付けられていません。',
    'This value should be valid JSON.' => 'JSONでなければなりません。',
    'This collection should contain only unique elements.' => '要素は重複してはなりません。',
    'This value should be positive.' => '正の数でなければなりません。',
    'This value should be either positive or zero.' => '正の数、または0でなければなりません。',
    'This value should be negative.' => '負の数でなければなりません。',
    'This value should be either negative or zero.' => '負の数、または0でなければなりません。',
    'This value is not a valid timezone.' => '有効なタイムゾーンではありません。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'このパスワードは漏洩している為使用できません。',
    'This value should be between {{ min }} and {{ max }}.' => '{{ min }}以上{{ max }}以下でなければなりません。',
    'This value is not a valid hostname.' => '有効なホスト名ではありません。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '要素の数は{{ compared_value }}の倍数でなければなりません。',
    'This value should satisfy at least one of the following constraints:' => '以下の制約のうち少なくとも1つを満たす必要があります:',
    'Each element of this collection should satisfy its own set of constraints.' => 'コレクションの各要素は、それぞれの制約を満たす必要があります。',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'この値は有効な国際証券識別番号（ISIN）ではありません。',
    'This value should be a valid expression.' => '式でなければなりません。',
    'This value is not a valid CSS color.' => 'この値は有効なCSSカラーではありません。',
    'This value is not a valid CIDR notation.' => 'この値は有効なCIDR表記ではありません。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'ネットマスクの値は、{{ min }}から{{ max }}の間にある必要があります。',
    'This form should not contain extra fields.' => 'フィールドグループに追加のフィールドを含んではなりません。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'アップロードされたファイルが大きすぎます。小さなファイルで再度アップロードしてください。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRFトークンが無効です、再送信してください。',
    'This value is not a valid HTML5 color.' => '有効なHTML5の色ではありません。',
    'Please enter a valid birthdate.' => '有効な生年月日を入力してください。',
    'The selected choice is invalid.' => '選択した値は無効です。',
    'The collection is invalid.' => 'コレクションは無効です。',
    'Please select a valid color.' => '有効な色を選択してください。',
    'Please select a valid country.' => '有効な国を選択してください。',
    'Please select a valid currency.' => '有効な通貨を選択してください。',
    'Please choose a valid date interval.' => '有効な日付間隔を選択してください。',
    'Please enter a valid date and time.' => '有効な日時を入力してください。',
    'Please enter a valid date.' => '有効な日付を入力してください。',
    'Please select a valid file.' => '有効なファイルを選択してください。',
    'The hidden field is invalid.' => '隠しフィールドが無効です。',
    'Please enter an integer.' => '整数で入力してください。',
    'Please select a valid language.' => '有効な言語を選択してください。',
    'Please select a valid locale.' => '有効なロケールを選択してください。',
    'Please enter a valid money amount.' => '有効な金額を入力してください。',
    'Please enter a number.' => '数値で入力してください。',
    'The password is invalid.' => 'パスワードが無効です。',
    'Please enter a percentage value.' => 'パーセント値で入力してください。',
    'The values do not match.' => '値が一致しません。',
    'Please enter a valid time.' => '有効な時間を入力してください。',
    'Please select a valid timezone.' => '有効なタイムゾーンを選択してください。',
    'Please enter a valid URL.' => '有効なURLを入力してください。',
    'Please enter a valid search term.' => '有効な検索語を入力してください。',
    'Please provide a valid phone number.' => '有効な電話番号を入力してください。',
    'The checkbox has an invalid value.' => 'チェックボックスの値が無効です。',
    'Please enter a valid email address.' => '有効なメールアドレスを入力してください。',
    'Please select a valid option.' => '有効な値を選択してください。',
    'Please select a valid range.' => '有効な範囲を選択してください。',
    'Please enter a valid week.' => '有効な週を入力してください。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '認証エラーが発生しました。',
    'Authentication credentials could not be found.' => '認証資格がありません。',
    'Authentication request could not be processed due to a system problem.' => 'システムの問題により認証要求を処理できませんでした。',
    'Invalid credentials.' => '資格が無効です。',
    'Cookie has already been used by someone else.' => 'Cookie が別のユーザーで使用されています。',
    'Not privileged to request the resource.' => 'リソースをリクエストする権限がありません。',
    'Invalid CSRF token.' => 'CSRF トークンが無効です。',
    'No authentication provider found to support the authentication token.' => '認証トークンをサポートする認証プロバイダーが見つかりません。',
    'No session available, it either timed out or cookies are not enabled.' => '利用可能なセッションがありません。タイムアウトしたか、Cookie が無効になっています。',
    'No token could be found.' => 'トークンが見つかりません。',
    'Username could not be found.' => 'ユーザー名が見つかりません。',
    'Account has expired.' => 'アカウントが有効期限切れです。',
    'Credentials have expired.' => '資格が有効期限切れです。',
    'Account is disabled.' => 'アカウントが無効です。',
    'Account is locked.' => 'アカウントはロックされています。',
    'Too many failed login attempts, please try again later.' => 'ログイン試行回数を超えました。しばらくして再度お試しください。',
    'Invalid or expired login link.' => 'ログインリンクが有効期限切れ、もしくは無効です。',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'ログイン試行回数が多すぎます。%minutes%分後に再度お試しください。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'ログイン試行回数が多すぎます。%minutes%分後に再度お試しください。',
  ),
));

$catalogueCs = new MessageCatalogue('cs', array (
  'validators' => 
  array (
    'This value should be false.' => 'Tato hodnota musí být nepravdivá (false).',
    'This value should be true.' => 'Tato hodnota musí být pravdivá (true).',
    'This value should be of type {{ type }}.' => 'Tato hodnota musí být typu {{ type }}.',
    'This value should be blank.' => 'Tato hodnota musí být prázdná.',
    'The value you selected is not a valid choice.' => 'Vybraná hodnota není platnou možností.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Musí být vybrána nejméně {{ limit }} možnost.|Musí být vybrány nejméně {{ limit }} možnosti.|Musí být vybráno nejméně {{ limit }} možností.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Musí být vybrána maximálně {{ limit }} možnost.|Musí být vybrány maximálně {{ limit }} možnosti.|Musí být vybráno maximálně {{ limit }} možností.',
    'One or more of the given values is invalid.' => 'Některé z uvedených hodnot jsou neplatné.',
    'This field was not expected.' => 'Toto pole nebylo očekáváno.',
    'This field is missing.' => 'Toto pole chybí.',
    'This value is not a valid date.' => 'Tato hodnota není platné datum.',
    'This value is not a valid datetime.' => 'Tato hodnota není platné datum s časovým údajem.',
    'This value is not a valid email address.' => 'Tato hodnota není platná e-mailová adresa.',
    'The file could not be found.' => 'Soubor nebyl nalezen.',
    'The file is not readable.' => 'Soubor je nečitelný.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký ({{ size }} {{ suffix }}). Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Neplatný mime typ souboru ({{ type }}). Povolené mime typy souborů jsou {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Tato hodnota musí být {{ limit }} nebo méně.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znak.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaky.|Tato hodnota je příliš dlouhá. Musí obsahovat maximálně {{ limit }} znaků.',
    'This value should be {{ limit }} or more.' => 'Tato hodnota musí být {{ limit }} nebo více.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znak.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaky.|Tato hodnota je příliš krátká. Musí obsahovat minimálně {{ limit }} znaků.',
    'This value should not be blank.' => 'Tato hodnota nesmí být prázdná.',
    'This value should not be null.' => 'Tato hodnota nesmí být null.',
    'This value should be null.' => 'Tato hodnota musí být null.',
    'This value is not valid.' => 'Tato hodnota není platná.',
    'This value is not a valid time.' => 'Tato hodnota není platný časový údaj.',
    'This value is not a valid URL.' => 'Tato hodnota není platná URL adresa.',
    'The two values should be equal.' => 'Tyto dvě hodnoty musí být stejné.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Soubor je příliš velký. Maximální povolená velikost souboru je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Soubor je příliš velký.',
    'The file could not be uploaded.' => 'Soubor se nepodařilo nahrát.',
    'This value should be a valid number.' => 'Tato hodnota musí být číslo.',
    'This file is not a valid image.' => 'Tento soubor není obrázek.',
    'This is not a valid IP address.' => 'Toto není platná IP adresa.',
    'This value is not a valid language.' => 'Tento jazyk neexistuje.',
    'This value is not a valid locale.' => 'Tato lokalizace neexistuje.',
    'This value is not a valid country.' => 'Tato země neexistuje.',
    'This value is already used.' => 'Tato hodnota je již používána.',
    'The size of the image could not be detected.' => 'Nepodařily se zjistit rozměry obrázku.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Obrázek je příliš široký ({{ width }}px). Maximální povolená šířka obrázku je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Obrázek je příliš úzký ({{ width }}px). Minimální šířka musí být {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Obrázek je příliš vysoký ({{ height }}px). Maximální povolená výška obrázku je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Obrázek je příliš nízký ({{ height }}px). Minimální výška obrázku musí být {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tato hodnota musí být aktuální heslo uživatele.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tato hodnota musí mít přesně {{ limit }} znak.|Tato hodnota musí mít přesně {{ limit }} znaky.|Tato hodnota musí mít přesně {{ limit }} znaků.',
    'The file was only partially uploaded.' => 'Byla nahrána jen část souboru.',
    'No file was uploaded.' => 'Žádný soubor nebyl nahrán.',
    'No temporary folder was configured in php.ini.' => 'V php.ini není nastavena cesta k adresáři pro dočasné soubory.',
    'Cannot write temporary file to disk.' => 'Dočasný soubor se nepodařilo zapsat na disk.',
    'A PHP extension caused the upload to fail.' => 'Rozšíření PHP zabránilo nahrání souboru.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tato kolekce musí obsahovat minimálně {{ limit }} prvek.|Tato kolekce musí obsahovat minimálně {{ limit }} prvky.|Tato kolekce musí obsahovat minimálně {{ limit }} prvků.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tato kolekce musí obsahovat maximálně {{ limit }} prvek.|Tato kolekce musí obsahovat maximálně {{ limit }} prvky.|Tato kolekce musí obsahovat maximálně {{ limit }} prvků.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tato kolekce musí obsahovat přesně {{ limit }} prvek.|Tato kolekce musí obsahovat přesně {{ limit }} prvky.|Tato kolekce musí obsahovat přesně {{ limit }} prvků.',
    'Invalid card number.' => 'Neplatné číslo karty.',
    'Unsupported card type or invalid card number.' => 'Nepodporovaný typ karty nebo neplatné číslo karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Toto je neplatný IBAN.',
    'This value is not a valid ISBN-10.' => 'Tato hodnota není platné ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Tato hodnota není platné ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Tato hodnota není platné ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Tato hodnota není platné ISSN.',
    'This value is not a valid currency.' => 'Tato měna neexistuje.',
    'This value should be equal to {{ compared_value }}.' => 'Tato hodnota musí být rovna {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Tato hodnota musí být větší než {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Tato hodnota musí být větší nebo rovna {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota musí být typu {{ compared_value_type }} a zároveň musí být rovna {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Tato hodnota musí být menší než {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Tato hodnota musí být menší nebo rovna {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Tato hodnota nesmí být rovna {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Tato hodnota nesmí být typu {{ compared_value_type }} a zároveň nesmí být rovna {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Poměr stran obrázku je příliš velký ({{ ratio }}). Maximální povolený poměr stran obrázku je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Poměr stran obrázku je příliš malý ({{ ratio }}). Minimální povolený poměr stran obrázku je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Strany obrázku jsou čtvercové ({{ width }}x{{ height }}px). Čtvercové obrázky nejsou povolené.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obrázek je orientovaný na šířku ({{ width }}x{{ height }}px). Obrázky orientované na šířku nejsou povolené.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obrázek je orientovaný na výšku ({{ width }}x{{ height }}px). Obrázky orientované na výšku nejsou povolené.',
    'An empty file is not allowed.' => 'Soubor nesmí být prázdný.',
    'The host could not be resolved.' => 'Hostitele nebylo možné rozpoznat.',
    'This value does not match the expected {{ charset }} charset.' => 'Tato hodnota neodpovídá očekávané znakové sadě {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Tato hodnota není platný identifikační kód podniku (BIC).',
    'Error' => 'Chyba',
    'This is not a valid UUID.' => 'Tato hodnota není platné UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Tato hodnota musí být násobek hodnoty {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bankovní identifikační kód (BIC) neodpovídá mezinárodnímu číslu účtu (IBAN) {{ iban }}.',
    'This value should be valid JSON.' => 'Tato hodnota musí být validní JSON.',
    'This collection should contain only unique elements.' => 'Tato kolekce musí obsahovat pouze unikátní prvky.',
    'This value should be positive.' => 'Tato hodnota musí být kladná.',
    'This value should be either positive or zero.' => 'Tato hodnota musí být buď kladná nebo nula.',
    'This value should be negative.' => 'Tato hodnota musí být záporná.',
    'This value should be either negative or zero.' => 'Tato hodnota musí být buď záporná nebo nula.',
    'This value is not a valid timezone.' => 'Tato časová zóna neexistuje.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Zadané heslo bylo součástí úniku dat, takže ho není možné použít. Použijte prosím jiné heslo.',
    'This value should be between {{ min }} and {{ max }}.' => 'Hodnota musí být mezi {{ min }} a {{ max }}.',
    'This value is not a valid hostname.' => 'Tato hodnota není platný hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Počet prvků v této kolekci musí být násobek {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Tato hodnota musí splňovat alespoň jedno z následujících omezení:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Každý prvek v této kolekci musí splňovat svá vlastní omezení.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Tato hodnota není platné mezinárodní identifikační číslo cenného papíru (ISIN).',
    'This value should be a valid expression.' => 'Tato hodnota musí být platný výraz.',
    'This value is not a valid CSS color.' => 'Tato hodnota není platná barva CSS.',
    'This value is not a valid CIDR notation.' => 'Tato hodnota není platná notace CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Hodnota masky sítě musí být mezi {{ min }} a {{ max }}.',
    'This form should not contain extra fields.' => 'Tato skupina polí nesmí obsahovat další pole.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Nahraný soubor je příliš velký. Nahrajte prosím menší soubor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Zkuste prosím znovu odeslat formulář.',
    'This value is not a valid HTML5 color.' => 'Tato hodnota není platná HTML5 barva.',
    'Please enter a valid birthdate.' => 'Prosím zadejte platný datum narození.',
    'The selected choice is invalid.' => 'Vybraná možnost není platná.',
    'The collection is invalid.' => 'Kolekce není platná.',
    'Please select a valid color.' => 'Prosím vyberte platnou barvu.',
    'Please select a valid country.' => 'Prosím vyberte platnou zemi.',
    'Please select a valid currency.' => 'Prosím vyberte platnou měnu.',
    'Please choose a valid date interval.' => 'Prosím vyberte platné rozpětí dat.',
    'Please enter a valid date and time.' => 'Prosím zadejte platný datum a čas.',
    'Please enter a valid date.' => 'Prosím zadejte platný datum.',
    'Please select a valid file.' => 'Prosím vyberte platný soubor.',
    'The hidden field is invalid.' => 'Skryté pole není platné.',
    'Please enter an integer.' => 'Prosím zadejte číslo.',
    'Please select a valid language.' => 'Prosím zadejte platný jazyk.',
    'Please select a valid locale.' => 'Prosím zadejte platný jazyk.',
    'Please enter a valid money amount.' => 'Prosím zadejte platnou částku.',
    'Please enter a number.' => 'Prosím zadejte číslo.',
    'The password is invalid.' => 'Heslo není platné.',
    'Please enter a percentage value.' => 'Prosím zadejte procentuální hodnotu.',
    'The values do not match.' => 'Hodnoty se neshodují.',
    'Please enter a valid time.' => 'Prosím zadejte platný čas.',
    'Please select a valid timezone.' => 'Prosím vyberte platné časové pásmo.',
    'Please enter a valid URL.' => 'Prosím zadejte platnou URL.',
    'Please enter a valid search term.' => 'Prosím zadejte platný výraz k vyhledání.',
    'Please provide a valid phone number.' => 'Prosím zadejte platné telefonní číslo.',
    'The checkbox has an invalid value.' => 'Zaškrtávací políčko má neplatnou hodnotu.',
    'Please enter a valid email address.' => 'Prosím zadejte platnou emailovou adresu.',
    'Please select a valid option.' => 'Prosím vyberte platnou možnost.',
    'Please select a valid range.' => 'Prosím vyberte platný rozsah.',
    'Please enter a valid week.' => 'Prosím zadejte platný týden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Při ověřování došlo k chybě.',
    'Authentication credentials could not be found.' => 'Ověřovací údaje nebyly nalezeny.',
    'Authentication request could not be processed due to a system problem.' => 'Požadavek na ověření nemohl být zpracován kvůli systémové chybě.',
    'Invalid credentials.' => 'Neplatné přihlašovací údaje.',
    'Cookie has already been used by someone else.' => 'Cookie již bylo použité někým jiným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnění přistupovat k prostředku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovatel pro ověřovací token nebyl nalezen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session není k dispozici, vypršela její platnost, nebo jsou zakázané cookies.',
    'No token could be found.' => 'Token nebyl nalezen.',
    'Username could not be found.' => 'Přihlašovací jméno nebylo nalezeno.',
    'Account has expired.' => 'Platnost účtu vypršela.',
    'Credentials have expired.' => 'Platnost přihlašovacích údajů vypršela.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
    'Too many failed login attempts, please try again later.' => 'Příliš mnoho nepovedených pokusů přihlášení. Zkuste to prosím později.',
    'Invalid or expired login link.' => 'Neplatný nebo expirovaný odkaz na přihlášení.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minutu.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Příliš mnoho neúspěšných pokusů o přihlášení, zkuste to prosím znovu za %minutes% minut.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueCs);

return $catalogue;
