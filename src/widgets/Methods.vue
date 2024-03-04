<script setup>
import { MethodItem } from "@/entities";
import img1 from "@/shared/images/methods/1.png";
import img2 from "@/shared/images/methods/2.png";
const methodList = [
  {
    id: 1,
    title: "Холодный туман",
    text: "Холодный туман - это пар из дезинсекционного препарата, по своей структуре представляет мелкие частицы, способные проникнуть в самые труднодоступные места. В разы эффективнее, в сравнении с обычными распылителями, обеспечивая равномерное покрытие, захватывая больше площади.",
    img: img1,
  },
  {
    id: 2,
    title: "Горячий туман",
    text: "Горячий туман имеет такой же принцип действия, как и холодный туман. Однако, горячий туман представляет собой еще более эффективное средство. Обработка горячим туманом покрывает не только горизонтальные поверхности, но и вертикальные и действует еще несколько дней.",
    img: img2,
  },
];
</script>

<template>
  <div class="methods container">
    <div class="methods-inner">
      <h2>Методы обработки</h2>
      <div class="content">
        <MethodItem
          v-for="method in methodList"
          :key="method.id"
          :title="method.title"
          :text="method.text"
          :img="method.img"
        />
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.methods {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .methods-inner {
    h2 {
      font-family: "Cygre ", sans-serif;
      color: var(--dark-color);
      font-weight: 600;
      font-size: 48px;
      line-height: 48px;
      margin-bottom: 40px;
      padding-left: 30px;
      @media (max-width: $tab) {
        margin-bottom: 20px;
        font-size: 28px;
        line-height: 28px;
        padding-left: 0;
      }
    }
    .content {
      display: flex;
      flex-direction: column;
      gap: 30px;
      @media (max-width: $tab) {
        gap: 20px;
      }
    }
  }
}
</style>
