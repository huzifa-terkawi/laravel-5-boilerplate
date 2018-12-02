<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'إدارة المستخدمين',

            'roles' => [
                'all'        => 'جميع الأدوار',
                'create'     => 'إنشاء دور جديد',
                'edit'       => 'تعديل دور',
                'management' => 'إدارة الأدوار',
                'main'       => 'أدوار المتسخدمين',
            ],

            'users' => [
                'all'             => 'جميع المستخدمين',
                'change-password' => 'تغيير كلمة السر',
                'create'          => 'إنشاء مستخدم جديد',
                'deactivated'     => 'المستخدمون المعطلون',
                'deleted'         => 'المستخدمون المحذفون',
                'edit'            => 'تعديل مستخدم',
                'main'            => 'المستخدمين',
                'view'            => 'إظهار المستخدم',
            ],
        ],

        'log-viewer' => [
            'main'      => 'عارض السجلات',
            'dashboard' => 'لوحة التحكم',
            'logs'      => 'السجلات',
        ],

        'sidebar' => [
            'dashboard' => 'اللوحة الرئيسية',
            'general'   => 'عام',
            'history'   => 'التاريخ',
            'system'    => 'النظام',
        ],
    ],

    'language-picker' => [
        'language' => 'اللغة',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'العربية (Arabic)',
            'zh'    => '(Chinese Simplified)الصينية المبسطة ',
            'zh-TW' => '(Chinese Traditional)الصينية التقليدية ',
            'da'    => 'الدنماركية (Danish)',
            'de'    => 'الألمانية (German)',
            'el'    => '(Greek) اليونانية',
            'en'    => 'الإنجليزية (English)',
            'es'    => 'الأسبانية (Spanish)',
            'fa'    => 'الفارسیة (Persian)',
            'fr'    => 'الفرنسية (French)',
            'he'    => 'العبرية (Hebrew)',
            'id'    => 'الأندونيسية (Indonesian)',
            'it'    => 'الإيطالية (Italian)',
            'ja'    => '(Japanese) اليابانية',
            'nl'    => 'الهولندية  (Dutch)',
            'no'    => '(Norwegian) النرويجية',
            'pt_BR' => 'البرازيلية البرتغالية (Brazilian Portuguese)',
            'ru'    => '(Russian) الروسية',
            'sv'    => 'السويسرية (Swedish)',
            'th'    => '(Thai) التايلندية',
            'tr'    => ' التركية(Turkish)',
        ],
    ],
];
