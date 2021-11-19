@extends('layout')
@section('main_content')
<style>

    .main-container{
        margin-top: 100px;
        margin-left: 300px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 400px;
        gap: 20px;
    }

    .main-label{
        font-size: 2rem;
        font-weight: 600;
    }

    .main-top-text{
        font-size: 4rem;
        font-weight: 800;
    }

    .main-top-text-container{
        display: flex;
        justify-content: center;
    }

    .button-save{
        margin: 0 auto;
        font-size: 2rem;
    }

</style>

    <div class="main-top-text-container">
        <p class="main-top-text">New Customer</p>
    </div>


    <form action="register" method="POST" id="form" form="myForm">
        <div class="main-container">
            <label class="main-label">Name</label>
            <input type="text" name="name" id="name">
            <label class="main-label">Email</label>
            <input type="text" name="email" id="email">
            <label class="main-label">Address</label>
            <input type="text" name="address" id="address">
            <label class="main-label">Company</label>
            <input type="text" name="company" id="company">
            <button class="button-save" type="submit" href="/">Save</button>
        </div>
        
    </form>

@endection