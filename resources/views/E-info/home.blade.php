@extends('E-info.master')
@section('body')


<!-- ======= Hero Section ======= -->
<section id="hero" class="container-fluid pt-1 pb-5">
    <hr class="header-hr">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('{{ asset('/')}}e-info/assets/img/slide/slide-1.jpg')">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                        <p class="animate__animated animate__fadeInUp"> velit est quam dolor ad a aliquid qui aliquid.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('{{ asset('/')}}e-info/assets/img/slide/slide-2.jpg')">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp"> velit est quam dolor ad a aliquid qui aliquid.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('{{ asset('/')}}e-info/assets/img/slide/slide-3.jpg')">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp"> velit est quam dolor ad a aliquid qui aliquid.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
<!-- End Hero -->


<main id="main " class="pt-5">


    <!-- ======= Blog Section ======= -->
    <section id="blog " class="blog section ">
        <div class="container-fluid " data-aos="fade-up ">

            <div class="row ">

                <div class="col-lg-8 entries ">

                    <article class="entry ">
                        <h4 class="Category-Post">blog Post</h4>

                        <div class="entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-1.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="entry-title ">
                            <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="entry-meta ">
                            <ul>
                                <li class="d-flex align-items-center "><i class="bi bi-person "></i> <a href="blog-single.html ">John Doe</a></li>
                                <li class="d-flex align-items-center "><i class="bi bi-clock "></i> <a href="blog-single.html "><time datetime="2020-01-01 ">Jan 1, 2020</time></a></li>
                                <li class="d-flex align-items-center "><i class="bi bi-chat-dots "></i> <a href="blog-single.html ">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content ">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                                aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                            </p>
                            <div class="read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                    </article>
                    <!-- End blog entry -->

                    <article class="entry ">

                        <div class="entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-2.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="entry-title ">
                            <a href="blog-single.html ">Nisi magni odit consequatur autem nulla dolorem</a>
                        </h2>

                        <div class="entry-meta ">
                            <ul>
                                <li class="d-flex align-items-center "><i class="bi bi-person "></i> <a href="blog-single.html ">John Doe</a></li>
                                <li class="d-flex align-items-center "><i class="bi bi-clock "></i> <a href="blog-single.html "><time datetime="2020-01-01 ">Jan 1, 2020</time></a></li>
                                <li class="d-flex align-items-center "><i class="bi bi-chat-dots "></i> <a href="blog-single.html ">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content ">
                            <p>
                                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam. Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam.
                                Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                            </p>
                            <div class="read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                </div>
                <div class="col-lg-4 ">

                    <div class="sidebar ">

                        <h3 class="sidebar-title ">Search</h3>
                        <div class="sidebar-item search-form ">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <!-- End sidebar search formn-->

                        <h3 class="sidebar-title ">Categories</h3>
                        <div class="sidebar-item categories ">
                            <ul>
                                <hr class="devider">
                                <li><a href="# ">General <span>(25)</span></a></li>
                                <hr class="devider">
                                <li><a href="# ">Lifestyle <span>(12)</span></a></li>
                                <hr class="devider">
                                <li><a href="# ">Travel <span>(5)</span></a></li>
                                <hr class="devider">
                                <li><a href="# ">Design <span>(22)</span></a></li>
                                <hr class="devider">
                                <li><a href="# ">Creative <span>(8)</span></a></li>
                                <hr class="devider">
                                <li><a href="# ">Educaion <span>(14)</span></a></li>
                                <hr class="devider">
                            </ul>
                        </div>
                        <!-- End sidebar categories-->

                        <h3 class="sidebar-title ">Recent Posts</h3>
                        <div class="sidebar-item recent-posts ">
                            <div class="post-item clearfix ">
                                <img src="{{ asset('/')}}e-info/assets/img/blog/blog-recent-1.jpg " alt=" ">
                                <h4><a href="blog-single.html ">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01 ">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="{{ asset('/')}}e-info/assets/img/blog/blog-recent-2.jpg " alt=" ">
                                <h4><a href="blog-single.html ">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01 ">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="{{ asset('/')}}e-info/assets/img/blog/blog-recent-3.jpg " alt=" ">
                                <h4><a href="blog-single.html ">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01 ">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="{{ asset('/')}}e-info/assets/img/blog/blog-recent-4.jpg " alt=" ">
                                <h4><a href="blog-single.html ">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01 ">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="{{ asset('/')}}e-info/assets/img/blog/blog-recent-5.jpg " alt=" ">
                                <h4><a href="blog-single.html ">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01 ">Jan 1, 2020</time>
                            </div>

                        </div>
                        <!-- End sidebar recent posts-->

                        <h3 class="sidebar-title ">Tags</h3>
                        <div class="sidebar-item tags ">
                            <ul>
                                <li><a href="# ">App</a></li>
                                <li><a href="# ">IT</a></li>
                                <li><a href="# ">Business</a></li>
                                <li><a href="# ">Mac</a></li>
                                <li><a href="# ">Design</a></li>
                                <li><a href="# ">Office</a></li>
                                <li><a href="# ">Creative</a></li>
                                <li><a href="# ">Studio</a></li>
                                <li><a href="# ">Smart</a></li>
                                <li><a href="# ">Tips</a></li>
                                <li><a href="# ">Marketing</a></li>
                            </ul>
                        </div>
                        <!-- End sidebar tags-->
                        <div id="sidebar" class="pt-3">
                            <div class="sidebar-newsletter">
                                <h4 class="sidebar-title ">Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action="" method="post">
                                    <input class="email" type="email" name="email"><input class="submit" type="submit" value="Subscribe">
                                </form>

                            </div>
                        </div>

                    </div>
                    <!-- End sidebar -->

                </div>
                <!-- End blog sidebar -->

            </div>

        </div>
    </section>
    <!-- End Blog Section -->

</main>
<!-- End #main -->
<!-- populare post card -->

<section class="section">
    <div class="container ">
    <h4 class="Category-Post">populare Post</h4>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <article class="populare-post-entry ">

                        <div class="populare-post-entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-4.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="populare-post-entry-title ">
                            <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="populare-post-entry-content ">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            </p>
                            <div class="populare-post-read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                    </article>
                </div>
               
                <div class="item">
                    <article class="populare-post-entry ">

                        <div class="populare-post-entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-4.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="populare-post-entry-title ">
                            <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="populare-post-entry-content ">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            </p>
                            <div class="populare-post-read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                    </article>
                </div>
                <article class="populare-post-entry ">

                    <div class="populare-post-entry-img ">
                        <img src="{{ asset('/')}}e-info/assets/img/blog/blog-4.jpg " alt=" " class="img-fluid ">
                    </div>

                    <h2 class="populare-post-entry-title ">
                        <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                    </h2>

                    <div class="populare-post-entry-content ">
                        <p>
                            Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                        </p>
                        <div class="populare-post-read-more ">
                            <a href="blog-single.html ">Read More</a>
                        </div>
                    </div>

                </article>
                <div class="item">
                    <article class="populare-post-entry ">

                        <div class="populare-post-entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-4.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="populare-post-entry-title ">
                            <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="populare-post-entry-content ">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            </p>
                            <div class="populare-post-read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="item">
                    <article class="populare-post-entry ">

                        <div class="populare-post-entry-img ">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-4.jpg " alt=" " class="img-fluid ">
                        </div>

                        <h2 class="populare-post-entry-title ">
                            <a href="blog-single.html ">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="populare-post-entry-content ">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
                            </p>
                            <div class="populare-post-read-more ">
                                <a href="blog-single.html ">Read More</a>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  category post image oerlay-->
@endsection