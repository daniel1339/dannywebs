
<script >
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import {  Link } from '@inertiajs/inertia-vue3';
export default {
  components: {JetApplicationMark,
  Link},
  data() {
    return {
      showMenu: false,
    };
  },
};

</script>
<template>
    
<nav class="bg-gradient-to-r  from-blue-700 to-blue-500  border-gray-200 px-2 sm:px-16 py-2.5  rounded   shadow-xl ">
  <div class="container flex flex-wrap justify-between  items-center mx-auto">
    
    
    <Link href="/" class="flex space-x-4   items-center ">
        <JetApplicationMark class="block  " />
        <a class="text-white font-semibold font-sans  sm:text-3xl text-xl" href="/">DannyWebs</a>
        
    </Link>
    
    
  <div @click="showMenu = !showMenu" class="flex  md:order-2">
      <a  type="button" href="tel:3024504528" class="text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="bi bi-phone"></i> Cel</a>
      <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div  :class="showMenu ? 'flex' : 'hidden'"  class="  justify-items-start md:justify-between justify-center items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
    <ul class="  space-x-8   jus sm:ml-10 flex">
     
      <li>
        <a href="https://github.com/daniel1339" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent  dark:border-gray-700"><i class="bi bi-github"></i> Github</a>
      </li>
     
      <li>
        <a href="https://www.linkedin.com/in/daniel-arguelles-mesa/" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 "><i class=" bi bi-linkedin"></i> Linkedin</a>
      </li>
      <li>
      </li>
    </ul>
  </div>
  </div>
</nav>

</template>

