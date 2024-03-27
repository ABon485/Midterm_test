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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/list.css">
</head>

<body>
    <div class="container">
        <h2 style="color:red; text-align:center">List Products</h2><br>
        <div class="row create">
            <div class="col-3"> 
                <a name="" id="" class="btn btn-info"href="{{ route('product.create') }}" role="button">Create</a>
            </div>
            <div class="col-9">
                <form action="" class="form">
                    <input class="search m-lg-2" type="text" name="search" id="search" placeholder="search"><button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </div><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">image</th>
                        <th scope="col">decription</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category_id</th>
                        <th scope="col">Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td> <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">{{ $product->id }}</a></td>
                            <td><img src="{{ asset('/images/' . $product->image) }}" class="img-fluid" alt="Hình ảnh">
                            </td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->Name }}</td>
                            <td>{{ $product->Price }}</td>
                            <td>{{ $product->Category_id }}</td>
                            {{-- <td>{{ $product->mf->name }}</td> --}}
                            <td>
                                <a name="" id="" class="btn btn-primary" href=""
                                    role="button">chi tiết</a>
                            </td>
                            <td><a name="" id="" class="btn btn-success"
                                    href="{{ route('product.edit', $product->id) }}" role="button">Update</a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6Thiếu phần tiếp theo của mã HTML do giới hạn kích thước đầu vào. Dưới đây là phần tiếp theo của mã HTML:

    ```html
    jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
