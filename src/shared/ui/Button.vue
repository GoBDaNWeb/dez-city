<script setup>
const props = defineProps(["title", "color", "click", "type"]);
</script>

<template>
  <button :class="[color]" @click="click">
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
}
button.orange {
  background: var(--orange-color);
}
button.black {
  background: var(--black-color);
}
</style>
