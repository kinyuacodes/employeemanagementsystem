@extends('layouts.app')


    
 
@section('content')
    <!-- Latest states -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Registered Cities</h3>
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
                    <form class="form-inline my-2 my-lg-0 " action="{{route('states.index')}}" method="GET">
                      <input  type="search" placeholder="name/country_code" name="search"class="form-control mr-sm-2">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                  <div class="col-md-8 ">
                    
                    <div class="card-header text-center pt-5">
                      <a class="btn btn-primary" href="{{route('states.create')}}">Create City</a>
                    </div>
                     
                    
                  </div>
                    
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                      	
                        <th>State_Id</th>
                        <th>City_Name</th>
                        <th>Country_Name</th>
                       
                      </tr>
                      @foreach($states as $state)
                      <tr>
                        <td>{{$state->id}}</td>
                        <td>{{$state->name}}</td>
                        <td>{{$state->country->country_name}}</td>
                        
                        <td>
                          <a href="{{route('states.edit',$state->id)}}" class="btn btn-success">Edit</a>
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