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
            <h1>ADD</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/addPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="foodname">Food Name:</label>
                    <input type="text" class="form-control" id="foodname" name="foodname">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price">
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
