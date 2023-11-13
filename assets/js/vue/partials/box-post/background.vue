<script setup>
import ImageSrc from "../image-src.vue";

const props = defineProps({
    image: Object,
})
</script>

<template>
    <image-src :image="image" bg/>
    <div class="absolute-full bg-dark-gradient"></div>
</template>
