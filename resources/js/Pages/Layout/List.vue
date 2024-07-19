<template>
      
         <div class="text-2xl font-bold"> Product Name
        <span> : {{ create_prod.prod_name	 }} </span>      
    </div> 
    <div class="text-2xl font-bold"> Brand Name
        <span> : {{  create_prod.brand	 }} </span>      
    </div> 
    <div class="text-2xl font-bold"> Category
        <span> : {{  create_prod.brand	 }} </span>      
    </div> 
    <div class="text-2xl font-bold"> Weight
        <span> : {{  create_prod.brand	 }} </span>      
    </div>
    <div class="text-2xl font-bold"> Price
        <span> : {{  create_prod.price	 }} </span>      
    </div> 
  
</template>

<script setup>
     import { Link } from '@inertiajs/vue3'
     import Box from '@/Pages/Layout/Box.vue';

   defineProps({
        create_prod: Object
     })
</script>