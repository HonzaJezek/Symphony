<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Šai vērtībai ir jābūt nepatiesai.',
    'This value should be true.' => 'Šai vērtībai ir jābūt patiesai.',
    'This value should be of type {{ type }}.' => 'Šīs vērtības tipam ir jābūt {{ type }}.',
    'This value should be blank.' => 'Šai vērtībai ir jābūt tukšai.',
    'The value you selected is not a valid choice.' => 'Vērtība, kuru jūs izvēlējāties nav derīga izvēle.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic vismaz {{ limit }} izvēle.|Jums ir jāveic vismaz {{ limit }} izvēles.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēles.',
    'One or more of the given values is invalid.' => 'Viena vai vairākas no dotajām vērtībām ir nederīgas.',
    'This field was not expected.' => 'Šis lauks netika gaidīts.',
    'This field is missing.' => 'Šis lauks ir pazudis.',
    'This value is not a valid date.' => 'Šī vērtība ir nederīgs datums.',
    'This value is not a valid datetime.' => 'Šī vērtība ir nederīgs datums un laiks',
    'This value is not a valid email address.' => 'Šī vērtība ir nederīga e-pasta adrese.',
    'The file could not be found.' => 'Fails nav atrasts.',
    'The file is not readable.' => 'Fails nav lasāms.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels ({{ size }} {{ suffix }}). Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faila mime tips nav derīgs ({{ type }}). Atļautie mime tipi ir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Šai vērtībai ir jābūt ne vairāk kā {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmēm.',
    'This value should be {{ limit }} or more.' => 'Šai vērtībai ir jābūt ne mazāk kā {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmēm.',
    'This value should not be blank.' => 'Šai vērtībai nav jābūt tukšai.',
    'This value should not be null.' => 'Šai vērtībai nav jābūt null.',
    'This value should be null.' => 'Šai vērtībai ir jābūt null.',
    'This value is not valid.' => 'Šī vērtība ir nederīga.',
    'This value is not a valid time.' => 'Šī vērtība ir nederīgs laiks.',
    'This value is not a valid URL.' => 'Šī vērtība ir nederīgs URL.',
    'The two values should be equal.' => 'Abām vērtībām jābūt vienādam.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels. Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fails ir pārāk liels.',
    'The file could not be uploaded.' => 'Failu nevarēja augšupielādēt.',
    'This value should be a valid number.' => 'Šai vērtībai ir jābūt derīgam skaitlim.',
    'This file is not a valid image.' => 'Šis fails nav derīgs attēls.',
    'This is not a valid IP address.' => 'Šī nav derīga IP adrese.',
    'This value is not a valid language.' => 'Šī vērtība nav derīga valoda.',
    'This value is not a valid locale.' => 'Šī vērtība nav derīga lokalizācija.',
    'This value is not a valid country.' => 'Šī vērtība nav derīga valsts.',
    'This value is already used.' => 'Šī vērtība jau tiek izmantota.',
    'The size of the image could not be detected.' => 'Nevar noteikt attēla izmēru.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Attēla platums ir pārāk liels ({{ width }}px). Atļautais maksimālais platums ir {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Attēla platums ir pārāk mazs ({{ width }}px). Minimālais sagaidāmais platums ir {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Attēla augstums ir pārāk liels ({{ height }}px). Atļautais maksimālais augstums ir {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Attēla augstums ir pārāk mazs ({{ height }}px). Minimālais sagaidāmais augstums ir {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Šai vērtībai ir jābūt lietotāja pašreizējai parolei.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmei.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmēm.',
    'The file was only partially uploaded.' => 'Fails bija tikai daļēji augšupielādēts.',
    'No file was uploaded.' => 'Fails netika augšupielādēts.',
    'No temporary folder was configured in php.ini.' => 'Pagaidu mape php.ini failā nav nokonfigurēta.',
    'Cannot write temporary file to disk.' => 'Nevar ierakstīt pagaidu failu uz diska.',
    'A PHP extension caused the upload to fail.' => 'PHP paplašinājums izraisīja augšupielādes neizdošanos.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementus.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur tieši {{ limit }} elementu.|Šim krājumam jāsatur tieši {{ limit }} elementus.',
    'Invalid card number.' => 'Nederīgs kartes numurs.',
    'Unsupported card type or invalid card number.' => 'Neatbalstīts kartes tips vai nederīgs kartes numurs.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Šis nav derīgs starptautisks banku konta numurs (IBAN).',
    'This value is not a valid ISBN-10.' => 'Šī vērtība nav derīgs ISBN-10 numurs.',
    'This value is not a valid ISBN-13.' => 'Šī vērtība nav derīgs ISBN-13 numurs',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Šī vērtība neatbilst ne derīgam ISBN-10 numuram, ne derīgm ISBN-13 numuram.',
    'This value is not a valid ISSN.' => 'Šī vērtība nav derīgs ISSN numurs',
    'This value is not a valid currency.' => 'Šī vērtība nav derīga valūta',
    'This value should be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai par {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai vai vienādai ar {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai ir jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai par {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai vai vienādai ar {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai nav jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Attēla attiecība ir pārāk liela ({{ ratio }}). Atļautā maksimālā attiecība ir {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Attēla attiecība ir pārāk maza ({{ ratio }}). Minimālā sagaidāmā attiecība ir {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Šis attēls ir kvadrāts ({{ width }}x{{ height }}px). Kvadrātveida attēli nav atļauti.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Attēls ir orientēts kā ainava ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā ainavas nav atļauti.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Attēls ir orientēts kā portrets ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā portreti nav atļauti.',
    'An empty file is not allowed.' => 'Tukšs fails nav atļauts.',
    'The host could not be resolved.' => 'Resursdatora nosaukumu nevar atrisināt.',
    'This value does not match the expected {{ charset }} charset.' => 'Šī vērtība neatbilst sagaidāmajai rakstzīmju kopai {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Šī vērtība nav derīgs Biznesa Identifikācijas Kods (BIC).',
    'Error' => 'Kļūda',
    'This is not a valid UUID.' => 'Šis nav derīgs UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Šai vērtībai jābūt vairākas reizes atkārtotai {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Šis Biznesa Identifikācijas Kods (BIC) neatbilst {{ iban }} konta numuram (IBAN).',
    'This value should be valid JSON.' => 'Šai vērtībai jābūt derīgam JSON.',
    'This collection should contain only unique elements.' => 'Šai kolekcijai jāsatur tikai unikāli elementi.',
    'This value should be positive.' => 'Šai vērtībai jābūt pozitīvai.',
    'This value should be either positive or zero.' => 'Šai vērtībai jābūt pozitīvai vai vienādai ar nulli.',
    'This value should be negative.' => 'Šai vērtībai jābūt negatīvai.',
    'This value should be either negative or zero.' => 'Šai vērtībai jābūt negatīvai vai vienādai ar nulli.',
    'This value is not a valid timezone.' => 'Šī vērtība nav derīga laika zona.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Šī parole tika publicēta datu noplūdē, viņu nedrīkst izmantot. Lūdzu, izvēlieties citu paroli.',
    'This value should be between {{ min }} and {{ max }}.' => 'Šai vērtībai jābūt starp {{ min }} un {{ max }}.',
    'This value is not a valid hostname.' => 'Šī vērtība nav derīgs tīmekļa servera nosaukums.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Elementu skaitam šajā kolekcijā jābūt {{ compared_value }} reizinājumam.',
    'This value should satisfy at least one of the following constraints:' => 'Šai vērtībai jāiekļaujas vismaz vienā no sekojošiem ierobežojumiem:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Šīs kolekcijas katram elementam jāiekļaujas savā ierobežojumu kopā.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Šī vērtība nav derīgs starptautiskais vērtspapīru identifikācijas numurs (ISIN).',
    'This value should be a valid expression.' => 'Šai vērtībai jābūt korektai izteiksmei.',
    'This value is not a valid CSS color.' => 'Šī vērtība nav korekta CSS krāsa.',
    'This value is not a valid CIDR notation.' => 'Šī vērtība nav korekts CIDR apzīmējums.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Tīkla maskas (netmask) vērtībai jābūt starp {{ min }} un {{ max }}.',
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'This value is not a valid HTML5 color.' => 'Šī vertība nav derīga HTML5 krāsa.',
    'Please enter a valid birthdate.' => 'Lūdzu, ievadiet derīgu dzimšanas datumu.',
    'The selected choice is invalid.' => 'Iezīmētā izvēle nav derīga.',
    'The collection is invalid.' => 'Kolekcija nav derīga.',
    'Please select a valid color.' => 'Lūdzu, izvēlieties derīgu krāsu.',
    'Please select a valid country.' => 'Lūdzu, izvēlieties derīgu valsti.',
    'Please select a valid currency.' => 'Lūdzu, izvēlieties derīgu valūtu.',
    'Please choose a valid date interval.' => 'Lūdzu, izvēlieties derīgu datumu intervālu.',
    'Please enter a valid date and time.' => 'Lūdzu, ievadiet derīgu datumu un laiku.',
    'Please enter a valid date.' => 'Lūdzu, ievadiet derīgu datumu.',
    'Please select a valid file.' => 'Lūdzu, izvēlieties derīgu failu.',
    'The hidden field is invalid.' => 'Slēptā lauka vērtība ir nederīga.',
    'Please enter an integer.' => 'Lūdzu, ievadiet veselu skaitli.',
    'Please select a valid language.' => 'Lūdzu, izvēlieties derīgu valodu.',
    'Please select a valid locale.' => 'Lūdzu, izvēlieties derīgu lokalizāciju.',
    'Please enter a valid money amount.' => 'Lūdzu, ievadiet derīgu naudas lielumu.',
    'Please enter a number.' => 'Lūdzu, ievadiet skaitli.',
    'The password is invalid.' => 'Parole ir nederīga.',
    'Please enter a percentage value.' => 'Lūdzu, ievadiet procentuālo lielumu.',
    'The values do not match.' => 'Vērtības nesakrīt.',
    'Please enter a valid time.' => 'Lūdzu, ievadiet derīgu laiku.',
    'Please select a valid timezone.' => 'Lūdzu, izvēlieties derīgu laika zonu.',
    'Please enter a valid URL.' => 'Lūdzu, ievadiet derīgu URL.',
    'Please enter a valid search term.' => 'Lūdzu, ievadiet derīgu meklēšanas nosacījumu.',
    'Please provide a valid phone number.' => 'Lūdzu, ievadiet derīgu tālruņa numuru.',
    'The checkbox has an invalid value.' => 'Izvēles rūtiņai ir nederīga vērtība.',
    'Please enter a valid email address.' => 'Lūdzu, ievadiet derīgu e-pasta adresi.',
    'Please select a valid option.' => 'Lūdzu, izvēlieties derīgu opciju.',
    'Please select a valid range.' => 'Lūdzu, izvēlieties derīgu diapazonu.',
    'Please enter a valid week.' => 'Lūdzu, ievadiet derīgu nedēļu.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību šī resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
    'Too many failed login attempts, please try again later.' => 'Pārāk daudz atteiktu autentifikācijas mēģinājumu, lūdzu, mēģiniet vēlreiz vēlāk.',
    'Invalid or expired login link.' => 'Autentifikācijas saite ir nederīga vai arī tai ir beidzies derīguma termiņš.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Pārāk daudz nesekmīgu autentifikācijas mēģinājumu, lūdzu mēģiniet vēlreiz pēc %minutes% minūtes.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Pārāk daudz nesekmīgu autentifikācijas mēģinājumu, lūdzu mēģiniet vēlreiz pēc %minutes% minūtēm.',
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