@extends('layouts.simplenav')

<style type="text/css">
  .add-user{
    overflow: hidden;
  }
</style>

@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="text-center" style="padding-top:65px !important;">{{ __('Update Country') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('countries.update', $country->id) }}" novalidate="">
                        @csrf
                          @method('PUT')

                         <div class="form-group row">
                            <label for="country_code" class="col-md-4 col-form-label text-md-right">{{ __('Country_code') }}</label>

                            <div class="col-md-6">
                                <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" value="{{ old('country_code',$country->country_code) }}" required autocomplete="country_code" autofocus>

                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="country_name" class="col-md-4 col-form-label text-md-right">{{ __('country_Name') }}</label>

                            <div class="col-md-6">
                                <input id="country_name" type="text" class="form-control @error('country_name') is-invalid @enderror" name="country_name" value="{{ old('country_name',$country->country_name) }}" required autocomplete="country_name" autofocus>

                                @error('country_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Country') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form action="{{route('countries.destroy',$country->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-danger">
                                Delete  {{ $country->country_name }}
                            </button>
                            </form>
                            <a href="{{route('countries.index')}}" class="btn btn-success" >Back to Countries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>