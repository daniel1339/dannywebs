<script setup >
import Menu from '@/Components/Menu.vue'
import Footer from '@/Components/Footer.vue'

import { Head} from '@inertiajs/inertia-vue3'
import {Swiper, SwiperSlide} from 'swiper/vue'
import {Navigation, Pagination,A11y, Virtual} from 'swiper'
import 'swiper/css'
import 'swiper/css/bundle'

const props = defineProps({
  
  cost: Array,
  welcome: Array,
  images: Array
})
</script>

<template>
    <div >
        <Menu />
        <div  class="bg-gray-300 max-w-6xl mx-4 lg:mx-30 xl:mx-48 md:mx-24 sm:px-6 lg:px-8">
          <div class="justify-center mt-10">
            <Swiper  :slides-per-view="1" :space-between="10" :modules="[Navigation, A11y, Pagination, Virtual]" 
                navigation :pagination="{clickable: true, dinamycBullets: true}"  grab-cursor virtual>
                <SwiperSlide   v-for="image in images" :key="image.id">
                    <img class="lazy" :src="image.image" alt="s"/>
                </SwiperSlide>

            </Swiper>
          </div>
          <h1 class="text-2xl font-semibold text-center my-5">{{welcome.name}}</h1>
          <p v-if="!welcome.id === 5" class="text-center text-xl font-medium mb-5">{{welcome.description}}</p>
          <p v-if="!welcome.id === 5" class="text-center text-md font-medium mb-10">{{welcome.software}}</p>
          
        </div>

        <div v-if="welcome.id === 5">
          
          <section  class="bg-gray-300 grid grid-cols-1 md:grid-cols-2 px-5 md:px-20 py-5  ">
            <lite-youtube videoid="GryKnc8TJYc" class=" rounded"></lite-youtube>
            <p class="text-start text-md pt-5 md:pt-0 px-5 font-semibold mb-10">
              Comercio electrónico ajustado a la lógica de su negocio, base de datos expandible, un diseño tal cual lo requiera, navegación y experiencia de usuario para sus clientes, optimización en los motores de busqueda para cada pagina y  producto que vaya agregando. <br > <br> Autoadministrable, le facilitara agregar productos y distintas categorias, todo lo que su negocio requiera para que no dependa de complicados programas que tarde o temprano le traeran mas costos. La cantidad de productos que podria manejar es infinita y el pago por esta clase de software se hace solo una vez no se adapte a las opciones que enuentre en el mercado, nosotros nos adaptamos a usted y su negocio. 
              <br> <br> 
              Costo: desde ${{cost}} pesos colombianos <br>Según la personalización podria variar su costo.
            </p> 

            
          </section>
          <p  class="text-center text-md font-medium mb-5">{{welcome.software}}</p>
        </div>
        <Footer/>
    </div>
</template>
