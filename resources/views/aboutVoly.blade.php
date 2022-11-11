<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- My css --}}
    <link rel="stylesheet" href="{{ asset('assets/about.css') }}">
    <title>About Voly</title>
</head>
<body>
@include('layouts.partials.navbar')
        <!-- Hero Banner Section -->
</div>      
<div class="isi">
<div class="konten">
        <div class="firstpost">
            <div class="left">
                <h4>PROFIL ESKUL</h4>
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                <button type="submit">See Detail</button>
            </div>
            <div class="right">
                <div class="back">
                    <img src="" alt="">
                </div>
                <div class="front">
                    <div class="firstimg">
                        
                    </div>
                    <div class="secondimg">

                    </div>
                </div>
            </div>
        </div>
        <div class="secondpost">
            <div class="left">
                <div class="konten">
                <div class="background"></div>
                <div class="imagefirst"></div>
        </div>
            </div>
            <div class="right">
                <h4>PROFIL ESKUL</h4>
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                <button type="submit">See All</button>
            </div>
        </div>
        <div class="thirdpost">
            <div class="bg">
                <div class="konten">
            <div class="item">
                    <center>
                        <div class="ewe"></div>
                    <h6>BLOG</h6>
        <h1>Stay updated with our latest news</h1>
        <span>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</span>
                </div>
                    </center>
                </div>
            </div>
            <div class="img">
            </div>
        </div>
    </div>
    <div class="fourpost">
        <div class="header">
            <div class="left">
                <label for="">Meet Our Team</label>
                <h1>Get to Know The team</h1>
            </div>
            <div class="right">
                <div class="space"></div>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
        </div>
        <div class="team"> 
        <div class="card2">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="namateam">
                    <label for=""></label>
                    <span> Ketua</span>
                </div>
        </div>
        </div>
        <div class="card2">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="namateam">
                    <label for=""></label>
                    <span> Wakil Ketua</span>
                </div>
        </div>
        </div>
        <div class="card2">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="namateam">
                    <label for=""></label>
                    <span> Bendahara</span>
                </div>
            
        </div>
        </div>
        <div class="card2">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
                <div class="namateam">
                    <label for=""></label>
                    <span> Sekertaris</span>
                </div>
        </div>
    </div>
</div>
            <div>   
            <button class="buttons" type="submit" name="submit" >View All</button>  
            </div> 
</div>
</div>

        <div class="lastpost">
            <div class="photo">PHOTO</div>
            
            <div class=isiphoto>
        <div class="phototeam"> 
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
</div>

<div class="phototeam"> 
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
        <div class="card3">
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
        </div>
        </div>
</div>
</div>
        </div>
   
</body>
</html>