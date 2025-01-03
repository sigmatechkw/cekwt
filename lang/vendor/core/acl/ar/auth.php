<?php

return [
    'login' => [
        'username' => 'البريد الإلكتروني/اسم المستخدم',
        'email' => 'بريد إلكتروني',
        'password' => 'كلمة المرور',
        'title' => 'تسجيل دخول المستخدم',
        'remember' => 'تذكرنى؟',
        'login' => 'تسجيل الدخول',
        'placeholder' => [
            'username' => 'الرجاء إدخال اسم المستخدم الخاص بك',
            'email' => 'الرجاء إدخال بريدك الإلكتروني',
            'password' => 'ادخل رقمك السري',
        ],
        'success' => 'تسجيل الدخول بنجاح!',
        'fail' => 'اسم المستخدم أو كلمة المرور خاطئة.',
        'not_active' => 'لم يتم تفعيل حسابك بعد!',
        'banned' => 'هذا الحساب محظور.',
        'logout_success' => 'تسجيل الخروج بنجاح!',
        'dont_have_account' => 'ليس لديك حساب على هذا النظام، يرجى الاتصال بالمسؤول لمزيد من المعلومات!',
    ],
    'forgot_password' => [
        'title' => 'هل نسيت كلمة السر',
        'message' => '<p>هل نسيت كلمة المرور الخاصة بك؟</p><p>الرجاء إدخال حساب بريدك الإلكتروني. سيقوم النظام بإرسال بريد إلكتروني يحتوي على رابط نشط لإعادة تعيين كلمة المرور الخاصة بك.</p>',
        'submit' => 'إرسال',
    ],
    'reset' => [
        'new_password' => 'كلمة المرور الجديدة',
        'password_confirmation' => 'تأكيد كلمة المرور الجديدة',
        'email' => 'بريد إلكتروني',
        'title' => 'اعد ضبط كلمه السر',
        'update' => 'تحديث',
        'wrong_token' => 'هذا الرابط غير صالح أو منتهي الصلاحية. يرجى محاولة استخدام نموذج إعادة التعيين مرة أخرى.',
        'user_not_found' => 'اسم المستخدم هذا غير موجود.',
        'success' => 'إعادة تعيين كلمة المرور بنجاح!',
        'fail' => 'الرمز غير صالح، لقد انتهت صلاحية رابط إعادة تعيين كلمة المرور!',
        'reset' => [
            'title' => 'إعادة تعيين كلمة المرور للبريد الإلكتروني',
        ],
        'send' => [
            'success' => 'تم إرسال بريد إلكتروني إلى حساب البريد الإلكتروني الخاص بك. يرجى التحقق من هذا الإجراء وإكماله.',
            'fail' => 'لا يمكن إرسال البريد الإلكتروني في هذا الوقت. الرجاء معاودة المحاولة في وقت لاحق.',
        ],
        'new-password' => 'كلمة المرور الجديدة',
        'placeholder' => [
            'new_password' => 'أدخل كلمة المرور الجديدة',
            'new_password_confirmation' => 'قم بتأكيد كلمة المرور الجديدة',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'إعادة تعيين كلمة المرور للبريد الإلكتروني',
        ],
    ],
    'password_confirmation' => 'تأكيد كلمة المرور',
    'failed' => 'فشل',
    'throttle' => 'خنق',
    'not_member' => 'لست عضوا حتى الآن؟',
    'register_now' => 'سجل الان',
    'lost_your_password' => 'فقدت كلمة المرور الخاصة بك؟',
    'login_title' => 'مسؤل',
    'login_via_social' => 'تسجيل الدخول مع الشبكات الاجتماعية',
    'back_to_login' => 'العودة إلى صفحة تسجيل الدخول',
    'sign_in_below' => 'تسجيل الدخول أدناه',
    'languages' => 'اللغات',
    'reset_password' => 'إعادة تعيين كلمة المرور',
    'settings' => [
        'email' => [
            'title' => 'الرباط الصليبي الأمامي',
            'description' => 'تكوين البريد الإلكتروني ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'إعادة تعيين كلمة المرور',
                    'description' => 'إرسال بريد إلكتروني إلى المستخدم عند طلب إعادة تعيين كلمة المرور',
                    'subject' => 'إعادة تعيين كلمة المرور',
                    'reset_link' => 'رابط إعادة تعيين كلمة المرور',
                ],
            ],
        ],
    ],
];
