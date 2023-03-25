
<style>
.example-slide {
align-items: center;
background-color: #666;
color: #999;
display: flex;
font-size: 1.5rem;
justify-content: center;
min-height: 10rem;
}
</style>

<template>
	<Head title="Home" />

	
	<!-- Header Area wrapper Starts -->
	<header id="header-wrap" class="relative pb-24">
		<!-- Navbar Start -->      
		<div class="navigation fixed top-0 left-0 w-full z-30 duration-300 bg-white shadow-md">
			<div class="container">
				<nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
					<a class="w-14 h-14 md:w-24 md:h-20 lg:w-24 lg:h-20" href="/">
						<img src="img/logo.png" alt="Logo">
					</a>
					<button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" @click="show_menu = !show_menu">
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
					</button>

					<div class="navbar-collapse duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" :class="show_menu ? '' : 'hidden lg:block'" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto justify-center items-center lg:flex">
							<li class="nav-item">
								<span class="page-scroll cursor-pointer" :class="current_link == 'utama' ? 'active' : ''" @click="scrollToDiv('utama')">Utama</span>
							</li>
							<li class="nav-item">
								<span class="page-scroll cursor-pointer" :class="current_link == 'galeri' ? 'active' : ''" @click="scrollToDiv('galeri')">Galeri</span>
							</li>
							<li class="nav-item">
								<span class="page-scroll cursor-pointer" :class="current_link == 'pakej' ? 'active' : ''" @click="scrollToDiv('pakej')">Pakej</span>
							</li>
							<li class="nav-item">
								<span class="page-scroll cursor-pointer" :class="current_link == 'latar_belakang' ? 'active' : ''" @click="scrollToDiv('latar_belakang')">Latar Belakang</span>
							</li>
							<li class="nav-item">
								<span class="page-scroll cursor-pointer" :class="current_link == 'hubungi' ? 'active' : ''" @click="scrollToDiv('hubungi')">Hubungi Kami</span>
							</li>
						</ul>
					</div>
					<!-- <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
					<a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="#feature">FAQ</a>
					</div> -->
				</nav>
			</div>
		</div>
		<!-- Navbar End -->
		<section ref="utama" class="bg-white pt-36 pb-24">
			<!-- <div class="container">
				<VueCarousel :data="carousel_images" :controls="true"></VueCarousel>
			</div> -->
			<div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
				<div class="mr-auto place-self-center lg:col-span-7">
					<h1 class="text-3xl lg:text-3xl md:text-3xl">Anda sedang mencari agensi perlancongan?</h1>
					&nbsp;
					<p class="max-w-2xl mb-6 font-light text-gray-700">Kami menyediakan servis berteraskan pelancongan muslim mesra ibadah yang merangkumi pekej-pekej pelancongan di dalam dan luar negara. Selain itu, perniagaan ini juga menawarkan Pakej Umrah Terpimpin dan menggunakan Visa Pelancongan</p>
					<a href="https://wa.me/60197879871" class="space-x-2 inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
							<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
						</svg>
						<span>Whatsapp Kami</span>
					</a>
				</div>      
			</div>
		</section>
		<section ref="galeri" class="bg-orange-100 pt-36 pb-24">
			<div class="container">
				<div class="flex justify-between">
					<div class="w-full text-center">
						<h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Galeri
							<!-- <br class="hidden lg:block"> Built with TailwindCSS -->
						</h2>
					</div>
				</div>
				<div class="flex justify-center">
					<div class="w-1/2 h-full">
						<VueCarousel :data="carousel_images" :controls="true"></VueCarousel>
					</div>
				</div>
			</div>
		</section>
		<section ref="pakej" class="flex justify-center pt-36 pb-24 bg-gray-800">
			<div class="flex flex-col w-5/6">
				<div class="text-center">
				<h2 class="mb-12 font-semibold text-4xl text-white">Pakej Umrah</h2>
				</div>
				<div class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
					<div v-for="tier in tiers" :key="tier.name" class="divide-y divide-gray-200 bg-white rounded-lg border border-gray-200 shadow-sm">
						<div class="p-6">
							<h2 class="text-lg font-medium leading-6 text-gray-900">{{ tier.name }}</h2>
							<p class="mt-4 text-sm text-gray-500">{{ tier.description }}</p>
							<p class="mt-2">
								<span class="text-4xl font-bold tracking-tight text-gray-900">RM {{ tier.priceMonthly }}</span>
							</p>
							<!-- <a :href="tier.href" class="mt-8 block w-full rounded-md border border-transparent bg-purple-600 py-2 text-center text-sm font-semibold text-white hover:bg-purple-700">Buy {{ tier.name }}</a> -->
						</div>
						<div class="px-6 pt-6 pb-8">
							<h3 class="text-sm font-bold text-gray-900">Harga Termasuk</h3>
							<ol class="mt-6 space-y-4 list-disc">
								<li v-for="feature in tier.features" :key="feature" class="flex space-x-3">
									
									<span class="text-sm text-green-600 font-semibold" >
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
										</svg>
									</span>
									<span class="text-sm text-gray-800 font-semibold" >{{ feature }}</span>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section ref="latar_belakang" class="bg-orange-100 pt-36 pb-24">
			<div class="container">
				<div class="flex items-center">
					<div class="w-full lg:w-1/2">
						<div class="flex flex-wrap justify-center">
							<div class="w-[150px] h-2/3 sm:w-1/2">
								<img src="img/pengarah-syarikat.png" alt="..." class="shadow-lg rounded-full max-w-full h-auto align-middle border-none" />
							</div>
						</div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="text-center">
							<h2 class="mt-12 font-semibold text-3xl text-gray-800">Latar Belakang</h2>
							<div class="mt-10">
								<h4 class="text-xl font-bold">Ustaz Tn. Hj. Mohd Nor Bin Esmin</h4>
								<h3 class="mb-12 text-sm font-semibold italic">Pengarah Syarikat</h3>
							</div>
						</div>
						<div class="mb-5 lg:mb-0">
							<div class="flex flex-wrap">
								<div class="w-full sm:w-4/5 lg:w-4/5">
									<div class="my-3 space-y-12">
										<div class="features-content">
											Berpengalaman menguruskan Jemaah Haji dan Umrah selama 25 tahun.
											Mempunyai tauliah mengajar agama daripada Majlis Agama Islam Negeri Johor.
											Seringkali diundang juga menyampaikan kursus dan praktikal Haji di sekolah-sekolah Negeri Johor.
											Serta memberikan kursus intensif secara personal kepada golongan VIP serta orang-orang kenamaan.
											Beberapa kali menunaikan Haji sebagai pembimbing ibadat Haji kepada Jemaah Haji Malaysia (Muassassah) dan Jemaah Haji Pakej Swasta.
											Seringkali diundang untuk menyampaikan ‘Slot Lambaian Kaabah’ Radio Malaysia Johor (RMJ FM) dan Radio IKIM serta berlintas langsung dari Masya’ir Hajj oleh TV1.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section ref="hubungi" class="pt-36 pb-24">    
			<div class="container">
				<div class="text-center">
					<h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Hubungi Kami</h2>
				</div>
				<div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
					<div class="w-full md:w-1/2">
					<div class="contact">
						<h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Borang Pertanyaan</h2>
						<form id="contactForm" action="contact.php">
						<div class="flex flex-wrap">
							<div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
							<div class="mx-3">
								<input type="text" class="form-input rounded-full" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
							</div>                                 
							</div>
							<div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
							<div class="mx-3">
								<input type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email" required data-error="Please enter your email">
							</div> 
							</div>
							<div class="w-full">
							<div class="mx-3">
								<input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full" required data-error="Please enter your subject">
							</div>
							</div>
							<div class="w-full">
							<div class="mx-3"> 
								<textarea class="form-input rounded-lg" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
							</div>
							</div>
							<div class="w-full">
							<div class="submit-button mx-3">
								<button class="rounded bg-[#3182ce] py-2 px-4 text-white" id="form-submit" type="submit">Send Message</button>
							</div>
							</div>
						</div>            
						</form>
					</div>
					</div>
					<div class="w-full md:w-1/2">
					<div class="ml-3 md:ml-12 wow fadeIn">
						<h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Maklumat Kami</h2>
						<div>
						<div class="flex flex-wrap mb-6 items-center">
							<div class="contact-icon">
							<i class="lni lni-map-marker"></i>
							</div>
							<p class="pl-3">No. 2927A, Jalan Merbau 3, Bandar Putra, 81000, Kulai, Johor</p>
						</div>
						<div class="flex flex-wrap mb-6 items-center">
							<div class="contact-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
								<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
								<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
							</svg>
							</div>
							<p class="pl-3">10.00 Pagi – 6.00 Petang</p>
						</div>
						<div class="flex flex-wrap mb-6 items-center">
							<div class="contact-icon">
							<i class="lni lni-envelope"></i>
							</div>
							<p class="pl-3">
							<a href="#" class="block">yourmuslimtravel@gmail.com</a>
							</p>
						</div>
						<div class="flex flex-wrap mb-6 items-center">
							<div class="contact-icon">
							<i class="lni lni-phone-set"></i>
							</div>
							<p class="pl-3">
								<span href="#" class="block">07 599 9566</span>
								<span href="#" class="block">6019 787 9871 (Ustaz Tn. Hj Mohd Nor)</span>
								<span href="#" class="block">6018 278 0566 (Alina)</span>
							</p>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div> 
		</section>
	</header>
	
	<!-- Footer Section Start -->
	<footer id="footer" class="bg-gray-800 py-10">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 wow fadeInUp" data-wow-delay="0.2s">
					<div class="mx-3">
						<div class="footer-logo mb-3">
							<span class="text-white text-xl">Mohd Nor Travel & Tours Sdn Bhd</span>
							&nbsp;
							<span class="text-white text-md">(1047869)</span>
						</div>
						<div class="footer-logo mb-3">
							<span class="text-white text-md">Travel Agency</span>
						</div>
						<div class="footer-logo mb-3"></div>
						<p class="text-gray-300">Lesen Perlancongan Kementerian Pelancongan Malaysia (MOTAC):</p>
						<div class="footer-logo mb-3"></div>
						<p class="text-gray-300">1. KPK/LN 8117</p>
						<p class="text-gray-300">2. MITA 1781</p>
					</div>
				</div>
				<div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
					<div class="mx-3 mb-8">
						<h3 class="font-bold text-xl text-white mb-5">Sosial Media</h3>
				
						<ul class="social-icons flex justify-start">
						<li class="mx-2">
							<a href="https://www.facebook.com/mohdnortravel" target="_blank"
							class="footer-icon hover:bg-indigo-500">
							<i class="lni lni-facebook-original" aria-hidden="true"></i>
							</a>
						</li>
						<li class="mx-2">
							<a href="https://www.instagram.com/yourmuslimtravel" target="_blank"
							class="footer-icon hover:bg-red-500">
							<i class="lni lni-instagram-original" aria-hidden="true"></i>
							</a>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div>     
	</footer> 
	<!-- Footer Section End -->

	<section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full text-center">
					<p class="text-white">&copy; {{ new Date().getFullYear() }} | Mohd Nor Travel & Tours</p>
				</div>
			</div>
		</div>
	</section>   

	<!-- Go to Top Link -->
	<a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
		<i class="lni lni-arrow-up"></i>
	</a>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';

