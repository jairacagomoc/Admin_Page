@extends('layout.admin')

@section ('style')
<link rel="stylesheet" href={{  asset('css/admin/adminNew/event.css' ) }}>
@endsection

@section ('content')
<div class="content">
    <div class="inner-main">
        <div class="title">
            <span>Events</span>
        </div>
    </div>
    <div class="inner-event">
        <div class="title">
            <span>Create Event </span>
        </div>
        <div class="inner-content">
            <div class="inner">
                <label>Name of Event: </label><br>
                <input type="text">
            </div>
            <div class="inner">
                <label>Event Details:</label><br>
                <textarea row="5"></textarea>
            </div>
            <div class="inner3">
                <label>Event Date</label><br>
                    <div>
                        <form action="/action_page.php">
                            <label for="appt"> From:</label><br>
                            <input type="time" id="appt" name="appt">
                        </form>
                        <form action="/action_page.php">
                            <label for="appt"> To:</label><br>
                            <input type="time" id="appt" name="appt">
                        </form>
                    </div>

            </div>
            <div class="file">
                <form action="#" method="POST" enctype="multipart/form-data" name="myForm">
                    <div id="yourBtn" onclick="getFile()" class="btn_upload">
                        <span>Upload JPG / PNG File</span> &nbsp;&nbsp;&nbsp;<i class='bx bx-upload'></i>
                     </div>
                    <div class="data">
                        <input id="upfile" type="file" value="upload" onchange="sub(this)"  />
                    </div>
                </form>
            </div>
            <div class="link">
                <label>Zoom Link: </label> 
                <input type="text">
            </div>
            <button  id="create" class="btn_create">Create Event</button>
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