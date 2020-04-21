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
  }

  .fa-copy {
    margin-left: 2px;
    cursor: pointer;
  }

  .hidetext {
    -webkit-text-security: disc;
  }
</style>

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

    </div>
  </div>

  {{-- Add search bar here --}}


  <div class="row justify-content-space-around">
    <button class="btn btn-outline-dark" onclick="location.href='/password/add'">+ Add Item</button>
  </div>

  <div class="row justify-content-center">

    <table class="table table-bordered">
      <tr>
        <th>Website</th>
        <th>URL</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>

      {{-- Display login details in table --}}
      @foreach ($passwords as $row)
      <tr>
        <td>{{$row['website']}}</td>
        <td><a href="{{$row['url']}}">{{$row['url']}}</a></td> {{-- Shows URL as link and takes user to that page --}}
        <td>{{$row['username']}}</td>
        <td>{{$row['password']}}</td>
        <td>
          <button type="button" id="viewPswd" class="btn btn-outline-dark"><i class="fa fa-eye"></i></button>
          <button type="button" class="btn btn-outline-danger" onclick="delete()"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      @endforeach
    </table>

  </div>
</div>

@endsection

<script>

</script>