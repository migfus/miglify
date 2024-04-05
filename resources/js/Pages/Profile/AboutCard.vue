
<script setup lang="ts">
import DataTransition from '@/Components/transitions/DataTransition.vue'

const activityItems = [
  { id: 1, category: 'Summary', desc: 'I Do id oasl;f;lajssl;dfjk '},
  { id: 2, category: 'Work', desc: 'Central Mindanao University'},
  { id: 3, category: 'Work', desc: 'Central Mindanao University'},
  { id: 4, category: 'Work', desc: 'Central Mindanao University'},
  { id: 5, category: 'Work', desc: 'Central Mindanao University'},
]
</script>


<template>
  <div class="bg-brand-50 sm:rounded-xl p-6 shadow h-fit">
    <label class="text-brand-900 pb-4 font-semibold">About Ricardo Cooper</label>

    <ul role="list" class="divide-y divide-gray-200">
      <DataTransition>
        <li v-for="activityItem in activityItems" :key="activityItem.id" class="py-4">
          <div class="flex space-x-3">
            <div class="flex-1 space-y-1">
              <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium">{{ activityItem.category }}</h3>
              </div>
              <p class="text-sm text-brand-500">{{ activityItem.desc }}</p>
            </div>
          </div>
        </li>
      </DataTransition>

    </ul>
  </div>
</template>
