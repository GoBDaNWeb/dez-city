<script setup>
defineProps(["img", "title", "text"]);
</script>
<template>
  <div class="advantage-item">
    <div class="image-wrapper">
      <img :src="img" alt="photo" />
    </div>
    <div class="content">
      <span>{{ title }}</span>
      <p>{{ text }}</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.advantage-item {
  height: 100%;
  display: flex;
  gap: 30px;
  flex-direction: column;
  @media (max-width: $tab) {
    gap: 20px;
  }
  .image-wrapper {
    border-radius: 37px;
    overflow: hidden;
    width: 100%;
    height: 100%;
    @media (max-width: $tab) {
      border-radius: 10px;
    }
    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
  .content {
    padding-left: 30px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    @media (max-width: $tab) {
      padding-left: 0;
      gap: 10px;
    }
    span {
      font-weight: 600;
      font-size: 26px;
      line-height: 26px;
      font-family: "Cygre", sans-serif;
      color: var(--orange-color);
      @media (max-width: $tab) {
        font-size: 20px;
        line-height: 20px;
      }
    }
    p {
      font-family: "Cygre", sans-serif;
      font-weight: 350;
      font-size: 18px;
      line-height: 25px;
      color: var(--dark-color);
      @media (max-width: $tab) {
        font-size: 14px;
        line-height: 19px;
      }
    }
  }
}
</style>
