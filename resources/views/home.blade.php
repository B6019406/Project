@extends('layouts.app')
@extends('layouts.home')

<style scoped>

</style>

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

    </div>
  </div>

  {{-- Add search bar here --}}


  <div class="row justify-content-space-between">
    <button onclick="location.href='/add'"></button>
  </div>

  <div class="row justify-content-center">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Website</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th><a href="http://amazon.co.uk">Amazon</th>
          <td>Username</td>
          <td>Password</td>
        </tr>

        <tr>
          <th><a href="http://youtube.com">YouTube</th>
          <td>Username</td>
          <td>Password</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection