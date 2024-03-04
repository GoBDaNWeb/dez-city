<script setup></script>

<template>
  <div class="badge"><slot></slot></div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.badge {
  background: var(--gray-color);
  font-weight: 500;
  font-size: 16px;
  line-height: 16px;
  font-family: "Cygre", sans-serif;
  color: var(--dark-color);
  border-radius: 5px;
  padding: 6px 10px 10px;
  @media (max-width: $tab) {
    font-size: 14px;
    line-height: 14px;
  }
}
</style>
