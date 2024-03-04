<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Navigation, Pagination } from "swiper/modules";
import { ref } from "vue";

import { ArrowRightIcon, ArrowLeftIcon } from "@/shared/icons";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const modules = ref([Navigation, Pagination]);

const pagination = ref(null);
const prev = ref(null);
const next = ref(null);
const props = defineProps(["slidesPerView", "breakpoints", "isNavigation"]);
</script>

<template>
  <div class="default-swiper">
    <div v-if="isNavigation" class="navigation">
      <button ref="prev"><ArrowLeftIcon /></button>
      <button ref="next"><ArrowRightIcon /></button>
    </div>
    <Swiper
      :pagination="{
        el: pagination,
        clickable: true,
      }"
      :navigation="{
        prevEl: prev,
        nextEl: next,
      }"
      :slidesPerView="slidesPerView"
      :spaceBetween="30"
      :modules="modules"
      :breakpoints="breakpoints"
      class="swiper-default"
    >
      <slot></slot>
    </Swiper>
    <div ref="pagination" class="pagination"></div>
  </div>
</template>

<style lang="scss">
@import "@/shared/styles/vars";

.default-swiper {
  position: relative;
  .navigation {
    position: absolute;

    width: 100%;
    top: 140px;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    @media (max-width: $tab) {
      display: none;
    }
    button {
      background: var(--dark-color);
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      border-radius: 10px;
      &:first-child {
        left: -50px;
        @media (max-width: $desktop-md-2) {
          left: -10px;
        }
      }
      &:last-child {
        right: -50px;
        @media (max-width: $desktop-md-2) {
          right: -10px;
        }
      }
    }
  }
  .swiper-slide {
    height: auto;
  }
  .pagination {
    justify-content: center;
    padding-top: 30px;
    display: none;
    @media (max-width: $tab) {
      display: flex;
    }
    .swiper-pagination-bullet {
      width: 6px;
      height: 6px;
      background: var(--orange-color);
      opacity: 1;
      transition: var(--trs-300);
    }
    .swiper-pagination-bullet-active {
      width: 18px;
      height: 6px;
      border-radius: 10px;
    }
  }
}
</style>
