<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Book::create([
            'title' => 'Java Programming',
            'category_id' => 1,
            'slug' => 'java-programming',
            'penulis' => 'James Gosling',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Programming semakin booming nich. Ingin jago bahasa Java? Buku Java Programming solusinya. Segera pinjam untuk mendapatkan ilmunya!!!',
            'sinopsis' => 'Java Programming adalah panduan lengkap untuk mempelajari bahasa pemrograman Java dari dasar. Buku panduan ini tidak hanya memberikan pemahaman mendalam tentang sintaksis dasar Java, tetapi juga membimbing pembaca melalui konsep lanjutan seperti pemrograman berorientasi objek dan pengembangan aplikasi berbasis Java. Dengan pendekatan yang sistematis dan contoh kode yang jelas, pembaca akan memperoleh keterampilan yang diperlukan untuk menguasai bahasa pemrograman Java dan membangun aplikasi yang kuat dan efisien.',
            'image_path' => 'img/JavaProgramming.jpeg'
        ]);
        
        Book::create([
            'title' => 'Omniscient Reader`s Viewpoint',
            'category_id' => 2,
            'slug' => 'omniscient-reader`s-viewpoint',
            'penulis' => 'Singshong',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Dunia hancur seperti dalam novel!!! Apa yang harus dilakukan umat manusia untuk bertahan hidup? Dapatkah dunia kembali seperti semua? Pinjam untuk tahu ceritanya.',
            'sinopsis' => '"Three Ways to Survive The Apocalypse", novel dengan 3149 episode yang mengisahkan cara bertahan hidup pada dunia yang hancur. Novel ini hanya memiliki satu pembaca, Kim Dokja. Pada perilisan episode terakhir, dunia Kim Dokja tiba-tiba berubah seperti dalam novel. Setiap manusia harus menyelesaikan misi mematikan yang diberikan oleh makhluk bernama dokkaebi. Bagaimana kelanjutan ceritanya?',
            'image_path' => 'img/OmniscientReadersViewpoint.jpeg'
        ]);
        
        Book::create([
            'title' => 'Python Programming',
            'category_id' => 1,
            'slug' => 'python-programming',
            'penulis' => 'AMZ Press',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Programming semakin booming nich. Ingin jago bahasa Python? Buku Python Programming solusinya. Segera pinjam untuk mendapatkan ilmunya!!!',
            'sinopsis' => 'Python Programming adalah panduan bagi siapa pun yang ingin menguasai bahasa pemrograman Python. Buku ini tidak hanya membahas konsep dasar Python dengan jelas, tetapi juga menghadirkan pemahaman yang kuat tentang bagaimana bahasa ini digunakan dalam berbagai bidang seperti pengembangan web, analisis data, kecerdasan buatan, dan lebih banyak lagi. Dengan pendekatan praktis dan berbagai contoh kode, buku ini membimbing pembaca dari pemula hingga tingkat lanjutan, membantu mereka membangun keterampilan yang diperlukan untuk menjadi ahli dalam Python.',
            'image_path' => 'img/PythonProgramming.jpeg'
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'category_id' => 4,
            'slug' => 'laskar-pelangi',
            'penulis' => 'Andrea Hirata',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Buku "Laskar Pelangi" mengisahkan perjuangan sekelompok anak muda dari daerah miskin di Belitung untuk mendapatkan pendidikan yang layak. Kisah ini menginspirasi, menyoroti keteguhan hati dan semangat pantang menyerah dalam menghadapi berbagai rintangan demi mewujudkan impian.',
            'sinopsis' => 'Laskar Pelangi adalah kisah tentang kehidupan anak-anak di sebuah desa kecil di Belitung. Mereka tinggal di daerah yang terpencil dan memiliki keterbatasan dalam hal pendidikan. Namun, mereka memiliki tekad kuat untuk mendapatkan pendidikan yang layak meskipun terkendala oleh berbagai masalah. Dengan semangat juang yang luar biasa, mereka berusaha meraih cita-cita mereka. Buku ini menggambarkan perjalanan hidup yang penuh perjuangan, kebersamaan, dan harapan untuk masa depan yang lebih baik.',
            'image_path' => 'img/LaskarPelangi.jpeg'
        ]);

        Book::create([
            'title' => "Heaven's Official's Blessing",
            'category_id' => 3,
            'slug' => 'heavens-officials-blessing',
            'penulis' => 'Mo Xiang Tong Xiu',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Buku "Heaven\'s Official\'s Blessing" mengisahkan tentang Xie Lian, dewa yang terbuang dari Surga ke dunia manusia. Kisah ini menyoroti petualangannya dalam menghadapi cobaan dan pencarian akan kebenaran, sambil menjalani kehidupan yang penuh liku dan pertualangan yang mendebarkan.',
            'sinopsis' => 'Heaven\'s Official\'s Blessing mengikuti kisah Xie Lian, seorang dewa yang diusir dari Surga dan terlahir kembali ke dunia manusia. Dalam petualangannya, dia menghadapi berbagai cobaan dan rintangan yang membingungkan, tetapi tak pernah kehilangan kebaikan hatinya. Dalam pencariannya akan kebenaran, Xie Lian menemukan teman-teman baru dan memecahkan misteri yang tersembunyi di balik banyak kejadian. Buku ini membawa pembaca ke dalam dunia fantasi yang penuh intrik, keajaiban, dan kegembiraan.',
            'image_path' => 'img/HeavensOfficialBlessings.jpeg'
        ]);

        Book::create([
            'title' => "Solo Leveling",
            'category_id' => 5,
            'slug' => 'solo-leveling',
            'penulis' => 'Chugong',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Buku "Solo Leveling" mengisahkan tentang Sung Jin-Woo, seorang Hunter E-rank yang diperlakukan tidak adil. Namun, hidupnya berubah drastis setelah ia menemukan sebuah "sistem" yang mengubah nasibnya. Petualangan dan kekuatan yang dimilikinya membuatnya berjuang di dunia yang penuh dengan rahasia dan keajaiban.',
            'sinopsis' => 'Solo Leveling mengisahkan kisah Sung Jin-Woo, seorang Hunter E-rank yang sering diabaikan oleh orang lain. Segala sesuatu berubah ketika ia menemukan "sistem" yang memberinya kesempatan untuk tumbuh dan berkembang menjadi Hunter yang kuat. Dengan kemampuan barunya, Sung Jin-Woo memasuki dunia yang dipenuhi monster dan rahasia yang belum terungkap. Dalam perjalanannya, ia menemukan konspirasi besar dan mengungkap kebenaran yang tersembunyi di balik kekuatan yang dimilikinya. Buku ini memperkenalkan pembaca pada dunia fantasi yang menegangkan dan petualangan yang mengagumkan.',
            'image_path' => 'img/SoloLeveling.jpeg'
        ]);
               
        Book::create([
            'title' => "Harry Potter: The Philosopher's Stone",
            'category_id' => 6,
            'slug' => 'harry-potter-philosopher-stone',
            'penulis' => 'J.K. Rowling',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Harry Potter: The Philosopher\'s Stone adalah kisah tentang seorang anak laki-laki bernama Harry Potter yang menemukan bahwa ia sebenarnya seorang penyihir. Ia kemudian diajak ke Sekolah Sihir Hogwarts, di mana ia belajar tentang dunia sihir, bertemu teman-teman baru, dan menghadapi berbagai petualangan menegangkan.',
            'sinopsis' => 'Harry Potter: The Philosopher\'s Stone adalah awal dari kisah Harry Potter yang luar biasa. Buku ini memperkenalkan kita pada karakter Harry, seorang anak yatim piatu yang hidupnya berubah secara dramatis setelah mengetahui bahwa ia memiliki kemampuan sihir. Di Sekolah Sihir Hogwarts, Harry belajar tentang dunia sihir, bertemu teman-teman ajaib, dan menemukan rahasia-rahasia besar yang mengubah hidupnya selamanya.',
            'image_path' => 'img/HarryPotter1.jpeg'
        ]);        

        Book::create([
            'title' => "The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe",
            'category_id' => 6,
            'slug' => 'chronicles-narnia-lion-witch-wardrobe',
            'penulis' => 'C. S. Lewis',
            'jumlah_tersedia' => 5,
            'excerpt' => 'The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe adalah kisah tentang empat saudara yang menemukan dunia ajaib melalui lemari pakaian tua di rumah Profesor Kirke. Mereka menemukan diri mereka di Narnia, sebuah dunia yang penuh dengan keajaiban, petualangan, dan tantangan yang tak terbayangkan.',
            'sinopsis' => 'The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe membawa kita ke dalam dunia ajaib yang diciptakan oleh C.S. Lewis. Keempat saudara - Peter, Susan, Edmund, dan Lucy - menemukan pintu masuk ke Narnia melalui sebuah lemari ajaib. Di sana, mereka bertemu dengan Aslan, seekor singa yang kuat, dan menghadapi berbagai petualangan yang akan mengubah takdir Narnia.',
            'image_path' => 'img/ChroniclesOfNarnia.jpeg'
        ]);        
        
        Book::create([
            'title' => "Harry Potter: The Chamber of Secrets",
            'category_id' => 6,
            'slug' => 'harry-potter-the-chamber-of-secrets',
            'penulis' => 'J.K. Rowling',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Harry Potter: The Chamber of Secrets menceritakan tahun kedua Harry di Hogwarts, di mana pesan ancaman mengenai "Kamar Rahasia" dan pembunuhan terhadap murid non-darah murni muncul. Bersama Ron dan Hermione, Harry menyelidiki serangkaian kejadian misterius di sekolah.',
            'sinopsis' => 'Harry Potter: The Chamber of Secrets mengisahkan tahun kedua Harry Potter di Sekolah Sihir Hogwarts, ketika serangkaian pesan di dinding koridor sekolah memperingatkan bahwa "Kamar Rahasia" telah dibuka dan "pewaris Slytherin" akan membunuh semua murid yang tidak berasal dari keluarga penyihir berdarah murni. Ancaman ini ditemukan setelah serangan yang menyebabkan penghuni sekolah ketakutan. Sepanjang tahun, Harry dan sahabatnya, Ron dan Hermione, menyelidiki peristiwa tersebut.',
            'image_path' => 'img/HarryPotter2.jpeg'
        ]);        

        Book::create([
            'title' => "SQL QuickStart Guide: The Simplified Beginner's Guide to Managing, Analyzing, and Manipulating Data With SQL",
            'category_id' => 1,
            'slug' => 'SQL-Quickstart-Guide',
            'penulis' => 'Walter Shields',
            'jumlah_tersedia' => 3,
            'excerpt' => 'Merasa ragu dalam mengelola persiapan masa depan berbasis data? Buku ini akan memberikan informasi secara rinci tentang apa yang perlu Anda ketahui untuk berhasil menggunakan bahasa pemrograman SQL dan meningkatkan karier Anda.',
            'sinopsis' => 'Kehadiran big data yang meluas menandakan bahwa saat ini diperlukan solusi efektif untuk menyimpan, mengakses, dan memahami konten database besar dengan cepat dan efisien. Di sinilah peran penting SQL muncul. SQL tidak hanya sekadar bahasa pemrograman biasa, ia merupakan tulang punggung dari manajemen dan interpretasi data modern. Dalam panduan ini, mentor berpengalaman dan ahli SQL, Walter Shields, memanfaatkan pengetahuannya yang luas untuk menjelaskan topik manajemen basis data relasional dengan cara yang dapat diakses, mudah dipahami, dan dapat diimplementasikan. SQL QuickStart Guide sangat cocok bagi Anda yang ingin meningkatkan peluang karier, developer yang ingin memperluas keterampilan pemrograman, atau bagi siapa pun yang ingin mengambil keuntungan dari masa depan yang didorong oleh data, bahkan tanpa pengalaman pemrograman sebelumnya!',
            'image_path' => 'img/SQLQuickStartGuide.jpg'
        ]);

        Book::create([
            'title' => "Learn JavaScript Quickly: A Complete Beginner's Guide to Learning JavaScript, Even If You're New to Programming ",
            'category_id' => 1,
            'slug' => 'Learn-Javascript-Quickly',
            'penulis' => 'Code Quickly',
            'jumlah_tersedia' => 3,
            'excerpt' => 'Apakah Anda tertarik memasuki dunia pemrograman tanpa perlu mengeluarkan biaya mahal untuk kursus? Pilihan yang menarik adalah mempelajari JavaScript. Industri Teknologi Informasi dikenal sebagai masa depan yang cerah, di mana pengembang perangkat lunak, web, dan aplikasi menjadi para profesional yang paling dicari untuk jangka waktu yang panjang. JavaScript sebagai salah satu bahasa pemrograman yang telah terbukti dan sangat populer, menjadi kunci penting untuk memahami dan mengambil peran dalam masa depan ini. Temukan langkah awal yang menyenangkan dalam mempelajari JavaScript melalui buku ini.',
            'sinopsis' => 'Menggali konsep baru seringkali menimbulkan rasa intimidasi, terutama bagi pemula yang ingin memahami seni pemrograman. Meskipun JavaScript menyajikan antarmuka yang ramah bagi pemula, kompleksitasnya memerlukan bimbingan agar Anda dapat melewati proses penguasaannya dengan percaya diri. Dalam buku "Belajar JavaScript dengan Cepat," Anda akan menjumpai:
            1. Panduan komprehensif untuk pemula dalam pemrograman, mencakup dasar-dasar yang harus dikuasai sebelum memulai perjalanan dengan JavaScript;
            2. Pendampingan langkah demi langkah melalui konsep, aturan, dan fungsi kunci JavaScript;
            3. Dua panduan bonus tentang HTML dan CSS untuk memastikan kelengkapan Anda dalam menghadapi pasar kerja yang sangat kompetitif;
            4. Teknik dan alat terbaik untuk memperdalam pengetahuan JavaScript Anda tanpa merasa frustrasi;
            5. Penjelasan simpel untuk tugas-tugas pemrograman, seperti membuat elemen Array dan menangani event HTML, memastikan pemahaman yang lancar;
            6. Latihan dan tugas pemrograman yang bermanfaat (termasuk solusinya) untuk menantang diri Anda dan menguasai JavaScript sepenuhnya;
            7. Panduan membuat website yang kompleks dengan cepat melalui instruksi langsung yang disediakan;
            Dan masih banyak lagi yang menanti Anda',
            'image_path' => 'img/LearnJavascriptQuickly.jpg'
        ]);

        Book::create([
            'title' => "C# & C++: 5 Books in 1 - The #1 Coding Course from Beginner to Advanced",
            'category_id' => 1,
            'slug' => 'C#-C++',
            'penulis' => 'Mark Reed',
            'jumlah_tersedia' => 7,
            'excerpt' => 'Apakah Anda ingin belajar cara membuat kode? Apakah Anda ingin memulai pemrograman dengan cepat dan mudah? Apakah Anda mencari panduan langkah demi langkah yang mudah dipahami? Jika ya, C# & C++: 5 Books in 1 - The #1 Coding Course from Beginner to Advanced adalah panduan sempurna untuk Anda!',
            'sinopsis' => 'Buku "C# & C++: 5 Books in 1 - The #1 Coding Course from Beginner to Advanced" telah dirancang dengan tujuan menyajikan pengalaman pembelajaran yang mulus dan efektif bagi pembaca dari berbagai tingkat keahlian. Dengan langkah-langkah panduan yang terstruktur secara jelas, buku ini dirancang untuk memfasilitasi perjalanan Anda ke dunia pemrograman, tanpa memandang tingkat pengetahuan atau keahlian awal Anda. Berikut adalah beberapa poin menarik yang bisa Anda harapkan dari buku ini: 1. Mendapatkan pemahaman bertahap yang ramah bagi pemula, memungkinkan Anda untuk menguasai dasar-dasar C# dan C++ dengan cepat dan efisien; 2. Memahami teori dan menerapkannya secara langsung, memberikan Anda kesempatan untuk mengasah keterampilan pemrograman Anda sejak saat ini; 3. Menghindari kekakuan instruksi manual dengan menyajikan panduan yang dinamis dan interaktif, memberikan pengalaman praktis yang kokoh; 4. Menyediakan alat penting dan strategi terbaik bagi pemula lengkap, serta pengetahuan tingkat lanjut bagi mereka yang telah memiliki pengalaman; 5. Mempersiapkan Anda dengan keterampilan praktis yang dapat diterapkan dalam situasi nyata, melalui latihan dan contoh yang disajikan dengan cara yang mudah dipahami. Buku ini bukan hanya sekadar kumpulan instruksi teknis, melainkan sebuah panduan holistik yang dapat membimbing Anda melalui perjalanan coding dengan pendekatan yang menarik dan praktis.',
            'image_path' => 'img/C.jpg'
        ]);

        Book::create([
            'title' => "Fantastic Beasts and Where to Find Them: A Harry Potter Hogwarts Library Book ",
            'category_id' => 6,
            'slug' => 'fantastic-beast-and-where-to-find-them',
            'penulis' => 'J.K. Rowling',
            'jumlah_tersedia' => 3,
            'excerpt' => 'Debut gemilang penulisan skenario J.K. Rowling, pencipta dunia sihir Harry Potter yang mendunia, terekam dalam Fantastic Beasts and Where to Find Them. Dibalut dengan tokoh-tokoh luar biasa, kisah epik ini tidak hanya memikat hati penggemar lama, tetapi juga membuka pintu petualangan baru bagi yang baru mengenal keajaiban sihir. Inilah tambahan yang tak terhindarkan untuk menghiasi koleksi bacaan setiap pecinta cerita yang memikat dan penuh keajaiban.',
            'sinopsis' => 'Buku Fantastic Beasts And Where To Find Them menceritakan kisah tentang seorang Magizoologist Newt Scamander yang tiba di kota New York, dia berniat tinggal hanya untuk persinggahan yang singkat. Namun, ketika kotak ajaibnya salah tempat dan beberapa hewan fantastis Newt melarikan diri, itu menimbulkan masalah bagi semua orang di sekitarnya. Tidak seperti penyihir biasanya, Newt Scamander tidak hanya menggunakan kekuatannya tetapi juga kekuatan hewan ajaibnya. Buku ini terdengar sangat penuh dengan magis dan membawa kembali para pembaca ke dalam dunia sihir, hal tersebutlah yang dapat menjadi hiburan yang menyenangkan. Lantas apa ya yang akan dilakukan Newt Scamander untuk mengendalikan hewan fantastis yang keluar melalui kotak ajaibnya? Apakah kotak ajaibnya bisa membantu Newt Scamander? Atau hewan-hewan fantastisnya dapat membantu Newt?',
            'image_path' => 'img/FantasticBeast1.jpg'
        ]);        

        Book::create([
            'title' => "Percy Jackson and the Olympians, Book One: The Lightning Thief",
            'category_id' => 6,
            'slug' => 'percy-jackson-the-lightning-thief',
            'penulis' => 'Rick Riordan',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Jangan lewatkan petualangan Percy Jackson sebelum yang menggetarkan jiwa! Edisi paperback yang memukau ini adalah koleksi istimewa, dengan momen-momen menggemparkan seperti detak jantung, diakui oleh New York Times Book Review. Percy diusir dari sekolah berasrama, menghadapi monster mitologi, mencari petir utama Zeus yang dicuri, dan mengungkap pengkhianatan yang mengancam dewa. Baik Anda penggemar lama atau baru, buku ini adalah tambahan sempurna untuk daftar bacaan Anda, membawa Anda ke dalam dunia magis Percy yang memukau.',
            'sinopsis' => 'Percy Jackson and The Olympians: The Lightning Thief adalah kisah tentang Percy Jackson, seorang Half-Blood yang menemukan bahwa petir Zeus dicuri dan dia harus mengembalikannya untuk mencegah perang dewa. Dengan bantuan teman-temannya, Percy menghadapi monster-monster mitologi, mengungkap konspirasi Ares, dan akhirnya memecahkan misteri pencurian petir. Namun, keputusan sulit menunggu Percy di akhir musim panas ketika dia menghadapi pengkhianatan dari temannya, Luke, yang mengaku sebagai pencuri sejati. Percy harus memilih antara tinggal di Camp Half-Blood atau kembali ke dunia manusia bersama ibunya.',
            'image_path' => 'img/PercyJackson1.jpg'
        ]);        

        Book::create([
            'title' => 'The Scorch Trials (Maze Runner)',
            'category_id' => 2,
            'slug' => 'maze-runner-the-scorch-trials',
            'penulis' => 'James Dashner',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Buku kedua dalam fenomena blockbuster seri The Maze Runner kini menampilkan bab-bab dari The Fever Code, kesimpulan yang sangat dinanti-nantikan dari MAZE RUNNER SERIES. Akhirnya, terungkap rahasia pembangunan labirin yang selama ini menjadi misteri!',
            'sinopsis' => ' Thomas yakin bahwa melarikan diri dari Labirin akan berarti kebebasan baginya dan para Glader. Tapi WICKED belum selesai. Fase Dua baru saja dimulai. Keluarga Glader mempunyai waktu dua minggu untuk melintasi Scorch—bagian yang paling banyak mengalami kebakaran di dunia. WICKED telah memastikan untuk menyesuaikan variabel-variabel tersebut dan menyusun peluang melawannya. Persahabatan akan diuji, kesetiaan akan hancur, dan semua taruhan dibatalkan.
            Namun, ada yang lain sekarang. Kelangsungan hidup mereka bergantung pada kehancuran para Glader dan mereka bertekad untuk bertahan hidup.',
            'image_path' => 'img/TheScorchTrials.jpg'
        ]);

        Book::create([
            'title' => 'The Death Cure (Maze runner)',
            'category_id' => 2,
            'slug' => 'maze-runner-the-death-cure',
            'penulis' => 'James Dashner',
            'jumlah_tersedia' => 5,
            'excerpt' => 'Eksperimen telah usai dan WICKED berhasil menggali semua informasi yang mereka butuhkan. Kini, tanggung jawab penyembuhan Flare dilemparkan kepada para Glader dengan ujian sukarela terakhir. Tapi, sesuatu yang tak terduga terjadi, Thomas mengingat lebih banyak daripada yang WICKED perkirakan, dan dia menyadari ketidakbolehan untuk mempercayai organisasi tersebut. Dengan kelompok Glader yang terpecah, mampukah mereka semua bertahan dan berhasil menghadapi tantangan ini?',
            'sinopsis' => 'Keadaan makin tak terkendali. Penculikan manusia kebal terjadi di mana-mana. WICKED menyebarkan foto Thomas sebagai buronan paling dicari dengan imbalan tinggi. Kejutan justru muncul di Denver, kota dengan pengamanan super ketat terhadap penyebaran virus Flare. Seorang kawan lama muncul. Bagaimana mungkin? Bukankah dia sudah mati di tangan Thomas? Di Denver pula sebuah kelompok rahasia menyatakan diri sebagai musuh WICKED dan menawarkan bantuan. Andai Thomas bisa mempercayai mereka …. Lama bergabung dengan WICKED membuatnya meragukan apa pun. Namun, tak ada waktu berlama-lama memikirkan tujuan kelompok itu sebenarnya. Thomas harus bergegas menyelamatkan diri dan kawan-kawannya dari tangan penculik. Siapakah otak di balik penculikan itu? Mengapa mereka menculik manusia kebal? Sementara itu, WICKED mempunyai rencana baru yang tak kalah gila dan Thomas lah satu-satunya orang yang bisa mengeluarkannya. Sanggupkah Thomas kembali ke neraka itu demi menghancurkan rencana yang mengancam kelangsungan hidup umat manusia?',
            'image_path' => 'img/TheDeathCure.jpg'
        ]);

        Book::create([
            'title' => 'Stranger Things: Suspicious Minds',
            'category_id' => 2,
            'slug' => 'stranger-things-suspicious-minds',
            'penulis' => 'Gwenda Bond',
            'jumlah_tersedia' => 7,
            'excerpt' => 'Bersiaplah untuk mengalami perubahan paradigma ketika Anda menggali kebenaran di balik eksperimen Dr. Brenner di Laboratorium Hawkins. Sambutlah pengalaman tak terduga ini dalam novel resmi pertama dari dunia Stranger Things.',
            'sinopsis' => 'Saat itu musim panas tahun 1969, di tengah gejolak konflik generasi muda Amerika, Terry Ives, seorang mahasiswa di kampus Indiana, terlibat dalam eksperimen pemerintah di kota Hawkins. Dalam perjalanan mengungkap misteri di laboratorium terpencil, Terry menemui konspirasi yang lebih besar dari imajinasinya. Dengan bantuan sesama subjek uji, termasuk Dr. Martin Brenner, mereka terlibat dalam perang unik yang menggunakan pikiran manusia sebagai medan pertempurannya.',
            'image_path' => 'img/SuspiciousMindsST.jpg'
        ]);

        Book::create([
            'title' => "The Fault in Our Stars",
            'category_id' => 3,
            'slug' => 'the-fault-in-our-stars',
            'penulis' => 'John Green',
            'jumlah_tersedia' => 3,
            'excerpt' => 'kuti kisah cinta Hazel dan Augustus dalam "The Fault in Our Stars" yang menghadirkan pandangan berani, penuh ketidakpatuhan, dan keaslian, mengubah paradigma pembaca dengan pengalaman tak terduga.',
            'sinopsis' => 'Meskipun keajaiban medis yang mampu mengecilkan tumor telah memberinya waktu beberapa tahun, Hazel tetap berada dalam tahap terminal, menghadapi babak terakhir hidupnya setelah diagnosis kritis. Namun, segalanya berubah ketika Augustus Waters, karakter yang memukau, muncul di Cancer Kid Support Group. Dalam kisah yang ditulis oleh John Green, "The Fault in Our Stars" menawarkan pandangan luas, penuh keberanian, ketidakpatuhan, dan keaslian. Buku ini dengan cemerlang menggali urusan hidup dan cinta dalam cara yang lucu, mendebarkan, sekaligus tragis.',
            'image_path' => 'img/TheFaultInOurStars.jpg'
        ]);

        Book::create([
            'title' => "Five Feet Apart",
            'category_id' => 3,
            'slug' => 'five-feet-apart',
            'penulis' => 'Rachael Lippincott',
            'jumlah_tersedia' => 3,
            'excerpt' => 'Dua remaja jatuh cinta. Namun hanya karena satu komplikasi kecil, mereka tidak bisa berada dalam jarak beberapa meter dari satu sama lain tanpa mempertaruhkan nyawa. Jadi, bisakah Anda mencintai seseorang yang tidak pernah bisa Anda sentuh?',
            'sinopsis' => 'Stella Grant mengendalikan hidupnya dengan ketat, menjauhkan diri dari segala yang dapat mengancam transplantasi paru-parunya yang rapuh. Namun, Will Newman, seorang pemuda yang ingin keluar dari belenggu rumah sakit, muncul dalam hidupnya. Stella harus menjaga jarak enam kaki agar tidak mengancam transplantasinya, tapi apakah itu juga mengancam hatinya? Di antara aturan ketat dan kenyataan, mereka berdua harus mencuri kembali ruang yang telah dicuri oleh penyakit mereka. Jarak lima kaki bukan lagi ancaman jika itu berarti menghentikan patah hati. Dalam pertarungan melawan penyakit dan cinta yang melampaui batas fisik, keduanya menemukan makna sejati dari hidup dan keberanian untuk mencintai tanpa menyentuh.',
            'image_path' => 'img/FiveFeetApart.jpg'
        ]);
    
        Category::create([
            'name' => 'Pemrograman',
            'slug' => 'pemrograman'
        ]);
        
        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);
        
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);
        
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        Category::create([
            'name' => 'Fantasi',
            'slug' => 'fantasi'
        ]);
        
    }
}
