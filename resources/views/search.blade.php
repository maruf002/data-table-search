@extends('app')
@section('content')

<nav class="navbar sticky-top navbar-light bg-warning">
    @if($info->count()==0)
    <div class="btn-group dropright">
        <button type="button" class="btn btn-secondary">
          Search Again  
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
        </button>
        <div class="dropdown-menu">
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
      @else
    <a href="{{ route('index') }}"><ion-icon name="arrow-back-circle-outline"></ion-icon> previous page</a>
    <a class="navbar-brand" href="#">Search  Result </a>
   
    @endif
  </nav>
  
<div class="m">
    <nav class="navbar navbar-light bg-dark" style="width:230px">
        <button class="btn btn-outline-warning" type="button">{{ $info->count() }} search result for -- {{ $query }}</button>
        </nav>
</div>
<div class="">
    @if($info->count() > 0)

   
    <table  class="table table-bordered">
        <thead>
           
            <tr >
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE NO.</th>
                <th>ADDRESS</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($info as $key => $in)
               <tr>
                   <td>{{ $in->id }}</td>
                   <td>{{ $in->name }}</td>
                   <td>{{ $in->phone }}</td>
                   <td>{{ $in->address }}</td>
               </tr>
           @endforeach
        </tbody>
    </table>
   @else
   <h4 class="title" style="margin: 5px;">
    <strong>Sorry,No Post Found for ({{ $query }}) :(</strong> <br> <br><br>

   
    
    {{-- <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Search  here agin please
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
      </div> --}}

</h4>
    @endif
    
</div>
@endsection