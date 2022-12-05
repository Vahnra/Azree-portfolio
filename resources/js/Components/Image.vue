<script setup>
defineProps(['image']);
</script>

<template>

    <div class="grid-item grid-item--width2" data-aos="fade-up">
        <a href="{{ image.image }}"
            class="d-block photo-item" data-fancybox="gallery">
            <img src="{{ image.image }}"
                alt="{{ image.name }}" class="img-fluid">
            <div class="photo-text-more">
                <div class="photo-text-more">
                    <h3 class="heading">{{ image.name }}</h3>
                </div>
            </div>
        </a>
    </div>

</template>