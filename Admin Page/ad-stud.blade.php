@extends('layout.admin')

@section ('style')
<link rel="stylesheet" href={{  asset('css/admin/adminNew/ad-stud.css' ) }}>

@endsection

@section ('content')
<div class="coprofile">
    <div id="rectangle">
        <div class="coname">
        <h1>Carla Smith</h1>
        </div>
    </div>
    <div id="profile">
        <img src="img/carla.png">
    </div>
        <div class="about">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad <br>minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br>commodo consequat. </p>
        </div>
    <ul>
        <li>
            <i class='bx bxl-facebook-circle' ></i>
        </li>
        <li>
            <i class='bx bxl-twitter' ></i>
        </li>
        <li>
            <i class='bx bxl-linkedin-square' ></i>
        </li>
        <li>
            <i class='bx bx-globe' ></i>
        </li>
    </ul>
    <div class="main-box-content-wrapper">
        <h3>BASIC INFORMATION</h3>
        <div class="fields-container">
            <div class="fields-orientation">
                <div class="label-text-combo firstname">
                    <h4>First Name</h4>
                    <input type="text" readonly>
                </div>
                <div class="label-text-combo middleinitial">
                    <h4>M.I.</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo lastname">
                    <h4>Last Name</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo age">
                    <h4>Age</h4>
                    <input type="text">
                </div>
            </div>
            <div class="label-text-combo address">
                <h4>Address</h4>
                <input type="text">
            </div>
            <div class="fields-orientation">
                <div class="label-text-combo email">
                    <h4>Email</h4>
                    <input type="email">
                </div>
                <div class="label-text-combo contactno">
                    <h4>Contact No.</h4>
                    <input type="number">
                </div>
            </div>
            <div class="label-text-combo course">
                <h4>Course</h4>
                <input type="text">
            </div>
        </div>
        <h3>EDUCATIONAL BACKGROUND</h3>
        <div class="fields-container">
            <div class="label-text-combo school">
                <h4>School/University</h4>
                <input type="text">
            </div>
        </div>
        <h3>EXPERIENCE</h3>
        <div class="fields-container fields-container-experience">
            <div class="label-text-combo position">
                <h4>Position Title</h4>
                <input type="text">
            </div>
            <div class="label-text-combo company">
                <h4>Company Name</h4>
                <input type="text">
            </div>
            <div class="fields-orientation jobduration-orientation">
                <div class="label-text-combo jobduration">
                    <h4>Job Duration</h4>
                    <input type="text">
                </div>
                <span>-</span>
                <div class="label-text-combo jobduration">
                    <input type="text">
                </div>
            </div>
            <div class="label-text-combo experiencedescription">
                <h4>Description</h4>
                <textarea name="" id="" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
            </div>
        </div>
        <h3>SKILLS</h3>
        <div class="fields-container">
            <div class="fields-orientation">
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
            </div>
            <div class="fields-orientation">
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
            </div>
        </div>
        <h3>AWARDS</h3>
        <div class="fields-container">
            <div class="label-text-combo awardname">
                <h4>Award Name</h4>
                <input type="text">
            </div>
            <div class="label-text-combo issuingorg">
                <h4>Issuing Organization</h4>
                <input type="text">
            </div>
            <div class="label-text-combo dateissued">
                <h4>Date Issued</h4>
                <input type="text">
            </div>
        </div>
        <h3>LICENSE OR CERTIFICATION</h3>
        <div class="fields-container">
            <div class="label-text-combo awardname">
                <h4>Award Name</h4>
                <input type="text">
            </div>
            <div class="label-text-combo issuingorg">
                <h4>Issuing Organization</h4>
                <input type="text">
            </div>
            <div class="fields-orientation needsspacebetween">
                <div class="label-text-combo dateissued">
                    <h4>Date Issued</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo expdate">
                    <h4>Expiration Date</h4>
                    <input type="text">
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection   

@section ('script')
    <script src={{ asset ('js/admin/adminNew/script.js' ) }}></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection