<template>
    <main>

        Hello
        {{x}}
    </main>
</template>

<script>

import Header from '@/Pages/Landing/Header.vue';
import Features from '@/Pages/Landing/Features.vue';

export default {
    props : ['x'],
    components : {Header, Features}
}

</script>
