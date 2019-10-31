<!-- Main Section -->
<section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <h1>EDIT</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/update/{{$id}}" method="post">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="_method" value="PATCH"/> --}}
                <div class="form-group">
                    <label for="foodname">Food Name:</label>
                <input type="text" class="form-control" id="foodname" name="foodname" value="{{$food->foodname}}">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$food->quantity}}">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$food->price}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            <div class="form-group">
                <form action="/index"><button type="submit" class="btn btn-md btn-primary">Back</button></form>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
