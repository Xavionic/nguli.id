@extends('admin/layout/main')

@section('title', 'Artikel')

@section('container')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <h1>Artikel</h1>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="card">
        <div class="card-body p-0">
          
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                      <article class="article article-style-c">
                        <div class="article-header">
                          <div class="article-image" data-background="/assets/img/artikel/harianborongan.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                          </div>
                        </div>
                        <div class="article-details">
                          <div class="article-category"><a href="#">Artikel</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                          <div class="article-title">
                            <h2><a href="#">Perbedaan Kuli Harian dan Borongan</a></h2>
                          </div>
                          <p>Sebuah artikel yang menjabarkan perbedaan istilah kuli harian dan borongan.</p>
                          <div class="article-user">
                            <img alt="image" src="/assets/img/avatar/avatar-1.png">
                            <div class="article-user-details">
                              <div class="user-detail-name">
                                <a href="#">Bambang Wahyudi</a>
                              </div>
                              <div class="text-job">Mandor Profesional</div>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                      <article class="article article-style-c">
                        <div class="article-header">
                          <div class="article-image" data-background="/assets/img/artikel/mandor_kabur.jpg" style="background-image: url(&quot;assets/img/news/img14.jpg&quot;);">
                          </div>
                        </div>
                        <div class="article-details">
                          <div class="article-category"><a href="#">Berita</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                          <div class="article-title">
                            <h2><a href="#">Mandor Bawa Kabur Uang Kuli</a></h2>
                          </div>
                          <p>Sebuah berita tentang seorang mandor yang membawa kabur uang kuli yang sudah bekerja keras.</p>
                          <div class="article-user">
                            <img alt="image" src="/assets/img/avatar/avatar-3.png">
                            <div class="article-user-details">
                              <div class="user-detail-name">
                                <a href="#">Ahmad Mamad</a>
                              </div>
                              <div class="text-job">Tumbal Proyek</div>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                      <article class="article article-style-c">
                        <div class="article-header">
                          <div class="article-image" data-background="/assets/img/artikel/kuli_jawa.jpg" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);">
                          </div>
                        </div>
                        <div class="article-details">
                          <div class="article-category"><a href="#">Artikel</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                          <div class="article-title">
                            <h2><a href="#">Tutorial Memilih Kuli Berkelas</a></h2>
                          </div>
                          <p>Sebuah artikel yang menjabarkan cara untuk memilih kuli yang profesional di bidangnya.</p>
                          <div class="article-user">
                            <img alt="image" src="/assets/img/avatar/avatar-2.png">
                            <div class="article-user-details">
                              <div class="user-detail-name">
                                <a href="#">Babeh Resnu</a>
                              </div>
                              <div class="text-job">Pemborong</div>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
              </div>
        </div>
      </div>
</div>
@endsection