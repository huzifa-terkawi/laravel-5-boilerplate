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
        'all'     => 'الكل',
        'yes'     => 'نعم',
        'no'      => 'لا',
        'custom'  => 'مخصص',
        'actions' => 'إجراءات',
        'active'  => 'مفعل',
        'buttons' => [
            'save'   => 'حفظ',
            'update' => 'تحديث',
        ],
        'hide'              => 'إخفاء',
        'inactive'          => 'إلغاء التفعيل',
        'none'              => 'لا شيء',
        'show'              => 'إظهار',
        'toggle_navigation' => 'تبديل شريط التنقل',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'إنشاء دور جديد',
                'edit'       => 'تعديل دور',
                'management' => 'إدارة الأدوار',

                'table' => [
                    'number_of_users' => 'عدد المستخدمين',
                    'permissions'     => 'الصلاحيات',
                    'role'            => 'الدور',
                    'sort'            => 'الترتيب',
                    'total'           => 'مجموع الدور|مجموع الأدوار',
                ],
            ],

            'users' => [
                'active'              => 'المستخدمون النشطون',
                'all_permissions'     => 'جميع الصلاحيات',
                'change_password'     => 'تغيير كلمة المرور',
                'change_password_for' => 'تغيير كلمة المرور للمستخدم :user',
                'create'              => 'إنشاء مستخدم جديد',
                'deactivated'         => 'المستخدمون المعطلون',
                'deleted'             => 'المستخدمون المحذوفون',
                'edit'                => 'تعديل المستخدم',
                'management'          => 'إدارة المستخدمين',
                'no_permissions'      => 'بدون صلاحيات',
                'no_roles'            => 'بدون أي أدوار.',
                'permissions'         => 'صلاحيات',

                'table' => [
                    'confirmed'      => 'مؤكد',
                    'created'        => 'تم الإنشاء',
                    'email'          => 'البريد الإلكتروني',
                    'id'             => 'ID',
                    'last_updated'   => 'آخر تحديث',
                    'name'           => 'الإسم',
                    'no_deactivated' => 'لا يوجد أي مستخدمين معطلين',
                    'no_deleted'     => 'لا يوحد أي مستخدمين محذوفين',
                    'roles'          => 'الأدوار',
                    'social' => 'حساب وسائل التواصل',
                    'total'          => 'مجموع المستخدم|مجموع المستخدمين',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'نظرة عامة',
                        'history'  => 'تاريخ',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'الصورة الشخصية',
                            'confirmed'    => 'مؤكد',
                            'created_at'   => 'تم الإنشاء بـ',
                            'deleted_at'   => 'تم الحذف بـ',
                            'email'        => 'البريد الإلكتروني',
                            'last_login_at' => 'آخر تسجيل دخول بـ',
                            'last_login_ip' => 'آخر عنوان IP تم تسجيل الدخول منه',
                            'last_updated' => 'آخر تحديث',
                            'name'         => 'الإسم',
                            'status'       => 'الحالة',
                            'timezone'     => 'المنطقة الزمنية',
                        ],
                    ],
                ],

                'view' => 'إظهار المستخدم',
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'تسجيل الدخول',
            'login_button'       => 'تسجيل الدخول',
            'login_with'         => 'تسجيل بـ :social_media',
            'register_box_title' => 'تسجيل',
            'register_button'    => 'تسجيل',
            'remember_me'        => 'تذكرني',
        ],

        'contact' => [
            'box_title' => 'الإتصال بنا',
            'button' => 'إرسال البيانات',
        ],

        'passwords' => [
            'forgot_password'                 => 'نسيت كلمة مرورك؟',
            'reset_password_box_title'        => 'إعادة تعيين كلمة المرور',
            'reset_password_button'           => 'إعادة تعيين كلمة المرور',
            'send_password_reset_link_button' => 'إرسال رابط إعادة تعيين كلمة المرور',
        ],

        'user' => [
            'passwords' => [
                'change' => 'تغيير كلمة المرور',
            ],

            'profile' => [
                'avatar'             => 'الصورة الشخصية',
                'created_at'         => 'تم الإنشاء في',
                'edit_information'   => 'تعديل البيانات',
                'email'              => 'البريد الإلكتروني',
                'last_updated'       => 'آخر تحديث تم في',
                'name'               => 'الإسم',
                'update_information' => 'تحديث البيانات',
            ],
        ],

    ],
];
