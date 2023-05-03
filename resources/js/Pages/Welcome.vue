
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

    <div class="navigation md:h-[6rem] fixed top-0 left-0 w-full z-30 duration-300 bg-white shadow-md">
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
                <div class="navbar-collapse duration-300 shadow absolute top-100 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" :class="show_menu ? '' : 'hidden lg:block'" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                            <span class="page-scroll cursor-pointer bold" :class="current_link == 'utama' ? 'active' : ''" @click="scrollToDiv('utama')">Utama</span>
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
                            <span class="page-scroll cursor-pointer" :class="current_link == 'hubungi_kami' ? 'active' : ''" @click="scrollToDiv('hubungi_kami')">Hubungi Kami</span>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <section ref="utama" class="relative h-screen md:pt-[6rem]">
        <img class="w-full h-full object-cover" src="https://picsum.photos/1920/1080" alt="Image description">
        <div class="absolute inset-0 flex flex-col items-center space-y-4 justify-center p-[60px] md:p-0">
            <h2 class="text-4xl font-bold text-black mb-4">Mohd Nor Travel & Tours</h2>
            <h1 class="text-3xl lg:text-3xl md:text-3xl">Anda sedang mencari agensi perlancongan?</h1>
            <a href="https://wa.me/60197879871" class="space-x-2 inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-full bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
                <span>Whatsapp Kami</span>
            </a>
        </div>
    </section>
    <section ref="galeri" class="flex justify-center items-center bg-orange-100 h-1/3 p-[4rem]">
        <ImageSlider :images="images" :auto-slide-interval="5000"></ImageSlider>
    </section>
    <section ref="pakej" class="flex justify-center items-center bg-gray-800 h-1/3 p-[4rem]">
        <div class="flex flex-col w-5/6">
            <div class="text-center">
            <h2 class="mb-12 font-bold text-4xl text-white">Kami Menawarkan Pakej</h2>
            </div>
            <div class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">
                <div v-for="tier in tiers" :key="tier.name" class="divide-y divide-gray-200 bg-white rounded-lg border border-gray-200 shadow-sm">
                    <div class="p-3">
                        <p class="mt-2">
                            <h2 class="text-3xl text-center font-bold text-gray-900">{{ tier.name }}</h2>
                        </p>
                    </div>
                    <div class="px-6 pt-6 pb-8">
                        <h2 class="text-xl text-center font-semibold leading-6 text-gray-900">{{ tier.priceMonthly }}</h2>
                        <ol class="mt-6 space-y-4 list-disc">
                            <li v-for="feature in tier.features" :key="feature" class="flex space-x-3">
                                <span class="text-sm text-green-600 font-semibold" >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </span>
                                <span class="text-sm text-gray-800 font-medium" >{{ feature }}</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section ref="latar_belakang" class="flex justify-center items-center bg-orange-100 h-1/4 p-[3rem]">
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
                    <div class="text">
                        <div class="mt-10">
                            <h4 class="text-2xl font-bold">Ustaz Tn. Hj. Mohd Nor Bin Esmin</h4>
                            <h3 class="mb-3 text-xl font-semibold">Pengarah Syarikat</h3>
                        </div>
                    </div>
                    <div class="mb-5 lg:mb-0">
                        <div class="flex flex-wrap">
                            <div class="my-3 space-y-12">
                                <p>
                                    Berpengalaman menguruskan Jemaah Haji dan Umrah selama 25 tahun dan
                                    mempunyai tauliah mengajar agama daripada Majlis Agama Islam Negeri Johor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section ref="hubungi_kami" class="bg-gray-800 py-10 pt-10 md:pt-[8rem]">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="mx-3">
                        <h3 class="font-bold text-xl text-white mb-5">Hubungi Kami</h3>


                        <div class="flex flex-wrap mb-2 items-center">
                            <div class="contact-icon">
                            <i class="lni lni-map-marker"></i>
                            </div>
                            <p class="pl-3 text-white">No. 2927A, Jalan Merbau 3, Bandar Putra, 81000, Kulai, Johor</p>
                        </div>

                        <div class="flex flex-wrap mb-2 items-center">
                            <div class="contact-icon">
                            <i class="lni lni-envelope"></i>
                            </div>
                            <p class="pl-3 text-white">yourmuslimtravel@gmail.com</p>
                        </div>

                        <div class="flex flex-wrap mb-2 items-center">
                            <div class="contact-icon">
                            <i class="lni lni-phone-set"></i>
                            </div>
                            <p class="pl-3 text-white">+07 599 9566</p>
                        </div>
                    
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
    </section>
	<section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full text-center">
					<p class="text-white">&copy; {{ new Date().getFullYear() }} | Mohd Nor Travel & Tours</p>
				</div>
			</div>
		</div>
	</section>   

	<a href="#" @click="goToMain" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
		<i class="lni lni-arrow-up"></i>
	</a>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { createApp } from 'vue/dist/vue.esm-bundler'

