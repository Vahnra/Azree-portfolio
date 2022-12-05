<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';

const form = useForm({
    name: '',
    image: '',
    size: '',
});
</script>

<template>
    <Head title="Images" />
    
    <!-- <AuthenticatedLayout> -->
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('images.store'), { onSuccess: () => form.reset() })">
                <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de l'image</label>
                <input type="text" v-model="form.name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" />
                <div v-if="form.errors.name" class="text-sm text-red-600">
                    {{ form.errors.name }}
                </div>

                <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 mt-3">Taille</label>
                <select v-model="form.size"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                    <option disabled value="">Choisir</option>
                    <option value="1">Petit</option>
                    <option value="2">Moyen</option>
                    <option value="3">Grand</option>
                </select>
                <div v-if="form.errors.size" class="text-sm text-red-600">
                    {{ form.errors.size }}
                </div>

                <input type="file" class="mt-3" name="image" @input="form.image = $event.target.files[0]" />
                <div v-if="form.errors.image" class="text-sm text-red-600">
                    {{ form.errors.image }}
                </div>

                
                <InputError :message="form.errors.message" class="mt-2" />
                <div>
                    <PrimaryButton class="mt-4">Envoyer</PrimaryButton>
                </div>
            </form>
        </div>
    <!-- </AuthenticatedLayout> -->
</template>