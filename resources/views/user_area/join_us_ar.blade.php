@extends('layouts.app')
@section('header_left_side')
<a href="{{ route('english.form') }}" style="color: #1A76D1;font-size:18px;font-weight:600">English</a>
@endsection
@section('header_right_side')
<a class="navbar-brand"><img src="{{asset('user_area/white_logoo.png')}}" alt="logo" style="height:100px;"/></a>
@endsection
@section('styles')
<style>
.contact-us .contact-us-form h2:before{
	position:absolute !important;
	content:"" !important;
	right:0 !important;
	bottom:0 !important;
	height:2px !important;
	width:50px !important;
	background:#1A76D1 !important;
}

.checkbox-container label {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.checkbox-container input[type="checkbox"] {
    margin: 0 5px;
}

/* LTR specific styles */
.checkbox-container.ltr label {
    direction: ltr;
}

.checkbox-container.ltr input[type="checkbox"] {
    margin-right: 10px; /* Adjust the padding for LTR */
}

/* RTL specific styles */
.checkbox-container.rtl label {
    direction: rtl;
}

.checkbox-container.rtl input[type="checkbox"] {
    margin-left: 10px; /* Adjust the padding for RTL */
}
.nice-select {
    width: 100%;
    padding: 10px !important;
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
    background-color: #fff !important;
    direction: rtl !important;
    text-align: right !important;
    font-size: 16px !important;
}
.nice-select option {
    text-align: right !important;
    direction: rtl !important;
    padding: 10px !important;
}

.nice-select .option {
    cursor: pointer !important;
    font-weight: 400 !important;
    line-height: 40px !important;
    list-style: none !important;
    padding-left: 18px !important;
    padding-right: 29px !important;
    text-align: right !important; /* Right align text */
    transition: all 0.2s !important;
}
.nice-select:after {

    display: block !important;
    position: absolute;
    right:460px;

}


</style>
@endsection
@section('content')
<!-- Start Contact Us -->
<section class="contact-us section" style="direction: rtl; text-align: right;">
    <div class="container">
        <div class="inner">
            <div class="col-lg-12">
                <div class="contact-us-form" >
                    <h2 style="direction: rtl; text-align: right;">انضم إلينا</h2>
                    <p style="direction: rtl; text-align: right;font-size:18px;">إذا كان لديك أي أسئلة، فلا تتردد في التواصل معنا.</p>
                    <!-- Form -->
                    <form class="form" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="الاسم" required="" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" >
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
  
@section('styles')
<style>

</style>
@endsection

@section('content')
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="col-lg-12">
                <div class="contact-us-form">
                    <h2>{{ __('messages.join_us') }}</h2>
                    <p>{{ __('messages.contact') }}</p>
                    <!-- Form -->
                    <form class="form" method="post" action="{{ route('form.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="{{ __('messages.name') }}" required="">
  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
  
                                    <input type="text" name="phone" placeholder="الهاتف" required="">
  
                                    <input type="email" name="email" placeholder="{{ __('messages.email') }}" required="">
  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
  
                                    <input type="password" name="password" placeholder="كلمة المرور" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="department" class="nice-select" >
                                        <option value="">القسم</option>
                                        <option value="طبيب أسنان">طبيب أسنان</option>
                                        <option value="الجراحة العامة">الجراحة العامة</option>
                                        <option value="جراحة التجميل">جراحة التجميل</option>
                                        <option value="الأمراض الجلدية">الأمراض الجلدية</option>
                                        <option value="طب الأعصاب">طب الأعصاب</option>
                                        <option value="طب الأطفال">طب الأطفال</option>
                                        <option value="طب العيون">طب العيون</option>
                                        <option value="جراحة المسالك البولية">جراحة المسالك البولية</option>
                                        <option value="طب النساء والتوليد">طب النساء والتوليد</option>
                                        <option value="طب العظام">طب العظام</option>
                                        <option value="طب القلب">طب القلب</option>
                                        <option value="الأنف والأذن والحنجرة">الأنف والأذن والحنجرة</option>
                                        <option value="علم الأورام">علم الأورام</option>
                                        <option value="التخدير">التخدير</option>
                                        <option value="جراحة الأعصاب">جراحة الأعصاب</option>
                                        <option value="العناية المركزة">العناية المركزة</option>
                                        <option value="الطوارئ">الطوارئ</option>
                                        <option value="طب الشيخوخة">طب الشيخوخة</option>
                                        <option value="الأشعة">الأشعة</option>
                                        <option value="علم الأمراض">علم الأمراض</option>
                                        <option value="الطب النووي">الطب النووي</option>
                                        <option value="أمراض الدم">أمراض الدم</option>
                                        <option value="الروماتيزم">الروماتيزم</option>
                                        <option value="الأمراض المعدية">الأمراض المعدية</option>
                                        <option value="الغدد الصماء">الغدد الصماء</option>
                                        <option value="طب الكلى">طب الكلى</option>
                                        <option value="طب الرئة">طب الرئة</option>
                                        <option value="الحساسية">الحساسية</option>
                                        <option value="أمراض الجهاز الهضمي">أمراض الجهاز الهضمي</option>
                                        <option value="علم الأدوية السريرية">علم الأدوية السريرية</option>
                                        <option value="طب الأسرة">طب الأسرة</option>
                                        <option value="الصحة العامة">الصحة العامة</option>
                                        <option value="صحة العمل">صحة العمل</option>
                                        <option value="إدارة الصحة">إدارة الصحة</option>
                                        <option value="الطب الشرعي">الطب الشرعي</option>
                                        <option value="طب الرياضة">طب الرياضة</option>
                                        <option value="علم السمع">علم السمع</option>
                                        <option value="جراحة الدماغ والأعصاب">جراحة الدماغ والأعصاب</option>
                                        <option value="جراحة العمود الفقري">جراحة العمود الفقري</option>
                                        <option value="تقنيات الإنجاب المساعدة">تقنيات الإنجاب المساعدة </option>
                                        <option value="الروماتيزم">الروماتيزم</option>
                                        <option value="الغدد الصماء">الغدد الصماء</option>
                                        <option value="جراحة الأطفال">جراحة الأطفال</option>
                                        <option value="جراحة القلب والصدر">جراحة القلب والصدر</option>
                                        <option value="الحساسية والمناعة">الحساسية والمناعة</option>
                                        <option value="طب الكلى">طب الكلى</option>
                                        <option value="طب الأسرة">طب الأسرة</option>
                                        <option value="الطب العام">الطب العام</option>
                                        <option value="جراحة العظام">جراحة العظام</option>
                                        <option value="طب إدارة الألم">طب إدارة الألم</option>
                                        <option value="جراحة الأوعية الدموية">جراحة الأوعية الدموية</option>
                                        <option value="الحيوانات الأليفة">الحيوانات الأليفة</option>
                                        <option value="جراحة الأورام">جراحة الأورام</option>
                                        <option value="الأوعية الدموية">الأوعية الدموية</option>
                                        <option value="طب القلب">طب القلب</option>
                                        <option value="استشاري مشاكل الإدمان">استشاري مشاكل الإدمان</option>
                                        <option value="استشاري المشاكل الجنسية">استشاري المشاكل الجنسية</option>
                                        <option value="زرع الأسنان">زرع الأسنان</option>
                                        <option value="تجميل البشرة">تجميل البشرة</option>
                                        <option value="جهاز التناسل">جهاز التناسل</option>
                                        <option value="التغذية العلاجية">التغذية العلاجية</option>
                                        <option value="مراقبة النمو">مراقبة النمو</option>
                                        <option value="الطب النفسي">الطب النفسي</option>
                                        <option value="زرع الأعصاب">زرع الأعصاب</option>
                                        <option value="الإدمان">الإدمان</option>
                                        <option value="تعديل السلوك">تعديل السلوك</option>
                                        <option value="الإرشاد الأسري">الإرشاد الأسري</option>
                                        <option value="الروماتيزم">الروماتيزم</option>
                                        <option value="الطب الرياضي">الطب الرياضي</option>
                                        <option value="جراحة العمود الفقري">جراحة العمود الفقري</option>
                                        <option value="المفاصل">المفاصل</option>
                                        <option value="التخصيب في المختبر (IVF)">التخصيب في المختبر (IVF)</option>
                                        <option value="مرض السكري">مرض السكري</option>
                                        <option value="أمراض الكلى">أمراض الكلى</option>
                                        <option value="طب القلب">طب القلب</option>
                                        <option value="الدم والمناعة">الدم والمناعة</option>
                                        <option value="جراحة العيون والليزر">جراحة العيون والليزر</option>
                                        <option value="شفط الدهون">شفط الدهون</option>
                                        <option value="علاج الحروق">علاج الحروق</option>
                                        <option value="الطبيب الداخلي">الطبيب الداخلي</option>
                                        <option value="التغذية">التغذية</option>
                                        <option value="جراحة العمود الفقري">جراحة العمود الفقري</option>
                                        <option value="طب الأطفال">طب الأطفال</option>
                                        <option value="التنظير الداخلي">التنظير الداخلي</option>
                                        <option value="أمراض الكبد">أمراض الكبد</option>
                                        <option value="الروماتيزم">الروماتيزم</option>
                                        <option value="الطب الرياضي">الطب الرياضي</option>
                                        <option value="المفاصل">المفاصل</option>
                                        <option value="مرض السكري">مرض السكري</option>
                                        <option value="الأشعة الصوتية">الأشعة الصوتية</option>
                                        <option value="تجميل الحيوانات الأليفة">تجميل الحيوانات الأليفة</option>
                                        <option value="صعوبة التعلم">صعوبة التعلم</option>
                                        
                                        <option value="جراحة الفم والفك">جراحة الفم والفك</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-container" style="font-size:18px;">
                                    <label>
                                        <input type="checkbox" name="clinic" value="clinic">
                                        العيادة
                                    </label>
                                    <label>
                                        <input type="checkbox" name="home_visit" value="home_visit">
                                        الزيارة المنزلية
                                    </label>
                                    <label>
                                        <input type="checkbox" name="online_consultant" value="online_consultant">
                                        الاستشارة عبر الإنترنت
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="city" class="nice-select">
                                        <option value="">المدينة</option>
                                        <option value="القاهرة">القاهرة</option>
                                        <option value="الجيزة">الجيزة</option>
                                        <option value="الإسكندرية">الإسكندرية</option>
                                        <option value="قنا">قنا</option>
                                        <option value="كفر الشيخ">كفر الشيخ</option>
                                        <option value="سيناء">سيناء</option>
                                        <option value="المنيا">المنيا</option>
                                        <option value="بورسعيد">بورسعيد</option>
                                        <option value="السويس">السويس</option>
                                        <option value="الأقصر">الأقصر</option>
                                        <option value="الدقهلية">الدقهلية</option>
                                        <option value="الغربية">الغربية</option>
                                        <option value="أسيوط">أسيوط</option>
                                        <option value="القليوبية">القليوبية</option>
                                        <option value="الإسماعيلية">الإسماعيلية</option>
                                        <option value="الفيوم">الفيوم</option>
                                        <option value="الشرقية">الشرقية</option>
                                        <option value="أسوان">أسوان</option>
                                        <option value="دمياط">دمياط</option>
                                        <option value="البحيرة">البحيرة</option>
                                        <option value="سوهاج">سوهاج</option>
                                        <option value="البحر الأحمر">البحر الأحمر</option>
                                        <option value="المنوفية">المنوفية</option>
                                        <option value="مطروح">مطروح</option>
                                        <option value="الوادي الجديد">الوادي الجديد</option>
                                        <option value="الرياض">الرياض</option>
                                        <option value="جدة">جدة</option>
                                        <option value="مكة المكرمة">مكة المكرمة</option>
                                        <option value="الساحل الشمالي">الساحل الشمالي</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text"  name="location" placeholder="الموقع" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة الشهادة العلمية * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="scientific_certificate_image" id="scientific-certificate" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة النقابة * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="syndicate_image" id="syndicate-image" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="syndicate-image-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Clinic Photos -->
                                <div class="form-group">
                                    <label style="font-size:18px;">صور العيادة *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="clinic_photos" id="clinic-photos" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label style="font-size:18px;">الشعار * </label>
                                <div class="file-input-container">
                                    <input type="file" name="logo" id="logo" required>
                                    <span class="file-input-label">اختر ملف</span>
                                </div>
                                <div class="file-name" id="logo-name">لم يتم اختيار ملف</div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="font-size:18px;">صورة الطبيب * </label>
                            <div class="file-input-container">
                                <input type="file" name="doctor_image" id="doctor-image" required>
                                <span class="file-input-label">اختر ملف</span>
                            </div>
                            <div class="file-name" id="doctor-image-name">لم يتم اختيار ملف</div>
                        </div>
                    </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label style="font-size:18px;">الرخصة المهنية * </label>
                        <div class="file-input-container">
                            <input type="file" name="professional_license" id="professional-license" required>
                            <span class="file-input-label">اختر ملف</span>
                        </div>
                        <div class="file-name" id="professional-license-name">لم يتم اختيار ملف</div>
                    </div>
                </div>
  
                                    <input type="text" name="phone" placeholder="{{ __('messages.phone') }}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="{{ __('messages.password') }}" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="department" class="nice-select">
                                        <option value="">{{ __('messages.department') }}</option>
                                        <option value="1">{{ __('messages.dentist') }}</option>
                                        <option value="2">{{ __('messages.general_surgery') }}</option>
                                        <option value="3">{{ __('messages.plastic_surgery') }}</option>
                                        <option value="4">{{ __('messages.dermatology') }}</option>
                                        <option value="5">{{ __('messages.neurology') }}</option>
                                        <option value="6">{{ __('messages.pediatrics') }}</option>
                                        <option value="7">{{ __('messages.ophthalmology') }}</option>
                                        <option value="8">{{ __('messages.urology') }}</option>
                                        <option value="9">{{ __('messages.gynecology') }}</option>
                                        <option value="10">{{ __('messages.orthopedics') }}</option>
                                        <option value="11">{{ __('messages.cardiology') }}</option>
                                        <option value="12">{{ __('messages.ent') }}</option>
                                        <option value="13">{{ __('messages.oncology') }}</option>
                                        <option value="14">{{ __('messages.anesthesia') }}</option>
                                        <option value="15">{{ __('messages.psychiatry') }}</option>
                                        <option value="16">{{ __('messages.neurosurgery') }}</option>
                                        <option value="17">{{ __('messages.icu') }}</option>
                                        <option value="18">{{ __('messages.emergency') }}</option>
                                        <option value="19">{{ __('messages.geriatrics') }}</option>
                                        <option value="20">{{ __('messages.radiology') }}</option>
                                        <option value="21">{{ __('messages.pathology') }}</option>
                                        <option value="22">{{ __('messages.nuclear_medicine') }}</option>
                                        <option value="23">{{ __('messages.hematology') }}</option>
                                        <option value="24">{{ __('messages.rheumatology') }}</option>
                                        <option value="25">{{ __('messages.infectious_diseases') }}</option>
                                        <option value="26">{{ __('messages.endocrinology') }}</option>
                                        <option value="27">{{ __('messages.nephrology') }}</option>
                                        <option value="28">{{ __('messages.pulmonology') }}</option>
                                        <option value="29">{{ __('messages.allergy') }}</option>
                                        <option value="30">{{ __('messages.gastroenterology') }}</option>
                                        <option value="31">{{ __('messages.clinical_pharmacology') }}</option>
                                        <option value="32">{{ __('messages.family_medicine') }}</option>
                                        <option value="33">{{ __('messages.public_health') }}</option>
                                        <option value="34">{{ __('messages.occupational_health') }}</option>
                                        <option value="35">{{ __('messages.health_management') }}</option>
                                        <option value="36">{{ __('messages.forensic_medicine') }}</option>
                                        <option value="37">{{ __('messages.sports_medicine') }}</option>
                                        <option value="38">{{ __('messages.geriatric_medicine') }}</option>
                                        <option value="39">{{ __('messages.audiology') }}</option>
                                        <option value="41">{{ __('messages.neurobrain_surgery') }}</option>
                                        <option value="42">{{ __('messages.spine_surgery') }}</option>
                                        <option value="43">{{ __('messages.icsi_ivf') }}</option>
                                        <option value="44">{{ __('messages.rheumatology') }}</option>
                                        <option value="45">{{ __('messages.endocrinology') }}</option>
                                        <option value="46">{{ __('messages.gastroenterology') }}</option>
                                        <option value="47">{{ __('messages.pediatric_surgery') }}</option>
                                        <option value="49">{{ __('messages.cardiothoracic_surgery') }}</option>
                                        <option value="50">{{ __('messages.allergy_immunology') }}</option>
                                        <option value="51">{{ __('messages.nephrology') }}</option>
                                        <option value="52">{{ __('messages.family_medicine') }}</option>
                                        <option value="53">{{ __('messages.general_medicine') }}</option>
                                        <option value="55">{{ __('messages.orthopedics_surgery') }}</option>
                                        <option value="57">{{ __('messages.pain_management') }}</option>
                                        <option value="58">{{ __('messages.vascular_surgery') }}</option>
                                        <option value="59">{{ __('messages.pets') }}</option>
                                        <option value="60">{{ __('messages.oncology_surgery') }}</option>
                                        <option value="61">{{ __('messages.vascular') }}</option>
                                        <option value="62">{{ __('messages.cardiology') }}</option>
                                        <option value="65">{{ __('messages.addiction_problems') }}</option>
                                        <option value="66">{{ __('messages.sexual_problems') }}</option>
                                        <option value="67">{{ __('messages.tooth_implant') }}</option>
                                        <option value="68">{{ __('messages.skin_beautification') }}</option>
                                        <option value="69">{{ __('messages.reproductive_system') }}</option>
                                        <option value="71">{{ __('messages.therapeutic_feeding') }}</option>
                                        <option value="73">{{ __('messages.growth_monitoring') }}</option>
                                        <option value="74">{{ __('messages.psychiatry') }}</option>
                                        <option value="75">{{ __('messages.nerve_implantation') }}</option>
                                        <option value="77">{{ __('messages.addiction') }}</option>
                                        <option value="78">{{ __('messages.behavior_modification') }}</option>
                                        <option value="79">{{ __('messages.family_guidance') }}</option>
                                        <option value="80">{{ __('messages.rheumatism') }}</option>
                                        <option value="81">{{ __('messages.athletic_medicine') }}</option>
                                        <option value="82">{{ __('messages.spine_surgery') }}</option>
                                        <option value="83">{{ __('messages.joints') }}</option>
                                        <option value="84">{{ __('messages.ivf') }}</option>
                                        <option value="85">{{ __('messages.endoscopy') }}</option>
                                        <option value="87">{{ __('messages.gastroenterology') }}</option>
                                        <option value="88">{{ __('messages.diabetes') }}</option>
                                        <option value="90">{{ __('messages.kidney_diseases') }}</option>
                                        <option value="91">{{ __('messages.cardiology') }}</option>
                                        <option value="93">{{ __('messages.blood_immunology') }}</option>
                                        <option value="94">{{ __('messages.ophthalmic_surgery_laser') }}</option>
                                        <option value="95">{{ __('messages.liposuction') }}</option>
                                        <option value="97">{{ __('messages.burn_treatment') }}</option>
                                        <option value="99">{{ __('messages.gastroenterology') }}</option>
                                        <option value="100">{{ __('messages.internist') }}</option>
                                        <option value="101">{{ __('messages.nutrition') }}</option>
                                        <option value="109">{{ __('messages.spine_surgery') }}</option>
                                        <option value="110">{{ __('messages.pediatric') }}</option>
                                        <option value="111">{{ __('messages.nutrition') }}</option>
                                        <option value="112">{{ __('messages.endoscopy') }}</option>
                                        <option value="113">{{ __('messages.liver_diseases') }}</option>
                                        <option value="115">{{ __('messages.rheumatology') }}</option>
                                        <option value="117">{{ __('messages.athletic_medicine') }}</option>
                                        <option value="118">{{ __('messages.joints') }}</option>
                                        <option value="119">{{ __('messages.diabetes') }}</option>
                                        <option value="120">{{ __('messages.echo') }}</option>
                                        <option value="121">{{ __('messages.pets_vaccinations') }}</option>
                                        <option value="123">{{ __('messages.pets_grooming') }}</option>
                                        <option value="124">{{ __('messages.difficulty_learning') }}</option>
                                        <option value="129">{{ __('messages.oral_maxill_surgery') }}</option>
                                    </select>
                                    
                                        <!-- أضف باقي الأقسام هنا -->
                                    </select>
                                </div>
                            </div>
                            <div class="checkbox-container">
                                <label>
                                    <input type="checkbox" name="clinic" value="clinic">
                                    {{ __('messages.clinic') }}
                                </label>
                                <label>
                                    <input type="checkbox" name="home_visit" value="home_visit">
                                    {{ __('messages.home_visit') }}
                                </label>
                                <label>
                                    <input type="checkbox" name="online_consultant" value="online_consultant">
                                    {{ __('messages.online_consultant') }}
                                </label>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="city" class="nice-select">
                                        <option value="">{{ __('messages.city') }}</option>
                                        <option value="1">{{ __('messages.cairo') }}</option>
                                        <option value="3">{{ __('messages.giza') }}</option>
                                        <option value="4">{{ __('messages.alexandria') }}</option>
                                        <option value="5">{{ __('messages.qena') }}</option>
                                        <option value="7">{{ __('messages.kafr_el_sheikh') }}</option>
                                        <option value="8">{{ __('messages.sinai') }}</option>
                                        <option value="9">{{ __('messages.minya') }}</option>
                                        <option value="10">{{ __('messages.port_said') }}</option>
                                        <option value="11">{{ __('messages.suez') }}</option>
                                        <option value="12">{{ __('messages.luxor') }}</option>
                                        <option value="13">{{ __('messages.dakahlia') }}</option>
                                        <option value="14">{{ __('messages.gharbia') }}</option>
                                        <option value="15">{{ __('messages.assuit') }}</option>
                                        <option value="6">{{ __('messages.qalyubia') }}</option>
                                        <option value="16">{{ __('messages.ismailia') }}</option>
                                        <option value="17">{{ __('messages.faiyum') }}</option>
                                        <option value="18">{{ __('messages.sharqia') }}</option>
                                        <option value="19">{{ __('messages.aswan') }}</option>
                                        <option value="20">{{ __('messages.damietta') }}</option>
                                        <option value="21">{{ __('messages.beheira') }}</option>
                                        <option value="22">{{ __('messages.sohag') }}</option>
                                        <option value="23">{{ __('messages.red_sea') }}</option>
                                        <option value="24">{{ __('messages.monufia') }}</option>
                                        <option value="25">{{ __('messages.matrouh') }}</option>
                                        <option value="27">{{ __('messages.wadi_geded') }}</option>
                                        <option value="28">{{ __('messages.riyadh') }}</option>
                                        <option value="29">{{ __('messages.jeddah') }}</option>
                                        <option value="30">{{ __('messages.mecca') }}</option>
                                        <option value="32">{{ __('messages.north_coast_sahel') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="location" placeholder="{{ __('messages.location') }}" required="">
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.scientific_certificate_image') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="scientific_certificate_image" id="scientific-certificate" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.syndicate_image') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="syndicate_image" id="syndicate-image" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="syndicate-image-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.clinic_photos') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="clinic_photos" id="clinic-photos" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.logo') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="logo" id="logo" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="logo-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.doctor_image') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="doctor_image" id="doctor-image" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="doctor-image-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('messages.professional_license') }}</label>
                                    <div class="file-input-container">
                                        <input type="file" name="professional_license" id="professional-license" required>
                                        <span class="file-input-label">{{ __('messages.choose_file') }}</span>
                                    </div>
                                    <div class="file-name" id="professional-license-name">{{ __('messages.no_file_chosen') }}</div>
                                </div>
                            </div>
                            
  

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="button">
  
                                        <button type="submit" class="btn">إرسال الآن</button>
  
                                        <button type="submit" class="btn">{{ __('messages.submit') }}</button>
  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
  
                    <!--/ End Form -->
  
  
                </div>
            </div>
        </div>
    </div>
</section>
  
<!--/ End Contact Us -->
  

  
@endsection
@section('scripts')
<script>
    document.getElementById('scientific-certificate').addEventListener('change', function() {
  
        const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
  
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
  
        document.getElementById('scientific-certificate-name').textContent = fileName;
    });

    document.getElementById('syndicate-image').addEventListener('change', function() {
  
        const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
        document.getElementById('syndicate-image-name').textContent = fileName;
    });
    document.getElementById('clinic-photos').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
  
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('syndicate-image-name').textContent = fileName;
    });
    document.getElementById('clinic-photos').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
  
    document.getElementById('clinic-photos-name').textContent = fileName;
});

document.getElementById('logo').addEventListener('change', function() {
  
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
  
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
  
    document.getElementById('logo-name').textContent = fileName;
});

document.getElementById('doctor-image').addEventListener('change', function() {
  
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
  
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
  
    document.getElementById('doctor-image-name').textContent = fileName;
});

document.getElementById('professional-license').addEventListener('change', function() {
  
    const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار ملف';
  
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
  
    document.getElementById('professional-license-name').textContent = fileName;
});
</script>

@endsection
