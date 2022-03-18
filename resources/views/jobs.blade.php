<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
        <!-- Auto Close Alert -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript">

            $("document").ready(function()
            {
                setTimeout(function()
                {
                    $("div.alert").remove();
                }, 3000);
            });

        </script>
    </head>
    <body class="container">
        <div class="row pt-5">
            <div class="col">
                <h1>Salary for Industry: Information Technology (IT) Services</h1>
            </div>
        </div>
        <div class="row justify-content-end">
            
            <div class="col-1">
                <a href="/add" class="btn btn-primary"><i class="bi bi-plus"> </i> Add </a>
            </div>
        </div>
        <hr>
        <div class="row">
        </div>
        <div class="row">
            <table class="table table-striped border">

                @if (session()->has('success'))
                    <div class="alert alert-success" id="alert">
                        {{ session()->get('success') }}

                    </div>
                @endif

                @csrf
                    <thead class="border">
                        <th class="border">ID</th>
                        <th class="border">Job Title</th>
                        <th class="border">Job Description</th>
                        <th class="border">Range</th>
                        <th class="border">Average</th>
                        <th class="border">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            
                        <tr>
                            <th class="border">{{ $job['id'] }}</th>
                            <td class="border">{{ $job['jobtitle'] }}</td>
                            <td class="border">{{ $job['jobdescription'] }}</td>
                            <td class="border">{{ $job['range'] }}</td>
                            <td class="border">{{ $job['average'] }}</td>
                            <td class="border">
                                    
                                <a href="edit/{{ $job->id }}" class="btn addMore" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                
                                <a href="delete/{{ $job->id }}" class="btn addMore" title="Delete"><i class="bi bi-trash"></i></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </body>
</html>
