<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Latar Belakang',
                'content' => '<p>Reformasi yang bergulir pada tahun 1998 yang ditandai dengan 3(tiga) tuntutan yaitu; demokratisasi, tranparasi dan supremasi hukum & HAM, telah membawa perubahan mendasar dalam kehidupan bermasyarakat, berbangsa dan benegara. Konsekuensi dari tuntutan reformasi tersebut salah satu diantaranya adalah ditetapkannya UU N0.14 tahun 2008 tentang Keterbukaan Informasi Publik yang bertujuan untuk mewujudkan tata kelola pemerintahan yang baik dan bertanggungjawab (good governance) melalui penerapan prinsip-prinsip akuntabilitas, transparansi dan supremasi hukum serta melibatkan partisipasi masyarakat dalam setiap proses kebijakan publik.</p>
                <p class="mb-4">Dalam proses keterlibatan masyarakat perlu diakomodasikan dengan cara mempermudah jaminan akses informasi publik berdasarkan pedoman pengelolaan informasi dan dokumentasi. Dalam kaitan ini, pengelolaan informasi dan dokumentasi publik diharapkan tidak sampai mengganggu prinsip kehati-hatian dalam menjaga kelangsungan kehidupan berbangsa dan bernegara untuk kepentingan yang lebih luas.</p>
                <p class="mb-4">Penerapan prinsip-prinsip good governance ini pada dasarnya sangat tergantung pada persiapan masing-masing Kementerian Komunikasi dan Informatika dalam mengelola informasi dan dokumentasi bagi masyarakat. Untuk itu, sebagai upaya menyamakan persepsi dalam menciptakan dan menjamin kelancaraan dalam pelayanan informasi publik, maka disusun Pedoman Pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian Komunikasi dan Informatika.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Maksud</p>
                <p>Pedoman pengelolaan Informasi dan Dokumentasi di lingkungan Kementerian Komunikasi dan Informatika dimaksudkan sebagai acuan bagi setiap Satuan Kerja dalam penyediaan, pengumpulan, pendokumentasian dan pelayanan, serta penetapan Pejabat Pengelola Informasi dan Dokumentasi.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Tujuan</p>
                <p>a. Masing-masing Satuan Kerja mampu menyediakan, mengumpulkan, mendokumentasikan dan menyampaikan informasi tentang kegiatan dan produk unit kerjanya secara akurat dan tidak menyesatkan;<br>
                    b. Satuan Kerja mampu menyediakan, mengumpulkan, mendokumentasikan dan menyampaikan bahan dan produk informasi secara cepat dan tepat waktu;<br>
                    c. Pejabat Pengelola Informasi dan Dokumentasi mampu memberikan pelayanan informasi secara cepat dan tepat waktu dengan biaya ringan dan cara sederhana.</p>',
                'status' => true,
                'created_at' => now(),
            ],
        ];

        DB::table('libraries')->insert($posts);
    }
}
