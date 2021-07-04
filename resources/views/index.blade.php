<!DOCTYPE html>
<html lang="id-ID">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Retina Photo</title>
	<link rel="stylesheet" href="https://p.wahyusa.repl.co/company/owl.carousel.min.css">
	<link rel="stylesheet" href="https://p.wahyusa.repl.co/company/owl.theme.default.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('/image/logo-retina.png') }}">

</head>

<body class="bg-gray-200">

	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">

		<div class="p-4">
			<div class="font-extrabold tracking-widest text-xl"><a href="https://www.instagram.com/retina.photo/" class="transition duration-500 hover:text-indigo-500">Retina.Photo</a></div>
		</div>

		<!-- Nav Items Working on Tablet & Bigger Sceen -->
		<div class="p-4 hidden md:flex flex-row justify-between font-bold">
			<a id="hide-after-click" href="#about" class="mx-4 text-lg  border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">About</a>
            <a href="#paket" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Package</a>
            <a href="#showcase" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Portfolio</a>
            <a href="#moreinfo" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">More Info</a>
		</div>

		<!-- Burger Nav Button on Mobile -->
		<div id="nav-open" class="p-4 md:hidden">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
			stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
				<line x1="3" y1="12" x2="21" y2="12"></line>
				<line x1="3" y1="6" x2="21" y2="6"></line>
				<line x1="3" y1="18" x2="21" y2="18"></line>
			</svg>
		</div>
	</nav>

	<!-- Opened Nav in Mobile -->
	<div id="nav-opened" class="fixed left-0 right-0 hidden bg-white mx-2 mt-16 rounded-br rounded-bl shadow z-10">
		<div class="p-2 divide-y divide-gray-600 flex flex-col">
			<a href="#about" class="p-2 font-semibold hover:text-indigo-700">About</a>
            <a href="#paket" class="p-2 font-semibold hover:text-indigo-700">Package</a>
            <a href="#showcase" class="p-2 font-semibold hover:text-indigo-700">Portfolio</a>
            <a href="#moreinfo" class="p-2 font-semibold hover:text-indigo-700">More Info</a>
		</div>
	</div>

	<header id="up" class="bg-center bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
		<!-- Overlay Background + Center Control -->
		<div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
			<div class="mx-2 text-center">
				<h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
					<span class="text-white">Capturing</span> Moment From Today
           </h1>
           <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
            Creating <span class="text-white">Memories</span> For <span class="text-white">a</span> Lifetime
           </h2>
           <div class="inline-flex">
           <button class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition duration-500 md:text-xl">Hire US!</button>
           <a href="#about"><button class="p-2 my-5 mx-2 bg-transparent border-2 bg-indigo-200 bg-opacity-75 hover:bg-opacity-100 border-indigo-700 rounded hover:border-indigo-800 font-bold text-indigo-800 shadow-md transition duration-500 md:text-lg">Learn More</button></a>
           </div>
        </div>
    </div>
</header>

<main>

<section id="about" class="flex flex-col items-center justify-center bg-light">
    @php
        $profil = \App\Models\Profil::first();
    @endphp
    <div class="flex flex-col md:flex-row rounded overflow-hidden">
    <img src="image/FILE0363.jpg" class="h-48 md:w-1/2 md:h-screen" loading="lazy">
    <div class="mt-1 md:mt-4 m-4 flex self-center flex-col">
        <div class="img-size "><img src="{{'image/logo-retina.png'}}" alt=""></div>
        <h1 class="font-extrabold text-4xl mt-1 mb-2 mm:my-4 border-b-4 border-indigo-600 self-start leading-tight">{{ $profil->judul }}</h1>
        <p class="text-lg">{{ $profil->keterangan }}</p>
        <div class="flex">
        <button class="p-2 font-bold text-white border-2 border-indigo-700 text-indigo-700 self-start mt-4 rounded mr-2">Read more</button>
        <a href="#whyus">
        <button class="flex flex-row p-2 font-bold text-white border-2 border-indigo-700 text-indigo-700 self-start mt-4 rounded">
            Why Us ?<span><svg class="ml-2 text-indigo-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg></span>
        </button></a>
        </div>
    </div>
    </div>
</section>

<section id="paket" style="padding-top:70px; padding-bottom:70px; background-color:white;" id="whyus" class="flex flex-col sm:flex-row flex-wrap justify-between">
    @php 
    $data = \App\Models\Paket::All();
    @endphp
    @foreach($data as $item)
        <div class="flex flex-col items-center w-full sm:w-1/2 bg-white p-4">
            <img width=250 src="{{ asset('image/'.$item->foto) }}" alt="">
            <h3 class="text-4xl font-bold text-indigo-600">{{$item->nama_paket}}</h3>
            <p class="text-center mb-4">{{$item->keterangan}}</p>
        </div >
    @endforeach
    
</section>

<div id="moreinfo" class="flex flex-col sm:flex-row justify-between w-full md:mt-8 md:px-8 my-8">
    <div class="mx-2">
    <h3 class="text-3xl font-extrabold">Ready to start ?</h3>
    <h3 class="text-xl font-extrabold">Please Contact Us.</h3>
    </div>
    <div class="flex self-center">
        <a  href="https://www.instagram.com/retina.photo/" target='_blank'><button class="p-2 font-bold text-white border-2 border-indigo-700 bg-indigo-700 mt-4 rounded w-64">Hire Us!</button></a>
    </div>
