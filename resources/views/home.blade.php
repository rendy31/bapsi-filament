@extends('layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-xl-4">
                  <h2 data-aos="fade-up">BAPSI</h2>
                  <blockquote data-aos="fade-up" data-aos-delay="100">
                      <p>"Seperti jaringan yang kuat dalam infrastruktur IT, kesehatan manusia juga memerlukan sistem yang kokoh untuk berfungsi optimal. Sebagai seorang IT Support, menjadi bagian penting dari tim yang membangun fondasi yang stabil untuk perawatan kesehatan yang efektif. Teruslah menginspirasi dengan setiap solusi teknologi yang dihadirkan, karena setiap langkah kecil membawa kita lebih dekat pada keselamatan dan kesejahteraan."</p>
                  </blockquote>
                  {{-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                      <a href="#about" class="btn-get-started">Get Started</a>
                      <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                          class="glightbox btn-watch-video d-flex align-items-center"><i
                              class="bi bi-play-circle"></i><span>Watch Video</span></a>
                  </div> --}}

              </div>
          </div>
      </div>
  </section><!-- End Hero Section -->

  <main id="main">

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>Recent Blog Posts</h2>

              </div>

              <div class="row gy-5">
                @foreach ($panduans as $panduan)
                    
                
                  <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="post-box">
                          <div class="post-img"><img src="{{ asset('storage/' . $panduan->thumbnail) }}" class="img-fluid" alt="">
                          </div>
                          <div class="meta">
                              <span class="post-date">{{$panduan->created_at->format('d M Y')}}</span>
                              <span class="post-author"> {{$panduan->kategori->namaKategori}}</span>
                          </div>
                          <h3 class="post-title">{{$panduan->judul}}</h3>
                          <p>{{ strlen($panduan->deskripsi) > 150 ? substr($panduan->deskripsi, 0, 150) . '...' : $panduan->deskripsi }}</p>
                          <a href="/panduan-detail/{{$panduan->id}}" class="readmore stretched-link"><span>Read More</span><i
                                  class="bi bi-arrow-right"></i></a>
                      </div>
                  </div>

                  @endforeach
                  
              </div>

          </div>
      </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->
@endsection