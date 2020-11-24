<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>laravel crud | {{ $pageTitle ?? '' }}</title>
</head>

<body>

    <div class="container">
        <div class="bg-primary pt-2 pb-2 text-white text-center">
            <h2 class="display-4">LARAVEL CRUD</h2>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-sm-6">
                <h3>{{ $pageTitle ?? '' }}</h3>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('students.create') }}" class="btn btn-info">Add New</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($students as $key => $student)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            <a href="{{ route('students.edit',$student->id) }}" class="btn btn-success">Edit</a>

                            <a href="#" onclick="document.getElementById('delete-form-{{ $student->id }}').submit()" class="btn btn-danger">Delete</a>
                            <form id="delete-form-{{ $student->id }}" action="{{ route('students.destroy',$student->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <p>No student record foun(:< </p>
                @endforelse ()

            </tbody>
        </table>

    </div>



    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>
