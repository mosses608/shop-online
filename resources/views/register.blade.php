@extends('layouts.home-layout')

@section('content')
<br><br><br><br><br>

<x-account_exist_message />

<x-success_registration_message />

<center>
    <form action="/users" method="POST" class="new-md5-wrapper">
        @csrf
        <label for="">Country or Region:</label><br>
        <select name="region" id="country" style="border-bottom:1.5px solid rgb(162, 195, 224);">
            <option value="">Choose Region/Country</option>
        </select><br><br>
        <label for="">Email:</label><br>
        <input type="email" name="email" id="" placeholder="Email as a login username" style="border-bottom:1.5px solid rgb(162, 195, 224);" value="{{old('email')}}"><br>
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <br>
        <label for="">Password:</label><br>
        <input type="password" name="password" id="" minlength="8" placeholder="Set login password!" style="border-bottom:1.5px solid rgb(162, 195, 224);"><br>
        @error('trade_role')
        <span role="alert">{{$message}}</span>
        @enderror
        <br>
        <label for="">Confirm Password:</label><br>
        <input type="password" name="confirm_password" id="" placeholder="Re-enter the password again!" style="border-bottom:1.5px solid rgb(162, 195, 224);"><br>
        @error('confirm_password')
        <span role="alert">{{$message}}</span>
        @enderror
        <br>
        <label for="">Trade Role:</label><br>
        <select name="trade_role" id="" class="trade_role" style="border-bottom:1.5px solid rgb(162, 195, 224);" value="{{old('trade_role')}}">
            <option value="">Choose Role</option>
            <option value="1">Buyer</option>
            <option value="2">Seller</option>
        </select>
        <br>
        @error('trade_role')
        <span>Trade role is required!</span>
        @enderror
        <br>
        <div class="if-role-is-compan" style="display:none;">
            <label for="">Company Name:</label><br>
            <input type="text" name="company_name" id="" placeholder="Company name" style="border-bottom:1.5px solid rgb(162, 195, 224);" value="{{old('company_name')}}"><br>
            @error('company_name')
            <span>{{$message}}</span>
            @enderror
            <br>
        </div>
        <div class="if-role-is-buyer" style="display:none;">
            <label for="">Full Name:</label><br>
            <input type="text" name="full_name" id="" placeholder="Enter your full names" style="border-bottom:1.5px solid rgb(162, 195, 224);" value="{{old('full_name')}}"><br><br>
        </div>
        <label for="">Phone Number:</label><br>
        <input type="number" name="contact" id="" placeholder="Set a phone number" style="border-bottom:1.5px solid rgb(162, 195, 224);" value="{{old('contact')}}"><br>
        @error('contact')
        <span>{{$message}}</span>
        @enderror
        <br>
        <div class="junct-wrapp">
            <input type="checkbox" name="term_policy" value="1" id="" style="width:30px;height:20px; float:left;" value="{{old('term_policy')}}"><p>I agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
            @error('term_policy')
            <br><br>
            <span>You need to agree to terms of use and privacy policy first!</span>
            @enderror
        </div><br><br>
        <button type="submit" class="btn-submit">Agree and Register</button>
        <button type="button" class="all-setup-done">Already have an account? <a href="/user-login">Login</a></button>
    </form>
    <br>
    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Or <br> <span id="alt-later">Login with</span></p><br>
    <div id="alternative-method">
        <a href="#"><i class="fab fa-google"></i></a>
    </div>
    <br><br>

    <script>
        const role = document.querySelector('.trade_role');

        role.addEventListener('change', function(){
            const rolevalue= role.value;
            document.querySelector('.if-role-is-compan').style.display='none'; 
            document.querySelector('.if-role-is-buyer').style.display='none';

            if(rolevalue === '1'){
                document.querySelector('.if-role-is-buyer').style.display='block';
            }else if(rolevalue === '2'){
                document.querySelector('.if-role-is-compan').style.display='block'; 
            }
        })
    </script>
</center>

@stop