<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //asnwer MBTI test Introvert/Extrovert
        Answer::create([
            'question_id' => '1',
            'body' => 'YA',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '1',
            'body' => 'TIDAK',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '2',
            'body' => 'YA',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '2',
            'body' => 'TIDAK',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '3',
            'body' => 'YA',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '3',
            'body' => 'TIDAK',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '4',
            'body' => 'YA',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '4',
            'body' => 'TIDAK',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '5',
            'body' => 'YA',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '5',
            'body' => 'TIDAK',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '6',
            'body' => 'YA',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '6',
            'body' => 'TIDAK',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '7',
            'body' => 'YA',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '7',
            'body' => 'TIDAK',
            'label' => 'I'
        ]);

        //question MBTI test Sensing/Intuitive
        Answer::create([
            'question_id' => '8',
            'body' => 'YA',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '8',
            'body' => 'TIDAK',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '9',
            'body' => 'YA',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '9',
            'body' => 'TIDAK',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '10',
            'body' => 'YA',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '10',
            'body' => 'TIDAK',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '11',
            'body' => 'YA',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '11',
            'body' => 'TIDAK',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '12',
            'body' => 'YA',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '12',
            'body' => 'TIDAK',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '13',
            'body' => 'YA',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '13',
            'body' => 'TIDAK',
            'label' => 'N'
        ]);

        Answer::create([
            'question_id' => '14',
            'body' => 'YA',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '14',
            'body' => 'TIDAK',
            'label' => 'N'
        ]);

        //question MBTI test Thinking/Feeling
        Answer::create([
            'question_id' => '15',
            'body' => 'YA',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '15',
            'body' => 'TIDAK',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '16',
            'body' => 'YA',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '16',
            'body' => 'TIDAK',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '17',
            'body' => 'YA',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '17',
            'body' => 'TIDAK',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '18',
            'body' => 'YA',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '18',
            'body' => 'TIDAK',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '19',
            'body' => 'YA',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '19',
            'body' => 'TIDAK',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '20',
            'body' => 'YA',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '20',
            'body' => 'TIDAK',
            'label' => 'F'
        ]);

        Answer::create([
            'question_id' => '21',
            'body' => 'YA',
            'label' => 'T'
        ]);

        Answer::create([
            'question_id' => '21',
            'body' => 'TIDAK',
            'label' => 'F'
        ]);

        //question MBTI test Judging/Perceiving
        Answer::create([
            'question_id' => '22',
            'body' => 'YA',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '22',
            'body' => 'TIDAK',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '23',
            'body' => 'YA',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '23',
            'body' => 'TIDAK',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '24',
            'body' => 'YA',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '24',
            'body' => 'TIDAK',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '25',
            'body' => 'YA',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '25',
            'body' => 'TIDAK',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '26',
            'body' => 'YA',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '26',
            'body' => 'TIDAK',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '27',
            'body' => 'YA',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '27',
            'body' => 'TIDAK',
            'label' => 'P'
        ]);

        Answer::create([
            'question_id' => '28',
            'body' => 'YA',
            'label' => 'J'
        ]);

        Answer::create([
            'question_id' => '28',
            'body' => 'TIDAK',
            'label' => 'P'
        ]);

        //answer SDS test
        //realistic
        Answer::create([
            'question_id' => '29',
            'body' => 'Suka memperbaiki peralatan elektronik',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Suka membangun sesuatu dari kayu',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Suka bekerja di luar ruangan',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Suka mengoperasikan mesin',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Suka memperbaiki mobil',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Dapat membuat gambar berskala',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Dapat mengganti ban mobil',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Dapat memperbaiki furnitur',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Dapat mengecat ruangan rumah',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Dapat menggunakan alat seperti gerinda atau mesin jahit',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Ingin menjadi mekanik mobil',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Ingin menjadi pemahat barang kesenian',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Ingin menjadi mekanik radio',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Ingin menjadi ahli mesin lokomotif',
            'label' => 'R'
        ]);

        Answer::create([
            'question_id' => '29',
            'body' => 'Ingin menjadi pilot helikopter',
            'label' => 'R'
        ]);

        //investigative
        Answer::create([
            'question_id' => '30',
            'body' => 'Suka membaca buku ilmiah',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Suka bekerja di laboratorium',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Suka menerapkan ilmu matematika',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Suka bekerja dengan angka atau grafik',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Suka mempelajari ilmu fisika',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Dapat menggunakan aljabar untuk menyelesaikan persoalan matematika',
            'label' => 'I'
        ]);
        
        Answer::create([
            'question_id' => '30',
            'body' => 'Dapat menggunakan komputer untuk mengkaji masalah ilmiah',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Dapat memahami mengapa satelit buatan manusia tidak jatuh ke bumi',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Dapat menjelaskan fungsi dari sel darah putih',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Dapat menulis laporan ilmiah',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Ingin menjadi ahli astronomi',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Ingin menjadi ilmuwan riset',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Ingin menjadi penulis artikel ilmiah',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Ingin menjadi teknisi laboratorium',
            'label' => 'I'
        ]);

        Answer::create([
            'question_id' => '30',
            'body' => 'Ingin menjadi analis lingkungan',
            'label' => 'I'
        ]);

        //artistic
        Answer::create([
            'question_id' => '31',
            'body' => 'Suka bermain instrumen musik',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Suka menulis novel atau drama',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Suka bekerja dengan seniman',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Suka menggambar atau melukis',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Suka membaca sastra',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Dapat memainkan satu alat musik',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Dapat menulis cerita atau puisi dengan baik',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Dapat mengambil foto yang atraktif',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Dapat bermain drama',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Dapat mendesain poster',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Ingin menjadi musisi',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Ingin menjadi penulis novel',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Ingin menjadi wartawan',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Ingin menjadi penulis drama',
            'label' => 'A'
        ]);

        Answer::create([
            'question_id' => '31',
            'body' => 'Ingin menjadi pengarang lagu',
            'label' => 'A'
        ]);

        //Social
        Answer::create([
            'question_id' => '32',
            'body' => 'Suka mempelajari budaya lain',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Suka bekerja untuk kegiatan amal',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Suka bekerja dalam team',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Suka bekerja sebagai sukarelawan',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Suka membantu orang lain yang memiliki masalah pribadi',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Dapat memulai pembicaraan dengan orang lain dengan mudah',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Dapat mengajar anak-anak dengan baik',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Dapat membuat orang merasa terhibur',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Orang lain sering mencari saya untuk menceritakan masalah mereka',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Lebih memilih bekerja bersama orang daripada dengan barang',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Ingin menjadi penasihat rehabilitasi',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Ingin menjadi terapis bicara',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Ingin menjadi psikolog klinis',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Ingin menjadi pekerja sosial',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '32',
            'body' => 'Ingin menjadi guru ilmu sosial',
            'label' => 'S'
        ]);

        //enterprising
        Answer::create([
            'question_id' => '33',
            'body' => 'Suka memimpin',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Suka menjual barang',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Suka berbicara di muka umum',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Suka mengawasi kerja orang lain',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Suka berpartisipasi dalam kampanye politik',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Dapat mengatur kampanye sales',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Dapat menjadi pendebat yang handal',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Dapat memimpin kelompok dengan baik',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Dapat mempengaruhi orang untuk membeli produk yang saya jual',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Pandai merayu orang untuk melakukan hal yang saya inginkan',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Ingin menjadi MC',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Ingin menjadi staf sales',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Ingin menjadi manajer departemen store',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Ingin menjadi staf public relations',
            'label' => 'E'
        ]);

        Answer::create([
            'question_id' => '33',
            'body' => 'Ingin menjadi pemilik usaha kecil',
            'label' => 'E'
        ]);

        //conventional
        Answer::create([
            'question_id' => '34',
            'body' => 'Suka mengikuti instruksi yang jelas',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Suka menyimpan catatan rinci tentang pengeluaran',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Suka menyusun dan merapikan',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Suka memeriksa kesalahan dari tulisan atau barang',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Suka bekerja dalam kantor',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Dapat memakai peralatan pemrosesan data sederhana',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Dapat menempatkan kredit dan debit',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Dapat memasukkan informasi di terminal komputer',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Dapat menulis surat bisnis',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Sangat berhati-hati dan selalu menjaga kerapihan',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Ingin menjadi auditor',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Ingin menjadi ahli pajak',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Ingin menjadi operator komputer',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Ingin menjadi analis keuangan',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '34',
            'body' => 'Ingin menjadi akuntan publik',
            'label' => 'C'
        ]);

        //answer Disc Test
        Answer::create([
            'question_id' => '35',
            'body' => 'Menyelesaikan sesuatu dan melihat hasilnya.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '35',
            'body' => 'Dikagumi oleh rekan kerja dan terbebas dari aturan yang kaku.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '35',
            'body' => 'Membantu rekan kerja dan berada di lingkungan yang damai.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '35',
            'body' => 'Mendapatkan panduan yang jelas untuk menyelesaikan suatu tugas.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '36',
            'body' => 'Katakan kepada mereka bahwa saya tidak setuju.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '36',
            'body' => 'Katakan sesuatu yang lucu.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '36',
            'body' => 'Mengangguk dan tidak mengatakan apa-apa.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '36',
            'body' => 'Meminta informasi lebih lanjut.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '37',
            'body' => 'Kita harus ambil keputusan segera!',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '37',
            'body' => 'Tenang saja, kita pasti bisa.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '37',
            'body' => 'Bagaimana perasaanmu? Saya ingin memastikan semua orang merasa nyaman.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '37',
            'body' => 'Mari kita tinjau ulang, apakah kita sudah memiliki semua data yang kita butuhkan?',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '38',
            'body' => 'Jika itu akan membuahkan hasil yang lebih baik, saya akan melakukannya.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '38',
            'body' => 'Jika itu akan membuat orang lain mengagumi saya, saya akan melakukannya.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '38',
            'body' => 'Jika itu akan membantu orang lain, saya akan melakukannya.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '38',
            'body' => 'Saya menikmati penelitian dan analisis.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '39',
            'body' => 'Menemui orang yang perlu saya ajak bicara untuk memenuhi tujuan saya hadir.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '39',
            'body' => 'Menemui dan berbicara dengan sebanyak mungkin orang sebelum acara selesai.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '39',
            'body' => 'Mencari orang yang saya kenal dan berbincang dengan mereka saja.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '39',
            'body' => 'Mengamati acara tersebut dengan tenang, kecuali seseorang berbicara kepada saya.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '40',
            'body' => 'Melakukan, memimpin, dan mencapai.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '40',
            'body' => 'Ramah, menyenangkan, dan persuasif.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '40',
            'body' => 'Sabar, baik, dan suka membantu.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '40',
            'body' => 'Logis, faktual, dan benar.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '41',
            'body' => 'Apa pengaruhnya terhadap hasil dan efisiensi?',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '41',
            'body' => 'Bagaimana pengaruhnya terhadap semua orang yang terlibat?',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '41',
            'body' => 'Bagaimana pengaruhnya terhadap saya?',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '41',
            'body' => 'Apakah ada alasan bagus di baliknya?',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '42',
            'body' => 'Segera selesaikan dan lanjut ke tugas berikutnya.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '42',
            'body' => 'Mencari rekan yang menyenangkan dan dapat diajak berdiskusi saat bekerja.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '42',
            'body' => 'Kerjakan sesuai dengan instruksi dari pimpinan.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '42',
            'body' => ' Membuat perencanaan dan kerjakan sesuai rencana.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '43',
            'body' => 'Tugas yang serba cepat dan berubah dengan cepat yang menciptakan kemajuan.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '43',
            'body' => 'Berinteraksi dengan banyak orang untuk menciptakan ide dan energi baru.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '43',
            'body' => 'Tugas yang nyaman dengan team yang saling mendukung.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '43',
            'body' => 'Bekerja sendiri dan fokus pada tugas yang ada untuk menciptakan keunggulan.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '44',
            'body' => 'Mengakhiri telepon apabila topik perbincangan tidak produktif.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '44',
            'body' => 'Berbicara dengan orang yang menelepon.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '44',
            'body' => 'Mencari tahu bagaimana saya bisa membantu orang tersebut.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '44',
            'body' => 'Mencari tahu alasan sesungguhnya mengapa mereka menelepon saya.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '45',
            'body' => 'Anda mampu menyelesaikan banyak hal.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '45',
            'body' => 'Anda luar biasa!',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '45',
            'body' => 'Saya sangat menghargai pertolongan Anda.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '45',
            'body' => 'Anda melakukan pekerjaan yang sangat baik.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '46',
            'body' => 'Mengatasi tantangan dan meraih hasil besar.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '46',
            'body' => 'Mengerjakan berbagai tugas dengan banyak orang agar menyenangkan.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '46',
            'body' => 'Melakukan hal yang saya sudah terbiasa lakukan, tanpa tekanan.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '46',
            'body' => 'Mengevaluasi informasi untuk membangun rencana atau sistem.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '47',
            'body' => 'Memiliki hasrat yang besar untuk menang.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '47',
            'body' => 'Mampu memotivasi orang lain.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '47',
            'body' => 'Memiliki kesabaran yang besar.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '47',
            'body' => 'Sangat berhati-hati dalam bertindak.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '48',
            'body' => 'Tegas dan memiliki daya juang besar.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '48',
            'body' => 'Optimis dan menyenangkan.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '48',
            'body' => 'Sabar dan baik hati.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '48',
            'body' => 'Perfeksionis dan cermat.',
            'label' => 'C'
        ]);

        Answer::create([
            'question_id' => '49',
            'body' => 'Bekerja tanpa henti dalam durasi yang panjang.',
            'label' => 'D'
        ]);

        Answer::create([
            'question_id' => '49',
            'body' => 'Berteman dengan siapapun yang saya temui.',
            'label' => 'i'
        ]);

        Answer::create([
            'question_id' => '49',
            'body' => 'Menolong setiap orang yang membutuhkan.',
            'label' => 'S'
        ]);

        Answer::create([
            'question_id' => '49',
            'body' => 'Menjaga perilaku dan kata-kata dalam segala situasi.',
            'label' => 'C'
        ]);
        


        
    }
}
