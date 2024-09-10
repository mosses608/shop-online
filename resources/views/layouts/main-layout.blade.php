<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('Shop | Kakala')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body class="font-sans-antialiased">
        <header class="ajax-wrapper-md-5" id="ajax-wrapper-md-5" style="background-color:#FFFFFF; position:absolute;">
            <a href="/"><img src="{{asset('assets/images/kakalaLogo.png')}}" alt="Logo"></a>
            <div class="centered-ajax-wrapper">
                <form action="/explore" method="GET" class="product-search">
                    @csrf
                    <select id="" class="selector-changer">
                        <option value="1">Products</option>
                        <option value="2">Manufacturers</option>
                        <option value="3">Suppliers</option>
                        <option value="4">By Region</option>
                    </select><span id="demacator">|</span>
                    <input type="text" name="search" id="product-searcher" placeholder="Search product">
                    <button type="submit" class="btn-button"><i class="fa fa-search"></i> <span>Search</span></button>
                </form>
                <div class="minro-component">
                    <button class="lang-changer"><i class="fa fa-language"></i></button>
                    <button class="user-account"><i class="fa fa-user"></i></button>
                    @auth('web')
                    <button class="sign-up-btn"><a href="/business-dashboard">Return To Dashboard</a></button>
                    @else
                    <button class="sign-up-btn"><a href="/register" style="text-decoration:none; color:#FFFFFF;">Sign Up</a></button>
                    @endauth
                </div>
            </div><br><br>

            <!-- <script>
                document.getElementById("product-searcher").addEventListener('click', function(){
                    document.getElementById("product-searcher").style.border='none';
                });
            </script> -->
        </header>
       <main>
           @yield('content')
       </main>
       <footer>
            <hr><hr><hr>
            <center>
                <br>
            <table class="footer-table-t">
                <tr>
                    <th>Get To Know Kakala</th>
                    <th>Support</th>
                    <th>Orders</th>
                </tr>
                <tr>
                    <td><a href="#">About Us</a></td>
                    <td><a href="#">Help Desk</a></td>
                    <td><a href="#">Track Order</a></td>
                </tr>
                <tr>
                    <td><a href="#">News Center</a></td>
                    <td><a href="#">FAQs</a></td>
                    <td></td>
                </tr>
            </table>
            <br><br>
            <div class="social-media-platform">
                <a href="#" id="fab-ig"><i class="fab fa-instagram"></i></a>
                <a href="#" id="fab-x"><i class="fab fa-x"></i></a>
                <a href="#" id="fab-youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" id="fab-facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" id="fab-tiktok"><i class="fab fa-tiktok"></i></a>
            </div>
            </center>
            <button class="footer-btn">
                <span class="message-cover"><i class="fas fa-envelope"></i></span><hr><hr><hr>
                <span class="comment-wrapper"><i class="fa fa-comment"></i></span><hr><hr><hr>
                <span class="scrollToTop" onclick="scrollToTop()">&#8593;</span>
            </button>
       </footer>

        <script>
        function scrollToTop(){
            window.scrollTo({
                top:0,
                behavior:'smooth',
            });
        }

        </script>

        <script>
            let bagSlide = 0;
            slideNewBag();

            function slideNewBag(){
                let bagslides = document.getElementsByClassName("bag-looper-container");

                for (let i = 0; i < bagslides.length; i++) {
                    bagslides[i].style.display='none';
                }
                bagSlide++;

                if(bagSlide > bagslides.length){
                    bagSlide = 1;
                }
                bagslides[bagSlide - 1].style.display='block';
                setTimeout(slideNewBag,10500);
            }
        </script>

        <script>
            let bfIndex = 0;
            showbpSlider();

            function showbpSlider(){
                let bdSlider = document.getElementsByClassName("care-looper-container");
                for (let i = 0; i < bdSlider.length; i++) {
                    bdSlider[i].style.display='none';
                }
                bfIndex++;
                if(bfIndex > bdSlider.length){
                    bfIndex = 1;
                }
                bdSlider[bfIndex - 1].style.display='block';
                setTimeout(showbpSlider,10700);
            }
        </script>

        <script>
            let bookIndex = 0;
            bookSlideShower()

            function bookSlideShower(){
                let bookSlides = document.getElementsByClassName("book-looper-container");
                for (let i = 0; i < bookSlides.length; i++) {
                    bookSlides[i].style.display='none';
                }
                bookIndex++;

                if(bookIndex > bookSlides.length){
                    bookIndex = 1;
                }
                bookSlides[bookIndex - 1].style.display='block';
                setTimeout(bookSlideShower,11500);
                
            }
        </script>


        <script>
            function showCategoryelect(){
                document.querySelector('.category-all-component').classList.toggle('active');
            }
        </script>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let slides = document.getElementsByClassName("single-loop-container");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display='none';
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                slides[slideIndex - 1].style.display='block';
                setTimeout(showSlides, 8000);
            }

        </script>

        <script>
            function chaneSlide(n) {
            showSlides(slideIndex += n);
            }

            function showSlides(n) {
                let slides = document.getElementsByClassName("single-loop-container");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display='none';
                }
                slides[slideIndex - 1].style.display='block';
            }

        </script>

        
        <script>
            let initialView = 0;
            viewSlide();

            function viewSlide(){
                let slideViewer = document.getElementsByClassName("comp-looper-container");

                for (let i = 0; i < slideViewer.length; i++) {
                    slideViewer[i].style.display='none';
                }
                initialView++;

                if(initialView > slideViewer.length){
                    initialView = 1;
                }

                slideViewer[initialView - 1].style.display='block';

                setTimeout(viewSlide, 9000);

            }
        </script>

        
        <script>
            let initialIndex = 0;
            changeSlides();

            function changeSlides(){
                let slideIndex = document.getElementsByClassName("electr-looper-container");
                for (let i = 0; i < slideIndex.length; i++) {
                    slideIndex[i].style.display='none';
                }
                initialIndex++;

                if(initialIndex > slideIndex.length){
                    initialIndex = 1;
                }

                slideIndex[initialIndex-1].style.display='block';
                setTimeout(changeSlides,10000);
            }
        </script>

        <script>
            function changeToSlide(n){
                showNextSlide(slide += n);
            }

            function showNextSlide(n){
                let slideshow = document.getElementsByClassName("electr-looper-container");
                if(n > slideshow.length){
                    slide = 1;
                }
                if(n < 1){
                    slide = slideshow.length;
                }
                for (let i = 0; i < slideshow.length; i++) {
                    slideshow[i].style.display='none';
                }

                slideshow[slide-1].style.display='block';
            }
        </script>

        <script>
            let slideShowIndex =0;
            showNewSlideIndex();

            function showNewSlideIndex(){
                let slideContainer = document.getElementsByClassName("lady-fash-looper-container");
                for (let i = 0; i < slideContainer.length; i++) {
                    slideContainer[i].style.display='none';           
                }

                slideShowIndex++;

                if(slideShowIndex > slideContainer.length){
                    slideShowIndex = 1;
                }
                slideContainer[slideShowIndex - 1].style.display='block';

                setTimeout(showNewSlideIndex,11000);
            }
        </script>

        <script>
            let indexSlide = 0;
            indexSlider();

            function indexSlider(){
                let allSlides = document.getElementsByClassName("men-fash-looper-container");
                 for (let i = 0; i < allSlides.length; i++) {
                    allSlides[i].style.display='none';
                 }

                 indexSlide++

                 if(indexSlide > allSlides.length){
                    indexSlide = 1;
                 }
                 allSlides[indexSlide - 1].style.display='block';
                 setTimeout(indexSlider,12000);
            }
        </script>

        <script>
            let initialkitSlide = 0;
            kitchomSlider();

            function kitchomSlider(){
                let kitcSlide = document.getElementsByClassName("kitc-hom-looper-container");

                for (let i = 0; i < kitcSlide.length; i++) {
                    kitcSlide[i].style.display='none';
                }
                initialkitSlide++;

                if(initialkitSlide > kitcSlide.length){
                    initialkitSlide = 1;
                }
                kitcSlide[initialkitSlide - 1].style.display='block';
                setTimeout(kitchomSlider,13000);
            }
        </script>

        <script>
            let showIndex = 0;
            showIndexSlider();

            function showIndexSlider(){
                let slideShoeViewer = document.getElementsByClassName("shoes-looper-container");

                for (let i = 0; i < slideShoeViewer.length; i++) {
                    slideShoeViewer[i].style.display='none';
                }
                showIndex++;
                
                if(showIndex > slideShoeViewer.length){
                    showIndex = 1;
                }
                slideShoeViewer[showIndex - 1].style.display='block';
                setTimeout(showIndexSlider,14000);
            }
        </script>

        <script>
            let spareIndex = 0;
            spareSlideView();

            function spareSlideView(){
                let spareSlide = document.getElementsByClassName("spare-looper-container");

                for (let i = 0; i < spareSlide.length; i++) {
                    spareSlide[i].style.display='none';  
                }
                spareIndex++;

                if(spareIndex > spareSlide.length){
                    spareIndex = 1;
                }
                spareSlide[spareIndex - 1].style.display='block'; 
                setTimeout(spareSlideView,15000);
            }
        </script>

        <script>
            let sportIndex = 0;
            sportSlideShow(); 

            function sportSlideShow(){
                let sportSlides = document.getElementsByClassName("sportoutdoor-looper-container");
                for (let i = 0; i < sportSlides.length; i++) {
                    sportSlides[i].style.display='none';
                }
                sportIndex++;
                if(sportIndex > sportSlides.length){
                    sportIndex = 1; 
                }
                sportSlides[sportIndex - 1].style.display='block';
                setTimeout(sportSlideShow,15500);
            }
        </script>
    </body>
</html>
