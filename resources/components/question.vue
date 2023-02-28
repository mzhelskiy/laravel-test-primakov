<script>
import questionTypeInput from "./question-type-input.vue";
import questionTypeRadio from "./question-type-radio.vue";
import questionTypeCheckbox from "./question-type-checkbox.vue";

export default {
    components: {questionTypeInput, questionTypeRadio, questionTypeCheckbox},
    props: ['question'],
};
</script>

<template>
    <div>
        <div>
            {{ question.text }}
        </div>

        <component :is="'question-type-'+question.type" :question="question"></component>

        <div>
            <button type="button">Ответить</button>
        </div>
    </div>
</template>

<style lang="scss" scoped>
</style>
