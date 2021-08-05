@extends('adminlayout')
@section('content')
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <div class="toggle-btn" align="center">Admin Log In</div>
                    <!-- <button type="button" class="toggle-btn" onclick="Login()">Log In</button> -->
                    <!-- <button type="button" class="toggle-btn" onclick="Register()">Register</button> -->
                </div>
                <form id="Login" class="input-group" action="">
                    <input type="text" class="input-field" placeholder="User Id" required>
                    <input type="text" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Login </button> 
                </form>
                
            </div>
            
            
        </div>
@endsection      