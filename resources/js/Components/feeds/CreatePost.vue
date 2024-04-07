<script setup lang="ts">
import { ref } from 'vue'
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { AtSymbolIcon, CodeBracketIcon, LinkIcon } from '@heroicons/vue/20/solid'
import CreatePostModal from './CreatePostModal.vue'

const open = ref(false)
</script>



<template>
  <form action="#" class="bg-brand-50 p-6 rounded-xl shadow mb-4">
    <TabGroup v-slot="{ selectedIndex }">
      <TabList class="flex items-center">
        <Tab as="template" v-slot="{ selected }">
          <button :class="[selected ? 'text-brand-900 bg-brand-100 hover:bg-brand-200' : 'text-brand-500 hover:text-brand-900 bg-white hover:bg-brand-100', 'rounded-md border border-transparent px-3 py-1.5 text-sm font-medium']">Write</button>
        </Tab>

        <!-- These buttons are here simply as examples and don't actually do anything. -->
        <div v-if="selectedIndex === 0" class="ml-auto flex items-center space-x-5">
          <div class="flex items-center">
            <button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-brand-400 hover:text-brand-500">
              <span class="sr-only">Insert link</span>
              <LinkIcon class="h-5 w-5" aria-hidden="true" />
            </button>
          </div>
          <div class="flex items-center">
            <button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-brand-400 hover:text-brand-500">
              <span class="sr-only">Insert code</span>
              <CodeBracketIcon class="h-5 w-5" aria-hidden="true" />
            </button>
          </div>
          <div class="flex items-center">
            <button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-brand-400 hover:text-brand-500">
              <span class="sr-only">Mention someone</span>
              <AtSymbolIcon class="h-5 w-5" aria-hidden="true" />
            </button>
          </div>
        </div>
      </TabList>
      <TabPanels class="mt-2">
        <TabPanel class="-m-0.5 rounded-lg p-0.5">
          <label for="post" class="sr-only">Post</label>
          <div>
            <textarea @click="open = true" rows="2" name="post" id="post" class="block w-full rounded-xl border-brand-300 shadow-sm focus:border-brand-500 focus:ring-brand-500 sm:text-sm" placeholder="Write a new post..." />
          </div>
        </TabPanel>
      </TabPanels>
    </TabGroup>
    <!-- <div class="mt-2 flex justify-end">
      <AppButton colo="brand" :icon="PaperAirplaneIcon">
        Post
      </AppButton>
    </div> -->
  </form>

  <CreatePostModal v-model="open"/>
</template>

