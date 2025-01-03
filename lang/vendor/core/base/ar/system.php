<?php

return [
    'no_select' => 'الرجاء تحديد سجل واحد على الأقل لاتخاذ هذا الإجراء!',
    'cannot_find_user' => 'غير قادر على العثور على المستخدم المحدد',
    'supper_revoked' => 'تم إبطال وصول المستخدم الفائق',
    'cannot_revoke_yourself' => 'لا يمكن إلغاء إذن وصول المستخدم الإضافي بنفسك!',
    'cant_remove_supper' => 'ليس لديك إذن لإزالة هذا المستخدم المتميز',
    'cant_find_user_with_email' => 'غير قادر على العثور على مستخدم بعنوان البريد الإلكتروني المحدد',
    'supper_granted' => 'تم منح وصول المستخدم الفائق',
    'delete_log_success' => 'حذف ملف السجل بنجاح!',
    'get_member_success' => 'تم استرداد قائمة الأعضاء بنجاح',
    'error_occur' => 'وقعت الأخطاء التالية',
    'user_management' => 'إدارةالمستخدم',
    'user_management_description' => 'ادارة المستخدمين.',
    'role_and_permission' => 'الأدوار والأذونات',
    'role_and_permission_description' => 'إدارة الأدوار المتاحة.',
    'user' => [
        'list_super' => 'قائمة المستخدمين المتميزين',
        'email' => 'بريد إلكتروني',
        'last_login' => 'آخر تسجيل دخول',
        'username' => 'اسم المستخدم',
        'add_user' => 'إضافة مستخدم متميز',
        'cancel' => 'يلغي',
        'create' => 'إنشاء',
    ],
    'options' => [
        'features' => 'ميزة التحكم في الوصول',
        'feature_description' => 'إدارة المتاحة.',
        'manage_super' => 'إدارة المستخدم الفائقة',
        'manage_super_description' => 'إضافة/إزالة المستخدمين المميزين.',
        'info' => 'معلومات النظام',
        'info_description' => 'جميع المعلومات حول تكوين النظام الحالي.',
    ],
    'info' => [
        'title' => 'معلومات النظام',
        'cache' => 'مخبأ',
        'locale' => 'لغة نشطة',
        'environment' => 'بيئة',
        'description' => 'جميع المعلومات حول تكوين النظام الحالي.',
    ],
    'disabled_in_demo_mode' => 'لا يمكنك القيام بذلك في الوضع التجريبي!',
    'report_description' => 'يرجى مشاركة هذه المعلومات لاستكشاف الأخطاء وإصلاحها',
    'get_system_report' => 'الحصول على تقرير النظام',
    'system_environment' => 'بيئة النظام',
    'framework_version' => 'نسخة الإطار',
    'timezone' => 'وحدة زمنية',
    'debug_mode' => 'وضع التصحيح',
    'debug_mode_off' => 'وضع التصحيح معطل',
    'storage_dir_writable' => 'دير التخزين قابل للكتابة',
    'cache_dir_writable' => 'دير ذاكرة التخزين المؤقت للكتابة',
    'app_size' => 'حجم التطبيق',
    'server_environment' => 'بيئة الخادم',
    'php_version' => 'نسخة PHP',
    'php_version_error' => 'PHP must be >= :version',
    'server_software' => 'برامج الخادم',
    'server_os' => 'نظام تشغيل الخادم',
    'database' => 'قاعدة البيانات',
    'ssl_installed' => 'تم تثبيت SSL',
    'cache_driver' => 'سائق ذاكرة التخزين المؤقت',
    'session_driver' => 'سائق الجلسة',
    'queue_connection' => 'اتصال قائمة الانتظار',
    'mbstring_ext' => 'مبسترينغ تحويلة',
    'openssl_ext' => 'تحويلة OpenSSL',
    'pdo_ext' => 'تحويلة شركة تنمية نفط عمان',
    'curl_ext' => 'الضفيرة تحويلة',
    'exif_ext' => 'تحويلة Exif',
    'file_info_ext' => 'معلومات الملف تحويلة',
    'tokenizer_ext' => 'تحويلة الرمز المميز',
    'extra_stats' => 'إحصائيات اضافية',
    'installed_packages' => 'الحزم المثبتة وأرقام إصداراتها',
    'extra_information' => 'معلومات اضافية',
    'copy_report' => 'نسخ التقرير',
    'package_name' => 'اسم الحزمة',
    'dependency_name' => 'اسم التبعية',
    'server_ip' => 'Server IP',
    'version' => 'إصدار',
    'cms_version' => 'نسخة نظام إدارة المحتوى',
    'imagick_or_gd_ext' => 'Imagick/GD تحويلة',
    'updater' => 'محدث النظام',
    'zip' => 'الرمز البريدي تحويلة',
    'iconv' => 'تحويلة Iconv',
    'memory_limit' => 'حد الذاكرة',
    'max_execution_time' => 'الحد الأقصى لوقت (فترات) التنفيذ',
    'allow_url_fopen_enabled' => 'تم تمكينallow_url_fopen',
    'cleanup' => [
        'title' => 'نظام التنظيف',
        'description' => 'تنظيف البيانات غير المستخدمة في قاعدة البيانات',
        'table' => [
            'name' => 'اسم الطاولة',
            'count' => 'السجلات',
        ],
        'backup_alert' => 'يرجى الاحتفاظ بنسخة احتياطية من قاعدة البيانات وملفات البرامج النصية قبل التنظيف، حيث سيتم مسح بياناتك في قاعدة البيانات.',
        'messenger_choose_without_table' => 'الرجاء اختيار تجاهل الجداول التي لا تريد تنظيفها',
        'messenger_confirm_cleanup' => 'هل أنت متأكد أنك تريد إجراء تنظيف قاعدة البيانات، وسوف يقوم بمسح بياناتك في قاعدة البيانات؟',
        'submit_button' => 'تنظيف',
        'success_message' => 'تم تنظيف البيانات بنجاح',
        'not_enabled_yet' => 'لم يتم تمكين هذه الميزة بعد. <br />يرجى الإضافة إلى .env: <code>CMS_ENABLED_CLEANUP_DATABASE=true</code> لتمكين هذه الميزة!',
    ],
    'cache_too_large_alert' => 'مجلد ذاكرة التخزين المؤقت لديك كبير جدًا ~:size. يُرجى الانتقال إلى إدارة النظام الأساسي -> إدارة ذاكرة التخزين المؤقت ومسحه لتقليل مساحة القرص.',
];
