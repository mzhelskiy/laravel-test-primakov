<script>

export default {
    components: {},
    props: ['question'],
    data: function () {
        return {
            answer: []
        };
    },
};
</script>

<template>
    <div>
        <div v-for="option in question.options">
            <label>
                <input type="checkbox" :value="option.id" v-model="answer"> &mdash; {{ option.text }}
            </label>
        </div>
    </div>
</template>

<style lang="scss" scoped>
</style>
