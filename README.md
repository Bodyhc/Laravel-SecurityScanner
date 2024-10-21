# وصــــف المشـروع
هذا المشروع يهدف إلى تعزيز أمان تطبيقات Laravel من خلال تطوير Middleware يقوم بفحص المدخلات للكشف عن هجمات SQL Injection وXSS وCSRF. باستخدام هذا المكون، يمكنك ضمان حماية بيانات المستخدمين وتحسين أمان التطبيق بشكل عام.

# المميــزات الرئيسـية
فحص SQL Injection: يكتشف ويحذر من أي مدخلات تشير إلى محاولات هجوم SQL.
فحص XSS: يحدد أي مدخلات تحتوي على تاغات HTML قد تُستخدم في هجمات XSS.
تحقق CSRF: يتأكد من وجود رمز CSRF في الطلبات POST لحماية التطبيق من هجمات CSRF.
متطلبات التثبيت
# قبل تثبيت هذا المشروع، يجب أن يكون لديك Laravel مثبتًا على نظامك. يمكنك اتباع الخطوات أدناه لتثبيت Laravel:
1- تأكد من تثبيت Composer على جهازك.
2- قم بتثبيت Laravel باستخدام الأمر التالي:

composer create-project laravel/laravel your-project-name
# كيفية التثبيت 

1- قم بتحميل المشروع

استخدم الأمر git clone لنسخ المشروع إلى جهازك:
https://github.com/Bodyhc/Laravel-SecurityScanner.git

2- نسخ الملفات:

انسخ ملف SecurityScanner.php وملف إعدادات التوجيه إلى مجلد المشروع الخاص بك:

ملف ال SecurityScanner.php الي مجلد ال Middleware

app/Http/Middleware/SecurityScanner.php

وملف ال web الي مجلد routes

وتأكد انك تقوم بإستخدام 

use App\Http\Middleware\SecurityScanner; 

داخل ملف ال web.php

routes/web.php

# كيفية الاستخدام
تشغيل السيرفر: بعد إضافة الملفات، يمكنك تشغيل السيرفر باستخدام:

php artisan serve

# اختبار التطبيق:

افتح المتصفح واذهب إلى http://localhost:8000 واختبر الوظائف المختلفة.

مثال بسيط  للتأكد من عمل الكود يمكن كتابة الكود التالي داخل عنوان ال URL

http://localhost:8000/?query=<script>alert('XSS')</script>

الخطأ الذي سيظهر هنا هو

403 Potential XSS attack detected in field: query



http://localhost:8000/?query=select * from users

والخطأ الذي سيظهر هنا هو

403 Potential SQL Injection detected in field: query









