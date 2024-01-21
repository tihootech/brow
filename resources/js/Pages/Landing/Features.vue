<script setup>
    import featuresImage from "@/../img/features.png";
</script>

<template>
    
    <main>

        <h2 class="features-title">
            Featured contentFeatured content Featured contentFeat
        </h2>

        <section class="intro">
            <img :src="featuresImage" alt="features">
            <p>
                The perfect solution for companies of all sizes to sizes to get films right for their different purposes.The perfect solution for companies of all sizes to get films right for their different purposes.
            </p>
        </section>

        <section>
            <h3> Featured content </h3>
            <p>
                The perfect solution for companies of all sizes to get films right for their different purposes.The perfect solution for companies of all sizes to get films right for their different purposes.The perfect solution for companies of all sizes to get films right for their different purposes.The perfect solution for companies of all sizes to get films right for their different purposes.The perfect solution for companies of all sizes to get films right for their different purposes.
            </p>
        </section>

    </main>

</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

.features-title {
    color: var(--green);
    font-weight: 800;
    font-size: 50px;
    line-height: 56px;
    text-align: center;
    margin-bottom: 16px;
}

.intro {

    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    max-width: 660px;
    margin: auto;

    img {
        width: 100%;
        border-radius: 16px;
    }

    p {
        color: var(--gray);
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
    }

}

</style>