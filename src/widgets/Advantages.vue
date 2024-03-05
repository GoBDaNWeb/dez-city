<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, AdvantageItem } from "@/entities";
import img1 from "@/shared/images/advantages/1.jpg";
import img2 from "@/shared/images/advantages/2.jpg";
import img3 from "@/shared/images/advantages/3.jpg";
const advantesList = [
  {
    id: 1,
    img: img1,
    title: "Гарантия до 1 года",
    text: "Полный возврат денег или повторный бесплатный выезд, если проблема останется",
  },
  {
    id: 2,
    img: img2,
    title: "Оперативность",
    text: "Осуществляем срочный выезд на место в течение часа",
  },
  {
    id: 3,
    img: img3,
    title: "Качественные препараты",
    text: "Все препараты абсолютно безвредны для людей и животных и не оставляют запаха",
  },
];
</script>

<template>
  <div id="advantages" class="advantages container">
    <div class="advantages-inner">
      <h2>Наши преимущества</h2>
      <Swiper
        :breakpoints="{
          0: { slidesPerView: 1.1 },
          767: { slidesPerView: 2.2 },
          1280: { slidesPerView: 3 },
        }"
        slidesPerView="3"
      >
        <SwiperSlide v-for="advante in advantesList" :key="advante.id">
          <AdvantageItem
            :img="advante.img"
            :title="advante.title"
            :text="advante.text"
          />
        </SwiperSlide>
      </Swiper>
    </div>
  </div>
</template>

<style lang="scss">
.advantages {
  .swiper-slide {
    height: 100% !important;
  }
}
</style>
<style lang="scss" scoped>
@import "@/shared/styles/vars";

.advantages {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .advantages-inner {
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
    }
  }
}
</style>
