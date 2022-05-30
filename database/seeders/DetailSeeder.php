<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::insert([
            [
                'book_id' => 1,
                'author' => 'Kisah Tanah Jawa',
                'publisher' => 'Gagas Media',
                'year' => 2022,
                'description' => "Sihir Mesir di Tanah Jawa menyajikan cerita fiksi itmiah, dengan berbagai fakta maba tatilMesir: Eropa, dan Jawa pada awal Daendels hadir di tanah Jawa. Kitab Black Pullet. Freemason. Kanuragan, Macan Putih, TumbaL dan cerita-cerita dari masa talu lainnya tetah membentuk peradaban. Sebuah upaya untuk mengenal tebih dekat tagi masa talu untuk cerita masa depan yang lebih baik.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 2,
                'author' => 'Valerie',
                'publisher' => 'Huta Media',
                'year' => 2022,
                'description' => "Hampir tiga tahun bersama menjalani hubungan yang begitu indah, Raihan dan Ailsa ditampar oleh kenyataan ketika mereka akhirnya harus dipisah oleh jarak dan waktu setelah masuk dunia perkuliahan.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 3,
                'author' => 'Anonymous',
                'publisher' => 'Elex Media Komputindo',
                'year' => 2022,
                'description' => "Menjadi anak tengah itu tandanya harus mau mengalah seumur hidup. Entah mengalah sama si Bungsu, atau bersabar kalau dibanding-bandingkan sama si Sulung yang superior. Namun, apa iya harus mengalah juga soal jodoh? Acara buka puasa bersama di rumah mendadak canggung, saat si Tengah mengenalkan sang pacar pada keluarganya. Gilang si Tengah, kesal saat mengetahui bahwa Gita ternyata sudah kenal duluan dengan si Sulung, Gara. Yang bikin gawat, orangtua Gita sangat berharap agar Gara menjadi menantu mereka. Nggak heran juga, karena si Tengah sadar kalau si Sulung akan selalu dianggap lebih baik dari dirinya. Ironisnya, sejak malam itu pula, Gara justru lebih terbuka pada Gita dibanding keluarganya sendiri. Dan sekarang, satu-satunya orang yang tahu rahasia Gara adalah Gita. Apakah hubungan si Tengah dan gadisnya akan baik-baik saja? Kapan si Tengah akan berhenti merasa rendah diri? Mungkinkah si sulung akan menyimpan rahasia dari keluarganya selamanya?",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 4,
                'author' => 'Kaminaga Manabu',
                'publisher' => 'm&c!',
                'year' => 2022,
                'description' => "Untuk berkonsultasi mengenai temannya yang terlibat dalam peristiwa aneh, Haruka mengunjungi “Asosiasi Peneliti Film” karena mendengar kabar tentang keberadaan lelaki yang memiliki kekuatan spiritual di sana. Namun, yang dijumpainya justru seorang anak muda kurus dengan pandangan mengantuk dan rambut acak-acakan. Apakah Haruka akan berhasil melakukan konsultasi sesuai yang direncanakannya?! Yakumo Saitou, anak muda yang memiliki kemampuan melihat arwah orang mati berkat mata kirinya yang berwarna merah, menghadapi berbagai kasus aneh dengan gaya yang nyentrik. Kasus penyiksaan dan pembunuhan mahasiswi, terowongan berhantu, dan pembunuhan dengan kamuflase bunuh diri... semua berhasil dipecahkannya dengan baik! Namun, ada sesosok misterius yang membayanginya...",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 5,
                'author' => 'Dr. Ir. Mahrus Aryadi, Ilyas Masudin',
                'publisher' => 'Umm Press',
                'year' => 2022,
                'description' => "Hutan Rakyat: Fenomenologi Adaptasi Budaya Masyarakat",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 6,
                'author' => 'Syarifah Salmah, Dr. Sjarifah Salmah, SKM, M.Kes',
                'publisher' => 'Tim',
                'year' => 2022,
                'description' => "Diawali adanya rasa kesetiakawanan sosial terhadap sesama. timbul minat ingin tahu dan berbagi cara pandang terhadap permasalahan kualitas lingkungan hidup yang berproses dan berkembang. umumnya pada bantaran sungai dan khususnya pada bantaran sungai Ciliwung Manggarai. Mengapa? Karena masyarakat yang tinggal pada bantaran sungai risikonya jauh berbeda dibandingkan lokasi kumuh lainnya. Implementasi kebijakan penataan bantaran sungai yang ramah lingkungan yang diamanatkan oleh peraturan Pemerintah Daerah pun belum pernah tuntas dilaksanakan karena minat mencari akar permasalahan seakan terlupakan atau terabaikan.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 7,
                'author' => 'Dr. Intan Rahmawati, S.Psi., M.Si',
                'publisher' => 'Bumi Aksara',
                'year' => 2022,
                'description' => "Psikologi sosial seringkali disamakan dengan ilmu sosiologi. Namun dalam pengertiannya, psikologi sosial adalah hasil irisan dari dua ilmu yang berbeda, yaitu psikologi dan sosiologi. Ilmu psikologi sosial sendiri adalah bidang ilmu yang mengkaji peritaku dan pemikiran manusia dalam dinamika sosial di masyarakat. Oleh karena itu, buku ini menjelaskan konsep-konsep dasar dalam psikologi sosial yang dapat membantu kita untuk memahami interaksi sosial yang ada di masyarakat dari kacamata psikologi. Tak hanya mengenai konsep psikologi sosial, penulis membahas metode, pendekatan, dan model penelitian dalam psikologi sosial. Selain itu, bagaimana psikologi sosial dapat digunakan dalam ruang lingkup praktis (terapan) dibahas juga dalam buku ini.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 8,
                'author' => 'Dianta Hasri',
                'publisher' => 'Kanisius Yogyakarta/Familia',
                'year' => 2022,
                'description' => "Buku Metodologi Penelitian Posthumanologi Sastra ini berupaya memberikan jalur-jalur terbaru pemahaman teks-teks sastra. Tentu saja, kehadiran tafsir-tafsir terbaru tentang posthumanisme sastra yang ditawarkan dalam buku ini, bukan untuk mengisi kejenuhan, kekosongan, dan kelumpuhan pemaknaan karya sastra yang masih berpusar pada manusia. Penggunaan istilah kata “post” dalam buku yang mengawali kata “human” sesungguhnya mengacu pada pengertian Lyotard (1989), yakni situasi dan kondisi keterputusan, melepaskan diri, melampaui, pembebasan diri dari jerat. Hal yang paling saya setujui dari kata “post” itu berarti melampaui, melebihi, dan melewati realitas manusia.",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
