<?php

return [
    'tools' => [
        'export_import_data' => 'تصدير/استيراد البيانات',
    ],
    'import' => [
        'name' => 'استيراد',
        'heading' => 'استيراد:label',
        'failed_to_read_file' => 'الملف غير صالح أو تالف أو كبير الحجم بحيث لا يمكن قراءته.',
        'form' => [
            'quick_export_message' => 'إذا كنت تريد تصدير بيانات :label، فيمكنك القيام بذلك بسرعة بالنقر فوق :export_csv_link أو :export_excel_link.',
            'quick_export_button' => 'تصدير الي :format',
            'dropzone_message' => 'قم بسحب وإسقاط الملف هنا أو انقر للتحميل',
            'allowed_extensions' => 'اختر ملفًا بالامتدادات التالية: :extensions.',
            'import_button' => 'استيراد',
            'chunk_size' => 'حجم القطعة',
            'chunk_size_helper' => 'يتم تحديد عدد الصفوف المراد استيرادها في المرة الواحدة من خلال حجم الكتلة. قم بزيادة هذه القيمة إذا كان لديك ملف كبير ويتم استيراد البيانات بسرعة كبيرة. قم بخفض هذه القيمة إذا واجهت حدودًا للذاكرة أو مشكلات في مهلة البوابة عند استيراد البيانات.',
        ],
        'failures' => [
            'title' => 'الفشل',
            'attribute' => 'خاصية',
            'errors' => 'الاخطاء',
        ],
        'example' => [
            'title' => 'مثال',
            'download' => 'مثال تحميل :type file',
        ],
        'rules' => [
            'title' => 'القواعد',
            'column' => 'عمود',
        ],
        'uploading_message' => 'البدء في تحميل الملف...',
        'uploaded_message' => 'الملف :تم تحميل الملف بنجاح. ابدأ في التحقق من صحة البيانات...',
        'validating_message' => 'نموذج التحقق :from to :to...',
        'importing_message' => 'الاستيراد من :from to :to...',
        'done_message' => 'تم استيراد :count :label بنجاح.',
        'validating_failed_message' => 'فشل التحقق. يرجى التحقق من الأخطاء أدناه.',
        'no_data_message' => 'بياناتك محدثة بالفعل أو لا توجد بيانات لاستيرادها.',
    ],
    'export' => [
        'name' => 'تصدير',
        'heading' => 'تصدير:label',
        'form' => [
            'all_columns_disabled' => 'سوف يتم تصدير الأعمدة التالية: :columns.',
            'columns' => 'اعمدة',
            'format' => 'Format',
            'export_button' => 'تصدير',
        ],
        'success_message' => 'تم التصدير بنجاح.',
        'error_message' => 'فشل التصدير.',
        'empty_state' => [
            'title' => 'لا توجد بيانات للتصدير',
            'description' => 'يبدو أنه لا توجد بيانات للتصدير.',
            'back' => 'الرجوع الي :page',
        ],
    ],
];
