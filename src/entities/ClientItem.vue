<script setup>
defineProps(["img"]);
</script>

<template>
  <div class="client-item">
    <div class="image-wrapper">
      <img :src="img" alt="client" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.client-item {
  background: var(--white-color);
  border-radius: 40px;
  min-width: 220px;
  min-height: 220px;
  max-height: 220px;
  max-width: 220px;
  @media (max-width: $tab) {
    border-radius: 16px;
    min-width: 93px;
    min-height: 93px;
    max-width: 93px;
    max-height: 93px;
  }
  .image-wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    img {
      width: 70%;
      height: 100%;
      object-fit: contain;
    }
  }
}
</style>
