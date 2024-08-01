@extends('layouts.app')
@section('styles')
<style>

</style>
@endsection

@section('content')
<!-- Start Contact Us -->
    <section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="col-lg-12">
                <div class="contact-us-form">
                    <h2>Join With Us</h2>
                    <p>If you have any questions please feel free to contact with us.</p>
                    <!-- Form -->
                    <form class="form" method="post"  action=>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="department" class="nice-select">
                                        <option value="">Department</option>
                                        <option value="1">Dentist</option>
                                        <option value="2">General surgery</option>
                                        <option value="3">Plastic surgery</option>
                                        <option value="4">Dermatology</option>
                                        <option value="5">Neurology</option>
                                        <option value="6">Pediatrics</option>
                                        <option value="7">Ophthalmology</option>
                                        <option value="8">Urology</option>
                                        <option value="9">Gynecology</option>
                                        <option value="10">Orthopedics</option>
                                        <option value="11">Cardiology</option>
                                        <option value="12">ENT</option>
                                        <option value="13">Oncology</option>
                                        <option value="14">Anesthesia</option>
                                        <option value="15">Psychiatry</option>
                                        <option value="16">Neurosurgery</option>
                                        <option value="17">ICU</option>
                                        <option value="18">Emergency</option>
                                        <option value="19">Geriatrics</option>
                                        <option value="20">Radiology</option>
                                        <option value="21">Pathology</option>
                                        <option value="22">Nuclear medicine</option>
                                        <option value="23">Hematology</option>
                                        <option value="24">Rheumatology</option>
                                        <option value="25">Infectious diseases</option>
                                        <option value="26">Endocrinology</option>
                                        <option value="27">Nephrology</option>
                                        <option value="28">Pulmonology</option>
                                        <option value="29">Allergy</option>
                                        <option value="30">Gastroenterology</option>
                                        <option value="31">Clinical pharmacology</option>
                                        <option value="32">Family medicine</option>
                                        <option value="33">Public health</option>
                                        <option value="34">Occupational health</option>
                                        <option value="35">Health management</option>
                                        <option value="36">Forensic medicine</option>
                                        <option value="37">Sports medicine</option>
                                        <option value="38">Geriatric medicine</option>
                                        <option value="39">Audiology</option>
                                        <option value="41">Neurobrain surgery</option>
                                        <option value="42">Spine surgery</option>
                                        <option value="43">ICSI and IVF</option>
                                        <option value="44">Rheumatology</option>
                                        <option value="45">Endocrinology</option>
                                        <option value="46">Gastroenterology</option>
                                        <option value="47">Pediatric surgery</option>
                                        <option value="49">Cardiothoracic surgery</option>
                                        <option value="50">Allergy and immunology</option>
                                        <option value="51">Nephrology</option>
                                        <option value="52">Family medicine</option>
                                        <option value="53">General medicine</option>
                                        <option value="55">Orthopedics surgery</option>
                                        <option value="57">Pain management medicine</option>
                                        <option value="58">Vascular Surgery</option>
                                        <option value="59">Pets</option>
                                        <option value="60">Oncology surgery</option>
                                        <option value="61">Vascular</option>
                                        <option value="62">Cardiology</option>
                                        <option value="65">Addiction problems consultant</option>
                                        <option value="66">Sexual problems consultant</option>
                                        <option value="67">Tooth implant</option>
                                        <option value="68">Skin beautification</option>
                                        <option value="69">Reproductive system</option>
                                        <option value="71">Therapeutic feeding</option>
                                        <option value="73">Growth monitoring</option>
                                        <option value="74">Psychiatry</option>
                                        <option value="75">Nerve implantation</option>
                                        <option value="77">Addiction</option>
                                        <option value="78">Behavior modification</option>
                                        <option value="79">Family Guidance</option>
                                        <option value="80">Rheumatism</option>
                                        <option value="81">Athletic Medicine</option>
                                        <option value="82">Spine surgery</option>
                                        <option value="83">Joints</option>
                                        <option value="84">IVF</option>
                                        <option value="85">Endoscopy</option>
                                        <option value="87">Gastroenterology</option>
                                        <option value="88">Diabetes</option>
                                        <option value="89"></option>
                                        <option value="90">Kidney diseases</option>
                                        <option value="91">Cardiology</option>
                                        <option value="93">Blood & Immunology</option>
                                        <option value="94">Ophthalmic surgery & laser</option>
                                        <option value="95">Liposuction</option>
                                        <option value="97">Burn treatment</option>
                                        <option value="99">Gastroenterology</option>
                                        <option value="100">Internist</option>
                                        <option value="101">Nutrition</option>
                                        <option value="109">Spine surgery</option>
                                        <option value="110">Pediatric</option>
                                        <option value="111">Nutrition</option>
                                        <option value="112">Endoscopy</option>
                                        <option value="113">Liver diseases</option>
                                        <option value="115">Rheumatology</option>
                                        <option value="117">Athletic Medicine</option>
                                        <option value="118">Joints</option>
                                        <option value="119">Diabetes</option>
                                        <option value="120">Echo</option>
                                        <option value="121">Pets Vaccinations</option>
                                        <option value="123">Pets Grooming</option>
                                        <option value="124">Difficulty learning</option>
                                        <option value="129">Oral and MaxillSurgery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-container">
                                    <label>
                                        <input type="checkbox" name="clinic" value="clinic">
                                        Clinic
                                    </label>
                                    <label>
                                        <input type="checkbox" name="home_visit" value="home_visit">
                                        Home Visit
                                    </label>
                                    <label>
                                        <input type="checkbox" name="online_consultant" value="online_consultant">
                                        Online Consultant
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="city" class="nice-select">
                                        <option value="">City</option>
                                        <option value="1">Cairo</option>
                                        <option value="3">Giza</option>
                                        <option value="4">Alexandria</option>
                                        <option value="5">Qena</option>
                                        <option value="7">Kafr el-Sheikh</option>
                                        <option value="8">Sinai</option>
                                        <option value="9">Minya</option>
                                        <option value="10">Port Said</option>
                                        <option value="11">Suez</option>
                                        <option value="12">Luxor</option>
                                        <option value="13">Dakahlia</option>
                                        <option value="14">Gharbia</option>
                                        <option value="15">Assiut</option>
                                        <option value="6">Qalyubia</option>
                                        <option value="16">Ismailia</option>
                                        <option value="17">Faiyum</option>
                                        <option value="18">Sharqia</option>
                                        <option value="19">Aswan</option>
                                        <option value="20">Damietta</option>
                                        <option value="21">Beheira</option>
                                        <option value="22">Sohag</option>
                                        <option value="23">Red Sea</option>
                                        <option value="24">Monufia</option>
                                        <option value="25">Matrouh</option>
                                        <option value="27">Wadi Geded</option>
                                        <option value="28">Riyadh</option>
                                        <option value="29">Jeddah</option>
                                        <option value="30">Mecca</option>
                                        <option value="32">North Coast - Sahel</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text"  name="location" placeholder="Location" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Scientific Certificate Image * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="scientific_certificate_image" id="scientific-certificate" required>
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="scientific-certificate-name">No file chosen</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Syndicate Image * </label>
                                    <div class="file-input-container">
                                        <input type="file" name="syndicate_image" id="syndicate-image" required>
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="syndicate-image-name">No file chosen</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Clinic Photos -->
                                <div class="form-group">
                                    <label>Clinic Photos *</label>
                                    <div class="file-input-container">
                                        <input type="file" name="clinic_photos" id="clinic-photos" required>
                                        <span class="file-input-label">Choose File</span>
                                    </div>
                                    <div class="file-name" id="clinic-photos-name">No file chosen</div>
                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Logo * </label>
                                <div class="file-input-container">
                                    <input type="file" name="logo" id="logo" required>
                                    <span class="file-input-label">Choose File</span>
                                </div>
                                <div class="file-name" id="logo-name">No file chosen</div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Doctor Image * </label>
                            <div class="file-input-container">
                                <input type="file" name="doctor_image" id="doctor-image" required>
                                <span class="file-input-label">Choose File</span>
                            </div>
                            <div class="file-name" id="doctor-image-name">No file chosen</div>
                        </div>
                    </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Professional License * </label>
                        <div class="file-input-container">
                            <input type="file" name="professional_license" id="professional-license" required>
                            <span class="file-input-label">Choose File</span>
                        </div>
                        <div class="file-name" id="professional-license-name">No file chosen</div>
                    </div>
                </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">Submit Now</button>
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
