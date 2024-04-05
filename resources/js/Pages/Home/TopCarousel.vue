
<script setup lang="ts">
import { ref } from 'vue'
import { Carousel, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import DataTransition from '@/Components/Transitions/DataTransition.vue';

const settings = ref({
  itemsToShow: 1,
  snapAlign: 'center',
})

const breakpoints = ref({
  300: {
    itemsToShow: 1.5,
    snapAlign: 'center'
  },
  800: {
    itemsToShow: 3.5,
    snapAlign: 'center',
  },
  1040: {
    itemsToShow: 4,
    snapAlign: 'start',
  },
  1200: {
    itemsToShow: 5,
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
  <!-- @ts-ignore -->
  <Carousel v-bind="settings" :breakpoints="breakpoints" class="mt-4 shadow-carousel rounded-xl mb-4">
    <Slide
      v-for="post in posts"
      :key="post.title"
      :class="['flex flex-col mr-4',]"
    >
      <div class="flex flex-1 flex-col justify-between bg-brand-800 p-6 rounded-xl shadow">
        <div class="flex-1">
          <a :href="post.href" class="mt-2 block">
            <p class="text-xl font-semibold text-brand-50">{{ post.title }}</p>
          </a>
        </div>
        <div class="mt-6 flex items-center">
          <div class="flex-shrink-0">
            <a :href="post.author.href">
              <span class="sr-only">{{ post.author.name }}</span>
              <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" alt="" />
            </a>
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-brand-200">
              <a :href="post.author.href" class="hover:underline">{{ post.author.name }}</a>
            </p>
            <div class="flex space-x-1 text-sm text-brand-100">
              <time>{{ post.date }}</time>
            </div>
          </div>
        </div>
      </div>
    </Slide>
  </Carousel>
</template>

<style>
.carousel__slide  {
  margin-right: 15px;
}
</style>
