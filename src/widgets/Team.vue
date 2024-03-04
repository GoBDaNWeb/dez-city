<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, TeamItem } from "@/entities";

import img1 from "@/shared/images/team/1.png";
import img2 from "@/shared/images/team/2.png";
import img3 from "@/shared/images/team/3.png";
import img4 from "@/shared/images/team/4.png";
const teamList = [
  { id: 1, img: img1, title: "Залялеев Ильяс", text: "Генеральный директор" },
  {
    id: 2,
    img: img2,
    title: "Сашникова Ольга",
    text: "Менеджер по работе с физическими лицами",
  },
  {
    id: 3,
    img: img3,
    title: "Гулина Анастасия",
    text: "Специалист по работе с юридическими лицами",
  },
  { id: 4, img: img4, title: "Пашенков Дмитрий", text: "Технолог" },
  { id: 5, img: img1, title: "Залялеев Ильяс", text: "Генеральный директор" },
  {
    id: 6,
    img: img2,
    title: "Сашникова Ольга",
    text: "Менеджер по работе с физическими лицами",
  },
  {
    id: 7,
    img: img3,
    title: "Гулина Анастасия",
    text: "Специалист по работе с юридическими лицами",
  },
  { id: 8, img: img4, title: "Пашенков Дмитрий", text: "Технолог" },
];
</script>

<template>
  <div class="team container">
    <div class="team-inner">
      <h2>Наши специалисты</h2>
      <Swiper
        :breakpoints="{
          0: { slidesPerView: 1.2 },
          767: { slidesPerView: 3 },
          1280: { slidesPerView: 4 },
        }"
        slidesPerView="4"
        :isNavigation="true"
      >
        <SwiperSlide v-for="team in teamList" :key="team.id">
          <TeamItem :img="team.img" :title="team.title" :text="team.text" />
        </SwiperSlide>
      </Swiper>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.team {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .team-inner {
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
  }
}
</style>
