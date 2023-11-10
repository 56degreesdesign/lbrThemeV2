<script setup>
import { ref, defineProps } from "vue";
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';



const props = defineProps({
    posts: String,
    terms: String
});


const postsData = ref(JSON.parse(props.posts));
const termsData = ref(JSON.parse(props.terms));

const slides = ref(null)

const selected = ref('2023');
const select = (option) => {
    selected.value = option
};

const onSwiper = (swiper) => {
    console.log(swiper);
};
const onSlideChange = () => {
    console.log('slide change');
};


</script>

<template>
    {{slides}}
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
                    @swiper="onSwiper"
                    @slideChange="onSlideChange"
                >
                    <swiper-slide class="grid grid-cols-2 gap-x-[30px]">
                        <div class="col-span-1">
                            <div class="w-full h-full relative pb-[65.3409%]">
                                <div class="bg-black absolute-full"></div>
                            </div>
                        </div>
                        <div class="col-span-1 -translate-y-[109px]">
                            <div class="flex flex-col">
                                <span class="txt-h5">March 16, 2023</span>
                                <span class="txt-h5">5:00 - 7:00PM</span>
                            </div>
                            <div class="">
                                <h3 class="txt-h3 mb-16">RESORT PRESENTATION <br> and SITE TOUR</h3>
                                <p class="w-[83.333%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non vestibulum neque.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus blandit sed sem ornare vestibulum. Proin vel enim sit amet odio finibus porta. Praesent a lorem sit amet nunc tempus consequat et vitae lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec posuere lorem ex, non vestibulum metus tristique quis. In nisl purus, viverra at egestas non, molestie sed tellus. Nulla id ligula malesuada, aliquam turpis vel, semper lacus.
                                </p>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="grid grid-cols-2 gap-x-[30px]">
                        <div class="col-span-1">
                            <div class="w-full h-full relative pb-[65.3409%]">
                                <div class="bg-black absolute-full"></div>
                            </div>
                        </div>
                        <div class="col-span-1 -translate-y-[109px]">
                            <div class="flex flex-col">
                                <span class="txt-h5">March 16, 2023</span>
                                <span class="txt-h5">5:00 - 7:00PM</span>
                            </div>
                            <div class="">
                                <h3 class="txt-h3 mb-16">RESORT PRESENTATION <br> and SITE TOUR</h3>
                                <p class="w-[83.333%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non vestibulum neque.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus blandit sed sem ornare vestibulum. Proin vel enim sit amet odio finibus porta. Praesent a lorem sit amet nunc tempus consequat et vitae lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec posuere lorem ex, non vestibulum metus tristique quis. In nisl purus, viverra at egestas non, molestie sed tellus. Nulla id ligula malesuada, aliquam turpis vel, semper lacus.
                                </p>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="grid grid-cols-2 gap-x-[30px]">
                        <div class="col-span-1">
                            <div class="w-full h-full relative pb-[65.3409%]">
                                <div class="bg-black absolute-full"></div>
                            </div>
                        </div>
                        <div class="col-span-1 -translate-y-[109px]">
                            <div class="flex flex-col">
                                <span class="txt-h5">March 16, 2023</span>
                                <span class="txt-h5">5:00 - 7:00PM</span>
                            </div>
                            <div class="">
                                <h3 class="txt-h3 mb-16">RESORT PRESENTATION <br> and SITE TOUR</h3>
                                <p class="w-[83.333%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non vestibulum neque.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus blandit sed sem ornare vestibulum. Proin vel enim sit amet odio finibus porta. Praesent a lorem sit amet nunc tempus consequat et vitae lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec posuere lorem ex, non vestibulum metus tristique quis. In nisl purus, viverra at egestas non, molestie sed tellus. Nulla id ligula malesuada, aliquam turpis vel, semper lacus.
                                </p>
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
    //@apply uppercase px-10 pt-2.5 pb-2 text-15 w-fit font-bold rounded-full hover:opacity-70 duration-300 cursor-pointer lg:px-12;
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
</style>