<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, CostItem } from "@/entities";

const costItems = [
  {
    id: 1,
    title: "Уничтожение тараканов",
    options: [
      { title: "Общежитие / комната (до 20 м²)", cost: "от 1900 ₽" },
      { title: "1-комнатная квартира (до 40 м²) ", cost: "от 2300 ₽" },
      { title: "2-комнатная квартира (до 60 м²)", cost: "от 2600 ₽" },
      { title: "3-комнатная квартира (до 90 м²)", cost: "от 3000 ₽" },
      { title: "4 комнаты (более 90 м²)", cost: "от 3500 ₽" },
      { title: "Частный дом", cost: "от 3100 ₽" },
    ],
  },
  {
    id: 2,
    title: "Уничтожение  клопов",
    options: [
      { title: "Общежитие / комната (до 20 м²)", cost: "от 1900 ₽" },
      { title: "1-комнатная квартира (до 40 м²) ", cost: "от 2300 ₽" },
      { title: "2-комнатная квартира (до 60 м²)", cost: "от 2600 ₽" },
      { title: "3-комнатная квартира (до 90 м²)", cost: "от 3000 ₽" },
      { title: "4 комнаты (более 90 м²)", cost: "от 3500 ₽" },
      { title: "Частный дом", cost: "от 3100 ₽" },
    ],
  },
  {
    id: 3,
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

      <!-- <Swiper
        :breakpoints="{
          0: { slidesPerView: 1 },
          767: { slidesPerView: 2 },
          1280: { slidesPerView: 3 },
        }"
        slidesPerView="3"
      >
        <SwiperSlide> </SwiperSlide>
      </Swiper> -->
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
