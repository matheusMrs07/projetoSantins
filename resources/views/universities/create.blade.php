@extends('layouts.app')
@section('content')



<div class="header bg-primary pb-6 pt-5 pt-lg-6 ">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Universities</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Universities</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="{{route('universities.index')}}" class="btn btn-sm btn-neutral">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-md-8">
              <h3 class="mb-0">New University</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('universities.store') }}" autocomplete="off">
                @csrf

                
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}"  autofocus>
        
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-coutry">{{ __('Country') }}</label>
                                <input type="text" name="country" id="input-country" class="form-control form-control-alternative{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="{{ __('Country') }}" value="{{ old('country')}}" >
        
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group{{ $errors->has('alpha_two_code') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-alpha_two_code">{{ __('Country Code') }}</label>
                                <input type="text" name="alpha_two_code" id="input-alpha_two_code" class="form-control form-control-alternative{{ $errors->has('alpha_two_code') ? ' is-invalid' : '' }}" placeholder="{{ __('Country Code') }}" value="{{ old('alpha_two_code')}}" >
        
                                @if ($errors->has('alpha_two_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alpha_two_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                   <div class="row">
                       <div class="col-6">
                            <div class="form-group{{ $errors->has('domains') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-domains">{{ __('Domain') }}</label>
                                <input type="text" name="domains" id="input-domains" class="form-control form-control-alternative{{ $errors->has('domains') ? ' is-invalid' : '' }}" placeholder="{{ __('Domain') }}" value="{{ old('domains')}}" >
        
                                @if ($errors->has('domains'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('domains') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>
                       <div class="col-6">
                            <div class="form-group{{ $errors->has('web_pages') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-coutry">{{ __('Web Page') }}</label>
                                <input type="text" name="web_pages" id="input-web_pages" class="form-control form-control-alternative{{ $errors->has('web_pages') ? ' is-invalid' : '' }}" placeholder="{{ __('Web Page') }}" value="{{ old('web_pages')}}" >
        
                                @if ($errors->has('web_pages'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('web_pages') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>

                   </div>                  

                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                    </div>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
@endsection