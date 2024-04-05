<script setup lang="ts">
import TopNavigation from '@/Components/topnavigation/TopNavigation.vue'
import TopBanner from '@/Components/topnavigation/TopBanner.vue'
import BaseFooter from '@/Components/footer/BaseFooter.vue'
</script>


<template>
  <TopBanner />
  <TopNavigation />
  <slot></slot>

  <BaseFooter />
</template>
