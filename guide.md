# راهنماها و توضیحات

برای مطالعه راهنمای مختص به این پروژه، [**این صفحه**](./project_guide.md) رو مطالعه کنید. محتویات این فایل یه‌جور جزوه جمع‌وجور برای [کتاب طراحی وب پایه یازدهم رشته شبکه و نرم‌افزار کامپیوتر](http://www.chap.sch.ir/books/12532)، از پودمان ۲ تا ۵ هستش.

> ⚠️ **یادآوری مهم**:  
> این راهنما ها و توضیحات اصلا مطالب خوبی برای خوندن برای امتحانات مدارس یا کنکور نیستن. سعی کنین برای امتحان مدارس یا کنکور، خود [**کتاب درسی**](http://www.chap.sch.ir/books/12532) رو مطالعه کنین.

## اصول پایه (از صفحه ۶۴ تا ۷۳)

اگه از اول پودمان دوی کتاب (که مباحث طراحی وب از اینجا شروع میشه) بخوام شروع کنم، باید بریم سراغ صفحه‌ی ۶۴ کتاب که راجع‌به مفاهیم وب جهان‌گستر ([World wide web](https://en.wikipedia.org/wiki/World_Wide_Web)) صحبت میکنه و میگه که منبع صفحات وبه و با پروتکل های [http](https://en.wikipedia.org/wiki/HTTP) و [https](https://en.wikipedia.org/wiki/HTTPS) کار میکنه.  
همچنین برای دستیابی به این صفحه‌ها باید از [URL ها](https://en.wikipedia.org/wiki/URL) (Uniform resource locator) و نرم‌افزار های کاربردی مرورگر های وب که برای دریافت و نمایش اطلاعات استفاده میشود، استفاده کنیم.

بعدش درمورد [نشانک‌گذاری](https://en.wikipedia.org/wiki/Bookmark_(digital)) (Bookmark) و [تاریخچه](https://en.wikipedia.org/wiki/Web_browsing_history) (History) صحبت کرده و مفهوم [کوکی](https://en.wikipedia.org/wiki/HTTP_cookie) (Cookie) رو بیشتر توضبح داده.  
کوکی ها درواقع یک‌سری فایل‌ها هستن که روی کامپیوتر کاربر ذخیره میشن و معمولا حاوی اطلاعاتی از اون سایتی که مشاهده کردید، هستن. داخل مرورگر ذخیره میشن و حجم کمی دارن.

بعد، درمورد [مرورگر پیش‌فرض](https://www.google.com/search?q=what+is+default+browser) و [موتور جست‌جوی وب](https://en.wikipedia.org/wiki/Search_engine) (یا همون سرچ انجین خودمون - Web search engine) صحبت کرده.  
بعدش هم در صفحه ۷۱ یکم درمورد جست‌جوی پیشرفته گوگل و در صفحه ۷۳ در مورد جست‌جوی تصویری گوگل یکم صحبت کرده و چند مورد از عملگرهاشو آورده.

## صفحات وب (از صفحه ۷۵ تا صفحه ۷۹)

از صفحه‌ی ۷۵ پودمان دوم، کتاب کم‌کم شروع میکنه درمورد وب و صفحات وب و درمورد انواع وبسایت ها (مثل ایستا و پویا) صحبت کرده.  
همینطور گفته که داخل این صفحات از [HTML](https://en.wikipedia.org/wiki/HTML) (Hyper text markup language) و در کنارش از [CSS](https://en.wikipedia.org/wiki/CSS) و [Javascript](https://en.wikipedia.org/wiki/JavaScript) هم استفاده میشه.

این آقای HTML درواقع یه سری کده که برای مرورگر ها قابل فهمه و مرورگر ها کد این فایل های HTML که مبتنی بر متن (یعنی نیاز به کامپایل شدن ندارن) هستن رو میخونه و رندر میکنه و به شما نشون میده.

این فایل های HTML رو شما با هر ادیتوری که بخواین، مثل Notepad ویندوز، میتونین بنویسین و ایجاد کنین. پسوند این فایل‌ها هم `.html` و ‍`.htm` هست.

> **نکته:**  
> دوستان `html.` و `htm.` هیچ فرقی با هم ندارن، منتهی `htm.` قدیما زمانی که پسوند فایلا باید حتما سه‌حرفی می‌بود، استفاده میشد.

بعد از اینا هم کتاب داخل کارگاه ۶ بهتون یاد میده چطور با Notepad ویندوز یه فایل HTML بسازین و بنویسین.

بعد از اونم داخل صفحه ۷۸ کتاب شکل کلی دستورات HTML رو یاد میگیرین.

> **نکته:**  
> دستور HTML = عنصر HTML = تگ HTML  
> این اسم ها ممکنه هرکدوم یه‌جای کتاب استفاده بشه ولی مفهوم‌شون یکیه.

<div align="left">

`<تگ ابتدایی>محتویات</تگ انتهایی>`

</div>

عناصری که مثل خطی که بالا نوشتم، دوتا برچسب دارن اصطلاحا Container نامیده میشن و حاوی یه محتوایی هستن که به یه نحوی داخل صفحه وب‌تون نمایش داده میشه.

به عنوان مثال وقتی شما میخواین یه عنوانی برای صفحه‌تون تعریف کنین تا روی سربرگ مرورگرتون مشخص بشه از تگ title استفاده میکنین.

`<title>فروشگاه ایرانیان</title>`

بعدش هم گفته باید Encoding فایلتون رو حتما روی UTF-8 قرار بدین وگرنه متون فارسی رو درست نمایش نمیده.

## ساختار HTML (از صفحه ۸۰ تا ۸۵)

اصولا ما هر کد HTML ای که بخوایم بنویسیم باید داخل تگ کانتینر `<html>` میذاریم.

بعد از این، ما یدونه تگ `<head>` داریم که محتویاتش، اطلاعات کلی صفحه وب‌مون هست. معمولا محتویات این تگ نوع کانتینر نمایش داده نمیشه.  
برای اینکه بخوایم چیزی رو داخل صفحه‌مون نمایش بدیم اونو داخل تگ `<body>` میذاریم.

یه نوع عنصر هم داریم به اسم meta تگ‌ها که اطلاعات صفحه وب‌مون رو به موتور های جست‌جوگر میده (یجورایی ابتدایی ترین کار SEO رو انجام میده)  
عنصر meta یه سری صفت داره که میتونین تو جدول ۱ کتاب صفحه ۸۰ ببینیدش.

بعد اومده این داستان صفت عنصر ها توی HTML رو تعریف کرده.یه‌سری از عناصر یه چندتا جزء دیگه‌هم دارن که به اونا صفت میگن. صفت ها داخل تگ ابتدایی مشخص و مقدار دهی میشن.  
مثلا:

`<body dir="rtl"></body>`

این تیکه کد الان باعث میشه جهت (direction) محتوایداخل تگ body مون بصورت راست به چپ (right-to-left) باشه.  
میشه به یه عنصر چندتا صفت هم داد. مثلا:

`<meta name="Author" content="Ali Almasi>"`

این تیکه کد الان یه تگ meta هستش که نویسنده صفحه وب رو مشخص میکنه.

بعد از همه‌ی اینها میاد و قالب‌بندی متن در HTML رو بهمون میگه.

چند تا عنصر برای قالب‌بندی متن و بند وجود دارن که خیلی راحت میتونیم از اونا استفاده کنیم.

مثلا برای اینکه متن‌مون رو بولد کنیم از `<b>BOLD</b>` استفاده میکنیم. برای اینکه متن‌مون رو بصورت مورب (Italic) نشون بدیم، داخل `<i>Italic</i>` و برای اینکه برای متن‌مون زیرمتن (آندرلاین) بذاریم، از `<u>Underline</u>` استفاده میکنیم.

یه تگی هم داریم به اسم `<font></font>` که به شکل زیر میتونه استفاده بشه:

`<font face="نام فونت" size="مقدار" color="نام رنگ"></font>`

> **نکته:**  
> دوستان برای تنظیم فونت بهتره از CSS استفاده کنید.

یه عنصر `<p>Paragraph</p>` هم داریم که برای مشخص کردن پاراگراف در متن‌های بلند هستش. این عنصر یه صفت align هم برای ترازبندی متن قبول میکنه. مثلا:

`<p align="right">Paragraph 1</p>`

چندتا عنصر هم هستن که برای عنوان‌بندی استفاده میشن. این عناصر از h1 تا h6 هستن. از h1 که بزرگترین عنوان هست، تا h6 که کوچکترین عنوان هستش.

دوتا عنصر دیگه هم داریم که کانتینر نیستن، یکیشون `<hr>` هست که درواقع یه خط افقی داخل صفحه برامون ایجاد میکنه، یکی دیگه‌شم `<br>` هستش که میاد یک خط رو میشکونه و بقیه محتوا رو  
در خط بعدی نشون میده. درواقع line break انجام میده. (به خط های همین پاراگراف دقت کنین)

برای تمرین و دیدن عملکرد این عناصر میتونین از کارگاه ۱۰ صفحه ۸۴ استفاده کنین.

## آشنایی با [CSS](https://en.wikipedia.org/wiki/CSS) (از صفحه ۸۶ تا ۹۱)

اگه HTML رو تیرآهن های یه ساختمان و محتوای داخلش رو دیوارهای ساختمان درنظر بگیریم، CSS درواقعا نمای ساختمان هستش. (یا بقول هنرآموز بنده، خوشگلاسیون سایت)

با استفاده از CSS به عناصر HTML استایل بدیم و نحوه نمایش‌شون رو تغییر بدیم تا خوشگلتر دیده بشن.  
CSS شامل مجموعه‌ای از قواعده که هرکدوم شامل دو قسمت Selector و Declaration هست.

بخش Selector همون قسمتی هستش که مشخص میکنه قواعد بخش Declaration برای کدوم عنصره.  
بخش Declaration هم خودش شامل دو قسمت Property و Value هستش. در این بخش میتوان چندین قواعد مشخص کرد که هرکدوم با سمی‌کالن (`;`) از هم جدا میشن.

```css
Selector {
	property: Value;
}
```

کتاب گفته برای نوشتن کد های HTML و CSS میشه از هر ویرایشگری استفاده کرد، ولی خودش [++Notepad](https://notepad-plus-plus.org/) رو به عنوان یه ویرایشگر خوب معرفی کرده.

> اگه از من بپرسین، من میگم [Vs Code](https://code.visualstudio.com/) از همشون برای طراحی وب بهتره بنظرم. اگه بتونین کار باهاش رو یاد بگیرین بعدا که بخواین کار کنین خیلی بدردتون میخوره.

بعد از این هم کتاب داخل جدول ۴ صفحه‌ ۸۸ انتخابگر های (Selector) رایج CSS رو معرفی کرده:

- Element-type (انتخابگر های عنصری) مثل `a {}` که به تمامی عناصر `a` در صفحه اعمال میشه

- Class selector (`.`) مثل `.divTable {}` که به تمامی عناصر با صفت `class="divTable"`اعمال میشه

- ID selector (`#`) مثل `#siteTitle {}` که به عنصری با صفت `id="siteTitle"` اعمال میشه

بعد از همه این‌ها، کتاب درباره چندتا از Property هایی که میتونین داخل قواعد CSS ذکر کنین مثل `font-family` و `font-size` و `font-weight` و `color` اشاره کرده و چند خط توضیح داده.  
یه سری قواعد رایج هم داخل جدول ۵ صفحه ۸۹ نوشته که میتونین خودتون تکمیلش کنین یا از کتاب راهنمای هنرآموز برای کامل کردنش کمک بگیرین (البته خیلی هم سخت نیستن، با یه سرچ ساده میتونین متوجه عملکردشون بشین).

## انواع روش های CSS نویسی (از صفحه ۹۱ تا ۹۵)

برای نوشتن قواعد CSS برای صفحه‌وب‌مون ما سه روش مختلف داریم که هر کدوم تو یه جاهایی بدرد میخورن.

1. Inline style (استایل‌دهی خطی)
2. Internal CSS (CSS داخلی)
3. External CSS (CSS خارجی)

**استایل‌دهی خطی** از طریق صفت `""=style` برای عناصر دلخواه‌مون اتفاق میفته.  
هرکدوم از عناصری که ما میخوایم ظاهرشون رو عوض کنیم، یه صفت style بهش میدیم و تو مقدار این صفت شروع میکنیم قواعد CSS مورد نظرمون رو مینویسیم. دقت کنید، تو این روش، چون ما با صفت داریم مشخص میکنیم این قواعد برای چه عنصری هست، نیاز به انتخابگر (Selector) نیست و فقط شروع میکنیم به نوشتن `;Property: Value` های موردنظرمون. مثلا من میخوام یه عنوان سطح اول با رنگ متن قرمز و رنگ پس‌زمینه آبی داشته باشم، پس میتونم اینجوری بنویسمش:

```html
<h1 style="color: red; background-color: blue;">Hello, world!</h1>
```

> **نکته:**  
> یادتون باشه فقط در حالت استایل‌دهی خطی نیاز نداریم انتخابگر (Selector) رو مشخص کنیم، ولی در بقیه حالت ها _(CSS داخلی و خارجی)_ حتما باید مشخص کنیم که قواعد برای کدوم عنصر ها هستن.

<div align="center">*</div>

> **نکته ۲:**  
> تو استایل‌دهی خطی خیلی پیش میاد که از عنصری با نام `span` استفاده کنن.  
> این عنصر درواقع نمایانگر یه بخش کوچیکی از یه متنه و با توجه به چیزی که کتاب گفته، ازش برای نشانه‌گذاری یه بخشی از نوشته و تقسیم‌بندی متن های موجود استفاده میشه.

---

در مرحله‌ی بعدی، ما میتونیم قواعد CSS مون رو بطور مجمع و کلی داخل خود فایل HTML مون (در قسمت `<head></head>` در تگ `<style></style>`) که بهش میگن **CSS داخلی**.

مثلا من میخوام اسم کاربر رو داخل یه عنصر پاراگراف به رنگ متن آبی و در وسط صفحه نمایش بدم، پس میتونم فایل HTML ام رو اینطوری بنویسم:

```html
<html>
	<head>
		<title>نام کاربر</title>
		<style>
			#userName {
				color: blue;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<p id="userName">کاربر گرامی آقای حمیدی</p>
	</body>
</html>
```

دقت کنید که من اینجا به عنصر `p` صفت `id` دادم و مقدارش رو برابر `userName` گذاشتم و از همین برای انتخاب کردن عنصر در CSS بصورت `{} userName#` استفاده کردم.

---

حالا میرسیم سراغ **CSS خارجی**. این نوع از استایل‌دهی خیلی خیلی بیشتر استفاده میشه و خیلی استفاده و نگهداری ازش (بخصوص توی سایت های بزرگ که چندتا صفحه وب دارن) راحت‌تره.

برای مثال، من همون کدی که در قسمت CSS داخلی نوشتم رو میخوام به CSS خارجی تبدیل کنم. اول از همه میام کنار فایل HTML ام یه فایل با پسوند `css.` ایجاد میکنم و تموم قواعد رو داخل اون میریزم.

style.css:

```css
#userName {
	color: blue;
	text-align: center;
}
```

user.html:

```html
<html>
	<head>
		<title>نام کاربر</title>
	</head>
	<body>
		<p id="userName">کاربر گرامی آقای حمیدی</p>
	</body>
</html>
```

حالا برای اینکه فایل CSS خارجی‌ام رو به HTML ام معرفی کنم و بهش بگم که برو از اینجا قواعدو بخون، این یه خط کدو وارد قسمت `<head></head>` فایل HTML ام میکنم:

```html
<link href="style.css" type="text/css" rel="stylesheet" />
```

این خط کد چی میگه؟ میگه آقای مرورگر عزیز، یه فایل به اسم `style.css` بغل دست فایل `user.html` هست که جنسش از نوع `css` و متنی (text) هست، اینو بردار بیار به عنوان `stylesheet` (یا همون قواعد CSS خودمون) استفاده کن.  
اونم میگه چشم، میره هرچی داخل اون فایل هست رو میخونه و اجرا میکنه، درنهایت هم ظاهر اون عنصر `p` ما عوض میشه و خوشگل میشه.

## دو ساختار طراحی صفحات وب با HTML (صفحه ۱۰۹)

دو ساختار اصلی برای طراحی صفحات وب هست. یکیش عنصر `<div></div>` هست که کنار عناصر نسخه پنجم HTML استفاده میشه، اون یکی هم با استفاده از جدول (`<table>`) هست.

شما مفاهیم پایه و مورد نیاز رو یاد گرفتین، اما برای اینکه کمی با نحوه کار کردن کد های این پروژه آشنا بشین، فقط نیاز دارین تا با ساختار جدولی آشنا بشین.  
البته کتاب تو این پروژه iranianshop از یه ترکیب بین `<div>` و `<table>` استفاده میکنه،(بنابراین بعد از ساختار جدولی یکم درمورد `div` ها هم صحبت میکنیم.) چجوری؟ درواقعا میاد با قواعد CSS اون div هارو به جدول تبدیل میکنه. مثلا اینجوری:

<pre lang="css">
.divTable {
	<u>display: table;</u>
	font-family: tahoma;
	direction: rtl;
}
</pre>

کتاب خودش با استفاده از نرم‌افزار [DreamWeaver](https://soft98.ir/internet/web-design/2510-adobe-dreamweaver-cc-dl.html) اقدام به ساخت جدول کرده، اگه شما هم علاقه داشتین با همون روش کتاب پیش برین، میتونین از صفحه ۱۰۹ تا ۱۱۲ کتاب رو بخونین.

> ولی از اونجایی که بنظر من DreamWeaver هم ویرایشگر خوبی نیست،‌ ما بهتره از طریق کد نویسی ساختار `table` رو درک کنیم.

اساسا وقتی ما میخوایم شروع کنیم به ساخت یه جدول داخل یه صفحه‌ی‌وب، از تگ کانتینر `<table></table>` استفاده میکنیم.

بعد از اون برای ایجاد هر سطر (خط افقی) داخل جدول‌مون از تگ `<tr></tr>` استفاده میکنیم که محتویاتش معمولا باید تگ های `<td></td>` باشن که نمایانگر ستون (خط عمودی) هستش. تگ `td` محتویاتش چیزهایی هستن که میخواین داخل یه سلول (تقاطع سطر و ستون) نمایش بدیم.

برای مثال، من یه صفحه HTML با یه جدول داخلش مینویسم، شما داخل یه فایل اینو کپی پیست کنین و خروجی رو ببینی تا متوجه عملکرد این تگ‌ها بشین.

```html
<html>
	<head>
		<title>ساختار جدولی</title>
	</head>
	<body>
		<table dir="rtl" border="3px" align="center" cellpadding="10px" cellspacing="5px">
			<tr>
				<td>سطر اول، ستون اول</td>
				<td>سطر اول،‌ ستون دوم</td>
				<td>سطر اول،‌ ستون سوم</td>
			</tr>
			<tr>
				<td>سطر دوم، ستون اول</td>
				<td>سطر دوم، ستون دوم</td>
				<td>سطر دوم، ستون سوم</td>
			</tr>
			<tr>
				<td>سطر سوم، ستون اول</td>
				<td>سطر سوم، ستون دوم</td>
				<td>سطر سوم، ستون سوم</td>
			</tr>
		</table>
	</body>
</html>
```

اگه به عنصر `table` دقت کنین میبینین چندتا ویژگی داره که ممکنه دقیقا ندونین چیکار میکنن، الان بهتون میگم:

ویژگی `dir` رو که میدونیم برای جهت محتوا استفاده میشه،  
ویژگی `border` اندازه مرز خارجی جدول رو تعیین میکنه،  
ویژگی `align` هم که برای ترازبندی محتویات داخل صفحه‌ست،  
ویژگی `cellpadding` اندازه داخل سلول های جدول رو مشخص میکنه و  
ویژگی `cellspacing` هم فاصله بین سلول ها با خودشون رو مشخص میکنه.

خروجی‌ش این شکلی میشه:

<table dir="rtl" border="3px" align="center" cellpadding="10px" cellspacing="5px">
	<tr>
		<td>سطر اول، ستون اول</td>
		<td>سطر اول،‌ ستون دوم</td>
		<td>سطر اول،‌ ستون سوم</td>
	</tr>
	<tr>
		<td>سطر دوم، ستون اول</td>
		<td>سطر دوم، ستون دوم</td>
		<td>سطر دوم، ستون سوم</td>
	</tr>
	<tr>
		<td>سطر سوم، ستون اول</td>
		<td>سطر سوم، ستون دوم</td>
		<td>سطر سوم، ستون سوم</td>
	</tr>
</table>

با یکم تمرین و استفاده از کارگاه ۱ صفحه ۱۰۹ کتاب، میتونین خیلی راحت جدول وب درست کنین

## استفاده از چندرسانه‌ای در وب (Multimedia) (از صفحه ۱۱۴ تا ۱۱۹)

تو صفحه های وب میشه از تصویر، صدا و ویدیو استفاده کرد.

**برای اضافه کردن عکس در صفحه** از تگ `<img>` که تگ غیرکانتینر هست استفاده میکنیم. مثلا:

```html
<img src="/path/to/3x4.jpg" alt="توضیحات عکس" width="480px" height="640px">
```

صفت `alt` برای متن جایگزین عکس است. این ویژگی باعث میشه موتور های جست‌جو بهتر بتونن بفهمن عکس درمورد چیه (کاربرد در SEO داره).

صفت `src` درواقعا مسیر فایل تصویری هست که ما میخوایم داخل صفحه وب‌مون نشون بدیم.

صفت های `width` (_عرض_) و `height` (_ارتفاع_) برای مشخص کردن ارتفاع و عرض عکس هستش.

**برای اضافه کردن ویدیو** در صفحه از کد زیر اضافه میکنیم:

```html
<video controls="true" width="480px" height="640px">
	<source src="/path/to/video.mp4" type="video/mp4">
	متن موردنظر برای نمایش درصورت پشتیبانی نکردن مرورگر از ویدیو
</video>
```

تگ `<source>` که داخل تگ `<video></video>` هست درواقع فایل و نوع  ویدیوی منبع رو مشخص میکنه که تگ `<video></video>` اون روز نمایش میده.  

ویژگی `controls` تگ `<video></video>` به مرورگر میگه که به کاربر کنترل‌های ویدیو (مثل عقب جلو بردن ویدیو) رو نشون بده.

برای **اضافه کردن فایل صوتی** به صفحه وب‌مون از تگ `<audio></audio>` استفاده میکنیم:

```html
<audio controls="true">
	<source src="/path/to/audio.mp3" type="audio/mpeg">
		متن موردنظر برای نمایش درصورت پشتیبانی نکردن مرورگر از فایل صوتی
</audio>
```

> **نکته:**  
> در قسمت `src` میتونیم از آدرس نسبی (آدرس نسبت به فایل HTML ای که داریم مشاهده‌ش میکنیم) استفاده کنیم.  
> عبارت `/.` به معنای ریشه وبسایت هستش.

## اضافه کردن لینک به صفحه وب (از صفحه ۱۱۹ تا ۱۲۱)

برای اضافه کردن لینک (یا هایپرلینک) از تگ کانتینر `<a></a>` استفاده میکنیم. این تگ یه ویزگی مهم `href` داره که مشخص میکنه اگر این لینک کلیک بشه کاربر به چه صفحه‌ای برده بشه.

```html
<a href="https://al1almasi.ir" target="_blank">لینک‌های من</a>
```

ویزگی `target` مشخص میکنه کاربر بعد از اینکه روی لینک کلیک کرد، کجا لینک رو ببینه. مثلا اینجا من `target` رو برابر `blank_` گذاشتم، یعنی وقتی کاربر کلیک کرد داخل مرورگرش تو یه Tab دیگه بره صفحه رو ببینه.  
میتونین درباره این ویژگی سرچ کنین و ببینین بقیه مقادیرش چیکار میکنه.

## ساخت فرم (از صفحه ۱۲۲ تا ۱۲۹)

برای ساخت فرم در صفحات وب ما از تگ کانتینر `<form></form>` استفاده میکنیم. این تگ که خودش هم ویژگی های خاصی داره، هم باید داخلش یه سری دیگه تگ قرار بگیره، یکی از موردنیاز ترین تگ ها برای ساخت یک فرم وب هستش.

فرم برای چی استفاده میشه؟ برای ارسال و دریافت اطلاعات از دیتابیس‌مون. مثلا برای ثبت نام یه کاربر جدید یا برای لاگین کردن کاربر.

از مهم ترین ویژگی های تگ `<form>` ویژگی `method` هستش که تعیین میکنه داده های فرم به چه صورتی برای یرور ارسال بشه.  
این ویژگی مقادیر زیادی برای تنظیم کردن داره، ولی فقط دو مقدار `get` و `post` اش داخل کتاب اومده.

مقدار `get` اطلاعات فرم رو از طریق `url` برای سرور میفرسته و کاربر و هرکس دیگه‌ای میتونه این اطلاعاتو ببینه، ولی مقدار `post` باعث میشه اطلاعات داخل فرم بصورت دودویی برای سرور ارسال بشه و بغیر از کاربر که اطلاعات رو وارد کرده، و سرور که اطلاعات رو باید دریافت کنه، هیچ کس دیگه‌ای امکان دیدن اون اطلاعات رو نداره.  
برای اطلاعات بیشتر میتونین راجع‌به `http post` سرچ کنین.

کار گاه ۵ صفحه ۱۲۲ کتاب یه مثال خیلی خوب برای ایجاد یک فرمه، ولی من اینجا کد های یه صفحه با یه فرم داخلش رو میذارم که بتونین کدش رو هم بیینین.

```html
<html>
	<head>
		<title>Web Form</title>
	</head>
	<body>
		<form method="get" action="action_login.php" name="login">
			<p>نام کاربری</p>
			<input type="text" id="username" name="username" />
			<p>کلمه عبور</p>
			<input type="password" id="password" name="password" />
			<p>&nbsp;</p>
			<input type="submit" value="ورود" />
			<input type="reset" value="پاک" />
		</form>
	</body>
</html>
```

ویژگی `action` تگ `<form></form>` تعیین میکنه که اطلاعات از طریق چه صفحه‌ای برای سرور ارسال بشه.  
مثلا این کد، مشخص شده بعد از اینکه کاربر دکمه ورود رو بزنه، مقادیر وارد شده کاربر برای سرور از طریق صفحه `action_login.php` ارسال بشه که اطلاعات کاربر رو از دیتابیس میگیره و با زبان سمت-سرور PHP اونارو احراز میکنه.

> **نکته:**  
> تگ `<input>` برای ساختن یه نوع ورودی بکار میره.  
> ویژگی `type` این تگ مشخص میکنه چه نوعی از ورودی رو بایلد دریافت کنه.

## آشنایی با Javascript و مدل DOM (از صفحه ۱۳۵ تا ۱۳۹)

رسیدیم به پودمان سوم کتاب که بیشتر درمورد زیبا های Javacript (سمت کاربر) و PHP (سمت سرور) توضیح داده.  
اگه منطق برنامه‌نویسی رو از دروس مربوط به زبان #C یاد گرفته باشید، اینجا هم میتونین به خوبی اونجا کد بزنین (یکم تفاوت ریز داره که جای نگرانی نداره).

### درمورد Javascript

زبان Javascript درواقع یه زبان سمت کاربر اسکریپتی هستش که شیء محور و سطح بالاست. خیلی خیلی خیلی زیاد ازش داخل صفحات وب استفاده میشه و با کمکش میتونین به صفحات وب HTML تون (که با CSS هم خوشگلش کردین) رو بهش کارایی میبخشه و باعث تعاملی شدن صفحات وب میشه.

سوال: چجوری Javascript به اجزای صفجه وب‌مون دسترسی پیدا میکنه؟

### مدل DOM (Document Object Model)

این مدل که توسط مرورگر در زمان لود شدن صفحه ایجاد میشه درواقع یه نمودار/نقشه از کل اجزای صفحه وب‌مون هستش . تو این مدل هر کدوم از عناصر HTML یه شیء محسوب میشه که شما میتونین با Javascript به اونا دسترسی پیدا کنین.

شکل ۱ و ۲ صفحه ۱۳۵ و ۱۳۶ کتاب یه نمونه تصویری از مدل DOM هستش. (توضیحات بیشتر هم داخل همین صفحه‌ها وجود داره)

### اضافه کردن Javascript به صفحه وب

ما باید همونجوری که CSS رو وارد صفحه‌مون کردیم، Javascript رو هم وارد کنیم.  
برای وارد کردن Javascript به صفحه دو روش اصلی وجود داره:

یک: اسکریپت داخلی

با تگ کانتینر `<script></script>` در بخش `head` فایل HTML مون میتونیم Javacript داخلی بنویسیم. مثلا:

```html
<html>
	<head>
		<title>Internal Javascript</title>
		<script type="text/javascript">
			const text = window.confirm("Salam az Javascript");

			if (text) document.querySelector("p.text").textContent = "True";
			else document.querySelector("p.text").textContent = "False";

			// text ? document.querySelector("p.text").textContent = "True" : document.querySelector("p.text").textContent = "False";
		</script>
	</head>
	<body>
		<p class="text">Null</p>
	</body>
</html>
```

دو: فایل اسکریپت خارجی

با یه فایل پسوند `js.` هم میشه Javascript نوشت و اونو بصورت خارجی وارد صفحه کرد.

برای وارد کردن CSS از تگ `<link>` استفاده میکردیم ولی برای وارد کردن Javascript خارجی از همون تگ `<script></script>` با یه ویژگی خاص `src` که محل فایل `js.` مون رو نشون میده استفاده میکنیم. مثلا:

```html
<html>
	<head>
		<title>External Javascript</title>
		<script type="text/javascript" src="./script.js"></script>
	</head>
	<body>
		<p class="text">Null</p>
	</body>
</html>
```

### تعریف متغیر

کتاب گفته برای تعریف متغیر تو JS باید از کلمه کلیدی var استفاده کنید، ولی این کار دیگه خیلی انجام نمیشه تو JS نویسی های جدید، ولی باز مشکلی نداره هرجور بنویسین، مثلا:

```js
var userName = "AliAlmasi";
userName = "AliAlmasi";
```

> **نکته:**  
> یادتون باشه آخر دستورات JS مثل #C سمی‌کالن بذارین.

### نمایش پیام با JS

از متد alert در شیء window (از اشیاء DOM) میتونین برای نمایش پیام روی صفحه استفاده کنین:

```js
window.alert("سلام دنیا!");
```

> **نکته:**  
> برای نمایش پیام در Console باید از متد `()console.log` استفاده کنین.

### نمایش کادر تائیدیه کاربر

با متد confirm زبان JS میتونین از کاربر ورودی boolean (true و false) بگیرین.  
اگه کاربر دکمه OK رو بزنه `true` و اگه Cancel رو بزنه `false` میشه.

```js
window.confirm("آیا از حذف حساب کاربری خود مطمئن هستید؟");
```

خروجی این متد رو میتونین داخل یه متغیر ذخیره و از اون داخل شرط `if` استفاده کنین:

```js
var deleteConfirm = window.confirm("آیا از حذف حساب کاربری خود مطمئن هستید؟");

if (deleteConfirm) {
	window.alert(حساب کاربری شما حذف شد.);
}
```

### تعریف تابع و دستور return در تابع

همونجور که تو درس‌های #C خوندین، تابع یه مجموعه دستوراتی هست که هرموقع فراخوانی بشه اجرا میشه.

برای تعریف تابع در JS بطور کلی سه روش مختلف داریم ولی کتاب فقط یکی از اونارو گفته، اونم با کلمه کلیدی `function` هستش. مثلا:

```js
function Multiply (a, b) {
	var c = a * b;
	window.alert(c);
}

Multiply(12, 9);
```

دستور `return` هم مثل #C یه مقداری رو از داخل تابع به بیرون برمیگردونه. مثلا:

```js
function Multiply (a, b) {
	var c = a * b;
	return c;
}

console.log(Multiply(12, 9));
```

تو مثال بالا، تابع اعداد 12 و 9 رو دریافت میکنه، اونارو ضرب میکنه و خروجیش رو return میکنه برای تابع `console.log` که اونو نمایش بده (خود تابع نتیجه رو نمایش نمیده).

## رویداد ها در صفحات وب (صفحه ۱۳۹ و ۱۴۰)

در برنامه‌های ویندوزی اگه یادتون باشه، با اعمالی که کاربر انجام میداد، مثل کلیک کردن، Enter زدن و غیره، یه سری اتفاق ها میفتاد که ما برنامه‌نویس ها باید از قبل کد هاشو مینوشتیم. به این اتفاق ها میگن رویداد.  
تو دنیای وب هم همینطوریه. ممکنه کاربر بیاد یه دکمه‌ای رو کلیک کنه، مسئولیت من برنامه‌نویس اینه که رویداد ها رو از قبل طراحی کنم که وقتی کاربر دکمه‌ای رو زد چه اتفاقی بیفته.

برای تعیین رویداد ها از همین Javascript استفاده میکنیم. در دنیای وب چندین و چندهزار رویداد وجود داره که شما میتونین از پیش اونارو تعریف کنین، اما کتاب فقط دوتا شونو گفته:  

1. `onChange` = زمانی که مقدار یه فیلد از یه فرم رو تغییر بدین
2. `onClick` = زمانی که روی یه شیء کلیک کنین

رویداد `onChange` تبعا فقط برای تگ های `<input>` و بقیه تگ هایی که یه ورودی‌ای از کاربر میگیرنه (مثل `<textarea>` که داخل کتاب گفته نشده) کارایی داره.

رویداد `onClick` که از اسمش مشخصه، برای موقعی هست که کاربر روی یک عنصری کلیک کنه، دراینصورت این متد انجام میشه.

> **نکته:**  
> از اونجایی که رویدادگرایی در وب از ویژگی های JS هست، بنابراین مقادیر رویداد های وب باید کد JS باشه.

مثال پایین ترکیبی از دوتا رویداد هستش:

```html
<html>
	<head>
		<title>Web Events</title>
		<script type="text/javascript">
			function showUsername() {
				window.alert(
					"داده وارد شده: \n" + document.getElementById("username").value
				);
			}
		</script>
	</head>
	<body>
		<input
			type="password"
			name="username"
			id="username"
			onchange="window.alert('ورودی عوض شد');"
		/>
		<input type="submit" value="نمایش" onclick="showUsername()"
	</body>
</html>
```

کارگاه ۲ صفحه ۱۴۰ کتاب هم برای کارکردن با رویداد `onClick` موجوده.

## دسترسی به عناصر HTML با JS (صفحه ۱۴۰)

متد های مختلف و زیادی برای درسترسی به عناصر HTML هست که کتاب دوتاشون رو فقط گفته:

1. `document.getElementById()` = عناصر رو بر اساس ویژگی `id` شون انتخاب میکنه.
2. `document.getElementByName()` = عناصر رو بر اساس ویژگی name شون انتخاب میکنه.

یه متد `document.querySelector()` هم هست که اون بیشتر استفاده میشه ولی توی کتاب نیست. اگه مطالب کتاب براتون بس نیست، میتونین برین و راجع‌به این هم سرچ کنین.

```html
<html>
	<head>
		<title>getElementById</title>
		<script type="text/javascript">
			var user = "Ali"

			document.getElementById("welcome").textContent = "Welcome, "+user;
		</script>
	</head>
	<body>
		<p id="welcome">
	</body>
</html>
```

## متد `location.replace` (صفحه ۱۴۱)

این متد برای انتقال کاربر با استفاده از JS به یه URL (صفحه) دیگه استفاده میشه. مثلا:

```html
<html>
	<head>
		<title>location.replace</title>
		<script type="text/javascript">
			function replace () {
				location.replace("http://al1almasi.ir");
			}
		</script>
	</head>
	<body>
		<input type='button' value="به صفحه علی الماسی بروید" onClick="replace()">
	</body>
</html>
```

## مفاهیم پایه و شروع PHP (از صفحه ۱۴۳ تا ۱۴۵)

پیشنهاد میشه [این ویدیو](https://www.aparat.com/v/l34q104) رو ببینین.

تو این قسمت کتاب در مورد اینکه سرور دقیقا چیه، چیکار میکنه و برای انجام اون کار، به چه نرم‌افزارهایی نیاز داره، صحبت میکنه.  
بعد از اینا، درمورد Front-end و Back-end هم صحبت کرده.

همچنین درمورد زبون های برنامه‌نویسی تحت وب‌ای که در سمت سرور (Back-end) اجرا میشه (مثل PHP و Perl) صحبت میکنه.

شکل ۹ صفحه ۱۴۳ کتاب هم اینکه چه فرآیندی انجام میشه تا ما بتونیم یه صفحه وب رو ببینیم رو به تصویر کشیده.

بعد، درمورد انواع وب‌سرور ها (سرویس هایی که یک سرور رو به یک وب‌سرور تبدیل میکنن) مثل IIS که برای مایکروسافت هست و تجاری هست، و Apache که رایگان و متن‌بازه.  
همچنین درمورد پورت های این وب‌سرور ها هم یه نکاتی رو گفته که فعلا دونستن یا ندونستنش برای شما فرقی نمیکنه.

بعد از اینها هم کتاب داخل [ویدیو ۱۱۲۰۶](https://www.aparat.com/v/t66008u) نصب WAMP رو توضیح داده که بهتره شما هم انجام بدین چون برای داشتن یه وب‌سرور شیک و جمع‌وجور، اجرا کردن کد های PHP و برای داشتن یه دیتابیس (MySQL) بهش نیاز دارین.

## مقدمه‌ای بر PHP (صفحه ۱۴۵)

برای این قسمت، فقط متن کتاب رو بخونین، چیزی کمتر یا بیشتر گفتن باعث میشه گیج بشین، بنابراین همون متنی که کتاب براتون آماده کرده، بهترین راه‌حله.  
اگه خودتون میدونین که بیشتر از نوشتار کتاب متوجه میشین، میتونین [ویکی‌پدیای PHP](https://en.wikipedia.org/wiki/PHP) رو بخونین.

## شروع کار با PHP (صفحه ۱۴۶)

دستورات زبان PHP در فایل با پسوند `php.` بصورت:

```php
<html>
	<body>
		<?php
			# :دستورات پی‌اچ‌پی در اینجا قرار میگیرند، مثلا
			echo "Hello, World!";
		?>
	</body>
</html>
```

حالا این فایل با پسوند `php.` ذخیره میشه و داخل فولدر www در محل نصب WAMP قرار میگیره تا وب‌سرور بتونه اونو به درخواست کاربر نشون بده.
مسیر پیش‌فرض نصب WAMP به‌این صورته:  
`index.php (file) > page1 (folder) > www (folder) > wamp (folder) > Drive C`

بعد از اینکه کاربر با URL:  
`http://localhost/page1/index.php`  
صفحه رو درخواست کنه،‌وب‌سرور اول دستورات PHP رو اجرا و بعدش نتایج رو نشون میده.

## میزبان محلی یا Local Host (صفحه ۱۴۶)

کلمه `localhost` که ممکنه زیاد به گوش‌تون خورده باشه، اساسا یعنی همین کامپیوتری که دارین باهاش **بصورت فیزیکی** کار میکنین.  
(چرا میگیم بصورت فیزیکی؟ چون شما ممکنه به یه کامپیوتر در... مثلا آلمان با Telnet یا SSH متصل باشی و کار کنی، اونجوری دیگه `localhost` نیستش)

سایت‌هایی که روی اینترنت هستن و شما میبینین، همه روی یه کامپیوتری هستن و وقتی شما آدرس یه سایتی رو وارد میکنین، درواقع دارین به اون کامپیوتر (سرور) ای که اون وب‌سایت رو داره میزبانی میکنه، درخواست میدین که براتون اطلاعات وب‌سایت رو (از جمله فایل HTML اش که بتونین با مرورگرتون ببینیش) بفرسته.

حالا وقتی شما میخوای برنامه‌نویسی PHP انجام بدی، باید یه وب‌سرور روی کامپیوتر خودت نصب کنی.  
تا اینحای کار ما وقتی میخواستیم نتیجه کد های HTML و CSS و JS خودمون رو ببینیم، فایل اونو با یه مرورگر باز میکردیم. الان وقتی میخوایم نتایج کدهای PHP مون رو ببینیم باید آدرس وب‌سروری که نصب کردیمو وارد کنیم. (یعنی همون کامپیوتر خودمون یا **localhost**)

اینجا ما از آدرس `http://localhost` یا با آی‌پی `http://127.0.0.1` استفاده میکنیم تا به وب‌سرورمون دسترسی داشته باشیم.

اگه وب‌سرور WAMP نصب کرده باشبد، وقتی آدرس لوکال‌هاست‌تون رو وارد کنید، محتویات پوشه `www` در مسیر `c:\wamp\www` رو میبینین، یعنی هر فولدری با تعدادی فایل HTML یا PHP که اونجا بذارین رو براتون اجرا و نمایش میکنه (اصطلاحا سرو میکنه - Serve)

## ایجاد صفحه وب پویای ساده با PHP (صفحه ۱۴۷ و ۱۴۸)

تا الان شما با دستور `echo` در زبان PHP آشنا شدین. از همین دستور برای ایجاد عناصر HTML در بین دستورات PHP استفاده میشه، مثلا اینطوری:

```php
<?php
	echo "<h1>Hello from PHP</h1>";
	echo "<p>I am learning PHP</p>";	
?>
```

خروجی این فایل بعد از اینکه از وب‌سرور درخواست کردیم و زمانی که داخل مرورگرمون میبینیمش (با استفاده از گزینه Inspect  یا View page source در مرورگر میتونیم ببینیم) این خواهد بود:

```html
<html>
	<body>
		<h1>Hello from PHP</h1>
		<p>I am learning PHP</p>
	</body>
</html>
```

## متغیر ها و انواع داده‌ها در PHP (صفحه ۱۴۸ و ۱۴۹)

شکل کلی تعریف و مقدار دهی متغیر در PHP به این شکل هست:

```php
$var_name = "var_value"
```

با علامت $ متغیر تعریف میکنیم. دقت کنید که PHP روی کوچیک و بزرگ بودن حروف اسم متغیرها حساسه، یعنی متغیر`a$` با `A$` متفاوته.

چند مثال از متغیر در PHP:

```php
$userName = "Ali Almasi";
$userAge = 20;
$PI = 3.1;
$isUserAdmin = true;
$userData = array(false, 512, "RW");
```

نوع متغیر ها با توجه به مقدار آنها مشخص میشود، یعنی اگه شما لازم نیست مثل زبان #C تعیین کنی نوع داده یه متغیر برنامه‌ت چیه، فقط بهش مقدار موردنظرتو میدی.

اگه مقدار یه متغیر در طول اجرای برنامه عوض شود، نوع متغیرش هم خودکار عوض میشه.

## عملگر ها در PHP (صفحه ۱۵۰)

عملگرهای PHP تقریبا عین هر زبان برنامه‌نویسی دیگه‌ست، بغیر اینکه یه عملگر خیلی پراستفاده خاص در PHP وجود داره.

انواع عملگرهای PHP:

**یک:** محاسباتی (مثل + و − و × و ÷ و...)

**دو:** مقایسه‌ای (مثل == و === و =! و ==! و ...)

**سه:** منطقی (مثل ! و...)

یه عملگر خاص دیگه هم وجود داره که توی PHP خیلی استفاده میشه: عملگر **نقطه (.)**  
این عملگر برای وصل کردن دوتا رشته یا دوتا متغیر تو PHP استفاده میشه. مثلا اینطوری:

```php
<?php
	echo("PHP" . "is" . "Fun");
?>
```

خروجی این کد: `PHPisFun`

تو این کد اگه دقت کنید، بین کلمات خروجی‌مون فاصله وجود نداره، چرا؟ چون تو رشته‌مون باید اسپیس (فاصله) میذاشتیم. عملگر نقطه فاصله‌ای بین رشته هایی که وصل میکنه، نمیذاره.

## نمایش رشته‌ها در PHP (صفحه ۱۵۱)

رشته ها در PHP مثل اکثر زبان های برنامه‌نویسی دیگه، بین تک‌کوتیشن (') و دابل‌کوتیشن (") قرار میگیرن،‌ حالا شاید بپرسی فرقشون چیه؟

بذارین با کد براتون مثال بزنم:

```php
<?php
$str = "is easy";
echo("learning PHP $str");
echo('learning PHP $str');
?>
```

خروجی خط سوم (دستور `echo` اول) میشه: `learning PHP is easy`  
ولی خروجی خط چهارم (دستور `echo` دوم) میشه: `learning PHP $str`

رشته هایی که با دابل‌کوتیشن نوشته شدن خاصیت Placeholder هم دارن، یعنی چی؟ یعنی اگه وسط رشته از متغیر استفاده کنین، **مقدار اون متغیر** (تو این مثال: `is easy`) هم با رشته نمایش داده میشه.

رشته های تک‌کوتیشن، اگه وسط کار اسم متغیر بیاد،‌ براش فرقی نمیکنه، همونو نمایش میده. (همون `str$` رو فقط نمایش میده)

## آرایه ها در PHP (از صفحه ۱۵۱ تا ۱۵۳)

آرایه ها در PHP به دو دسته اندیس‌دار (Indexed) و انجمنی (Association) تقسیم میشن.

> **نکته:**  
> اگه نمیدونین اندیس چیه، اونو مثل یه پلاک برای یه خونه در نظر بگیرین.

بطور کلی در PHP آرایه هارو با دو روش مختلف میتونین تعریف کنین. یکی‌ش با متد `array` در PHP هست و یکی دیگه‌ش هم روش اندیس‌گذاری. جفتشو بهتون میگم.

### آرایه اندیس‌دار (Indexed)

از دروس #C، با دسته اول یا همون **اندیس‌دار** تقریبا آشنا هستین. این آرایه ها همون آرایه هایی هسن که خونه هاشون از صفر شروع میشه. بذارین با کد براتون مثال بزنم:

```php
<?php
$colors[0] = "red";
$colors[1] = "green";
$colors[2] = "blue";

$colors2[] = "red";
$colors2[] = "green";
$colors2[] = "blue";
?>
```

همونطور که میبینین ما الان دو آرایه با روش اندیس‌گذاری تعریف کردیم. در PHP موقعی که داریم آرایه رو تعریف میکنیم با روش اندیس‌گذاری، اگه اندیس خونه مقدار جدید رو نذاریم، خودش از صفر شروع میکنه و یکی یکی با هر مقدار جدیدی که وارد میکنین اضافه میکنه.

با متد `array` هم میتونین آرایه اندیس‌دار تعریف کنین:

```php
$colors3 = array("red", "green", "blue")
```

### آرایه انجمنی (Association)

میتونین برای اندیس های مقداری آرایه‌تون، بجای عدد از یه اسم با معناتر استفاده کنین. اگه با Object ها در JS یا #C کار کرده باشین، میتونم بهتون بگم همونطوری که Object ها در JS بطور `key: value` هستن، آرایه‌های انجمنی هم همونطوری هستن.

یه مثال با کد براتون میزنم. مثلا من میخوام به آرایه داشته باشم که اطلاعات کاربر رو داخلش ذخیره کنم. میتونم از یه آرایه انجمنی استفاده کنم:

```php
$userData["name"] = "Ali Almasi";
$userData["age"] = 20;
$userData["username"] = "@al1almasi";
```

با متد `array` هم میتونم:

```php
$userData = array("name" => "Ali Almasi", "age" => 20, "username" => "@al1almasi");
```

حالا اگه بخوام یکی از مقدار های آرایه‌ام رو بگیرم اینطوری مینویسم:

```php
echo($userData["name"]);
```

و خروجی‌ش میشه `20`

برای اطلاهات بیشتر صفحه ۱۵۳ کتاب رو بخونین.

## متد `count` و `print_r` (صفحه ۱۵۴)

این دوتا متد از پر استفاده ترین متد ها برای آرایه ها هستن.

### متد `count`

متد `count` همونطور که از اسمش معلومه، این متد تعداد عنصر (خونه) های آرایه ورودی رو بهتون برمیگردونه. مثلا:

```php
$classroom = array("ali", "hassan", "hossein", "mohammad", "taghi", "naghi");

echo("تعداد دانش‌آموز های کلاس برابر است با ". count($classroom) . " نفر");
```

و خروجی میشه: `تعداد دانش‌آموز های کلاس برابر است با 6 نفر`

### متد `print_r`

درحالت عادی و بدون استفاده از این متد، برای نمایش تمام عناصر آرایه باید از حلقه `for` استفاده کنید. این متد، بدون نیاز به حلقه، تمام عناصر یه آرایه رو نمایش میده. مثلا:

```php
$ages = array(17,16,19,18,20);

print_r($ages);
```

و خروجی‌ش میشه:  
`Array ( [0] => 17 [1] => 16 [2] => 19 [3] => 18 [4] => 20 )`

برای آرایه‌های انجمنی هم میشه استفاده‌ش کرد. مثلا:

```php
$ages = array("amir"=>20, "hassan"=>18, "hossein"=>16);

print_r($ages);
```

و خروجی‌ش میشه:  
`Array ( [amir] => 20 [hassan] => 18 [hossein] => 16 )`

## ثابت ها (Constants) در PHP (صفحه ۱۵۵)

ثابت ها متغیرهایی هستن که مقدارشون در طول اجرای برنامه عوض نمیشه و امکان تغییر مقدار آنها وجود نداره. مثلا اگر یه ثابت `PI` با مقدار برابر با `3` تعریف کنیم، بعدا نمیتونیم دوباره به متغیر ثابت `PI` مون مقدار بدیم یا مقدارشو عوض کنیم.

ثابت ها با متد `define` تعریف میشن:

```php
define("PI", 3.14);

$radius = 8;
$area = PI * $radius * $radius;

echo("مساحت دایره با شعاع {$radius} برابر {$area} است.");
```

خروجی: `مساحت دایره با شعاع 8 برابر 200.96 است.`

> **نکته:**  
> برای وارد کردن مقدار متغیری در بین یک رشته از {نام_متغیر$} میشه استفاده کرد.

کد بالا مساحت یه دایره با شعاع ۸ رو محاسبه میکنه. دقت کنید که عدد پی رو با ثابت `PI` مون با مقدار `3.14` تعریف کردیم.

## توضیحات (یا کامنت) در PHP (صفحه ۱۵۵)

برای نوشتن توصیحات یا متنی که میخوایم در فایل `php.` مون اجرا نشه، از کامنت استفاده میکنیم.

برای اضافه کردن کامنت از دو نوع کامنت تک‌خطی و چندخطی میتونیم استفاده کنیم.

برای کامنت های تک‌خطی از علامت `//` یا `#` در اول خط موردنظرمون استفاده میکنیم. برای کامنت های چندخطی از علامت `/*` در خط اول کامنت و از علامت `*/` در خط آخر کامنتمون استفاده میکنیم.

مثال کامنت تک‌خطی

```php
$name = "Ali Almasi";
// این یک خط کامنت است
$age = 20;

# این یک خط دیگر کامنت است
echo ($name . " " . $age);
```

مثال کامنت چندخطی

```php
$name = "arsalan";
/*
این
یک
کامنت
چند
خطی
است
*/
$age = 16;

echo($name . " " . $age);
```

## شرط `if` در PHP (صفحه ۱۵۶)

شرط `if` بررسی میکند که اگر شرطی که براش مشخص کردید برابر `true` بود، دستوراتی که نوشتین رو اجرا کنه.

این دستور با دستور `else` هم استفاده میشه. این دستورات داخل قطعه `else` درصورتی اجرا میشوند که نتیجه شرط `if` برابر `false` باشد. مثلا:

```php
$score = 8;

if ($score > 10) {
	$color = "green";
} else {
	$color = "red";
}
```

کد بالا درصورتی که مقدار متغیر `score$` بیشتر از 10 باشه، یه متغیر `color$` تعریف میکنه که مقدارش برابر `"green"` میشه.  
اگر شرط برابر نباشه (که نیست، چون مقدار متغیر `score$` برابر 8 هستش و از 10 کمتره)، متغیر `color$` برابر `"red"` میشه.

## دستور `switch` در PHP (صفحه ۱۵۶)

این دستور درواقع شبیه به `if` هست ولی با این تفاوت که چندین حالت یه عبارت یا متغیر رو بررسی میکنه.

با کد براتون مثال میزنم:

```php
$colors = array("red", "green", "blue");
$index = 1;

switch ($index) {
	case 0:
		echo "<span style='color:{$colors[$index]}'>این رنگ انتخاب شده است.</span>";
		break;
	case 1:
		echo "<span style='color:{$colors[$index]}'>این رنگ انتخاب شده است.</span>";
		break;
	case 2:
		echo "<span style='color:{$colors[$index]}'>این رنگ انتخاب شده است.</span>";
		break;
	default:
		echo "<span style='color:gray'>هیچ رنگی انتخاب نشده است.</span>";
		break;
}
```

با توجه به این که در کد بالا مقدار متغیر `index$` برابر 1 هست، خروجی دستور `switch` دستورات `case 1` خواهد بود.

## حلقه تکرار `for` در PHP (صفحه ۱۵۷)

از دستور `for` برای تعریف یک حلقه از دستورات با تعداد تکرار مشخص استفاده میشه. این حلقه تا زمانی که شرط حلقه برابر با `true` نباشه، اجرا میشه.

یه مثال با کد:

```php
for ($i = 0; $i < 5; $i++){
	echo "<p align='center'>{$i}</p>";
}
```

این حلقه پنج بر تکرار میشه و اعداد از 0 تا 4 رو با عنصر های `p` در وسط صفحه نمایش میده.

## حلقه تکرار با دستور `foreach` در PHP (صفحه ۱۵۸)

این دستور به تمامی خونه های آرایه بدون استفاده از اندیس دسترسی پیدا میکنه و با هربار تکرار، به خونه بعدی در آرایه میره.

با کد براتون مثال میزنم:

```php
$names = array("ali", "hassan", "hossein", "amir");

foreach($names as $each_name) {
	echo "<h2 style='color:red;'>{$each_name}</h2>";
}
```

حلقه بالا به ازای تعداد خونه های آرایه `names$` اجرا میشه و تمام خونه‌های اونو داخل عنصر `h2` در صفحه با رنگ قرمز نمایش میده.

با آرایه های انجمنی هم میشه از `foreach` استفاده کرد:

```php
$names = array("ali", "hassan", "hossein", "amir");

$i = 17;
foreach($names as $each_name) {
	$ages["{$each_name}"] = $i;
	$i++;
}

foreach($ages as $name => $age) {
	echo "<p>سن {$name} برابر {$age} است.</p>";
}
```

کد این قسمت رو به عنوان یه تمرین کوچیک، سعی کنید خودتون مطالعه کنین و بفهمین چیکار میکنه. اگه مشکلی بود میتونین **[از بخش پرسش و پاسخ](http://github.com/AliAlmasi/iranianshop/discussions/new?category=%D9%BE%D8%B1%D8%B3%D8%B4-%D9%88-%D9%BE%D8%A7%D8%B3%D8%AE)** بپرسین.

## حلقه `while` در PHP (صفحه ۱۵۹)

این حلقه تا زمانی که عبارت یا متغیر ورودی آن برابر `true` باشد اجرا خواهد شد.

مثال با کد:

```php
$counter = 1;
$code = "";

while($counter <= 5) {
	$code .= "<input type='text' id='student$counter' name='student$counter'/>  نام و نام خانوادگی دانش آموز شماره $counter <br>";

	$counter++;
}

echo($code);
```

خروجی این کد شکل ۱۵ در صفحه ۱۵۹ خواهد بود.

## شروع پروژه فروشگاه ایرانیان (صفحه ۱۶۲)

از اینجا به بعد، کتاب پروژه فروشگاه ایرانیان (iranianshop) رو شروع کرده و همراه با یاد دادن موضوعات جدید، همون موضوعات جدید رو در پروژه پیاده سازی میکنه.

از اینجا به بعد، مثل کل مطالب این فایل، توضیحات و راهنما های مطالبی که کتاب درس میده رو اینجا مینویسیم. راهنما و توضیحات کد های پروژه در [**این صفحه**](./project_guide.md) قرار داره.

## دستور `include` در PHP (صفحه ۱۶۴)

این دستور برای اضافه کردن کد های یک فایل PHP دیگه به فایل PHP ای هست که این دستور رو داخلش نوشتیم، یعنی چی؟  

مثلا ما برای پروژه مون وقتی میخوام تگ های `head` رو بنویسیم، نمیایم اونارو تک تک داخل همه فایل‌های HTML یا PHP مون بنویسیم، بجاش اونارو فقط وارد یک فایل (با اسم فرضی `head.php`) میکنیم و داخل هر فایل دیگه که بهشون نیاز داشتیم، فقط مینویسیم (به این کار اصطلاحا include کردن هم میگن):

```php
include("head.php")
```

اینطوری خود وب‌سرور میره فایل `head.php` رو میخونه و هرچی کد داخلش هست رو میریزه داخل فایلی که دستور `include` رو داخلش نوشتیم. دیگه نیازی نیست تک تک کد های بخش `head` سایت رو داخل همه صفحه‌های سایت‌مون کپی و پیست کنیم.

شکل ۱۸ صفحه ۱۶۵ نشون میده در پروژه iranianshop کدوم قسمت های کد یک صفحه باید در فایل های جدا برای include کردن در صفحه های دیگه قرار بگیره.

## دریافت اطلاعات از فرم (صفحه ۱۶۷)

در بخش ساخت فرم (از صفحه ۱۲۲ تا ۱۲۹) در فایل 