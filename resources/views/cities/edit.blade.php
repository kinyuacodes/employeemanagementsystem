@extends('layouts.simplenav')

<style type="text/css">
  .add-user{
    overflow: hidden;
  }
</style>
<div class="add-user">
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="text-center" style="padding-top:65px !important;">{{ __('Update city') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cities.update',$city->id) }}" novalidate="">
                        @csrf
                        @method('PUT')


                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('city_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$city->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="state_id" class="col-md-4 col-form-label text-md-right">{{ __('state_Code') }}</label>

                            <div class="col-md-6">
                               <select name="state_id" id="state_id" class="form-control">
                                     @foreach ($states as $state )
                                        <option  value="{{$state->id}}"{{$state->id==$city->state_id ?'selected':'not'}}>{{$state->id.'-'.$state->name}}</option>
                                   @endforeach
                              </select>

                                @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update city') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form action="{{route('cities.destroy',$city->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-danger">
                                Delete  {{$city->name }}
                            </button>
                            </form>
                            <a href="{{route('cities.index')}}" class="btn btn-success" >Back to cities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>