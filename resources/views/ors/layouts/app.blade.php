<!DOCTYPE html>
<html>
<head>
<title>ORS :: @yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('ors/assets/css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('ors/assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('ors/assets/css/w3-theme-blue-grey.css') }}">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="{{ asset('ors/assets/fonts/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.css') }}">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

</head>
<body class="w3-theme-l5">
    @include('sweetalert::alert')

@yield('content')


<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
<script>
// Accordion
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script>
    // $('#select2').select2();

      $(function () {
          // Summernote
          $('.textarea').summernote()
      })
  </script>
</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_social&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 00:45:19 GMT -->
</html>
