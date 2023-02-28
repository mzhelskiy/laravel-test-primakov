<script>
import question from "./question.vue";

export default {
    components: {question},
    data: function () {
        return {
            questions: []
        };
    },
    created: function () {
        this.loadQuestions();
    },
    methods: {
        /**
         * Загрузка списка вопросов
         */
        loadQuestions: function () {
            axios.get('/api/questions').then(function (result) {
                this.questions = result.data.data;
            }.bind(this));
        }
    },
};
</script>

<template>
    <div>
        <h3>Вопросы</h3>

        <div v-for="question in questions" style="padding-bottom: 30px;">
            <question :question="question"></question>
        </div>
    </div>
</template>

<style lang="scss" scoped>
</style>
