
@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')


  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <p class="m-0">Pesan Kontak </p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesan Kontak</li>
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
                        <h3 class="text-uppercase mx-auto mt-3">Data Pesan</h3>
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Nama</th>
                                        <th>Email</th>                              
                                        <th>No Telepon</th>                                
                                        <th>Pesan</th>                                
                                        <th>waktu</th>                                
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>albert</td>
                                        <td>albert@gmail.com</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxxxxxx</td>
                                        <td>20-02-2023 12.00</td>
                                    </tr>
                                    <tr class="text-center text-break">
                                        <td>albert</td>
                                        <td>albert@gmail.com</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxxxxxx</td>
                                        <td>20-02-2023 12.00</td>
                                    </tr>
                                    <tr class="text-center text-break">
                                        <td>albert</td>
                                        <td>albert@gmail.com</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxxxxxx</td>
                                        <td>20-02-2023 12.00</td>
                                    </tr>
                                    <tr class="text-center text-break">
                                        <td>albert</td>
                                        <td>albert@gmail.com</td>
                                        <td>12345678901</td>
                                        <td>xxxxxxxxxxxxxx</td>
                                        <td>20-02-2023 12.00</td>
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