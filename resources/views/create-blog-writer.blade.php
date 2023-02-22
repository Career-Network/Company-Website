@extends('layouts.writer-system.mainlayout',[ 
  'title'=>'Create', 
  'css'=>'assets/css/dashboard-writer.css', 
  'cssblog' => 'assets/css/dashboard-blog-detail.css', 
  'active' => 'Blogs', 
  // 'read' => true,
  'detail' => true
]) 

@section('content')
<div class="blog-section detail-page">
  <section class="header-blogs border-0 mb-0 pb-0">
    <h1 class="heading">Buat Artikel Baru</h1>
  </section>

  <form method="POST" action="{{ route('store-blog') }}" class="form-edit d-flex flex-column" enctype="multipart/form-data">
      @csrf
      <div class="input-container">
        <label class="form-check-label" for="judul">Judul Artikel</label>
        <input class="form-control" type="text" id="judul" name="title" required>
      </div>

      <div class="row input-container justify-content-between">
        <div class="col mr-3">
          <label class="form-check-label" for="author">Author</label>
          <input type="text" class="form-control" id="author" aria-label="First name" name="author"> 
        </div>
        <div class="col">
          <label class="form-check-label" for="tanggal_update">Tanggal Update</label>
          <input type="date" class="form-control"  aria-label="Last name" name="update_date">
        </div>
      </div>

      <div class="input-container">
        <label class="form-check-label" for="tagar">Tagar</label>
        <input class="form-control" type="text" id="tagar" name="hastags">
      </div>

      <div class="input-container">
        <label class="form-check-label" for="thumbnail">Thumbnail</label>
        <input class="form-control" type="file" id="thumbnail" name="image">
      </div>

      <div class="input-container">
        <label class="form-check-label" for="detail">Detail Artikel</label>
        <textarea id="detail" name="body"></textarea>
      </div>

      <div class="button-section">
        <a class="option-item preview mt-3" data-bs-toggle="modal" data-bs-target="#item-batalkan">
            <span>Batalkan</span>
        </a>
        <a class="option-item create-blog mt-3" data-bs-toggle="modal" data-bs-target="#item-terbitkan">
            <span>Terbitkan</span>
        </a>
      </div>
  </form>

  <!-- Modal -->
  <div class="modal fade" id="item-batalkan" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-head">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Simpan sebagai draf?</h1>
          <p>Anda dapat melanjutkan di lain waktu tanpa menghapus</p>
        </div>
        <div class="modal-content">
          <button href="" class="option-item save-modal-btn">
              <span>Simpan Draf</span>
          </button>
          <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
              <span>Hapus</span>
          </button>
        </div>
      </div>
    </div>
  </div> 

   <!-- Modal -->
  <div class="modal fade" id="item-terbitkan" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-head">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Terbitkan Artikel?</h1>
          <p>Terbitkan artikel anda secara langsung atau terjadwal</p>
        </div>
        <div class="modal-content">
          <button href="" class="option-item save-modal-btn">
              <span>Terbitkan Sekarang</span>
          </button>
          <button href="" class="option-item preview mt-3" data-bs-toggle="modal" data-bs-target="#item-jadwal">
              <span>Jadwalkan Postingan</span>
          </button>
        </div>
      </div>
    </div>
  </div> 


  <!-- Modal -->
  <div class="modal fade" id="item-jadwal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-head">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih tanggal dan waktu untuk mempublikasikan artikel ini</h1>
          <div class="buttons-modal">
            <select class="form-select" aria-label="Default select example">
              <option selected>Choose date</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>

            <select class="form-select " aria-label="Default select example">
              <option selected>Choose time</option>
              <option value="1">12.00PM</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <hr >
        <div class="modal-content buttons-2">
          <button href="" class="option-item save-modal-btn">
              <span>Jadwalkan</span>
          </button>
          <button href="" class="option-item preview" data-bs-toggle="modal" data-bs-target="#item-jadwal">
              <span>Batalkan</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  * { font-family: 'Poppins', sans-serif !important; }
</style>
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
</script>
@endsection
