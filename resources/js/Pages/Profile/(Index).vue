<script setup lang="ts">
import { useTitle } from '@vueuse/core'

import { PhoneIcon, BellIcon } from '@heroicons/vue/20/solid'
import AppButton from '@/Components/form/AppButton.vue'
import FollowersSection from './FollowersSection.vue'
import AboutCard from './AboutCard.vue'
import MainFeeds from '@/Components/feeds/MainFeeds.vue'
import AnnouncementCard from '@/Components/announcements/AnnouncementCard.vue'

useTitle('Profile | Miglify')
const profile = {
  name: 'Ricardo Cooper',
  imageUrl:
    'https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
  coverImageUrl:
    'https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
  about: `
    <p>Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit dolor consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean posuere aliquam.</p>
    <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris amet. Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum, cursus felis dui suspendisse velit pharetra. Augue et duis cursus maecenas eget quam lectus. Accumsan vitae nascetur pharetra rhoncus praesent dictum risus suspendisse.</p>
  `,
  fields: {
    Phone: '(555) 123-4567',
    Email: 'ricardocooper@example.com',
    Title: 'Senior Front-End Developer',
    Team: 'Product Development',
    Location: 'San Francisco',
    Sits: 'Oasis, 4th floor',
    Salary: '$145,000',
    Birthday: 'June 8, 1990',
  },
}
</script>

<template>

  <div class="flex h-full">
    <div class="flex min-w-0 flex-1 flex-col overflow-hidden">

      <div class="relative z-0 flex flex-1 overflow-hidden">
        <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none xl:order-last ">
          <article>
            <!-- Profile header -->
            <div class="bg-brand-50 pb-4">
              <div class="">
                <img class="h-32 w-full object-cover lg:h-48" :src="profile.coverImageUrl" alt="" />
              </div>
              <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                  <div class="flex">
                    <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 shadow" :src="profile.imageUrl" alt="" />
                  </div>
                  <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    <div class="mt-2 min-w-0 flex-1 sm:hidden 2xl:block text-brand-900">
                      <h1 class="truncate text-2xl font-bold">{{ profile.name }}</h1>
                      1.2k followers
                    </div>
                    <div class="justify-stretch mt-6 flex flex-col space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                      <AppButton :icon="BellIcon">
                        Follow
                      </AppButton>
                      <AppButton :icon="PhoneIcon">
                        Call
                      </AppButton>
                    </div>
                  </div>
                </div>
                <div class="mt-6 hidden min-w-0 flex-1 sm:block 2xl:hidden">
                  <h1 class="truncate text-2xl font-bold text-gray-900">{{ profile.name }}</h1>
                </div>
              </div>
            </div>

            <hr />

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 max-w-7xl mx-auto my-4 gap-4">
              <AboutCard class="md:hidden"/>
              <div class="col-span-3">
                <FollowersSection />
                <MainFeeds class="mt-4"/>
              </div>
              <div class="hidden md:block space-y-4">
                <AboutCard />
                <AnnouncementCard class="sticky"/>
              </div>
            </div>

            <!-- Description list -->
            <div class="mx-auto mt-6 max-w-7xl px-4 sm:px-6 lg:px-8">
              <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div v-for="field in Object.keys(profile.fields)" :key="field" class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">{{ field }}</dt>
                  <!-- <dd class="mt-1 text-sm text-gray-900">{{ profile.fields[field] }}</dd> -->
                </div>
                <div class="sm:col-span-2">
                  <dt class="text-sm font-medium text-gray-500">About</dt>
                  <dd class="mt-1 max-w-prose space-y-5 text-sm text-gray-900" v-html="profile.about" />
                </div>
              </dl>
            </div>


          </article>
        </main>
      </div>
    </div>
  </div>
</template>

