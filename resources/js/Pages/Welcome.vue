<template>
    <swiper
        :slides-per-view="1"
        @swiper="onSwiper"
        navigation
        :pagination="{ clickable: true }"
        @slideChange="onSlideChange"
    >
        <swiper-slide> <div class="slide slide-1">Slide 1</div> </swiper-slide>
        <swiper-slide> <div class="slide slide-2">Slide 2</div> </swiper-slide>
        <swiper-slide> <div class="slide slide-3">Slide 3</div> </swiper-slide>
    </swiper>
    <button @click="swiper.slideNext()">Slide to the next slide</button>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide, useSwiper } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const swiper = useSwiper();
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            swiper,
            onSwiper,
            onSlideChange,
        };
    },
};
</script>

<style>
.slide {
    min-height: 500px;
}

.slide.slide-1 {
    background: red;
}
.slide.slide-2 {
    background: green;
}
.slide.slide-3 {
    background: blue;
}
</style>
