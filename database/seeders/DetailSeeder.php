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
                'author' => 'G. Dani',
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
            [
                'book_id' => 9,
                'author' => 'Antje Babendererde',
                'publisher' => 'Bhuana Ilmu Populer',
                'year' => 2022,
                'description' => "Selama empat belas tahun, Jacob yang amat merindukan sosok ayah di sisinya menelan mentah-mentah kebohongan sang ibu. Lalu kebenaran pun terungkap, ayahnya masih hidup dan berada di ujung dunia, di utara Kanada, di hutan belantara penuh salju dan es tak berujung. Dengan penuh amarah dan kekecewaan, Jacob mencari seorang diri. Namun, ia justru masuk ke dalam petualangan yang membawanya hingga ke titik antara hidup dan mati. Sebuah ujian untuk bertahan hidup di tengah ganasnya alam liar: suhu dingin yang esktrem, kelaparan yang amat sangat, hingga bertarung dengan hewan pemangsa. Perjalanan ini bukan sekadar mencari sang ayah. Ini lebih dari itu. Perjalanan ini akan menguak masa lalunya, akar kehidupannya, asal-usulnya. Bahkan, mampu membuatnya menemukan makna cinta yang selama ini ia cari.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 10,
                'author' => 'Cindy Jessica',
                'publisher' => 'Gramedia Pustaka Utama',
                'year' => 2022,
                'description' => "Amanda punya indra keenam. Kelihatannya keren ya? Kenyataannya, keluarga Amanda sempat khawatir dia bakal dicap aneh sama orang lain. Mereka berusaha supaya nggak ada yang tahu tentang kemampuan Amanda yang sering dapat penglihatan tak terduga. Apalagi, penglihatan itu selalu tentang orang lain, nggak satu pun tentang Amanda sendiri. Saat baru saja naik kelas XII, Amanda mulai mengenal Utha. Hidupnya jadi kayak permen asam manis. Cowok paling resek itu bikin Amanda mengalami banyak hal konyol. Mulai dari balas dendam ke mantan pacar yang selingkuh, dikejar Raden Inu Kertapati abal-abal, sampai ditangkap satpam bank gara-gara kelamaan mengadem di ATM. Pelan-pelan, Amanda menyadari bahwa dia menyukai Utha. Lalu tiba-tiba muncul penglihatan tentang masa depannya bersama Wira. Aduh, nggak mungkin kan dia menikah dengan pamannya Utha yang ganteng selangit itu?",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 11,
                'author' => 'SURJANI WONORAHARDJO, PH.D.',
                'publisher' => 'Andi Offset',
                'year' => 2022,
                'description' => "Buku ini diperuntukkan terutama bagi para mahasiswa kimia dan MIPA serta mahasiswa ilmu-ilmu terapan lain seperti pertanian, peternakan, farmasi, lingkungan, dan rumpun ilmu sejenis, di semua jenjang tergantung pada kebutuhan. Buku ini diharapkan juga dapat menambah khazanah wawasan pekerja sains, baik sains murni maupun aplikatif dan bahan diskusi yang baik untuk meningkatkan kualitas proses sainsnya dan menyesuaikan kebutuhan zaman.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 12,
                'author' => 'Penguin Us',
                'publisher' => 'Penguin Us',
                'year' => 2022,
                'description' => "An almanac like no other, this book offers everything you need to know about the world in 2020--from science and nature to history, world cultures, and the environment. Filled with exquisite National Geographic photography, informative infographics, illustrated time lines, and authoritative maps, this striking new edition will celebrate the 50th anniversary of Earth Day with practical tips for improving your own sustainability habits. The book begins with trending topics in science, technology, and culture, then moves into fascinating chapters on travel, exploration, earth and space, biology, culture, and history. Recurring features include inspiring quotes, revealing facts, photos from National Geographic's Instagram, and a Quizmaster trivia feature. With new discoveries on every page, this cutting-edge book brings you the world, no matter what your age.",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 13,
                'author' => 'Taufiq Ismail, Yanuar Ramadhan',
                'publisher' => 'Elex Media Komputindo',
                'year' => 2022,
                'description' => "Perencanaan keuangan adalah sebuah proses yang terus berlangsung selama kita hidup. Kita mungkin tidak menyadari bahwa banyak sekali keputusan-keputusan menyangkut keuangan yang kita buat setiap hari, seperti membeli makan siang, berinvestasi melalui aplikasi, membeli logam mulia di teman, menabung di bank, mengurus tiket untuk liburan, dan lainnya. Semuanya berlangsung secara natural dan biasa saja tanpa ada panduan. Merencanakan keuangan untuk pribadi sebenarnya sederhana, cukup kuasai beberapa prinsip utamanya; jangan besar pasak daripada tiang, menjaga pendapatan agar tetap berkesinambungan, dan mengatur jumlah pengeluaran. Saking sederhana dan seringnya kita melakukan keputusan-keputusan keuangan secara instan, sering kali kita melupakan apa tujuan kita melakukan perencanaan keuangan. Buku ini tidak akan mengajarkan bagaimana cara cepat untuk menjadi kaya, tapi memberitahukan mengapa kita harus kaya dengan melakukan pengaturan dan perencanaan keuangan. Kita sering kali lupa, bahwa tujuan utama kita sebenarnya bukanlah menjadi kaya, melainkan apa yang bisa kita lakukan dengan kemampuan keuangan kita. Baca buku ini, atur duitmu, dan lihat pencapaianmu!",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 14,
                'author' => 'Tim Komunikasi GoSend',
                'publisher' => 'Elex Media Komputindo',
                'year' => 2022,
                'description' => "Selama tahun 2021, jutaan seller telah menikmati layanan GoSend untuk mengantarkan produk mereka menuju pelanggan. Sebagian besar seller ini merupakan pelaku UMKM yang tersebar di berbagai wilayah di Indonesia. Oleh karena itu, buku Kiat Jitu Menjadi Best Seller ini ditulis sebagai bentuk rasa terima kasih dan dukungan lanjutan bagi kemajuan UMKM di Indonesia. Dengan perubahan yang terjadi pasca pandemi, banyak pelaku UMKM yang harus beradaptasi dan meraba kembali peluang. Dalam buku ini, kami menghadirkan pembahasan tentang social commerce atau social selling sebagai strategi yang bisa diterapkan di era ini. Dengan kemajuan teknologi dan media sosial, para pelaku UMKM bisa memanfaatkannya untuk memasarkan bahkan menjual produknya. Ditambah dengan komitmen GoSend untuk menghadirkan jasa layanan logistik yang cepat dan terproteksi, strategi ini bisa mengeratkan hubungan antara pelaku usaha dengan konsumennya.",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
