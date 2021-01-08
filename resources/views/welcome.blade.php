@extends('app')

@section('content')
<nav class="navbar sticky-top navbar-light bg-success">
  
    <a class="navbar-brand" href="#">User Info </a>
    
  </nav>
<div class="main">

    <div class="dropdown show">
        <nav class="navbar navbar-light bg-light">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Search  here
          
        </a>
        
          <br><br><br>      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <form action="{{ route('namesearch') }}" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="search by name" name="query">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
            </form>
            <br>
            <form action="{{ route('phonesearch') }}" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="search by phone no." name="query">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
               </form>
                <br>
               <form action="{{ route('addsearch') }}" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="search by address" name="query">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
               </form>
        </div>
      </div>
    </nav>
   </div>
@endsection