</div>

<section id="showcase" class="h-screen bg-white p-4 px-8 flex flex-col justify-center items-center">
    @php
        $titleportofolio = "Portofolio";
        $portofolio = \App\Models\Portofolio::all();
    @endphp
    <div class="flex justify-center">
        <h1 class="font-extrabold text-4xl mt-1 mb-2 mm:my-4 border-b-4 border-indigo-600 self-start leading-tight">{{ $titleportofolio }}</h1>
    </div>
    <div class="owl-carousel owl-theme">
        @foreach ($portofolio as $portofolio)
            <div class="m-8 shadow-md rounded overflow-hidden"><img data-src="{{ asset('image/'.$portofolio->foto) }}" src="{{ asset('image/'.$portofolio->foto) }}" class="owl-lazy w-full shadow-lg"></div>
        @endforeach
    </div>
</section>

<section id="buy" class="bg-white p-4 px-8">
    <div class="flex justify-center">
    <h1 class="font-extrabold text-4xl mt-1 mb-2 mm:my-4 border-b-4 border-indigo-600 self-start leading-tight">4 Steps to Start</h1></div>
    <div class="flex flex-col md:flex-row md:flex-wrap justify-center">
    <div class="flex items-center bg-white p-4">
        <span class=" border border-indigo-600 text-indigo-600 bg-indigo-100 rounded-tl-full rounded-bl-full p-4">
        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        </span><h3 class="w-full md:w-auto border border-indigo-600 bg-gray-200 p-4 rounded-tr-full rounded-br-full font-bold text-indigo-700">Hire Us!</h3>
    </div>
    <div class="flex items-center bg-white p-4">
        <span class=" border border-indigo-600 text-indigo-600 bg-indigo-100 rounded-tl-full rounded-bl-full p-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        </span><h3 class="w-full md:w-auto border border-indigo-600 bg-gray-200 p-4 rounded-tr-full rounded-br-full font-bold text-indigo-700">Send Concepts</h3>
    </div>
    <div class="flex items-center bg-white p-4">
        <span class=" border border-indigo-600 text-indigo-600 bg-indigo-100 rounded-tl-full rounded-bl-full p-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-repeat"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
        </span><h3 class="w-full md:w-auto border border-indigo-600 bg-gray-200 p-4 rounded-tr-full rounded-br-full font-bold text-indigo-700">Get feedback</h3>
    </div>
    <div class="flex items-center bg-white p-4">
        <span class=" border border-indigo-600 text-indigo-600 bg-indigo-100 rounded-tl-full rounded-bl-full p-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" y1="9" x2="6" y2="21"></line></svg>
        </span><h3 class="w-full md:w-auto border border-indigo-600 bg-gray-200 p-4 rounded-tr-full rounded-br-full font-bold text-indigo-700">Take Photo</h3>
    </div>
</div>

<div class="flex flex-row justify-center flex-wrap">
    <div class="m-4 w-full md:w-5/12">
    <h3 class="font-semibold text-xl text-gray-900">Which payment option do we accept ?</h3>
    <p>We accept bitcoin, paypal, visa, mastercard, and wire.</p>
    </div>
    <div class="m-4 w-full md:w-5/12">
    <h3 class="font-semibold text-xl text-gray-900">Can we request feature or revision edited photo ?</h3>
    <p>Ofcourse, you have 5x limited request edited for your photo.</p>
    </div>
    <div class="m-4 w-full md:w-5/12">
    <h3 class="font-semibold text-xl text-gray-900">How about license ?</h3>
    <p>We're here to take photo for you, so everything is for you.</p>
    </div>
    <div class="m-4 w-full md:w-5/12">
    <h3 class="font-semibold text-xl text-gray-900">What if i cancel my prewedding ?</h3>
    <p>We provide full refund, and gift your money back.</p>
    </div>
</div>
</section>
</main>

<footer class="bg-indigo-800 text-white font-semibold p-4">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex flex-col w-full my-4 md:w-1/3">
        <div class="my-2 inline-flex"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        +6288888888888</div>
        <div class="my-2 inline-flex"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
        @Retina.Photo</div>
        <div class="my-2 inline-flex"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
        github.com/yogabaguss</div>
        </div>
        <div class="flex flex-col w-full my-4 md:w-1/3">
        <div>Main Office : Malang City</div>
        <div>Headquarter : Indonesia</div>
        </div>
        <div class="flex flex-col w-full my-4 md:w-1/3">
        <form>
            <input type="text" class="text-indigo-700 font-bold focus:outline-none focus:border-indigo-700 p-2 border border-indigo-600" placeholder="name@mail.io">
            <button class="bg-white p-2 font-bold text-indigo-700 border-2 border-indigo-700 focus:outline-none">Go</button>
        </form>
        
        </div>
    </div>
</footer>
<a href="#up" class="rounded-full fixed bottom-0 right-0 p-2 m-2 bg-black text-indigo-700 font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg></a>
<div class="text-lg bg-indigo-900 text-white font-bold text-center py-1"> &copy; 2021 by Aditya | Dhenis | Yoga </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
</body>
</html>
<!-- partial -->
  <script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>