<script setup lang="ts">
import { ref } from 'vue'
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import SearchModal from './SearchModal.vue'

const openModal = ref(false)
</script>

<template>
  <div class="md:flex items-center justify-end hidden">
    <div class="w-full max-w-full">
      <label for="search" class="sr-only">Search</label>
      <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
          <MagnifyingGlassIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
        </div>
        <input id="search" name="search" class="block w-full rounded-xl border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 focus:border-brand-500 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-brand-500 sm:text-sm" placeholder="Search" type="search" />
      </div>
    </div>
  </div>

  <button @click="openModal = true" type="button" class="md:hidden mr-2 rounded-full bg-white p-1 text-brand-700 hover:text-brand-800 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
    <span class="sr-only">View notifications</span>
    <MagnifyingGlassIcon class="h-6 w-6" aria-hidden="true" />
  </button>

  <SearchModal v-model="openModal"/>
</template>
