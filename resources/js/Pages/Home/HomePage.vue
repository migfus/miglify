
<script setup lang="ts">
import TopCarousel from './TopCarousel.vue'
import PopularCard from './PopularCard.vue'
import MainFeeds from '@/Components/feeds/MainFeeds.vue'
import AnnouncementCard from '@/Components/announcements/AnnouncementCard.vue'
import CreatePost from '@/Components/feeds/CreatePost.vue'
import GroupCard from './GroupCard.vue'
import FollowedCard from './FollowedCard.vue'
import { useTitle } from '@vueuse/core'
import { onMounted  } from 'vue'

useTitle('Home | Miglify')

onMounted(() => {
  // @ts-ignore
  window.Echo.channel(`alert-event`)
    .listen(`AlertEvent`, (e: { content: string}) => {
      alert(`Someone Posted: ${e.content}`)
    })
})


</script>

<template>
  <div class="font-bold max-w-7xl mx-auto">
    <TopCarousel></TopCarousel>
    <div class="grid gap-4 mb-4 grid-cols-1 md:grid-cols-4">
      <div class="col-span-3">
        <CreatePost class="mb-4"/>
        <MainFeeds />
      </div>
      <div class="hidden md:inline space-y-4">
        <AnnouncementCard />
        <PopularCard/>
        <GroupCard />
        <FollowedCard />
      </div>
    </div>
  </div>
</template>
