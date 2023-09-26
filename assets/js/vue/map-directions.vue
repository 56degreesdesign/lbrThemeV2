<script setup>
import { ref, defineProps } from "vue";

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
   
    <section class="bg-beige pt-24 pb-52">
        <div class="container grid-layout">
            <div class="col-span-6 flex flex-col pt-14">
                <span v-if="sectionData.heading" class="txt-h4 mb-6">{{sectionData.heading}}</span>
                <p v-if="sectionData.content" class="w-1/2 text-17 mb-40" v-html="sectionData.content"></p>
                <div class="flex gap-x-7 mb-20">
                    <button @click="select('by_air')"
                            :class="{ 'btn--active': selected === 'by_air', 'btn--inactive': selected !== 'by_air' }"
                            class="btn">by air</button>
                    <button @click="select('by_car')"
                            :class="{ 'btn--active': selected === 'by_car', 'btn--inactive': selected !== 'by_car' }"
                            class="btn">by car</button>
                </div>
                <div v-if="selected === 'by_air'" class="grid grid-cols-2 gap-x-[30px] gap-y-8">
                    <div v-for="item in sectionData.by_air.directions" class="col-span-1 directions-content border-t" v-html="item.content"></div>
                </div>
                <div v-if="selected === 'by_car'" v-for="item in sectionData.by_car.cities" class="flex justify-between px-7 py-3 items-center border-t last-of-type:border-b">
                    <span class="text-35 font-Reckless uppercase">{{ item.name }}</span>
                    <span class="text-18 font-bold uppercase">{{ item.time }}</span>
                </div>
            </div>
            <div class="col-span-6">
                <div v-if="sectionData.image" class="relative pb-[133.33%]">
                    <img class="absolute-full object-cover" :src="sectionData.image.url" alt="">
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.btn {
    @apply uppercase px-12 pt-2.5 pb-2 text-15 w-fit font-bold rounded-full hover:opacity-70 duration-300 cursor-pointer;
    
    &--active {
        @apply bg-orange border border-transparent text-white;

    }
    &--inactive {
        @apply border border-orange text-orange;

    }
}
</style>