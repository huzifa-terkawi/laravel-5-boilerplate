<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists'    => 'هذا الدور موجود مسبقا. الرجاء إختيار إسم آخر.',
                'cant_delete_admin' => 'لا يمكنك إزالة دور الإداري.',
                'create_error'      => 'حدثت مشكلة أثناء إنشاء الدور، الرجاء المحاولة مرة أخرى.',
                'delete_error'      => 'حدثت مشكلة أثناء مسح الدور، الرجاء إعادة المحاولة مرى أخرى.',
                'has_users'         => 'لا يمكنك مسح هذا الدور بوجود مستخدمين مرتبطين به.',
                'needs_permission'  => 'يجب عليك على الأقل إختيار صلاحية واحدة لهذا الدور.',
                'not_found'         => 'هذا الدور غير موجود.',
                'update_error'      => 'هناك مشكلة في تحديث هذا الدور، الرجاء المحاولة مرة أخرى.',
            ],

            'users' => [
                'already_confirmed'    => 'هذا المستخدم مفعل سلفاً.',
                'cant_confirm' => 'حدثت مشكلة أثناء محاولة تأكيد حساب المستخدم',
                'cant_deactivate_self'  => 'لا يمكنك إلغاء تفعيل حسابك بنفسك.',
                'cant_delete_admin'  => 'لا يمكن حذف الحساب admin ',
                'cant_delete_self'      => 'لا يمكنك مسح حسابك  نفسك.',
                'cant_delete_own_session' => 'لا يمكن مسح بيانات جلستك بنفسك',
                'cant_restore'          => 'هذا المستخدم غير محذوف و لهذا لا يمكن إستعادته.',
                'cant_unconfirm_admin' => 'لا يمكن إلغاء تأكيد الحساب Admin ',
                'cant_unconfirm_self' => 'لا يمكنك إلغاء تأكيد حسابك بنفسك.',
                'create_error'          => 'حدثت مشكلة أثناء إنشاء المستخدم، الرجاء المحاولة مرة أخرى.',
                'delete_error'          => 'حدثت مشكلة أثناء مسح المستخدم، الرجاء المحاولة مرى أخرى .',
                'delete_first'          => 'هذا المستخدم يجب أن يحذف أولا قبل أن تتم إزالته بشكل دائم.',
                'email_error'           => 'هذا البريد الإلكتروني ينتمي إلى مستخدم آخر.',
                'mark_error'            => 'حدثت مشكلة أثناء تحديث هذا المستخدم، الرجاء المحاولة مرى أخرى.',
                'not_confirmed'            => 'بريد الإلكتروني لهذا المستخدم لم يتم تأكيده بعد.',
                'not_found'             => 'هذا المستخدم غير موجود.',
                'restore_error'         => 'حدثت مشكلة أثناء إستعادة المستخدم، الرجاء المحاولة مرة أخرى',
                'role_needed_create'    => 'يجب عليك اختيار دور واحد.',
                'role_needed'           => 'يجب عليك إختيار دور واحد على الأقل.',
                'session_wrong_driver'  => 'Your session driver must be set to database to use this feature.',
                'social_delete_error' => 'حدثت مشكلة أثناء إزالة حساب مواقع التواصل الإجتماعي من لائحة المستخدمين.',
                'update_error'          => 'حدثت مشكلة أثناء تحديث المستخدم، الرجاء المحاولة مرة أخرى.',
                'update_password_error' => 'حدثت مشكلة أثناء تغيير كلمة مرور المستخدم، الرجاء المحاولة مرة أخرى.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'حسابك مفعل مسبقاً.',
                'confirm'           => 'الرجاء القيام بتفعيل حسابك!',
                'created_confirm'   => 'لقد تم إنشاء حسابك بنجاح. لقد تم إرسال رابط التفعيل إلى بريدك الإلكتروني.',
                'created_pending'   => 'تم إنشاء حسابك الجديد بنجاح . الحساب الجديد ينتظر الموافقة سيتم إعلامك برسالة في حال الموافقة.',
                'mismatch'          => 'كود التفعيل هذا غير متطابق!',
                'not_found'         => 'كود التفعيل هذا غير موجود!',
                'pending'            => 'حسابك حاليا ينتظر موافقة التفعيل من مدير الموقع.',
                'resend'            => 'حسابك غير مفعل. برجاء الضغط على رابط التفعيل الذي تم إرساله إلى بريدك الإلكتروني, أو <a href=":url">إضغط هنا</a> لإعادة إرسال رابط التفعيل مجددا.',
                'success'           => 'تم تفعيل حسابك بنجاح!',
                'resent'            => 'تم إرسال رابط التفعيل مجددا إلى عنوان بريدك الإلكتروني الموجود في حسابك.',
            ],

            'deactivated' => 'لقد تم تعطيل حسابك.',
            'email_taken' => 'هذا البريد الإلكتروني موجود مسبقا.',

            'password' => [
                'change_mismatch' => 'هذه ليست كلمة مرورك القديمة.',
                'reset_problem' => 'حصلت مشكلة أثناء إعادة ضبط كلمة المرور الجديدة . رجاء إعادة إرسال بريد إعادة ضبط كلمة السر مرة أخرى.',
            ],

            'registration_disabled' => 'التسجيل حالياً بالموقع معلق , الرجاء المحاولة لاحقاً',
        ],
    ],
];
