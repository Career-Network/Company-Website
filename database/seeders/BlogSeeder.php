<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'Career Network telah Luncurkan Website Company',
            'user_id' => 1,
            'author' => 'Indah Mariana',
            'image' => 'thumbnail-detail.png',
            'body' => "<p><b>Career Network</b> - Dalam pertama kali Career Network mengeluarkan website company resmi. Dengan mengusung tema “Accelerate your growth with us” memberikan sentuhan gabungan antara formal dan interaktif. Sehingga dapat beradaptasi dengan perkembangan zaman, terutama anak muda. Sebagai wujud komitmen terhadap client dan investor, website company hadir untuk memberikan informasi perusahaan secara jelas, ringkas dan valid. Dengan harapan sebagai awalan untuk meningkatkan promosi brand yang dikenal luas dan menjalin koneksi dengan client potensial. <br /><br />
          Terdapat berbagai ilustrasi yang ada di website untuk membantu pengguna untuk memahami dan membayangkan suatu informasi agar lebih baik. Selain itu, membangun daya tarik emosional yang kuat turut menjadi tujuan dalam membangun website. Ditambah keunikan warna yang selaras antara orange yang menjadi identitas perusahaan dengan perpaduan warna biru. <br /><br />
          Career Network memiliki dua produk, yaitu Career Network EduCareer untuk memberikan pelatihan online bagi mahasiswa/i secara 1 on 1 dan kelompok dengan mentor yang expert di bidangnya dan kurikulum terstruktur. Selain itu, terdapat produk lain yaitu Career Network Sonic sebagai layanan pemesanan jasa Freelance untuk membantu kebutuhan masyarakat. Kedua produk ini masih pada tahap pengembangan dan akan diluncurkan pada beberapa bulan kedepan. Stay tune!.</p>",
            'hastags' => '#CareerNetwork',
            'update_date' => date('y-m-d'),
        ]);
    }
}