<template>
    <NavBar></NavBar>
    <slot></slot>
    <div class="container mx-auto px-4 mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">

    
<Box v-for="create_prod in create_prods" :key="create_prod.id">
    <List :create_prod = "create_prod" class="text-2xl font-bold">

    </List>

</Box>
</div>
    </div>
 
    <!-- <div v-for="create_prod in create_prods">{{create_prod.prod_name}}, {{ create_prod.brand  }}</div> -->

</template>

<script setup>
     import { Link } from '@inertiajs/vue3'
     import NavBar from '@/Pages/Layout/NavBar.vue';
     import List from '@/Pages/Layout/List.vue'
     import Box from '@/Pages/Layout/Box.vue'
    //  import Header from '@/Layout/Header.vue'

    defineProps(
        {
            create_prods:Array
        }
    )
</script>
