
@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')


  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manajemen User (Biro Wisata) </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen User (Biro Wisata)</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <h3 class="text-uppercase mx-auto mt-3">Data Biro Wisata</h3>
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Nama Biro Wisata</th>                                
                                        <th>No Telepon</th>                                
                                        <th>Description</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="images/icon/profile.png"
                                                alt=""
                                                style="width:100px"
                                            />
                                        </td>  
                                        <td>HappyTour@gmail.com</td>
                                        <td>Happy</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxx</td>

                                        <td>
                                            <div>
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i class="fa-solid fa-ban"></i>
                                                        Nonaktif
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="images/icon/profile.png"
                                                alt=""
                                                style="width:100px"
                                            />
                                        </td>  
                                        <td>AyoTour@gmail.com</td>
                                        <td>AYO TOUR</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxx</td>

                                        <td>
                                            <div>
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i class="fa-solid fa-ban"></i>
                                                        Nonaktif
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

  </div>
 

@include('Dashboard.footer')