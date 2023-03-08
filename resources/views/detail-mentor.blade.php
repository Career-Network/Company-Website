@extends('layouts.writer-system.mainlayout', [
    'title' => 'Mentors',
    'css' => 'assets/css/detail-mentor.css',
    'active' => 'Mentors',
])

@section('content')
    <div class="blog-section">
        <section class="header-blogs">
            <h1 class="heading ">Semua Mentor</h1>
        </section>


        <section class="schedule-section">
          <div class="table-responsive">
            <table id="datatable-detail-mentor" class="table table-mentor " >
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Bidang</th>
                        <th>Pekerjaan</th>
                        <th>Kelas</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  
                    {{-- row 1 --}}
                    <tr class="trow-mentor">
                        <td  class="tab-prof bg-white">
                            <div class="profile">
                                <div class="profile-picture">
                                    <img src="{{ asset('assets/img/detail-mentor/mentor-1.png') }}" />
                                </div>
                                <div class="profile-name">
                                    <p>Samantha Rachel</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>UI/UX Desain</p>
                        </td>
                        <td>
                            <p>
                                Associate UI/UX Desain Trainer
                            </p>
                        </td>
                        <td>
                            <div class="class-box">
                                <div class="class-img">
                                    <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" />
                                </div>
                                <div class="class-name">
                                    Digital Marketing
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                          <div class="profile">
                              <div class="profile-picture">
                                  <img src="{{ asset('assets/img/detail-mentor/mentor-1.png') }}" />
                              </div>
                              <div class="profile-name">
                                  <p>Samantha Rachel</p>
                              </div>
                          </div>
                      </td>
                      <td>
                          <p>UI/UX Desain</p>
                      </td>
                      <td>
                          <p>
                              Associate UI/UX Desain Trainer
                          </p>
                      </td>
                      <td>
                          <div class="class-box">
                              <div class="class-img">
                                  <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" />
                              </div>
                              <div class="class-name">
                                  Digital Marketing
                              </div>
                          </div>
                      </td>
                      <td>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          </p>
                      </td>
                      <td>
                          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                              <i class="fas fa-trash-alt"></i></button>
 
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


    </div>
  <!-- modal -->
    <div class="modal modal-close fade" id="item-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-bs modal-content-close">
        <div class="modal-head modal-head-close">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin akan menghapus mentor ini?</h1>
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
            Testimoni yang sudah diubah tidak akan hilang ketika anda kembali
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



      <div class="modal fade" id="createMentorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Mentor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form-header-mentor">
                       <div class="input-container">
                      <label class="form-check-label" for="judul">Nama</label>
                      <input class="form-control" type="text" id="judul" value="" placeholder="Nama">
                    </div>

                     <div class="input-container">
                      <label class="form-check-label" for="thumbnail">Photo Profile</label>
                      <input class="form-control" type="file" id="thumbnail">
                    </div>

                    <div class="input-container">
                      <label class="form-check-label" for="tagar">Bidang Keahlian</label>
                      <input class="form-control" type="text" id="tagar" value="">
                    </div>


                    <div class="input-container">
                      <label class="form-check-label" for="tagar">Pekerjaan Saat Ini</label>
                      <input class="form-control" type="text" id="tagar" value="">
                    </div>

                    <div class="input-container">
                      <label class="form-check-label" for="tagar">Link Media Social(Linkedin)</label>
                      <input class="form-control" type="text" id="tagar" value="">
                    </div>

                     <div class="input-container">
                      <label class="form-check-label" for="tagar">Kelas</label>
                      <input class="form-control" type="text" id="tagar" value="">
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
                              <span>Upload Mentor</span>
                          </button>
                     </div>
                </form>
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
                        "width": "15%",
                        "targets": 2
                    },
                    {
                        "width": "15%",
                        "targets": 3
                    },
                    {
                        "width": "15%",
                        "targets": 4
                    },
                    {
                        "width": "10%",
                        "targets": 5
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
            var labelSearch = $('.dataTables_filter label');
            var searchInput = $('.dataTables_filter input[type=search]');

            searchInput.detach();
            searchInput.appendTo(labelSearch);

            searchInput.attr('style',
                'width: 80%; padding-right: 100px; background-image: url("/assets/img/detail-mentor/search-icon.svg"); background-repeat: no-repeat; background-position: right 10px center; background-size: 16px;'
            );


            // var searchInput = $('.dataTables_filter input[type=search]');
            // searchInput.attr('style',
            //     'width: 80%; padding-right: 100px; background-image: url("/assets/img/detail-mentor/search-icon.svg"); background-repeat: no-repeat; background-position: right 10px center; background-size: 16px;'
            // );


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
            dropdown.append($('<option value="Profile">Profile</option>'));
            dropdown.append($('<option value="Bidang">Bidang</option>'));
            dropdown.append($('<option value="Pekerjaan">Pekerjaan</option>'));
            dropdown.append($('<option value="Kelas">Kelas</option>'));
            dropdown.append($('<option value="Deskripsi">Deskripsi</option>'));
        });
    </script>
@endsection
