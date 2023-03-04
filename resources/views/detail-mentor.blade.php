@extends('layouts.writer-system.mainlayout', [
    'title' => 'Mentors',
    'css' => 'assets/css/detail-mentor.css',
    'active' => 'Mentors',
])

@section('content')
    <div class="blog-section">
        <section class="header-blogs">
            <h1 class="heading">Semua Mentor</h1>
        </section>


        <section class="schedule-section">
          <div class="table-responsive">
            <table id="datatable-detail-mentor" class="table table-mentor table-striped" >
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
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning">
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
                          <button class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-warning">
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
@endsection

@section('js')
    <script>
        $(document).ready(function() {
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
            var searchInput = $('.dataTables_filter input[type=search]');
            searchInput.attr('style',
                'width: 80%; padding-right: 320px; background-image: url("/assets/img/detail-mentor/search.png"); background-repeat: no-repeat; background-position: right 10px center;'
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
            dropdown.append($('<option value="Profile">Profile</option>'));
            dropdown.append($('<option value="Bidang">Bidang</option>'));
            dropdown.append($('<option value="Pekerjaan">Pekerjaan</option>'));
            dropdown.append($('<option value="Kelas">Kelas</option>'));
            dropdown.append($('<option value="Deskripsi">Deskripsi</option>'));
        });
    </script>
@endsection
