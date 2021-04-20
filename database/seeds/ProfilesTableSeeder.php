<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('profiles')->delete();

		DB::table('profiles')->insert([
			[
				'slug' => 'home',
				'en_intro' => "AKFS Law Firm, domiciled in Jakarta, is one of Indonesia's law offices, offering a full range of corporate commercial, litigation and dispute resolution services.",
				'id_intro' => "Firma Hukum AKFS, berdomisili di Jakarta, adalah salah satu kantor hukum di Indonesia, menawarkan rangkaian lengkap layanan komersial perusahaan, litigasi dan penyelesaian sengketa.",
				'en_title' => 'Home',
				'en_content' => "<p>AKFS Law Firm, domiciled in Jakarta, is one of Indonesia's law offices, offering a full range of corporate commercial, litigation and dispute resolution services.</p>",
				'id_title' => 'Beranda',
				'id_content' => "<p>Firma Hukum AKFS, berdomisili di Jakarta, adalah salah satu kantor hukum di Indonesia, menawarkan rangkaian lengkap layanan komersial perusahaan, litigasi dan penyelesaian sengketa.</p>"
			],
			[
				'slug' => 'about',
				'en_intro' => "AKFS Law Firm, domiciled in Jakarta, is one of Indonesia's law offices, offering a full range of corporate commercial, litigation and dispute resolution services.",
				'id_intro' => "Firma Hukum AKFS, berdomisili di Jakarta, adalah salah satu kantor hukum di Indonesia, menawarkan rangkaian lengkap layanan komersial perusahaan, litigasi dan penyelesaian sengketa.",
				'en_title' => 'About',
				'en_content' => "<p>We are committed to providing excellent services in a timely and professionally manner with our professional, creative, reliable and energic Lawyers. We prioritize the harmony of relationships with clients and always provide maximum services and solutions to the legal problems faced by our Clients. In addition, we distinguish ourselves from other firms by offering clients a sense of security and comfort from the legal side at a fair and reasonable cost.</p><h4>VISION</h4><p>To be a credible, professional, and reliable law office providing maximum solution for the client's needs</p><h4>MISSION</h4><p>To provide legal understanding and total solutions for the legal needs of clients.</p><h4>CORE VALUES</h4><ul><li>Client Focus</li><li>Reliability</li><li>Creativity</li><li>Professionalism</li></ul><h4>WHY CHOOSE US</h4><p>AKFS offers clients a sense of security and comfort from the legal side at a fair and reasonable cost AKFS prioritizes the harmony of relationship with clients and always provides maximum services and solutions to Clients. We are professional, energetic, reliable and creative Lawyers. We continually improve our quality services.</p><h4>MESSAGE FROM MANAGING PARTNER</h4><p>We establish AKFS Law Firm with the vision of being a credible, professional, and reliable law office providing maximum solutions for the clients' needs. We consider a Client as a friend. A good friend will certainly give more attention when his friend is in time of trouble. We use these approach and perspective when handling a case so that in providing optimal solutions to the legal problems faced by our Clients, we give more attention to what the clients really need.</p><p>Trust of the Client is one of the most important things in providing of services. Trust is one of the free and long-term promotional media forms that is important to support and establish positive image of a company in the public. It requires strong integrity and commitment to build a trust, therefore AKFS Law Firm offers the commitment and integrity in providing legal services to achieve our vision. We are committed to giving our best in every legal service, because we believe that a trust arises from a process and is not obtained instantaneously. With the trust of our Clients we will be able to achieve our vision and make our Office continue to grow in the future.</p>",
				'id_title' => 'Tentang',
				'id_content' => "<p>Kami berkomitmen untuk memberikan layanan terbaik secara tepat waktu dan profesional dengan Pengacara kami yang profesional, kreatif, andal, dan energik. Kami mengutamakan keharmonisan hubungan dengan Klien dan selalu memberikan pelayanan dan solusi yang maksimal atas permasalahan hukum yang dihadapi Klien kami. Selain itu, kami membedakan diri kami dari firma lain dengan menawarkan kepada klien rasa aman dan nyaman dari sisi hukum dengan biaya yang adil dan wajar.</p><h4>VISI</h4><p>kantor hukum yang kredibel, profesional, dan dapat diandalkan memberikan solusi maksimal untuk kebutuhan klien.</p><h4>MISI</h4><p>Memberikan pemahaman hukum dan solusi total untuk kebutuhan hukum klien.</p><p><h4>NILAI UTAMA</h4><ul><li>Fokus Klien</li><li>Keandalan</li><li>Kreativitas</li><li>Profesionalisme</li></ul><h4>MENGAPA MEMILIH KAMI</h4> <p>AKFS menawarkan klien rasa aman dan nyaman dari sisi hukum dengan biaya yang adil dan wajar AKFS mengutamakan keharmonisan hubungan dengan klien dan selalu memberikan layanan dan solusi untuk Klien. Kami adalah Pengacara yang profesional, energik, andal, dan kreatif. Kualitas layanan terus kami tingkatkan. </p><h4>PESAN DARI MANAGING PARTNER </h4><p>Kami mendirikan AKFS Law Firm dengan visi menjadi kantor hukum yang kredibel, profesional, dan terpercaya dengan memberikan pelayanan maksimal solusi untuk kebutuhan klien. Kami menganggap Klien sebagai teman. Teman yang baik pasti akan memberikan perhatian yang lebih pada saat temannya sedang dalam kesulitan. Pendekatan dan cara pandang tersebut kami gunakan dalam menangani suatu perkara sehingga dalam memberikan solusi yang optimal atas permasalahan hukum yang dihadapi oleh Klien kami, kami memberikan perhatian yang lebih terhadap apa yang sebenarnya dibutuhkan oleh Klien. </p><p> Kepercayaan Klien adalah salah satu dari hal terpenting dalam memberikan layanan. Trust merupakan salah satu bentuk media promosi gratis dan berjangka panjang yang penting untuk mendukung dan membangun citra positif suatu perusahaan di masyarakat. Diperlukan integritas dan komitmen yang kuat untuk membangun kepercayaan, oleh karena itu AKFS Law Firm menawarkan komitmen dan integritas dalam memberikan layanan hukum untuk mencapai visi kami. Kami berkomitmen untuk memberikan yang terbaik dalam setiap layanan hukum, karena kami percaya bahwa kepercayaan muncul dari suatu proses dan tidak diperoleh secara instan. Dengan kepercayaan Klien kami, kami akan dapat mencapai visi kami dan menjadikan Office kami terus berkembang di masa depan.</p>"
			],
			[
				'slug' => 'contact',
				'en_intro' => null,
				'id_intro' => null,
				'en_title' => 'Contact',
				'en_content' => '',
				'id_title' => 'Kontak',
				'id_content' => ''
			]
		]);
	}
}
