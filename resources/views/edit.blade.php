<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Update</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
    </head>
    <body class="container">
        <form action="/edit" method="post">
            
            @csrf
            <div class="row justify-content-center pt-5">
                <div class="col-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="alert">
                            {{ session()->get('success') }}

                        </div>
                    @endif
                    <h2>
                        Update Job Details
                    </h2>
                    <a href="/jobs" class="btn btn-light border"><i class="bi bi-arrow-return-left"></i> Return</a>
                </div>
            </div><div class="row justify-content-center">
                <div class="col-5">
                    <hr>
                </div>
            </div>
            <input type="hidden" class="form-control" name="id" value="{{ $data['id'] }}">
            <div class="row justify-content-center pt-2">
                <div class="col-5">
                    <label for="jobtitle">Job Title </label>
                    <input type="text" class="form-control" name="jobtitle" value="{{ $data['jobtitle'] }}">
                    <span class="text-danger">@error('jobtitle') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-5">
                    <label for="jobdescription">Job Description </label>
                    <input type="text" class="form-control" name="jobdescription" value="{{ $data['jobdescription'] }}">
                    <span class="text-danger">@error('jobdescription') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-5">
                    <label for="range">Salary Range </label>
                    <input type="text" class="form-control" name="range" value="{{ $data['range'] }}">
                    <span class="text-danger">@error('range') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-5">
                    <label for="average">Average </label>
                    <input type="number" class="form-control" name="average" value="{{ $data['average'] }}">
                    <span class="text-danger">@error('average') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="row justify-content-center p-4">
                <div class="col-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </body>
</html>


