<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet" />
    <title>Download</title>
</head>

<body>
    <div class="first-container">
        <header>
            <img class="logo" src="{{ URL::asset('/images/logo.png') }}" alt="logo" />
            <nav>
                <ul class="nav-links">
                    <li><a href="#">NOTES</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </nav>
            @if (!Session::has('LoginID'))
                <a href="/instruinsights/login"><button class="login-button">Login</button></a>
            @else
                <a href="/instruinsights/home/logout"><button class="login-button">Logout</button></a>
            @endif

        </header>
    </div>

    <div class="third-container">
        <div class="third-title">
            <h4>Recently added</h4>
            <hr class="third-hr" />
        </div>
        <div class="notes-container">
            @foreach ($subjectinfo as $note)
                <div class="pdf no1">
                    <hr class="notes-hrline" />
                    <h3 class="pdf-title">
                        {{ $note->topic }}
                    </h3>
                    <div class="subject-name-class">
                        <p class="pdf-subjname"> {{ $note->subject }}</p>
                    </div>
                    <p class="provider">By InstruInsights</p>
                    <img class="first-page2" src="{{ URL::asset('/images/PDF/first.jpg') }}" alt="" />
                    <a href="{{ url('/instruinsights/download', $note->filename) }}"><button class="dsubject-button"
                            role="button">Download</button></a>
                    <button class="dsubject-button" id="myBtn">Feedback</button>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="{{ url('/instruinsights/feedback', $note->filename . '/' . $note->Sno) }}"
                                method="POST">
                                @csrf
                                <label for="fname">Topic Name</label>
                                <input type="text" id="fname" name="topic-name" value="{{ $note->topic }}"
                                    readonly>

                                <label for="lname">Feedback</label>
                                <input type="text" id="feedback" name="feedback">
                                <input type="submit" value="Submit">
                            </form>
                        </div>

                    </div>
            @endforeach
        </div>
    </div>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
