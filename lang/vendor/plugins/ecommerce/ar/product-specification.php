<?php

return [
    'product_specification' => 'مواصفات المنتج',
    'specification_groups' => [
        'title' => 'مجموعات المواصفات',
        'create' => [
            'title' => 'إنشاء مجموعة المواصفات',
        ],
        'edit' => [
            'title' => 'تعديل مجموعة المواصفات ":"name"',
        ],
    ],
    'specification_attributes' => [
        'title' => 'سمات المواصفات',
        'group' => 'المجموعة المرتبطة',
        'group_placeholder' => 'اختر أي مجموعة',
        'type' => 'نوع الحقل',
        'default_value' => 'القيمة الافتراضية',
        'options' => [
            'heading' => 'الاختيارات',
            'add' => [
                'label' => 'اضف اختيار جديد',
            ],
        ],
        'create' => [
            'title' => 'إنشاء سمة المواصفات',
        ],
        'edit' => [
            'title' => 'تعديل سمة المواصفات ":name"',
        ],
    ],
    'specification_tables' => [
        'title' => 'جداول المواصفات',
        'create' => [
            'title' => 'إنشاء جدول المواصفات',
        ],
        'edit' => [
            'title' => 'تعديل جدول المواصفات":name"',
        ],
        'fields' => [
            'groups' => 'حدد المجموعات التي تريد عرضها في هذا الجدول',
            'name' => 'اسم المجموعة',
            'assigned_groups' => 'المجموعات المعينة',
            'sorting' => 'الترتيب',
        ],
    ],
    'product' => [
        'specification_table' => [
            'options' => 'الاختيارات',
            'title' => 'جدول المواصفات',
            'select_none' => 'لا يوجد',
            'description' => 'حدد جدول المواصفات المراد عرضه في هذا المنتج',
            'group' => 'مجموعة',
            'attribute' => 'سمة',
            'value' => 'قيمة السمة',
            'hide' => 'إخفاء',
            'sorting' => 'الرتيب',
        ],
    ],
    'enums' => [
        'field_types' => [
            'text' => 'نص',
            'textarea' => 'منطقة الكتابة',
            'select' => 'اختر',
            'checkbox' => 'خانة الاختيار',
            'radio' => 'صوتي',
        ],
    ],
];
