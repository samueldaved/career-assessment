<x-layout>
    <div class="justify-center items-center h-screen mt-20">
        <div class="text-center">
            <p class="">Selamat datang {{Auth::user()->name}},</p>
            <p>saat ini anda sedang berada di halaman "Home"</p>
            <p class="mt-5">Silakan pilih :</p>
            @can('is-admin')
                <p>"Setting Kandidat" untuk :</p>
                <p>-Menambahkan / melihat / mengubah / menghapus kandidat</p>
                <p>-Melihat / menghapus hasil psikotes kandidat</p>
            @elsecan('is-hrd')
                <p>"Setting Kandidat" untuk :</p>
                <p>-Melihat semua kandidat</p>
                <p>-Melihat / mengunduh / mencetak hasil psikotes kandidat</p>
            @else
                <p>"Assessment Test" untuk segera memulai psikotes</p>
                <p>"Hasil Test" untuk melihat kembali hasil psikotes Anda</p>
                <p>"Contact" untuk menghubungi HRD</p>
            @endcan
            
            <p>"Logout" untuk keluar dari aplikasi</p>
        </div>
        
        <x-test-images />
        
    </div>
</x-layout>