
<script setup lang="ts">
import AppButton from '@/Components/form/AppButton.vue'
import { PlusIcon, MegaphoneIcon } from '@heroicons/vue/24/outline'
import DataTransition from '../transitions/DataTransition.vue'

const people = [
  {
    name: 'Schwarzenegger R. Belonio',
    imageUrl:
      'https://migfus.net/images/avatar.jpg',
  },
  // More people...
]
const announcements = [
  { id: 2, person: people[0], content: 'In Design Phase. 😅', time: '1h' },
  { id: 3, person: people[0], content: `You can post in text for now, I can't afford storage hosting. 😅`, time: '1d' },
  // More items...
]
</script>


<template>
  <div class="bg-brand-50 sm:rounded-xl p-6 shadow h-fit">
    <label class="text-brand-900 pb-4 items-center">
      <MegaphoneIcon class="h-4 w-4 inline mr-1 text-center" aria-hidden="true" />
      ~Announcements
    </label>

    <ul role="list" class="divide-y divide-gray-200">
      <DataTransition>
        <li v-for="row in announcements" :key="row.id" class="py-4">
          <div class="flex space-x-3">
            <img class="h-6 w-6 rounded-full" :src="row.person.imageUrl" alt="" />
            <div class="flex-1 space-y-1">
              <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium">{{ row.person.name }}</h3>
                <p class="text-sm text-brand-500">{{ row.time }}</p>
              </div>
              <p class="text-sm text-brand-700">{{ row.content }}</p>
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
