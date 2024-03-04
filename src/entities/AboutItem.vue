<script setup>
defineProps(["index", "title", "text"]);
</script>

<template>
  <div class="about-item">
    <div class="index">
      {{ index }}
    </div>
    <div class="content">
      <h6>{{ title }}</h6>
      <p>{{ text }}</p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.about-item {
  border: 1px solid rgba(43, 47, 53, 0.1);
  border-radius: 40px;
  padding: 30px 215px 40px 30px;
  display: flex;
  gap: 24px;
  @media (max-width: $tab) {
    border-radius: 20px;
    flex-direction: column;
    padding: 20px;
    gap: 20px;
  }
  .index {
    background: var(--orange-color);
    border-radius: 20px;
    font-family: "Cygre", sans-serif;
    font-size: 36px;
    line-height: 36px;
    color: var(--white-color);
    max-width: 80px;
    max-height: 80px;
    min-width: 80px;
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    @media (max-width: $tab) {
      max-width: 50px;
      max-height: 50px;
      min-width: 50px;
      min-height: 50px;
      font-size: 24px;
      line-height: 24px;
      border-radius: 10px;
    }
  }
  .content {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: 16px;
    @media (max-width: $tab) {
      margin-top: 0;
      gap: 10px;
    }
    h6 {
      color: var(--orange-color);
      font-weight: 600;
      font-size: 26px;
      line-height: 26px;
      font-family: "Cygre", sans-serif;
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
      @media (max-width: $tab) {
        font-size: 14px;
        line-height: 19px;
      }
    }
  }
}
</style>
