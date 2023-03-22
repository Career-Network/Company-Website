@extends('layouts.writer-system.mainlayout',[ 
  'title'=>'Create', 
  'css'=>'assets/css/dashboard-writer.css', 
  'cssblog' => 'assets/css/dashboard-blog-detail.css', 
  'active' => 'Blogs', 
  // 'read' => true,
  'detail' => true
]) 

@section('content')
<div class="blog-section">
  <section class="header-blogs border-0 mb-0 pb-0">
    <h1 class="heading">Buat Artikel Baru</h1>
  </section>

  <form method="" action="" class="form-edit d-flex flex-column">
      <div class="input-container">
        <label class="form-check-label" for="judul">Judul Artikel</label>
        <input class="form-control" type="text" id="judul" value="">
      </div>

      <div class="row input-container justify-content-between">
        <div class="col mr-3">
          <label class="form-check-label" for="author">Author</label>
          <input type="text" class="form-control" id="author" aria-label="First name" value=""> 
        </div>
        <div class="col">
          <label class="form-check-label" for="tanggal_update">Tanggal Update</label>
          <input type="date" class="form-control"  aria-label="Last name">
        </div>
      </div>

      <div class="input-container">
        <label class="form-check-label" for="tagar">Tagar</label>
        <input class="form-control" type="text" id="tagar" value="">
      </div>

      <div class="input-container">
        <label class="form-check-label" for="thumbnail">Thumbnail</label>
        <input class="form-control" type="file" id="thumbnail">
      </div>

      <div class="input-container">
        <label class="form-check-label" for="detail">Detail Artikel</label>
        <textarea id="detail"></textarea>
      </div>

      <div class="button-section">
        <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
            <span>Batalkan</span>
        </button>
        <button href="" class="option-item create-blog mt-3" data-bs-dismiss="modal" aria-label="Close">
            <span>Simpan Perubahan</span>
        </button>
      </div>
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="item-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-head">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin akan menghapus artikel ini?</h1>
        <p>Semua data akan hilang</p>
      </div>
      <div class="modal-content">
         <button href="" class="option-item delete">
            <span>Hapus</span>
        </button>
        <button href="" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
            <span>Batalkan</span>
        </button>
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
