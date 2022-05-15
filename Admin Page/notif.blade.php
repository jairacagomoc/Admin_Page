@extends('layout.admin')

@section ('style')
<link rel="stylesheet" href={{  asset('css/admin/adminNew/notif.css' ) }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section ('content') 
<div class="content">
    <div class="title">
        <span>Notifications </span>
    </div>
    <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="  Search....." name="search">
          <button type="submit"><img src="img/search.svg.svg"></button>
        </form>
        
    </div>
</div>
@endsection

@section ('script')
<script src={{ asset ('js/admin/adminNew/script.js' ) }}></script>
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection