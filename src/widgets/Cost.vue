<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, CostItem } from "@/entities";

const costItems = [
  {
    id: 1,
    title: "Уничтожение тараканов",
    options: [
      { title: "Общежитие / комната (до 20 м²)", cost: "от 990 ₽" },
      { title: "1-комнатная квартира (до 40 м²) ", cost: "от 1090 ₽" },
      { title: "2-комнатная квартира (до 60 м²)", cost: "от 1290 ₽" },
      { title: "3-комнатная квартира (до 90 м²)", cost: "от 1490 ₽" },
      { title: "4 комнаты (более 90 м²)", cost: "от 1690 ₽" },
      { title: "Частный дом", cost: "от 2990 ₽" },
    ],
  },
  {
    id: 2,
    title: "Уничтожение  клопов",
    options: [
      { title: "Общежитие / комната (до 20 м²)", cost: "от 990 ₽" },
      { title: "1-комнатная квартира (до 40 м²) ", cost: "от 1090 ₽" },
      { title: "2-комнатная квартира (до 60 м²)", cost: "от 1290 ₽" },
      { title: "3-комнатная квартира (до 90 м²)", cost: "от 1490 ₽" },
      { title: "4 комнаты (более 90 м²)", cost: "от 1690 ₽" },
      { title: "Частный дом", cost: "от 2990 ₽" },
    ],
  },
  {
    id: 3,
    title: "Уничтожение  крыс",
    options: [
      { title: "Помещение и площадь - до 100 м²", cost: "от 1090 руб." },
      { title: "Помещение и площадь - 100 м² - 200 м²", cost: "40 руб/м" },
      { title: "Помещение и площадь - 200 м² - 300 м²", cost: "35 руб/м" },
      { title: "Помещение и площадь - 300 м² - 400 м²", cost: "30 руб/м" },
      { title: "Помещение и площадь - свыше 500 м²", cost: "договорная" },
    ],
  },
  {
    id: 4,
    title: "Уничтожение клещей",
    options: [
      { title: "Площадь (соток) - до 10", cost: "от 490 руб сотка" },
      { title: "Площадь (соток) - 11-25", cost: "от 390 руб./сотка" },
      { title: "Площадь (соток) - 26-50", cost: "от 290 руб./сотка" },
      { title: "Площадь (соток) - 50 и более", cost: "от 190 руб./сотка" },
    ],
  },

  {
    id: 5,
    title: "Уничтожение плесени",
    options: [
      { title: "1-5 м²", cost: "от 400 ₽/ м²" },
      { title: "5-10 м² ", cost: "от 350 руб./ м²" },
      { title: "10-30 м²", cost: "от 250 руб./ м²" },
      { title: "более 30 м²", cost: "договорная" },
    ],
  },
];
</script>

<template>
  <div id="cost" class="cost container">
    <div class="cost-inner">
      <h2><span>Стоимость</span> обработки помещений</h2>
      <div class="cost-list">
        <CostItem
          v-for="item in costItems"
          :key="item.id"
          :title="item.title"
          :options="item.options"
        />
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.cost {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .cost-inner {
    h2 {
      font-family: "Cygre", sans-serif;
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
      span {
        color: var(--orange-color);
      }
    }
    .cost-list {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      @media (max-width: $desktop-sm) {
        grid-template-columns: repeat(2, 1fr);
      }
      @media (max-width: $tab) {
        gap: 15px;
      }
      @media (max-width: $tab-sm) {
        grid-template-columns: repeat(1, 1fr);
      }
    }
  }
}
</style>
