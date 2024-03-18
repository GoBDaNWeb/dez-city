<script setup>
defineProps(["title", "text", "img"]);
</script>
<template>
  <div class="method-item">
    <h5>{{ title }}</h5>
    <p>{{ text }}</p>
    <div class="image-wrapper">
      <img :src="img" alt="photo" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.method-item {
  border: 1px solid rgba(43, 47, 53, 0.1);
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 50px;
  border-radius: 40px;
  @media (max-width: $tab) {
    grid-template-columns: repeat(1, 1fr);
    gap: 10px;
    border-radius: 20px;
  }
  h5 {
    color: var(--orange-color);
    font-family: "Cygre", sans-serif;
    font-weight: 600;
    font-size: 26px;
    line-height: 26px;
    padding-top: 30px;
    padding-left: 30px;
    @media (max-width: $tab) {
      font-size: 20px;
      line-height: 20px;
      padding-top: 20px;
      padding-left: 20px;
      padding-right: 2px;
    }
  }
  p {
    font-family: "Cygre", sans-serif;
    color: var(--dark-color);
    font-weight: 350;
    font-size: 18px;
    line-height: 25px;
    padding-top: 30px;
    padding-bottom: 30px;
    @media (max-width: $tab) {
      font-size: 14px;
      line-height: 19px;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 0;
      padding-bottom: 0;
    }
  }
  .image-wrapper {
    background: var(--white-color);
    border-radius: 40px;
    position: relative;
    padding-bottom: 85%;
    @media (max-width: $tab) {
      border-radius: 20px;
      margin-top: 10px;
      width: auto;
      height: auto;
      max-height: 350px;
      padding-bottom: 50%;
    }
    img {
      position: absolute;
      width: 70%;
      height: 70%;
      object-fit: contain;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
    }
  }
}
</style>
