@extends('layouts.writer-system.mainlayout',[
    'title'=>'Kelas',
    'css' => 'assets/css/class-schedule-writer.css',
    'active' => 'class-schedule'
])

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger" id="alert-danger">
        error input form please check again.
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success" id="alert-danger">
        {{ session('success') }}
    </div>
 @endif
    {{-- CALENDAR SECTION --}}
    <div class="blog-section">
        <section class="schedule-section">
            <section class="header-blogs">
            <h1 class="heading">Semua Kelas</h1>
            </section>
        
            <section class="class-schedule-section">
            <div class="table-responsive">
                <table width="100%" id="datatable-detail-mentor" class=" table table-mentor table-striped display nowrap " >
                    <thead class="table-mentor-head">
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Harga Kelas</th>
                            <th>Jadwal Kelas</th>
                            <th>Lokasi Belajar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-mentor-body">
                        
                        {{-- row 1 --}}
                        @foreach($kelas as $data)
                        <tr class="trow-mentor">
                            <td>
                            <div class="class-box">
                                <div class="class-img" style="margin-top:-1rem;">
                                    <img src="{{ asset(Storage::url($data->kelas_cover)) }}" width="48" height="48"/>&nbsp
                                        {{$data->kelas_title}}
                                </div>
                                
                            </div>
                            </td>
                            <td>
                                <p>Rp. {{$data->kelas_price}}</p>
                            </td>
                            <td>
                                <p>
                                {{ date('j M', strtotime($data->start_date)) }} - {{ date('j M Y', strtotime($data->end_date)) }}
                                </p>
                            </td>
                            <td>
                                <p>
                                {{$data->kelas_loc}}
                                </p>
                            </td>
                            <td>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete{{$data->id}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit{{$data->id}}">
                                    <i class="fa-solid fa-gear" style="color: #F8FAFC;"></i>
                                </button>
                            </td>
                        </tr>                  

                        <!-- Modal Delete -->
                        <div class="modal modal-close fade" id="item-delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content modal-bs modal-content-close">
                                <div class="modal-head modal-head-close">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda  yakin akan menghapus Kelas {{$data->kelas_title}}?</h1>
                                <p>Semua data akan hilang</p>
                                </div>
                                <div class="modal-content modal-content-close">
                                    <form class="form-header-mentor" method="POST" action="{{ route('destroy-kelas', $data->id) }}" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="option-item delete" id="btn-action">
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                    <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                                        <span>Batalkan</span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal modal-lg fade" id="item-edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Kelas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-header-mentor" method="POST" action="{{ route('update-kelas', $data->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="d-flex">
                                            <div class="input-container col-md-6">
                                                <label class="form-check-label" for="nama_kelas">Nama Kelas</label>
                                                <input class="form-control @if(session()->has('update')) @error('kelas_title') is-invalid @enderror @endif" type="text" name="kelas_title" id="nama_kelas" value="{{ $data->kelas_title }}" placeholder="Masukkan Nama Kelas disini">
                                                @error('kelas_title')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="input-container col-md-6">
                                                <label class="form-check-label" for="thumbnail">Cover Kelas</label>
                                                <input class="form-control @if(session()->has('update')) @error('kelas_cover') is-invalid @enderror @endif" type="file" name="kelas_cover" value="{{ $data->kelas_cover }}" id="thumbnail" placeholder="Masukan file foto" accept="image/webp">
                                                @error('kelas_cover')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input-container">
                                            <label class="form-check-label" for="harga">Harga Kelas</label>
                                            <input class="form-control @if(session()->has('update')) @error('kelas_price') is-invalid @enderror @endif" data-type="currency" name="kelas_price" id="harga" name="harga" value="{{ $data->kelas_price }}" placeholder="Rp. xxxxxxx" value="">
                                            @error('kelas_price')
                                                <div class="invalid-feedback">
                                                {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="input-container">
                                            <label class="form-check-label" for="jadwal">Jadwal Kelas</label>
                                            <div class="d-flex">
                                                <input class="form-control @if(session()->has('update')) @error('start_date') is-invalid @enderror @endif" type="date" id="start-date" name="start_date" value="{{ $data->start_date }}" placeholder="Pilih Tanggal Mulai"  min="1945-01-01" max="2100-12-31">
                                                <input class="form-control @if(session()->has('update')) @error('end_date') is-invalid @enderror @endif" type="date" id="end-date" name="end_date" value="{{ $data->end_date }}" placeholder="Pilih Tanggal Akhir" min="1945-01-01" max="2100-12-31">
                                                {{-- <input class="form-control" type="time" id="time-date" name="time-date" placeholder="Tentukan Jam kelas"> --}}
                                                {{-- <select class="form-select" aria-label="Default select example">
                                                    <option selected >Pilih tanggal mulai dan akhir</option>
                                                    <option value="1 Januari 2020">1 Januari 2020</option>
                                                </select> --}}
                                                {{-- <select class="form-select" aria-label="Default select example">
                                                    <option selected>Tentukan Jam kelas</option>
                                                    <option value="23:01">23:01</option>
                                                </select> --}}
                                            </div>
                                        </div>

                                        <div class="input-container">
                                            <label class="form-check-label" for="kategori">Kategori Kelas</label>
                                            <select class="form-select @if(session()->has('update')) @error('kelas_category') is-invalid @enderror @endif" aria-label="Default select example" name="kelas_category">
                                                <option selected class="style = color: #CCCCCC;" disabled>Pilih kategori kelas yang ingin ditambahkan</option>
                                                <option {{ $data->kelas_category == 'example1' ? "selected" : "" }} value="example1">example1</option>
                                                <option {{ $data->kelas_category == 'example2' ? "selected" : "" }} value="example2">example2</option>
                                            </select>
                                            @error('kelas_category')
                                                <div class="invalid-feedback">
                                                {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="input-container">
                                        <label class="form-check-label" for="lokasi">Lokasi Pembelajaran</label>
                                        <select class="form-select @if(session()->has('update')) @error('kelas_loc') is-invalid @enderror @endif" aria-label="Default select example" name="kelas_loc">
                                            <option selected disabled>Online/Offline</option>
                                            <option {{ $data->kelas_loc == 'Online' ? "selected" : "" }} value="Online">Online</option>
                                            <option {{ $data->kelas_loc == 'Offline' ? "selected" : "" }} value="Offline">Offline</option>
                                        </select>
                                        @error('kelas_loc')
                                            <div class="invalid-feedback">
                                            {{$message}}
                                            </div>
                                        @enderror
                                        {{-- <input class="form-control" type="text" id="tagar" value=""> --}}
                                        </div>

                                        <div class="input-container">
                                        <label class="form-check-label" for="detail">Deskripsi</label>
                                        <textarea class="@if(session()->has('update')) @error('description') is-invalid @enderror @endif" id="detail" name="description">{{ $data->description }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                            {{$message}}
                                            </div>
                                        @enderror
                                        </div>

                                        <div class="button-section">
                                            <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                                                <span>Batalkan</span>
                                            </button>
                                            <button type="submit" class="option-item create-blog mt-3">
                                                <span>Update Kelas</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
            </section>
        </section>
    </div>

    <div class="modal modal-close fade" id="item-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content modal-bs modal-content-close">
            <div class="modal-head modal-head-close">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Simpan Perubahan?</h1>
            <p>
                Kelas yang sudah diubah tidak akan hilang ketika anda kembali
            </p>
            </div>
            <div class="modal-content modal-content-close">
            <button href="" class="option-item delete orange" id="btn-action-change">
                <span>Simpan</span>
            </button>
            <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                <span>Batalkan</span>
            </button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal modal-close fade" id="item-error" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content modal-bs modal-content-error">
            <div class="modal-head modal-img-error">
                <img src="{{ asset('assets/img/detail-mentor/alert.png') }}" alt="gambar" />
            </div>
            <div class="modal-head modal-head-error">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Gagal melakukan tindakan!</h1>
            <p>
                Kesalahan dalam koneksi intenet, silahkan coba beberapa saat lagi
            </p>
            </div>
            <div class="modal-content modal-content-error">
            <button href="" id="btn-action-error" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                <span>OK!</span>
            </button>
            </div>
        </div>
        </div>
    </div>



    <div class="modal modal-lg fade" id="createClassScheduleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-header-mentor" method="POST" action="{{ route('store-kelas') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="input-container col-md-6">
                            <label class="form-check-label" for="nama_kelas">Nama Kelas</label>
                            <input class="form-control @error('kelas_title') is-invalid @enderror" type="text" name="kelas_title" id="nama_kelas" value="{{ old('kelas_title') }}" placeholder="Masukkan Nama Kelas disini">
                            @error('kelas_title')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        <div class="input-container col-md-6">
                            <label class="form-check-label" for="thumbnail">Cover Kelas</label>
                            <input class="form-control @error('kelas_cover') is-invalid @enderror" type="file" name="kelas_cover" value="{{ old('kelas_cover') }}" id="thumbnail" placeholder="Masukan file foto" accept="image/webp">
                            @error('kelas_cover')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="input-container">
                        <label class="form-check-label" for="harga">Harga Kelas</label>
                        <input class="form-control @error('kelas_price') is-invalid @enderror" data-type="currency" name="kelas_price" id="harga" name="harga" value="{{ old('kelas_price') }}" placeholder="Rp. xxxxxxx" value="">
                        @error('kelas_price')
                            <div class="invalid-feedback">
                            {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="input-container">
                        <label class="form-check-label" for="jadwal">Jadwal Kelas</label>
                        <div class="d-flex">
                            <input class="form-control @error('start_date') is-invalid @enderror" type="date" id="start-date" name="start_date" value="{{ old('start_date') }}" placeholder="Pilih Tanggal Mulai"  min="1945-01-01" max="2100-12-31">
                            <input class="form-control @error('end_date') is-invalid @enderror" type="date" id="end-date" name="end_date" value="{{ old('end_date') }}" placeholder="Pilih Tanggal Akhir" min="1945-01-01" max="2100-12-31">
                            {{-- <input class="form-control" type="time" id="time-date" name="time-date" placeholder="Tentukan Jam kelas"> --}}
                            {{-- <select class="form-select" aria-label="Default select example">
                                <option selected >Pilih tanggal mulai dan akhir</option>
                                <option value="1 Januari 2020">1 Januari 2020</option>
                            </select> --}}
                            {{-- <select class="form-select" aria-label="Default select example">
                                <option selected>Tentukan Jam kelas</option>
                                <option value="23:01">23:01</option>
                            </select> --}}
                        </div>
                    </div>

                    <div class="input-container">
                        <label class="form-check-label" for="kategori">Kategori Kelas</label>
                        <select class="form-select @error('kelas_category') is-invalid @enderror" aria-label="Default select example" name="kelas_category">
                            <option selected class="style = color: #CCCCCC;" disabled>Pilih kategori kelas yang ingin ditambahkan</option>
                            <option {{ old('kelas_category') == 'example1' ? "selected" : "" }} value="example1">example1</option>
                            <option {{ old('kelas_category') == 'example2' ? "selected" : "" }} value="example2">example2</option>
                        </select>
                        @error('kelas_category')
                            <div class="invalid-feedback">
                            {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="input-container">
                    <label class="form-check-label" for="lokasi">Lokasi Pembelajaran</label>
                    <select class="form-select @error('kelas_loc') is-invalid @enderror" aria-label="Default select example" name="kelas_loc">
                        <option selected disabled>Online/Offline</option>
                        <option {{ old('kelas_loc') == 'Online' ? "selected" : "" }} value="Online">Online</option>
                        <option {{ old('kelas_loc') == 'Offline' ? "selected" : "" }} value="Offline">Offline</option>
                    </select>
                    @error('kelas_loc')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                    {{-- <input class="form-control" type="text" id="tagar" value=""> --}}
                    </div>

                    <div class="input-container">
                    <label class="form-check-label" for="detail">Deskripsi</label>
                    <textarea class="@error('description') is-invalid @enderror" id="detail" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                    </div>

                    <div class="button-section">
                        <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                            <span>Batalkan</span>
                        </button>
                        <button type="submit" class="option-item create-blog mt-3">
                            <span>Tambah Kelas</span>
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <div class="modal modal-lg fade" id="createClassScheduleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
    </div>

    
@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/zhf194pj9ma6yja8lros9l6orpka9f1dvnj5zhbtfk3m26lf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>  
    <script>
tinymce.init({
    selector: 'textarea',
    height: 300,
    plugins: [
      'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
      'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
      'insertdatetime', 'media', 'table', 'help', 'wordcount', 'image code'
    ],
    toolbar: 'undo redo | blocks | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help | image code',
    /* without images_upload_url set, Upload tab won't show up*/
    images_upload_url: 'postAcceptor.php',

    /* we override default upload handler to simulate successful upload*/
    images_upload_handler: function (blobInfo, success, failure) {
      setTimeout(function () {
        /* no matter what you upload, we will turn it into TinyMCE logo :)*/
        success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
      }, 2000);
    },
    content_style: 'body { font-family:Poppins,Arial,sans-serif; font-size:16px }'
  });


        $(document).ready(function() {
            $('#btn-action').click(function(){
               $('#item-error').modal('show');
            });

             $('#btn-action-change').click(function(){
               $('#item-error').modal('show');
            });


            $('#item-error').on('shown.bs.modal', function () {
               $('#item-delete').modal('hide');
                $('#item-edit').modal('hide');
            })


            $('#datatable-detail-mentor').DataTable({
                "columnDefs": [{
                        "width": "15%",
                        "targets": 0
                    },
                    {
                        "width": "10%",
                        "targets": 1
                    },
                    {
                        "width": "10%",
                        "targets": 2
                    },
                    {
                        "width": "10%",
                        "targets": 3
                    }
                ],
                "language": {
                    "lengthMenu": "_MENU_ entries per page",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Data tidak tersedia",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                },
                "dom": '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>tp'
            });

            // Tambahkan search input dengan lebar 500px
            var searchInput = $('.dataTables_filter input[type=search]');
            searchInput.attr('style',
                'width: 80%; padding-right: 100px; background-image: url("/assets/img/detail-mentor/search-icon.svg"); background-repeat: no-repeat; background-position: right 10px center; background-size: 16px;'
            );


            // Tambahkan filter dropdown
            var dropdown = $('<select></select>')
                .appendTo('.dataTables_length')
                .addClass('form-select form-select-sm')
                .attr('aria-controls', 'datatable-detail-mentor')
                .on('change', function() {
                    var value = $(this).val();
                    $('#datatable-detail-mentor').DataTable().page.len(value).draw();
                })
                .attr('style', 'margin-left: 10px;');;

            dropdown.append($('<option value="" selected disabled>Filter berdasarkan...</option>'));
            dropdown.append($('<option value="Nama Kelas">Nama Kelas</option>'));
            dropdown.append($('<option value="Harga Kelas">Harga Kelas</option>'));
            dropdown.append($('<option value="Lokasi Belajar">Lokasi Belajar</option>'));
        });

        $(".alert").delay(4000).slideUp(200, function() {
            $(this).alert('close');
        });

        $("input[data-type='currency']").keyup(function(event) {
            if(event.which >= 37 && event.which <= 40) return;
            $(this).val(function(index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            ;
            });
        });
    </script>
    @if(count($errors) > 0 && session()->has('update'))
    <script>
      var idModal = "{{ Session::get('update') }}"
      $(document).ready(function() {
        $('#'+idModal).modal('show')
      });
    </script>
    @elseif(count($errors) > 0)
    <script>
      $(document).ready(function() {
        $('#createClassScheduleModal1').modal('show')
      });
    </script>
    @endif
@endsection
    