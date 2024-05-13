@extends('layout')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @foreach ($panduans as $panduan)
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../image/panduan-detail.jpg');">

      <div class="container position-relative d-flex flex-column align-items-center">

        <h2 class="fs-1">{{$panduan->judul}}</h2>
        <ol>
          {{-- <li><a href="index.html">Panduan</a></li> --}}
          <li class="fs-3">Panduan Detail</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        
            
        
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              {{-- <div class="post-img">
                <img src="{{ asset('storage/' . $panduan->thumbnail) }}" alt="" class="img-fluid">
              </div> --}}

              {{-- <h2 class="title">{{$panduan->judul}}</h2> --}}

              {{-- <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">BAPSI</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                </ul>
              </div><!-- End meta top --> --}}

              <div class="content">
                <p>
                    {{$panduan->deskripsi}} <br>
                    @if($panduan->attachment)
                        <a class="btn text-white" style="background-color: #063970;" href="{{ asset('storage/' . $panduan->attachment) }}" download>Download Template</a>
                    @endif

                    <br>
                    <div class="video-wrapper">
                        {{!!$panduan->link!!}}
                    </div>

                </p>

                

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-date"></i>
                <ul class="cats">
                  <li><a href="#">{{$panduan->created_at->format('d M Y')}}</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">{{$panduan->kategori->namaKategori}}</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

          
        </div>

      </div>
      @endforeach
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
@endsection