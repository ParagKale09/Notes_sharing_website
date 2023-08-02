<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/subjects.css') }}" rel="stylesheet" />
        <title>All-Subjects</title>
    </head>
    <body>
        <div class="first-container">
            <header>
                <img class="logo" src="{{URL::asset('/images/logo.png')}}" alt="logo" />
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
        <!-- Subjects Row 1 -- Subjects Row 1 -- Subjects Row 1 -- Subjects Row 1 -->
        <div class="subjects-container">
            <div class="subjects sub1">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>Machine Learning</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Machine_Learning')}}">
                    <button class="subject-button" role="button">Download</button>
                </a>
                
            </div>
            <div class="subjects sub2">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>Operating System</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Operating_System')}}">
                    <button class="subject-button" role="button">Download</button>
                </a>
                
            </div>
            <div class="subjects sub3">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>Industrial Automation 1</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Industrial_Automation_1')}}">
                <button class="subject-button" role="button">Download</button>
            </a>
            </div>
            <div class="subjects sub4">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>Industrial Automation 2</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Industrial_Automation_2')}}">
                    <button class="subject-button" role="button">Download</button>
                </a>
                
            </div>
            <div class="subjects sub5">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>Digital Signal Processing</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Digital_Signal_Processing')}}">
                <button class="subject-button" role="button">Download</button>
                </a>
            </div>
            <div class="subjects sub6">
                <img class="img-shape" src="{{URL::asset('/images/subjects/cg.png')}}" alt="" />
                <div class="card-title">
                    <p>IOT</p>
                </div>
                <a href="{{url('/instruinsights/subjects/get/Internet_of_Things')}}">
                <button class="subject-button" role="button">Download</button>
                </a>
            </div>
        </div>
        <div class="footer">
            <div class="media-icons">
                <h3>Follow US</h3>
                <a href=""
                    ><img
                        class="twitter"
                        src="{{URL::asset('/images/media-icons/twitter.png')}}"
                        alt=""
                /></a>
                <a href=""
                    ><img
                        class="linkedin"
                        src="{{URL::asset('/images/media-icons/linkedin.png')}}"
                        alt=""
                /></a>
                <a href=""
                    ><img
                        class="instagram"
                        src="{{URL::asset('/images/media-icons/instagram.png')}}"
                        alt=""
                /></a>
            </div>
            <p class="copyright">
                Copyright © 2023 InstruInsights, All Rights Reserved.
            </p>
        </div>
    </body>
</html>
