<script setup>
const props = defineProps(["title", "color", "click", "type", "disabled"]);
</script>

<template>
  <button :class="[color]" @click="click" :disabled="disabled">
    <slot></slot>
  </button>
</template>

<style lang="scss" scoped>
button {
  border-radius: 10px;
  height: 52px;
  padding: 0 20px;
  font-weight: 600;
  font-size: 16px;
  line-height: 16px;
  color: var(--white-color);
  text-transform: uppercase;
  transition: var(--trs-300);
}
button.orange {
  background: var(--orange-color);
}
button.black {
  background: var(--black-color);
}
button:disabled {
  pointer-events: none;
  opacity: 0.8;
}
</style>
