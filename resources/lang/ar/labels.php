<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'الكل',
        'yes' => 'نعم',
        'no' => 'لا',
        'copyright' => 'حقوق النشر',
        'custom' => 'مخصص',
        'actions' => 'إجراءات',
        'active' => 'نشيط',
        'buttons' => [
            'save' => 'حفظ',
            'update' => 'تحديث',
        ],
        'hide' => 'إخفاء',
        'inactive' => 'غير نشط',
        'none' => 'لا شيء',
        'show' => 'إظاهر',
        'toggle_navigation' => 'تبديل شريط التنقل',
        'create_new' => 'خلق جديد إبداع جديد',
        'toolbar_btn_groups' => 'شريط الأدوات مع مجموعات الأزرا',
        'more' => 'أكثر',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'إنشاء دور جديد',
                'edit' => 'تعديل دور',
                'management' => 'إدارة الأدوار',
                'label' => 'الأدوار',
                'all' => 'الأدوار',

                'table' => [
                    'number_of_users' => 'عدد المستخدمين',
                    'permissions' => 'الصلاحيات',
                    'role' => 'الدور',
                    'sort' => 'الترتيب',
                    'total' => 'مجموع الدور|مجموع الأدوار',
                ],
            ],

            'permissions' => [
                'all' => 'جميع الأذونات',
                'active' => 'قائمة الأذونات',
                'create' => 'إنشاء إذن',
                'deactivated' => 'إذن معطل',
                'deleted' => 'إذن محذوف',
                'edit' => 'تحرير الإذن',
                'management' => 'إدارة الإذن',
                'label' => 'أذونات',
                'list' => 'قائمة الأذونات',

                'table' => [
                    'created' => 'تم الإنشاء',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'permission' => 'الإذن',
                    'display_name' => 'اسم العرض',
                    'sort' => 'فرز',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'إجمالي الأذونات|إجمالي الأذونات',
                ],
            ],

            'users' => [
                'active' => 'المستخدمون النشطون',
                'all_permissions' => 'جميع الصلاحيات',
                'change_password' => 'تغيير كلمة المرور',
                'change_password_for' => 'تغيير كلمة المرور للمستخدم :user',
                'create' => 'إنشاء مستخدم جديد',
                'deactivated' => 'المستخدمون المعطلون',
                'deleted' => 'المستخدمون المحذوفون',
                'edit' => 'تعديل المستخدم',
                'management' => 'إدارة المستخدمين',
                'no_permissions' => 'بدون صلاحيات',
                'no_roles' => 'بدون أي أدوار.',
                'permissions' => 'صلاحيات',
                'user_actions' => 'إجراءات المستخدم',

                'table' => [
                    'confirmed' => 'مؤكد',
                    'created' => 'تم الإنشاء',
                    'email' => 'البريد الإلكتروني',
                    'id' => 'م',
                    'code'=>'ك.عميل',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'الإسم',
                    'first_name' => 'الاسم',
                    // 'last_name' => 'الكنية',
                    'phone_number'=>'رقم المحمول',
                    'last_name' => 'الاسم الثاني',
                    'no_deactivated' => 'لا يوجد مستخدمين معطلة',
                    'no_deleted' => 'لا يوجد مستخدمين محذوفين',
                    'other_permissions' => 'أذونات أخرى',
                    'permissions' => 'أذونات',
                    'abilities' => 'قدرات',
                    'roles' => 'الأدوار',
                    'social' => 'اجتماعي',
                    'total' => 'إجمالي المستخدم|إجمالي المستخدمين',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'نظرة عامة',
                        'history' => 'التاريخ',
                    ],

                    'content' => [
                        'overview' => [
                            'id' => 'الرقم الكودي',
                            'avatar' => 'الصورة الرمزية',
                            'confirmed' => 'تم تأكيد',
                            'created_at' => 'أنشئت في',
                            'deleted_at' => 'تم الحذف في',
                            'email' => 'البريد الإلكتروني',
                            'last_login_at' => 'آخر تسجيل دخول في',
                            'last_login_ip' => 'آخر تسجيل دخول',
                            'last_updated' => 'آخر تحديث',
                            'name' => 'الاسم',
                            'code'=>'الكود',
                            'first_name' => 'الاسم',
                            // 'last_name' => 'الكنية',
                            'last_name' => 'الاسم الثاني',
                            'status' => 'الحالة',
                            'timezone' => 'وحدة زمنية',
                            'phone_number'=>'رقم التلفون',
                            'address'=>'العنوان'
                        ],
                    ],
                ],

                'view' => 'عرض المستخدم',
            ],

            'blogs' => [
                'all' => 'جميع المدونات',
                'active' => 'قائمة المدونات',
                'create' => 'انشاء مدونة',
                'deactivated' => 'مدونات معطلة',
                'deleted' => 'مدونة محذوفة',
                'edit' => 'تحرير مدونة',
                'management' => 'إدارة المدونة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'title' => 'عنوان المدونة',
                    'category' => 'فئات المدونة',
                    'published' => 'تاريخ ووقت النشر',
                    'featured_image' => 'صورة مميزة',
                    'content' => 'المحتوى',
                    'tags' => 'العلامات',
                    'meta_title' => 'عنوان الفوقية',
                    'slug' => 'سبيكة',
                    'cannonical_link' => 'رابط الكنسي',
                    'meta_keywords' => 'كلمات دلالية',
                    'meta_description' => 'ميتا الوصف',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع بلوق|إجمالي المدونات',
                ],
            ],

            'blog-category' => [
                'all' => 'جميع فئات المدونة',
                'active' => 'قائمة فئات المدونة',
                'create' => 'إنشاء فئة مدونة',
                'deactivated' => 'فئة المدونة المعطلة',
                'deleted' => 'فئة المدونات المحذوفة',
                'edit' => 'تحرير فئة المدونة',
                'management' => 'فئات المدونة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'اسم التصنيف',
                    'category' => 'فئات المدونة',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع فئات بلوق|مجموع فئات بلوق',
                ],
            ],

            'blog-tag' => [
                'all' => 'جميع علامات المدونة',
                'active' => 'قائمة علامات المدونة',
                'create' => 'إنشاء علامة مدونة',
                'deactivated' => 'علامة مدونة معطلة',
                'deleted' => 'علامة مدونة محذوفة',
                'edit' => 'تحرير علامة المدونة',
                'management' => 'علامات المدونة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'اسم العلامة',
                    'tag' => 'علامة المدونة',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع علامات بلوق|مجموع علامات بلوق',
                ],
            ],

            'pages' => [
                'all' => 'كل الصفحات',
                'active' => 'قائمة الصفحات',
                'create' => 'إنشاء صفحة',
                'deactivated' => 'الصفحة المعطلة',
                'deleted' => 'الصفحة المحذوفة',
                'edit' => 'تعديل الصفحة',
                'management' => 'إدارة الصفحات',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'page_slug' => 'سبيكة الصفحة',
                    'name' => 'اسم الصفحة',
                    'description' => 'وصف',
                    'cannonical_link' => 'رابط الكنسي',
                    'seo_title' => 'عنوان تحسين محركات البحث',
                    'seo_keyword' => 'الكلمة الرئيسية لكبار المسئولين الاقتصاديين',
                    'seo_description' => 'وصف كبار المسئولين الاقتصاديين',
                    'status' => 'الحالة',
                    'createdby' => 'انشأ من قبل',
                    'createdat' => 'أنشئت في',
                    'total' => 'إجمالي الصفحات|إجمالي الصفحات',
                ],
            ],

            'faqs' => [
                'all' => 'جميع الأسئلة الشائعة',
                'active' => 'قائمة الأسئلة المتكررة',
                'create' => 'إنشاء الأسئلة',
                'deactivated' => 'الأسئلة المتداولة',
                'deleted' => 'الأسئلة الشائعة المحذوفة',
                'edit' => 'تحرير الأسئلة المتكررة',
                'management' => 'إدارة الأسئلة المتداولة',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'question' => 'سؤال',
                    'answer' => 'إجابة',
                    'status' => 'الحالة',
                    'createdat' => 'أنشئت في',
                    'total' => 'مجموع الأسئلة|مجموع الأسئلة',
                ],
            ],

            'email-templates' => [
                'all' => 'جميع قوالب البريد الإلكتروني',
                'active' => 'قائمة قوالب البريد الإلكتروني',
                'create' => 'إنشاء قالب البريد الإلكتروني',
                'deactivated' => 'نموذج البريد الإلكتروني المعطل',
                'deleted' => 'قالب البريد الإلكتروني المحذوف',
                'edit' => 'تحرير قالب البريد الإلكتروني',
                'management' => 'إدارة قالب البريد الإلكتروني',

                'table' => [
                    'created' => 'خلقت',
                    'id' => 'هوية شخصية',
                    'last_updated' => 'آخر تحديث',
                    'slug' => 'سبيكة',
                    'title' => 'عنوان قالب البريد الإلكتروني',
                    'content' => 'المحتوى',
                    'status' => 'الحالة',
                    'createdat' => 'أنشئت في',
                    'createdby' => 'انشأ من قبل',
                    'total' => 'إجمالي قوالب البريد الإلكتروني|إجمالي قوالب البريد الإلكتروني',
                ],
            ],

            'profiles'=>[
                'management'=>'ادارة الملفات الطبية',
                'active'=>'النشطة',
                'all'=>'كل الملفات',
                'view'=>'عرض الملف',
                'create-profile'=>'انشاء ملف',
                'edit-profile'=>'تعديل ملف',

                'table' => [
                    'id'=>'م',
                    'code'=>'ك.عميل',
                    'patient_name'=>'اسم العميل',
                    'phoneNumber'=>'رقم المحمول',
                    'therapist'=>'الطبيب المعالج',
                    'avatar' => 'الصورة الشخصية',
                    'created_at' => 'أنشئت في',
                    'edit_information' => 'تعديل البيانات',
                    'email' => 'البريد الإلكتروني',
                    'last_updated' => 'آخر تحديث',
                    'gender'=>'النوع',
                    'date_of_birth'=>'تاريخ الميلاد',
                    'name' => 'الإسم',
                    'first_name' => 'الاسم',
                    // 'last_name' => 'الكنية',
                    'last_name' => 'الاسم الثاني',
                    'select-status'=>'اختر الحالة',
                    'material_status'=>'الحالة الاجتماعية',
                    'Single' =>'اعزب',
                    'Married'=>'متزوج',
                    'Male'=>'ذكر',
                    'Female'=>'انثي',
                    'yes'=>'نعم',
                    'no'=>'لا',
                    'created_by'=>'انشا بواسطة',
                    'update_information' => 'تحديث البيانات',
                ],
            ],

            'calls'=>[
                'management'=>'ادارة سجل المكالمات',
                'active'=>'النشطة',
                'all'=>'كل المكالمات',
                'view'=>'عرض المكالمة',
                'create-profile'=>'انشاء مكالمة',
                'edit-profile'=>'تعديل مكالمة',

                'table'=>[
                    'id'=>'م',
                    'name'=>'الاسم',
                    'phone'=>'رقم المحمول',
                    'duration'=>'مدة المكالمة',
                    'dateTime'=>'الوقت والتاريخ',
                    'created_at'=>'انشا في'
                ]
            ],

            'orders'=>[
                'management'=>'ادارة الطلبات',
                'active'=>'النشطة',
                'all'=>'كل الطلبات',
                'create-order'=>'اضافة طلب جديد',
                'one_tuple_per_day'=>'جرعة/يوم',
                'two_tuple_per_day'=>'جرعتين/يوم',
                'three_tuple_per_day'=>'ثلاث جرعات/يوم',

                'table' => [
                    'id'=>'الرقم الكودي',
                    'patient_name'=>'اسم المريض',
                    'drug_name'=>'اسم الدواء',
                    'amount'=>'الكمية',
                    'dose'=>'الجرعة',
                    'createdat' => 'انشا في',
                ],
            ],
            'ProjectName'=>[
                'name'=>'MedexTech'
            ]
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'تسجيل الدخول',
            'login_button' => 'تسجيل الدخول',
            'login_with' => 'تسجيل الدخول بواسطة :social_media',
            'register_box_title' => 'تسجيل',
            'register_button' => 'تسجيل',
            'remember_me' => 'تذكرني',
        ],

        'contact' => [
            'box_title' => 'اتصل بنا',
            'button' => 'إرسال المعلومات',
        ],

        'passwords' => [
            'expired_password_box_title' => 'انتهت صلاحية كلمة المرور الخاصة بك.',
            'forgot_password' => 'نسيت كلمة مرورك؟',
            'reset_password_box_title' => 'إعادة تعيين كلمة المرور',
            'reset_password_button' => 'إعادة تعيين كلمة المرور',
            'update_password_button' => 'تطوير كلمة السر',
            'send_password_reset_link_button' => 'إرسال رابط إعادة تعيين كلمة المرور',
        ],

        'user' => [
            'passwords' => [
                'change' => 'تغيير كلمة المرور',
            ],

            'profile' => [

                'table' => [

                    'avatar' => 'الصورة الشخصية',
                    'created_at' => 'أنشئت في',
                    'edit_information' => 'تعديل البيانات',
                    'email' => 'البريد الإلكتروني',
                    'last_updated' => 'آخر تحديث',
                    'name' => 'الإسم',
                    'first_name' => 'الاسم',
                    // 'last_name' => 'الكنية',
                    'last_name' => 'الاسم الثاني',
                    'select-status'=>'اختر الحالة',
                    'Single' =>'اعزب',
                    'Married'=>'متزوج',
                    'update_information' => 'تحديث البيانات',

                ],
            ],
        ],
    ],
];
