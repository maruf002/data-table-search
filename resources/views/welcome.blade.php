@extends('app')

@section('content')
<nav class="navbar sticky-top navbar-light bg-success">
  
    <a class="navbar-brand" href="#">User Info </a>
    
  </nav>
<div class="main">

    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Search  here
          
        </a>
        
          <br><br><br>      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <form action="{{ route('namesearch') }}" method="GET">
                <input type="text" placeholder="search by name" name="query">
                <input type="submit" value="Search">
            </form>
            <br>
            <form action="{{ route('phonesearch') }}" method="GET">
                <input type="text" placeholder="search by phone no." name="query">
                <input type="submit" value="Search">
               </form>
                <br>
               <form action="{{ route('addsearch') }}" method="GET">
                <input type="text" placeholder="search by address" name="query">
                <input type="submit" value="Search">
               </form>
        </div>
      </div>
    
     {{-- <div class="s">
         
         <form action="{{ route('namesearch') }}" method="GET">
         <input type="text" placeholder="search by name" name="query">
         <input type="submit" value="Search">
        </form>
    </div><br>
    <div class="l">
        <form action="{{ route('phonesearch') }}" method="GET">
            <input type="text" placeholder="search by phone no." name="query">
            <input type="submit" value="Search">
           </form>
    </div>
 <br>
    <div class="k">
        <form action="{{ route('addsearch') }}" method="GET">
            <input type="text" placeholder="search by phone address." name="query">
            <input type="submit" value="Search">
           </form>
    </div>
         --}}
     
    
  <br><br>
    <table  class=" table table-bordered" id="table">
        <thead>
            <h4>Showing {{ $user->count() }} user from {{ $total->count() }}</h4>
           
            <tr >
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE NO.</th>
                <th>ADDRESS</th>
               
            </tr>
        </thead>
        <tbody>
           @foreach ($user as $us)
               <tr>
                   <td>{{ $us->id }}</td>
                   <td>{{ $us->name }}</td>
                   <td>{{ $us->phone }}</td>
                   <td>{{ $us->address }}</td>
               </tr>
               
           @endforeach
          
        </tbody>
        
    </table>
    {{ $user->links() }} 

   </div>
@endsection