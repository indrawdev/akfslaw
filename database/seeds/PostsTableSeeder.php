<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'insurance',
                'en_title' => 'Insurance',
                'en_content' => '<p>The needs of consumers to obtain protection related to their life and their assets led to the growing business of the insurance industry in Indonesia. AKFS recognizes this opportunity and with our lawyers, we believe we can help to protect our clients needs from the legal side. With our experience an in-depth knowledge of litigated civil issues, AKFS is engaged extensively in the representation of the Insurer and their insureds.</p><p>AKFS provides cost-effective case management and aggressive litigation at the trial court. Our lawyers have the experience and knowledge to handle cases ranging from a small claim to the most complex matter. Our proven track record of success demonstrates our skill in resolving claims dispute appropriately.</p>',
                'id_title' => 'Asuransi',
                'id_content' => '<p>Kebutuhan konsumen akan perlindungan yang berkaitan dengan jiwa dan asetnya mendorong berkembangnya bisnis industri asuransi di Indonesia. AKFS mengakui peluang ini dan dengan pengacara kami, kami yakin kami dapat membantu melindungi kebutuhan klien kami dari sisi hukum. Dengan pengalaman kami dan pengetahuan yang mendalam tentang masalah sipil yang berperkara, AKFS terlibat secara luas dalam representasi Penanggung dan tertanggung mereka.</p><p> AKFS menyediakan manajemen kasus yang hemat biaya dan litigasi agresif di pengadilan. Pengacara kami memiliki pengalaman dan pengetahuan untuk menangani kasus mulai dari klaim kecil hingga masalah yang paling kompleks. Rekam jejak kesuksesan kami yang telah terbukti menunjukkan keahlian kami dalam menyelesaikan sengketa klaim dengan tepat. </p>'
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'corporate-commercial',
                'en_title' => 'Corporate Commercial',
                'en_content' => '<p><strong>Banking and Secured Transactions</strong><br />In connection with banking and secured transactions field, AKFS will advise clients on mortgages, pledges and any other security Instruments applicable under prevailing laws and regulation.</p><p><strong>Real Estate</strong><br />In relation to real estate industry, AKFS provides consulting services related to land and property issues that are closely related to the legal aspects, especially agrarian law. With our experiences, we are confident to bring a sense of security and comfort from the legal side for our clients who want to establish property/real estate business and for our clients who need legal consultation before buying a property.</p>',
                'id_title' => 'Perusahaan Komersil',
                'id_content' => '<p><strong>Perbankan dan Transaksi Terjamin</strong> <br /> Sehubungan dengan bidang perbankan dan transaksi aman, AKFS akan memberi tahu klien tentang hipotek, gadai, dan Instrumen keamanan lainnya yang berlaku berdasarkan hukum dan peraturan yang berlaku. </ p > <p> <strong> Real Estate </strong> <br /> Terkait dengan industri real estate, AKFS memberikan layanan konsultasi terkait masalah tanah dan properti yang sangat erat kaitannya dengan aspek hukum, khususnya hukum agraria. Dengan pengalaman yang kami miliki, kami yakin dapat menghadirkan rasa aman dan nyaman dari sisi hukum bagi klien kami yang ingin mendirikan bisnis properti / real estate dan untuk klien kami yang membutuhkan konsultasi hukum sebelum membeli properti.</p>'
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'dispute-resolution',
                'en_title' => 'Dispute Resolution',
                'en_content' => '<p>For litigation and dispute resolution, we always provide high quality and experienced lawyers to represent our clients during a dispute resolution process through litigation process on district court, high court, supreme court, as well as through an out-of-court settlement process. Our legal service for dispute resolution, includes:</p><ol><li>Civil &amp; Commercial</li><li>Administrative</li><li>Intellectual Property</li><li>Real Estate</li><li>Insurance</li></ol>',
                'id_title' => 'Penyelesaian Sengketa',
                'id_content' => '<p>Untuk litigasi dan penyelesaian sengketa, kami selalu menyediakan pengacara berkualitas tinggi dan berpengalaman untuk mewakili klien kami selama proses penyelesaian sengketa melalui proses litigasi di pengadilan negeri, pengadilan tinggi, mahkamah agung, serta melalui penyelesaian di luar pengadilan proses. Layanan hukum kami untuk penyelesaian sengketa, meliputi:</p>'
            ]
        ]);
    }
}
