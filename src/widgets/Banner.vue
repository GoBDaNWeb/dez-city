<script setup>
import { Form } from "@/features";
defineProps(["title", "text", "btnColor", "btnText"]);
</script>
<template>
  <div class="banner container">
    <div class="banner-inner">
      <div class="left">
        <h3 v-html="title"></h3>
        <p>{{ text }}</p>
      </div>
      <div class="right">
        <Form
          :btnColor="btnColor"
          :btnText="btnText"
          text="Нажимая на кнопку, Вы соглашаетесь"
        />
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.banner {
  .banner-inner {
    .right {
      form {
        p {
          color: var(--white-color);
        }
      }
    }
  }
}
</style>
<style lang="scss" scoped>
@import "@/shared/styles/vars";

.banner {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .banner-inner {
    background-image: url("@/shared/images/banner-bg.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border-radius: 40px;
    padding: 60px 50px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    @media (max-width: $tab) {
      border-radius: 20px;
      grid-template-columns: repeat(1, 1fr);
      padding: 30px 20px 50px;
    }
    .left {
      h3 {
        font-family: "Cygre", sans-serif;
        color: var(--white-color);
        font-weight: 600;
        font-size: 48px;
        line-height: 43px;
        margin-bottom: 30px;
        text-transform: uppercase;
        @media (max-width: $tab) {
          font-size: 28px;
          line-height: 28px;
          margin-bottom: 14px;
        }
      }
      p {
        font-family: "Cygre", sans-serif;
        font-weight: 400;
        font-size: 24px;
        line-height: 28px;
        color: var(--white-color);
        @media (max-width: $tab) {
          font-size: 20px;
          line-height: 24px;
        }
      }
    }
  }
}
</style>
