@extends('layouts.writer-system.mainlayout', [
    'title' => 'Testimoni',
    'css' => 'assets/css/testimoni-writer.css',
    'active' => 'Testimoni',
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
                  
                    @foreach($testimoni as $data)
                    <tr class="trow-mentor">
                        <td  class="bg-white tab-prof">
                            <div class="profile">
                                <div class="profile-picture  ">
                                    <img  src="{{ asset(Storage::url($data->participant_pic)) }}" width="48" height="48"/>
                                </div>
                                <div class="profile-name">
                                     {{$data->participant_name}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="class-box">
                                {{$data->participant_prof}}
                            </div>
                        </td>
                        <td>
                            <div class="class-box gap-2">
                                <div class="class-img" style="margin-top:-1rem;">
                                    <img src="{{ asset('assets/img/detail-mentor/kelas-1.png') }}" width="48" height="48"/>
                                </div>
                                <div class="class-name">
                                    {{$data->class_name}}
                                </div>
                            </div>
                        </td>
                        <td class="profile nopadding nomargin">
                             <div class="profile-name class-break-word text-wrap">
                             
                              {!! (strip_tags(substr($data->testimonial, 0, 90))) !!}  ...
                            </div>

                               
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item-delete{{$data->id}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#item-edit{{$data->id}}">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </td>
                    </tr>

                      <!-- Modal Delete -->
                      <div class="modal modal-close fade" id="item-delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content modal-bs modal-content-close">
                            <div class="modal-head modal-head-close">
                              <h1 class="modal-title fs-5 font-22" id="exampleModalLabel">
                                Apakah anda  yakin akan menghapus testimoni ini?
                              </h1>
                              <p>Semua data akan hilang</p>
                            </div>
                            <div class="modal-content modal-content-close">
                              <form class="form-header-mentor" method="POST" action="{{ route('destroy-testimoni', $data->id) }}" >
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
                      <div class="modal fade" id="item-edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content px-4 py-3 align-items-center">
                            <div class="modal-header px-0 py-3 w-100">
                                <h1 class="modal-title font-24 px-0 fs-5" id="exampleModalLabel">Update Testimoni</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-0  w-100">
                                <form class="form-header-mentor" method="POST" action="{{ route('update-testimoni', $data->id) }}" enctype="multipart/form-data">
                                  @csrf
                                  @method('put')
                                       <div class="input-container">
                                      <label class="form-check-label font-16" for="nama">Nama</label>
                                      <input class="form-control @if(session()->has('update')) @error('participant_name') is-invalid @enderror @endif" type="text" name="participant_name" id="nama" value="{{ $data->participant_name }}" placeholder="Nama">
                                        @error('participant_name')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                     <div class="input-container">
                                      <label class="form-check-label font-16" for="photoProfile">Photo Profile</label>
                                      <input class="form-control @if(session()->has('update')) @error('participant_pic') is-invalid @enderror @endif" name="participant_pic" type="file" id="photoProfile" accept="image/webp">
                                        @error('participant_pic')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="input-container">
                                      <label class="form-check-label font-16" for="profesi">Profesi</label>
                                      <input class="form-control font-bold @if(session()->has('update')) @error('participant_prof') is-invalid @enderror @endif" type="text" name="participant_prof" id="profesi" value="{{$data->participant_prof}}">
                                        @error('participant_prof')
                                            <div class="invalid-feedback">
                                              {{$message}}
                                            </div>
                                        @enderror
                                    </div>


                                     <div class="input-container">
                                      <label class="form-check-label font-16" for="kelas">Kelas</label>
                                        <select class="form-select form-control font-grey @if(session()->has('update')) @error('class_name') is-invalid @enderror @endif" aria-label="Default select example" name="class_name">
                                             <option value="" selected disabled>Pilih Kelas</option>
                                              @foreach($kelas as $dataKelas)
                                              <option value="{{$dataKelas->kelas_title}}" {{ $dataKelas->kelas_title == $data->class_name ? 'selected' : '' }}>{{$dataKelas->kelas_title}}</option>
                                              @endforeach
                                      </select>
                                        @error('class_name')
                                            <div class="invalid-feedback">
                                            {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                     <div class="input-container">
                                      <label class="form-check-label font-16" for="display">Display</label>
                                      <div class="display-warna">
                                        <div class="display-item" >
                                            <input type="checkbox" class="form-check-input" id="itemInput" name="featured_landing_page" value="1" {{ $data->featured_landing_page == 1 ? 'checked' : '' }}>
                                             <label for="tagar font-16"> Landing Page</label>
                                        </div>
                                        <div class="display-item-class" >
                                            <input type="checkbox" class="form-check-input" id="itemInput" name="featured_class_page" value="1" {{ $data->featured_class_page == 1 ? 'checked' : '' }}>
                                             <label for="tagar font-16"> Class Page</label>
                                        </div>
                                
                                
                                      </div>
                                     
                                    </div>


                                          <div class="input-container">
                                            <label class="form-check-label" for="detail">Review</label>
                                            <textarea class="@if(session()->has('update')) @error('testimonial') is-invalid @enderror @endif" id="detail" name="testimonial">{{$data->testimonial}}</textarea>
                                            @error('testimonial')
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
                                              <span>Update Testimoni</span>
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
                <form class="form-header-mentor" method="POST" action="{{ route('store-testimoni') }}" enctype="multipart/form-data">
                    @csrf
                       <div class="input-container">
                      <label class="form-check-label font-16" for="nama">Nama</label>
                      <input class="form-control @error('participant_name') is-invalid @enderror" type="text" name="participant_name" id="nama" value="{{ old('participant_name') }}" placeholder="Nama">
                        @error('participant_name')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                    </div>

                     <div class="input-container">
                      <label class="form-check-label font-16" for="photoProfile">Photo Profile</label>
                      <input class="form-control @error('participant_pic') is-invalid @enderror" name="participant_pic" type="file" id="photoProfile" accept="image/webp">
                        @error('participant_pic')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="input-container">
                      <label class="form-check-label font-16" for="profesi">Profesi</label>
                      <input class="form-control font-bold @error('participant_prof') is-invalid @enderror" type="text" name="participant_prof" id="profesi" value="{{ old('participant_prof') }}">
                        @error('participant_prof')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                    </div>


                    <div class="input-container">
                      <label class="form-check-label font-16" for="kelas">Kelas</label>
                        <select class="form-select form-control font-grey @error('class_name') is-invalid @enderror" aria-label="Default select example" name="class_name">
                             <option value="" selected disabled>Pilih Kelas</option>
                              @foreach($kelas as $data)
                              <option {{ old('class_name') == $data->kelas_title ? "selected" : "" }} value="{{$data->kelas_title}}">{{$data->kelas_title}}</option>
                              @endforeach
                      </select>
                        @error('class_name')
                            <div class="invalid-feedback">
                            {{$message}}
                            </div>
                        @enderror
                    </div>

                     <div class="input-container">
                      <label class="form-check-label font-16" for="display">Display</label>
                      <div class="display-warna">
                        <div class="display-item" >
                            <input type="checkbox" class="form-check-input" id="itemInput" name="featured_landing_page" value="1">
                             <label for="tagar font-16"> Landing Page</label>
                        </div>
                        <div class="display-item-class" >
                            <input type="checkbox" class="form-check-input" id="itemInput" name="featured_class_page" value="1">
                             <label for="tagar font-16"> Class Page</label>
                        </div>
                
                
                      </div>
                     
                    </div>


                          <div class="input-container">
                            <label class="form-check-label" for="detail">Review</label>
                            <textarea class="@error('testimonial') is-invalid @enderror" id="detail" name="testimonial">{{ old('testimonial') }}</textarea>
                            @error('testimonial')
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
                              <span>Tambah Testimoni</span>
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


            // $('#btn-action').click(function(){
            //    $('#item-error').modal('show');
            // });

            //  $('#btn-action-change').click(function(){
            //    $('#item-error').modal('show');
            // });


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

        $(".alert").delay(4000).slideUp(200, function() {
            $(this).alert('close');
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
        $('#createMentorModal').modal('show')
      });
    </script>
    @endif
@endsection
