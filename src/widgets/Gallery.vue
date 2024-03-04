<script setup>
import { SwiperSlide } from "swiper/vue";
import { Swiper, TeamItem } from "@/entities";

import Fancybox from "./Fancybox.vue";
import img1 from "@/shared/images/gallery/1.png";
import img2 from "@/shared/images/gallery/2.png";
import img3 from "@/shared/images/gallery/3.png";
import img4 from "@/shared/images/gallery/4.png";
import img5 from "@/shared/images/gallery/5.png";
import img6 from "@/shared/images/gallery/6.png";
import img7 from "@/shared/images/gallery/7.png";
import img8 from "@/shared/images/gallery/8.png";
const galleryList = [
  { id: 1, img: img1 },
  { id: 2, img: img2 },
  { id: 3, img: img3 },
  { id: 4, img: img4 },
  { id: 5, img: img5 },
  { id: 6, img: img6 },
  { id: 7, img: img7 },
  { id: 8, img: img8 },
];
</script>

<template>
  <div class="gallery container">
    <div class="gallery-inner">
      <h2>Мастера в процессе работы</h2>
      <Fancybox>
        <div class="gallery-content">
          <a
            data-fancybox="gallery"
            :href="photo.img"
            v-for="photo in galleryList"
            :key="photo.id"
          >
            <div class="image-wrapper">
              <img :src="photo.img" alt="photo" />
            </div>
          </a>
        </div>
        <div class="swiper-container">
          <Swiper
            :breakpoints="{
              0: { slidesPerView: 1.2 },
              767: { slidesPerView: 3 },
              1280: { slidesPerView: 4 },
            }"
            slidesPerView="4"
            :isNavigation="true"
          >
            <SwiperSlide v-for="photo in galleryList" :key="photo.id">
              <a data-fancybox="gallery" :href="photo.img" :key="photo.id">
                <div class="image-wrapper">
                  <img :src="photo.img" alt="photo" />
                </div>
              </a>
            </SwiperSlide>
          </Swiper>
        </div>
      </Fancybox>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.gallery {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .gallery-inner {
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
    .swiper-container {
      display: none;
      @media (max-width: $tab) {
        display: block;
      }
      .image-wrapper {
        width: 100%;
        height: 100%;
        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
      }
    }
    .gallery-content {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      @media (max-width: $tab) {
        display: none;
      }
      .image-wrapper {
        width: 100%;
        height: 100%;
        aspect-ratio: 1;
        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
      }
    }
  }
}
</style>
