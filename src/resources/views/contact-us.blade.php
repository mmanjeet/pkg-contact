<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to contact form</h1>
                <p>make your inquery here</p>
            </div>
        </div>
        <div class="row">
            @if(session()->has('message'))
            {{ session()->get('message') }}
            @endif
            <div class="col-md-12">
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Please enter name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="query" class="form-label">Query</label>
                        <textarea class="form-control" id="query" rows="3" name="query" placeholder="Enter Query"></textarea>
                    </div>
                    <button type="submit" name="contact">Contact Now</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>