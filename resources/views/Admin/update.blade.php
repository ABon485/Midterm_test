<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="py-5 d-flex text-align-center justify-content-center">Update Product</h2>

        <form method="post" action="{{route('product.update',['id'=>$product->id])}}" class="py-5 ml-5" enctype="multipart/form-data">
            @csrf
            <!-- Rest of your form code -->
            <div class="form-group">
                <label for="Name" class="@error('Name') text-danger @enderror">Name</label>
                <input type="text" class="form-control @error('Name') is-invalid @enderror" id="Name" name="Name" value="{{ isset($product) ? $product->Name :old('Name') }}">
                @error('Name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description" class="@error('description') text-danger @enderror">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ isset($product) ? $product->description :old('description')}}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Price" class="@error('Price') text-danger @enderror">Price</label>
                <input type="text" class="form-control @error('Price') is-invalid @enderror" id="Price" name="Price" value="{{ isset($product) ? $product->Price :old('Price')}}">
                @error('Price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Category_id" class="@error('Category_id') text-danger @enderror">Category_id</label>
                <input type="text" class="form-control @error('Category_id') is-invalid @enderror" id="Category_id" name="Category_id" value="{{ isset($product) ? $product->Category_id :old('Category_id')}}">
                @error('Category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="select">
            
        
            <div class="form-group">
                <label for="image" class="@error('image') text-danger @enderror">Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage(this);">
                <img id="preview" style="display: none; max-width: 200px; max-height: 200px;"/>
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <input type="submit" name="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>