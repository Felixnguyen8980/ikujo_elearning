@extends('managerview.master')
@section('title', 'Welcome Admin')
@section('view')
         <!DOCTYPE html>
         <html lang="en">
         <head>
         	<meta charset="UTF-8">
         	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
         </head>
         <body>
         <div id="wapperbox">
         	<div class="row header">
         		<div class="col2 title">
         			<h2>Admin Ikujo</h2>
         		</div>
         		<div class="col5 space"></div>
         		<div class="col3 status">
         			<div class="col10 option">
	         			<ul id ="row col10 admin_status">
	         				
	         				<li class="col2"><a href="#">#</a></li>
	         				<li class="col2"><a href="#">Mail</a></li>
	         				<li class="col2"><a href="#">Admin</a></li>
	         				<li class="col2"><a href="#">Setting</a></li>
	         				<li class="col2"><a href="{{route('logout')}}">logout</a></li>
	         			</ul>
         			</div>
         		</div>
         	</div>
         	<div class="row box_content" id="admin_option">
         		<div class="col2-5" id="side_bar_admin">
         			<ul class="option">
         				<li class="action searchbox"><input type="text" placeholder="search" class="search"></li>
         				<li class="action selector "><a href="{{route('adminpage',['selected'=>"Dashboard"])}}">Dashboard</a></li>
         				<li class="action selector "><a href="#">Students</a></li>
         				<li class="action selector" id="selector_member" style="display: none;"><a href="#">Members</a></li>
	         			
         				<li class="action selector" ><a href="#">Coursers</a></li>
         				<li class="action selector"><a href="#">Reports</a></li>
         				<li class="action selector"><a href="#">Reports</a></li>
         			</ul>
         		</div>
         		<div class="col6 main_content">
         			<div id="address_bar">
         				<p><a class="parent" href="{{route('adminhome')}}">Home @yield('arrdress1')</a></p>
         			</div>
         			<div id="view_content">
         				@section('view_selected')
          
     					  @show
         			</div>
         		</div>
         	</div>
         </div>
         </body>
         </html>
         @if (session('users.roles_id')==1) 
		    <script>
		    	document.getElementById('selector_member').style.display = 'block';
		    </script>
		@endif
 @endsection