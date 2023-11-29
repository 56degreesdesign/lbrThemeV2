<script setup>
import { ref, defineProps, computed } from "vue";

const props = defineProps({
    section: String
});

const sectionData = ref(JSON.parse(props.section));
const selected = ref('one_story');
const activeImage = computed(() => sectionData.value.plans[selected.value]);

const select = (floorType) => {
    selected.value = floorType;
};

</script>

<template>
        <div class="relative">
            <div class="w-1/2 bg-beige absolute top-0 left-0 h-full -z-10 hidden xl:block"></div>
            <div class="w-1/2 bg-beige-light absolute top-0 right-0 h-full -z-10 hidden xl:block"></div>
            <div class="grid grid-cols-2 max-w-[1920px] mx-auto z-10 lg:h-full">
                <div class="col-span-full bg-beige pt-7 md:pt-14 md:pb-10 lg:col-span-1 lg:pr-0 xl:pt-28 xl:pb-14">
                    <div class="flex justify-center lg:px-[5%] lg:mb-10 xl:mb-14">
                        <div class="w-full relative pb-[123.93%]">
                            <img v-if="activeImage" class="absolute-full object-cover" :src="activeImage.image.url" alt="">
                            <div v-else class="absolute-full bg-beige flex items-center justify-center">No Image</div>
                        </div>
                    </div>
                    <div class="hidden lg:flex flex-col gap-y-4 gap-x-8 items-center 2xl:flex-row lg:justify-center">
                        <button v-if="sectionData.plans.one_story" @click="select('one_story')" :class="{ 'btn-floors--active': selected === 'one_story', 'btn-floors--inactive': selected !== 'one_story' }" class="btn-floors">
                            one story</button>
                        <button v-if="sectionData.plans.split_level" @click="select('split_level')" :class="{ 'btn-floors--active': selected === 'split_level', 'btn-floors--inactive': selected !== 'split_level' }" class="btn-floors">
                            ONE STORY SPLIT-LEVEL</button>
                        <button v-if="sectionData.plans.two_story" @click="select('two_story')" :class="{ 'btn-floors--active': selected === 'two_story', 'btn-floors--inactive': selected !== 'two_story' }" class="btn-floors">
                            two story</button>
                    </div>
                </div>

                <div class="col-span-full bg-beige lg:bg-beige-light lg:col-span-1">
                    <div class="flex flex-col items-center px-[25px] pb-24 md:pb-28 md:px-10 lg:pb-10 lg:px-0 lg:h-full lg:justify-between xl:pb-14">
                        <div class="hidden lg:block text-20 font-bold text-center mt-14">FLOORPLANS</div>
                        <div>
                            <h3 class="txt-h2 text-center mb-7 md:mb-8 lg:mb-10 xl:mb-20" v-html="activeImage.heading">
                            </h3>
                            <p class="txt-h5 text-center mb-12 lg:mb-0" v-html="activeImage.content"></p>
                        </div>
                        <div class="flex flex-col gap-y-4 items-center w-full">
                            <a class="btn btn--orange btn--mobile-wide btn--desktop-p-small" :href="sectionData.download_1.url" download>
                                {{ sectionData.download_1.title }}</a>
                            <a class="btn btn--orange btn--mobile-wide btn--desktop-p-small" :href="sectionData.download_2.url" download>
                                {{ sectionData.download_2.title }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</template>

<style lang="scss" scoped>
.btn-floors {
    @apply uppercase px-4 pt-2 pb-1.5 text-15 font-bold rounded-full duration-300 cursor-pointer leading-1.33 w-fit min-w-[235px] hover:bg-orange hover:text-beige-light hover:border-transparent;

    &--active {
        @apply bg-black border border-transparent text-beige-light;
    }

    &--inactive {
        @apply border border-black text-black;
    }
}
</style>