<script setup>
import { ref, defineProps, computed } from "vue";

const props = defineProps({
    section: String
});

const sectionData = ref(JSON.parse(props.section));
const selected = ref('by_air');

const select = (option) => {
    selected.value = option;
};

</script>

<template>
   
    <section class="bg-beige pt-10 pb-20 md:pt-14 md:pb-32 lg:pt-20 lg:pb-44 xl:pt-24 xl:pb-52">
        <div class="container grid-layout">
            <div class="col-span-full flex flex-col pt-6 md:pt-10 lg:pt-0 lg:col-span-6 2xl:pt-14">
                <span v-if="sectionData.heading" class="txt-h4 mb-6">{{sectionData.heading}}</span>
                <p v-if="sectionData.content" class="text-17 mb-10 lg:mb-14 xl:mb-40 xl:w-1/2" v-html="sectionData.content"></p>
                <div class="flex gap-x-2.5 mb-10 md:mb-12 lg:gap-x-7 lg:mb-14 xl:mb-20">
                    <button @click="select('by_air')"
                            :class="{ 'btn--active': selected === 'by_air', 'btn--inactive': selected !== 'by_air' }"
                            class="btn">by air</button>
                    <button @click="select('by_car')"
                            :class="{ 'btn--active': selected === 'by_car', 'btn--inactive': selected !== 'by_car' }"
                            class="btn">by car</button>
                </div>
                <div v-if="selected === 'by_air'" class="grid grid-cols-2 gap-x-[30px] gap-y-8">
                    <div v-for="item in sectionData.by_air.directions" class="col-span-full md:col-span-1 directions-content border-t" v-html="item.content"></div>
                </div>
                <div v-if="selected === 'by_car'" v-for="item in sectionData.by_car.cities" class="flex justify-between py-2 items-center border-t last-of-type:border-b lg:px-7 lg:py-3">
                    <span class="txt-h3 font-Reckless uppercase">{{ item.name }}</span>
                    <span class="txt-1 font-bold uppercase">{{ item.time }}</span>
                </div>
            </div>
            <div class="col-span-full mt-7 -order-1 -mx-[25px] lg:mx-0 lg:order-1 lg:mt-0 lg:col-span-6">
                <div v-if="sectionData.image" class="relative pb-[133.33%]">
                    <img class="absolute-full object-cover" :src="sectionData.image.url" alt="">
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.btn {
    @apply uppercase px-10 pt-2 pb-1.5 text-15 w-full font-bold rounded-full hover:opacity-70 duration-300 cursor-pointer lg:w-[162px] leading-1.33;
    
    &--active {
        @apply bg-orange border border-transparent text-white;

    }
    
    &--inactive {
        @apply border border-orange text-orange;
    }
}
</style>