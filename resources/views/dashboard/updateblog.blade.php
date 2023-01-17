@include('sweetalert::alert')

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
            <h1 class="m-0">Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase">Data Blog</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="#">
                                        <button
                                            type="submit"
                                            class="btn btn-dark flex"
                                            value="Submit"
                                        >
                                            Tambah Blog
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Image</th>
                                        <th>Judul</th>
                                        <th>Description</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="images/background/bali.jpg"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                        <td>ini judul</td>
                                        <td>ini desc</td>
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                        <i
                                                            class="fa-solid fa-pen-to-square"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i
                                                            class="fa-solid fa-trash-can"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="{{ route('blog.index') }}"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            </table>
                            {{-- <div class="pt-3">
                                {{ $blog->links() }}
                            </div> --}}
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
<!-- Akhir content wrapper -->

 

@include('Dashboard.footer')