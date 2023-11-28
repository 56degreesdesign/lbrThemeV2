<script setup>
import {ref, defineProps, computed} from "vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination } from 'swiper/modules';
import SliderMobileNav from "./partials/news-slider/slider-mobile-nav.vue";
import YearBtn from "./partials/news-slider/year-btn.vue";
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

const changeYear = (delta) => {
        const years = termsData.value.map(term => term.name);
        const currentIndex = years.indexOf(selected.value);
        const newIndex = (currentIndex + delta + years.length) % years.length;
        selected.value = years[newIndex];
}

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
    <section class="bg-beige-light py-24 overflow-hidden lg:py-28">
        <div class="container grid-layout">
            <h3 class="col-span-full lg:col-start-1 lg:col-span-5 txt-h3 text-center lg:text-left">Resort news & EVENTS</h3>
            <div class="col-span-full lg:col-start-7 lg:col-span-full items-center gap-x-2.5 flex justify-center lg:justify-start my-7 lg:my-0">
                <YearBtn 
                    @click="select(term.name)" 
                    v-for="term in termsData" 
                    :year="term.name" 
                    :active="selected === term.name"
                />
            </div>
            <div class="col-span-full h-px w-full bg-black mb-7 lg:my-10 xl:mb-16 xl:mt-14"></div>
            <div class="flex col-start-1 col-span-2 gap-x-12 lg:mb-16 bg-beige-light z-10">
                <div class="swiper-next-el swiper-nav swiper-nav--small">NEXT</div>
                <div class="swiper-prev-el swiper-nav swiper-nav--small">PREVIOUS</div>
            </div>
            <div class="col-start-4 lg:col-start-12 col-span-1 bg-beige-light z-10 flex justify-end">
                <span class="swiper-pagination-el swiper-pagination-el--small">1/3</span>
            </div>
            <div class="col-span-full mt-3.5 lg:mt-0">
                <swiper
                    :slides-per-view="1"
                    :space-between="50"
                    :autoHeight="true"
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
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-[30px]">
                            <div v-if="slide.data.image" class="col-span-1">
                                <div class="w-full relative pb-[65.3409%]">
                                    <img class="absolute-full object-cover" :src="slide.data.image.url" alt="">
                                </div>
                            </div>
                            <div class="col-span-1 mt-7 lg:mt-0 lg:-translate-y-20">
                                <div v-if="slide.data.time && slide.data.date" class="flex flex-col mb-4 lg:mb-9 xl:mb-12">
                                    <span class="txt-h5">{{ slide.data.date }}</span>
                                    <span class="txt-h5">{{ slide.data.time }}</span>
                                </div>
                                <div class="lg:w-[83.333%]">
                                    <h3 class="txt-h3 mb-7 lg:mb-9 xl:mb-12 2xl:mb-14">{{ slide.title}}</h3>
                                    <a class="text-14 font-bold underline uppercase block mb-5 lg:mb-8 lg:text-16" :href="slide.data.file.url" download>{{slide.data.file.caption}}</a>
                                    <div class="wysiwyg" v-html="slide.data.content"></div>
                                    <div v-if="slide.data.button.link" class="mt-5 flex justify-center lg:justify-start lg:mt-m7 xl:mt-9">
                                        <a :class="{ 'bg-black': slide.data.button.color === 'btn--black', 'btn--orange': slide.data.button.color === 'orange' }" class="btn btn--mobile-narrow btn--desktop-medium" :href="slide.data.button.link.url">
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