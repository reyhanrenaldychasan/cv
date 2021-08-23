@extends('welcome')

@push('css-scripts')
<style>
    .resume-title {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .resume-item{
        padding: 0 0 20px 20px;
        margin-top: -2px;
        border-left: 2px solid #34b7a7;
        position: relative;
    }

    .resume-item h4 {
        line-height: 18px;
        font-weight: bold;
    }

    .resume-item h6 {
        display: inline-block;
        padding: 5px 15px;
        background-color: hsl(206, 21%, 30%);
        font-weight: 600;
        margin-bottom: 10px;
    }

    .resume-item::before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50px;
        left: -9px;
        top: 0;
        background: hsl(206, 21%, 23%);
        border: 2px solid #34b7a7;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="mb-4">
        <h1>Resume</h1>
    </div>
    <div class="row">
        <div class="col-md">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
                <h4>Computer Science</h4>
                <h5>Pembangunan Jaya University</h5>
                <h6>2017 - 2021 | Bintaro</h6>
                <p>Courses</p>
                <div class="row">
                    <div class="col">
                        <ul>
                            <li>Web Design</li>
                            <li>Back-end Programming</li>
                            <li>PHP</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>Programming</li>
                            <li>Laravel</li>
                            <li>CodeIgniter</li>
                            <li>Flutter</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="resume-item">
                <h4>Software Engineering</h4>
                <h5>Bina Informatika Vocational School</h5>
                <h6>2014 - 2017 | Bintaro</h6>
                <p>Courses</p>
                <div class="row">
                    <div class="col">
                        <ul>
                            <li>Web Design</li>
                            <li>CSS</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>HTML</li>
                            <li>Javascript</li>
                            <li>Laravel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <h3 class="resume-title">Work Experience</h3>
            <div class="resume-item">
                <h4>Back-end Programming</h4>
                <h5>Toruz Corp.</h5>
                <h6>2018</h6>
                <p>Tasks</p>
                <ul>
                    <li>Created all API for project Kicauku with laravel</li>
                    <li>Created Kicauku Partner in web version for project
                        Kicauku with laravel</li>
                </ul>
            </div>
            <div class="resume-item">
                <h4>Web Developer</h4>
                <h5>PT Incore System Solution</h5>
                <h6>2016</h6>
                <p>Tasks</p>
                <ul>
                    <li>Created maps API for project BookingDulu using Google
                        Maps API</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection