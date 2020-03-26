@extends('layouts.app')
@extends('layouts.home')

<style scoped>
  .fa {
    font-size: 30px;
  }

  th,
  td {
    border-right: 1px solid #fff;
    text-align: center;
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
    <button class="btn btn-outline-dark" onclick="location.href='/add'">+ Add Item</button>
  </div>

  <div class="row justify-content-center">
    <table class="table table-striped">

      <thead class="thead-dark">
        <tr>
          <th scope="col">Website</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><a href="http://amazon.co.uk">Amazon</td>
          <td>Username</td>
          <td>Password</td>
          <td>
            <i class="fa fa-eye"></i>
            <i class="fa fa-copy"></i>
          </td>
        </tr>
      </tbody>

    </table>
  </div>
</div>
@endsection