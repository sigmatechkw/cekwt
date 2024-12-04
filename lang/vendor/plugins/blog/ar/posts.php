<?php

return [
    'create' => 'إنشاء مشاركة جديدة',
    'form' => [
        'name' => 'اسم',
        'name_placeholder' => 'اسم المنشور (Maximum :c characters)',
        'description' => 'وصف',
        'description_placeholder' => 'الوصف القصير للمنشور (Maximum :c characters)',
        'categories' => 'فئات',
        'tags' => 'العلامات',
        'tags_placeholder' => 'العلامات',
        'content' => 'محتوى',
        'is_featured' => 'هي واردة؟',
        'note' => 'ملاحظة المحتوى',
        'format_type' => 'شكل',
    ],
    'cannot_delete' => 'لا يمكن حذف المشاركة',
    'post_deleted' => 'تم حذف المشاركة',
    'posts' => 'دعامات',
    'post' => 'بريد',
    'edit_this_post' => 'تحرير هذه المشاركة',
    'no_new_post_now' => 'لا توجد وظيفة جديدة الآن!',
    'menu_name' => 'دعامات',
    'widget_posts_recent' => 'المشاركات الاخيرة',
    'categories' => 'فئات',
    'category' => 'فئة',
    'author' => 'مؤلف',
    'export' => [
        'description' => 'تصدير المشاركات إلى ملف CSV/Excel.',
        'total' => 'إجمالي المشاركات',
    ],
    'import' => [
        'description' => 'استيراد المشاركات من ملف CSV/Excel.',
        'done_message' => 'تم إنشاء المشاركات :created وتم تحديث المشاركات :updated.',
        'rules' => [
            'nullable_string_max' => ':attribute يمكن أن تكون فارغة أو سلسلة بحد أقصى لطول :max من الأحرف إذا تم توفيرها.',
            'sometimes_array' => ':attribute يمكن تركه فارغًا أو يجب أن يكون عبارة عن مصفوفة إذا تم توفيره.',
            'in' => ':attribute يجب أن تكون واحدة من القيم التالية: :values.',
            'nullable_string' => ':يمكن ترك attribute فارغة أو يجب أن تكون عبارة عن سلسلة إذا تم توفيرها.',
            'nullable_string_max_in' => ':attribute يمكن تركها فارغة أو يجب أن تكون عبارة عن سلسلة بحد أقصى لطول :max حرف إذا تم توفيرها ويجب أن تكون واحدة من القيم التالية: :values.',
        ],
    ],
    'edit' => 'Edit post',
];