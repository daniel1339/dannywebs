<script setup >
import Menu from '@/Components/Menu.vue'
import Footer from '@/Components/Footer.vue'

import { Head} from '@inertiajs/inertia-vue3'
import {Swiper, SwiperSlide} from 'swiper/vue'
import {Navigation, Pagination,A11y, Virtual} from 'swiper'
import 'swiper/css'
import 'swiper/css/bundle'

const props = defineProps({
  
  welcome: Array,
  images: Array
})
</script>

<template>
    <div >
        <Menu />
        <div class="bg-gray-300 max-w-6xl mx-4 lg:mx-30 xl:mx-48 md:mx-24 sm:px-6 lg:px-8">
          <div class="justify-center mt-10">
            <Swiper  :slides-per-view="1" :space-between="10" :modules="[Navigation, A11y, Pagination, Virtual]" 
                navigation :pagination="{clickable: true, dinamycBullets: true}"  grab-cursor virtual>
                <SwiperSlide   v-for="image in images" :key="image.id">
                    <img class="lazy" :src="image.image" alt="s"/>
                </SwiperSlide>

            </Swiper>
          </div>
          <h1 class="text-2xl font-semibold text-center my-5">{{welcome.name}}</h1>
          <p class="text-center text-xl font-medium mb-5">{{welcome.description}}</p>
          <p class="text-center text-md font-medium mb-10">{{welcome.software}}</p>
        </div>
        <Footer/>
    </div>
</template>
