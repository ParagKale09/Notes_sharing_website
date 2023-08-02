<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini-project</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Nav Bar -- Nav Bar --Nav Bar --Nav Bar --Nav Bar --Nav Bar --Nav Bar --Nav Bar --Nav Bar -->
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
    <!-- Second Container --Second Container --Second Container --Second Container -->
    <div class="second-container">
        <div class="main-images">
            <img class="back-green" src="{{ URL::asset('/images/back-green.png') }}" alt="back-green" />
            <img class="friends" src="{{ URL::asset('/images/friends.svg') }}" alt="" />
        </div>
        <div class="head-text">
            <h1>Study and Lecture Notes</h1>
            <p>
                For Students and Professional Learners to Sell, Buy and
                Download academics notes.
            </p>
            <h3>
                <img class="head-img" src="{{ URL::asset('/images/download.png') }}" alt="" />
            </h3>
            <p class="download-heading">
                <strong>
                    Download free online study, revision and lecture notes </strong>created by knowledgeable students
                and teachers.
            </p>
            <br />
            <h3>
                <img class="head-img" src="{{ URL::asset('/images/Upload.png') }}" alt="" />
            </h3>
            <p class="upload-heading">
                <strong>Upload your own study, revision and lecture notes
                </strong>
                and be paid and rewarded.
            </p>
            <h3>
                <img class="head-img thumb" src="{{ URL::asset('/images/thumb-up.jpg') }}" alt="" />
            </h3>
            <p class="feedback-heading">
                <strong> Give us feedback to improve our notes</strong> and
                solve mistakes
            </p>
        </div>
    </div>
    <!-- third-container --third-container --third-container --third-container --third-container -->
    <div class="third-container">
        <div class="third-title">
            <h4>Recently added</h4>
            <hr class="third-hr" />
        </div>
        <div class="notes-container">
            @php
                $count = 1;
            @endphp
            @foreach ($notesinfo as $note)
                @php
                    if ($count == 7) {
                        break;
                    }
                @endphp
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
                    <button class="dsubject-button" role="button">Download</button>
                </div>
                @php
                    $count += 1;
                @endphp
            @endforeach
        </div>
        <div class="subject-button-class">
            <a href="/instruinsights/subjects"><button class="subject-button" role="button">
                    View Subjects
                </button></a>
        </div>
    </div>
    <!-- fourth-container-- fourth-container-- fourth-container-- fourth-container-- fourth-container-->
    <div class="fourth-container">
        <div class="Why">
            <h2 class="why-heading">Why InsutuInsights?</h2>
            <p class="why-description">
                You can download thousands of free study notes, buy cheap
                notes online and sell revision, lecture and study notes for
                charity and personal profit.
            </p>
            <p class="why-description">
                Instruinsights is conceptualized to enable users to access study
                documents with ease. It enables ethical sharing of original
                revision notes, lecture notes, and study notes to maximize
                learning.
            </p>
            <div class="icons">
                <div class="document">
                    <img src="{{ URL::asset('/images/gif/book2.gif') }}" alt="" />
                    <p class="document-description">
                        <strong>Sell lecture notes and study notes</strong>
                    </p>
                </div>
                <div class="free">
                    <div class="free-icon">
                        <img src="{{ URL::asset('/images/gif/free2.gif') }}" alt="" />
                    </div>
                    <p class="free-description">
                        <strong>Download notes absolutely for free</strong>
                    </p>
                </div>
                <div class="accurate">
                    <div class="thumb-icon">
                        <img src="{{ URL::asset('/images/gif/thumb.gif') }}" alt="" />
                    </div>
                    <p class="accurate-description">
                        <strong>Download accurate notes</strong>
                    </p>
                </div>
                <div class="feedback">
                    <div class="feedback-icon">
                        <img src="{{ URL::asset('/images/gif/feedback.gif') }}" alt="" />
                    </div>
                    <p class="feedback-description">
                        <strong>Feedback accepted to improve the notes</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="media-icons">
            <h3>Follow US</h3>
            <a href=""><img class="twitter" src="{{ URL::asset('/images/media-icons/twitter.png') }}"
                    alt="" /></a>
            <a href=""><img class="linkedin" src="{{ URL::asset('/images/media-icons/linkedin.png') }}"
                    alt="" /></a>
            <a href=""><img class="instagram" src="{{ URL::asset('/images/media-icons/instagram.png') }}"
                    alt="" /></a>
        </div>
        <p class="copyright">
            Copyright © 2023 InstruInsights, All Rights Reserved.
        </p>
    </div>
</body>

</html>
