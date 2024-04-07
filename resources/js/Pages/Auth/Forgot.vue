<script setup lang="ts">
import AppButton from '@/Components/form/AppButton.vue'
</script>

<template>
  <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img class="mx-auto h-12 w-auto" src="/assets/logo.png" alt="Your Company" />
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-brand-50 py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="#" method="POST">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-brand-500 focus:outline-none focus:ring-brand-500 sm:text-sm" />
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <Link href="/login" class="text-sm font-medium text-brand-600 hover:text-brand-500">Sign Up?</Link>
            </div>

            <div class="text-sm">
              <Link href="/register" class="font-medium text-brand-600 hover:text-brand-500">Don't have account?</Link>
            </div>
          </div>

          <div class="flex flex-col">
            <AppButton color="brand" type="submit">Send Recovery Link</AppButton>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
