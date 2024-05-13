@extends('layout')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/blog-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Blog</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

                    <div class="row gy-5 posts-list">
                        @foreach ($panduans as $panduan)
                            
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $panduan->thumbnail) }}" alt="" class="img-fluid">
                                    {{-- <img src="url('/storage/{{$panduan->thumbnail}}')" alt="" class="img-fluid"> --}}
                                </div>

                                <h2 class="title">
                                    <a href="/panduan-detail/{{$panduan->id}}">{{$panduan->judul}}</a>
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-details.html">BAPSI</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-details.html"><time datetime="2022-01-01">{{$panduan->created_at->format('d M Y')}}</time></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                href="blog-details.html">{{$panduan->kategori->namaKategori}}</a></li>
                                    </ul>
                                </div>

                                <div class="content">
                                    <p>
                                        {{ strlen($panduan->deskripsi) > 150 ? substr($panduan->deskripsi, 0, 150) . '...' : $panduan->deskripsi }}
                                        {{-- {{$panduan->deskripsi}} --}}
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="/panduan-detail/{{$panduan->id}}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                        @endforeach


                    </div><!-- End blog posts list -->

                    {{-- <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div><!-- End blog pagination --> --}}

                </div>

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection