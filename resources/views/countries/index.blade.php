@extends('layouts.app')


    
 
@section('content')
    <!-- Latest countries -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Registered countries</h3>
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
                
                <div class="container" style="overflow: hidden !important">

                  <div class="row">
                    <div class="col-md-4">
                      <form class="form-inline my-2 my-lg-0 " action="{{route('countries.index')}}" method="GET">
                        <input  type="search" placeholder="countryname/code" name="search"class="form-control mr-sm-2">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                    <div class="col-md-8 ">
                      
                        <div class="container mt-15">
                           <a class="btn btn-primary " href="{{route('countries.create')}}">Create country</a>
                        </div>
                       
                      
                    </div>
                      
                  </div>
                
              </div>
                <div class="panel-body" style="overflow: hidden !important">
                  <table class="table table-striped table-hover" style="overflow: hidden !important">
                      <tr>
                      	
                        <th>country_Id</th>
                        <th>Country_Name</th>
                        <th>Country_Code</th>
                        <th>Manage</th>
                      </tr>
                      @foreach($countries as $country)
                      <tr>
                        <td>{{$country->id}}</td>
                        <td>{{$country->country_name}}</td>
                        <td>{{$country->country_code}}</td>
                        <td>
                          <a href="{{route('countries.edit',$country->id)}}" class="btn btn-success">Edit</a>
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