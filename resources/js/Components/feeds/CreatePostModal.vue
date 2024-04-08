<script setup lang="ts">
import { Dialog, DialogPanel, TransitionChild, TransitionRoot, TabGroup, TabPanel, TabPanels } from '@headlessui/vue'
import AppButton from '../form/AppButton.vue'
import { XMarkIcon, PaperAirplaneIcon, Square2StackIcon } from '@heroicons/vue/24/outline'
import { router } from '@inertiajs/vue3'
import { reactive } from 'vue'

const open = defineModel<boolean>()

const form = reactive({
  content: ''
})

function submit() {
  router.post('/public-broadcast-test', form)
  open.value = false
}
</script>


<template>
  <TransitionRoot as="template" :show="open">
    <Dialog as="div" class="relative z-10" @close="open = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-brand-300 bg-opacity-75 transition-opacity backdrop-blur-sm" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 w-full">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-xl bg-brand-50 px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 w-full max-w-full sm:max-w-2xl sm:p-6">
              <form @submit.prevent="submit()">
                <div>
                  <h3 class="text-brand-700 font-bold">Create New Post</h3>
                  <div class="mt-3 text-center sm:mt-5">
                    <div class="bg-brand-50 rounded-xl mb-4">
                      <TabGroup v-slot="{ selectedIndex }">
                        <TabPanels class="mt-2">
                          <TabPanel class="-m-0.5 rounded-xl p-0.5">
                            <label for="post" class="sr-only">Post</label>
                            <div>
                              <textarea v-model="form.content" rows="6" name="post" id="post" class="block w-full rounded-xl border-brand-300 shadow-sm focus:border-brand-500 focus:ring-brand-500 sm:text-sm" placeholder="Write a new post..." />
                            </div>
                          </TabPanel>
                        </TabPanels>
                      </TabGroup>
                      <!-- <div class="mt-2 flex justify-end">
                        <AppButton colo="brand" :icon="PaperAirplaneIcon">
                          Post
                        </AppButton>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="flex flex-row justify-end gap-2">
                  <AppButton :icon="Square2StackIcon">Change</AppButton>
                  <AppButton @click="open = false" :icon="XMarkIcon">Cancel</AppButton>
                  <AppButton @click="open = false" :icon="PaperAirplaneIcon" color="brand" type="submit">Post</AppButton>
                </div>
              </form>


            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

