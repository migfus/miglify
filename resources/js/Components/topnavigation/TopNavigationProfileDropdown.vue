<script setup lang="ts">
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { UserIcon, ArrowRightStartOnRectangleIcon, Cog6ToothIcon } from '@heroicons/vue/24/outline'
</script>

<template>
  <Menu as="div" class="relative ml-3">
    <div>
      <MenuButton class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
        <span class="sr-only">Open user menu</span>
        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
      </MenuButton>
    </div>
    <transition enter-active-class="transition ease-out duration-200" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
      <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
        <MenuItem v-slot="{ active, close }">
          <Link href="/profile" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">
            <UserIcon class="text-gray-500h-5 w-4 flex-shrink-0 sm:-ml-1 mr-2 inline" />
            Your Profile
          </Link>
        </MenuItem>
        <MenuItem v-slot="{ active }">
          <Link href="/account" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">
            <Cog6ToothIcon class="text-gray-500h-5 w-4 flex-shrink-0 sm:-ml-1 mr-2 inline" />
            Account Settings
          </Link>
        </MenuItem>
        <MenuItem v-slot="{ active }">
          <Link href="/logout" method="post" as="button" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">
            <ArrowRightStartOnRectangleIcon class="text-gray-500h-5 w-4 flex-shrink-0 sm:-ml-1 mr-2 inline" />
            Sign out
          </Link>
        </MenuItem>
      </MenuItems>
    </transition>
  </Menu>
</template>

