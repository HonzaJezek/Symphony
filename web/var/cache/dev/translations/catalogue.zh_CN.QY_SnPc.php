<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This value should be false.' => '该变量的值应为 false 。',
    'This value should be true.' => '该变量的值应为 true 。',
    'This value should be of type {{ type }}.' => '该变量的类型应为 {{ type }} 。',
    'This value should be blank.' => '该变量值应为空。',
    'The value you selected is not a valid choice.' => '选定变量的值不是有效的选项。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要选择 {{ limit }} 个选项。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能选择 {{ limit }} 个选项。',
    'One or more of the given values is invalid.' => '一个或者多个给定的值无效。',
    'This field was not expected.' => '此字段是多余的。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '该值不是一个有效的日期（date）。',
    'This value is not a valid datetime.' => '该值不是一个有效的日期时间（datetime）。',
    'This value is not a valid email address.' => '该值不是一个有效的邮件地址。',
    'The file could not be found.' => '文件未找到。',
    'The file is not readable.' => '文件不可读。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大 ({{ size }} {{ suffix }})。文件大小不可以超过 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '无效的文件类型 ({{ type }}) 。允许的文件类型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '这个变量的值应该小于或等于 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字符串太长，长度不可超过 {{ limit }} 个字符。',
    'This value should be {{ limit }} or more.' => '该变量的值应该大于或等于 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字符串太短，长度不可少于 {{ limit }} 个字符。',
    'This value should not be blank.' => '该变量不应为空。',
    'This value should not be null.' => '该变量不应为 null 。',
    'This value should be null.' => '该变量应为空 null 。',
    'This value is not valid.' => '该变量值无效 。',
    'This value is not a valid time.' => '该值不是一个有效的时间。',
    'This value is not a valid URL.' => '该值不是一个有效的 URL 。',
    'The two values should be equal.' => '这两个变量的值应该相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大，文件大小不可以超过 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '文件太大。',
    'The file could not be uploaded.' => '无法上传此文件。',
    'This value should be a valid number.' => '该值应该为有效的数字。',
    'This file is not a valid image.' => '该文件不是有效的图片。',
    'This is not a valid IP address.' => '该值不是有效的IP地址。',
    'This value is not a valid language.' => '该值不是有效的语言名。',
    'This value is not a valid locale.' => '该值不是有效的区域值（locale）。',
    'This value is not a valid country.' => '该值不是有效的国家名。',
    'This value is already used.' => '该值已经被使用。',
    'The size of the image could not be detected.' => '不能解析图片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '图片太宽 ({{ width }}px)，最大宽度为 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '图片宽度不够 ({{ width }}px)，最小宽度为 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '图片太高 ({{ height }}px)，最大高度为 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '图片高度不够 ({{ height }}px)，最小高度为 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '该变量的值应为用户当前的密码。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '该变量应为 {{ limit }} 个字符。',
    'The file was only partially uploaded.' => '该文件的上传不完整。',
    'No file was uploaded.' => '没有上传任何文件。',
    'No temporary folder was configured in php.ini.' => 'php.ini 里没有配置临时文件目录。',
    'Cannot write temporary file to disk.' => '临时文件写入磁盘失败。',
    'A PHP extension caused the upload to fail.' => '某个 PHP 扩展造成上传失败。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '该集合最少应包含 {{ limit }} 个元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '该集合最多包含 {{ limit }} 个元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '该集合应包含 {{ limit }} 个元素 element 。',
    'Invalid card number.' => '无效的信用卡号。',
    'Unsupported card type or invalid card number.' => '不支持的信用卡类型或无效的信用卡号。',
    'This is not a valid International Bank Account Number (IBAN).' => '该值不是有效的国际银行帐号（IBAN）。',
    'This value is not a valid ISBN-10.' => '该值不是有效的10位国际标准书号（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '该值不是有效的13位国际标准书号（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '该值不是有效的国际标准书号（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '该值不是有效的国际标准期刊号（ISSN）。',
    'This value is not a valid currency.' => '该值不是有效的货币名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '该值应等于 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '该值应大于 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '该值应大于或等于 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '该值应小于 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '该值应小于或等于 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '该值不应先等于 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值不应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '图片宽高比太大 ({{ ratio }})。允许的最大宽高比为 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '图片宽高比太小 ({{ ratio }})。允许的最大宽高比为 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '图片是方形的 ({{ width }}x{{ height }}px)。不允许使用方形的图片。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '图片是横向的 ({{ width }}x{{ height }}px)。不允许使用横向的图片。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '图片是纵向的 ({{ width }}x{{ height }}px)。不允许使用纵向的图片。',
    'An empty file is not allowed.' => '不允许使用空文件。',
    'The host could not be resolved.' => '主机名无法解析。',
    'This value does not match the expected {{ charset }} charset.' => '该值不符合 {{ charset }} 编码。',
    'This is not a valid Business Identifier Code (BIC).' => '这不是有效的业务标识符代码（BIC)。',
    'Error' => '错误',
    'This is not a valid UUID.' => '这不是有效的UUID。',
    'This value should be a multiple of {{ compared_value }}.' => '此值应为 {{ compared_value }} 的倍数。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '此业务标识符代码（BIC）与IBAN {{ iban }} 无关。',
    'This value should be valid JSON.' => '该值应该是有效的JSON。',
    'This collection should contain only unique elements.' => '该集合应仅包含独一无二的元素。',
    'This value should be positive.' => '数值应为正数。',
    'This value should be either positive or zero.' => '数值应是正数，或为零。',
    'This value should be negative.' => '数值应为负数。',
    'This value should be either negative or zero.' => '数值应是负数，或为零。',
    'This value is not a valid timezone.' => '无效时区。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '此密码已被泄露，切勿使用。请更换密码。',
    'This value should be between {{ min }} and {{ max }}.' => '该数值应在 {{ min }} 和 {{ max }} 之间。',
    'This value is not a valid hostname.' => '该值不是有效的主机名称。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '该集合内的元素数量得是 {{ compared_value }} 的倍数。',
    'This value should satisfy at least one of the following constraints:' => '该值需符合以下其中一个约束：',
    'Each element of this collection should satisfy its own set of constraints.' => '该集合内的每个元素需符合元素本身规定的约束。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '该值不是有效的国际证券识别码 （ISIN）。',
    'This value should be a valid expression.' => '该值需为一个有效的表达式。',
    'This value is not a valid CSS color.' => '该值不是有效的CSS颜色。',
    'This value is not a valid CIDR notation.' => '该值不是一个有效的CIDR表示。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => '网络掩码的值应当在 {{ min }} 和 {{ max }} 之间。',
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
    'This value is not a valid HTML5 color.' => '该数值不是个有效的 HTML5 颜色。',
    'Please enter a valid birthdate.' => '请输入有效的生日日期。',
    'The selected choice is invalid.' => '所选的选项无效。',
    'The collection is invalid.' => '集合无效。',
    'Please select a valid color.' => '请选择有效的颜色。',
    'Please select a valid country.' => '请选择有效的国家。',
    'Please select a valid currency.' => '请选择有效的货币。',
    'Please choose a valid date interval.' => '请选择有效的日期间隔。',
    'Please enter a valid date and time.' => '请输入有效的日期与时间。',
    'Please enter a valid date.' => '请输入有效的日期。',
    'Please select a valid file.' => '请选择有效的文件。',
    'The hidden field is invalid.' => '隐藏字段无效。',
    'Please enter an integer.' => '请输入整数。',
    'Please select a valid language.' => '请选择有效的语言。',
    'Please select a valid locale.' => '请选择有效的语言环境。',
    'Please enter a valid money amount.' => '请输入正确的金额。',
    'Please enter a number.' => '请输入数字。',
    'The password is invalid.' => '密码无效。',
    'Please enter a percentage value.' => '请输入百分比值。',
    'The values do not match.' => '数值不匹配。',
    'Please enter a valid time.' => '请输入有效的时间。',
    'Please select a valid timezone.' => '请选择有效的时区。',
    'Please enter a valid URL.' => '请输入有效的网址。',
    'Please enter a valid search term.' => '请输入有效的搜索词。',
    'Please provide a valid phone number.' => '请提供有效的手机号码。',
    'The checkbox has an invalid value.' => '无效的选框值。',
    'Please enter a valid email address.' => '请输入有效的电子邮件地址。',
    'Please select a valid option.' => '请选择有效的选项。',
    'Please select a valid range.' => '请选择有效的范围。',
    'Please enter a valid week.' => '请输入有效的星期。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
    'Too many failed login attempts, please try again later.' => '登入失败的次数过多，请稍后再试。',
    'Invalid or expired login link.' => '失效或过期的登入链接。',
    'Too many failed login attempts, please try again in %minutes% minute.' => '登入失败的次数过多，请在%minutes%分钟后再试。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => '登入失败的次数过多，请在%minutes%分钟后再试。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
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
$catalogueZh->addFallbackCatalogue($catalogueCs);

return $catalogue;
