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

    'accepted'             => 'يجب قبول الحقل :attribute',
    'active_url'           => 'الحقل :attribute لا يُمثّل رابطاً صحيحاً',
    'after'                => 'يجب على الحقل :attribute أن يكون تاريخاً لاحق  للتاريخ :date.',
    'after_or_equal'       => ' قيمة الحقل :attribute يجب أن يحتوي تاريخ مساوي أو لاحق للتاريخ :date . ',
    'alpha'                => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي الحقل :attribute   سوى  على حروف، أرقام ومطّات(-).',
    'alpha_num'            => 'يجب أن لا يحتوي :attribute سوى على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون الحقل :attribute مصفوفة.',
    'before'               => 'يجب على الحقل :attribute أن يكون تاريخًا سابقاً للتاريخ :date.',
    'before_or_equal'      => 'الحقل :attribute يجب أن يحتوي على تاريخ سابق أو مساوي لـ  :date .',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute محصوراً ما بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النص :attribute محصوراً ما بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر محصوراً ما بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => 'الحقل :attribute ليس تاريخاً صحيحاً',
    'date_format'          => 'لا يتوافق الحقل :attribute مع التنسيق  :format.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي الحقل :attribute على :digits أرقام',
    'digits_between'       => 'يجب أن يحتوي الحقل :attribute على رقم ما بين :min و :max ',
    'dimensions'           => 'الحقل :attribute يحوي قياسات صورة غير صحيحة.',
    'distinct'             => 'قمية الحقل  :attribute  مكررة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البنية',
    'exists'               => 'الحقل :attribute غير صحيح',
    'file'                 => 'الحقل :attribute يجب أن يكون ملف.',
    'filled'               => 'الحقل :attribute إجباري',
    'gt'                   => [
        'numeric' => 'الحقل :attribute يجب أن يحتوي على قيمة أكبر من :value . ',
        'file'    => 'حجم الحقل :attribute يجب أن يكون أكبر من :value كيلو بايت.',
        'string'  => ' طول الحقل :attribute يجب أن يكون أكبر من :value أحرف . ',
        'array'   => '  الحقل :attribute يجب أن يحتوي على أكبر من :value عناصر. ',
    ],
    'gte'                  => [
        'numeric' => 'الحقل :attribute يجب أن يحتوي على قيمة أكبر أو يساوي  من :value . ',
        'file'    => 'حجم الحقل :attribute يجب أن يكون أكبر أو يساوي  من :value كيلو بايت.',
        'string'  => ' طول الحقل :attribute يجب أن يكون أكبر أو يساوي من  :value أحرف . ',
        'array'   => '  الحقل :attribute يجب أن يحتوي على أكبر أو يساوي  من :value عناصر. ',
    ],
    'image'                => 'يجب أن يكون الحقل :attribute صورة.',
    'in'                   => 'الحقل :attribute غير صحيح.',
    'in_array'             => 'الحقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون الحقل :attribute عدداً  صحيحاً',
    'ip'                   => 'يجب أن يكون الحقل :attribute عنوان IP ذي صيغة  صحيحة',

    'ipv4'                 => 'الحقل :attribute  يجب أن يحتوي على تنسيق IPv4 صحيح.',
    'ipv6'                 => 'الحقل :attribute  يجب أن يحتوي على تنسيق IPv6 صحيح.',
    'json'                 => 'يجب أن يكون الحقل :attribute نصاً من نوع JSON.',
    'lt'                   => [
        'numeric' => 'الحقل :attribute يجب أن يحتوي على قيمة أقل من :value . ',
        'file'    => 'حجم الحقل :attribute يجب أن يكون أقل من :value كيلو بايت.',
        'string'  => ' طول الحقل :attribute يجب أن يكون أقل من :value أحرف . ',
        'array'   => '  الحقل :attribute يجب أن يحتوي على أقل من :value عناصر. ',
    ],
    'lte'                  => [
        'numeric' => 'الحقل :attribute يجب أن يحتوي على قيمة أقل أو يساوي  من :value . ',
        'file'    => 'حجم الحقل :attribute يجب أن يكون أقل أو يساوي  من :value كيلو بايت.',
        'string'  => ' طول الحقل :attribute يجب أن يكون أقل أو يساوي من  :value أحرف . ',
        'array'   => '  الحقل :attribute يجب أن يحتوي على أقل أو يساوي  من :value عناصر. ',
    ],
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أصغر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروف',
        'array'   => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر.',
    ],
    'mimes'                => 'يجب أن يكون الحقل ملفاً من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute أكبر من :min حروف',
        'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عناصر',
    ],
    'not_in'               => 'الحقل :attribute المحدد غير صحيح.',
    'not_regex'            => 'تنسيق الحقل :attribute غير صحيح.',
    'numeric'              => 'يجب على الحقل :attribute أن يكون رقماً',
    'present'              => 'يجب إدخال قيمة في الحقل :attribute ولا يمكن أن يكون فارغ.',
    'regex'                => 'صيغة الحقل :attribute غير صحيحة.',
    'required'             => 'الحقل :attribute مطلوب.',
    'required_if'          => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all'    => 'الحقل :attribute إذا توفّر :values.',
    'required_without'     => 'الحقل :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string'  => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array'   => 'يجب أن يحتوي الحقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'string'               => 'يجب أن يكون الحقل :attribute نص.',
    'timezone'             => 'يجب أن يكون :attribute نطاقاً  زمنياً صحيحاً',
    'unique'               => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',
    'uuid' => 'الحقل :attribute  يجب أن يحتوي على تنسيق نص UUID  صحيح .',

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
            'rule-name' => 'رسالة-مخصصة',
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
                    'dependencies'     => 'المتعلقات',
                    'display_name'     => 'إسم العرض',
                    'group'            => 'المجموعة',
                    'group_sort'       => 'ترتيب المجموعة',

                    'groups' => [
                        'name' => 'إسم المجموعة',
                    ],

                    'name'   => 'الإسم',
                    'system' => 'نظام؟',
                ],

                'roles' => [
                    'associated_permissions' => 'الصلاحيات المرفقة',
                    'name'                   => 'الإسم',
                    'sort'                   => 'الترتيب',
                ],

                'users' => [
                    'active'                  => 'مفعل',
                    'associated_roles'        => 'الأدوار المرفقة',
                    'confirmed'               => 'مؤكد',
                    'email'                   => 'عنوان البريد الإلكتروني',
                    'name'                    => 'الإسم',
                    'other_permissions'       => 'الصلاحيات الأخرى',
                    'password'                => 'كلمة المرور',
                    'password_confirmation'   => 'تأكيد كلمة المرور',
                    'send_confirmation_email' => 'إرسال رسالة التفعيل',
                ],
            ],
        ],

        'frontend' => [
            'email'                     => 'عنوان البريد الإلكتروني',
            'name'                      => 'الإسم',
            'password'                  => 'كلمة المرور',
            'password_confirmation'     => 'تأكيد كلمة المرور',
            'phone' => 'الهاتف',
            'message' => 'نص الرسالة',
            'old_password'              => 'كلمة المرور القديمة',
            'new_password'              => 'كلمة المرور الجديدة',
            'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
        ],
    ],

];
