
<script setup lang="ts">
const announcements = [
  { id: 1, content: `Sorry 😅 No image/video uploads support. I can't afford storage hosting.`},
  { id: 2, content: `Still in development phase.`},
]
</script>


<template>
  <div class="bg-brand-50 sm:rounded-xl p-6 shadow h-fit">
    <label class="text-brand-900 pb-4">Announcements</label>

    <ul role="list" class="divide-y divide-gray-200">
      <li v-for="row in announcements" :key="row.id" class="py-4">
        <div class="flex space-x-3">
          <div class="flex-1 space-y-1">
            <p class="text-lg text-brand-800">{{ row.content }}</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>
