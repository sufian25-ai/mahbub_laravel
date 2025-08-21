<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="email" name="email" value="{{ $student->email }}" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Phone">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
