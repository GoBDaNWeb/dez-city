<script setup>
defineProps(["img"]);
</script>

<template>
  <div class="certificate-item">
    <a data-fancybox="certificate" :href="img">
      <div class="image-wrapper">
        <img :src="img" alt="certificate" />
      </div>
    </a>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.certificate-item {
  padding: 30px;
  border: 1px solid rgba(43, 47, 53, 0.1);
  border-radius: 40px;
  @media (max-width: $tab) {
    border-radius: 20px;
    padding: 25px;
  }
  .image-wrapper {
    width: 100%;
    height: 100%;
    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
}
</style>
