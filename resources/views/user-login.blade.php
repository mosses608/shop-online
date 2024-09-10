@extends('layouts.home-layout')

@section('content')
<br><br><br><br><br><br><br><br>

<!-- <x-success_login /> -->
<x-insuccess_login />

<x-flash_msg />

<center>
    <form action="/authenticate" method="POST" class="new-md5-wrapper">
        @csrf
        <label for="">Your Email:</label><br>
        <input type="email" name="email" id="" placeholder="Email as a login username" style="border-bottom:1.5px solid rgb(162, 195, 224);" required><br>
        @error('email')
        <span>Email is required!</span>
        @enderror
        <br>
        <label for="">Your Password:</label><br>
        <input type="password" name="password" id="" placeholder="Password" style="border-bottom:1.5px solid rgb(162, 195, 224);" required minlength="8"><br>
        @error('password')
        <span>Please confirm password!</span>
        @enderror
        <br>
        <button type="submit" class="btn-submit" style="width:100px;">Login</button>
    </form>
    <br>
    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><br> <span id="alt-later">Login with</span></p><br>
    <div id="alternative-method">
        <a href="#"><i class="fab fa-google"></i></a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</center>

@stop