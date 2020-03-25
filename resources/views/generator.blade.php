@extends('layouts.app')

<style scoped>
    #display {
        width: 100%;
    }

    #slider {
        width: 100%;
    }
</style>

@section('content')
<title>Password Generator</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
            <div class="content">
                <h5>Password Generator</h5>
                <hr>
                <input type="text" id="display">
                <hr>
                <input type="range" min="8" max="40" name="slider" id="slider">
                <hr>
                <div id="length"></div>
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
    // Disable textbox
    document.getElementById("display").disabled = true;

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

    function copy() {
        // Get text in textbox
        var copyText = document.getElementById("display");

        // Select text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); 

        // Copy text in textbox
        document.execCommand("copy");
    }

    document.getElementById("length").innerHTML = "Length: 25"; 
</script>