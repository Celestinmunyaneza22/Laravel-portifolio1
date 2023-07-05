<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Page</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700;1,900&display=swap');

:root {
    --color-body:#b6cbce;
    --color-head:#eef3db;
    --color-base:#033f47;
    --color-base2:#022a30;
    --color-brand:#c0f780;
    --color-brand2:#deff58;
    --sidbar-width:240px;
    --font-base:'Bai Jamjuree';

}

body{
    background-color: var(--color-base2);
    color: var(--color-body);
    font-family: var(--font-base), sans-serif;
}
h1,h2,h3,h4,h5,h6{
    color: var(--color-head);
    font-weight: 700px;
}
a{
    text-decoration: none;
    color: var(--color-body);
    transition: all 0.4s ease;
}
a:hover{
    color: var(--color-brand);
}
img{
    width: 100%;
}
.text-brand{
    color: var(--color-brand);
}
.bg-base{
    background-color: var(--color-base);
}
.full-height{
    min-height: 100vh;
    height: 100%;
    display: flex;
    /* align-items: center; */
    flex-direction: column;
    justify-content: center;
    padding-top: 80px;
    padding-bottom: 80px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

.shadow-effect{
    transition: all 0.5s;
}
.shadow-effect:hover{
    box-shadow: -6px 6px 0 0 var(--color-brand);
}
.iconbox{
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    background-color: var(--color-brand);
    color: var(--color-base);
}

/* navbar */
.navbar{
    background-color: var(--color-base);
}
.navbar .nav-link{
    font-weight: 700;
    text-transform: uppercase;
    color: #ffffff;
}
.navbar .nav-link:hover{
    color: var(--color-brand);
}
.navbar .nav-link.active{
    color: var(--color-brand);
}
@media (min-width:992px) {
    .navbar{
        min-height: 100vh;
        width: var(--sidbar-width);
        background: linear-gradient(rgba(3, 63, 71, 0.9),rgba(3, 63, 71, 0.9)),url(assets/img/cls.jpg);
        background-size: cover;
        background-position: center;
    }
    .navbar-brand img{
        border: 6px solid var(--color-brand);
    }
    /* content wrqpper */

#content-wrapper{
    padding-left: var(--sidbar-width);
}
}

.btn{
    padding: 12px 28px;
    font-weight: 700;
}
.btn-brand{
    background-color: var(--color-brand);
    border-color: var(--color-brand);
}
.btn-brand:hover,.btn-brand:focus{
background-color: var(--color-brand2);
color: var(--color-base);
border-color: var(--color-brand2);
}
.link-custom{
    font-weight: 700;
    position: relative;
}
.link-custom::after{
    content: "";
    width: 0%;
    height: 2px;
    background-color: var(--color-brand);
    position: absolute;
    left: 0;
    top: 110%;
    transition: all 0.4s;
}
.link-custom:hover::after{
    width: 100%;
}
/* card */
.card-custom .card-custom-image{
overflow: hidden;
}
.card-custom .card-custom-image {
    transform: all 0.4s ease;
}
.card-custom:hover .card-custom-image img{
    transform: scale(1.1);
}

/* contact */
#contact .form-control{
    background-color: var(--color-base);
    border-color: var(--color-base);
    color: var(--color-body);
}
#contact .form-control:focus{
    border-color: var(--color-brand);
    box-shadow: none;
}
#contact .form-control::placeholder{
    color: var(--color-body);
}

#contact input.form-control{
    height: 44px;
}

/* social media icon */
.social-links{

}

.social-links a{
    width: 40px;
    height: 40px;
    display:inline-flex;
    align-items: center;
    justify-content: center;
    background-color: var(--color-base); 
    border-radius: 100px;
    font-size: 24px;
}
    </style>
</head>
<body>
    @yield('content')
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/js/aos.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
<script>
AOS.init();
// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
//   disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//   startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//   initClassName: 'aos-init', // class applied after initialization
//   animatedClassName: 'aos-animate', // class applied on animation
//   useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//   disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//   debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//   throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 700, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
    </script>
</body>
</html>