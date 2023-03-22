@extends('layouts.writer-system.mainlayout',[ 
  'title'=>'Career Network telah luncurkan Website Company', 
  'css'=>'assets/css/dashboard-writer.css', 
  'cssblog' => 'assets/css/dashboard-blog-detail.css', 
  'active' => 'Blogs', 
  'read' => true,
  'detail' => true
]) 

@section('content')
<div class="blog-section detail-page">
  <section class="header-blogs">
    <h1 class="heading">Detail Artikel</h1>

    <div class="btn-section">
      {{-- Button Refresh --}}
      <a href="" class="option-item refresh-btn">
        <span>Segarkan</span>
        <svg
          width="17"
          height="14"
          viewBox="0 0 17 14"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M1.10547 1.66406V5.66511H5.10652"
            stroke="#272727"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M15.7745 12.335V8.33398H11.7734"
            stroke="#272727"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M14.1022 4.99947C13.764 4.04375 13.1892 3.18927 12.4315 2.51577C11.6737 1.84227 10.7577 1.3717 9.76889 1.14797C8.78008 0.924237 7.75071 0.954638 6.77683 1.23633C5.80295 1.51803 4.9163 2.04184 4.19962 2.75889L1.10547 5.66632M15.776 8.33368L12.6818 11.2411C11.9652 11.9582 11.0785 12.482 10.1046 12.7637C9.13075 13.0454 8.10138 13.0758 7.11257 12.852C6.12376 12.6283 5.20775 12.1577 4.44999 11.4842C3.69224 10.8107 3.11744 9.95625 2.77924 9.00053"
            stroke="#272727"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </a>
      {{-- End of Button Refresh --}} 
      
      {{-- Button Delete --}}
      <a href="" class="option-item delete" data-bs-toggle="modal" data-bs-target="#item-delete">
        <svg
          width="18"
          height="22"
          viewBox="0 0 18 22"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M13.5 3.47795V3.70495C14.799 3.82373 16.0927 3.99454 17.378 4.21695C17.4751 4.23376 17.5678 4.26952 17.6511 4.32218C17.7343 4.37485 17.8063 4.4434 17.8631 4.52391C17.9198 4.60441 17.9601 4.69531 17.9817 4.7914C18.0033 4.88749 18.0058 4.9869 17.989 5.08395C17.9722 5.18099 17.9364 5.27378 17.8838 5.35701C17.8311 5.44023 17.7626 5.51227 17.682 5.56901C17.6015 5.62575 17.5106 5.66607 17.4146 5.68768C17.3185 5.70929 17.2191 5.71176 17.122 5.69495L16.913 5.65995L15.908 18.7299C15.8501 19.4835 15.5098 20.1875 14.9553 20.701C14.4008 21.2146 13.6728 21.4999 12.917 21.4999H5.08401C4.3282 21.4999 3.60026 21.2146 3.04573 20.701C2.4912 20.1875 2.15095 19.4835 2.09301 18.7299L1.08701 5.65995L0.878007 5.69495C0.78096 5.71176 0.681552 5.70929 0.58546 5.68768C0.489368 5.66607 0.398473 5.62575 0.317964 5.56901C0.15537 5.45442 0.0449542 5.27994 0.0110065 5.08395C-0.0229412 4.88795 0.0223602 4.6865 0.136945 4.52391C0.25153 4.36131 0.426012 4.2509 0.622007 4.21695C1.90727 3.99427 3.20099 3.82347 4.50001 3.70495V3.47795C4.50001 1.91395 5.71301 0.577948 7.31601 0.526948C8.43872 0.491017 9.56229 0.491017 10.685 0.526948C12.288 0.577948 13.5 1.91395 13.5 3.47795ZM7.36401 2.02595C8.45473 1.99106 9.54629 1.99106 10.637 2.02595C11.39 2.04995 12 2.68395 12 3.47795V3.59095C10.0018 3.46959 7.99817 3.46959 6.00001 3.59095V3.47795C6.00001 2.68395 6.60901 2.04995 7.36401 2.02595ZM7.00901 7.97095C7.0052 7.87246 6.98203 7.77568 6.94082 7.68614C6.89961 7.59661 6.84117 7.51606 6.76883 7.44911C6.69649 7.38216 6.61168 7.33011 6.51923 7.29594C6.42678 7.26177 6.3285 7.24614 6.23001 7.24995C6.13152 7.25376 6.03474 7.27693 5.9452 7.31814C5.85567 7.35935 5.77512 7.41779 5.70817 7.49012C5.64122 7.56246 5.58917 7.64728 5.555 7.73973C5.52083 7.83218 5.5052 7.93046 5.50901 8.02895L5.85601 17.0289C5.8637 17.2277 5.95004 17.4153 6.09604 17.5504C6.16833 17.6173 6.25309 17.6693 6.34548 17.7035C6.43787 17.7376 6.53608 17.7533 6.63451 17.7494C6.73293 17.7456 6.82964 17.7225 6.91912 17.6813C7.0086 17.6401 7.08909 17.5817 7.15599 17.5094C7.22289 17.4371 7.27491 17.3524 7.30905 17.26C7.3432 17.1676 7.35881 17.0694 7.35501 16.9709L7.00901 7.97095ZM12.489 8.02895C12.4963 7.92857 12.4834 7.82773 12.4509 7.73246C12.4185 7.63719 12.3672 7.54942 12.3001 7.47439C12.233 7.39936 12.1515 7.3386 12.0604 7.29574C11.9694 7.25287 11.8706 7.22877 11.77 7.22488C11.6694 7.22098 11.5691 7.23737 11.475 7.27307C11.3809 7.30877 11.2949 7.36304 11.2222 7.43266C11.1496 7.50227 11.0916 7.58581 11.0519 7.67829C11.0122 7.77077 10.9915 7.8703 10.991 7.97095L10.644 16.9709C10.6363 17.1699 10.708 17.3637 10.8432 17.5098C10.9784 17.6559 11.1661 17.7423 11.365 17.7499C11.5639 17.7576 11.7577 17.686 11.9038 17.5508C12.0499 17.4156 12.1363 17.2279 12.144 17.0289L12.489 8.02895Z"
            fill="#F8FAFC"
          />
        </svg>

        <span>Hapus</span>
      </a>
      {{-- End of Button Delete --}} 
      
      {{-- Button Edit --}}
      <button class="option-item edit" id="edit">
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M10.344 3.94C10.434 3.398 10.904 3 11.454 3H12.547C13.097 3 13.567 3.398 13.657 3.94L13.806 4.834C13.876 5.258 14.19 5.598 14.586 5.764C14.984 5.928 15.441 5.906 15.791 5.656L16.528 5.129C16.7448 4.97405 17.0095 4.90107 17.275 4.92305C17.5405 4.94502 17.7897 5.06053 17.978 5.249L18.751 6.023C19.141 6.412 19.191 7.025 18.871 7.473L18.344 8.21C18.094 8.56 18.072 9.016 18.237 9.414C18.402 9.811 18.742 10.124 19.167 10.194L20.06 10.344C20.603 10.434 21 10.904 21 11.453V12.547C21 13.097 20.603 13.567 20.06 13.657L19.167 13.806C18.742 13.876 18.402 14.189 18.237 14.586C18.072 14.984 18.094 15.44 18.344 15.79L18.871 16.528C19.191 16.975 19.14 17.588 18.751 17.978L17.977 18.751C17.7887 18.9392 17.5398 19.0546 17.2745 19.0765C17.0092 19.0985 16.7447 19.0257 16.528 18.871L15.79 18.344C15.44 18.094 14.984 18.072 14.587 18.237C14.19 18.402 13.877 18.742 13.806 19.166L13.657 20.06C13.567 20.602 13.097 21 12.547 21H11.453C10.903 21 10.434 20.602 10.343 20.06L10.195 19.166C10.124 18.742 9.811 18.402 9.414 18.236C9.016 18.072 8.56 18.094 8.21 18.344L7.472 18.871C7.025 19.191 6.412 19.14 6.022 18.751L5.249 17.977C5.06053 17.7887 4.94502 17.5395 4.92305 17.274C4.90107 17.0085 4.97405 16.7438 5.129 16.527L5.656 15.79C5.906 15.44 5.929 14.984 5.764 14.586C5.599 14.189 5.259 13.876 4.834 13.806L3.94 13.656C3.398 13.566 3 13.096 3 12.547V11.453C3 10.903 3.398 10.433 3.94 10.343L4.834 10.194C5.258 10.124 5.599 9.811 5.764 9.414C5.929 9.016 5.907 8.56 5.657 8.21L5.13 7.472C4.97505 7.25524 4.90207 6.99053 4.92405 6.72499C4.94602 6.45945 5.06153 6.21034 5.25 6.022L6.023 5.249C6.21134 5.06053 6.46045 4.94502 6.72599 4.92305C6.99153 4.90107 7.25624 4.97405 7.473 5.129L8.21 5.656C8.56 5.906 9.017 5.928 9.414 5.763C9.811 5.598 10.124 5.258 10.194 4.834L10.344 3.94Z"
            fill="#F8FAFC"
            stroke="#F8FAFC"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12V12Z"
            stroke="#FCD34D"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>

        <span>Edit</span>
      </>
      {{-- End of Button Edit --}}
    </div>
  </section>

  <section class="blogs-detail">
    <h1 class="title-blog">{{ $blog->title }}</h1>
    <p class="blog-author-date">{{ $blog->author }}, {{ date('d F Y', strtotime($blog->update_date)) }} </p>

    <img src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' class="thumbnail-detail" alt="{{ $blog->title }}'s Image">

    <div class="content-blog">
      {!! html_entity_decode($blog->body) !!}
    </div>
  </section>
  
  <form method="POST" action="{{ route('update-blog') }}" class="form-edit" enctype="multipart/form-data">
      @csrf
      <div class="input-container">
        <label class="form-check-label" for="judul">Judul Artikel</label>
        <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" id="judul" value="{{ $blog->title }}">
        @error('title')
            <div class="invalid-feedback">
              Please fill the title for your blog.
            </div>
        @enderror
      </div>

      <div class="row input-container justify-content-between">
        <div class="col mr-3">
          <label class="form-check-label" for="author">Author</label>
          <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" aria-label="First name" value="{{ $blog->author }}"> 
          @error('author')
            <div class="invalid-feedback">
              Please fill the author of the blog.
            </div>
          @enderror
        </div>
        <div class="col">
          <label class="form-check-label" for="tanggal_update">Tanggal Update</label>
          <input type="date" name="update_date" class="form-control @error('update_date') is-invalid @enderror"  aria-label="Last name" value="{{ $blog->update_date }}">
          @error('update_date')
            <div class="invalid-feedback">
              Please fill the date uploaded for your blog.
            </div>
          @enderror
        </div>
      </div>

      <div class="input-container">
        <label class="form-check-label" for="tagar">Tagar</label>
        <input class="form-control @error('hastags') is-invalid @enderror" name="hastags" type="text" id="tagar" value="{{ $blog->hastags }}">
        @error('hastags')
            <div class="invalid-feedback">
              Please fill the hastags uploaded for your blog.
            </div>
        @enderror
      </div>

      <div class="input-container">
        <label class="form-check-label" for="thumbnail">Thumbnail</label>
        <img src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' id="thumbnailPreview" class="thumbnail-detail" alt="{{ $blog->title }}'s Image">
        <input type="hidden" name="imageOld" value="{{ $blog->image }}">
        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="thumbnail" value='{{ asset("assets/img/$blog->image") }}'>
        @error('image')
            <div class="invalid-feedback">
              Please upload the thumbnail for your blog.
            </div>
        @enderror
      </div>

      <div class="input-container">
        <label class="form-check-label" for="detail">Detail Artikel</label>
        <textarea id="detail" name="body">
         {{ $blog->body }}
        </textarea>
      </div>

      <div class="button-section">
        <a href="{{ "/blog/uploaded/$blog->id" }}" class="option-item preview mt-3">
            <span>Batalkan</span>
        </a>
        <a class="option-item create-blog mt-3" data-bs-toggle="modal" data-bs-target="#item-edit">
            <span>Simpan Perubahan</span>
        </a>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="item-edit" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-head">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Simpan Perubahan?</h1>
              <p>Artikel yang sudah diubah tidak akan hilang ketika anda kembali</p>
            </div>
            <div class="modal-content">
              <input type="hidden" name="id" value="{{ $blog->id }}">
              <button type="submit" class="option-item save-modal-btn">
                  <span>Simpan</span>
              </button>
              <button type="button" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
                  <span>Batalkan</span>
              </button>
            </div>
          </div>
        </div>
      </div>
  </form>

  <!-- Modal -->
  <div class="modal fade" id="item-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="POST" action="{{ route('destroy-blog') }}" class="modal-content">
        @csrf
        <div class="modal-head">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin akan menghapus artikel ini?</h1>
          <p>Semua data akan hilang</p>
        </div>
        <input type="hidden" name="id" value="{{ $blog->id }}">
        <div class="modal-content">
          <button type="submit" class="option-item delete">
              <span>Hapus</span>
          </button>
          <button type="button" class="option-item preview mt-3" data-bs-dismiss="modal" aria-label="Close">
              <span>Batalkan</span>
          </button>
        </div>
      </form>
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

  thumbnail.onchange = evt => {
    const [file] = thumbnail.files
    if (file) {
      thumbnailPreview.src = URL.createObjectURL(file)
    }
  }

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

  const btnEdit     = document.getElementById("edit");
  const headerBlog  = document.getElementsByClassName("header-blogs")[0];
  const blogsDetail = document.getElementsByClassName("blogs-detail")[0];
  const formEdit    = document.getElementsByClassName("form-edit")[0]

  btnEdit.addEventListener('click', () => {
    headerBlog.style.display  = "none";
    blogsDetail.style.display = "none";
    formEdit.style.display    = "flex";
    formEdit.style.flexDirection = "column";
  })
</script>
@endsection
