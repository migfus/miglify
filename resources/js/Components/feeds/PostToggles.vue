<script setup lang="ts">
import { numberReFormat } from '@/formatter'

import { ChatBubbleBottomCenterTextIcon, ShareIcon, HeartIcon } from '@heroicons/vue/20/solid'

const $props = defineProps<{
  counts: {
    comments_count: number,
    likes_count: number
  }
}>()

</script>

<template>
  <span class="isolate inline-flex rounded-md mt-2 justify-end">
    <button type="button" class="relative inline-flex items-center rounded-xl px-4 py-2 text-xs font-medium text-brand-700 hover:bg-brand-100 hover:text-brand-800">
      <ChatBubbleBottomCenterTextIcon class="text-gray-500h-5 w-5 flex-shrink-0 sm:-ml-1 mr-2" /> {{ numberReFormat($props.counts.comments_count) }} Comments
    </button>
    <button type="button" class="relative -ml-px rounded-xl inline-flex items-center px-4 py-2 text-xs font-medium text-brand-700 hover:bg-brand-100 hover:text-brand-800">
      <HeartIcon class="text-gray-500h-5 w-5 flex-shrink-0 sm:-ml-1 mr-2" /> {{ numberReFormat($props.counts.likes_count) }} Likes
    </button>
    <button type="button" class="relative -ml-px inline-flex items-center rounded-xl px-4 py-2 text-xs font-medium text-brand-700 hover:bg-brand-100 hover:text-brand-800">
      <ShareIcon class="text-gray-500h-5 w-5 flex-shrink-0 sm:-ml-1 mr-2" /> Share
    </button>
  </span>
</template>
