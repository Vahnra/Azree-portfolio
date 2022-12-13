<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import InputError from '@/Components/InputError.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const props = defineProps(['image']);

const form = useForm({
    name: props.image.name,
    size: props.image.size,
});

const editing = ref(false);
</script>

<template>

    <div :class="image.size" data-aos="fade-up">
        <div class="text-end">
            <Dropdown v-if="$page.props.auth.user">
                <template #trigger>
                    <button>             
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg> 
                    </button>
                </template>
                <template #content>
                    <button
                        class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 transition duration-150 ease-in-out"
                        @click="editing = true">
                        Editer
                    </button>
                    <DropdownLink as="button" :href="route('images.destroy', image.id)" method="delete">

                        Delete

                    </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <form v-if="editing" @submit.prevent="form.put(route('images.update', image.id), { onSuccess: () => editing = false })">
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900">Nom de l'image</label>
            <input type="text" v-model="form.name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" />
            <div v-if="form.errors.name" class="text-sm text-red-600">
                {{ form.errors.name }}
            </div>
            <label for="Name" class="block mb-2 mt-2 text-sm font-medium text-gray-900">Taille</label>
            <select v-model="form.size"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option disabled value="">Choisir</option>
                <option value="grid-item grid-item--width1">Petit</option>
                <option value="grid-item grid-item--width2">Moyen</option>
                <option value="grid-item grid-item--width3">Grand</option>
            </select>
            <div v-if="form.errors.size" class="text-sm text-red-600">
                {{ form.errors.size }}
            </div>
            <div class="space-x-2">
                <PrimaryButton class="mt-2">Enregistrer</PrimaryButton>
                <button class="mt-2 mb-2" @click="editing = false; form.reset(); form.clearErrors()">Annuler</button>
            </div>
        </form>
        <a :href="image.image"
            class="d-block photo-item" data-fancybox="gallery">
            <img :src="image.image"
                :alt="image.name" class="img-fluid border-2 border-black">
            <div class="photo-text-more">
                <div class="photo-text-more">
                    <h3 class="heading">{{ image.name }}</h3>
                    
                </div>
            </div>
        </a>
    </div>

</template>