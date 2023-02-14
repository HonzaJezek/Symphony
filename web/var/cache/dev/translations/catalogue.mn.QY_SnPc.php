<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Энэ утга буруу байх ёстой.',
    'This value should be true.' => 'Энэ утга үнэн байх ёстой.',
    'This value should be of type {{ type }}.' => 'Энэ утга  {{ type }} -н төрөл байх ёстой.',
    'This value should be blank.' => 'Энэ утга хоосон байх ёстой.',
    'The value you selected is not a valid choice.' => 'Сонгосон утга буруу байна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Хамгийн багадаа {{ limit }} утга сонгогдсон байх ёстой.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Хамгийн ихдээ {{ limit }} утга сонгогдох боломжтой.',
    'One or more of the given values is invalid.' => 'Өгөгдсөн нэг эсвэл нэгээс олон утга буруу байна.',
    'This field was not expected.' => 'Энэ талбар нь хүлээгдэж байсан юм.',
    'This field is missing.' => 'Энэ талбар нь алга болсон байна.',
    'This value is not a valid date.' => 'Энэ утга буруу date төрөл байна .',
    'This value is not a valid datetime.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid email address.' => 'И-майл хаяг буруу байна.',
    'The file could not be found.' => 'Файл олдсонгүй.',
    'The file is not readable.' => 'Файл уншигдахуйц биш байна.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна ({{ size }} {{ suffix }}). Зөвшөөрөгдөх дээд хэмжээ  {{ limit }} {{ suffix }} байна.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Файлын MIME-төрөл нь буруу байна ({{ type }}). Зөвшөөрөгдөх MIME-төрлүүд {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Энэ утга  {{ limit }} юмуу эсвэл бага байна.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Энэ утга хэтэрхий урт байна. {{ limit }} тэмдэгтийн урттай юмуу эсвэл бага байна.',
    'This value should be {{ limit }} or more.' => 'Энэ утга {{ limit }} юмуу эсвэл их байна.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Энэ утга хэтэрхий богино байна. {{ limit }} тэмдэгт эсвэл их байна.',
    'This value should not be blank.' => 'Энэ утга хоосон байж болохгүй.',
    'This value should not be null.' => 'Энэ утга null байж болохгүй.',
    'This value should be null.' => 'Энэ утга null байна.',
    'This value is not valid.' => 'Энэ утга буруу байна.',
    'This value is not a valid time.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid URL.' => 'Энэ утга буруу URL байна .',
    'The two values should be equal.' => 'Хоёр утгууд ижил байх ёстой.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна. Зөвшөөрөгдөх дээд хэмжээ нь {{ limit }} {{ suffix }} байна.',
    'The file is too large.' => 'Файл хэтэрхий том байна.',
    'The file could not be uploaded.' => 'Файл upload хийгдсэнгүй.',
    'This value should be a valid number.' => 'Энэ утга зөвхөн тоо байна.',
    'This file is not a valid image.' => 'Файл зураг биш байна.',
    'This is not a valid IP address.' => 'IP хаяг зөв биш байна.',
    'This value is not a valid language.' => 'Энэ утга үнэн зөв хэл биш байна.',
    'This value is not a valid locale.' => 'Энэ утга үнэн зөв байршил биш байна.',
    'This value is not a valid country.' => 'Энэ утга үнэн бодит улс биш байна.',
    'This value is already used.' => 'Энэ утга аль хэдийнээ хэрэглэгдсэн байна.',
    'The size of the image could not be detected.' => 'Зургийн хэмжээ тогтоогдож чадсангүй.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Зургийн өргөн хэтэрхий том байна ({{ width }}px). Өргөн нь хамгийн ихдээ {{ max_width }}px байх боломжтой.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Зургийн өргөн хэтэрхий жижиг байна ({{ width }}px). Өргөн нь хамгийн багадаа {{ min_width }}px байх боломжтой.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Зургийн өндөр хэтэрхий том байна ({{ height }}px). Өндөр нь хамгийн ихдээ {{ max_height }}px байх боломжтой.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Зургийн өндөр хэтэрхий жижиг байна ({{ height }}px). Өндөр нь хамгийн багадаа {{ min_height }}px байх боломжтой.',
    'This value should be the user\'s current password.' => 'Энэ утга хэрэглэгчийн одоогийн нууц үг байх ёстой.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Энэ утга яг {{ limit }} тэмдэгт байх ёстой.|Энэ утга яг {{ limit }} тэмдэгт байх ёстой.',
    'The file was only partially uploaded.' => 'Файлын зөвхөн хагас нь upload хийгдсэн.',
    'No file was uploaded.' => 'Ямар ч файл upload хийгдсэнгүй.',
    'No temporary folder was configured in php.ini.' => 'php.ini дээр түр зуурын хавтсыг тохируулаагүй байна, эсвэл тохируулсан хавтас байхгүй байна.',
    'Cannot write temporary file to disk.' => 'Түр зуурын файлыг диск руу бичиж болохгүй байна.',
    'A PHP extension caused the upload to fail.' => 'PHP extension нь upload -г амжилтгүй болгоод байна.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Энэ коллекц яг {{ limit }} элемент агуулах ёстой.|Энэ коллекц яг {{ limit }} элемент агуулах ёстой.',
    'Invalid card number.' => 'Картын дугаар буруу байна.',
    'Unsupported card type or invalid card number.' => 'Дэмжигдээгүй картын төрөл эсвэл картын дугаар буруу байна.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Энэ утга үнэн зөв Олон Улсын Банкны Дансны Дугаар (IBAN) биш байна.',
    'This value is not a valid ISBN-10.' => 'Энэ утга үнэн зөв ISBN-10 биш байна.',
    'This value is not a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-13 биш байна.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-10 юмуу ISBN-13 биш байна.',
    'This value is not a valid ISSN.' => 'Энэ утга үнэн зөв ISSN биш байна.',
    'This value is not a valid currency.' => 'Энэ утга үнэн бодит валют биш байна.',
    'This value should be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тaй тэнцүү байх ёстой.',
    'This value should be greater than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с их байх ёстой.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү юмуу эсвэл их байх ёстой.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёстой.',
    'This value should be less than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с бага байх ёстой.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай ижил юмуу эсвэл бага байх ёстой.',
    'This value should not be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү байх ёсгүй.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёсгүй.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Зургийн харьцаа хэтэрхий том байна ({{ ratio }}). Харьцаа нь хамгийн ихдээ {{ max_ratio }} байна.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Зургийн харьцаа хэтэрхий жижиг байна ({{ ratio }}). Харьцаа нь хамгийн багадаа {{ min_ratio }} байна.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зураг дөрвөлжин хэлбэртэй байна ({{ width }}x{{ height }}px). Дөрвөлжин зургууд оруулах боломжгүй.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зураг хэвтээ байрлалтай байна ({{ width }}x{{ height }}px). Хэвтээ байрлалтай зургууд оруулах боломжгүй.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зургууд босоо байрлалтай байна ({{ width }}x{{ height }}px). Босоо байрлалтай зургууд оруулах боломжгүй.',
    'An empty file is not allowed.' => 'Хоосон файл оруулах боломжгүй.',
    'The host could not be resolved.' => 'Хост зөв тохирогдоогүй байна.',
    'This value does not match the expected {{ charset }} charset.' => 'Энэ утга тооцоолсон {{ charset }} тэмдэгттэй таарахгүй байна.',
    'This is not a valid Business Identifier Code (BIC).' => 'Энэ утга үнэн зөв Business Identifier Code (BIC) биш байна.',
    'Error' => 'Алдаа',
    'This is not a valid UUID.' => 'Энэ утга үнэн зөв UUID биш байна.',
    'This value should be a multiple of {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -н үржвэр байх ёстой.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Энэ Business Identifier Code (BIC) код нь IBAN {{ iban }} -тай холбоогүй байна.',
    'This value should be valid JSON.' => 'Энэ утга JSON байх ёстой.',
    'This collection should contain only unique elements.' => 'Энэ коллекц зөвхөн давтагдахгүй элементүүд агуулах ёстой.',
    'This value should be positive.' => 'Энэ утга эерэг байх ёстой.',
    'This value should be either positive or zero.' => 'Энэ утга тэг эсвэл эерэг байх ёстой.',
    'This value should be negative.' => 'Энэ утга сөрөг байх ёстой.',
    'This value should be either negative or zero.' => 'Энэ утга сөрөг эсвэл тэг байх ёстой.',
    'This value is not a valid timezone.' => 'Энэ утга үнэн зөв цагийн бүс биш байна.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Энэ нууц үгийн мэдээлэл алдагдсан байх магадлалтай учраас дахин ашиглагдах ёсгүй. Өөр нууц үг ашиглана уу.',
    'This value should be between {{ min }} and {{ max }}.' => 'Энэ утга {{ min }} -с {{ max }} хооронд байх ёстой.',
    'This value is not a valid hostname.' => 'Энэ утга буруу hostname байна.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Энэхүү цуглуулган дахь элемэнтийн тоо, {{ compared_value }}-н үржвэр байх ёстой.',
    'This value should satisfy at least one of the following constraints:' => 'Энэ утга доорх болзолуудын ядаж нэгийг хангах ёстой:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Энэхүү цуглуулган дахь элемэнтүүд өөр өөрсдийн болзолуудаа хангах ёстой.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Энэ утга зөв International Securities Identification Number (ISIN) биш байна.',
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
    'This value is not a valid HTML5 color.' => 'Энэ утга зөв HTML5 өнгө биш байна.',
    'Please enter a valid birthdate.' => 'Зөв төрсөн он сар оруулна уу.',
    'The selected choice is invalid.' => 'Сонгосон утга буруу байна.',
    'The collection is invalid.' => 'Цуглуулга буруу байна.',
    'Please select a valid color.' => 'Үнэн зөв өнгө сонгоно уу.',
    'Please select a valid country.' => 'Үнэн зөв улс сонгоно уу.',
    'Please select a valid currency.' => 'Үнэн зөв мөнгөн тэмдэгт сонгоно уу.',
    'Please choose a valid date interval.' => 'Үнэн зөв цагын зай сонгоно уу.',
    'Please enter a valid date and time.' => 'Үнэн зөв он цаг оруулна уу.',
    'Please enter a valid date.' => 'Үнэн зөв он цаг өдөр оруулна уу.',
    'Please select a valid file.' => 'Үнэн зөв файл сонгоно уу.',
    'The hidden field is invalid.' => 'Нууц талбарын утга буруу байна.',
    'Please enter an integer.' => 'Бүхэл тоо оруулна уу.',
    'Please select a valid language.' => 'Үнэн зөв хэл сонгоно уу.',
    'Please select a valid locale.' => 'Үнэн зөв бүс сонгоно уу.',
    'Please enter a valid money amount.' => 'Үнэн зөв мөнгөний хэмжээ сонгоно уу.',
    'Please enter a number.' => 'Тоо оруулна уу.',
    'The password is invalid.' => 'Нууц үг буруу байна.',
    'Please enter a percentage value.' => 'Хувь утга оруулна уу.',
    'The values do not match.' => 'Утга хоорондоо таарахгүй байна.',
    'Please enter a valid time.' => 'Үнэн зөв цаг оруулна уу.',
    'Please select a valid timezone.' => 'Үнэн зөв цагын бүс оруулна уу.',
    'Please enter a valid URL.' => 'Үнэн зөв URL оруулна уу.',
    'Please enter a valid search term.' => 'Үнэн зөв хайх утга оруулна уу.',
    'Please provide a valid phone number.' => 'Үнэн зөв утасны дугаар оруулна уу.',
    'The checkbox has an invalid value.' => 'Сонгох хайрцаг буруу утгатай байна.',
    'Please enter a valid email address.' => 'Үнэн зөв и-мэйл хаяг оруулна уу.',
    'Please select a valid option.' => 'Үнэн зөв сонголт сонгоно уу.',
    'Please select a valid range.' => 'Үнэн зөв хязгаарын утга сонгоно уу.',
    'Please enter a valid week.' => 'Үнэн зөв долоо хоног сонгоно уу.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Нэвтрэх хүсэлтийн алдаа гарав.',
    'Authentication credentials could not be found.' => 'Нэвтрэх эрхийн мэдээлэл олдсонгүй.',
    'Authentication request could not be processed due to a system problem.' => 'Системийн алдаанаас болон нэвтрэх хүсэлтийг гүйцэтгэх боломжгүй байна.',
    'Invalid credentials.' => 'Буруу нэвтрэх эрхийн мэдээлэл.',
    'Cookie has already been used by someone else.' => 'Күүки файлыг аль хэдийн өөр хүн хэрэглэж байна.',
    'Not privileged to request the resource.' => 'Энэхүү мэдээллийг авах эрх хүрэхгүй байна.',
    'Invalid CSRF token.' => 'Тохиромжгүй CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Нэвтрэх токенг дэмжих нэвтрэх эрхийн хангагч олдсонгүй.',
    'No  available, it either timed out or cookies are not enabled.' => 'Хэрэглэгчийн session олдсонгүй, хугацаа нь дууссан эсвэл күүки идэвхижүүлээгүй байна.',
    'No token could be found.' => 'Токен олдсонгүй.',
    'Username could not be found.' => 'Нэвтрэх нэр олсонгүй.',
    'Account has expired.' => 'Бүртгэлийн хугацаа дууссан байна.',
    'Credentials have expired.' => 'Нэвтрэх эрхийн хугацаа дууссан байна.',
    'Account is disabled.' => 'Бүртгэлийг хаасан байна.',
    'Account is locked.' => 'Бүртгэлийг цоожилсон байна.',
    'Too many failed login attempts, please try again later.' => 'Хэтэрхий олон амжилтгүй оролдлого, түр хүлээгээд дахин оролдоно уу.',
    'Invalid or expired login link.' => 'Буруу эсвэл хугацаа нь дууссан нэвтрэх зам.',
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