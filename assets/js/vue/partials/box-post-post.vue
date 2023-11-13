<script setup>
import { ref, onMounted } from 'vue';
import Background from "./box-post/background.vue";

const props = defineProps({
    post: Object,
})

const isOpen = ref(false);
const btn = ref();
const termsItem = ref([]);

const addRef = (el) => {
    if (el instanceof Element) {
        termsItem.value.push(el);
    }
}

const open = () => {
    isOpen.value = true;
    
    
    // console.log(this.ref.btn)

    btn.value.classList.add('opacity-0')

    setTimeout(() => {
        btn.value.classList.add('hidden')
        
        termsItem.value.forEach(term => {
            term.classList.remove('hidden');
            setTimeout(() => {
                term.classList.remove('opacity-0');
            }, 100)
        })
    }, 10)
}

onMounted(() => {
});
</script>

<template>
    <div class="col-span-1 flex flex-col">
        <div class="relative pb-[64.26%] mb-8 lg:mb-11">
            <a :href="post.link" title="Read more"><background v-if="post.image" :image="post.image"/></a>
        </div>
        <div class="col-span-full flex flex-wrap gap-1 mb-7 md:mb-8 lg:mb-9 post-terms">
            <div :ref="addRef" class="bg-black px-4 pt-1 pb-0.5 text-beige text-10 font-bold uppercase rounded-full transition-opacity duration-300 post-terms__item" :class="{ 'hidden opacity-0' : index > 1 }" v-for="(term, index) in post.terms" :key="term.name">{{ term.name }}</div>
            <div class="bg-black px-4 pt-1 pb-0.5 text-beige text-10 font-bold uppercase rounded-full cursor-pointer transition-opacity duration-300 post-terms__btn" 
                 aria-label="Show more category"
                 ref="btn"
                 @click="open" 
                 v-if="post.terms.length > 2">...</div>
        </div>
        <a :href="post.link" title="Read more"><h3 class="txt-h3 mb-6 !text-left !normal-case">{{ post.title }}</h3></a>
        <span class="text-17 font-bold">{{ post.date }}</span>
    </div>
</template>