<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول قيمة :attribute',
    'active_url' => 'قيمة :attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على قيمة :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'يجب أن لا يحتوي قيمة :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي قيمة :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون قيمة :attribute ًمصفوفة',
    'before' => 'يجب على قيمة :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة قيمة :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => 'قيمة :attribute ليس تاريخًا صحيحًا',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'لا يتوافق قيمة :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون قيمةان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي قيمة :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي قيمة :attribute ما بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'قيمة :attribute لاغٍ',
    'file' => 'The :attribute must be a file.',
    'filled' => 'قيمة :attribute إجباري',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'يجب أن يكون قيمة :attribute صورةً',
    'in' => 'قيمة :attribute لاغٍ',
    'in_array' => 'قيمة :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون قيمة :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون قيمة :attribute عنوان IP ذي بُنية صحيحة',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'يجب أن يكون قيمة :attribute نصآ من نوع JSON.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة قيمة :attribute أصغر من :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي قيمة :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون قيمة ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة قيمة :attribute أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute أكبر من :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي قيمة :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => 'قيمة :attribute مطلوب',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'يجب على قيمة :attribute أن يكون رقمًا',
    'present' => 'The :attribute field must be present.',
    'regex' => 'صيغة قيمة :attribute .غير صحيحة',
    'required' => 'قيمة :attribute مطلوب.',
    'required_if' => 'قيمة :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => 'قيمة :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'قيمة :attribute إذا توفّر :values.',
    'required_with_all' => 'قيمة :attribute إذا توفّر :values.',
    'required_without' => 'قيمة :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'قيمة :attribute إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق قيمة :attribute مع :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array' => 'يجب أن يحتوي قيمة :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'يجب أن يكون قيمة :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'ال:attribute مُستخدمة من قبل',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'الأدوار المرفقة',
                    'dependencies' => 'المتعلقات',
                    'display_name' => 'إسم العرض',
                    'group' => 'المجموعة',
                    'group_sort' => 'ترتيب المجموعة',

                    'groups' => [
                        'name' => 'إسم المجموعة',
                    ],

                    'name' => 'الإسم',
                    'first_name' => 'الاسم الاول',
                    'last_name' => 'الاسم الثاني',
                    'system' => 'نظام؟',
                ],

                'roles' => [
                    'associated_permissions' => 'الصلاحيات المرفقة',
                    'name' => 'الإسم',
                    'sort' => 'الترتيب',
                ],

                'users' => [
                    'active' => 'مفعل',
                    'associated_roles' => 'الأدوار المرفقة',
                    'confirmed' => 'مؤكد',
                    'email' => 'عنوان البريد الإلكتروني',
                    'name' => 'الإسم',
                    // 'last_name' => 'الكنية',
                    'code'=>'الكود',
                    'last_name' => 'الاسم الثاني',
                    'first_name' => 'الاسم',
                    'other_permissions' => 'الصلاحيات الأخرى',
                    'password' => 'كلمة المرور',
                    'password_confirmation' => 'تأكيد كلمة المرور',
                    'send_confirmation_email' => 'إرسال رسالة التفعيل',
                    'timezone' => 'وحدة زمنية',
                    'language' => 'لغة',
                    'phone_number'=>'رقم المحمول',
                    'import'=>'استيراد عملاء جدد'
                ],

                'pages' => [
                    'name' => 'اسم الصفحة',
                    'slug' => 'سبيكة الصفحة',
                    'description' => 'وصف',
                    'cannonical_link' => 'رابط الكنسي',
                    'seo_title' => 'كلمات دلالية',
                    'seo_keywords' => 'ميتا الوصف',
                    'seo_description' => 'وصف كبار المسئولين الاقتصاديين',
                    'status' => 'الحالة',
                ],

                'faqs' => [
                    'question' => 'سؤال',
                    'answer' => 'إجابة',
                    'status' => 'الحالة',
                ],

                'email-templates' => [
                    'title' => 'عنوان قالب البريد الإلكتروني',
                    'slug' => 'سبيكة قالب البريد الإلكتروني',
                    'content' => 'المحتوى',
                    'status' => 'الحالة',
                ],

                'blog-categories' => [
                    'name' => 'اسم التصنيف',
                    'status' => 'الحالة',
                ],

                'blog-tags' => [
                    'name' => 'اسم العلامة',
                    'status' => 'الحالة',
                ],

                'blogs' => [
                    'title' => 'عنوان المدونة',
                    'blog_categories' => 'فئات المدونة',
                    'publish_date_time' => 'تاريخ ووقت النشر',
                    'featured_image' => 'صورة مميزة',
                    'content' => 'المحتوى',
                    'tags' => 'العلامات',
                    'meta_title' => 'عنوان الفوقية',
                    'slug' => 'سبيكة مدونة',
                    'cannonical_link' => 'رابط الكنسي',
                    'meta_keywords' => 'كلمات دلالية',
                    'meta_description' => 'ميتا الوصف',
                    'status' => 'الحالة',
                ],

                'profiles'=>[
                    'code'=>'الرقم الكودي',
                    'date_of_dirth'=>'تاريخ الميلاد',
                    'select-date'=>'اختر التاريخ',
                    'select-gender'=>'اختر النوع',
                    'patient_name'=>'اسم العميل',
                    'age'=>'العمر',
                    'height'=>'الطول (بالسم)',
                    'weight'=>'الوزن (كجم)',
                    'status'=>'الحالة الاجتماعية',
                    'gender'=>'النوع',
                    'address'=>'العنوان',
                    'therapist'=>'الطبيب المعالج',
                    'last_receipt'=>'تاريخ اخر فاتورة',
                    'last_receipt_value'=>'قيمة اخر فاتورة',
                    'type_of_customer'=>'نوع الدفع',
                    'choose_type_of_customer'=>'اختر نوع الدفع',
                    'cash'=>'كاش',
                    'contracts'=>'تعاقدات',
                    'postpaid'=>'آجل',
                    'chronic_diseases'=>'الامراض المزمنة',
                    'phone_number'=>'رقم المحمول',
                    'year'=>'عام',
                    'cm'=>'سم',
                    'kg'=>'كجم',
                    'EG'=>'جنيه',
                    'Male'=>'ذكر',
                    'Female'=>'انثي',
                    'patient_complain'=>'شكوي العميل',
                    'history_of_patient_disorder'=>'تاريخ اضطراب المريض',
                    'past_medical_history'=>'التاريخ الطبي السابق',
                    'family_history'=>'التاريخ الاسري',
                    'diagnoses_case'=>'حالة التشخيص',
                    'use_drug'=>'هل يستخدم اي ادوية',
                    'sport'=>'هل يمارس الرياضة',
                    'cohols'=>'هل يتناول الكحوليات',
                    'smoke'=>'هل يدخن',
                    'caffeine'=>'هل يتناول الكافيين',
                    'other_life_style'=>'اساليب حياتية اخري',
                    'choose'=>'اختر',
                    'yes'=>'نعم',
                    'no'=>'لا',
                    'created_at' => 'أنشئت في',
                    'updated_at'=>'اخر تحديث',
                    'has_profile'=>'هذا العميل لديه ملف طبي',
                    'user_already_exist'=>'هذا العميل مسجل من قبل'
                    // 'payment_type_required'=>'طريقة الدفع مطلوبة',
                ],

                'orders'=>[
                    'patient_name'=>'اسم المريض',
                    'drug_name'=>'اسم الدواء',
                    'dose'=>'الجرعة',
                    'amount'=>'الكمية',
                    'select_dose'=>'اختر الجرعة',
                    'code'=>'الكود'
                ],
            ],
        ],

        'frontend' => [
            'avatar' => 'Avatar Location',
            'email' => 'عنوان البريد الإلكتروني',
            'first_name' => 'الاسم الاول',
            'last_name' => 'الاسم الثاني',
            'name' => 'الاسم الكامل',
            'password' => 'كلمة المرور',
            'password_confirmation' => 'تأكيد كلمة المرور',
            'phone' => 'هاتف',
            'message' => 'رسالة',
            'new_password' => 'كلمة المرور الجديدة',
            'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
            'old_password' => 'كلمة المرور القديمة',
            'timezone' => 'وحدة زمنية',
            'language' => 'لغة',
        ],
    ],
];
