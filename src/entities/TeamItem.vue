<script setup>
defineProps(["img", "title", "text"]);
</script>

<template>
  <div class="team-item">
    <div class="image-wrapper">
      <img :src="img" alt="person" />
    </div>
    <div class="content">
      <span>{{ title }}</span>
      <p>{{ text }}</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.team-item {
  display: flex;
  flex-direction: column;
  gap: 20px;
  @media (max-width: $tab) {
    gap: 16px;
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
  .content {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding-left: 30px;
    @media (max-width: $tab) {
      padding-left: 0;
      gap: 8px;
    }
    span {
      font-weight: 600;
      font-size: 26px;
      line-height: 26px;
      font-family: "Cygre", sans-serif;
      color: var(--dark-color);
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
