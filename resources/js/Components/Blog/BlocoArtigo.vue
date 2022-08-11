<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import moment from 'moment/min/moment-with-locales';

moment.locale('pt-br');

</script>

<template>
    <Link :href="route('blog.article', article.uuid)">
        <article class="relative flex flex-col mb-10 max-w-3xl lg:ml-auto xl:max-w-none xl:w-[50rem]">
            <h3 class="mb-4 text-4xl text-slate-700 tracking-tight font-bold">
                {{ article.title }}
            </h3>
            <div class="mb-6 prose prose-slate">
                <p>
                    {{ article.caption }}
                </p>
            </div>
            <div class="mt-auto flex flex-row w-full items-center justify-between">
                <dl>
                    <dt class="sr-only">
                        Date
                    </dt>
                    <dd class="text-sm leading-6 font-bold">
                        <time :datetime="article.updated_at" class="bg-rosaEscuro text-xs text-lilas py-1 px-2 rounded-md">
                            {{ moment(article.updated_at, "YYYY-MM-DD").format("llll") }}
                        </time>
                    </dd>
                </dl>
                <dl>
                    <dt class="sr-only">
                        Tags
                    </dt>
                    <dd class="text-sm leading-6 font-bold">
                        <!-- <Tag class="text-xs text-rosaEscuro py-1 px-2 rounded-md"
                            v-for="(tag, key) in article.tags"
                            :key="key"
                            :tag="tag">
                        </Tag> -->
                    </dd>
                </dl>
            </div>
        </article>
    </Link>
</template>
<style>
    .github svg {
        fill: var(--lilas);
        stroke: var(--lilas);
    }
</style>
<script>
    export default {
        props: {
            article: Array,
        }
    }
</script>
