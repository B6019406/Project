@extends('layouts.app')
@extends('layouts.home')

<style scoped>
  .fa {
    font-size: 30px;
  }

  table {
    background-color: #fff;
  }

  th,
  td {
    border-right: 1px solid #fff;
    text-align: center;
  }

  .fa-eye {
    margin-right: 2px;
    cursor: pointer;
    color: #000;
  }

  .fa-copy {
    margin-left: 2px;
    cursor: pointer;
    color: #000;
  }

  .fa-trash {
    margin-left: 2px;
    cursor: pointer;
  }

  .pswdBox {
    border: none;
  }

  .hidetext {
    -webkit-text-security: disc;
  }
</style>

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
    </div>
  </div>

  <div class="row justify-content-space-around">
    <button class="btn btn-outline-dark" onclick="location.href='/password/add'">+ Add Item</button>
  </div>

  <div class="row justify-content-center">

    <table class="table sortable table-bordered" id="pswdTable">
      <tr>
        <th onclick="sortTable">Website</th>
        <th>URL</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>

      {{-- Display login details in table --}}
      @foreach ($passwords as $i => $row)
      <tr>
        <td>{{$row['website']}}</td>
        {{-- Shows URL as link and takes user to that page --}}
        <td><a href="{{$row['url']}}" target="_blank">{{$row['url']}}</a></td>
        <td>{{$row['username']}}</td>
        <td><input type="password" class="pswdBox" id="pswdBox{{$i}}" value="{{$row['password']}}" readonly></td>
        <td>
          {{-- View password --}}
          <button type="button" id="{{ 'n-' . $i }}" class="btn btn-outline-dark" onclick='viewPswd("pswdBox{{$i}}")'><i
              class="fa fa-eye"></i></button>
          {{-- Copy password --}}
          <button type="button" id="{{ 'n-' . $i }}" class="btn btn-outline-dark" onclick='copyPswd("pswdBox{{$i}}")'><i
              class="fa fa-copy"></i></button>
        </td>
      </tr>
      @endforeach
    </table>

  </div>
</div>

@endsection

<script>
  // Function to show and hide passwords
  function viewPswd(id) {
    var x = document.getElementById(id);
    console.log(id);

    if(x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  // Function to copy password to clipboard
  function copyPswd(id) {
    var y = document.getElementById(id)

    // Select text field
    y.select();
    y.setSelectionRange(0, 99999); 

    // Copy text in textbox
    document.execCommand("copy");
  }
</script>