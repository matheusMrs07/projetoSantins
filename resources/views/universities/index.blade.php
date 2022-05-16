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
              <li class="breadcrumb-item active" aria-current="page">Lsit</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="{{route('universities.load')}}" class="btn btn-sm btn-neutral">Load Data</a>
          <a href="{{route('universities.create')}}" class="btn btn-sm btn-neutral">Add University</a>
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
              <h3 class="mb-0">Universities</h3>
            </div>
            <div class="col-md-4">
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="{{route('universities.index')}}" method="GET">
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
                <th scope="col" class="sort" data-sort="name">Name</th>
                <th scope="col" class="sort" data-sort="country">Country</th>
                <th scope="col" class="sort" data-sort="domains">Domain</th>
                <th scope="col" class="sort" data-sort="web_pages">Web Page</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody class="list">

                @foreach ($universities as $university)
                <tr>
                    <th scope="row">
                        {{$university->id}}
                    </th>
                    <td >
                        {{$university->name}}
                    </td>
                    <td >
                        {{$university->country}}
                    </td>
                    <td >
                        {{$university->domains}}
                    </td>
                    <td >
                      <a href="{{$university->web_pages}}">{{$university->web_pages}}</a>  
                      
                    </td>
                    <td >
                      {{$university->status}}
                    </td>
                    <td >

                        <form action="{{ route( 'subscriptions.store', $university->id ) }}" method="post">
                            @csrf
                            <button class="btn btn-icon btn-2 btn-primary" type="submit" >
                                <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                            </button>
                        </form>

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
              <li class="page-item {{ $universities->onFirstPage()?'disabled':''}}">
                <a class="page-link" href="{{$universities->previousPageUrl()}}" >
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              @for($i = 1; $i<= $universities->lastPage();  $i++)
                <li class="page-item active">
                  <a class="page-link" href="{{ $universities->url($i) }}">{{$i}}</a>
                </li>
              @endfor
              <li class="page-item {{ $universities->onLastPage()?'disabled':''}}">
                <a class="page-link" href="{{$universities->nextPageUrl()}}">
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