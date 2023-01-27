
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
    <header id="header-wrap" class="relative">
        <!-- Navbar Start -->      
        <div class="navigation fixed top-0 left-0 w-full z-30 duration-300 bg-white shadow-md">
            <div class="container">
                <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                    <a class="navbar-brand w-24 h-18" href="/">
                      <img src="img/logo.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
  
                    <div class="navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                            <li class="nav-item">
                              <a class="page-scroll active" href="#utama">Utama</a>
                            </li>
                            <li class="nav-item">
                              <a class="page-scroll" href="#perkhidmatan">Perkhidmatan</a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="page-scroll" href="#feature">feature</a>
                            </li> -->
                            <li class="nav-item">
                              <a class="page-scroll" href="#galeri">Galeri</a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="page-scroll" href="#testimonial">Testimonial</a>
                            </li> -->
                            <li class="nav-item">
                              <a class="page-scroll" href="#pakej">Pakej</a>
                            </li>
                            <li class="nav-item">
                              <a class="page-scroll" href="#hubungi">Hubungi Kami</a>
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
      </header>
      <!-- Header Area wrapper End -->
  
      <!-- Hero Area Start -->
      <section id="utama" class="bg-orange-100 pt-48 pb-10">
        <div class="container">
          <div class="flex justify-between">
            <div class="w-full text-center">
              <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Promosi Harga Istimewa Sempena Tahun Baru
                <!-- <br class="hidden lg:block"> Built with TailwindCSS -->
            </h2>
              <!-- <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                <a href="#"
                  rel="nofollow"
                  class="btn">Download Now</a>
              </div> -->
              <!-- <div class="text-center wow fadeInUp" data-wow-delay="1.6s"> -->
                
                <VueCarousel :data="carousel_images" :controls="true"></VueCarousel>
                <!-- <img class="img-fluid mx-auto" src="img/main.jpg" alt=""> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </section>
      <!-- Hero Area End -->
  
      <!-- Services Section Start -->
      <section id="perkhidmatan" class="py-24">
        <div class="container">
          <div class="text-center">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Perkhidmatan Kami</h2>
          </div>
          <div class="flex flex-wrap">
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon text-5xl">
                  <i class="lni lni-cog"></i>
                </div>
                <div>
                  <h3 class="service-title">Web Development</h3>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                    incidunt laborum aspernatur...</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
                <div class="icon text-5xl">
                  <i class="lni lni-bar-chart"></i>
                </div>
                <div>
                  <h3 class="service-title">Graphic Design</h3>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                    incidunt laborum aspernatur...</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
                <div class="icon text-5xl">
                  <i class="lni lni-briefcase"></i>
                </div>
                <div>
                  <h3 class="service-title">Business Branding</h3>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                    incidunt laborum aspernatur...</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
                <div class="icon text-5xl">
                  <i class="lni lni-pencil-alt"></i>
                </div>
                <div>
                  <h3 class="service-title">Content Writing</h3>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                    incidunt laborum aspernatur...</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
                <div class="icon text-5xl">
                  <i class="lni lni-mobile"></i>
                </div>
                <div>
                  <!-- <h3 class="service-title">App Development</h3> -->
                  <p class="text-gray-600">Memberi perkhidmatan khidmat pelanggan dalam talian 24 jam</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
                <div class="icon text-5xl">
                  <i class="lni lni-layers"></i>
                </div>
                <div>
                  <h3 class="service-title">Digital Marketing</h3>
                  <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                    incidunt laborum aspernatur...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section End -->
  
      <!-- Team Section Start -->
      <section id="galeri" class="bg-orange-100 py-24 text-center">
        <div class="container">
          <div class="text-center">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Galeri</h2>
          </div>
          <div class="flex flex-wrap justify-center">
            <!-- Team Item Starts -->
            <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="team-item">
                <div class="team-img relative">
                  <img class="img-fluid" src="img/team/img1.jpg" alt="">
                  <div class="team-overlay">
                    <ul class="flex justify-center">
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-indigo-500">
                          <i class="lni lni-facebook-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-blue-400">
                          <i class="lni lni-twitter-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-red-500">
                          <i class="lni lni-instagram-original" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="text-center px-5 py-3">
                  <h3 class="team-name">John Doe</h3>
                  <p>UX UI Designer</p>
                </div>
              </div>
            </div>
            <!-- Team Item Ends -->
            <!-- Team Item Starts -->
            <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="team-item">
                <div class="team-img relative">
                  <img class="img-fluid" src="img/team/img2.jpg" alt="">
                  <div
                    class="team-overlay">
                    <ul class="flex justify-center">
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-indigo-500">
                          <i class="lni lni-facebook-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-blue-400">
                          <i class="lni lni-twitter-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-red-500">
                          <i class="lni lni-instagram-original" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="text-center px-5 py-3">
                  <h3 class="team-name">Sarah Doe</h3>
                  <p>Front-End Developer</p>
                </div>
              </div>
            </div>
            <!-- Team Item Ends -->
            <!-- Team Item Starts -->
            <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
              <div class="team-item">
                <div class="team-img relative">
                  <img class="img-fluid" src="img/team/img3.jpg" alt="">
                  <div class="team-overlay">
                    <ul class="flex justify-center">
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-indigo-500">
                          <i class="lni lni-facebook-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-blue-400">
                          <i class="lni lni-twitter-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-1">
                        <a href="#" class="social-link hover:bg-red-500">
                          <i class="lni lni-instagram-original" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="text-center px-5 py-3">
                  <h3 class="team-name">Rob Hope</h3>
                  <p>Front-end Developer</p>
                </div>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </section>
      <!-- Team Section End -->
  
      <!-- Clients Section Start -->
      <!-- <div id="clients" class="py-16 bg-blue-100">
        <div class="container">
          <div class="text-center">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
          </div>
          <div class="flex flex-wrap justify-center">
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
              <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
                <img class="client-logo" src="img/clients/img1.svg" alt="">
              </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
              <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
                <img class="client-logo" src="img/clients/img2.svg" alt="">
              </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
              <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
                <img class="client-logo" src="img/clients/img3.svg" alt="">
              </div>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/4">
              <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                <img class="client-logo" src="img/clients/img4.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Clients Section End -->
  
      <!-- Testimonial Section Start -->
      <!-- <section id="testimonial" class="py-24 bg-gray-800">
        <div class="container">
          <div class="flex justify-center mx-3">
            <div class="w-full lg:w-7/12">
              <div id="testimonials" class="testimonials">
                <div class="item focus:outline-none">
                  <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                    <div class="text-center">
                      <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                    </div>
                    <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                      <img class="rounded-full p-2 w-full" src="img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="mb-2">
                      <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Fajar</h2>
                      <h3 class="font-medium text-white text-sm">Euphoriya</h3>
                    </div>
                  </div>
                </div>
                <div class="item focus:outline-none">
                  <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                    <div class="text-center">
                      <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                    </div>
                    <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                      <img class="rounded-full p-2 w-full" src="img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="mb-2">
                      <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Mila</h2>
                      <h3 class="font-medium text-white text-sm">PageBulb</h3>
                    </div>
                  </div>
                </div>
                <div class="item focus:outline-none">
                  <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                    <div class="text-center">
                      <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                    </div>
                    <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                      <img class="rounded-full p-2 w-full" src="img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="mb-2">
                      <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Rob</h2>
                      <h3 class="font-medium text-white text-sm">OnePageLove</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Testimonial Section End -->  
  
      <!-- Pricing section Start --> 
      <section id="pakej" class="py-24 bg-gray-800">
        <div class="container">
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
                        <h3 class="text-sm font-medium text-gray-900">Harga Termasuk</h3>
                        <ul role="list" class="mt-6 space-y-4">
                        <li v-for="feature in tier.features" :key="feature" class="flex space-x-3">
                            <CheckIconMini class="h-5 w-5 flex-shrink-0 text-green-500" aria-hidden="true" />
                            <span class="text-sm text-gray-500">{{ feature }}</span>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- Pricing Table Section End -->
  
      <!-- carousel-area Section Start -->
      <!-- <section class="carousel-area bg-gray-800 py-32">
        <div class="container">
          <div class="flex">
            <div class="w-full relative">
              <div class="portfolio-carousel">
                <div>
                  <img class="w-full" src="img/slide/img1.jpg" alt="">
                </div>
                <div>
                  <img class="w-full" src="img/slide/img2.jpg" alt="">
                </div>
                <div>
                  <img class="w-full" src="img/slide/img3.jpg" alt="">
                </div>
                <div>
                  <img class="w-full" src="img/slide/img4.jpg" alt="">
                </div>
                <div>
                  <img class="w-full" src="img/slide/img5.jpg" alt="">
                </div>
                <div>
                  <img  class="w-full" src="img/slide/img6.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- carousel-area Section End -->
  
      <!-- Subscribe Section Start -->
      <!-- <section id="Subscribes" class="text-center py-20 bg-blue-100">
        <div class="container">
          <div class="flex justify-center mx-3">
            <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
              <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
              <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Existing customized ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
              <form for="">
                <div class="wow fadeInDown" data-wow-delay="0.3s">
                  <input type="Email" class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Email Address">
                  <button class="border-0 bg-blue-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75" type="submit"><i class="lni lni-arrow-right"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Subscribe Section End -->
  
  
      <!-- Feature Section Start -->
      <div id="feature" class="bg-orange-100 py-10">
        <div class="container">
          <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2">
              <div class="flex flex-wrap justify-center">
                <div class="w-[150px] h-2/3 sm:w-1/2">
                  <img src="img/pengarah-syarikat.png" alt="..." class="shadow-lg rounded-full max-w-full h-auto align-middle border-none" />
                </div>
              </div>
              <!-- <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                <img src="img/pengarah-syarikat.png" alt="">
              </div> -->
            </div>
            <div class="w-full lg:w-1/2 lg:pt-10">
              <div class="mb-5 lg:mb-0">
                <!-- <h2 class="mb-12 section-heading wow fadeInDown text-2xl" data-wow-delay="0.3s">Pengarah Syarikat</h2> -->
                
                <div class="flex flex-wrap">
                  <div class="w-full sm:w-4/5 lg:w-4/5">
                    <div class="my-3 space-y-12">
                      <!-- <div class="icon text-4xl">
                        <i class="lni lni-layers"></i>
                      </div> -->
                      <div class="features-content">
                        <p class="text-xl text-gray-700"> "Kami menyediakan perkhidmatan yang lengkap dan selesa untuk jemaah umrah atau haji."</p>
                      </div>
                      <div class="features-content">
                        <p class="text-xl text-gray-700"> "Harga yang ditawarkan sangat mampu milik."</p>
                      </div>
                    </div>
                    <div class="mt-10">
                      <h4 class="text-xl font-bold">Mohd Nor Bin Esmin</h4>
                      <h3 class="mb-12 text-sm font-semibold italic">Pengarah Syarikat</h3>
                    </div>
                  </div>
                  <!-- <div class="w-full sm:w-1/2 lg:w-1/2">
                    <div class="m-3">
                      <div class="icon text-4xl">
                        <i class="lni lni-gift"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="feature-title">Free to Use</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 lg:w-1/2">
                    <div class="m-3">
                      <div class="icon text-4xl">
                        <i class="lni lni-laptop-phone"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="feature-title">Fully Responsive</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 lg:w-1/2">
                    <div class="m-3">
                      <div class="icon text-4xl">
                        <i class="lni lni-leaf"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="feature-title">Easy to Customize</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Feature Section End -->
  
      <!-- Contact Section Start -->
      <section id="hubungi" class="py-10">    
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
                      <span href="#" class="block">+60 18-278 0566</span>
                      <span href="#" class="block">+60 12-761 0543</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </section>
      <!-- Contact Section End -->
    
      <!-- Map Section Start -->
      <!-- <section id="google-map-area">
          <div class="mx-6 mb-6">
              <div class="flex">
                  <div class="w-full">
                      <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
                  </div>
              </div>
          </div>
      </section> -->
      <!-- Map Section End -->
  
        <!-- Footer Section Start -->
      <footer id="footer" class="bg-gray-800 py-10">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="mx-3">
                <div class="footer-logo mb-3">
                  <!-- <img src="img/logo.svg" alt=""> -->
                  <span class="text-white text-xl">Mohd Nor Travel & Tours</span>
                </div>
                <div class="footer-logo mb-3">
                  <span class="text-white text-md">Travel Agency</span>
                </div>
                <p class="text-gray-300">Pelancongan Muslim (Outbound & Inbound)
                    Umrah & Badal Haji</p>
              </div>
            </div>
            <!-- <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="mx-3 mb-8">
                <h3 class="font-bold text-xl text-white mb-5">Company</h3>
                <ul>
                  <li><a href="#" class="footer-links">Press Releases</a></li>
                  <li><a href="#" class="footer-links">Mission</a></li>
                  <li><a href="#" class="footer-links">Strategy</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="mx-3 mb-8">
                <h3 class="font-bold text-xl text-white mb-5">About</h3>
                <ul>
                  <li><a href="#" class="footer-links">Career</a></li>
                  <li><a href="#" class="footer-links">Team</a></li>
                  <li><a href="#" class="footer-links">Clients</a></li>
                </ul>
              </div>
            </div> -->
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
                  <!-- <li class="mx-2">
                    <a href="#"
                      class="footer-icon hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li> -->
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
    name: 'Pakej Umrah A',
    // href: '#',
    priceMonthly: 7000,
    description: 'Serendah',
    features: [
        'Pengurusan Visa Umrah',
        'Sling Beg & Stretchable Luggage Cover',
        'Penginapan Hotel di Mekah dan Madinah',
        'Insuran Takaful Berkelompok'
    ],
  },
  {
    name: 'Pakej Umrah B',
    // href: '#',
    priceMonthly: 8000,
    description: 'Serendah',
    features: [
        'Pengurusan Visa Umrah',
        'Sling Beg & Stretchable Luggage Cover',
        'Penginapan Hotel di Mekah dan Madinah',
        'Insuran Takaful Berkelompok'
    ],
  },
  {
    name: 'Pakej Umrah C',
    // href: '#',
    priceMonthly: 9000,
    description: 'Serendah',
    features: [
        'Pengurusan Visa Umrah',
        'Sling Beg & Stretchable Luggage Cover',
        'Penginapan Hotel di Mekah dan Madinah',
        'Insuran Takaful Berkelompok'
    ],
  },
  {
    name: 'Pakej Umrah D',
    // href: '#',
    priceMonthly: 10000,
    description: 'Serendah',
    features: [
        'Pengurusan Visa Umrah',
        'Sling Beg & Stretchable Luggage Cover',
        'Penginapan Hotel di Mekah dan Madinah',
        'Insuran Takaful Berkelompok'
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
            carousel_images: [
                '<img src="https://picsum.photos/seed/picsum/1920/300">',
                '<img src="https://picsum.photos/seed/picsum/1920/300">',
                '<img src="https://picsum.photos/seed/picsum/1920/300">',
            ],
        }
    },
}
</script>

