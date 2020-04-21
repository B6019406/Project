@extends('layouts.app')

<style scoped>
    #display {
        width: 100%;
    }

    #slider {
        width: 100%;
    }

    #passLength {
        border: none;
        background-color: #f8fafc;
    }

    .bi-arrow-left {
        cursor: pointer;
    }
</style>

@section('content')
<title>Password Generator</title>

<div class="container">

    <div class="row justify-content-flex-start">
        <svg class="bi bi-arrow-left" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg" onclick="window.history.go(-1); return false;">
            <path fill-rule="evenodd"
                d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z"
                clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"
                clip-rule="evenodd" />
        </svg>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
            <div class="content">
                <h5>Password Generator</h5>
                <hr>
                <input type="text" id="display">
                <hr>
                <input type="range" min="8" max="40" name="slider" id="slider">
                <hr>
                <button onclick="generate()" class="btn btn-outline-dark">Generate</button>
                <button onclick="copy()" class="btn btn-outline-dark">Copy to Clipboard</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<script>
    // Variables
    var sliderValue = document.getElementById("slider").value

    // Function to generate password
    function generate() {
        // Set password length
        let complexity = document.getElementById("slider").value;

        // Possible password values
        let values = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxy1234567890!@#£$%^&*()_+";

        let password = "";

        // For loop to change password characters
        for(var i=0; i <= complexity; i++) {
            password = password + values.charAt(Math.floor(Math.random() * Math.floor(values.length - 1)));
        }

        // Shows password in textbox
        document.getElementById("display").value = password;
    }

    // Function to copy password to clipboard
    function copy() {
        // Get text in textbox
        var copyText = document.getElementById("display");

        // Select text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); 

        // Copy text in textbox
        document.execCommand("copy");
    }

    document.getElementById("passLength").value = sliderValue;

</script>