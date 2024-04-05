
<script setup lang="ts">
import { ref } from 'vue'
import { Carousel, Slide } from 'vue3-carousel'
import AppButton from '@/Components/form/AppButton.vue'
import 'vue3-carousel/dist/carousel.css'
import { PlusIcon } from '@heroicons/vue/24/outline'


const settings = ref({
  itemsToShow: 1,
  snapAlign: 'center',
})

const breakpoints = ref({
  300: {
    itemsToShow: 5.5,
    snapAlign: 'center'
  },
  800: {
    itemsToShow: 7.5,
    snapAlign: 'center',
  },
  1040: {
    itemsToShow: 7.5,
    snapAlign: 'start',
  },
  1200: {
    itemsToShow: 9.5,
    snapAlign: 'start',
  },
})

const posts = [
  {
    title: 'How to introducte yourself to be a daily bread in life. Lorem Ipsum the lorem is the ipsum how to be a po is the lorem ipsum',
    href: '#',
    date: 'Mar 16, 2020',
    author: {
      name: 'Roel Aufderehar',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'How to use search engine optimization to drive sales',
    href: '#',
    date: 'Mar 10, 2020',
    author: {
      name: 'Brenna Goyette',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'Improve your customer experience',
    href: '#',
    date: 'Feb 12, 2020',
    author: {
      name: 'Daniela Metz',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'How to introducte yourself to be a daily bread in life. Lorem Ipsum the lorem is the ipsum how to be a po is the lorem ipsum',
    href: '#',
    date: 'Mar 16, 2020',
    author: {
      name: 'Roel Aufderehar',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'How to use search engine optimization to drive sales',
    href: '#',
    date: 'Mar 10, 2020',
    author: {
      name: 'Brenna Goyette',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'Improve your customer experience',
    href: '#',
    date: 'Feb 12, 2020',
    author: {
      name: 'Daniela Metz',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'How to introducte yourself to be a daily bread in life. Lorem Ipsum the lorem is the ipsum how to be a po is the lorem ipsum',
    href: '#',
    date: 'Mar 16, 2020',
    author: {
      name: 'Roel Aufderehar',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'How to use search engine optimization to drive sales',
    href: '#',
    date: 'Mar 10, 2020',
    author: {
      name: 'Brenna Goyette',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
  {
    title: 'Improve your customer experience',
    href: '#',
    date: 'Feb 12, 2020',
    author: {
      name: 'Daniela Metz',
      href: '#',
      imageUrl:
        'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
  },
]
</script>



<template>
  <div class="">
      <h2 class="text-xl font-bold tracking-tight text-brand-700">Followers</h2>

      <Carousel v-bind="settings" :breakpoints="breakpoints" class="mt-4 rounded-xl mb-4 max-w-7xl mx-auto">
        <Slide
          v-for="post in posts"
          :key="post.title"
          :class="['flex flex-col mr-4',]"
        >
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:h-24 lg:w-24" :src="post.author.imageUrl" alt="" />
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>{{ post.author.name }}</h3>
              </div>
            </div>
          </div>
        </Slide>
      </Carousel>

      <div class="flex justify-center flex-col sm:flex-row mx-4">
        <AppButton :icon="PlusIcon" color="brand" class="max-w-full">More Followers</AppButton>
      </div>
  </div>

</template>

<style>
.carousel__slide  {
  margin-right: 15px;
}
</style>
