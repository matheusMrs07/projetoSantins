@extends('layouts.app')
@section('content')



<div class="header bg-primary pb-6 pt-5 pt-lg-6 ">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Subscriptions</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Subscriptions</a></li>
              <li class="breadcrumb-item active" aria-current="page">Lsit</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="{{route('universities.index')}}" class="btn btn-sm btn-neutral">New</a>
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
              <h3 class="mb-0">Subscriptions</h3>
            </div>
            <div class="col-md-4">
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="{{route('subscriptions.index')}}" method="GET">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    
                      <input class="form-control" placeholder="Search" type="text" name="search">
                  </div>
                  <button type="submit" class="btn btn-primary " data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                    <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                  </button>
                </div>
              </form>       
            </div>
          </div>

    
          
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="id">Id</th>
                <th scope="col" class="sort" data-sort="name">University</th>
                <th scope="col" class="sort" data-sort="country">Country</th>
                <th scope="col" class="sort" data-sort="web_pages">Subscription Date</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody class="list">

                @foreach ($subscriptions as $subscription)
                <tr>
                    <th scope="row">
                        {{$subscription->id}}
                    </th>
                    <td >
                        {{$subscription->name}}
                    </td>
                    <td >
                        {{$subscription->country}}
                    </td>
                    <td >
                        {{$subscription->created_at}}
                    </td>
                    <td >

                
                        <a class="btn btn-icon btn-sm btn-danger" href="{{route('subscriptions.delete', $subscription->id)}}" >
                            <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i> Remover</span>
                        </a>
                        

                    </td>
                </tr>

                @endforeach
                
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item {{ $subscriptions->onFirstPage()?'disabled':''}}">
                <a class="page-link" href="{{$subscriptions->previousPageUrl()}}" >
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              @for($i = 1; $i<= $subscriptions->lastPage();  $i++)
                <li class="page-item active">
                  <a class="page-link" href="{{ $subscriptions->url($i) }}">{{$i}}</a>
                </li>
              @endfor
              <li class="page-item {{ $subscriptions->onLastPage()?'disabled':''}}">
                <a class="page-link" href="{{$subscriptions->nextPageUrl()}}">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection