@extends('E-info.master')
@section('body')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog Single</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>Blog Single</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog section">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-9 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                                aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                            </p>

                            <p>
                                Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                            </p>

                            <blockquote>
                                <p>
                                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                                </p>
                            </blockquote>

                            <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque. Iusto autem itaque. Repudiandae hic quae aspernatur
                                ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                            </p>

                            <h3>Et quae iure vel ut odit alias.</h3>
                            <p>
                                Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero
                                eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores
                                natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem
                                accusamus mollitia aut atque aut.
                            </p>
                            <img src="{{ asset('/')}}e-info/assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                            <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                            <p>
                                Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem
                                facilis hic dolorum dolores vel. Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a
                                quam vitae.
                            </p>
                            <p>
                                Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                            </p>

                        </div>
                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <div class=" pt-3 pb-20">
                            <a href="#"><img class="mr-10 mb-10" src="{{ asset('/')}}e-info/assets/img/gallery-facebook.jpg" alt="" data-pagespeed-url-hash="1757438515" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <a href="#"><img class="mr-10 mb-10" src="{{ asset('/')}}e-info/assets/img/gallery-twitter.jpg" alt="#" data-pagespeed-url-hash="1524426332" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <a href="#"><img class="mr-10 mb-10" src="{{ asset('/')}}e-info/assets/img/gallery-pinterest.jpg" alt="" data-pagespeed-url-hash="790310187" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <a href="#"><img class="mb-10" src="{{ asset('/')}}e-info/assets/img/gallery-whatsapp.jpg" alt="" data-pagespeed-url-hash="4085141131" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        </div>
                    </article>

                    <!-- End blog entry -->

                    <!-- End blog author bio -->

                    <div class="blog-comments">

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('/')}}e-info/assets/img/blog/comments-1.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('/')}}e-info/assets/img/blog/comments-2.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('/')}}e-info/assets/img/blog/comments-3.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat. Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum
                                            non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End comment reply #2-->

                        </div>


                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="">

                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" rows="4" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div>
                    <!-- End blog comments -->

                </div>
                <!-- End blog entries list -->

                <div class="col-lg-3">


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
    <!-- End Blog Single Section -->

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
<!-- populare post card -->

@endsection