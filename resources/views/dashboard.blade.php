<html>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <style>
    .hiddendiv {display: none; }
    .testA:focus ~ #testA {
        display: block;
        position:absolute;
        top:300px;
        border: none;
        border-radius: 5px;
        width: 100%;
        height: 150px;
        padding: 10px;
        background-color: #d0e2bc;
        font: 1.0em/1.6em cursive;
        color: #095484;
        overflow-y: auto;
    }
    .testB:focus ~ #testB {display: block; }
    </style>
    <x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p> Contact {{ $contacts ?? '' }} <p>
        </h2>
    </x-slot>
    <div class="row">
    <div class="card uper col-md-4 mt-5 ml-5">
            <div class="card-header">
            <b>Add Tender Information</b>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
        <form method="post" action="{{ route('tender.store') }}">
            <!-- Name input -->
        @csrf
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" name="name" class="form-control" />
            <label class="form-label" for="form4Example1">Tender Name</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label"  for="form4Example2">Submission Date</label>
            <input type="date" id="form4Example2" name="submission_date" class="form-control" />
        </div>
        
        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" name="description" id="form4Example3" rows="4"></textarea>
            <label class="form-label"  for="form4Example3">Description</label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
</div>

    <div class="col-md-12 card" style="position: absolute; left: 800px; margin-top:25px; height: 60vh;">
        <h1> Your Tenders </h1>
        <hr>
        <div class="uper">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>tender Name</td>
                    <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tenders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <!-- <td>{{ $item->email }}</td>
                    <td>{{ $item->course }}</td>
                    <td>{{ $item->section }}</td> -->
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    <td>
                    </td>
                    <div>
                    <a tabindex="1" class="testA btn btn-warning" style="position:relative; right:0px; top:200px" >View Comments</a> 
                    <div class="hiddendiv" id="testA">
                        @foreach ($comments as $item)
                        <p style="font-weight:bold; "> {{ $item->created_at }} </p>
                        <p class="mb-3"> {{ $item->comment }} </p>
                        @endforeach
                    </div>
                </tr>
                @endforeach
            </tbody>
            </table>
<div>
</div>

</div>
</x-app-layout>

</html>