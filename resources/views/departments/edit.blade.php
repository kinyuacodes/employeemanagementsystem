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
                <div class="card-header"><h4 class="text-center" style="padding-top:65px !important;">{{ __('Update department') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('departments.update', $department->id) }}" novalidate="">
                        @csrf
                          @method('PUT')

                        
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department_Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$department->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update department') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form action="{{route('departments.destroy',$department->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-danger">
                                Delete  {{ $department->name }}
                            </button>
                            </form>
                            <a href="{{route('departments.index')}}" class="btn btn-success" >Back to departments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>