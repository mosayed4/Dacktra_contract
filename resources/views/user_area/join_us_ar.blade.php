@extends('layouts.app')
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
                                    <input type="email" name="email" placeholder="{{ __('messages.email') }}" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
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
                                        <button type="submit" class="btn">{{ __('messages.submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script>
    document.getElementById('scientific-certificate').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('scientific-certificate-name').textContent = fileName;
    });

    document.getElementById('syndicate-image').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        document.getElementById('syndicate-image-name').textContent = fileName;
    });
    document.getElementById('clinic-photos').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
    document.getElementById('clinic-photos-name').textContent = fileName;
});

document.getElementById('logo').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
    document.getElementById('logo-name').textContent = fileName;
});

document.getElementById('doctor-image').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
    document.getElementById('doctor-image-name').textContent = fileName;
});

document.getElementById('professional-license').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
    document.getElementById('professional-license-name').textContent = fileName;
});
</script>

@endsection
