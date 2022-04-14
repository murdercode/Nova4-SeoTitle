<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field>
      <input
        :id="field.attribute"
        @input="handleChange"
        type="text"
        class="w-full form-control form-input form-input-bordered"
        :class="errorClasses"
        :placeholder="field.name"
        v-model="value"
      />
      <p
        class="mt-2 help-text"
        :class="isInRange ? 'text-green-600' : 'text-red-500'"
      >{{ isInRange ? 'This title is good for SEO. Great work!' : `You're out of ${overChars} characters. Please make a better title!` }}</p>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field', 'min', 'max'],

  computed: {

    isInRange() {
      return this.value.length >= this.field.min && this.value.length <= this.field.max
    },

    overChars() {
      if (this.value.length > this.field.max) {
        return this.value.length - this.field.max
      } else if (this.value.length < this.field.min) {
        return this.field.min - this.value.length;
      }
    }

  },

  mounted() {
    //console.log(typeof (this.field.max))
  },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
  },
}
</script>
