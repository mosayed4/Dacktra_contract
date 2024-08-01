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
                    <form class="form" method="post"  action="{{ route('doctors.save') }}>
                        @csrf 
                        <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="الاسم" placeholder="الاسم" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="البريد" placeholder="البريد الإلكتروني" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="الهاتف" placeholder="رقم الهاتف" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="المرور" placeholder="كلمة المرور" required="">
                                        </div>
                                    </div>
                                </div>

                          

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="القسم" class="nice-select" >
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
                                        <input type="checkbox" name="عمل" value="العيادة">
                                        العيادة
                                    </label>
                                    <label>
                                        <input type="checkbox" name="عمل" value="الزيارة">
                                        الزيارة المنزلية
                                    </label>
                                    <label>
                                        <input type="checkbox" name="عمل" value="الاستشارة">
                                        الاستشارة عبر الإنترنت
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="المدينة" class="nice-select">
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
                                    <input type="text"  name="الموقع" placeholder="الموقع" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة الشهادة العلمية * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="الشهادة-العلمية" id="scientific-certificate" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label style="font-size:18px;">صورة النقابة * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="كارنيه-النقابة" id="syndicate-image" required>
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
                                        <input type="file" name="صور-العيادة" id="clinic-photos" required>
                                        <span class="file-input-label">اختر ملف</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">لم يتم اختيار ملف</div>
                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label style="font-size:18px;">الشعار * </label>
                                <div class="file-input-container">
                                    <input type="file" name="الشعار" id="logo" required>
                                    <span class="file-input-label">اختر ملف</span>
                                </div>
                                <div class="file-name" id="logo-name">لم يتم اختيار ملف</div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="font-size:18px;">صورة الطبيب * </label>
                            <div class="file-input-container">
                                <input type="file" name="صوره-الطبيب" id="doctor-image" required>
                                <span class="file-input-label">اختر ملف</span>
                            </div>
                            <div class="file-name" id="doctor-image-name">لم يتم اختيار ملف</div>
                        </div>
                    </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label style="font-size:18px;">الرخصة المهنية * </label>
                        <div class="file-input-container">
                            <input type="file" name="الرخصه-المهنيه" id="professional-license" required>
                            <span class="file-input-label">اختر ملف</span>
                        </div>
                        <div class="file-name" id="professional-license-name">لم يتم اختيار ملف</div>
                    </div>
                </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="button">
  
                                        <button type="submit" class="btn">إرسال الآن</button>
  
  
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
