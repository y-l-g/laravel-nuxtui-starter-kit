<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';
import { register } from '@/routes';
import { motion } from 'motion-v';
import ILucideArrowRight from '~icons/lucide/arrow-right';
import ILucideGithub from '~icons/lucide/github';
import ILucideLayers3 from '~icons/lucide/layers3';
import ILucideRocket from '~icons/lucide/rocket';
import ILucideServerCog from '~icons/lucide/server-cog';

useSeoMeta({
    title: 'Home',
    description: 'Another Laravel Starter Kit',
});

const architecturalPillars = [
    {
        title: 'Robust & Modern Backend',
        description:
            'Built on the latest Laravel 12 with PHP 8.4. We enforce strict typing and high code quality standards for a robust and reliable foundation.',
        icon: ILucideServerCog,
    },
    {
        title: 'Clean & Scalable Architecture',
        description:
            'Logic is neatly organized for scalability. Data integrity is guaranteed by strongly-typed DTOs via Spatie/Laravel-Data, ensuring predictable and maintainable code.',
        icon: ILucideLayers3,
    },
    {
        title: 'SEO-Ready with SSR',
        description:
            'Server-Side Rendering (SSR) is ready out-of-the-box, ensuring optimal performance and excellent SEO for your public-facing pages.',
        icon: ILucideRocket,
    },
];
</script>

<template>
    <PublicLayout>
        <motion.div
            :initial="{ opacity: 0, y: 50 }"
            :animate="{
                opacity: 1,
                y: 0,
                transition: { duration: 0.5, ease: 'easeOut' },
            }"
        >
            <UPageHero
                title="Another Laravel Starter Kit"
                description="Launch your next app faster than ever. A production-ready, feature-rich boilerplate built on a solid architectural foundation."
            >
                <template #links>
                    <motion.div
                        :initial="{ opacity: 0, y: 50 }"
                        :animate="{
                            opacity: 1,
                            y: 0,
                            transition: {
                                delay: 0.2,
                                duration: 0.5,
                                ease: 'easeOut',
                            },
                        }"
                        class="flex flex-wrap justify-center gap-4"
                    >
                        <UButton
                            :to="register().url"
                            size="xl"
                            label="Get Started - It's Free"
                            :icon="ILucideArrowRight"
                            trailing
                        />
                        <UButton
                            to="https://github.com/y-l-g/laravel-nuxtui-starter-kit"
                            target="_blank"
                            size="xl"
                            label="Star on GitHub"
                            color="neutral"
                            variant="ghost"
                            :icon="ILucideGithub"
                        />
                    </motion.div>
                </template>
            </UPageHero>
        </motion.div>

        <motion.div
            :initial="{ opacity: 0, y: 50 }"
            :whileInView="{
                opacity: 1,
                y: 0,
                transition: { duration: 0.7, ease: 'easeOut' },
            }"
            :inViewOptions="{ once: true }"
        >
            <UPageSection
                title="Built for Professionals"
                description="This isn't just a starter kit. It's a professional foundation designed for scalability, maintainability, and an outstanding developer experience."
                :ui="{ title: 'text-center', description: 'text-center' }"
            >
                <UPageGrid>
                    <motion.div
                        v-for="(pillar, index) in architecturalPillars"
                        :key="pillar.title"
                        :initial="{ opacity: 0, y: 50 }"
                        :whileInView="{
                            opacity: 1,
                            y: 0,
                            transition: {
                                delay: index * 0.15,
                                duration: 0.5,
                                ease: 'easeOut',
                            },
                        }"
                        :inViewOptions="{ once: true }"
                    >
                        <UPageCard
                            :title="pillar.title"
                            :description="pillar.description"
                            :icon="pillar.icon"
                            variant="ghost"
                        />
                    </motion.div>
                </UPageGrid>
            </UPageSection>
        </motion.div>

        <motion.div
            :initial="{ opacity: 0, y: 50 }"
            :whileInView="{
                opacity: 1,
                y: 0,
                transition: { duration: 0.7, ease: 'easeOut' },
            }"
            :inViewOptions="{ once: true }"
        >
            <UPageSection
                :ui="{
                    wrapper: 'py-24 sm:py-32',
                }"
            >
                <UPageCTA
                    title="Ready to Build Your Next Big Idea?"
                    description="Stop rebuilding the same features. Start with a solid foundation and focus on what makes your application unique."
                    card
                    variant="soft"
                >
                    <template #links>
                        <UButton
                            :to="register().url"
                            size="xl"
                            label="Start Building Now"
                        />
                    </template>
                </UPageCTA>
            </UPageSection>
        </motion.div>
    </PublicLayout>
</template>
