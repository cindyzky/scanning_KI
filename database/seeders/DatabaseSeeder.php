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
            'excerpt' => 'Programming semakin booming nich. Ingin jago bahasa Java? Buku Java Programming solusinya. Segera pinjam untuk mendapatkan ilmunya!!!',
            'sinopsis' => 'Java Programming adalah panduan lengkap untuk mempelajari bahasa pemrograman Java dari dasar. Buku panduan ini tidak hanya memberikan pemahaman mendalam tentang sintaksis dasar Java, tetapi juga membimbing pembaca melalui konsep lanjutan seperti pemrograman berorientasi objek dan pengembangan aplikasi berbasis Java. Dengan pendekatan yang sistematis dan contoh kode yang jelas, pembaca akan memperoleh keterampilan yang diperlukan untuk menguasai bahasa pemrograman Java dan membangun aplikasi yang kuat dan efisien.',
            'image_path' => 'img/JavaProgramming.jpeg'
        ]);
        
        Book::create([
            'title' => 'Omniscient Reader`s Viewpoint',
            'category_id' => 2,
            'slug' => 'omniscient-reader`s-viewpoint',
            'penulis' => 'Singshong',
            'excerpt' => 'Dunia hancur seperti dalam novel!!! Apa yang harus dilakukan umat manusia untuk bertahan hidup? Dapatkah dunia kembali seperti semua? Pinjam untuk tahu ceritanya.',
            'sinopsis' => '"Three Ways to Survive The Apocalypse", novel dengan 3149 episode yang mengisahkan cara bertahan hidup pada dunia yang hancur. Novel ini hanya memiliki satu pembaca, Kim Dokja. Pada perilisan episode terakhir, dunia Kim Dokja tiba-tiba berubah seperti dalam novel. Setiap manusia harus menyelesaikan misi mematikan yang diberikan oleh makhluk bernama dokkaebi. Bagaimana kelanjutan ceritanya?',
            'image_path' => 'img/OmniscientReadersViewpoint.jpeg'
        ]);
        
        Book::create([
            'title' => 'Python Programming',
            'category_id' => 1,
            'slug' => 'python-programming',
            'penulis' => 'AMZ Press',
            'excerpt' => 'Programming semakin booming nich. Ingin jago bahasa Python? Buku Python Programming solusinya. Segera pinjam untuk mendapatkan ilmunya!!!',
            'sinopsis' => 'Python Programming adalah panduan bagi siapa pun yang ingin menguasai bahasa pemrograman Python. Buku ini tidak hanya membahas konsep dasar Python dengan jelas, tetapi juga menghadirkan pemahaman yang kuat tentang bagaimana bahasa ini digunakan dalam berbagai bidang seperti pengembangan web, analisis data, kecerdasan buatan, dan lebih banyak lagi. Dengan pendekatan praktis dan berbagai contoh kode, buku ini membimbing pembaca dari pemula hingga tingkat lanjutan, membantu mereka membangun keterampilan yang diperlukan untuk menjadi ahli dalam Python.',
            'image_path' => 'img/PythonProgramming.jpeg'
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'category_id' => 4,
            'slug' => 'laskar-pelangi',
            'penulis' => 'Andrea Hirata',
            'excerpt' => 'Buku "Laskar Pelangi" mengisahkan perjuangan sekelompok anak muda dari daerah miskin di Belitung untuk mendapatkan pendidikan yang layak. Kisah ini menginspirasi, menyoroti keteguhan hati dan semangat pantang menyerah dalam menghadapi berbagai rintangan demi mewujudkan impian.',
            'sinopsis' => 'Laskar Pelangi adalah kisah tentang kehidupan anak-anak di sebuah desa kecil di Belitung. Mereka tinggal di daerah yang terpencil dan memiliki keterbatasan dalam hal pendidikan. Namun, mereka memiliki tekad kuat untuk mendapatkan pendidikan yang layak meskipun terkendala oleh berbagai masalah. Dengan semangat juang yang luar biasa, mereka berusaha meraih cita-cita mereka. Buku ini menggambarkan perjalanan hidup yang penuh perjuangan, kebersamaan, dan harapan untuk masa depan yang lebih baik.',
            'image_path' => 'img/LaskarPelangi.jpeg'
        ]);

        Book::create([
            'title' => "Heaven's Official's Blessing",
            'category_id' => 3,
            'slug' => 'heavens-officials-blessing',
            'penulis' => 'Mo Xiang Tong Xiu',
            'excerpt' => 'Buku "Heaven\'s Official\'s Blessing" mengisahkan tentang Xie Lian, dewa yang terbuang dari Surga ke dunia manusia. Kisah ini menyoroti petualangannya dalam menghadapi cobaan dan pencarian akan kebenaran, sambil menjalani kehidupan yang penuh liku dan pertualangan yang mendebarkan.',
            'sinopsis' => 'Heaven\'s Official\'s Blessing mengikuti kisah Xie Lian, seorang dewa yang diusir dari Surga dan terlahir kembali ke dunia manusia. Dalam petualangannya, dia menghadapi berbagai cobaan dan rintangan yang membingungkan, tetapi tak pernah kehilangan kebaikan hatinya. Dalam pencariannya akan kebenaran, Xie Lian menemukan teman-teman baru dan memecahkan misteri yang tersembunyi di balik banyak kejadian. Buku ini membawa pembaca ke dalam dunia fantasi yang penuh intrik, keajaiban, dan kegembiraan.',
            'image_path' => 'img/HeavensOfficialBlessings.jpeg'
        ]);

        Book::create([
            'title' => "Solo Leveling",
            'category_id' => 5,
            'slug' => 'solo-leveling',
            'penulis' => 'Chugong',
            'excerpt' => 'Buku "Solo Leveling" mengisahkan tentang Sung Jin-Woo, seorang Hunter E-rank yang diperlakukan tidak adil. Namun, hidupnya berubah drastis setelah ia menemukan sebuah "sistem" yang mengubah nasibnya. Petualangan dan kekuatan yang dimilikinya membuatnya berjuang di dunia yang penuh dengan rahasia dan keajaiban.',
            'sinopsis' => 'Solo Leveling mengisahkan kisah Sung Jin-Woo, seorang Hunter E-rank yang sering diabaikan oleh orang lain. Segala sesuatu berubah ketika ia menemukan "sistem" yang memberinya kesempatan untuk tumbuh dan berkembang menjadi Hunter yang kuat. Dengan kemampuan barunya, Sung Jin-Woo memasuki dunia yang dipenuhi monster dan rahasia yang belum terungkap. Dalam perjalanannya, ia menemukan konspirasi besar dan mengungkap kebenaran yang tersembunyi di balik kekuatan yang dimilikinya. Buku ini memperkenalkan pembaca pada dunia fantasi yang menegangkan dan petualangan yang mengagumkan.',
            'image_path' => 'img/SoloLeveling.jpeg'
        ]);
               
        Book::create([
            'title' => "Harry Potter: The Philosopher's Stone",
            'category_id' => 6,
            'slug' => 'harry-potter-philosopher-stone',
            'penulis' => 'J.K. Rowling',
            'excerpt' => 'Harry Potter: The Philosopher\'s Stone adalah kisah tentang seorang anak laki-laki bernama Harry Potter yang menemukan bahwa ia sebenarnya seorang penyihir. Ia kemudian diajak ke Sekolah Sihir Hogwarts, di mana ia belajar tentang dunia sihir, bertemu teman-teman baru, dan menghadapi berbagai petualangan menegangkan.',
            'sinopsis' => 'Harry Potter: The Philosopher\'s Stone adalah awal dari kisah Harry Potter yang luar biasa. Buku ini memperkenalkan kita pada karakter Harry, seorang anak yatim piatu yang hidupnya berubah secara dramatis setelah mengetahui bahwa ia memiliki kemampuan sihir. Di Sekolah Sihir Hogwarts, Harry belajar tentang dunia sihir, bertemu teman-teman ajaib, dan menemukan rahasia-rahasia besar yang mengubah hidupnya selamanya.',
            'image_path' => 'img/HarryPotter1.jpeg'
        ]);        

        Book::create([
            'title' => "The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe",
            'category_id' => 6,
            'slug' => 'chronicles-narnia-lion-witch-wardrobe',
            'penulis' => 'C. S. Lewis',
            'excerpt' => 'The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe adalah kisah tentang empat saudara yang menemukan dunia ajaib melalui lemari pakaian tua di rumah Profesor Kirke. Mereka menemukan diri mereka di Narnia, sebuah dunia yang penuh dengan keajaiban, petualangan, dan tantangan yang tak terbayangkan.',
            'sinopsis' => 'The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe membawa kita ke dalam dunia ajaib yang diciptakan oleh C.S. Lewis. Keempat saudara - Peter, Susan, Edmund, dan Lucy - menemukan pintu masuk ke Narnia melalui sebuah lemari ajaib. Di sana, mereka bertemu dengan Aslan, seekor singa yang kuat, dan menghadapi berbagai petualangan yang akan mengubah takdir Narnia.',
            'image_path' => 'img/ChroniclesOfNarnia.jpeg'
        ]);        
        
        Book::create([
            'title' => "Harry Potter: The Chamber of Secrets",
            'category_id' => 6,
            'slug' => 'harry-potter-the-chamber-of-secrets',
            'penulis' => 'J.K. Rowling',
            'excerpt' => 'Harry Potter: The Chamber of Secrets menceritakan tahun kedua Harry di Hogwarts, di mana pesan ancaman mengenai "Kamar Rahasia" dan pembunuhan terhadap murid non-darah murni muncul. Bersama Ron dan Hermione, Harry menyelidiki serangkaian kejadian misterius di sekolah.',
            'sinopsis' => 'Harry Potter: The Chamber of Secrets mengisahkan tahun kedua Harry Potter di Sekolah Sihir Hogwarts, ketika serangkaian pesan di dinding koridor sekolah memperingatkan bahwa "Kamar Rahasia" telah dibuka dan "pewaris Slytherin" akan membunuh semua murid yang tidak berasal dari keluarga penyihir berdarah murni. Ancaman ini ditemukan setelah serangan yang menyebabkan penghuni sekolah ketakutan. Sepanjang tahun, Harry dan sahabatnya, Ron dan Hermione, menyelidiki peristiwa tersebut.',
            'image_path' => 'img/HarryPotter2.jpeg'
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
