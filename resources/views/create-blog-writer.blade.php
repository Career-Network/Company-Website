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
      @error('title')
            <div class="invalid-feedback">
              Please choose a username.
            </div>
        @enderror
      <div class="input-container">
        <label class="form-check-label" for="judul">Judul Artikel</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title">
        @error('title')
            <div class="invalid-feedback">
              Please fill the title for your blog.
            </div>
        @enderror
      </div>

      <div class="row input-container justify-content-between">
        <div class="col mr-3">
          <label class="form-check-label" for="author">Author</label>
          <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" aria-label="First name" name="author"> 
          @error('author')
            <div class="invalid-feedback">
              Please fill the author of the blog.
            </div>
          @enderror
        </div>
        <div class="col">
          <label class="form-check-label" for="tanggal_update">Tanggal Upload</label>
          <input type="date" class="form-control @error('update_date') is-invalid @enderror"  aria-label="Last name" id="update_date" name="update_date">
          @error('update_date')
            <div class="invalid-feedback">
              Please fill the date uploaded for your blog.
            </div>
          @enderror
        </div>
      </div>

      <div class="input-container">
        <label class="form-check-label" for="tagar">Tagar</label>
        <input placeholder="#self-improvement #extraordinary" class="form-control @error('hastags') is-invalid @enderror" type="text" id="hastags" name="hastags">
        @error('hastags')
            <div class="invalid-feedback">
              Please fill the hastags uploaded for your blog.
            </div>
        @enderror
      </div>

      <div class="input-container">
        <label class="form-check-label" for="thumbnail">Thumbnail</label>
        <img src="#" id="thumbnailPreview" class="thumbnail-detail" alt="Image Preview" />
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="thumbnail" name="image">
        @error('image')
            <div class="invalid-feedback">
              Please upload the thumbnail for your blog.
            </div>
        @enderror
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

      <!-- Modal -->
      <div class="modal fade" id="item-terbitkan" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-head">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Terbitkan Artikel?</h1>
              <p>Terbitkan artikel anda secara langsung atau terjadwal</p>
            </div>
            <div class="modal-content">
              <button type="submit" class="option-item save-modal-btn">
                  <span>Terbitkan Sekarang</span>
              </button>
              <button type="button" class="option-item preview mt-3" data-bs-toggle="modal" data-bs-target="#item-jadwal">
                  <span>Jadwalkan Postingan</span>
              </button>
            </div>
          </div>
        </div>
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
          <button id="btnSaveDraft" class="option-item save-modal-btn">
              <span>Simpan Draf</span>
          </button>
          <button class="option-item preview mt-3 hapus-create">
              <a href="{{ route('dashboard-writer') }}">Hapus</a>
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
            <div class="col-md-6">
              <input type="date" class="form-control"  aria-label="Last name" name="update_date">
            </div>

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
  // Setting up thumbnail preview when uploading blog
  const thumbnail = document.getElementById("thumbnail");
  const thumbnailPreview = document.getElementById("thumbnailPreview");

  thumbnailPreview.style.display = "none";
  thumbnail.addEventListener('click', () => {
    thumbnailPreview.style.display = "block";
  })

  thumbnail.onchange = evt => {
    const [file] = thumbnail.files
    if (file) {
      thumbnailPreview.src = URL.createObjectURL(file)
    }
  }

  // draft default variable
  const draft = {
    title: "Title",
    author: "Author",
    update_date: "Update Date",
    hastags: "Hastags",
    image: [],
    body: "Body Blog",
  };

  const drafts = [];

  // save as draft
  const btnSaveDraft = document.getElementById("btnSaveDraft");
  btnSaveDraft.addEventListener('click', () => {
    // get value input
    const title      = document.getElementById("title").value;
    const author     = document.getElementById("author").value;
    const updateDate = document.getElementById("update_date").value;
    const hastags    = document.getElementById("hastags").value;
    const image      = document.getElementById("thumbnail").value;
    const body       = document.getElementById("detail").value;

    // set value to draft object
    draft.title       = title;
    draft.author      = author;
    draft.update_date = updateDate;
    draft.hastags     = hastags;
    draft.image       = image;
    draft.body        = body;

    // save to localstorage
    if(localStorage.getItem("drafts")) {
      const draftStorage = JSON.parse(localStorage.getItem("drafts"));
      draftStorage.push(draft);
      localStorage.setItem("drafts", JSON.stringify(draftStorage));
      window.location.href = "/blog/schedule";
    } else {
      drafts.push(draft);
      localStorage.setItem("drafts", JSON.stringify(drafts));
      window.location.href = "/blog/schedule";
    }
  })

  // Initialize tinymce editor
  tinymce.init({
            selector: 'textarea',
            height: 300,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
      'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
      'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
      'insertdatetime', 'media', 'table', 'help', 'wordcount', 'image code'
    ],
            toolbar: 'undo redo | blocks | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help | image code | insertfile undo redo',
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/blog/upload-image',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
            content_style: 'body { font-family:Poppins,Arial,sans-serif; font-size:16px }'
        });
</script>
@endsection