const tiers = [
{
	name: 'Umrah Terpimpin',
	// href: '#',
	priceMonthly: '8,900',
	// description: 'Serendah',
	features: [
		'Bimbingan ibadat sempurna dan tersusun',
		'Menawarkan kursus umrah terpimpin sebanyak 5 kali termasuk praktikal',
		'Menawarkan bilik seminar penghawa dingin dan kondusif untuk kursus',
		'Menggunakan pakej penerbangan MAS ataupun Saudi Airline',
		'12 hari 11 malam',
		'Menaja bag bagasi / hand luggage, bag sandang percuma, uncang kasut, buku panduan umrah',
		'Air zam-zam 5 liter (atas keizinan Arab Saudi)',
	],
},
{
	name: 'Haji Swasta',
	// href: '#',
	priceMonthly: '58,000',
	// description: 'Serendah',
	features: [
		'Ejen Pakej Haji Swasta yang diiktiraf dan mendapat lesen untuk mengelola, jamaah Haji oleh Tabung Haji',
		'Bimbingan ibadat sempurna dan tersusun',
		'Menawarkan kursus diberikan sebanyak 3 kali secara intensif termasuk praktikal (bahan-bahan kursus disediakan)',
		'Menawarkan bilik seminar penghawa dingin dan kondusif untuk kursus',
		'Menaja bag bagasi / hand luggage, bag sandang percuma, uncang kasut, buku panduan Haji',
		'40 hari',
		'Menggunakan pakej penerbangan MAS ataupun Saudi Airline',
		'Air zam-zam 5 liter (atas keizinan Arab Saudi)',
		'Penerbangan mas atau saudi',
	],
},
{
	name: 'Badal Haji',
	// href: '#',
	priceMonthly: '3,000',
	// description: 'Serendah',
	features: [
		'Menyediakan perkhidmatan bagi melaksanakan badal Haji bagi orang yang telah meninggal dunia, orang yang uzur atau berpenyakit kronik',
		'Barangan cenderahati kepada waris seperti sijil badal haji (dari mekah)',
		'Sejadah, serban/tudung, kurma ajwa, minyak wangi, tasbih, dan air zam-zam 5 liter (atas keizinan Arab Saudi)',
	],
},
{
	name: 'Pelancongan Muslim',
	// href: '#',
	priceMonthly: '~~~~',
	// description: 'Serendah',
	features: [
		'Menawarkan pekej pelancongan muslim yang mesra ibadat dan berkait dengan sirah/sejarah islam',
		'Menawarkan pakej pelancongan ke seluruh negara dan dalam negeri.',
	],
},
]
</script>

<script>
import { createApp } from 'vue/dist/vue.esm-bundler';
import VueCarousel from '@chenfengyuan/vue-carousel';

export default{
	components: {
		VueCarousel
	},
	data() {
		return {
			current_link: 'utama',
			currentIndex: 0,
			show_menu: false,
			carousel_images: [
				// '<img src="/storage/img(1).jpg">',
				// '<img src="/storage/img (2).jpg">',
				// '<img src="/storage/img (3).jpg">',
			],
		}
	},
	methods: {
		scrollToDiv(id) {
			this.$refs[id].scrollIntoView({ behavior: 'smooth'});
			this.current_link	=	id
		}
	},
	created(){
		for (let i = 57; i < 87; i++) {
			this.carousel_images.push('<img src="/storage/img ('+i+').jpg">')
		}
	}
}
</script>

