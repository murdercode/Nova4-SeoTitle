<template>
    <span>
        <div
            class="inline-block w-2 h-2 rounded-full opacity-75"
            :class="isInRange ? 'bg-green-500' : 'bg-red-500'"
            :title="isInRange ? 'This title is good for SEO. Great work!' : `You're out of ${overChars} characters. Please make a better title!`"
        ></div>
        {{ field.value }}
    </span>
</template>

<script>
export default {
    props: ['resourceName', 'field', 'min', 'max'],
    computed: {
        isInRange() {
            return this.field.value.length >= this.field.min && this.field.value.length <= this.field.max
        }
    }
}
</script>
