<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, CertificateItem } from "@/entities";
import Fancybox from "./Fancybox.vue";
import img1 from "@/shared/images/certificates/1.jpg";
import img2 from "@/shared/images/certificates/2.jpg";
import img3 from "@/shared/images/certificates/3.jpg";
import img4 from "@/shared/images/certificates/4.jpg";

const certificatesList = [
  { id: 1, img: img1 },
  { id: 2, img: img2 },
  { id: 3, img: img3 },
  { id: 4, img: img4 },
  { id: 5, img: img1 },
  { id: 6, img: img2 },
  { id: 7, img: img3 },
  { id: 8, img: img4 },
];
</script>

<template>
  <div class="certificates container">
    <div class="certificates-inner">
      <h2>Сертификаты</h2>
      <Fancybox>
        <Swiper
          :breakpoints="{
            0: { slidesPerView: 1.2 },
            767: { slidesPerView: 3 },
            1280: { slidesPerView: 4 },
          }"
          slidesPerView="4"
          :isNavigation="true"
        >
          <SwiperSlide
            v-for="certificate in certificatesList"
            :key="certificate.id"
          >
            <CertificateItem :img="certificate.img" />
          </SwiperSlide>
        </Swiper>
      </Fancybox>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.certificates {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .certificates-inner {
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
