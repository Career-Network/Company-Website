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
      <span class="header-paragraph">
        <label for="" class="label-input">Paragraph 1</label>
        <a href="" class="option-item delete-paragraph">
          
          <span>Delete Paragraph</span>
          <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15V9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8C6.73478 8 6.48043 8.10536 6.29289 8.29289C6.10536 8.48043 6 8.73478 6 9V15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16ZM17 4H13V3C13 2.20435 12.6839 1.44129 12.1213 0.87868C11.5587 0.316071 10.7956 0 10 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H1C0.734784 4 0.48043 4.10536 0.292893 4.29289C0.105357 4.48043 0 4.73478 0 5C0 5.26522 0.105357 5.51957 0.292893 5.70711C0.48043 5.89464 0.734784 6 1 6H2V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V6H17C17.2652 6 17.5196 5.89464 17.7071 5.70711C17.8946 5.51957 18 5.26522 18 5C18 4.73478 17.8946 4.48043 17.7071 4.29289C17.5196 4.10536 17.2652 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H10C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H7V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V6H14V17ZM11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15V9C12 8.73478 11.8946 8.48043 11.7071 8.29289C11.5196 8.10536 11.2652 8 11 8C10.7348 8 10.4804 8.10536 10.2929 8.29289C10.1054 8.48043 10 8.73478 10 9V15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16Z" fill="white"/>
            </svg>
          </a>
      </span>
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
      <span class="header-paragraph">
        <label for="" class="label-input">Paragraph 2</label>
        <a href="" class="option-item delete-paragraph">
          
          <span>Delete Paragraph</span>
          <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15V9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8C6.73478 8 6.48043 8.10536 6.29289 8.29289C6.10536 8.48043 6 8.73478 6 9V15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16ZM17 4H13V3C13 2.20435 12.6839 1.44129 12.1213 0.87868C11.5587 0.316071 10.7956 0 10 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H1C0.734784 4 0.48043 4.10536 0.292893 4.29289C0.105357 4.48043 0 4.73478 0 5C0 5.26522 0.105357 5.51957 0.292893 5.70711C0.48043 5.89464 0.734784 6 1 6H2V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V6H17C17.2652 6 17.5196 5.89464 17.7071 5.70711C17.8946 5.51957 18 5.26522 18 5C18 4.73478 17.8946 4.48043 17.7071 4.29289C17.5196 4.10536 17.2652 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H10C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H7V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V6H14V17ZM11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15V9C12 8.73478 11.8946 8.48043 11.7071 8.29289C11.5196 8.10536 11.2652 8 11 8C10.7348 8 10.4804 8.10536 10.2929 8.29289C10.1054 8.48043 10 8.73478 10 9V15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16Z" fill="white"/>
            </svg>
          </a>
      </span>
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
      <span class="header-paragraph">
        <label for="" class="label-input">Paragraph 3</label>
        <a href="" class="option-item delete-paragraph">
          
          <span>Delete Paragraph</span>
          <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15V9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8C6.73478 8 6.48043 8.10536 6.29289 8.29289C6.10536 8.48043 6 8.73478 6 9V15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16ZM17 4H13V3C13 2.20435 12.6839 1.44129 12.1213 0.87868C11.5587 0.316071 10.7956 0 10 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H1C0.734784 4 0.48043 4.10536 0.292893 4.29289C0.105357 4.48043 0 4.73478 0 5C0 5.26522 0.105357 5.51957 0.292893 5.70711C0.48043 5.89464 0.734784 6 1 6H2V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V6H17C17.2652 6 17.5196 5.89464 17.7071 5.70711C17.8946 5.51957 18 5.26522 18 5C18 4.73478 17.8946 4.48043 17.7071 4.29289C17.5196 4.10536 17.2652 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H10C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H7V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V6H14V17ZM11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15V9C12 8.73478 11.8946 8.48043 11.7071 8.29289C11.5196 8.10536 11.2652 8 11 8C10.7348 8 10.4804 8.10536 10.2929 8.29289C10.1054 8.48043 10 8.73478 10 9V15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16Z" fill="white"/>
            </svg>
          </a>
      </span>
      
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

      <span class="header-paragraph">
        <label for="" class="label-input"> </label>
        <a href="" class="option-item create-blog">
          
          <span>Add New Paragraph</span>
          <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 8.99805H8V13.998C8 14.2633 7.89464 14.5176 7.70711 14.7052C7.51957 14.8927 7.26522 14.998 7 14.998C6.73478 14.998 6.48043 14.8927 6.29289 14.7052C6.10536 14.5176 6 14.2633 6 13.998V8.99805H1C0.734784 8.99805 0.48043 8.89269 0.292893 8.70515C0.105357 8.51762 0 8.26326 0 7.99805C0 7.73283 0.105357 7.47848 0.292893 7.29094C0.48043 7.1034 0.734784 6.99805 1 6.99805H6V1.99805C6 1.73283 6.10536 1.47848 6.29289 1.29094C6.48043 1.1034 6.73478 0.998047 7 0.998047C7.26522 0.998047 7.51957 1.1034 7.70711 1.29094C7.89464 1.47848 8 1.73283 8 1.99805V6.99805H13C13.2652 6.99805 13.5196 7.1034 13.7071 7.29094C13.8946 7.47848 14 7.73283 14 7.99805C14 8.26326 13.8946 8.51762 13.7071 8.70515C13.5196 8.89269 13.2652 8.99805 13 8.99805Z" fill="white"/>
              </svg>
          </a>
      </span>

      <button class="save">
          <span>Save Changes</span>
      </button>
    </form>
@endsection
    