@extends('layouts.writer-system.mainlayout',[
  'title'=>'Career Network telah luncurkan Website Company',
  'css'=>'assets/css/dashboard-writer.css',
  'cssblog' => 'assets/css/dashboard-blog-detail.css',
  'active' => 'Blogs',
  'read' => true,
  ])

@section('content')
    <form action="" class="form-blog">
      {{-- Input Title --}}
      <div class="form-input">
        <label for="" class="label-input">Title</label>
        <input type="text" name="" id="" value="Career Network telah luncurkan Website Company" readonly />
      </div>

      <div class="form-input">
          <label for="" class="label-input">Author</label>
          <input type="text" name="" id="" value="Indah Mariana" readonly />
      </div>

      {{-- Input Author & Input Date Uploaded --}}
      {{-- <div class="form-input-row">
        <div class="form-input">
          <label for="" class="label-input">Author</label>
          <input type="text" name="" id="" value="Indah Mariana" class="input-md" readonly />
        </div>

        <div class="form-input">
          <label for="" class="label-input">Date Upload</label>
          <input type="text" name="" id="" value="Indah Mariana" class="input-sm" readonly />
        </div>
      </div> --}}

      {{-- Input Tagar --}}
      <div class="form-input">
        <label for="" class="label-input">Tagar</label>
         <input type="text" name="" id="" value="#CareerNetwork #Company #Website #WebsiteCompany #Launching" readonly />
      </div>

      {{-- Paragraph --}}
      <div class="paragraph">
      <label for="" class="label-input">Paragraph 1</label>
        <div class="form-input">
          <label for="" class="label-input">Image</label>
          <div class="container-img-input">
            <span class="img-input">
              <img src="{{ asset('assets/img/img-1.png') }}" alt="Image Input" class="image-uploaded">
            </span>
          </div>
        </div>

        <div class="form-input">
          <label for="" class="label-input">Body</label>
          <textarea name="" id="" cols="30" rows="7" readonly>Career Network - Dalam pertama kali Career Network mengeluarkan website company resmi. Dengan mengusung tema “Accelerate your growth with us” memberikan sentuhan gabungan antara formal dan interaktif. Sehingga dapat beradaptasi dengan perkembangan zaman, terutama anak muda. Sebagai wujud komitmen terhadap client dan investor, website company hadir untuk memberikan informasi perusahaan secara jelas, ringkas dan valid. Dengan harapan sebagai awalan untuk meningkatkan promosi brand yang dikenal luas dan menjalin koneksi dengan client potensial.
          </textarea>
        </div>
      </div>

      {{-- Paragraph --}}
      <div class="paragraph">
      <label for="" class="label-input">Paragraph 2</label>
        <div class="form-input">
          <label for="" class="label-input">Image</label>
          <div class="container-img-input">
            <span class="img-input">
              <img src="{{ asset('assets/img/img-2.png') }}" alt="Image Input" class="image-uploaded">
            </span>
          </div>
        </div>

        <div class="form-input">
          <label for="" class="label-input">Body</label>
          <textarea name="" id="" cols="30" rows="7" readonly>Terdapat berbagai ilustrasi yang ada di website untuk membantu pengguna untuk memahami dan membayangkan suatu informasi agar lebih baik. Selain itu, membangun daya tarik emosional yang kuat turut menjadi tujuan dalam membangun website. Ditambah keunikan warna yang selaras antara orange yang menjadi identitas perusahaan dengan perpaduan warna biru. 
            
Career Network memiliki dua produk, yaitu Career Network EduCareer untuk memberikan pelatihan online bagi mahasiswa/i secara 1 on 1 dan kelompok dengan mentor yang expert di bidangnya dan kurikulum terstruktur. Selain itu, terdapat produk lain yaitu Career Network Sonic sebagai layanan pemesanan jasa Freelance untuk membantu kebutuhan masyarakat. Kedua produk ini masih pada tahap pengembangan dan akan diluncurkan pada beberapa bulan kedepan. Stay tune!l.
          </textarea>
        </div>
      </div>

      {{-- Paragraph --}}
      <div class="paragraph">
      <label for="" class="label-input">Paragraph 3</label>
        <div class="form-input">
          <label for="" class="label-input">Image</label>
          <div class="container-img-input">
            <span class="img-input">
              <img src="{{ asset('assets/img/img-3.png') }}" alt="Image Input" class="image-uploaded">
            </span>
          </div>
        </div>

        <div class="form-input">
          <label for="" class="label-input">Body</label>
          <textarea name="" id="" cols="30" rows="7" readonly>Tertarik untuk berpartner bersama kami untuk masa depan?

Hubungi secara online ke dalam email atau nomor telepon yang ada pada halaman company. Bisa juga untuk datang secara langsung ke alamat yang tertera. Tertarik dengan Cerita, Hiburan, Informasi serta Promo menarik dari Career Network. Kunjungi saja blog Career Network untuk memperoleh update terbaru.
          </textarea>
        </div>
      </div>
    </form>
@endsection
    