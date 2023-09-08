
<!-- <body id="app-layout"> -->
@extends('main')

@section('content')
<br>   

<div class="row">
<div class="col-lg-2 pull-left" style="margin-top:70px;">
<!-- <div align="left"> -->
<a href="{{route('users.create')}}" id="button_add_employee" class="form-control btn btn-sm btn-primary">
<i class="fa fa-btn fa-user-plus" aria-hidden="true"></i>Create New User</a>

</div>

<br>
<br>
<br> 


        <div class="col-lg-9">
          
            <div class="panel panel-default">
                <div class="panel-heading">User List</div>

                
                <div class="table-responsive">
 
                <table class="table table-hover table-striped" id="tbl_datatable">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Actions</th>
                </tr>
              </thead>
 
              <tbody  id="myTable">
              @foreach ($users as $user)
  <tr>
    <td>{{ $user->fname }} {{ $user->lname }}</td>
    <td>{{ $user->email }}</td> 
    <td>{{ $user->address }}</td>
    <td>
    <a href="#"  class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="left" title="View"><span class="glyphicon glyphicon-user"></span></a>
    <a href="#" class="btn btn-xs btn-primary"  data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>


    </td>


    </tr>
  @endforeach
  
</tbody> 
</table>


</div>
</div>

</div>
</div>


              


<!--Pagination -->
 <div class="text-center">
 {!!$users->links();!!}
</div>


<script>
 


$(function () {

//var datatable = $('#tbl_datatable').DataTable({
/// laptop down  (no electricity due to snowfall)
// use simple html table
//});
});




</script> 


@endsection
 