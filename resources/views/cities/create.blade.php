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
                <div class="card-header"><h4 class="text-center" style="padding-top:65px !important;">{{ __('Create state') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cities.store') }}" novalidate="">
                        @csrf


                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('state_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="state_id" class="col-md-4 col-form-label text-md-right">{{ __('City_Name') }}</label>

                            <div class="col-md-6">
                               <select name="state_id" id="state_id" class="form-control">
                                     @foreach ($states  as $state )
                                        <option  value="{{$state->id}}">{{$state->id.'-'.$state->name}}</option>
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
                                    {{ __('Add state') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>