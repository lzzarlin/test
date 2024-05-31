<!------------------------------------------
NAVBAR
------------------------------------------->
<nav
    class="topnav navbar navbar-expand-lg navbar-dark bg-secondary-white fixed-top bg-white navbar-light shadow-sm scrollednav">
    @include('front.layouts.nav')
</nav>
<!-- End Navbar -->
<!------------------------------------------HEADER------------------------------------------->
<div class="jumbotron jumbotron-fluid mb-3 bg-cyan position-relative"
    style="margin-top: 90px; background-image: url(/front/img/sbbj.jpg);">
    <div class="container text-white h-100 tofront">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                @if (isset($category))
                    <h2 class="display-3">{{ $category->name }}</h2>
                    <p>{{ $category->description }}</p>
                @else
                    <h2 class="display-3">We provide various products.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In nisi itaque voluptatum dolorem non
                        laborum modi eum vitae ipsa maiores eius eveniet asperiores, optio molestiae culpa doloremque
                        dolor
                        ut possimus!</p>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End Header -->
