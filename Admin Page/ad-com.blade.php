@extends('layout.admin')

@section ('style')
    <link rel="stylesheet" href={{  asset('css/admin/adminNew/customScroll.css' ) }}>
    <link rel="stylesheet" href={{  asset('css/admin/adminNew/ad-com.css' ) }}>
@endsection

@section('import') 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section ('content')
<div class="coprofile">
    <div id="rectangle">
        <div class="coname">
        <h1>COMPANY Name</h1>
        </div>
    </div>
    <div id="profile">
        <img src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png">
    </div>
        <div class="about">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do. eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. commodo consequat. </p>
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
    <div class="info">
        <div class="content-info">
            <div class="title">
                <h2>COMPANY INFORMATION</h2>
            </div>
            <div class="inner1">
                <div class="innerform">
                     <div class="label">Website:</div>
                     <input type="text">
                     <div class="label">Company Headquarters:</div>
                     <textarea rows="2"></textarea>
                     <div class="label">Industry :</div>
                     <input type="text">
                     <div class="label">Specialty:</div>
                     <input type="text">
                     <div class="label">Founded:</div>
                     <input type="text">

                     <div class="fields-orientation">
                        <div class="fields-orientation">
                            <div class="mail">
                                <div class="label">Email:</div>
                                 <input type="email">
                            </div>  
                            <div class="phone">
                                <div class="label"> Telephone</div>
                                 <input type="number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>JOB Posts:</h3>
        <div class="jobposting">
            <div class="job">
                <span>Hiring 101</span>
                
            </div>
            <div class="job">
                <span>Hiring 101</span>
            </div>
            <div class="job">
                <span>Hiring 101</span>
            </div>
            <div class="job">
                <span>Hiring 101</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')  
    <script src={{ asset ('js/admin/adminNew/script.js' ) }}></script>
    <script src="js/company.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection