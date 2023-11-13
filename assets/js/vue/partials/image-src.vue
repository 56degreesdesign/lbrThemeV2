<script setup>
const props = defineProps({
    image: Object,
    imageClass: String,
    bg: {
        type: Boolean,
        default: false,
    }
})
</script>

<template>
    <picture class="block" :class="{'absolute-full': bg}" v-if="image && image['mime_type'] !== 'image/svg+xml'">
        <source
            type="image/webp"
            :data-srcset="`${image.url}.webp 1440w,
                ${image.sizes.large}.webp 1024w,
                ${image.sizes.large}.webp 600w,
                ${image.sizes.medium_large}.webp 320w`">
        <source
            :type="`${image.mime_type}`"
            :data-srcset="`${image.url} 1440w,
                ${image.sizes.large} 1024w,
                ${image.sizes.large} 600w,
                ${image.sizes.medium_large} 320w`">
        <img class="lazyload lazyload-fade-in object-cover object-center"
             :class="[{'absolute-full': bg}, imageClass]"
             data-expand="250"
             :height="image.height"
             :width="image.width"
             :alt="`${image.alt}`">
    </picture>

    <picture class="block" v-else>
        <img class="lazyload lazyload-fade-in object-cover object-center"
             :class="[{'absolute-full': bg}, imageClass]"
             data-expand="250"
             :data-src="image.url"
             :src="image.url"
             :alt="`${image.alt}`">
    </picture>
</template>