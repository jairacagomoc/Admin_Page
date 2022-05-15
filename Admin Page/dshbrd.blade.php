@extends('layout.admin')

@section ('style')
<link rel="stylesheet" href={{  asset('css/admin/adminNew/ad-com.css' ) }}>
@endsection

@section ('content')
<div class="content">
    <div class="inner-main">
        <div class="box1">
            <span>1</span>
        </div>
        <div class="box2">
            <span>2</span>
        </div>
        <div class="box3">
            <span>3</span>
        </div>
        <div class="box4">
            <span>4</span>
        </div>
        <div class="box5">
            <span>5</span>
        </div>
    </div>
    <div class="main-side">

        <div class="inner-event">
            <div class="title">
                <span>Active&nbsp;Accounts</span>
            </div>
            <div class="group">
                <input type="text"placeholder="1234">
                <span> Students </span>
            </div>
            <div class="group">
                <input type="text" placeholder="321">
                <span> Alumni </span>
            </div>
            <div class="group">
                <input type="text" placeholder="123">
                <span> Guests </span>
            </div>
            <div class="group">
                <input type="text" placeholder="543">
                <span> Companies </span>
            </div>

        </div>
        <div class="inner-notif">

            <div class="title">
                <span>Notifications</span>
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