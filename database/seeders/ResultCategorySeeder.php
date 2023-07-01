<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResultCategory;

class ResultCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResultCategory::create([
            'name' => 'INTJ',
            'description' => 'Bagi mereka, hidup adalah sebuah papan catur. 
                            Strategi diperlukan untuk setiap langkah hidup karena mereka tidak percaya keberuntungan. 
                            Mereka mempertimbangkan kekuatan dan kelemahan dari setiap langkah sebelum mereka melakukannya. 
                            Mereka tidak pernah kehilangan keyakinan bahwa dengan kecerdikan dan wawasan yang cukup, mereka dapat menemukan cara untuk mencapai setiap tujuan, seberapa berat pun tantangan yang muncul di sepanjang jalan. 
                            Mereka memahami kemampuan mereka sendiri untuk mempelajari dan menguasai topik apa pun yang menarik minat mereka. 
                            Mereka selalu mengandalkan kemampuan berpikir yang independen, namun mereka mungkin mendapatkan kesulitan untuk menemukan orang yang dapat mengikuti analisis tanpa henti tentang segala sesuatu di sekitar mereka. 
                            Banyak tipe kepribadian yang mempercayai status quo, tetapi mereka cenderung skeptis, mempertanyakan segalanya dan memilih untuk membuat penemuan mereka sendiri. 
                            Dalam pencarian mereka untuk menemukan cara yang lebih baik dalam melakukan sesuatu, mereka tidak takut untuk melanggar aturan atau mengambil risiko penolakan, karena pada akhirnya terobosan-terobosan yang mereka ciptakan akan membuahkan hasil yang dapat dimengerti oleh orang-orang yang sebelumnya meragukan mereka. 
                            Mereka percaya bahwa ide baru tidak ada artinya kecuali benar-benar membuahkan hasil. 
                            Mereka tidak akan membiarkan orang-orang yang mencoba menghalanginya dengan menegakkan aturan yang tidak berguna atau memberikan kritik yang tidak dipikirkan dengan matang. 
                            Tipe kepribadian ini hadir dengan sifat mandiri yang kuat karena mereka tidak suka menunggu orang lain untuk mengejar mereka. 
                            Mereka memprioritaskan rasionalitas dan kesuksesan daripada kesopanan dan basa-basi, dengan kata lain mereka lebih suka kebenaran daripada popularitas. 
                            Terkadang perilaku ini bisa dianggap tidak sensitif karena kurang mempertimbangkan pikiran, keinginan, dan rencana orang lain, bagaimana pun mereka secara pribadi terpengaruh dan menghabiskan banyak waktu dan energi untuk mencoba mencari tahu mengapa hal-hal terjadi seperti yang mereka lakukan. 
                            Mereka mungkin tidak selalu menghargai emosi sebagai alat pengambilan keputusan, namun sebenarnya mereka sangat manusiawi.',
            'strength' => [
                'Rasional',
                'Mandiri',
                'Penuh rasa ingin tahu',
                'Kaya informasi',
                'Bertekad kuat',
                'Original'
            ], 
            'weakness' => [
                'Terlalu kritis',
                'Mengabaikan emosi',
                'Arogan',
                'Agresif',
                'Kurang sosial'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ENTJ',
            'description' => 'Mereka secara natural dilahirkan untuk memimpin. 
                            Tipe kepribadian ini menggunakan karisma, kepercayaan diri dan otoritas mereka untuk menarik banyak orang untuk mencapai tujuan bersama. 
                            Mereka dikenal sebagai pribadi dengan tingkat rasionalitas yang tinggi dengan ambisi yang begitu besar untuk mencapai tujuan apa pun yang telah mereka tetapkan, sehingga tidak jarang orang lain melihatnya sebagai pribadi yang kurang berperasaan. 
                            Mereka sangat menyukai tantangan dan mereka yakin bahwa dengan waktu dan sumber daya yang cukup, mereka dapat mencapai tujuan apa pun. 
                            Kualitas inilah yang membuat mereka menjadi wirausahawan yang brilian dan kemampuan mereka untuk berpikir secara strategis dan memiliki fokus jangka panjang sambil menjalankan setiap langkah rencana mereka dengan tekad bulat, menjadikan mereka pemimpin bisnis yang kuat. 
                            Mereka menghargai orang lain yang mampu menandingi mereka secara intelektual dan mampu bertindak dengan presisi dan kualitas yang setara dengan mereka. 
                            Tipe kepribadian ini memiliki kemampuan khusus dalam mengenali bakat orang lain dan hal ini membantu dalam upaya membangun team mereka. 
                            Namun mereka juga memiliki kecenderungan untuk bersikap keras terhadap orang lain yang kurang kompeten dan menyebabkan kegagalan dengan tingkat ketidakpekaan yang mengerikan, dan disinilah dapat timbul masalah. 
                            Dalam lingkungan profesional mereka cenderung memandang ekspresi emosional sebagai kelemahan, tidak efisien dan kurang kompeten. 
                            Hal inilah yang perlu diperhatikan oleh tipe kepribadian ini bahwa mereka perlu memiliki team yang berfungsi penuh, tidak hanya untuk mencapai tujuan mereka saja, tetapi juga untuk validasi dan umpan balik yang positif. 
                            Perlu diingat bahwa status mereka tidak hanya berasal dari tindakan mereka sendiri, tetapi juga dari tindakan team yang menopang mereka, dan sangat penting untuk mengenali kontribusi, bakat, dan kebutuhan team, terutama dari perspektif emosional. 
                            Jika mereka mampu menggabungkan fokus yang sehat secara emosional di samping banyak kekuatannya, maka mereka akan dihargai dengan hubungan yang baik disamping setiap kemenangan yang dapat mereka raih.',
            'strength' => [
                'Efisien',
                'Energik',
                'Percaya diri',
                'Berkemauan keras',
                'Berpikir strategis',
                'Karismatik dan penuh inspirasi'
            ],
            'weakness' => [
                'Keras kepala dan terlalu dominan',
                'Kurang mampu menangani emosi',
                'Dingin dan cenderung kejam',
                'Kurang toleransi',
                'Tidak sabar',
                'Arogan'
            ]
        ]);

        ResultCategory::create([
            'name' => 'INTP',
            'description' => 'Mereka bangga akan perspektif mereka yang unik dan kecerdasan yang kuat. 
                            Mereka suka memecahkan misteri alam semesta, tidak heran mengapa banyak filsuf dan ilmuwan paling berpengaruh sepanjang masa memiliki tipe kepribadian ini. 
                            Tipe kepribadian ini hampir tidak pernah berhenti berpikir, bahkan seringkali mereka berdebat di dalam kepala mereka sendiri. 
                            Dari luar mereka tampak hidup dalam lamunan, sering termenung dan sangat pendiam, tetapi pada kenyataannya mereka menikmati waktu menyendiri untuk berpikir dalam, jauh dari gangguan sosial. 
                            Namun demikian, ketika mereka dapat bertemu dengan seseorang yang mampu menandingi energi mental mereka, kepribadian ini benar-benar menyala, melompat dari satu pikiran ke pikiran lainnya. 
                            Mereka menginginkan kesempatan untuk bertukar ide dan menikmati perdebatan intelektual yang sehat. 
                            Mereka suka menganalisis pola, menemukan perbedaan dan penyebab suatu masalah. 
                            Ironisnya, mereka tidak selalu memegang kata-kata mereka, bukan bermaksud untuk tidak jujur, tetapi dengan pikiran mereka yang sangat aktif, terkadang mereka dipenuhi ide dan teori yang belum mereka pikirkan sepenuhnya. 
                            Mereka dapat berubah pikiran tentang apa pun, mulai dari hal sederhana seperti rencana akhir pekan, hingga prinsip moral mendasar, karena mereka suka menjaga segala sesuatu tetap terbuka untuk perubahan. 
                            Mereka suka mengemukakan pendapat yang tidak populer, atau membantah sebuah ide yang ada, bukan karena tidak setuju dengan isi argumen tersebut tetapi untuk menguji validitas dan kemampuan argumen lawan bicaranya, sekalian untuk membuat diskusi yang menarik terus berlanjut. 
                            Mereka dapat menghabiskan sepanjang hari merenungkan ide-ide dan berbagai kemungkinan, tetapi tanpa tujuan untuk mengubah ide-ide tersebut menjadi kenyataan. 
                            Tipe kepribadian ini ingin memahami segala sesuatu di alam semesta, tetapi memiliki kesulitan dalam memahami perasaan dan emosi yang memengaruhi perilaku orang, termasuk perilaku mereka sendiri. 
                            Bukan berarti mereka tidak berperasaan. 
                            Mereka ingin menawarkan dukungan emosional kepada orang yang mereka cintai, tetapi mereka tidak tahu caranya, dan karena mereka tidak dapat memutuskan cara terbaik untuk menawarkan dukungan, seringkali mereka memilih untuk menunda melakukan atau mengatakan apa pun. 
                            Kabar baiknya, dengan memanfaatkan kreativitas dan keterbukaan pikiran, mereka dapat mencapai potensi penuh mereka, baik sebagai pemikir maupun sebagai orang yang bahagia dan berpengetahuan luas.',
            'strength' => [
                'Analitis',
                'Original',
                'Objektif',
                'Penuh rasa ingin tahu',
                'Berpikiran terbuka'
            ],
            'weakness' => [
                'Terputus secara sosial',
                'Kurang sensitif',
                'Merasa tidak puas',
                'Perfeksionis mengalahkan pencapaian hasil'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ENTP',
            'description' => 'Cerdas dan berani, mereka tidak takut untuk melawan status quo. 
                            Perdebatan yang kontroversial membuat mereka semakin bersemangat. 
                            Tipe kepribadian ini berpengetahuan luas dan memiliki rasa ingin tahu yang tinggi. 
                            Mereka juga memiliki selera humor yang menyenangkan dan bisa sangat menghibur. 
                            Mereka memiliki ide-ide yang tidak umum dan kontrarian, ide yang melibatkan perdebatan yang sehat. 
                            Mereka dikenal sebagai jiwa pemberontak. 
                            Bagi mereka tidak ada kepercayaan yang terlalu suci untuk dipertanyakan, tidak ada ide yang terlalu mendasar untuk diteliti, dan tidak ada aturan yang terlalu penting untuk dilanggar, atau setidaknya diuji secara menyeluruh. 
                            Terkadang mereka bahkan memberontak terhadap keyakinan mereka sendiri dengan memperdebatkan sudut pandang yang berlawanan, hanya untuk melihat bagaimana dunia terlihat dari sisi yang lain. 
                            Sementara mereka suka bertukar pikiran dan berpikir besar, mereka cenderung menghindari untuk mengimplementasikan ide-ide mereka. 
                            Apabila mereka tidak memaksakan diri untuk melakukan hal-hal yang perlu dilakukan, mereka dapat menemui masalah untuk memanfaatkan potensi penuh mereka. 
                            Kapasitas mereka untuk berdebat memang legendaris, namun hal itu tidak selalu membantu. 
                            Mereka mungkin berpikir bahwa mereka adalah juara rasionalitas dan logika, tetapi tidak jarang hal tersebut justru merugikan mereka sendiri, misalnya pada saat mereka mempertanyakan pimpinan mereka dalam sebuah rapat atau mengobrak-abrik peraturan sekalipun memang beberapa peraturan sebenarnya tidak memberikan manfaat yang jelas. 
                            Tipe kepribadian ini dihormati karena visi, kepercayaan diri, pengetahuan, dan selera humor yang tajam, tetapi apabila mereka tidak memupuk sedikit kepekaan, akan sulit bagi mereka untuk mempertahankan hubungan yang lebih dalam dan juga mencapai tujuan profesional mereka. 
                            Seiring waktu, mereka akan menyadari bahwa kehidupan ideal mereka melibatkan orang lain, dan tidak selamanya memenangkan perdebatan akan membantu mereka memenangkan hidup yang lebih baik. 
                            Mereka hanya perlu menggunakan fleksibilitas kognitif mereka untuk memahami dan mengeksplorasi perspektif orang lain, mengenali nilai pertimbangan dan kompromi di samping logika dan kemajuan.',
            'strength' => [
                'Berpengetahuan luas',
                'Berpikir cepat',
                'Karismatik',
                'Energik',
                'Original',
                'Kemampuan brainstorming yang hebat'
            ],
            'weakness' => [
                'Terlalu argumentatif',
                'Kurang sensitif',
                'Kurang toleransi',
                'Kurang fokus',
                'Tidak menyukai hal praktis'
            ]
        ]);

        ResultCategory::create([
            'name' => 'INFJ',
            'description' => 'Mereka adalah para idealis berprinsip yang ingin membuat perbedaan. 
                            Bagi mereka, kesuksesan tidak datang dari uang atau status, tetapi dari mencari pemenuhan diri, membantu orang lain, dan menjadi kekuatan untuk kebaikan di dunia. 
                            Tipe kepribadian ini peduli dengan integritas dan mereka tidak puas hingga mereka melakukan apa yang mereka tahu benar. 
                            Mereka menjalani hidup dengan pemahaman yang jelas tentang nilai-nilai mereka. 
                            Mereka tidak hanya sekedar menuruti orang lain, tetapi menuruti kebijaksanaan dan intuisi mereka sendiri. 
                            Dengan kehidupan batin mereka yang kaya dan keinginan mereka yang dalam untuk menemukan tujuan hidup, mereka terkadang merasa disalahpahami atau bertentangan dengan dunia. 
                            Tetapi perasaan disalahpahami itu tidak mengurangi komitmen mereka untuk membuat dunia menjadi tempat yang lebih baik. 
                            Mereka biasanya lebih peduli pada altruisme daripada keuntungan pribadi. 
                            Mereka merasa terpanggil untuk menggunakan kekuatan mereka, termasuk kreativitas, imajinasi, dan kepekaan untuk membantu orang lain dan menyebarkan kasih sayang. 
                            Namun terkadang mereka terlalu fokus pada misi mereka hingga lupa merawat diri mereka sendiri, sebuah pola yang dapat menyebabkan stres dan kelelahan. 
                            Sekalipun mereka introvert, tetapi mereka sangat menghargai hubungan yang mendalam dan otentik dengan orang lain. 
                            Mereka sangat senang untuk mengenal orang lain, dan juga dikenal sebagai balasannya. 
                            Mereka menyukai percakapan yang bermakna lebih dari sekedar obrolan ringan, dan mereka cenderung berkomunikasi dengan cara yang hangat dan sensitif. 
                            Kejujuran dan wawasan emosional ini dapat memberikan kesan yang kuat pada orang-orang di sekitar mereka. 
                            Mereka mencurahkan banyak energi dan perhatian ke dalam hubungan mereka, tetapi mereka akan frustrasi ketika orang lain tidak mengenal niat baik mereka. 
                            Terkadang mereka dapat menjadi terlalu sensitif, bahkan kritik yang membangun pun terasa sangat pribadi atau menyakitkan bagi mereka. Sebagian besar dari mereka merasa bahwa hidup mereka memiliki sebuah misi penting yang harus mereka selesaikan. 
                            Dengan kemampuan mereka untuk menyeimbangkan hati dan pikiran, mereka dapat memperbaiki kesalahan di dunia. Mereka hanya perlu mengingat bahwa sementara mereka sibuk mengurus orang lain, terkadang mereka perlu berhenti sejenak dan mengurus diri mereka sendiri juga.',
            'strength' => [
                'Kreatif',
                'Berwawasan luas',
                'Berprinsip teguh',
                'Penuh semangat',
                'Altruistik'
            ],
            'weakness' => [
                'Sensitif terhadap kritik',
                'Kurang terbuka',
                'Perfeksionis',
                'Terlalu menghindari hal biasa',
                'Rentan terhadap kelelahan'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ENFJ',
            'description' => 'Tipe kepribadian ini berusaha untuk memberikan dampak positif pada orang lain dan dunia di sekitar mereka. 
                            Mereka jarang menghindar dari kesempatan untuk melakukan hal yang benar, bahkan ketika sulit untuk melakukannya. 
                            Mereka terlahir sebagai pemimpin, yang menjelaskan mengapa tipe kepribadian ini sering ditemukan di antara politisi, pelatih, dan guru terkemuka. 
                            Gairah dan karisma mereka memungkinkan mereka untuk menginspirasi orang lain tidak hanya dalam karier mereka tetapi juga di dalam aspek kehidupan lainnya, termasuk hubungan mereka. 
                            Membimbing teman dan orang yang dicintai untuk tumbuh menjadi versi terbaik dari diri mereka merupakan kepuasan terbesar dari tipe kepribadian ini. 
                            Mereka cenderung vokal tentang nilai-nilai mereka, termasuk keaslian dan altruisme. 
                            Ketika mereka menemukan ketidakadilan atau kesalahan, mereka tidak tinggal diam. 
                            Tetapi mereka jarang terlihat kurang ajar atau memaksa, karena kepekaan dan wawasan mereka membimbing mereka untuk berbicara dengan cara yang sesuai dengan kebutuhan orang lain. 
                            Kemampuan ini membuat mereka menjadi komunikator yang sangat persuasif dan menginspirasi. 
                            Secara umum mereka dimotivasi oleh keinginan tulus untuk melakukan hal yang benar daripada keinginan untuk memanipulasi atau memiliki kekuasaan atas orang lain. 
                            Bahkan ketika mereka tidak setuju dengan seseorang, mereka akan berusaha mencari kesamaan. 
                            Oleh karena itu, tipe kepribadian ini dapat berkomunikasi dengan fasih dan penuh kepekaan, terutama ketika mereka berbicara tentang hal-hal yang dekat dengan hati mereka. 
                            Mereka peduli dan suka membantu memecahkan masalah orang lain, tetapi terlibat dalam masalah orang lain tidak selalu mendatangkan kebaikan. 
                            Mereka memiliki visi yang jelas untuk membantu orang lain, tetapi tidak semua orang siap dengan perubahan. 
                            Terkadang mereka mendorong terlalu keras, orang lain dapat salah memahami mereka sehingga membuahkan hasil yang tidak baik. 
                            Karunia terbesar mereka adalah memimpin dengan memberi contoh. 
                            Dalam kehidupan mereka sehari-hari, mereka mengungkapkan bagaimana situasi dapat ditangani dengan belas kasih, dedikasi, dan perhatian.',
            'strength' => [
                'Mudah menerima dan memahami',
                'Dapat diandalkan',
                'Penuh semangat',
                'Altruistik',
                'Karismatik'
            ],
            'weakness' => [
                'Terlalu idealis',
                'Kurang realistis',
                'Terkesan merendahkan',
                'Terlalu berlebihan',
                'Terlalu berempati'
            ]
        ]);

        ResultCategory::create([
            'name' => 'INFP',
            'description' => 'Meskipun mereka tampak pendiam dan sederhana, namun mereka memiliki kehidupan batin yang bersemangat dan penuh gairah. 
                            Kreatif dan imajinatif, mereka seringkali tenggelam dalam lamunan, menciptakan segala macam cerita dan percakapan dalam pikiran mereka. 
                            Tipe kepribadian ini juga dikenal karena kepekaannya. 
                            Mereka memiliki respons emosional yang mendalam terhadap musik, seni, alam, dan orang-orang di sekitar mereka. 
                            Idealis dan penuh empati, mereka merindukan hubungan yang mendalam dan penuh perasaan. 
                            Namun mereka terkadang merasa kesepian atau tidak terlihat, terombang-ambing di dunia yang tampaknya kurang menghargai sifat-sifat yang membuat mereka unik. 
                            Mereka sangat selaras dengan pikiran dan perasaan mereka sendiri, tetapi mereka juga ingin memahami orang-orang di sekitar mereka. 
                            Mereka berbelas kasih dan tidak mudah menghakimi, selalu bersedia menjadi pendengar yang baik. 
                            Empati adalah salah satu karunia terbesar tipe kepribadian ini, tetapi terkadang juga dapat membebani mereka. 
                            Mereka rentan untuk menginternalisasi suasana hati atau pola pikir negatif orang lain. 
                            Mereka perlu belajar menetapkan batasan agar tidak merasa kewalahan dengan banyaknya kesalahan yang perlu diperbaiki. 
                            Dengan kepekaan dan komitmen mereka terhadap keaslian, mereka cenderung mendambakan kesempatan untuk ekspresi diri yang kreatif. 
                            Maka tidak mengherankan jika banyak tipe kepribadian ini yang menjadi penyair, penulis, aktor, dan seniman terkenal. 
                            Mereka dapat menjelajahi batin mereka sendiri serta tempat mereka di dunia. 
                            Meskipun ini adalah sifat yang indah, namun mereka terkadang menunjukkan kecenderungan untuk melamun dan berfantasi daripada mengambil tindakan. 
                            Mereka cenderung merasa tanpa arah atau terjebak sampai mereka terhubung dengan suatu tujuan hidup. 
                            Biasanya hal ini berhubungan dengan mengangkat orang lain dan kemampuan mereka untuk merasakan penderitaan orang lain seolah-olah itu adalah penderitaan mereka sendiri. 
                            Seperti bunga di musim semi, kreativitas dan idealisme mereka dapat berkembang setelah musim tergelap. 
                            Meskipun mereka tahu bahwa dunia tidak akan pernah sempurna, mereka tetap peduli untuk membuatnya lebih baik semampu mereka. 
                            Keyakinan yang tenang dalam melakukan hal yang benar ini dapat menjelaskan mengapa kepribadian ini begitu sering menginspirasi belas kasih, kebaikan, dan keindahan kemanapun mereka pergi.',
            'strength' => [
                'Penuh empati',
                'Murah hati',
                'Berpikiran terbuka',
                'Kreatif',
                'Idealis'
            ],
            'weakness' => [
                'Kurang realistis',
                'Kurang fokus',
                'Suka mengasingkan diri',
                'Terlalu berusaha menyenangkan orang lain',
                'Terlalu kritis terhadap diri sendiri',
                'Rentan secara emosional'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ENFP',
            'description' => 'Mereka adalah jiwa yang bebas, ramah, dan terbuka. 
                            Dengan pendekatan hidup mereka yang optimis, mereka menonjol di tengah keramaian. 
                            Meskipun mereka bisa menjadi kehidupan pesta, mereka tidak hanya peduli untuk bersenang-senang. 
                            Tipe kepribadian ini juga merindukan hubungan emosional yang bermakna dengan orang lain. 
                            Mereka mengabdikan diri untuk memperkaya hubungan dan kehidupan sosial mereka. 
                            Tetapi di balik penampilan luar mereka yang ramah dan santai, mereka juga memiliki kehidupan batik yang kaya dan bersemangat. 
                            Dengan cara unik, mereka sangat introspektif, merenungkan makna hidup yang lebih dalam. 
                            Ketika sesuatu memicu imajinasi, mereka dapat menunjukkan antusiasme dan memancarkan energi positif yang menarik orang lain. 
                            Mereka menunjukkan bahwa mencari kesenangan hidup bukan berarti dangkal. 
                            Dalam sekejap mereka dapat berubah dari idealis berapi-api menjadi sosok yang riang di lantai dansa. 
                            Bahkan di saat-saat yang meriah mereka ingin terhubung secara emosional dengan orang lain. 
                            Mereka lebih memilih percakapan yang tulus dengan orang-orang yang mereka hargai. 
                            Mereka juga percaya bahwa setiap orang berhak untuk mengekspresikan perasaan mereka, dan empati serta kehangatan mereka menciptakan ruang di mana bahkan seseorang yang sangat pemalu pun dapat merasa nyaman untuk terbuka kepada mereka. 
                            Namun tipe kepribadian ini perlu berhati-hati. 
                            Intuisi mereka membuat mereka terlalu banyak membaca tindakan dan perilaku orang lain. 
                            Alih-alih meminta penjelasan, mereka akhirnya justru kebingungan dengan keinginan atau niat orang lain. 
                            Mereka menghabiskan banyak waktu untuk mengeksplorasi berbagai hubungan, perasaan, dan ide sebelum mereka menemukan jalan hidup yang sebenarnya, tetapi ketika mereka akhirnya menemukan jalan mereka, imajinasi, empati, dan keberanian mereka dapat menerangi tidak hanya kehidupan mereka sendiri, tetapi juga dunia di sekitar mereka.',
            'strength' => [
                'Penuh rasa ingin tahu',
                'Mudah menerima dan memahami',
                'Mediator yang hebat',
                'Antusias',
                'Meriah',
                'Baik hati'
            ],
            'weakness' => [
                'Terlalu berusaha menyenangkan orang lain',
                'Kurang fokus',
                'Kurang teratur',
                'Terlalu optimis',
                'Gelisah'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ISTJ',
            'description' => 'Tipe kepribadian ini memiliki integritas yang tinggi. 
                            Mereka bersungguh-sungguh dengan apa yang mereka katakan, dan ketika mereka berkomitmen untuk melakukan sesuatu, mereka memastikan untuk menindaklanjutinya. 
                            Sementara mereka tidak terlalu mencolok atau mencari perhatian, mereka melakukan lebih dari bagian mereka untuk menjaga masyarakat pada fondasi yang kokoh dan stabil. 
                            Dalam komunitas, mereka dihormati karena keandalan, kepraktisan, dan kemampuan mereka untuk tetap realistis dan logis, bahkan dalam situasi yang paling menegangkan. 
                            Mereka sangat menghormati struktur dan tradisi, dan mereka biasanya tertarik pada organisasi, tempat kerja, dan pengaturan pendidikan yang menawarkan hierarki dan harapan yang jelas. Mereka tidak ragu untuk bertanggung jawab atas tindakan dan pilihan mereka. 
                            Secara umum mereka cepat mengakui kesalahan mereka sendiri, mengakui kebenaran meskipun itu tidak membuat mereka terlihat baik. 
                            Bagi mereka, kejujuran jauh lebih penting daripada kecakapan memainkan pertunjukan, dan mereka lebih suka memuaskan hati nurani mereka sendiri daripada berbohong untuk mengesankan orang lain. 
                            Karena mereka selalu berusaha untuk memenuhi kewajiban mereka, apapun yang terjadi, mereka sulit memahami orang-orang yang gagal mempertahankan standar yang sama. 
                            Hal ini membuat mereka cenderung menilai orang-orang yang tidak mampu menandingi pengendalian diri mereka yang ketat, mencurigai bahwa orang-orang tersebut malas atau tidak jujur, tanpa mempertimbangkan kemungkinan bahwa orang-orang tersebut sedang menghadapi masalah lain yang terlalu berat. 
                            Hal ini menyebabkan mereka juga dikenal sebagai pribadi yang sangat kaku dan kurang mampu berempati. 
                            Dedikasi mereka adalah kualitas yang sangat mengagumkan, dan hal itu mendukung banyaknya pencapaian mereka. 
                            Tetapi hal itu juga menjadi kelemahan yang dapat dimanfaatkan orang lain. 
                            Dengan etos kerja dan tanggung jawab yang kuat, mereka seringkali mendapati diri mereka memikul tanggung jawab orang lain. 
                            Sekalipun mereka tidak mengeluhkan situasi tersebut, mereka dapat berakhir kelelahan atau putus asa jika terus menerus memikul seluruh tanggung jawab yang berat, untuk membantu rekan kerja, teman, atau orang yang mereka cintai. Dengan belajar menetapkan batasan yang tepat dan angkat bicara saat mereka kewalahan, mereka dapat menawarkan kepada dunia, manfaat penuh dari kejelasan, kesetiaan, dan sifat alami mereka yang mudah diandalkan.',
            'strength' => [
                'Jujur dan tegas',
                'Berkemauan keras dan berbakti',
                'Sangat bertanggung jawab',
                'Tenang dan praktis',
                'Membuat dan menegakkan keteraturan',
                'Serba bisa'
            ],
            'weakness' => [
                'Keras kepala',
                'Kurang sensitif',
                'Kaku dan tidak suka perubahan',
                'Mudah menghakimi'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ESTJ',
            'description' => 'Tipe kepribadian ini merupakan perwakilan dari tradisi dan ketertiban, memanfaatkan pemahaman mereka tentang apa yang benar, salah, dan dapat diterima secara sosial untuk menyatukan keluarga dan masyarakat. 
                            Merangkul nilai-nilai kejujuran, dedikasi dan martabat. 
                            Mereka dihormati karena nasihat dan bimbingan mereka yang jelas, dan mereka dengan senang hati memimpin di jalan yang sulit. 
                            Permintaan untuk kepemimpinan seperti itu tinggi dalam masyarakat demokratis, dan tidak mengherankan bahwa banyak presiden Amerika yang memiliki tipe kepribadian ini. 
                            Keyakinan yang kuat pada aturan hukum dan otoritas, tipe kepribadian ini memimpin dengan memberi contoh, menunjukkan dedikasi dan kejujuran yang bertujuan jelas, dan penolakan total terhadap kemalasan dan kecurangan, terutama dalam pekerjaan. 
                            Mereka sadar akan lingkungan mereka dan hidup di dunia dengan fakta yang jelas dan dapat diverifikasi. 
                            Mereka tetap berpegang pada prinsip mereka dan mendorong visi yang jelas tentang apa yang dapat dan tidak dapat diterima. 
                            Pendapat mereka juga bukan hanya opini kosong, karena mereka bersedia untuk terjun ke proyek yang paling menantang, meningkatkan rencana tindakan dan menyortir detail di sepanjang jalan. 
                            Namun mereka tidak bekerja sendiri, dan mengharapkan keandalan dan etos kerja mereka diikuti. 
                            Mereka selalu memenuhi janji mereka dan jika mitra atau bawahan mereka membahayakan dengan ketidakmampuan atau kemalasan, atau lebih buruk lagi, ketidakjujuran, maka tipe kepribadian ini tidak akan ragu untuk menunjukkan kemarahan mereka. 
                            Hal ini membuat mereka mendapatkan reputasi sebagai pribadi yang tidak fleksibel. 
                            Bukan berarti mereka keras kepala secara sewenang-wenang, tetapi mereka benar-benar percaya bahwa nilai-nilai itulah yang membuat masyarakat bekerja dengan baik. 
                            Tantangan utama bagi mereka adalah untuk menyadari bahwa tidak semua orang mengikuti jalan yang sama atau berkontribusi dengan cara yang sama. 
                            Seorang pemimpin sejati mengakui kekuatan individu serta kekuatan kelompok, dan membantu membawa ide-ide individu tersebut kepada kenyataan. 
                            Dengan demikian mereka benar-benar memiliki semua fakta dan mampu memimpin kelompok ke arah yang sesuai untuk semua orang.',
            'strength' => [
                'Berdedikasi tinggi',
                'Berkemauan keras',
                'Jujur dan tegas',
                'Setia, sabar, dan dapat diandalkan',
                'Menegakkan keteraturan',
                'Pengurus yang hebat'
            ],
            'weakness' => [
                'Kaku dan keras kepala',
                'Terlalu konvensional',
                'Mudah menghakimi',
                'Terlalu fokus pada status sosial',
                'Sulit untuk bersantai',
                'Sulit mengekspresikan emosi'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ISFJ',
            'description' => 'Tipe kepribadian ini merasakan tanggung jawab yang mendalam kepada orang-orang di sekitar mereka. 
                            Mereka adalah pekerja keras yang setia dan dapat diandalkan. 
                            Mereka tepat janji, mengingat hari-hari penting seperti ulang tahun, acara-acara khusus, menjunjung tinggi tradisi, dan menghujani orang-orang yang mereka cintai dengan penuh perhatian dan dukungan. 
                            Mereka melakukan seluruh kebaikan itu di belakang layar tanpa menuntut pengakuan dan pujian. 
                            Tipe kepribadian ini tidak akan membiarkan persahabatan atau hubungan memudar, sebaliknya, mereka menginvestasikan banyak energi dan waktu untuk mempertahankan hubungan yang kuat dengan orang yang mereka cintai. 
                            Mereka juga siap berkorban demi menolong orang lain untuk keluar dari masa-masa sulit. 
                            Tetapi intensitas komitmen dan keinginan mereka untuk melayani orang lain juga dapat menjadi kelemahan. 
                            Beberapa orang tega memanfaatkan kebaikan mereka, dan mereka mudah merasa bersalah atau stres ketika mereka tidak sanggup memberikan pertolongan. 
                            Tipe kepribadian juga sangat perhatian pada detail terkecil sekalipun. 
                            Ketelitian mereka mencapai titik perfeksionisme. 
                            Mereka mengemban tanggung jawab secara pribadi, konsisten melampaui dan melakukan segala yang mereka bisa untuk melebihi harapan orang lain. 
                            Sementara mereka tidak menuntut pujian, namun apabila orang lain tidak menghargai bantuan mereka, lambat laun mereka akan kehilangan antusiasme dan motivasi mereka, yang akhirnya membuatnya kesal terhadap orang-orang yang tampaknya tidak menghargai mereka. 
                            Meskipun mereka introvert, tetapi mereka memiliki sifat sosial yang mendalam. 
                            Berkat kemampuan mereka untuk mengingat detail kehidupan orang lain, mereka mudah membuat orang lain merasa dikenal dan dihargai. 
                            Mereka bahkan dapat memilih hadiah yang tepat untuk setiap kesempatan, baik besar maupun kecil. 
                            Berdedikasi dan bijaksana, mereka menemukan kegembiraan yang besar dalam membantu orang-orang di sekitar mereka membangun kehidupan yang stabil, aman, dan bahagia',
            'strength' => [
                'Memberikan dukungan',
                'Dapat diandalkan',
                'Setia',
                'Teliti',
                'Antusias',
                'Pekerja keras',
                'Memiliki keterampilan praktis yang baik'
            ],
            'weakness' => [
                'Terlalu rendah hati',
                'Terlalu sensitif',
                'Terlalu altruistik',
                'Terlalu berkomitmen',
                'Tidak suka perubahan'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ESFJ',
            'description' => 'Bagi mereka, hidup paling bermakna ketika berbagi dengan orang lain. 
                            Tipe kepribadian ini membentuk landasan bagi banyak komunitas, membuka rumah mereka, dan hati mereka kepada teman dan orang-orang yang dicintai. 
                            Mereka percaya pada kekuatan keramahan dan sopan santun, murah hati dan dapat diandalkan. 
                            Mereka mempersatukan keluarga dan komunitas mereka. Mereka menanggapi tanggung jawab mereka dengan serius untuk memberi, melayani orang lain dan melakukan hal yang benar. 
                            Mereka merasa sulit untuk tidak menilai ketika seseorang mengambil jalan yang menurut mereka sesat, akibatnya, mereka sering kesulitan untuk menerima ketika seseorang tidak sependapat dengan mereka. 
                            Pandangan mereka mengenai benar atau salah seringkali didasarkan pada rasa hormat yang mendalam terhadap tradisi. 
                            Mereka tahu bahwa semua yang mereka lakukan memengaruhi orang lain, dan mereka percaya bahwa undang-undang, protokol, dan norma sosial yang ditetapkan akan membantu mereka menjalani kehidupan sehari-hari dengan cara yang penuh perhatian dan bertanggung jawab terhadap orang lain. 
                            Mereka selalu muncul di sebuah pesta, memastikan semua orang bersenang-senang. 
                            Dengan kecintaan mereka pada ketertiban dan struktur, mereka lebih memilih acara yang direncanakan daripada kegiatan spontan, dan mereka senang menjadi tuan rumah untuk memastikan semuanya berjalan lancar. 
                            Tipe kepribadian ini mencurahkan banyak energi untuk membuat orang lain merasa istimewa, tetapi mereka cukup sensitif ketika seseorang tampaknya kurang menghargai upaya mereka. 
                            Salah satu tantangan terbesar mereka adalah menerima bahwa mereka tidak dapat mengendalikan pikiran atau perilaku orang lain, sekalipun orang terdekat dan tersayang. 
                            Untungnya mereka dapat menemukan kedamaian dan kepuasan dengan berfokus pada apa yang mereka lakukan terbaik, yaitu memberikan kepedulian, pertimbangan, tanggung jawab, dan menyatukan orang dalam prosesnya.
            ',
            'strength' => [
                'Memiliki keterampilan praktis yang kuat',
                'Tanggung jawab yang besar',
                'Sangat setia',
                'Ramah',
                'Mudah menjalin hubungan dengan orang lain'
            ],
            'weakness' => [
                'Terlalu mengkuatirkan status sosial',
                'Tidak fleksibel',
                'Tidak menyukai inovasi dan improvisasi',
                'Sensitif terhadap kritik',
                'Terlalu membutuhkan orang lain untuk merasa dihargai'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ISTP',
            'description' => 'Mereka suka menjelajah dengan kelima indra mereka. 
                            Melihat, menyentuh, dan memeriksa dunia di sekitar mereka dengan rasionalisme dan rasa ingin tahu yang tinggi. 
                            Tipe kepribadian ini adalah pencipta alami, bergerak dari proyek ke proyek, membangun yang berguna dan menyenangkan. 
                            Seringkali merupakan mekanik atau insinyur, mereka tidak menemukan kesenangan yang lebih besar daripada mengotori tangan mereka dengan membongkar barang-barang dan merakitnya kembali untuk membuat barang-barang tersebut berfungsi lebih baik dari sebelumnya.
                            Mereka mengeksplorasi ide melalui pembuatan, pemecahan masalah, coba-coba, dan pengalaman langsung. 
                            Mereka senang saat orang lain tertarik pada proyek mereka dan tidak keberatan orang lain masuk ke area mereka selama orang-orang itu tidak mengganggu prinsip dan kebebasan tipe kepribadian ini. 
                            Mereka juga senang membantu dan berbagi pengalaman mereka. 
                            Sementara kecenderungan mekanis mereka dapat membuat mereka secara sekilas tampak sederhana, namun sebenarnya mereka cukup misterius. 
                            Ramah tetapi sangat tertutup, tenang tetapi tiba-tiba spontan, sangat ingin tahu tetapi sulit untuk fokus pada studi formal. 
                            Kepribadian ini dapat menjadi tantangan untuk diprediksi, bahkan oleh teman dan orang yang mereka cintai. Mereka bisa tampak sangat setia dan stabil untuk sementara waktu, tetapi mereka cenderung membangun tumpukan energi impulsif yang dapat meledak tanpa peringatan, membawa minat mereka ke arah baru dengan berani. 
                            Pengambilan keputusan mereka didasari realisme praktis dan mereka tidak takut untuk melangkah, bahkan cenderung bertindak terlalu jauh. 
                            Masalah terbesar mereka adalah sifat impulsif yang membuat mereka terlalu cepat bertindak tanpa terlalu mempertimbangkan konsekuensinya. 
                            Tidak jarang mereka melontarkan lelucon yang tidak sensitif, terlalu terlibat dalam proyek orang lain, bermain-main, atau tiba-tiba mengubah rencana mereka karena sesuatu yang lebih menarik muncul. 
                            Mereka perlu belajar bahwa banyak tipe kepribadian lain memiliki batasan yang jauh lebih tegas pada aturan dan perilaku. 
                            Mereka lebih memilih kebebasan untuk bergerak dan mewarnai di luar garis jika perlu. 
                            Mereka akan mencapai titik optimalnya pada saat mereka menemukan lingkungan dimana mereka dapat bekerja dengan teman baik yang memahami gaya dan ketidakpastian mereka, menggabungkan kreativitas, selera humor, dan pendekatan langsung untuk membangun solusi dan hal-hal praktis.',
            'strength' => [
                'Optimis dan penuh energi',
                'Kreatif dan praktis',
                'Spontan dan rasional',
                'Hebat menghadapi krisis',
                'Santai'
            ],
            'weakness' => [
                'Keras kepala',
                'Tidak sensitif',
                'Mudah bosan dan tidak suka komitmen',
                'Memiliki perilaku yang berisiko',
                'Terlalu tertutup'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ESTP',
            'description' => 'Mereka selalu berdampak pada lingkungan sekitar. 
                            Cara terbaik untuk melihat mereka di sebuah pesta adalah dengan mencari sekumpulan orang-orang di sekitar mereka saat mereka berpindah dari satu kelompok ke kelompok lainnya, tertawa menghibur dengan humor yang blak-blakan. 
                            Tipe kepribadian ini senang menjadi pusat perhatian. 
                            Jika seorang penonton diminta untuk naik ke atas panggung, mereka dengan senang hati akan segera naik ke panggung, atau menjadi sukarelawan menggantikan teman yang pemalu. 
                            Teori, konsep abstrak, dan diskusi yang lamban tentang isu-isu global dan implikasinya tidak membuat mereka tertarik untuk waktu yang lama. 
                            Mereka lebih suka menjaga percakapan mereka tetap energik dengan tingkat kecerdasan yang baik, tetapi mereka lebih suka berbicara tentang apa yang nyata dan sederhana, terutama topik perbincangan yang sedang populer. 
                            Lebih dari berbincang, mereka lebih suka bertindak. 
                            Mereka melompat sebelum melihat, memperbaiki kesalahan mereka sambil terus melangkah maju, daripada duduk menyusun rencana sebelum bertindak. 
                            Tipe kepribadian adalah tipe dengan perilaku paling berisiko, mereka hidup di saat ini dan terjun ke dalam aksi. 
                            Mereka menikmati drama, gairah, dan kesenangan, karena hal itu sangat merangsang pikiran logis mereka. 
                            Mereka terbiasa untuk membuat keputusan kritis berdasarkan realita dengan respons stimulus rasional yang cepat. 
                            Hal ini membuat sekolah dan lingkungan yang sangat terorganisir lainnya menjadi tantangan bagi mereka. 
                            Ini tentu saja bukan karena mereka tidak pintar, tetapi pendekatan pendidikan formal yang teratur dan penuh teori, jauh dari pembelajaran langsung yang dinikmati oleh mereka. 
                            Tantangan lainnya adalah untuk menggunakan kompas moral mereka. 
                            "Aturan dibuat untuk dilanggar" merupakan motto hidup mereka. 
                            Mereka memiliki keterampilan khusus untuk memperhatikan perubahan fisik, entah itu perubahan ekspresi wajah, gaya pakaian dan trend terbaru. 
                            Apabila mereka tidak berhati-hati, mereka cenderung terlalu terjebak pada masa kini, kurang belajar dari masa lalu, dan kurang pertimbangan tentang apa yang mungkin terjadi di masa depan. 
                            Mereka penuh semangat dan energi, dilengkapi dengan pikiran yang rasional. 
                            Menginspirasi, meyakinkan, dan penuh warna, mereka adalah pemimpin kelompok alami, menarik semua orang di jalan yang jarang dilalui, membawa kehidupan dan kegembiraan kemanapun mereka pergi. 
                            Menempatkan kualitas-kualitas ini pada tujuan yang konstruktif dan bermanfaat adalah tantangan sejati mereka.',
            'strength' => [
                'Gagah berani',
                'Rasional dan praktis',
                'Cepat tanggap',
                'Cerdik',
                'Sangat mudah bergaul'
            ],
            'weakness' => [
                'Tidak sensitif',
                'Tidak sabar',
                'Rawan risiko',
                'Tidak terstruktur dan suka menentang',
                'Cenderung melewatkan gambaran yang lebih besar'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ISFP',
            'description' => 'Mereka adalah seniman sejati, meskipun tidak harus dalam pengertian konvensional. 
                            Bagi mereka, hidup adalah kanvas untuk ekspresi diri. 
                            Mulai dari apa yang mereka kenakan hingga bagaimana mereka menghabiskan waktu luang mereka. 
                            Mereka bertindak dengan cara yang jelas mencerminkan diri mereka sebagai individu yang unik. 
                            Didorong oleh rasa ingin tahu dan keinginan untuk mencoba hal-hal baru, tipe kepribadian ini seringkali memiliki serangkaian hasrat dan minat yang menarik. 
                            Dengan semangat petualangan dan kemampuan mereka untuk menemukan kegembiraan dalam kehidupan sehari-hari, mereka dapat menjadi salah satu orang paling menarik yang pernah anda temui. 
                            Mereka fleksibel dan mudah beradaptasi terhadap kehidupan. 
                            Beberapa tipe kepribadian lain memiliki jadwal dan rutinitas yang ketat, tetapi mereka menjalani hari dengan apa adanya, melakukan apa yang terasa benar bagi mereka pada saat itu, dan mereka memastikan untuk meninggalkan banyak ruang dalam hidup mereka untuk hal-hal yang tidak terduga, sehingga banyak kenangan mereka yang paling berharga adalah tamasya dan petualangan spontan, baik sendiri atau bersama orang yang mereka cintai. 
                            Pola pikir yang fleksibel ini membuat mereka menjadi sangat toleran dan berpikiran terbuka. 
                            Mereka benar-benar menyukai hidup di dunia yang penuh dengan berbagai jenis orang. 
                            Maka tidak mengherankan jika mereka sangat terbuka untuk mengubah pikiran dan pendapat mereka. 
                            Tetapi mentalitas mereka yang mengikuti arus juga dapat menjadi kelemahan. 
                            Mereka mungkin kesulitan untuk menetapkan rencana jangka panjang, akibatnya mereka cenderung memiliki pandangan yang agak kabur tentang kemampuan mereka untuk mencapai tujuan mereka, dan mereka sering khawatir mengecewakan orang lain. 
                            Dalam hubungan, mereka hangat, ramah, dan peduli, menikmati sepenuh hati waktu bersama orang-orang terdekat mereka. 
                            Tetapi mereka juga membutuhkan waktu sendiri untuk membangun kembali rasa identitas mereka sendiri. 
                            Kreatif dan berjiwa bebas, namun juga bijaksana dan tanggap, mampu menangkap perasaan dan pendapat orang yang tak terucapkan. 
                            Mereka hidup di masa sekarang dan tidak terlalu memikirkan rasa sakit atau frustrasi masa lalu. 
                            Alih-alih berfokus untuk mengubah banyak hal, mereka memiliki kapasitas luar biasa untuk menghargai banyak hal di kehidupan yang sebenarnya. 
                            Kemanapun mereka melihat, mereka dapat menemukan sumber keindahan dan kesenangan yang mungkin dilewatkan orang lain, dan perspektif ini hanyalah salah satu dari banyak karunia yang mereka bagikan kepada dunia.',
            'strength' => [
                'Mempesona',
                'Artistik',
                'Penuh imajinasi',
                'Penuh semangat',
                'Penuh rasa ingin tahu'
            ],
            'weakness' => [
                'Sulit diduga',
                'Mudah stress',
                'Penghargaan diri yang kurang stabil',
                'Terlalu kompetitif untuk hal berjangka pendek'
            ]
        ]);

        ResultCategory::create([
            'name' => 'ESFP',
            'description' => 'Mereka adalah orang-orang yang secara spontan menari dan menyanyikan lagu, terjebak dalam kebahagiaan saat itu, dan ingin semua orang merasakan kebahagiaan yang sama. 
                            Mereka sangat dermawan dengan waktu dan energi mereka untuk menghibur dan datang untuk memberikan semangat kepada orang lain. 
                            Mereka sangat menyukai sorotan, dan seluruh dunia bagaikan panggung bagi mereka. 
                            Banyak orang terkenal memiliki tipe kepribadian ini terutama dalam industri entertainment. 
                            Mereka suka memberikan hiburan bagi teman-teman mereka, berbincang penuh senda gurau, membuat setiap jalan terasa seperti pesta. 
                            Benar-benar makhluk sosial sejati yang sangat menikmati waktu bersenang-senang bersama sekelompok teman yang baik. 
                            Mereka juga memiliki rasa estetika terkuat dari semua tipe kepribadian, mulai dari perawatan dan pakaian, hingga rumah yang dihias dengan baik. 
                            Tipe kepribadian ini sangat memperhatikan mode, mengetahui apa yang menarik saat melihatnya. 
                            Mereka menjelajahi desain dan gaya baru dengan mudah. 
                            Mereka juga jeli dan sangat sensitif terhadap emosi orang lain. 
                            Seringkali menjadi orang pertama yang membantu seseorang membicarakan masalah yang menantang dan dengan senang hati memberikan dukungan emosional dan nasihat praktis. 
                            Namun jika masalahnya adalah tentang mereka, maka mereka cenderung menghindari konflik sama sekali. 
                            Tantangan terbesar bagi mereka adalah bahwa mereka terlalu sering begitu fokus pada kesenangan langsung sehingga mereka mengabaikan tugas dan tanggung jawab untuk mendukung kemewahan itu. 
                            Analisis kompleks, rutinitas, dan statistik bukanlah kegiatan mudah bagi mereka. 
                            Mereka lebih suka mengandalkan keberuntungan atau peluang, atau hanya meminta bantuan dari lingkaran pertemanan mereka yang luas. 
                            Penting bagi mereka untuk mulai memikirkan hal-hal jangka panjang seperti rencana pensiun atau gaya hidup yang lebih sehat. 
                            Mereka mudah tergiur pada hal-hal fisik dan kemewahan, dikombinasikan dengan kecenderungan mereka yang kuat baik dalam menyusun rencana jangka panjang, dapat menyebabkan mereka hidup di luar kemampuan mereka, akibatnya kartu kredit dan sistem pinjaman dana lainnya dapat menjadi sangat berbahaya bagi mereka. 
                            Mereka dapat memaksimalkan potensi hidupnya dengan lebih berhati-hati dalam bertindak dan menyeimbangkan kehidupan yang menyenangkan dengan menyelesaikan seluruh tanggung jawab mereka.',
            'strength' => [
                'Berani',
                'Original',
                'Praktis',
                'Mengerti estetika',
                'Memiliki observasi yang baik',
                'Kemampuan sosial yang luar biasa'
            ],
            'weakness' => [
                'Sensitif',
                'Terlalu menghindari konflik',
                'Terlalu mudah bosan',
                'Tidak fokus',
                'Perencana jangka panjang yang buruk'
            ]
        ]);

        ResultCategory::create([
            'name' => 'Realistic',
            'description' => 'Umumnya mereka adalah pekerja keras. 
                            Mereka praktis, alami, apa adanya, jujur, hemat, realistis, dan gigih. 
                            Mereka lebih menyukai pekerjaan konkret. 
                            Karir yang termasuk dalam kategori ini adalah insinyur, teknisi peralatan elektronik, ahli kimia, dokter gigi, pembuat furniture, teknisi kereta api.'
        ]);

        ResultCategory::create([
            'name' => 'Investigative',
            'description' => 'Biasanya mereka lebih suka bekerja dengan ide daripada dengan manusia atau benda. 
                            Mereka digambarkan sebagai orang yang logis, intelek, penuh rasa ingin tahu, presisi, berhati-hati, mandiri, sederhana, dan pendiam. 
                            Mereka suka menggunakan keterampilan abstrak atau analitis mereka untuk mencari tahu. 
                            Mereka adalah pemikir yang lebih suka untuk menyelesaikan tugas secara mandiri. 
                            Karir yang termasuk dalam kategori ini adalah ilmuwan, ekonom, psikolog, sosiolog'
        ]);

        ResultCategory::create([
            'name' => 'Artistic',
            'description' => 'Biasanya mereka memiliki banyak ide. 
                            Mereka digambarkan sebagai orang yang terbuka, kreatif, original, mandiri, emosional, dan impulsif. 
                            Mereka sangat imajinatif dan suka menciptakan sesuatu. 
                            Karir yang termasuk dalam kategori ini adalah fotografer, perancang busana, aktor, penyanyi, penari, pelukis.'
        ]);

        ResultCategory::create([
            'name' => 'Social',
            'description' => 'Mereka biasanya lebih suka bekerja dengan manusia daripada dengan benda. 
                            Mereka sering digambarkan sebagai orang yang suka membantu, pengertian, ramah, kooperatif, murah hati, baik hati, dan sabar. 
                            Mereka cenderung peduli dengan masalah sosial dan ingin membantu orang lain. 
                            Karir yang termasuk dalam kategori ini adalah guru, anggota keagamaan, terapis okupasi, perawat berlisensi, pekerja sosial.'
        ]);

        ResultCategory::create([
            'name' => 'Enterprising',
            'description' => 'Umumnya mereka lebih suka bekerja dengan manusia dan ide. 
                            Mereka digambarkan sebagai orang yang energik, optimis, percaya diri, suka berpetualang, dan mudah bergaul. 
                            Mereka adalah para ekstrovert yang secara agresif bersedia menerima tantangan. 
                            Karir yang termasuk dalam kategori ini adalah kepala eksekutif, pengacara, koki, pedagang, penyambut restoran.'
        ]);

        ResultCategory::create([
            'name' => 'Conventional',
            'description' => 'Umumnya mereka suka bekerja dengan angka dan catatan. 
                            Mereka digambarkan sebagai pribadi yang cermat, hemat, efisien, praktis, hati-hati, teratur, dan gigih. 
                            Mereka cenderung konservatif dan lebih menyukai tugas-tugas terstruktur dan detail. 
                            Karir yang termasuk dalam kategori ini adalah akuntan, aktuaris, asisten sumber daya manusia, penaksir biaya.'
        ]);

        ResultCategory::create([
            'name' => 'Dominant',
            'description' => 'Mereka cenderung memberikan penekanan kuat pada pembentukan lingkungan yang mengatasi masalah untuk mencapai hasil yang maksimal. 
                            Mereka termotivasi oleh kemenangan, persaingan, dan kesuksesan. 
                            Mereka memprioritaskan mengambil tindakan, menerima tantangan, meraih hasil, dan sering digambarkan sebagai pribadi yang tanpa basa-basi, berkemauan keras, dan memiliki determinasi tinggi.
                            Mereka blak-blakan tetapi cenderung skeptis dan mempertanyakan orang lain.',
            'goals' => [
                'Berjuang untuk pencapaian maksimal',
                'Menjelajahi peluang baru',
                'Menjaga kontrol terhadap orang lain',
                'Memiliki kebebasan pribadi'
            ],
            'difficulties' => [
                'Menunjukkan kesabaran dan sensitivitas',
                'Menjelaskan secara detail',
                'Mencapai musyawarah
                '
            ],
            'leadershipCharacteristics' => [
                'Pelopor',
                'Tegas',
                'Berwibawa'
            ],
            'commonCombination' => [
                'Di: Dinamis, persuasif, penuh rasa ingin tahu, wirausaha, fokus pada hasil, vokal, antusias, gelisah, pemberontak',
                'DC: Menuntut kesempurnaan, mengambil inisiatif, rajin, tekun, kreatif, kritis, fokus, blak-blakan, keras kepala'
            ]
        ]);

        ResultCategory::create([
            'name' => 'Influence',
            'description' => 'Mereka cenderung memberikan penekanan pada pembentukan lingkungan dengan mempengaruhi atau membujuk orang lain. 
                            Mereka termotivasi oleh pengakuan sosial, aktivitas kelompok, dan hubungan. 
                            Mereka memprioritaskan kolaborasi dan mengekspresikan antusiasme. 
                            Mereka sering digambarkan sebagai pribadi yang hangat, magnetis, optimis, antusias, dan meyakinkan.',
            'goals' => [
                'Meraih kemenangan dengan bakat',
                'Menciptakan persahabatan dan kebahagiaan',
                'Mencapai status melalui otoritas dan prestise',
                'Mencari persetujuan dan menjadi populer'
            ],
            'difficulties' => [
                'Menjadi terorganisir',
                'Menahan impuls',
                'Meneliti fakta',
                'Fokus pada satu hal',
                'Berbicara langsung dan terus terang'
            ],
            'leadershipCharacteristics' => [
               ' Memberi semangat',
                'Memberi keyakinan',
                'Pelopor'
            ],
            'commonCombination' => [
                'iD: Penuh energi, persuasif, karismatik, petualang, terbuka, tenang, mempromosikan diri, ambisius, tidak sabar',
                'iS: Kolaboratif, hangat, ramah, penuh empati, mudah bergaul, ceria, optimis, mudah menerima, menghindari konflik, tidak tepat waktu'
            ]
        ]);

        ResultCategory::create([
            'name' => 'Steadiness',
            'description' => 'Mereka cenderung memberikan penekanan pada kerja sama dengan orang lain untuk melaksanakan tugas. 
                            Mereka termotivasi oleh kerja sama, kesempatan untuk membantu, dan penghargaan yang tulus. 
                            Mereka memprioritaskan kolaborasi, memberi dukungan, dan menjaga stabilitas. 
                            Mereka sering digambarkan sebagai pribadi yang tenang, sabar, stabil, konsisten, mudah diprediksi, dan berhati-hati.',
            'goals' => [
                'Menumbuhkan harmoni dan stabilitas',
                'Meraih kekuasaan melalui peran formal dan posisi otoritas',
                'Mempertahankan status quo dan mengendalikan lingkungan',
                'Berjuang untuk pencapaian team',
                'Mendapatkan penerimaan kelompok'
            ],
            'difficulties' => [
                'Beradaptasi menghadapi perubahan',
                'Bekerja dengan harapan yang tidak jelas',
                'Mengerjakan banyak hal sekaligus',
                'Menolak akomodasi berlebihan',
                'Menghadapi orang lain',
                'Mengatasi keraguan dan mempromosikan diri'
            ],
            'leadershipCharacteristics' => [
                'Rendah hati',
                'Memberi keyakinan',
                'Melibatkan orang lain'
            ],
            'commonCombination' => [
                'Si: Kolaboratif, disukai banyak orang, bersemangat dalam team, positif, mendukung, penyayang, terlalu ingin menyenangkan orang, menghindari konflik',
                'SC: Stabil, konsisten, sabar, mudah diprediksi, akomodatif, penuh pengendalian diri, bijaksana, dapat diandalkan, berbicara lembut, tidak fleksibel'
            ]
        ]);

        ResultCategory::create([
            'name' => 'Conscientiousness',
            'description' => 'Mereka cenderung memberikan penekanan pada bekerja dengan sungguh-sungguh untuk memastikan kualitas dan akurasi. 
                            Mereka termotivasi oleh kesempatan untuk memperoleh pengetahuan, menunjukkan keahlian, dan menghasilkan karya yang berkualitas. 
                            Mereka memprioritaskan memastikan akurasi, menjaga stabilitas, dan menantang asumsi. 
                            Mereka sering digambarkan sebagai pribadi yang sangat berhati-hati, analitis, akurat, diplomatis dan bijaksana.',
            'goals' => [
                'Memperoleh pengetahuan dan keahlian',
                'Menunjukkan stabilitas dan keandalan',
                'Melanjutkan pertumbuhan pribadi',
                'Mempertahankan objektivitas',
                'Akurat dan benar'
            ],
            'difficulties' => [
                'Menahan diri untuk tidak terlalu kritis, analitis, dan mengisolasi diri',
                'Bergabung dalam acara sosial dan perayaan',
                'Kompromi untuk kebaikan team',
                'Mendelegasikan tugas',
                'Membuat keputusan cepat'
            ],
            'leadershipCharacteristics' => [
                'Berhati-hati',
                'Objektif',
                'Tegas'
            ],
            'commonCombination' => [
                'CS: Hati-hati, tertib, tenang, akurat, terencana, terorganisir, reflektif, penuh pengendalian diri, konvensional',
                'CD: Pemikir kritis, analitis, objektif, sistematis, memiliki standar tinggi, tegas, disiplin, keras kepala, skeptis, sinis'
            ]
        ]);
    }
}
