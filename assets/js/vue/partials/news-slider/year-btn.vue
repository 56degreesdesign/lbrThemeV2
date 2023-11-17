<script setup>
const props = defineProps({
    year: String,
    active: Boolean
    
})
</script>
<template>
    <button :class="{ 'btn--active': props.active, 'btn--inactive': !props.active }" class="bg-orange text-beige-light text-center rounded-full font-bold text-10 py-1.5 w-[65px] lg:text-12">{{year}}</button>
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
</style>