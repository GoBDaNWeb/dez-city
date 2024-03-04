<script setup>
import { Badge, Button } from "@/shared/ui";
defineProps(["title", "options", "badges"]);
</script>

<template>
  <div class="cost-item">
    <h4>{{ title }}</h4>
    <span>Способ</span>
    <div class="badges">
      <Badge v-for="badge in badges" :key="badge">{{ badge }}</Badge>
    </div>
    <ul>
      <li v-for="option in options" :key="option.title">
        <p>{{ option.title }}</p>
        <span>{{ option.cost }}</span>
      </li>
    </ul>
    <Button color="orange">Заказать услугу</Button>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.cost-item {
  background: var(--white-color);
  border-radius: 40px;
  padding: 30px;
  height: 100%;
  display: flex;
  flex-direction: column;
  @media (max-width: $tab) {
    border-radius: 20px;
    padding: 20px;
  }
  h4 {
    font-weight: 600;
    font-size: 32px;
    line-height: 32px;
    color: var(--dark-color);
    font-family: "Cygre", sans-serif;
    margin-bottom: 24px;
    max-width: 220px;
    @media (max-width: $tab) {
      max-width: 100%;
      font-size: 22px;
      line-height: 22px;
      margin-bottom: 18px;
    }
  }
  span {
    font-family: "Cygre", sans-serif;
    color: rgba(43, 47, 53, 0.3);
    font-weight: 500;
    font-size: 14px;
    line-height: 14px;
  }
  .badges {
    margin-top: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    @media (max-width: $tab) {
      margin-top: 10px;
    }
  }
  ul {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 30px;
    flex: 1;
    @media (max-width: $tab) {
      margin-top: 24px;
      gap: 14px;
    }
    li {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid rgba(43, 47, 53, 0.1);
      @media (max-width: $tab) {
        flex-direction: column;
        gap: 10px;
        padding-bottom: 14px;
      }
      p {
        font-family: "Cygre", sans-serif;
        font-weight: 350;
        font-size: 16px;
        line-height: 16px;
        color: var(--dark-color);
        @media (max-width: $tab) {
          font-size: 14px;
          line-height: 14px;
        }
      }
      span {
        font-family: "Cygre", sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 16px;
        color: var(--dark-color);
        @media (max-width: $tab) {
          font-size: 14px;
          line-height: 14px;
        }
      }
    }
  }
  button {
    width: 100%;
  }
}
</style>
