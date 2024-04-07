
<script setup lang="ts">
import DataTransition from '@/Components/transitions/DataTransition.vue'
import AppButton from '@/Components/form/AppButton.vue'
import { PlusIcon, HeartIcon } from '@heroicons/vue/24/outline'

const people = [
  {
    name: 'Lindsay Walton',
    imageUrl:
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80',
  },
  // More people...
]
const activityItems = [
  { id: 1, person: people[0], project: 'Workcation', commit: '2d89f0c8', environment: 'production', time: '1h' },
  { id: 1, person: people[0], project: 'Workcation', commit: '2d89f0c8', environment: 'production', time: '1h' },
  { id: 1, person: people[0], project: 'Workcation', commit: '2d89f0c8', environment: 'production', time: '1h' },
  { id: 1, person: people[0], project: 'Workcation', commit: '2d89f0c8', environment: 'production', time: '1h' },
  { id: 1, person: people[0], project: 'Workcation', commit: '2d89f0c8', environment: 'production', time: '1h' },
  // More items...
]
</script>


<template>
  <div class="bg-brand-50 sm:rounded-xl p-6 shadow h-fit">
    <label class="text-brand-900 pb-4 items-center">
      <HeartIcon class="h-4 w-4 inline mr-1 text-center" aria-hidden="true" />
      Popular of the week
    </label>

    <ul role="list" class="divide-y divide-gray-200">
      <DataTransition>
        <li v-for="activityItem in activityItems" :key="activityItem.id" class="py-4">
          <div class="flex space-x-3">
            <img class="h-6 w-6 rounded-full" :src="activityItem.person.imageUrl" alt="" />
            <div class="flex-1 space-y-1">
              <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium">{{ activityItem.person.name }}</h3>
                <p class="text-sm text-brand-500">{{ activityItem.time }}</p>
              </div>
              <p class="text-sm text-brand-500">Deployed {{ activityItem.project }} ({{ activityItem.commit }} in master) to {{ activityItem.environment }}</p>
            </div>
          </div>
        </li>

        <div class="flex flex-col">
          <AppButton :icon="PlusIcon">More</AppButton>
        </div>
      </DataTransition>

    </ul>
  </div>
</template>
