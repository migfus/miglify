<script setup lang="ts">
import { FunctionalComponent, computed } from 'vue'
const $props = defineProps<{
  icon?: FunctionalComponent
  color?: string
}>()

const buttonColor = computed(() => {
  if(!$props.color) {
    return 'bg-white hover:bg-gray-50 text-brand-700 hover:bg-gray-100 focus:ring-brand-500 '
  }
  else if($props.color == 'brand') {
    return 'bg-brand-50 hover:bg-brand-100 text-brand-700 focus:ring-brand-500 '
  }
})
</script>

<template>
  <button
    type="button"
    :class="[
      buttonColor,
      'inline-flex justify-center rounded-md px-4 py-2 text-sm font-medium shadow focus:outline-none focus:ring-2 focus:ring-offset-2'
    ]"
  >
    <component v-if="icon" :is="icon" class="-ml-1 mr-2 h-5 w-5 text-brand-700" aria-hidden="true" />
    <slot></slot>
  </button>
</template>
