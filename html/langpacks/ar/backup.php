<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'backup', language 'ar', version '4.1'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'مهمة الحفظ الاحتياطي قد اكتملت';
$string['asyncbackupcompletebutton'] = 'استمر';
$string['asyncbackupcompletedetail'] = 'مهمة الحفظ الاحتياطي قد اكتملت بنجاح. <br/> يمكنك الوصول إلى النسخة الاحتياطية من <a href="{$a}">صفحة الاستعادة.</a>';
$string['asyncbackuperror'] = 'مهمة الحفظ الاحتياطي قد فشلت';
$string['asyncbackuperrordetail'] = 'مهمة الحفظ الاحتياطي قد فشلت. لطفاً، اتصل بالمشرف على النظام.';
$string['asyncbackuppending'] = 'مهمة الحفظ الاحتياطي معلقة حالياً';
$string['asyncbackupprocessing'] = 'الحفظ الاحتياطي قيد التنفيذ';
$string['asyncbadexecution'] = 'تنفيذ خاطئ لموجه الحفظ الاحتياطي. إنه {$a} بينما عليه أن يكون 2.';
$string['asynccheckprogress'] = 'يمكنك التحري عن مجرى العملية في أي وقت من <a href="{$a}">صفحة الاستعادة</a>.';
$string['asyncemailenable'] = 'تمكين إشعارات الرسائل';
$string['asyncemailenabledetail'] = 'إذا تم تمكينه، سيتلقى المستخدمون رسالة عندما تكتمل لديهم مهمات الحفظ الاحتياطي اللامتزامن أو الاستعادة اللامتزامنة.';
$string['asyncgeneralsettings'] = 'حفظ احتياطي/استعادة لا متزامنة';
$string['asyncmessagebody'] = 'الرسالة';
$string['asyncmessagebodydefault'] = 'مهمتك {operation} (ID: {backupid}) قد اكتملت بنجاح. يمكنك معاينتها هنا:<a href="{link}">{link}</a>.';
$string['asyncmessagebodydetail'] = 'الرسالة التي ترُسل عندما تكتمل مهمة الحفظ الاحتياطي اللامتزامنة أو الاستعادة اللامتزامنة.';
$string['asyncmessagesubject'] = 'الموضوع';
$string['asyncmessagesubjectdefault'] = '{operation} أكملها مودل بنجاح';
$string['asyncmessagesubjectdetail'] = 'موضوع الرسالة';
$string['asyncnowait'] = 'ليس عليك الانتظار هنا، حيث أن العملية ستستمر في الخلفية.';
$string['asyncprocesspending'] = 'العملية معلقة';
$string['asyncrestorecomplete'] = 'مهمة الاستعادة قد اكتملت';
$string['asyncrestorecompletebutton'] = 'استمر';
$string['asyncrestorecompletedetail'] = 'مهمة الاستعادة قد اكتملت بنجاح. النقر على زر الاستمرار سيأخذك إلى <a href="{$a}">المقرر حيث يتوضع العنصر المستعاد.</a>';
$string['asyncrestoreerror'] = 'مهمة الاستعادة قد فشلت';
$string['asyncrestoreerrordetail'] = 'مهمة الاستعادة قد فشلت. لطفاً، اتصل بالمشرف على النظام.';
$string['asyncrestoreinprogress'] = 'مهمات الاستعادة قيد التنفيذ';
$string['asyncrestoreinprogress_help'] = 'مهمات الاستعادة اللامتزامنة للمقرر والتي هي قيد التنفيذ، معروضة هنا.';
$string['asyncrestorepending'] = 'مهمة الاستعادة معلقة حالياً';
$string['asyncrestoreprocessing'] = 'الاستعادة قيد التنفيذ';
$string['asyncreturn'] = 'عودة إلى المقرر';
$string['autoactivedescription'] = 'إختر ما إذا أردتَ استعمال الحفظ الاحتياطي التلقائي أو لا. إذا تم اختيار الحفظ الاحتياطي اليدوي، فالحفظ الاحتياطي التلقائي لن يكون ممكناً إلا من خلال النص البرمجي لواجهة سطر الأوامر. يمكن تنفيذ ذلك إما يدوياً أو من خلال مشغل الوظائف الدورية.';
$string['autoactivedisabled'] = 'معطّل';
$string['autoactiveenabled'] = 'ممكن';
$string['autoactivemanual'] = 'يدوياً';
$string['automatedbackupschedule'] = 'جدول';
$string['automatedbackupschedulehelp'] = 'إختر أيام الأسبوع التي يتم فيها تشغيل الحفظ الاحتياطي التلقائي.';
$string['automatedbackupsinactive'] = 'لم يتم تمكين الحفظ الاحتياطي التلقائي من قِبَل مشرف الموقع';
$string['automatedbackupstatus'] = 'حالة الحفظ الاحتياطي التلقائي';
$string['automateddeletedays'] = 'حذف نُسخ الحفظ الاحتياطي الأقدم من';
$string['automatedmaxkept'] = 'أقصى عدد من نُسخ الحفظ الاحتياطي يتم الإبقاء عليها';
$string['automatedmaxkepthelp'] = 'هذا يحدد العدد الأقصى من نسخ الحفظ الاحتياطي التلقائي الأخيرة التي سيتم الإبقاء عليها لكل مقرر. سيتم حذف النسخ الأقدم تلقائياً.';
$string['automatedminkept'] = 'أقل عدد من نُسخ الحفظ الاحتياطي يتم الإبقاء عليها';
$string['automatedminkepthelp'] = 'إذا تم حذف الحفظ الاحتياطي الأقدم من عدد الأيام المُحدَّدة، فإنه يمكن لمقرر غير نشط أن يصير بلا حفظ احتياطي. لمنع ذلك، ينبغي تحديد أقل عدد من الحفظ الاحتياطي الذي يُحتفظ به.';
$string['automatedsettings'] = 'إعدادات الحفظ الاحتياطي التلقائي';
$string['automatedsetup'] = 'تهيئة الحفظ الاحتياطي التلقائي';
$string['automatedstorage'] = 'مخزن الحفظ الاحتياطي التلقائي';
$string['automatedstoragehelp'] = 'إختر الموضع الذي تريد استعماله لتخزين نسخ الحفظ الاحتياطي المنشأة تلقائياً.';
$string['backupactivity'] = 'النسخ الاحتياطي للنشاط: {$a}';
$string['backupautoactivitiesdescription'] = 'يحدد الوضع الافتراضي لتضمين النشاطات في الحفظ الاحتياطي. لا بد من تمكين هذا الخيار من أجل تشغيل سلة المحذوفات.';
$string['backupcourse'] = 'الحفظ الاحتياطي للمقرر: {$a}';
$string['backupcoursedetails'] = 'تفاصيل المقرر';
$string['backupcoursesection'] = 'القسم: {$a}';
$string['backupcoursesections'] = 'أقسام المقرر';
$string['backupdate'] = 'التاريخ المأخوذ';
$string['backupdetails'] = 'تفاصيل النسخ الاحتياطي';
$string['backupdetailsnonstandardinfo'] = 'الملف المُحدَّد ليس بالشكل القياسي المقبول لملف حفظ إحتياطي لمودل. ستحاول عملية الاستعادة تحويل الملف إلى الشكل القياسي للحفظ الاحتياطي ومن ثم استعادته.';
$string['backupformat'] = 'التنسيق';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'مودل 1';
$string['backupformatmoodle2'] = 'مودل 2';
$string['backupformatunknown'] = 'تصميم غير معروف';
$string['backuplog'] = 'المعلومات التقنية والتحذيرات';
$string['backupmode'] = 'وضع';
$string['backupmode10'] = 'العام';
$string['backupmode20'] = 'استورد';
$string['backupmode30'] = 'مجمع';
$string['backupmode40'] = 'الموقع ذاته';
$string['backupmode50'] = 'مُؤتمت';
$string['backupmode60'] = 'مُحوَّل';
$string['backupmode70'] = 'لا متزامن';
$string['backupsection'] = 'الحفظ الاحتياطي لمقطع المقرر: {$a}';
$string['backupsettings'] = 'إعدادات الحفظ الاحتياطي';
$string['backupsitedetails'] = 'تفاصيل الموقع';
$string['backupstage16action'] = 'استمر';
$string['backupstage1action'] = 'التالي';
$string['backupstage2action'] = 'التالي';
$string['backupstage4action'] = 'تنفيذ الحفظ الاحتياطي';
$string['backupstage8action'] = 'استمر';
$string['backuptype'] = 'النوع';
$string['backuptypeactivity'] = 'النشاط';
$string['backuptypecourse'] = 'المادة';
$string['backuptypesection'] = 'القسم';
$string['backupversion'] = 'إصدار النسخة الاحتياطية';
$string['cannotfindassignablerole'] = 'دور {$a} في النسخة الاحتياطية لا يمكن تعيينه لأي من الأدوار المسموح لك بتعيينها.';
$string['choosefilefromactivitybackup'] = 'مساحة الحفظ الاحتياطي للنشاط';
$string['choosefilefromactivitybackup_help'] = 'ملفات الحفظ الاحتياطي للنشاطات والمنشأة باستعمال الإعدادات الافتراضية ستخزن هنا.';
$string['choosefilefromautomatedbackup'] = 'نُسخ الحفظ الاحتياطي التلقائي';
$string['choosefilefromautomatedbackup_help'] = 'يحتوي على نُسخ الحفظ الاحتياطي المنشأة تلقائياً';
$string['choosefilefromcoursebackup'] = 'مساحة الحفظ الاحتياطي للمقرر';
$string['choosefilefromcoursebackup_help'] = 'ملفات الحفظ الاحتياطي للمقرر والمنشأة باستعمال الإعدادات الافتراضية ستخزن هنا.';
$string['choosefilefromuserbackup'] = 'مساحة الحفظ الاحتياطي الخاصة بالمستخدم';
$string['choosefilefromuserbackup_help'] = 'يتم تخزين ملفات الحفظ الاحتياطي التي تم حفظها بلا معلومات المُستخدمين هنا.';
$string['config_keep_groups_and_groupings'] = 'افتراضيا إبقاء المجموعات والتجمعات الحالية.';
$string['config_keep_roles_and_enrolments'] = 'افتراضيا الحفاظ على الأدوار الحالية والتسجيلات.';
$string['config_overwrite_conf'] = 'يسمح للمستخدم بالكتابة عن تكوين المقرر';
$string['config_overwrite_course_fullname'] = 'بشكل افتراضي، الاسم الكامل للمقرر يتم استبداله مع الاسم الموجود في ملف النسخة الاحتياطية. يتطلب هذا وضع التأشير على "استبدال اعدادات المقرر" وأن يكون لدى المستخدم الحالي إمكانية تغيير الاسم الكامل للمقرر (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'بشكل افتراضي، الاسم المختصر للمقرر يتم استبداله مع الاسم الموجود في ملف النسخة الاحتياطية. يتطلب هذا وضع التأشير على "استبدال اعدادات المقرر" وأن يكون لدى المستخدم الحالي إمكانية تغيير الاسم المختصر للمقرر (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'بشكل افتراضي، تاريخ بداية المقرر يتم استبداله بالتاريخ المأخوذ من ملف الحفظ الاحتياطي. يتطلب هذا أن يتم التأشير على "استبدال إعدادات المقرر" وأن يكون لدى المستخدم الحالي الإمكانية على تغيير تاريخ بدء المقرر (moodle/restore:rolldates) عند الاستعادة';
$string['configgeneralactivities'] = 'يحدد الوضع الافتراضي لتضمين الأنشطة في الحفظ الاحتياطي.';
$string['configgeneralanonymize'] = 'إذا مكّن ستصبح كل المعلومات الخاصة بالمستخدمين مجهولة افتراضياً .';
$string['configgeneralbadges'] = 'ضبط الوضع الافتراضي لتضمين الشارات في النسخة الاحتياطية.';
$string['configgeneralblocks'] = 'يضبط الوضع الافتراضي لتضمين الكتل في الحفظ الاحتياطي.';
$string['configgeneralcalendarevents'] = 'ضبط الوضع الافتراضي لتضمين أحداث التقويم في النسخة الاحتياطية.';
$string['configgeneralcomments'] = 'يحدد الوضع الافتراضي لتضمين التعليقات في الحفظ الاحتياطي.';
$string['configgeneralcompetencies'] = 'ضبط الوضع الافتراضي لتضمين الكفاءات في نسخة احتياطية.';
$string['configgeneralcontentbankcontent'] = 'إفتراضياً، ينبغي تضمين الملفات في نسخة الحفظ الاحتياطي.';
$string['configgeneralfiles'] = 'يحدد فيما إذا كان يتم افتراضياً تضمين الملفات عند الحفظ الاحتياطي. لطفاً لاحظ ما يأتي: تعطيل هذا الإعداد معناه أن الحفظ الاحتياطي سيقتصر على وضع مراجع للملفات. ليست هذه مشكلة عندما تتم الاستعادة إلى نفس الموقع والملفات لم تتعرض إلى الحذف جراء الإعداد \'تنظيف ملفات مستنقع القمامة\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'يحدد الوضع الافتراضي لتضمين المرشحات في الحفظ الاحتياطي.';
$string['configgeneralgroups'] = 'يضبط الوضع الافتراضي لتضمين المجموعات والتجميعات في الحفظ الاحتياطي.';
$string['configgeneralhistories'] = 'يحدد الوضع الافتراضي لتضمين ماضي المستخدمين في الحفظ الاحتياطي.';
$string['configgenerallogs'] = 'في حالة التمكين، سيتم تضمن سجلات الوقوعات في الحفظ الاحتياطي إفتراضياً';
$string['configgeneralpermissions'] = 'عند تمكينه، سيتم استيراد صلاحيات الدور. هذا قد يتجاوز الصلاحيات الموجودة للمستخدمين المنضمين.';
$string['configgeneralquestionbank'] = 'عند تمكينه، بنك الأسئلة سيتم تضمينه في الحفظ الاحتياطي إفتراضيأً. الرجاء ملاحظة: سيؤدي تعطيل هذا الإعداد إلى تعطيل الحفظ الاحتياطي للأنشطة التي تستعمل بنك الأسئلة، مثل الاختبار.';
$string['configgeneralroleassignments'] = 'في حالة التمكين سيتم تضمين تعيينات الأدوار في الحفظ الاحتياطي افتراضياً.';
$string['configgeneralusers'] = 'يحدد الوضع الافتراضي بشأن ما إذا كان ينبغي لتضمين المستخدمين في الحفظ الاحتياطي.';
$string['configgeneraluserscompletion'] = 'في حالة التمكين سيتم تضمين معلومات الإكمال للمستخدمين في الحفظ الاحتياطي افتراضياً.';
$string['configlegacyfiles'] = 'يحدد الوضع الافتراضي بشأن تضمين ملفات المقرر القديمة في الحفظ الاحتياطي. ملفات المقرر القديمة هي العائدة إلى إصدارات مودل التي تسبق 2.0.';
$string['configloglifetime'] = 'يحدد هذا المدة الزمنية التي تريد الاحتفاظ فيها بمعلومات سجلات وقوعات الحفظ الاحتياطي. يتم حذف السجلات الأقدم من هذا العمر تلقائياً. من المستحسن الحفاظ على هذه القيمة صغيرة، لأن معلومات سجلات الحفظ الاحتياطي يمكن أن تكون ضخمة.';
$string['configrestoreactivities'] = 'ضبط الوضع الافتراضي لاستعادة الأنشطة.';
$string['configrestorebadges'] = 'ضبط الوضع الافتراضي لاستعادة الشارات.';
$string['configrestoreblocks'] = 'ضبط الوضع الافتراضي لاستعادة الكتل.';
$string['configrestorecalendarevents'] = 'ضبط الوضع الافتراضي لاستعادة أحداث التقويم.';
$string['configrestorecomments'] = 'ضبط الوضع الافتراضي لاستعادة التعليقات.';
$string['configrestorecompetencies'] = 'ضبط الوضع الافتراضي لاستعادة الكفاءات.';
$string['configrestorecontentbankcontent'] = 'إفتراضياً، ينبغي شمول ملفات بنك المحتوى عند الاستعادة.';
$string['configrestoreenrolments'] = 'ضبط الوضع الافتراضي لاستعادة طرق التسجيل.';
$string['configrestorefilters'] = 'ضبط الوضع الافتراضي لاستعادة المنقحات .';
$string['configrestoregroups'] = 'يضبط الوضع الافتراضي لاستعادة المجموعات والتجميعات إذا تم تضمينها في الحفظ الاحتياطي.';
$string['configrestorehistories'] = 'ضبط الوضع الافتراضي لاستعادة سجل المستخدم إذا تم تضمينه في النسخة الاحتياطية.';
$string['configrestorelogs'] = 'عند التمكين ستتم استعادة السجلات بشكل افتراضي إذا تم تضمينها في النسخة الاحتياطية.';
$string['configrestorepermissions'] = 'عند تمكينه، ستتم استعادة صلاحيات الدور. هذا قد يتجاوز الصلاحيات الموجودة للمستخدمين المنضمين.';
$string['configrestoreroleassignments'] = 'عند التمكين  فسيتم استعادة تعيينات الأدوار بشكل افتراضب إذا تم تضمينها في النسخة الاحتياطية.';
$string['configrestoreusers'] = 'ضبط الوضع الافتراضي لاستعادة المستخدمين إذا تم تضمينهم في النسخة الاحتياطية.';
$string['configrestoreuserscompletion'] = 'إذا تم تمكينها فإن معلومات الاكتمال للمستخدم بشكل افتراضي إذا تم تضمينها في النسخة الاحتياطية.';
$string['confirmcancel'] = 'إلغاء الحفظ الاحتياطي';
$string['confirmcancelimport'] = 'إلغاء الاستيراد';
$string['confirmcancelno'] = 'لا تقم بالإلغاء';
$string['confirmcancelquestion'] = 'هل أنت متأكد بأنك ترغب في القيام بعملية الإلغاء؟ أيّ معلومات أدخلتها ستفقد.';
$string['confirmcancelrestore'] = 'إلغاء الاستعادة';
$string['confirmcancelyes'] = 'إلغاء الحفظ الاحتياطي';
$string['confirmnewcoursecontinue'] = 'تنبيه المقرر الجديد';
$string['confirmnewcoursecontinuequestion'] = 'سيتم إنشاء مقرر مؤقت (مخفي) من قِبل عملية استعادة المقرر. لإيقاف الاستعادة، أنقر على الإلغاء. لا تغلق المتصفح في أثناء الاستعادة.';
$string['copiesinprogress'] = 'المقرر لديه عمليات نسخ قيد التنفيذ. <a href="{$a}">عرض تلك العمليات.</a>';
$string['copycoursedesc'] = 'هذا المقرر ستصير له نسخة أخرى متوضعة في التصنيف المحدد.';
$string['copycourseheading'] = 'إنسخ مقرراً دراسياً';
$string['copycoursetitle'] = 'إنسخ المقرر: {$a}';
$string['copydest'] = 'الموضع المقصود';
$string['copyfieldnotfound'] = 'لم يتم العثور على بيانات مطلوبة بالنسبة للحقل/الحقول: {$a}';
$string['copyformfail'] = 'فشِل تسليم نموذج نسخ المقرر بتقنية AJAX.';
$string['copyingcourse'] = 'نَسْخُ المقرر قيد التنفيذ';
$string['copyingcourseshortname'] = 'النَّسْخُ جارٍ';
$string['copyop'] = 'العملية الحالية';
$string['copyprogressheading'] = 'إجراء النسخ قيد التنفيذ حالياً';
$string['copyprogressheading_help'] = 'هذا الجدول يُظهر حالة التنفيذ لكل العمليات غير المكتملة لنسخ المقررات الدراسية.';
$string['copyprogresstitle'] = 'سير عملية نسخ المقرر';
$string['copyreturn'] = 'إنسخ ثم عُد';
$string['copysource'] = 'المصدر';
$string['copyview'] = 'إنسخ ثم اعرض';
$string['coursecategory'] = 'الفئة التي سيتم استرجاع المقرر إليها';
$string['courseid'] = 'رقم المعرف الأصلي';
$string['coursesettings'] = 'إعدادات المقرر';
$string['coursetitle'] = 'العنوان';
$string['currentstage1'] = 'الإعدادات الأولية';
$string['currentstage16'] = 'اكتمل';
$string['currentstage2'] = 'إعدادت المخطط';
$string['currentstage4'] = 'التأكيد والمراجعة';
$string['currentstage8'] = 'تنفيذ الحفظ الاحتياطي';
$string['enableasyncbackup'] = 'تمكين الحفظ الاحتياطي اللامتزامن';
$string['enableasyncbackup_help'] = 'إذا تم تمكينه، فكل عمليات الحفظ الاحتياطي والاستعادة سيتم تنفيذها بشكل لا متزامن. هذا ليس له تأثير على عمليات الاستيراد والتصدير. الوضع اللامتزامن لعمليات الحفظ والاستعادة تسمح للمستخدمين بالقيام بأعمال أخرى في أثناء تنفيذ النظام لتلك العمليات.';
$string['enterasearch'] = 'ادخل بحث';
$string['error_block_for_module_not_found'] = 'تم العثور على عيِّنة كتلة معزولة (المُعرَّف: {$a-> bid}) لوحدة المقرر (المُعرَّف: {$a-> mid}). لن يتم نسخها احتياطيًا';
$string['error_course_module_not_found'] = 'تم العثور على وحدة مادة معزولة (معرف: {$a}). لن يتم عمل نسخة احتياطية من هذه الوحدة.';
$string['errorcopyingbackupfile'] = 'فَشِل نسخ ملف الحفظ الاحتياطي إلى المجلد المؤقت قبل الاستعادة.';
$string['errorfilenamemustbezip'] = 'يجب أن يكون الملف المدخل عبارة عن ملف مضغوط بامتداد (mbz.)';
$string['errorfilenamerequired'] = 'يجب ان تدخل اسم ملف صحيح لنسخة الحفظ الاحتياطي';
$string['errorfilenametoolong'] = 'يجب أن يكون طول اسم الملف أقل من 255 حرفًا.';
$string['errorinvalidformat'] = 'صيغة الحفظ الاحتياطي غير معروفة';
$string['errorinvalidformatinfo'] = 'الملف المحدد غير صالح كملف مودل للحفظ الاحتياطي ولا يمكن استعادته.';
$string['errorminbackup20version'] = 'تم إنشاء ملف الحفظ الاحتياطي هذا بإصدار تطويري من الحفظ الاحتياطي لمودل ({$a->backup}). الحد الأدنى المطلوب هو {$a->min}. لا يمكن استعادته.';
$string['errorrestorefrontpagebackup'] = 'يمكنك استعادة الحفظ الاحتياطي لواجهة الموقع إلى تلك الواجهة حصراً';
$string['executionsuccess'] = 'تم بنجاح إنشاء ملف الحفظ الاحتياطي.';
$string['extractingbackupfileto'] = 'يجري استخراج ملف الحفظ الاحتياطي إلى: {$a}';
$string['failed'] = 'فَشِل الحفظ الاحتياطي';
$string['filealiasesrestorefailures'] = 'فشل في استعادة الأسماء المستعارة';
$string['filealiasesrestorefailures_help'] = 'الأسماء المستعارة عبارة عن روابط رمزية لملفات أخرى، بما في ذلك تلك المخزنة في المستودعات الخارجية. في بعض الحالات، لا يمكن لمودل استعادتها - على سبيل المثال عند استعادة النسخة الاحتياطية في موقع آخر أو عند عدم وجود الملف المرجعي.

يمكن العثور على مزيد من التفاصيل والسبب الفعلي للفشل في ملف سجل وقوعات الاستعادة.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'تعذرت استعادة بعض الأسماء المستعارة المضمنة في ملف النسخة الاحتياطية. تحتوي القائمة التالية على مواقعهم المتوقعة والملف المصدري الذي كانوا يشيرون إليه في الموقع الأصلي.';
$string['filename'] = 'اسم الملف';
$string['filereferencesincluded'] = 'يتم تضمين مراجع الملفات التي تشير إلى المحتويات الخارجية في ملف الحفظ الاحتياطي. لن تعمل هذه الماجع إذا تمت استعادة النسخة الاحتياطية على موقع مختلف.';
$string['filereferencesnotsamesite'] = 'ملف الحفظ الاحتياطي هو من موقع مختلف، لذلك لا يمكن استعادة مراجع الملفات.';
$string['filereferencessamesite'] = 'ملف الحفظ الاحتياطي هو من هذا الموقع، لذلك يمكن استعادة مراجع الملفات.';
$string['generalactivities'] = 'تضمين الأنشطة والموارد';
$string['generalanonymize'] = 'معلومات لشخص مجهول';
$string['generalbackdefaults'] = 'إفتراضيات الحفظ الاحتياطي العامة';
$string['generalbadges'] = 'تضمين الشارات';
$string['generalblocks'] = 'تضمين الكتل';
$string['generalcalendarevents'] = 'تضمين أحداث التقويم';
$string['generalcomments'] = 'ضمّن التعليقات';
$string['generalcompetencies'] = 'تضمين الكفاءات';
$string['generalcontentbankcontent'] = 'تضمين محتويات بنك المحتوى';
$string['generalenrolments'] = 'ضمّن طرق التسجيل';
$string['generalfiles'] = 'تضمين الملفات';
$string['generalfilters'] = 'تضمين المنقحات';
$string['generalgradehistories'] = 'ضمّن التواريخ';
$string['generalgroups'] = 'تضمين المجموعات والتجميعات';
$string['generalhistories'] = 'ضمّن التواريخ';
$string['generallegacyfiles'] = 'تضمين ملفات المقرر القديمة';
$string['generallogs'] = 'تضمين سجلات الوقوعات';
$string['generalpermissions'] = 'تضمين تجاوزات الصلاحيات';
$string['generalquestionbank'] = 'تضمين بنك الأسئلة';
$string['generalrestoredefaults'] = 'افتراضات الاستعادة العامة';
$string['generalrestoresettings'] = 'إعدادات الاستعادة العامة';
$string['generalroleassignments'] = 'تضمين تعيينات الأدوار';
$string['generalsettings'] = 'إعدادات الحفظ الاحتياطي العامة';
$string['generalusers'] = 'ضمّن المستخدمين';
$string['generaluserscompletion'] = 'ضمّن معلومات استكمالات المستخدمين';
$string['hidetypes'] = 'إخفاء خيارات النوع';
$string['importbackupstage16action'] = 'استمر';
$string['importbackupstage1action'] = 'التالي';
$string['importbackupstage2action'] = 'التالي';
$string['importbackupstage4action'] = 'تنفيذ الاستيراد';
$string['importbackupstage8action'] = 'استمر';
$string['importcurrentstage0'] = 'اختيار المقرر';
$string['importcurrentstage1'] = 'الإعدادات الأولية';
$string['importcurrentstage16'] = 'اكتمل';
$string['importcurrentstage2'] = 'إعدادات المخطط';
$string['importcurrentstage4'] = 'التأكيد والمراجعة';
$string['importcurrentstage8'] = 'تنفيذ الاستيراد';
$string['importfile'] = 'استيراد ملف الحفظ الاحتياطي';
$string['importgeneralduplicateadminallowed'] = 'السماح بحل المشرف للتعارض';
$string['importgeneralduplicateadminallowed_desc'] = 'إذا كان لدى الموقع حساب باسم المستخدم "admin”، فإن محاولة استعادة ملف نسخة احتياطية يحتوي على حساب باسم المستخدم "admin" يمكن أن يسبب تعارضًا. إذا تم تمكين هذا الإعداد، فسيتم حل التعارض عن طريق تغيير اسم المستخدم في ملف النسخة الاحتياطية إلى "admin_xyz".';
$string['importgeneralmaxresults'] = 'أقصى عدد من المقررات الدراسية المدرجة للاستيراد';
$string['importgeneralmaxresults_desc'] = 'يتحكم هذا في عدد المقررات الدراسية المدرجة أثناء الخطوة الأولى من عملية الاستيراد';
$string['importgeneralsettings'] = 'الافتراضيات العامة للاستيراد';
$string['importrootsettings'] = 'إعدادات الاستيراد';
$string['importsettings'] = 'إعدادات الاستيراد العامة';
$string['importsuccess'] = 'إكتمل الاستيراد. أنقر على استمرار للرجوع إلى المقرر';
$string['includeactivities'] = 'ضمّن:';
$string['includeditems'] = 'العناصر المضمّنة :';
$string['includefilereferences'] = 'الملف المرجعي للمحتوى الخارجي';
$string['includesection'] = 'القسم {$a}';
$string['includeuserinfo'] = 'بيانات المستخدم';
$string['inprogress'] = 'الحفظ الاحتياطي قيد التنفيذ حالياً';
$string['jumptofinalstep'] = 'القفز إلى الخطوة النهائية';
$string['keep'] = 'إحتفظ به';
$string['keptroles'] = 'تضمين طرق ضم المستخدمين';
$string['keptroles_help'] = 'المستخدمون الذين يمتلكون الأدوار المختارة سيتم ضمهم إلى المقرر الجديد. لن يتم نسخ بيانات المستخدمين أيضاً ما لم يتم تمكين الإعداد "تضمين بيانات المستخدمين".';
$string['locked'] = 'مغلق';
$string['lockedbyconfig'] = 'تم تأمين هذا الإعداد بواسطة إعدادات الحفظ الاحتياطي الافتراضية';
$string['lockedbyhierarchy'] = 'مؤمن بواسطة التبِعات';
$string['lockedbypermission'] = 'لا تمتلك الصلاحيات الكافية لتغيير هذا الإعداد';
$string['loglifetime'] = 'الحفاظ على السجلات حتى';
$string['managefiles'] = 'إدارة ملفات الحفظ الاحتياطي';
$string['mergerestoredefaults'] = 'استعادة الإعدادات الافتراضية عند الدمج في مقرر أخر';
$string['missingfilesinpool'] = 'تعذر حفظ بعض الملفات أثناء الحفظ الاحتياطي، وبالتالي لن يكون من الممكن استعادتها.';
$string['module'] = 'وحدة';
$string['moodleversion'] = 'إصدار مودل';
$string['morecoursesearchresults'] = 'تم العثور على أكثر من {$a} مقرر (مقررات دراسية)، يتم عرض أول {$a} من النتائج';
$string['moreresults'] = 'يوجد نتائج كثيرة جداً ، ادخل بحث أكثر دقة.';
$string['nomatchingcourses'] = 'لا توجد مقررات دراسية لعرضها';
$string['norestoreoptions'] = 'لا يوجد فئات أو مقررات دراسية موجودة لتستطيع القيام بعملية الاسترجاع إليها .';
$string['originalwwwroot'] = 'رابط النسخة الاحتياطية';
$string['overwrite'] = 'استبدل';
$string['pendingasyncdeletedetail'] = 'هذا المقرر لديه عملية حفظ احتياطي لا متزامن معلقة. <br/> يتعذر حذف المقررات الدراسية ريثما تكتمل هذه العملية';
$string['pendingasyncdetail'] = 'الحفظ الاحتياطي اللامتزامن يسمح للمستخدم أن تكون له مهمة حفظ احتياطي معلقة واحدة فقط في المرة الواحدة لمورد معين.<br/> مهام الحفظ الاحتياطي اللامتزامن المتعددة لنفس المورد لا يمكن وضعها في طابور واحد، لأن ذلك من شأنه توليد نسخ إحتياطية متعددة لنفس المحتوى.';
$string['pendingasyncedit'] = 'هناك عملية حفظ احتياطي أو نسخ معلقة لهذا المقرر. لطفاً، لا تقم بتعديله ريثما تكتمل هذه العملية.';
$string['pendingasyncerror'] = 'الحفظ الاحتياطي معلق لهذا المورد';
$string['preparingdata'] = 'اعداد البيانات';
$string['preparingui'] = 'التحضير لعرض الصفحة';
$string['previousstage'] = 'السابق';
$string['privacy:metadata:backup:detailsofarchive'] = 'يمكن أن يحتوي هذا الأرشيف على العديد من بيانات المستخدم المتعلقة بالمقرر، مثل التقديرات إنضمامات المستخدم وبيانات النشاطات.';
$string['privacy:metadata:backup:externalpurpose'] = 'الغرض من هذا الأرشيف هو تخزين المعلومات المتعلقة بالمقررات، والتي يمكن استعادتها في المستقبل.';
$string['privacy:metadata:backup_controllers'] = 'قائمة عمليات الحفظ الاحتياطي';
$string['privacy:metadata:backup_controllers:itemid'] = 'مُعرَّف المقرر';
$string['privacy:metadata:backup_controllers:operation'] = 'العملية التي أُنجرت، مثلاً: الاستعادة';
$string['privacy:metadata:backup_controllers:timecreated'] = 'وقت إنشاء الإجراء';
$string['privacy:metadata:backup_controllers:timemodified'] = 'وقت تعديل الإجراء';
$string['privacy:metadata:backup_controllers:type'] = 'نوعية الفقرة التي يجري العمل عليها، مثلاً: نشاط';
$string['qcategory2coursefallback'] = 'صنف الأسئلة "{$a->name}”، الموجود في الأصل ضمن سياق الصنف النظام/المقرر في ملف الحفظ الاحتياطي، سيتم إنشاؤه في سياق المقرر عند الاستعادة';
$string['qcategorycannotberestored'] = 'فئة الأسئلة "{$a->name}" لا يمكن إنشاؤها بواسطة الاستعادة';
$string['question2coursefallback'] = 'صنف الأسئلة "{$a->name}”، الموجود في الأصل ضمن سياق الصنف النظام/المقرر في ملف الحفظ الاحتياطي، سيتم إنشاؤه في سياق المقرر عند الاستعادة';
$string['questioncannotberestored'] = 'الأسئلة  "{$a->name}" لا يمكن إنشاؤها بواسطة الاستعادة';
$string['recyclebin_desc'] = 'لاحظ أن تلك الإعدادات سيتم استعمالها أيضاً مع سلة المحذوفات.';
$string['replacerestoredefaults'] = 'استعادة الإعدادات الافتراضية عند الاستعادة إلى مادة أخرى محذوفة المحتويات';
$string['restoreactivity'] = 'استرجاع النشاط';
$string['restorecourse'] = 'استرجاع المقرر الدراسي';
$string['restorecoursesettings'] = 'إعدادات المقرر الدراسي';
$string['restoredcourseid'] = 'مُعرَّف المقرر الدراسي المستعاد: {$a}';
$string['restoreexecutionsuccess'] = 'تم استرجاع المقرر الدراسي بنجاح.';
$string['restorefileweremissing'] = 'بعض الملفات لا يمكن استعادتها لعدم توفرها في النسخة الاحتياطية .';
$string['restorenewcoursefullname'] = 'اسم المقرر الدراسي الجديد';
$string['restorenewcourseshortname'] = 'مختصر اسم المقرر الدراسي الجديد';
$string['restorenewcoursestartdate'] = 'تاريخ البدء جديد';
$string['restorerolemappings'] = 'استرجاع مخططات الدور';
$string['restorerootsettings'] = 'استرجاع الإعدادات';
$string['restoresection'] = 'استرجاع القسم';
$string['restorestage1'] = 'تأكيد';
$string['restorestage16'] = 'المراجعة';
$string['restorestage16action'] = 'تنفيذ الاسترجاع';
$string['restorestage1action'] = 'التالي';
$string['restorestage2'] = 'الوجهة';
$string['restorestage2action'] = 'التالي';
$string['restorestage32'] = 'العملية';
$string['restorestage32action'] = 'استمر';
$string['restorestage4'] = 'الإعدادات';
$string['restorestage4action'] = 'التالي';
$string['restorestage64'] = 'أكمل';
$string['restorestage64action'] = 'استمر';
$string['restorestage8'] = 'مخطط';
$string['restorestage8action'] = 'التالي';
$string['restoretarget'] = 'استرجاع الهدف';
$string['restoretocourse'] = 'الاستعادة للمساق :';
$string['restoretocurrentcourse'] = 'الاستعادة في هذا المقرر الدراسي';
$string['restoretocurrentcourseadding'] = 'دمج المقرر الاحتياطي مع هذا المقرر الدراسي';
$string['restoretocurrentcoursedeleting'] = 'احذف محتويات هذا المقرر الدراسي ثم قم باسترجاعه';
$string['restoretoexistingcourse'] = 'الاسترجاع إلى مساق موجود';
$string['restoretoexistingcourseadding'] = 'دمج المقرر الدراسي الاحتياطي مع المقرر الموجود';
$string['restoretoexistingcoursedeleting'] = 'حذف محتويات المقرر الدراسي الموجود ثم القيام بالاسترجاع';
$string['restoretonewcourse'] = 'الاسترجاع كمقرر جديد';
$string['restoringcourse'] = 'عملية الاسترجاع في تقدم';
$string['restoringcourseshortname'] = 'الاسترجاع';
$string['rootenrolmanual'] = 'الاستعادة كملتحقين يدوياً';
$string['rootsettingactivities'] = 'تضمين الأنشطة والموارد';
$string['rootsettinganonymize'] = 'عدم شخصنة معلومات المستخدمين';
$string['rootsettingbadges'] = 'تضمين الشارات';
$string['rootsettingblocks'] = 'تضمين الكتل';
$string['rootsettingcalendarevents'] = 'تضمين أحداث التقويم';
$string['rootsettingcomments'] = 'تضمين التعليقات';
$string['rootsettingcompetencies'] = 'تضمين الكفاءات';
$string['rootsettingcontentbankcontent'] = 'تضمين محتويات بنك المحتوى';
$string['rootsettingcustomfield'] = 'تضمين الحقول المخصصة';
$string['rootsettingenrolments'] = 'تضمين طرق الانضمام';
$string['rootsettingenrolments_always'] = 'نعم دائما';
$string['rootsettingenrolments_never'] = 'لا ، قم باستعادة المستخدمين كالتسجيلات اليدوية';
$string['rootsettingenrolments_withusers'] = 'نعم ، ولكن فقط إذا تم تضمين المستخدمين';
$string['rootsettingfiles'] = 'تضمين الملفات';
$string['rootsettingfilters'] = 'تضمين المنقحات';
$string['rootsettinggradehistories'] = 'تضمين ماضي التقديرات';
$string['rootsettinggroups'] = 'تضمين المجموعات والتجميعات';
$string['rootsettingimscc1'] = 'تحويل إلى IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'تحويل إلى IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'تضمين ملفات المقرر الدراسي القديمة';
$string['rootsettinglogs'] = 'تضمن سجلات وقوعات المقرر الدراسي';
$string['rootsettingpermissions'] = 'تضمين تجاوزات الصلاحيات';
$string['rootsettingquestionbank'] = 'تضمين بنك الأسئلة';
$string['rootsettingroleassignments'] = 'تضمن تعيينات أدوار المستخدمين';
$string['rootsettings'] = 'إعدادات الحفظ الاحتياطي';
$string['rootsettingusers'] = 'تضمين المستخدمين المنضمين';
$string['rootsettinguserscompletion'] = 'تضمين تفاصيل الإكمال للمستخدمين';
$string['samesitenotification'] = 'تم إنشاء هذه النسخة الاحتياطية بمسارات الملفات فقط، وليس بالملفات نفسها. ستعمل الاستعادة على هذه المسارات فقط.';
$string['sectionactivities'] = 'الأنشطة';
$string['sectioninc'] = 'تم تضمينها في الحفظ الاحتياطي (بدون معلومات المستخدمين)';
$string['sectionincanduser'] = 'تم التضمين في الحفظ الاحتياطي مع معلومات المستخدم';
$string['selectacategory'] = 'إختر التصنيف';
$string['selectacourse'] = 'إختر المقرر الدراسي';
$string['setting_course_fullname'] = 'اسم المقرر';
$string['setting_course_shortname'] = 'الاسم المختصر للمقرر الدراسي';
$string['setting_course_startdate'] = 'تاريخ بدء المقرر';
$string['setting_keep_groups_and_groupings'] = 'أبقِ على المجموعات الحالية والتجميعات';
$string['setting_keep_roles_and_enrolments'] = 'أبق على الأدوار الحالية والانضمامات';
$string['setting_overwrite_conf'] = 'استبدال اعدادات المقرر';
$string['setting_overwrite_course_fullname'] = 'استبدال الاسم الكامل للمقرر الدراسي';
$string['setting_overwrite_course_shortname'] = 'استبدال الاسم المختصر للمقرر الدراسي';
$string['setting_overwrite_course_startdate'] = 'استبدال تاريخ بدء المقرر';
$string['showtypes'] = 'إظهار خيارات الأنواع';
$string['sitecourseformatwarning'] = 'هذه نسخة احتياطية لواجهة الموقع، لاحظ أن هذه النسخة لا يمكن استعادتها إلا إلى تلك الواجهة.';
$string['skiphidden'] = 'تخطى المقررات الدراسية المخفية';
$string['skiphiddenhelp'] = 'إختر إما تخطي المقررات الدراسية المخفية أو عدم تخطيها';
$string['skipmodifdays'] = 'تخطى المقررات الدراسية التي لم يتم تعديلها منذ';
$string['skipmodifdayshelp'] = 'إختر تخطي المقررات الدراسية التي لم يتم تعديلها منذ عدد معين من الأيام';
$string['skipmodifprev'] = 'تخطى المقررات الدراسية التي لم تتغير منذ الحفظ الاحتياطي السابق';
$string['skipmodifprevhelp'] = 'إختر فيما إذا كان ينبغي تخطي المقررات الدراسية التي لم يتم تعديلها منذ الحفظ الاحتياطي التلقائي الأخير. هذا يتطلب تمكين السجل.';
$string['status'] = 'الحالة';
$string['storagecourseandexternal'] = 'منطقة ملفات الحفظ الاحتياطي للمساق والمجلد المحدد';
$string['storagecourseonly'] = 'منطقة ملفات الحفظ الاحتياطي للمساق';
$string['storageexternalonly'] = 'المجلد المحدد للحفظ الاحتياطي التلقائي';
$string['successful'] = 'نجح الحفظ الاحتياطي';
$string['successfulcopy'] = 'النسخ ناجح';
$string['successfulrestore'] = 'استعادة ناجحة';
$string['timetaken'] = 'الوقت المستغرق';
$string['title'] = 'العنوان';
$string['totalcategorysearchresults'] = 'مجموع الفئات : {$a}';
$string['totalcoursesearchresults'] = 'إجمالي المقررات الدراسية: {$a}';
$string['undefinedrolemapping'] = 'تعيين الأدوار غير مُعرَّف للنموذج الأصلي \'{$a}\'.';
$string['unnamedsection'] = 'قسم غير مُسمَّى';
$string['userdata'] = 'تضمين بيانات المستخدمين';
$string['userdata_help'] = 'إذا تم تمكينه، فالبيانات مثل منشورات المنتديات، تسليم الواجبات... إلخ. سيتم نسخها إلى المقرر الجديد لتصير متاحة إلى أي مستخدمين يمتلكون الأدوار المشمولة بالإعداد \'تضمين طرق ضم المستخدمين\'.';
$string['userinfo'] = 'معلومات المُستخدم';
