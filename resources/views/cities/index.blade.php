@extends('layouts.app')


    
 
@section('content')
    <!-- Latest cities -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Registered States</h3>
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
                    <form class="form-inline my-2 my-lg-0 " action="{{route('cities.index')}}" method="GET">
                      <input  type="search" placeholder="statename" name="search"class="form-control mr-sm-2">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                  <div class="col-md-8 ">
                    
                    <div class="card-header text-center pt-5">
                      <a class="btn btn-primary" href="{{route('cities.create')}}">Create State</a>
                    </div>
                     
                    
                  </div>
                    
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                      	
                        <th>city_Id</th>
                        <th>State_Name</th>
                        <th>city_Name</th>
                        <th>Manage</th>
                      </tr>
                      @foreach($cities as $city)
                      <tr>
                        <td>{{$city->id}}</td>
                        <td>{{$city->name}}</td>
                        <td>{{$city->state->name}}</td>
                        
                        <td>
                          <a href="{{route('cities.edit',$city->id)}}" class="btn btn-success">Edit</a>
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