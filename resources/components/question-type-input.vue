<script>

export default {
    components: {},
    props: ['question'],
    data: function () {
        return {
            answer: null
        };
    }
};
</script>

<template>
    <div>
        <input type="text" v-model="answer" placeholder="ответ...">
    </div>
</template>

<style lang="scss" scoped>
</style>
