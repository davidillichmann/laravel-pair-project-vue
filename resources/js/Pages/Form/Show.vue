<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  subject: null,
  emailBody: null,
})
</script>

<template>
    <div class="p-8 space-y-4">
        <h1 class="text-2xl font-bold">Email form</h1>
        <p class="text-sm text-gray-700">Use this form to submit an email.</p>
        <form class="space-y-2 w-full max-w-lg" @submit.prevent="form.post('/send-email')">
            <input
                class="block w-full border border-gray-500 p-1"
                type="text"
                name="subject"
                placeholder="Subject"
                v-model="form.subject"
            />
            <textarea
                class="block w-full border border-gray-500 p-1"
                name="body"
                placeholder="Email body"
                rows="5"
                v-model="form.emailBody"
            />
            <button type="submit" class="bg-gray-800 hover:bg-black text-white p-2 rounded" :disabled="form.processing">
                Submit form
            </button>
        </form>
    </div>
</template>
