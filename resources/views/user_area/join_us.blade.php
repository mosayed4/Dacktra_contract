@extends('layouts.app')
@section('styles')
<style>
    .form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    font-size: 14px;
    outline: none; /* Remove default outline */
    transition: border-color 0.2s, box-shadow 0.2s; /* Smooth transition for border and shadow */
}

.form-group input:hover,
.form-group input:focus {
    border-color: #2a59d8; /* Blue border color on hover and focus */
    box-shadow: 0 0 0 2px rgba(49, 100, 244, 0.2); /* Blue shadow for outline effect */
}

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
                            <form class="form" method="post" >
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

                                    <div class="col-lg-12" >
                                        <div class="form group">
                                            <select name="department"  class="nice-select" style="margin-top:10px !important; ">
                                                <option id="pp" value="">Department</option>
                                                <option id="pp" value="1">Dentist</option>
                                                <option id="pp" value="2">Dermatology</option>
                                                <option id="pp" value="3">Pediatrics</option>
                                                <option id="pp" value="4">Brain and nerve</option>
                                                <option id="pp" value="5">Psychiatry</option>
                                                <option id="pp" value="6">Orthopedist</option>
                                                <option id="pp" value="7">Obstetrics and gynecology</option>
                                                <option id="pp" value="8">Otolaryngologist</option>
                                                <option id="pp" value="9">Cardiology and Vascular</option>
                                                <option id="pp" value="10">Internist</option>
                                                <option id="pp" value="11">Oncology</option>
                                                <option id="pp" value="12">Nutrition and obesity</option>
                                                <option id="pp" value="13">Pulmonologist</option>
                                                <option id="pp" value="14">Ophthalmology</option>
                                                <option id="pp" value="15">Plastic surgery</option>
                                                <option id="pp" value="16">Diabetes and Endocrinology</option>
                                                <option id="pp" value="17">Urologist</option>
                                                <option id="pp" value="18">Andrologists</option>
                                                <option id="pp" value="19">Hepatology</option>
                                                <option id="pp" value="20">Physiotherapy</option>
                                                <option id="pp" value="21">General surgery</option>
                                                <option id="pp" value="22">Neurosurgeon</option>
                                                <option id="pp" value="23">Hematology</option>
                                                <option id="pp" value="24">Orthodontics</option>
                                                <option id="pp" value="25">Speech language</option>
                                                <option id="pp" value="26">Periodontics</option>
                                                <option id="pp" value="27">Cosmetic Dentistry</option>
                                                <option id="pp" value="28">Oral Oncology</option>
                                                <option id="pp" value="29">Geriatric medicine</option>
                                                <option id="pp" value="30">Audiology</option>
                                                <option id="pp" value="31">Neurobrain surgery</option>
                                                <option id="pp" value="32">Spine surgery</option>
                                                <option id="pp" value="33">ICSI and IVF</option>
                                                <option id="pp" value="34">Rheumatology</option>
                                                <option id="pp" value="35">Endocrinology</option>
                                                <option id="pp" value="36">Gastroenterology</option>
                                                <option id="pp" value="37">Pediatric surgery</option>
                                                <option id="pp" value="38">Cardiothoracic surgery</option>
                                                <option id="pp" value="39">Allergy and immunology</option>
                                                <option id="pp" value="40">Nephrology</option>
                                                <option id="pp" value="41">Family medicine</option>
                                                <option id="pp" value="42">General medicine</option>
                                                <option id="pp" value="43">Orthopedics surgery</option>
                                                <option id="pp" value="44">Pain management medicine</option>
                                                <option id="pp" value="45">Vascular Surgery</option>
                                                <option id="pp" value="46">Pets</option>
                                                <option id="pp" value="47">Oncology surgery</option>
                                                <option id="pp" value="48">Vascular</option>
                                                <option id="pp" value="49">Cardiology</option>
                                                <option id="pp" value="50">Life coach</option>
                                                <option id="pp" value="51">Addiction problems consultant</option>
                                                <option id="pp" value="52">Sexual problems consultant</option>
                                                <option id="pp" value="53">Tooth implant</option>
                                                <option id="pp" value="54">Skin beautification</option>
                                                <option id="pp" value="55">Reproductive system</option>
                                                <option id="pp" value="56">Therapeutic feeding</option>
                                                <option id="pp" value="57">Growth monitoring</option>
                                                <option id="pp" value="58">Psychiatry</option>
                                                <option id="pp" value="59">Nerve planning</option>
                                                <option id="pp" value="60">Addiction</option>
                                                <option id="pp" value="61">Behavior modification</option>
                                                <option id="pp" value="62">Family Guidance</option>
                                                <option id="pp" value="63">Rheumatism</option>
                                                <option id="pp" value="64">Athletic Medicine</option>
                                                <option id="pp" value="65">Spine surgery</option>
                                                <option id="pp" value="66">Joints</option>
                                                <option id="pp" value="67">Surgery</option>
                                                <option id="pp" value="68">IVF</option>
                                                <option id="pp" value="69">Endoscopy</option>
                                                <option id="pp" value="70">Rhinoplasty</option>
                                                <option id="pp" value="71">Gastroenterology</option>
                                                <option id="pp" value="72">Diabetes</option>
                                                <option id="pp" value="73">Hepatology</option>
                                                <option id="pp" value="74">Kidney diseases</option>
                                                <option id="pp" value="75">Cardiology</option>
                                                <option id="pp" value="76">Blood & Immunology</option>
                                                <option id="pp" value="77">Ophthalmic surgery & laser</option>
                                                <option id="pp" value="78">Liposuction</option>
                                                <option id="pp" value="79">Burn treatment</option>
                                                <option id="pp" value="80">Pediatric</option>
                                                <option id="pp" value="81">Endoscopy</option>
                                                <option id="pp" value="82">Kidney diseases</option>
                                                <option id="pp" value="83">Cardiology</option>
                                                <option id="pp" value="84">Blood & Immunology</option>
                                                <option id="pp" value="85">Ophthalmic surgery & laser</option>
                                                <option id="pp" value="86">Liposuction</option>
                                                <option id="pp" value="87">Burn treatment</option>
                                                <option id="pp" value="88">Pediatric</option>
                                                <option id="pp" value="89">Endoscopy</option>
                                                <option id="pp" value="90">Kidney diseases</option>
                                                <option id="pp" value="91">Cardiology</option>
                                                <option id="pp" value="92">Blood & Immunology</option>
                                                <option id="pp" value="93">Ophthalmic surgery & laser</option>
                                                <option id="pp" value="94">Liposuction</option>
                                                <option id="pp" value="95">Burn treatment</option>
                                                <option id="pp" value="96">Pediatric</option>
                                                <option id="pp" value="97">Endoscopy</option>
                                                <option id="pp" value="98">Sterility</option>
                                                <option id="pp" value="99">Gastroenterology</option>
                                                <option id="pp" value="100">Internist</option>
                                                <option id="pp" value="101">Nutrition</option>
                                                <option id="pp" value="102">Rheumatism</option>
                                                <option id="pp" value="103">Oncology</option>
                                                <option id="pp" value="104">Endocrinology</option>
                                                <option id="pp" value="105">Nutrition</option>
                                                <option id="pp" value="106">Behavior modification</option>
                                                <option id="pp" value="107">Spine surgery</option>
                                                <option id="pp" value="108">Pediatric</option>
                                                <option id="pp" value="109">Nutrition</option>
                                                <option id="pp" value="110">Internist</option>
                                                <option id="pp" value="111">Liver diseases</option>
                                                <option id="pp" value="112">Rheumatology</option>
                                                <option id="pp" value="113">Spine surgery</option>
                                                <option id="pp" value="114">Athletic Medicine</option>
                                                <option id="pp" value="115">Joints</option>
                                                <option id="pp" value="116">Diabetes</option>
                                                <option id="pp" value="117">Hepatology</option>
                                                <option id="pp" value="118">Pets Vaccinations</option>
                                                <option id="pp" value="119">Surgery</option>
                                                <option id="pp" value="120">Pets Grooming</option>
                                                <option id="pp" value="121">Difficulty learning</option>
                                                <option id="pp" value="122">Oral and MaxillSurgery</option>
                                                <option id="pp" value="123">اخصائي التجميل و الليزر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                        <div class="checkbox">
                                            <label class="checkbox-inline" for="2">
                                                <input name="news" id="2" type="checkbox">Do you want to subscribe to our Newsletter?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>

            </div>
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-12">
                        <div class="single-info">
                            <i class="icofont icofont-ui-call"></i>
                            <div class="content">
                                <h3>+(000) 1234 56789</h3>
                                <p>info@company.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12">
                        <div class="single-info">
                            <i class="icofont-google-map"></i>
                            <div class="content">
                                <h3>2 Fir e Brigade Road</h3>
                                <p>Chittagonj, Lakshmipur</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12">
                        <div class="single-info">
                            <i class="icofont icofont-wall-clock"></i>
                            <div class="content">
                                <h3>Mon - Sat: 8am - 5pm</h3>
                                <p>Sunday Closed</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

@endsection

