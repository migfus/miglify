<script setup lang="ts">
import { CTopNavigation } from '@/constants'

import { Disclosure, DisclosureButton, DisclosurePanel, } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import TopNavigationsDesktop from './TopNavigationsDesktop.vue'
import TopNavigationsMobile from './TopNavigationsMobile.vue'
import TopNavigationLogo from './TopNavigationLogo.vue'
import TopNavigationProfileDropdown from './TopNavigationProfileDropdown.vue'
import SearchBar from './SearchBar.vue'
</script>


<template>
  <!-- <TopBanner /> -->
  <Disclosure as="nav" class="bg-brand-50 shadow" v-slot="{ open }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <DisclosureButton class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-500">
            <span class="sr-only">Open main menu</span>
            <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
            <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <Link href="/" class="flex flex-shrink-0 items-center">
            <TopNavigationLogo />
          </Link>
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
            <TopNavigationsDesktop v-for="row in CTopNavigation" :key="row.name" :href="row.href" :active="row.active" :icon="row.icon" :name="row.name" />
          </div>


        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 space-x-4">
          <SearchBar/>


          <button type="button" class="rounded-full bg-white p-1 text-brand-600 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button>

          <!-- Profile dropdown -->
          <TopNavigationProfileDropdown />
        </div>
      </div>
    </div>
    <DisclosurePanel class="sm:hidden">
      <div class="space-y-1 pt-2 pb-4">
        <TopNavigationsMobile
          v-for="row in CTopNavigation"
          :key="row.name"
          :href="row.href"
          :active="row.active"
          :name="row.name"
          :icon="row.icon"
        />

      </div>
    </DisclosurePanel>
  </Disclosure>
</template>
