<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //question MBTI test Introvert/Extrovert
        Question::create([
            'test_id' => '1',
            'body' => 'Saya menikmati pesta dan senang bertemu dengan banyak orang baru:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya merasa tidak nyaman menjadi pusat perhatian:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya senang berinteraksi dengan banyak orang:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Setelah lama bersosialisasi, saya merasa perlu menyendiri:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Kegiatan kelompok cenderung membosankan tanpa saya:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih menikmati membaca buku sendiri daripada pergi ke pesta:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya merasa nyaman berada di tengah keramaian:'
        ]);

        //question MBTI test Sensing/Intuitive
        Question::create([
            'test_id' => '1',
            'body' => 'Saya sering merenungkan akar penyebab fenomena dan hal sejenisnya:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Bagi saya, urusan saat ini lebih penting daripada rencana saya di masa depan:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih suka bereksperimen daripada memakai cara lama yang sudah teruji:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih tertarik pada detail konkret daripada ide abstrak:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya cenderung berbicara menggunakan kiasan dan metafora:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya berkomunikasi tanpa mengasumsikan sesuatu yang tidak dikatakan:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Memikirkan pertanyaan filosofis abstrak adalah membuang waktu:'
        ]);

        //question MBTI test Thinking/Feeling
        Question::create([
            'test_id' => '1',
            'body' => 'Pengambilan keputusan lebih sering dipengaruhi perasaan:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Sulit bagi saya untuk mengekspresikan perasaan dan emosi:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Lebih penting dicintai daripada dihormati:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih menghargai keadilan daripada belas kasihan:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya mudah berempati saat melihat orang lain dalam masalah:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Kesuksesan lebih penting daripada menjaga keharmonisan hubungan:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih terganggu dengan orang yang tidak logis daripada tidak berperasaan:'
        ]);

        //question MBTI test Judging / Perceiving
        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih cenderung tepat waktu saat memiliki janji bertemu:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya lebih cenderung mengandalkan improvisasi daripada perencanaan:'
        ]);
        
        Question::create([
            'test_id' => '1',
            'body' => 'Meja kerja saya selalu dalam keadaan rapi:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya sering lupa mengembalikan barang pada tempatnya:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya selalu menyelesaikan tugas sebelum bersenang-senang:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya memiliki jadwal yang tersusun rapi setiap hari:'
        ]);

        Question::create([
            'test_id' => '1',
            'body' => 'Saya menyelesaikan masalah secara metodis tanpa melewatkan langkah apapun:'
        ]);

        //question SDS test
        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        Question::create([
            'test_id' => '2',
            'body' => 'Pilihlah jawaban yang paling benar/mendekati!'
        ]);

        //question Disc Test
        Question::create([
            'test_id' => '3',
            'body' => 'Dalam lingkungan kerja, hal yang terpenting bagi saya adalah…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Ketika saya tidak setuju dengan suatu pendapat, saya akan…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Ketika team saya mengalami kesulitan, kemungkinan besar saya akan mengatakan…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Sikap saya terhadap pekerjaan detail seperti penelitian dan analisis data, cenderung…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Di sebuah acara dengan banyak orang yang belum saya kenal, saya akan…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Saya paling sering melihat diri saya sendiri…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Ketika mendengar tentang perubahan yang akan dilakukan, saya akan berpikir…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Hal paling akurat untuk menggambarkan cara saya bekerja adalah…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Jenis kegiatan kerja yang paling saya sukai adalah…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Ketika saya menerima panggilan telepon, saya paling tertarik untuk…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Kata-kata seseorang yang dapat memberi dampak paling positif bagi saya adalah…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Proyek atau tugas yang paling saya sukai memungkinkan saya untuk…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Salah satu kekuatan terbesar saya adalah…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Saya dikenal sebagai sosok yang…'
        ]);

        Question::create([
            'test_id' => '3',
            'body' => 'Bagi saya terasa mudah untuk…'
        ]);
        
        
    }
}
