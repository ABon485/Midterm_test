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
        <h2 style="color:red; text-align:center">List Products</h2>
       <div class="create">
             {{-- <a name="" id="" class="btn btn-info"href="{{ route('product.create') }}" role="button">Create</a> --}}
       </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">image</th>
                        <th scope="col">decription</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td> <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">{{ $product->id }}</a></td>
                            <td><img src="{{ asset('/images/' . $product->image) }}" class="img-fluid"
                                    alt="Hình ảnh"></td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->Name }}</td>
                            <td>{{ $product->Price }}</td>
                            {{-- <td>{{ $product->mf->name }}</td> --}}
                            {{-- <td>
                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('product.show', $product->id) }}" role="button">chi tiết</a>
                            </td>
                            <td><a name="" id="" class="btn btn-success"
                                    href="{{ route('product.edit', $product->id) }}" role="button">Update</a>
                            </td>
                            <td><a name="" id="" class="btn btn-danger"
                                href="{{ route('product.destroy', $product->id) }}" role="button">Delete</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6Thiếu phần tiếp theo của mã HTML do giới hạn kích thước đầu vào. Dưới đây là phần tiếp theo của mã HTML:

```html
jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>