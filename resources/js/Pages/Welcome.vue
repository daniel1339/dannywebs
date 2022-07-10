<script setup>
import Menu from '@/Components/Menu.vue'
import Footer from '@/Components/Footer.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';



const props = defineProps({
  
  rooms: Array
})
</script>

<template>
<div class="bg-gray-300 h-full">
    <Menu /> 
    <div class="bg-gray-300 max-w-6xl mx-auto sm:px-6 lg:px-8">
            
        
        <div class="sm:mt-8 bg-white justify-end align-bottom dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="px-6 md:pt-6 text-2xl font-bold  ">Hola mi nombre es Daniel Arguelles:  </h1>
            <div class="grid lg:grid-cols-2 grid-cols-1 p-6 ">
                <div >
                    
                    <img class="rounded shadow-xl px-12 lg:px-0 lg:pb-0 pb-4" src="../../../public/dist/IMG_4853.jpeg" alt="">
                    
                </div>
                <p class="px-6 font-semibold text-lg  ">soy desarrollador web experto en laravel Php y Javascript me apasiona todo el desarrollo de una pagina web desde crear y diseñar un backend hasta darle acabados a un frontend, me gusta aprender y compartir conocimientos quisiera trabajar para una empresa que me permita seguir creciendo como profesional y y desarrollar mi carrera como ingeniero</p>
            </div>
                
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                            
                        <div class="ml-4 mt-2 text-lg leading-7 font-semibold">
                            <p class=" text-gray-900 dark:text-white"><i class="bi bi-award-fill"></i> Experiencia</p>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Programador full stack  con más de 1 año de experiencia como desarrollador web de proyectos PHP-mySQL Laravel/Jetstream Vue.js/Nuxt.js. En la actualidad estoy buscando un trabajo que me ayude a seguir ampliando mi experiencia y que me permita asumir nuevas responsabilidades.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t  mt-1 border-gray-200 font-semibold text-lg dark:border-gray-700 md:border-t-0 md:border-l">
                    <i class="text-xl bi bi-mortarboard-fill"></i> Educación
                    <div class="flex items-center">
                            
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="https://drive.google.com/file/d/1GbGJtMtxHbU9ieKTMDG3yZrdMioFw5GF/view" class="underline text-center text-gray-900 dark:text-white">Universidad autónoma de Bucaramanga</a>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Tecnico laboral, Programación informática, aplicaciones web: Java, Python  Javascript, Scrum, Git                            
                            </div>
                        </div>

                        <div class="flex items-center">
                            
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://www.udemy.com/certificate/UC-3b3f7f20-dca6-4839-b1c7-b86201668b21/" class="underline text-gray-900 dark:text-white">Udemy</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    
                                Crea un Ecommerce con Laravel, Livewire, Tailwind y Alpine                           
                            </div>
                        </div>

                    </div>

                    
                </div>
        </div>




            <div class="  
             my-10 justify-items-center  grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2" >
                
  <div class="rounded-sm  m-5  shadow-lg bg-white max-w-sm" v-for="room in rooms" :key="room.id">
    
      <img class="rounded-t-lg" :src="room.image" alt=""/>
   
    <div class="p-6">
      <h5 class="text-gray-900 text-xl font-medium mb-2">{{room.name}}</h5>
      <p class="text-gray-700 text-base mb-4"> {{room.description.substring(0,80)+".."}} <br>
        
      </p>
      <a type="button" :href="route('welcome.show', room.id)" name="habitaciones" class=" inline-block px-6 py-2.5 bg-sky-600 text-white hover:text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Conocer mas</a>
    </div>
    </div>
</div>

           
        </div>
        <Footer/>
    </div>
</template>

