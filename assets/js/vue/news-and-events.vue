<script setup>
import {ref, defineProps, computed} from "vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';

const modules = [Pagination, Navigation]

const props = defineProps({
    posts: String,
    terms: String
});

const postsData = ref(JSON.parse(props.posts));
const termsData = ref(JSON.parse(props.terms));

const currentYear = new Date().getFullYear();
const selected = ref(currentYear.toString());

const select = (option) => {
    selected.value = option
};

const slides = computed(() => {
    let filtered = [];
    if (selected.value.length > 0) {
        filtered = postsData.value.filter((post) =>
            post.terms.every((term) => selected.value.includes(term.slug))
        );
    } 
    return filtered;
})
</script>

<template>
    <section class="bg-beige-light py-28 overflow-hidden">
        <div class="container grid-layout">
            <h3 class="col-start-1 col-span-4 txt-h3">Resort news & EVENTS</h3>
            <div class="col-start-7 col-span-full flex items-center gap-x-2.5">
                <button 
                    :class="{ 'btn--active': selected === term.name, 'btn--inactive': selected !== term.name }" 
                    v-for="term in termsData" @click="select(term.name)" 
                    class=" btn">
                    {{term.name}}
                </button >
            </div>
            <div class="col-span-full h-px w-full bg-black mb-16 mt-14"></div>
            <div class="col-start-1 col-span-2 flex gap-x-12 mb-16 bg-beige-light z-10">
                <div class="swiper-next-el mb-4 swiper-nav">NEXT</div>
                <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
            </div>
            <div class="col-start-12 col-span-1 bg-beige-light z-10">
                <span class="txt-h5 swiper-pagination-el">1/3</span>
            </div>
            <div class="col-span-full">
                <swiper
                    :slides-per-view="1"
                    :space-between="50"
                    :modules="modules"
                    :loop="true"
                    :loopAdditionalSlides="2"
                    :pagination="{
                      type: 'fraction',
                      el: '.swiper-pagination-el',
                    }"
                    :navigation="{
                      nextEl: '.swiper-next-el',
                      prevEl: '.swiper-prev-el',
                    }"
                >
                    <swiper-slide v-for="slide in slides">
                        <div class="grid grid-cols-2 gap-x-[30px]">
                            <div v-if="slide.data.image" class="col-span-1">
                                <div class="w-full h-full relative pb-[65.3409%]">
                                    <img class="absolute-full object-cover" :src="slide.data.image.url" alt="">
                                </div>
                            </div>
                            <div class="col-span-1 -translate-y-[109px]">
                                <div v-if="slide.data.time && slide.data.date" class="flex flex-col mb-12">
                                    <span class="txt-h5">{{ slide.data.date }}</span>
                                    <span class="txt-h5">{{ slide.data.time }}</span>
                                </div>
                                <div class="w-[83.333%]">
                                    <h3 class="txt-h3 mb-14">{{ slide.title}}</h3>
                                    <a class="text-16 font-bold underline uppercase block mb-8" :href="slide.data.file.url" download>{{slide.data.file.caption}}</a>
                                    <div class="wysiwyg" v-html="slide.data.content"></div>
                                    <div v-if="slide.data.button.link" class="mt-9">
                                        <a :class="{ 'bg-black': slide.data.button.color === 'black', 'bg-orange': slide.data.button.color === 'orange' }" class="uppercase px-5 lg:px-7 pt-2.5 pb-2 text-15 w-fit text-center text-white font-bold rounded-full hover:opacity-70 duration-300" :href="slide.data.button.link.url">
                                            {{slide.data.button.link.title}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.btn {
    @apply px-5 bg-black rounded-full py-1.5 text-12 font-bold text-beige-light hover:opacity-70 duration-300;

    &--active {
        @apply bg-orange;
    }
    &--inactive {
        @apply bg-black;
    }
}
.swiper {
    overflow: visible !important;
    overflow-x: clip !important;
}
.swiper-button-lock {
    display: block !important;
}
</style>