@extends('layouts.writer-system.mainlayout',[
    'title'=>'Kelas',
    'css' => 'assets/css/class-schedule-writer.css',
    'active' => 'class-schedule'
])

@section('content')
    {{-- CALENDAR SECTION --}}
    <div class="blog-section">
        <section class="schedule-section">
            <section class="header-blogs">
            <h1 class="heading">Semua Kelas</h1>
            </section>
        
            <section class="class-schedule-section">
            <div class="table-responsive">
            <table width='100px' id="datatable-detail-mentor" class="table table-mentor table-striped display nowrap " >
                <thead class="table-mentor-head">
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Harga Kelas</th>
                        <th>Lokasi Belajar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-mentor-body">
                    
                    {{-- row 1 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" />&nbsp
                                    Digital Marketing
                            </div>
                            
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p>
                            27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 2 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/grapic.png') }}" />
                            </div>
                            <div class="class-name">
                                Graphic Design
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                4 Maret - 12 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 3 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/ms.png') }}" />
                            </div>
                            <div class="class-name">
                                Microsoft Office Excel
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                            27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 4 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/uiux.png') }}" />
                            </div>
                            <div class="class-name">
                                UI/UX Designer
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                4 Maret - 12 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 5 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/export.png') }}" />
                            </div>
                            <div class="class-name">
                                Export/Import
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                4 Maret - 12 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 6 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Human Resources
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                27 Februari - 4 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- row 7 --}}
                    <tr class="trow-mentor">
                        <td>
                        <div class="class-box">
                            <div class="class-img">
                                <img src="{{ asset('assets/img/kelas/finance.png') }}" />
                            </div>
                            <div class="class-name">
                                Finance
                            </div>
                        </div>
                        </td>
                        <td>
                            <p>Rp. 125.000</p>
                        </td>
                        <td>
                            <p class="class-date">
                                5 Maret - 12 Maret 2023
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#item-edit">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                    

                    

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

    <!-- modal -->


    <div class="modal modal-close fade" id="item-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content modal-bs modal-content-close">
            <div class="modal-head modal-head-close">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda  yakin akan menghapus Kelas {Graphic Design}?</h1>
            <p>Semua data akan hilang</p>
            </div>
            <div class="modal-content modal-content-close">
            <button href="" class="option-item delete" id="btn-action">
                <span>Hapus</span>
            </button>
            <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                <span>Batalkan</span>
            </button>
            </div>
        </div>
        </div>
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
                <form action="" class="form-header-mentor">
                    <div class="d-flex">
                        <div class="input-container col-md-6">
                            <label class="form-check-label" for="nama_kelas">Nama Kelas</label>
                            <input class="form-control" type="text" id="nama_kelas" value="" placeholder="Nama">
                        </div>
                        <div class="input-container col-md-6">
                            <label class="form-check-label" for="thumbnail">Cover Kelas</label>
                            <input class="form-control" type="file" id="thumbnail" placeholder="Masukan file foto">
                        </div>
                    </div>

                    <div class="input-container">
                        <label class="form-check-label" for="harga">Harga Kelas</label>
                        <input class="form-control" type="number" id="harga" value="" placeholder="Rp.">
                    </div>

                    <div class="input-container">
                        <label class="form-check-label" for="jadwal">Jadwal Kelas</label>
                        <div class="d-flex">
                            {{-- <input class="form-control" type="date" id="tagar" value="" placeholder="Masukan Tanggal Mulai">
                            <input class="form-control" type="date" id="tagar" value="" placeholder="Masukan Tanggal akhir">
                            <input class="form-control" type="time" id="tagar" value="" placeholder="Masukan Waktu"> --}}
                            <select class="form-select" aria-label="Default select example">
                                <option selected >-- Pilih tanggal mulai dan akhir --</option>
                                <option value="1 Januari 2020">1 Januari 2020</option>
                            </select>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>-- Tentukan Jam kelas --</option>
                                <option value="23:01">23:01</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-container">
                    <label class="form-check-label" for="lokasi">Lokasi Pembelajaran</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Lokasi Kelas --</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                    {{-- <input class="form-control" type="text" id="tagar" value=""> --}}
                    </div>

                    <div class="input-container">
                    <label class="form-check-label" for="detail">Deskripsi</label>
                    <textarea id="detail"></textarea>
                    </div>

                    <div class="button-section">
                        <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                            <span>Batalkan</span>
                        </button>
                        <button href="" class="option-item create-blog mt-3" data-bs-dismiss="modal" aria-label="Close">
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
    </script>
@endsection
    