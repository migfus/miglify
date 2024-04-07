
<script setup lang="ts">
import TopCarousel from './TopCarousel.vue'
import PopularCard from './PopularCard.vue'
import MainFeeds from '@/Components/feeds/MainFeeds.vue'
import AnnouncementCard from '@/Components/announcements/AnnouncementCard.vue'
import CreatePost from '@/Components/feeds/CreatePost.vue'
import GroupCard from './GroupCard.vue'
import { useTitle } from '@vueuse/core'

useTitle('Home | Miglify')
</script>

<template>
  <div class="font-bold max-w-7xl mx-auto">
    <TopCarousel></TopCarousel>

    <content class="grid space-y-4 md:gap-4 mb-4 grid-cols-1 md:grid-cols-4">
      <div class="md:hidden">
        <PopularCard/>
      </div>
      <div class="col-span-3">
        <CreatePost class="mb-4"/>
        <MainFeeds />
      </div>
      <div class="hidden md:inline space-y-4">
        <PopularCard/>
        <GroupCard />
        <AnnouncementCard />
      </div>
    </content>

  </div>
</template>
