<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <title>Upload</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-dismiss="alert">×</button>
                {{ Session::get('failed') }}
            </div>
        @elseif(Session::has('failed'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-dismiss="alert">×</button>
                {{ Session::get('failed') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="cars">Choose a Branch:</label>
            <select name="branch" id="branch">
                <option value="Instrumentation and Control">Instrumentation and Control</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="cars">Choose a Subject:</label>
            <select name="subject" id="subject">
                <option value="Machine Learning">Machine_Learning</option>
                <option value="Digital Signal Processing">Digital_Signal_Processing</option>
                <option value="Operating System<">Operating_System</option>
                <option value="Industrial Automation 1">Industrial_Automation_1</option>
                <option value="Industrial Automation 2">Industrial_Automation_2</option>
                <option value="Internet of Thing">Internet_of_Things</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="cars">Selct Unit No :</label>
            <select name="unitno" id="unitno">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="mb-3" style="width:40%">
            <label class="form-label">Topic name (Name of Topic covered)</label>
            <input type="text" class="form-control" id="topicname" name="topic" required>
        </div>
        <div class="mb-3" style="width:40%">
            <label class="form-label">Select a pdf file</label>
            <input type="file" class="form-control" id="filename" name="filename" required>
            <span class="text-danger">
                @error('filename')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