const tiers = [{
    name: 'Umrah Terpimpin',
    // href: '#',
    priceMonthly: 'Serendah RM 8,900',
    // description: 'Serendah',
    features: [
    'Bimbingan ibadat sempurna dan tersusun',
    'Kursus umrah terpimpin sebanyak 5 kali termasuk praktikal',
    'Menyediakan bilik seminar penghawa dingin dan kondusif untuk kursus',
    'Pakej penerbangan Malaysia Airline ataupun Saudi Airline',
    'Percuma bag bagasi, bag sandang, uncang kasut dan buku panduan umrah',
    'Ibadah Umrah akan berlansung selama 12 malam 11 hari',
    'Percuma Air zam-zam 5 liter dengan keizinan Kerajaan Arab Saudi',
    ],
},
{
    name: 'Haji Swasta',
    // href: '#',
    priceMonthly: 'Serendah RM 58,000',
    // description: 'Serendah',
    features: [
        'Bimbingan ibadat sempurna dan tersusun',
        'Kursus Haji sebanyak 3 kali secara intensif termasuk praktikal',
        'Menyediakan bilik seminar penghawa dingin dan kondusif untuk kursus',
        'Pakej penerbangan Malaysia Airline ataupun Saudi Airline',
        'Percuma bag bagasi, bag sandang, uncang kasut dan buku panduan Haji',
        'Ibadah Haji akan berlansung selama 40 hari',
        'Percuma Air zam-zam 5 liter dengan keizinan Kerajaan Arab Saudi',
    ],
},
{
    name: 'Badal Haji',
    // href: '#',
    priceMonthly: 'Serendah RM 3,000',
    // description: 'Serendah',
    features: [
        'Menyediakan perkhidmatan bagi melaksanakan badal Haji bagi orang yang telah meninggal dunia, orang yang uzur atau berpenyakit kronik',
        'Sijil Badal Haji dari Mekah akan diberikan kepada waris',
        'Waris juga akan diberi cenderahati sejadah, serban/tudung, kurma ajwa, minyak wangi, tasbih',
        'Percuma Air zam-zam 5 liter dengan keizinan Kerajaan Arab Saudi',
    ],
},
{
    name: 'Pelancongan Muslim',
    // href: '#',
    priceMonthly: '',
    // description: 'Serendah',
    features: [
        'Pakej pelancongan Muslim yang mesra Ibadah dan berkait dengan Sirah/Sejarah Islam',
        'Pakej pelancongan ke Seluruh Negeri dan Luar Negara.',
    ],
}]

</script>

<script>
import ImageSlider from '../Components/ImageSlider.vue'

export default{
	components: {
        ImageSlider
	},
	data() {
		return {
			current_link: 'utama',
			show_menu: false,
            images: [{ 
                id: '1',
                big: 'https://picsum.photos/200/300',
                thumb: 'https://picsum.photos/200/300'
            },
            { 
                id: '2',
                big: 'https://picsum.photos/200/400',
                thumb: 'https://picsum.photos/200/400'
            }]
        }
	},
	methods: {
		scrollToDiv(id) {
			this.$refs[id].scrollIntoView({ behavior: 'smooth', block: 'center' });
			this.current_link	=	id
		},
        goToMain(){
			this.current_link='utama'
        }
	},
	created(){
	}
}
</script>
