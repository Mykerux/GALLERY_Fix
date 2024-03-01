<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile | Gallery Michael</title>

  <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark navbar-dark fixed-top shadow">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> --}}
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/profile"><img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2 mt-1 ml-3" style="height: 30px; width: 30px" alt=""></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/profile" class="nav-link"> | Halaman Profile</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery" role="button">
          <i class="far fa-image mr-1"></i> Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout" role="button">
          <i class="fas fa-th-large mr-1"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



    


        <!-- Main content -->
        <section class="content py-5" style="background-color: #ececec">
          <div class="container-fluid mt-4 ">
            @if (session('alert'))
                <div class="alert alert-danger">                     
                    {{ session('alert') }}
                </div>
            @endif

            <div class="row">
              <div class="col-md-3">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="../../dist/img/user4-128x128.jpg"
                           alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center"><b>{{ Auth::user()->name }}</b> / {{ Auth::user()->username }}</h3>
    
                    <p class="text-muted text-center">{{ Auth::user()->email }}</p>
    
                    {{-- <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">0</a>
                      </li>
                      <li class="list-group-item">
                        <b>Following</b> <a class="float-right">0</a>
                      </li>
                      <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">0</a>
                      </li>
                    </ul> --}}
    
                    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tentang Saya</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
    
                    <p class="text-muted">
                      B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
    
                    <hr>
    
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    
                    <p class="text-muted">Malibu, California</p>
    
                    <hr>
    
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    
                    <p class="text-muted">
                      <span class="tag tag-danger">UI Design</span>
                      <span class="tag tag-success">Coding</span>
                      <span class="tag tag-info">Javascript</span>
                      <span class="tag tag-warning">PHP</span>
                      <span class="tag tag-primary">Node.js</span>
                    </p>
    
                    <hr>
    
                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
    
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Gallery</a></li>
                      {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Gallery</a></li> --}}
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Pengaturan</a></li>
                     
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">

                      <div class="active tab-pane" id="activity">
                        
                        <div class="row">
                          @foreach ($gallery as $item)
              
                          <div class="col-2" >
                              
                              {{-- <i class="fa fa-camera bg-purple"></i> --}}
                              <div class="timeline-item mt-3" style="background-color: #a5a3a1; border-radius: 10px">
                              {{-- <span class="time"><i class="fas fa-clock"></i> 2 days ago</span> --}}
  
                          
                              <div class="timeline-body">
                              <a href="{{ asset('photo/' . $item->photo) }}" data-toggle="lightbox" data-title="<b>{{ $item->judul }}</b> | {{ $item->deskripsi }}" data-gallery="gallery" data-footer="<i>( {{ date('d - M - Y', strtotime($item->created_at)) }} )</i> <a href='{{ asset('photo/' . $item->photo) }}' download='{{ basename(Storage::url($item->photo)) }}' class='btn btn-primary' style='color: #fff'><i class='fa fa-download'></i></a>">
                              
                              <img src="{{ asset('photo/' . $item->photo) }}" class="img-fluid card-outline card-dark" alt="" style="object-fit: cover;width: 280px; height: 280px; position: relative; padding: 10px 10px 10px 11px; border-radius: 10px"/>
                              </a>
                              </div>
                              
                              </div>
  
  
                          </div>  
                          
                          @endforeach
                          
                        </div>

                        {{-- <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Sarah Ross</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Sent you a message - 3 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
    
                          <form class="form-horizontal">
                            <div class="input-group input-group-sm mb-0">
                              <input class="form-control form-control-sm" placeholder="Response">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Adam Jones</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <div class="row mb-3">
                            <div class="col-sm-6">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post --> --}}
                      </div>


                      {{-- <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->

                        
                      </div>
                      <!-- /.tab-pane --> --}}
                      
                        
                      <div class="tab-pane" id="settings">

                        

                        <form action="" class="form-horizontal" method="post">
                            @csrf
                          <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Masukkan Password</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="password" name="password" placeholder="Ubah Password" minlength="3"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="repassword" class="col-sm-2 col-form-label">Masukan Password yang sama</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="repassword" name="repassword" placeholder="Tulis Ulang Password" minlength="3"></textarea>
                            </div>
                          </div>
                          {{-- <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div> --}}
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" required> Data sudah benar
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin mengubah data akun anda?')">Ubah Data Akun</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->


  


  <footer class="main-footer ml-0 shadow">
    <div class="float-right d-none d-sm-block">
      <b>Gallery</b> Michael
    </div>
    <strong>Copyright &copy; 2024 <a href="https://github.Mykerux" target="_blank">_mchlvp_</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
  
      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
</body>
</html>