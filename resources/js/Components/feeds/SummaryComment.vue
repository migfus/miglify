<script setup lang="ts">
const post =
  {
    id: 1,
    href: '#',
    category: { name: 'Article', href: '#' },
    description:
      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.',
    date: 'Mar 16, 2020',
    datetime: '2020-03-16',
    imageUrl:
      'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
    readingTime: '6 min',
    author: {
      name: 'Roel Aufderehar',
      href: '/profile',
      imageUrl:
        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    },
    toggles: {
      comments_count: randomGenerator(),
      likes_count: randomGenerator(),
    }
  }

function randomGenerator() {
  return Math.floor(Math.random() * 999999999);
}
</script>

<template>
  <div class="flex items-start ml-3">
    <div class="flex flex-1 flex-col justify-between bg-brand-50">
      <div class="mt-2 flex items-center">
        <div class="flex-shrink-0">
          <Link :href="post.author.href">
            <span class="sr-only">{{ post.author.name }}</span>
            <img class="h-6 w-6 rounded-full" :src="post.author.imageUrl" alt="" />
          </Link>
        </div>
        <div class="ml-3">
          <p class="text-sm font-medium text-gray-900">
            <a :href="post.author.href" class="hover:underline text-xs">{{ post.author.name }}</a>
          </p>
          <div class="flex space-x-1 font-medium text-xs text-brand-500">
            <time :datetime="post.datetime">{{ post.date }}</time>
            <span aria-hidden="true">&middot;</span>
            <span>{{ post.readingTime }} read</span>
          </div>
        </div>
      </div>

      <div class="flex-1">
        <a :href="post.href" class="mt-2 block">
          <p class="mt-3 text-sm font-medium text-brand-800 line-clamp-2">{{ post.description }}</p>
        </a>
      </div>
    </div>
  </div>
</template>
