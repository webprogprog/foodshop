<!-- Main Section -->
<section class="main-section">
    <!-- Add Your Content Inside -->
    <div class="content">
        <!-- Remove This Before You Start -->
        {{-- <h1>FOODS</h1>
        <ul>
            @foreach($foods as $food)
                <li>{{$food->foodname}}</li>
            @endforeach
        </ul> --}}
        Logged in as : {{Session::get('email')}}
        <h1>FOOD LIST</h1>
        <ul>
            @foreach($foods as $food)
                @if($food->email==Session::get('email'))
                    <li>
                        <strong>{{$food->foodname}}</strong>
                        <br>Quantity : {{$food->quantity}}
                        <br>Price    : {{$food->price}}
                        <br>
                        <a href="/edit/{{$food->id}}" class="btn btn-md btn-primary">Edit</a>
                        <a href="/delete/{{$food->id}}" class="btn btn-md btn-primary"> Delete</a>
                    </li>
                    <br>
                @endif
            @endforeach
        </ul>
        <div class="form-group">
            <form action="/add"><button type="submit" class="btn btn-md btn-primary">Add Food</button></form>
            <form action="/logout"><button type="submit" class="btn btn-md btn-primary">Logout</button></form>
        </div>
    </div>
    <!-- /.content -->
</section>
<!-- /.main-section -->
