<template>
  <div>
    <main class="relative mt-6">
      <div class="mx-auto max-w-screen-xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
        <div class="overflow-hidden rounded-lg bg-brand-50 shadow">
          <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
            <aside class="py-6 lg:col-span-3">
              <nav class="space-y-1">
                <a v-for="item in subNavigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700' : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900', 'group border-l-4 px-3 py-2 flex items-center text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
                  <component :is="item.icon" :class="[item.current ? 'text-teal-500 group-hover:text-teal-500' : 'text-gray-400 group-hover:text-gray-500', 'flex-shrink-0 -ml-1 mr-3 h-6 w-6']" aria-hidden="true" />
                  <span class="truncate">{{ item.name }}</span>
                </a>
              </nav>
            </aside>

            <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
              <!-- Profile section -->
              <div class="py-6 px-4 sm:p-6 lg:pb-8">
                <div>
                  <h2 class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                  <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                </div>

                <div class="mt-6 flex flex-col lg:flex-row">
                  <div class="flex-grow space-y-6">
                    <div>
                      <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">workcation.com/</span>
                        <input type="text" name="username" id="username" autocomplete="username" class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm" :value="user.handle" />
                      </div>
                    </div>

                    <div>
                      <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                      <div class="mt-1">
                        <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm" />
                      </div>
                      <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
                    </div>
                  </div>

                  <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                    <p class="text-sm font-medium text-gray-700" aria-hidden="true">Photo</p>
                    <div class="mt-1 lg:hidden">
                      <div class="flex items-center">
                        <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full" aria-hidden="true">
                          <img class="h-full w-full rounded-full" :src="user.imageUrl" alt="" />
                        </div>
                        <div class="ml-5 rounded-md shadow-sm">
                          <div class="group relative flex items-center justify-center rounded-md border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                            <label for="mobile-user-photo" class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                              <span>Change</span>
                              <span class="sr-only"> user photo</span>
                            </label>
                            <input id="mobile-user-photo" name="user-photo" type="file" class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="relative hidden overflow-hidden rounded-full lg:block">
                      <img class="relative h-40 w-40 rounded-full" :src="user.imageUrl" alt="" />
                      <label for="desktop-user-photo" class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                        <span>Change</span>
                        <span class="sr-only"> user photo</span>
                        <input type="file" id="desktop-user-photo" name="user-photo" class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0" />
                      </label>
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-12 gap-6">
                  <div class="col-span-12 sm:col-span-6">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                  </div>

                  <div class="col-span-12 sm:col-span-6">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                  </div>

                  <div class="col-span-12">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                    <input type="text" name="url" id="url" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                  </div>

                  <div class="col-span-12 sm:col-span-6">
                    <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                    <input type="text" name="company" id="company" autocomplete="organization" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                  </div>
                </div>
              </div>

              <!-- Privacy section -->
              <div class="divide-y divide-gray-200 pt-6">
                <div class="px-4 sm:px-6">
                  <div>
                    <h2 class="text-lg font-medium leading-6 text-gray-900">Privacy</h2>
                    <p class="mt-1 text-sm text-gray-500">Ornare eu a volutpat eget vulputate. Fringilla commodo amet.</p>
                  </div>
                  <ul role="list" class="mt-2 divide-y divide-gray-200">
                    <SwitchGroup as="li" class="flex items-center justify-between py-4">
                      <div class="flex flex-col">
                        <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>Available to hire</SwitchLabel>
                        <SwitchDescription class="text-sm text-gray-500">Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.</SwitchDescription>
                      </div>
                      <Switch v-model="availableToHire" :class="[availableToHire ? 'bg-teal-500' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                        <span aria-hidden="true" :class="[availableToHire ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                      </Switch>
                    </SwitchGroup>
                    <SwitchGroup as="li" class="flex items-center justify-between py-4">
                      <div class="flex flex-col">
                        <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>Make account private</SwitchLabel>
                        <SwitchDescription class="text-sm text-gray-500">Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.</SwitchDescription>
                      </div>
                      <Switch v-model="privateAccount" :class="[privateAccount ? 'bg-teal-500' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                        <span aria-hidden="true" :class="[privateAccount ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                      </Switch>
                    </SwitchGroup>
                    <SwitchGroup as="li" class="flex items-center justify-between py-4">
                      <div class="flex flex-col">
                        <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>Allow commenting</SwitchLabel>
                        <SwitchDescription class="text-sm text-gray-500">Integer amet, nunc hendrerit adipiscing nam. Elementum ame</SwitchDescription>
                      </div>
                      <Switch v-model="allowCommenting" :class="[allowCommenting ? 'bg-teal-500' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                        <span aria-hidden="true" :class="[allowCommenting ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                      </Switch>
                    </SwitchGroup>
                    <SwitchGroup as="li" class="flex items-center justify-between py-4">
                      <div class="flex flex-col">
                        <SwitchLabel as="p" class="text-sm font-medium text-gray-900" passive>Allow mentions</SwitchLabel>
                        <SwitchDescription class="text-sm text-gray-500">Adipiscing est venenatis enim molestie commodo eu gravid</SwitchDescription>
                      </div>
                      <Switch v-model="allowMentions" :class="[allowMentions ? 'bg-teal-500' : 'bg-gray-200', 'relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
                        <span aria-hidden="true" :class="[allowMentions ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                      </Switch>
                    </SwitchGroup>
                  </ul>
                </div>
                <div class="mt-4 flex justify-end py-4 px-4 sm:px-6">
                  <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Cancel</button>
                  <button type="submit" class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-sky-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  Switch,
  SwitchDescription,
  SwitchGroup,
  SwitchLabel,
} from '@headlessui/vue'
import { MagnifyingGlassIcon } from '@heroicons/vue/20/solid'
import {
  Bars3Icon,
  BellIcon,
  CogIcon,
  CreditCardIcon,
  KeyIcon,
  SquaresPlusIcon,
  UserCircleIcon,
  XMarkIcon,
} from '@heroicons/vue/24/outline'

const user = {
  name: 'Debbie Lewis',
  handle: 'deblewis',
  email: 'debbielewis@example.com',
  imageUrl:
    'https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80',
}
const navigation = [
  { name: 'Dashboard', href: '#', current: true },
  { name: 'Jobs', href: '#', current: false },
  { name: 'Applicants', href: '#', current: false },
  { name: 'Company', href: '#', current: false },
]
const subNavigation = [
  { name: 'Profile', href: '#', icon: UserCircleIcon, current: true },
  { name: 'Account', href: '#', icon: CogIcon, current: false },
  { name: 'Password', href: '#', icon: KeyIcon, current: false },
  { name: 'Notifications', href: '#', icon: BellIcon, current: false },
  { name: 'Billing', href: '#', icon: CreditCardIcon, current: false },
  { name: 'Integrations', href: '#', icon: SquaresPlusIcon, current: false },
]
const userNavigation = [
  { name: 'Your Profile', href: '#' },
  { name: 'Settings', href: '#' },
  { name: 'Sign out', href: '#' },
]

const availableToHire = ref(true)
const privateAccount = ref(false)
const allowCommenting = ref(true)
const allowMentions = ref(true)
</script>
