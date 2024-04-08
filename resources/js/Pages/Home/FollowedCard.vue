
<script setup lang="ts">
import DataTransition from '@/Components/transitions/DataTransition.vue'
import AppButton from '@/Components/form/AppButton.vue'
import { PlusIcon, UsersIcon } from '@heroicons/vue/24/outline'

const activityItems = [
  {
    id: 1,
    name: 'Science Fair',
    avatar: 'https://i.pinimg.com/736x/db/2d/a0/db2da06ee237eff7de3e468edde2bde4.jpg',
    time: '1h'
  },
  {
    id: 2,
    name: 'Anime Lovers',
    avatar: 'https://i.pinimg.com/736x/db/2d/a0/db2da06ee237eff7de3e468edde2bde4.jpg',
    time: '1h'
  },{
    id: 3,
    name: 'Manga Recommendations',
    avatar: 'https://i.pinimg.com/736x/db/2d/a0/db2da06ee237eff7de3e468edde2bde4.jpg',
    time: '1h'
  },{
    id: 4,
    name: 'Automation Life',
    avatar: 'https://i.pinimg.com/736x/db/2d/a0/db2da06ee237eff7de3e468edde2bde4.jpg',
    time: '1h'
  },{
    id: 5,
    name: 'Bike Recommendations',
    avatar: 'https://i.pinimg.com/736x/db/2d/a0/db2da06ee237eff7de3e468edde2bde4.jpg',
    time: '1h'
  },
  // More items...
]
</script>


<template>
  <div class="bg-brand-50 sm:rounded-xl p-6 shadow h-fit">
    <label class="text-brand-900 pb-4 items-center">
      <UsersIcon class="h-4 w-4 inline mr-1" aria-hidden="true" />
      Followed User
    </label>

    <ul role="list" class="divide-y divide-gray-200">
      <DataTransition>
        <li v-for="activityItem in activityItems" :key="activityItem.id" class="py-4">
          <div class="flex space-x-3">
            <span class="relative inline-block">
              <img class="h-6 w-6 rounded-full" :src="activityItem.avatar" alt="" />
              <span class="absolute top-0 right-0 block h-1.5 w-1.5 rounded-full bg-red-700 ring-2 ring-white" />
            </span>
            <div class="flex-1 space-y-1">
              <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium">{{ activityItem.name }}</h3>
                <div class="isolate flex -space-x-1 overflow-hidden">
                  <img class="relative z-30 inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                  <img class="relative z-20 inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                  <img class="relative z-10 inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                  <img class="relative z-0 inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </div>
              </div>
              <!-- <p class="text-sm text-brand-500">Deployed {{ activityItem.project }} ({{ activityItem.commit }} in master) to {{ activityItem.environment }}</p> -->
            </div>
          </div>
        </li>

      </DataTransition>

      <div class="flex flex-col">
        <AppButton :icon="PlusIcon">More</AppButton>
      </div>

    </ul>
  </div>
</template>
