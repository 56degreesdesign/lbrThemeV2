<script setup>
import {ref, computed, onMounted} from "vue";
import CategoryList from "./partials/category-list.vue";
import BoxPostPost from "./partials/box-post-post.vue";

const props = defineProps({
    posts: String,
    terms: String,
    pagination: [Number, String],
})

const postsData = ref(JSON.parse(props.posts));
const termsData = ref(JSON.parse(props.terms));

const postPerPage = Number(props.pagination);
const postCount = ref(postPerPage);
const currentCategory = ref(null);
const currentCategoryIndex = ref(null);
const currentPosts = ref(postsData.value);

const setCategory = (cat = null, index = null) => {
    currentCategory.value = cat;
    currentCategoryIndex.value = index;

    postCount.value = postPerPage;
    filterPosts();
}

const loadMore = () => {
    postCount.value += postPerPage;
    window.sessionStorage.setItem(`postPerPage-${props.postType}`, postCount.value);
}

const filterPosts = () => {
    let posts = [];

    if (currentCategory.value === null) {
        posts = postsData.value;
    }
    else {
        posts = postsData.value.filter(post => post.terms.some(term => term.term_id === currentCategory.value));
    }

    currentPosts.value = posts;
}

const printPosts = computed(() => {
    return currentPosts.value.slice(0, postCount.value);
})

const scrollTo = (target) => {
    const element = document.querySelector(target);
    const header = document.querySelector(".header");
    let offsetTop = element.getBoundingClientRect().top - window.scrollY;
    offsetTop = header ? (offsetTop - header.getBoundingClientRect().height) : offsetTop;

    window.scrollTo({
        top: offsetTop - 30,
        behavior: "smooth",
    })
}

// Load posts based on history
const loadHistoryPosts = () => {
    const postPerPage = Number(window.sessionStorage.getItem(`postPerPage-${props.postType}`));
    
    if ( !postPerPage ) return 0;
    
    const historyTraversal = ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
    if ( historyTraversal ) {
        postCount.value += postPerPage;
        window.sessionStorage.removeItem(`postPerPage-${props.postType}`);
    }
    else {
        window.sessionStorage.removeItem(`postPerPage-${props.postType}`);
    }
}

onMounted(() => {
    loadHistoryPosts();
})
</script>

<template>
    <category-list v-if="termsData">
        <template v-slot:content>
            <button class="bg-black px-4 pt-1 pb-1 text-beige font-bold uppercase rounded-full text-10 | lg:text-12" :class="{'bg-orange' : !currentCategory}" @click="setCategory(null)">All</button>

            <template v-for="(cat, index) in termsData" :key="`category-${cat.term_id}-${index}`">
                <button class="bg-black px-4 pt-1 pb-1 text-beige font-bold uppercase rounded-full text-10 md:pt-1.5 md:text-11 | lg:pt-1 lg:text-12" :class="{'bg-orange' : cat.term_id === currentCategory}" @click="setCategory(cat.term_id, index)">{{
                    cat.name }}</button>
            </template>
        </template>
    </category-list>

    <div class="col-span-full grid grid-cols-1 gap-y-11 mb-11 md:mb-28 md:grid-cols-2 md:gap-x-6 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-20 lg:mb-32 xl:mb-40">
        <BoxPostPost v-for="(post, index) in printPosts" :key="`box-post-post-${post.id}-${index}`" :post="post" class="load" />
    </div>
    
    <div class="col-span-full flex justify-center">
        <button v-if="postCount < currentPosts.length" @click="loadMore()" class="uppercase text-orange underline txt-h5">view more</button>
    </div>
</template>

<style lang="scss" scoped>
.load {
    animation: animLoad .5s ease both;
    
    @keyframes animLoad {
        from {
            opacity: 0;
            filter: blur(2px);
            visibility: hidden;
        }
        to {
            opacity: 1;
            filter: blur(0px);
            visibility: visible;
        }
    }
}
</style>