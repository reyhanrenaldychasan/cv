@extends('welcome')

@push('css-scripts')
<style>
    .my-image {
        max-width: 300px;
    }

    .progress-bar {
        background-color: hsl(206, 21%, 53%);
        border-right: 2px solid black;
    }
</style>
@endpush

@section('content')
    <div class="container">
        <div class="mb-4">
            <h1>About</h1>
        </div>
        <div class="row mb-4">
            <div class="col-auto py-2">
                <img src="{{ asset('img/me-cropped.png') }}" class="my-image" alt="">
            </div>
            <div class="col">
                <div>
                    <h3>Web Developer</h3>
                    <p>An experienced programmer. Capable of fast learning. Thirst of knowledge. Very enthusiastic to things related to programming
                        especially web programming.</p>
                </div>
                <div>
                    <div class="mb-2">
                        <strong>Birthday:</strong> 14 October 1999
                    </div>
                    <div class="mb-2">
                        <strong>Degree:</strong> Bachelor
                    </div>
                    <div class="mb-2">
                        <strong>Phone:</strong> 0812 1080 3483
                    </div>
                    <div class="mb-2">
                        <strong>E-mail:</strong> reyhanrenaldychasan@yahoo.com
                    </div>
                    <div class="mb-2">
                        <strong>Place:</strong> Tangerang Selatan, Indonesia
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 60px">
            <h2 class="mb-4">Skills</h2>
            <div class="row">
                <div class="col-md">
                    <div class="skill py-2">
                        <label>PHP</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>Laravel</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>Jquery</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>CSS</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="skill py-2">
                        <label>HTML</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%; border-right: none"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>CodeIgniter</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>Flutter</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                    </div>
                    <div class="skill py-2">
                        <label>VueJS</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection