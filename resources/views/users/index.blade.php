@extends('layouts.app')


    
 
@section('content')
    <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Registered Users</h3>
                  @if ( session()->has('message') )
                       <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    @endif
                  @if ( session()->has('message2') )
                       <div class="alert alert-danger">
                        {{session('message2')}}
                    </div>
                  @endif
                </div>
               
                <div class="row">
                  <div class="col-md-4">
                    <form class="form-inline my-2 my-lg-0 " action="{{route('users.index')}}" method="GET">
                      <input  type="search" placeholder="username/lastname" name="search"class="form-control mr-sm-2">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                  <div class="col-md-8 ">
                    
                    <div class="card-header text-center pt-5">
                      <a class="btn btn-primary" href="{{route('users.create')}}">Create User</a>
                    </div>
                     
                    
                  </div>
                    
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                      	
                        <th>User_Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Manage</th>
                      </tr>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          <a href="{{route('users.edit',$user->id)}}" class="btn btn-success">Edit</a>
                        </td>

                      </tr>
                     @endforeach
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

@endsection