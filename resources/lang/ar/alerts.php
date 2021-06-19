<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'created' => '.لقد تم إضافة الدور الجديد بنجاح',
                'updated' => 'تم تعديل الدور بنجاح.',
                'deleted' => 'لقد تم مسح الدور بنجاح.',
            ],

            'permissions' => [
                'created' => 'تم إنشاء الإذن بنجاح.',
                'updated' => 'تم تحديث الإذن بنجاح.',
                'deleted' => 'تم حذف الإذن بنجاح.',
            ],

            'users' => [
                'created' => 'لقد تم إنشاء المستخدم الجديد بنجاح.',
                'updated' => 'لقد تم تعديل المستخدم بنجاح.',
                'deleted' => 'لقد تم إزالة المستخدم بنجاح.',
                'deleted_permanently' => 'لقد تم حذف المستخدم نهائيا بنجاح.',
                'restored' => 'لقد تمت استعادة المستخدم بنجاح.',
                'cant_resend_confirmation' => 'تم تعيين التطبيق حاليًا على الموافقة يدويًا على المستخدمين.',
                'confirmation_email' => 'لقد تم إرسال رسالة تأكيد جديدة إلى عنوان البريد الألكتروني الموجود في الملف الشخصي.',
                'confirmed' => 'تم تأكيد المستخدم بنجاح.',
                'session_cleared' => 'تم محو جلسة المستخدم بنجاح.',
                'social_deleted' => 'تمت إزالة الحساب الاجتماعي بنجاح.',
                'unconfirmed' => 'تم تأكيد المستخدم بنجاح.',
                'updated_password' => 'لقد تم تعديل كلمة مرور المستخدم بنجاح.',
            ],
        ],

        'blogs' => [
            'created' => 'تم إنشاء المدونة بنجاح.',
            'updated' => 'تم تحديث المدونة بنجاح.',
            'deleted' => 'تم حذف المدونة بنجاح.',
        ],

        'blog-category' => [
            'created' => 'تم إنشاء فئة المدونة بنجاح.',
            'updated' => 'تم تحديث فئة المدونة بنجاح.',
            'deleted' => 'تم حذف فئة المدونة بنجاح.',
        ],

        'blog-tags' => [
            'created' => 'تم إنشاء علامة المدونة بنجاح.',
            'updated' => 'تم تحديث علامة المدونة بنجاح.',
            'deleted' => 'تم حذف علامة المدونة بنجاح.',
        ],

        'pages' => [
            'created' => 'تم إنشاء الصفحة بنجاح.',
            'updated' => 'تم تحديث الصفحة بنجاح.',
            'deleted' => 'تم حذف الصفحة بنجاح.',
        ],

        'faqs' => [
            'created' => 'تم إنشاء التعليمات بنجاح.',
            'updated' => 'تم تحديث التعليمات بنجاح.',
            'deleted' => 'تم حذف التعليمات بنجاح.',
        ],

        'email-templates' => [
            'created' => 'تم إنشاء قالب البريد الإلكتروني بنجاح.',
            'updated' => 'تم تحديث قالب البريد الإلكتروني بنجاح.',
            'deleted' => 'تم حذف قالب البريد الإلكتروني بنجاح.',
        ],

        'profiles' => [
            'created' => 'تم إنشاء الملف بنجاح',
            'updated' => 'تم تحديث الملف بنجاح',
            'deleted' => 'تم حذف الملف بنجاح.',
        ]
    ],

    'frontend' => [
        'contact' => [
            'sent' => 'تم إرسال معلوماتك بنجاح. سنرد على البريد الإلكتروني المقدم في أقرب وقت ممكن.',
        ],
    ],
];
