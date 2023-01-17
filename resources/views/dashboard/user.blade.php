@include('sweetalert::alert')

@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')


  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                        <h3 class="text-uppercase mx-auto mt-3">Data User</h3>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Email</th>
                                        <th>Username</th>                                
                                        <th>Role</th>                                
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>Ndaru@gmail.com</td>
                                        <td>Ndaru</td>
                                        <td>Admin</td>
                                        <td>xxxxxxxxxx</td>

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