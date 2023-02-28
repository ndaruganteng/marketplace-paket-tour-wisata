
@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manajemen Tour</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Tour</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <h3 class="text-uppercase mx-auto mt-3">Data Tour</h3>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Judul Tour</th>
                                        <th>Kategori</th>
                                        <th>Harga/pax</th>
                                        <th>Waktu</th>
                                        <th>Nama Biro </th>
                                        <th>Verifikasi </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">  
                                        <td>Open Trip Tour Wisata Labuan Bajo</td>
                                        <td>Wisata Alam</td>
                                        <td>Rp 8.000.000</td>
                                        <td>4D2N</td>
                                        <td>Happy Tour</td>
                                        <td>verified</td>
                                        <td>
                                            <div class="btn flex">
    
                                                <a
                                                    href="{{
                                                        route('tour.index')
                                                    }}"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                        Detail
                                                    </button>
                                                </a>
                                                <a
                                                    href="#}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i class="fa-solid fa-ban"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center text-break">  
                                        <td>Open Trip Tour Wisata Bali</td>
                                        <td>Wisata Alam</td>
                                        <td>Rp 8.000.000</td>
                                        <td>4D2N</td>
                                        <td>Happy Tour</td>
                                        <td>un-verified</td>
                                        <td>
                                            <div class="btn flex">
    
                                                <a
                                                    href="{{
                                                        route('tour.index')
                                                    }}"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                        Detail
                                                    </button>
                                                </a>
                                                <a
                                                    href="#}"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-success"
                                                    >
                                                        <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Akhir content wrapper -->

@include('Dashboard.footer')