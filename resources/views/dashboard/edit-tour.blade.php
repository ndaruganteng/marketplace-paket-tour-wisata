@include('Dashboard.header')

@include('Dashboard.navbar')

@include('Dashboard.sidebar')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <span class="m-0 ">Edit Data Tour</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('viewdatatour.index') }}"><- Kembali</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center ">Edit Data Tour</h3>
              </div>
             <!-- form start -->
             <form action="{{ url('/viewdatatour/update/'.$tour->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{ $tour->id }}">
                  <div class="card-body">
                      <div class="form-group">
                        <label for="nama">Image</label>
                        <input type="file" class="form-control" value="{{ $tour->image }}" name="image">
                        <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                      </div>
                      <div class="form-group">
                        <label for="jobs">Nama Agen</label>
                        <input type="text" class="form-control" value="{{ $tour->namaagen }}"   required="required" name="namaagen">
                      </div>
                      <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" value="{{ $tour->judul }}"  required="required" name="judul">
                      </div>
                      <div class="form-group">
                        <label for="title">Durasi</label>
                        <input type="text" class="form-control" value="{{ $tour->durasi }}"  required="required" name="durasi">
                      </div>
                      <div class="form-group">
                        <label for="title">Highlight</label>
                        <input type="text" class="form-control" value="{{ $tour->highlight }}"  required="required" name="highlight">
                      </div>
                      <div class="form-group">
                        <label for="title">Harga</label>
                        <input type="text" class="form-control" value="{{ $tour->harga }}"  required="required" name="harga">
                      </div>
                      <div class="form-group">
                        <label for="title">Tanggal Berangkat</label>
                        <input type="text" class="form-control" value="{{ $tour->tanggalberangkat }}"  required="required" name="tanggalberangkat">
                      </div>
                      <div class="form-group">
                        <label for="title">Tanggal Berakhir</label>
                        <input type="text" class="form-control" value="{{ $tour->tanggalberakhir }}"  required="required" name="tanggalberakhir">
                      </div>
                      <div class="form-group">
                        <label for="title">Kuota</label>
                        <input type="text" class="form-control" value="{{ $tour->kuota }}" placeholder="Masukan Tittle" required="required" name=" title">
                      </div>
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <input id="description" value="{{ $tour->description }}" type="hidden" name="description"  >
                        <trix-editor input="description"></trix-editor>
                      </div>
                      <div class=" mx-auto">
                        <button type="submit" class="btn btn-dark " value="Simpan Data">Simpan</button>
                      </div>
                  </div>
                </input>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('Dashboard.footer')