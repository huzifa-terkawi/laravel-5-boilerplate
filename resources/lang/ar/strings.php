<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm'  => 'هل أنت متأكد من رغبتك في حذف هذا المستخدم نهائياً؟ إذا إخترت المتابعة سيتم ظهور خطأ في أي مكان يتعلق برقم ID هذا المستخدم.تابع بحذر وعلى مسؤوليتك الكاملة. لايمكن إستعادة المستخدم مرة أخرى إذا إخترت المتابعة.',
                'if_confirmed_off'     => '(إذا كان خيار التفعيل مفعلاً في الإعدادات)',
                'restore_user_confirm' => 'إستعادة هذا المستخدم إلى حالته الأصلية؟',
            ],
        ],

        'dashboard' => [
            'title'   => 'لوحة تحكم الإدارة',
            'welcome' => 'أهلاً وسهلاً',
        ],

        'general' => [
            'all_rights_reserved' => 'جميع الحقوق محفوظة.',
            'are_you_sure'        => 'هل أنت متأكد؟',
            'boilerplate_link'    => 'Laravel 5 Boilerplate',
            'continue'            => 'متابعة',
            'member_since'        => 'عضو منذ',
            'minutes'             => 'دقائق',
            'search_placeholder'  => 'بحث...',
            'timeout'             => 'تم تسجيل خروجك بشكل إلي لدواعي أمنية لأن الحساب لم يجري أي تفاعل خلال  ',

            'see_all' => [
                'messages'      => 'رؤية جميع الرسائل',
                'notifications' => 'عرض الكل',
                'tasks'         => 'عرض جميع المهمات',
            ],

            'status' => [
                'online'  => 'موجود',
                'offline' => 'غير موجود',
            ],

            'you_have' => [
                'messages'      => '{0} ليس لديك أي رسائل|{1} لديك رسالة واحدة|{2} لديك رسالتان|[3,10] لديك :number رسائل|[11,inf] لديك :number رسالة',
                'notifications' => '{0} ليس لديك أي إشعارات|{1} لديك إشعار واحد|{2} لديك إشعاران|[3,10] لديك :number إشعارات|[11,inf] لديك :number إشعاراً',
                'tasks'         => '{0} ليس لديك أي مهمات|{1} لديك مهمة واحدة|{2} لديك مهمتان|[3,10] لديك :number مهمات|[11,inf] لديك :number مهمة',
            ],
        ],

        'search' => [
            'empty'      => 'الرجاء إدخال نص البحث.',
            'incomplete' => 'يجب عليك كتابة نظام البحث الخاص بالرنامج بنفسك.',
            'title'      => 'نتيجة البحث',
            'results'    => ':query نتيجة البحث لـ ',
        ],

        'welcome' => '<p>هذا هو ثيم CoreUI المصمم من قبل <a href="https://coreui.io/" target="_blank">creativeLabs</a>. هذه مجرد نسخة جردت من الكثير من الأشياء وتركت فقط ال Styles وال Scripts التي تجعلها تعمل بأقل الإمكانيات. يجب عليك تحميل النسخة الكاملة حتى تستطيع إضافة المكونات للوحة تحكمك.
</p>
<p>جميع الإمكانيات المتوافرة هنا هي للعرض فقط بإستثناء <strong>إدارة المستخدمين</strong> المتواجدة على اليمين و <strong>عارض السجلات</strong> الموجودة بالأسفل. هذا النمط يأتي مع مكتبة وظيفية بالكامل للتحكم في الوصول إلى إدارة المستخدمين / الأدوار / الصلاحيات.</p>
<p>ضع في الإعتبار أن العمل لا يزال مستمراً وقد تتواجد بعض المشاكل أو الأخطاء التي لم تصادفنا. سأقوم بكل جهدي لإصلاحها حالما أتوصل إليها.</p>
<p>أتمنى أن تستمع بالمجهود الذي بذلته في هذا العمل. الرجاء زيارة صفحة <a href="https://github.com/rappasoft/laravel-5-boilerplate" target="_blank">GitHub</a> للمزيد من المعلومات أو <a href="https://github.com/rappasoft/Laravel-5-Boilerplate/issues" target="_blank">الإبلاغ عن الأخطاء أو المشاكل</a>.</p>
<p><strong>هذا المشروع من الصعب عليه جدا مواكبة المعدل الذي يتغير عليه فرع Laravel الرئيسي، لذلك أي مساعدة سوف تكون محل تقدير.</strong></p>
<p>- أنتوني ربّا</p>
<p>- Anthony Rappa</p>',
    ],

    'emails' => [
        'auth' => [
            'account_confirmed' => 'تم تفعيل حسابك.',
            'error'                   => 'خطأ !',
            'greeting'                => 'مرحباً بك !',
            'regards'                 => 'مع كامل الإحترام ,',
            'trouble_clicking_button' => '":action_text" , قم بنسخ و لصق الرابط بإستخدام المتصفح.إذا واجهتك مشكلة أثناء الضغط على ',
            'thank_you_for_using_app' => 'شكرا لك لإستخدامك تطبيقنا.',

            'password_reset_subject'    => 'رابط إعادة تعيين كلمة المرور',
            'password_cause_of_email'   => 'تم تسليم هذا البريد بناءاً على طلبك بإعادة ضبط كلمة السر .',
            'password_if_not_requested' => 'إذا لم تطلب إعادة ضبط كلمة السر , لا يوجد حاجة لأي إجراء آخر.',
            'reset_password'            => 'إضغط هنا لإعادة تعيين كلمة مرورك',

            'click_to_confirm' => 'إضغط هنا لتفعيل account:',
        ],

        'contact' => [
            'email_body_title' => 'لديك طلب إتصال بنا جديد فيما يلي تفاصيل الطلب :',
            'subject' => ':app_name طلب إتصال بنا جديد ',
        ],
    ],

    'frontend' => [
        'test' => 'تجربة',

        'tests' => [
            'based_on' => [
                'permission' => 'صلاحية بناء ًعلى - ',
                'role'       => 'دور بناء ًعلى - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'إستخدام Blade Extensions',

            'using_access_helper' => [
                'array_permissions'     => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles'           => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not'       => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id'         => 'Using Access Helper with Permission ID',
                'permission_name'       => 'Using Access Helper with Permission Name',
                'role_id'               => 'Using Access Helper with Role ID',
                'role_name'             => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works'          => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because'            => 'أنت ترى هذا لأن لديك دور \':role\'!',
            'you_can_see_because_permission' => 'أنت ترى هذا لإن لديك صلاحية \':permission\'!',
        ],

        'general' => [
            'joined'        => 'منضم',
        ],

        'user' => [
            'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
            'change_email_notice' => 'إذا قمت بتغير بريدك سيتم تسجيل خروجك حتى يتم تأكيد اليريد الجديد.',
            'email_changed_notice' => 'يجب تأكيد البريد الإلكتروني الجديد قبل التمكن من تسجيل الخروج.',
            'profile_updated'  => 'تم تحديث الملف الشخصي بنجاح.',
            'password_updated' => 'تم تحديث كلمة المرور بنجاح.',
        ],

        'welcome_to' => 'مرحبا بك في :place',
    ],
];
