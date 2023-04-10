@extends('layouts.writer-system.mainlayout', [
    'title' => 'Testimoni',
    'css' => 'assets/css/testimoni-writer.css',
    'active' => 'Testimoni',
])

@section('content')
    <div class="blog-section">
        <section class="header-blogs">
            <h1 class="heading ">Semua Testimoni</h1>
        </section>


        <section class="schedule-section">
          <div class="table-responsive">
            <table  id="datatable-detail-mentor" class="table table-mentor w-auto w-100 " >
                <thead class="mw-100">
                    <tr>
                        <th>
                           <div class="px-5 py-3 ">
                                Profile
                            </div>
                        </th>
                        <th>
                            <div class="px-3 py-3">
                                Profesi
                            </div>
                        </th>
                        <th>
                               <div class="px-3 py-3">
                                Kelas
                            </div>
                        </th>
                        <th>
                               <div class="px-3 py-3">
                                Review
                            </div>
                        </th>
                        <th>
                               <div class="px-3 py-3">
                                Aksi
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="mw-100">
                  
                    {{-- row 1 --}}
                    <tr class="trow-mentor">
                        <td  class="bg-white tab-prof">
                            <div class="profile">
                                <div class="profile-picture  ">
                                    <img  src="{{ asset('assets/img/detail-mentor/mentor-1.png') }}" />
                                </div>
                                <div class="profile-name">
                                     Rachel Samatnha
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="class-box">
                                Mahasiswa
                            </div>
                        </td>
                        <td>
                            <div class="class-box gap-2">
                                <div class="class-img">
                                    <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" />
                                </div>
                                <div class="class-name">
                                    Digital Marketing
                                </div>
                            </div>
                        </td>
                        <td class="profile nopadding nomargin">
                             <div class="profile-name class-break-word text-wrap">
                             
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>

                               
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#item-edit">
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
                                  Samantha Racgel
                              </div>
                          </div>
                      </td>
                      <td>
                          <div class="class-box">
                                Mahasiswa
                            </div>
                     
                      </td>
                      
                             
                      <td>
                          <div class="class-box gap-2">
                              <div class="class-img">
                                  <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" />
                              </div>
                              <div class="class-name">
                                  Digital Marketing
                              </div>
                          </div>
                      </td>
                      <td  class="profile nopadding nomargin">
                          <div class="profile-name class-break-word text-wrap ">
                       
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                       
                            
                            </div>
                     
                       
                      </td>
                      <td>
                          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete">
                              <i class="fas fa-trash-alt"></i></button>
 
                          <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#item-edit">
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
          <h1 class="modal-title fs-5 font-22" id="exampleModalLabel">
            Apakah anda  yakin akan menghapus testimoni ini?
          </h1>
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
          <h1 class="modal-title font-22 fs-5" id="exampleModalLabel">Simpan Perubahan?</h1>
          <p class="font-16-show">
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
          <h1 class="modal-title fs-5 font-22" id="exampleModalLabel">Gagal melakukan tindakan!</h1>
          <p class="font-16-show">
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
            <div class="modal-content px-4 py-3 align-items-center">
            <div class="modal-header px-0 py-3 w-100">
                <h1 class="modal-title font-24 px-0 fs-5" id="exampleModalLabel">Create Testimoni</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-0  w-100">
                <form action="" class="form-header-mentor">
                       <div class="input-container">
                      <label class="form-check-label font-16" for="nama">Nama</label>
                      <input class="form-control" type="text" id="nama" value="" placeholder="Nama">
                    </div>

                     <div class="input-container">
                      <label class="form-check-label font-16" for="photoProfile">Photo Profile</label>
                      <input class="form-control" type="file" id="photoProfile">
                    </div>

                    <div class="input-container">
                      <label class="form-check-label font-16" for="profesi">Profesi</label>
                      <input class="form-control font-bold" type="text" id="profesi" value="Mahasiswa">
                    </div>


                     <div class="input-container">
                      <label class="form-check-label font-16" for="kelas">Kelas</label>
                        <select class="form-select form-control font-grey" aria-label="Default select example">
                             <option selected >Pilih kelas</option>
                                 <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                      </select>


                    </div>

                     <div class="input-container">
                      <label class="form-check-label font-16" for="display">Display</label>
                      <div class="display-warna">
                        <div class="display-item" >
                            <input type="checkbox" class="form-check-input" id="itemInput" name="" value="">
                             <label for="tagar font-16"> Landing Page</label>
                        </div>
                        <div class="display-item-class" >
                            <input type="checkbox" class="form-check-input" id="itemInput" name="" value="">
                             <label for="tagar font-16"> Class Page</label>
                        </div>
                
                
                      </div>
                     
                    </div>


                          <div class="input-container">
                            <label class="form-check-label" for="detail">Review</label>
                            <textarea id="detail"></textarea>
                          </div>

                       <div class="button-section">
                          <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                              <span>Batalkan</span>
                          </button>
                          <button href="" class="option-item create-blog mt-3" data-bs-dismiss="modal" aria-label="Close">
                              <span>Upload Testimoni</span>
                          </button>
                     </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('js')
<script>
    
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
                        "targets": 0
                      
                         
                    },
                    {
                        "targets": 1
                    },
                    {
                        "targets": 2
                    },
                    {
                        "targets": 3
                    },
                    {
                        "targets": 4
                    },
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
            dropdown.append($('<option value="Profesi">Profesi</option>'));
            dropdown.append($('<option value="Kelas">Kelas</option>'));
            dropdown.append($('<option value="Review">Review</option>'));
        });
</script>
@endsection --}}
