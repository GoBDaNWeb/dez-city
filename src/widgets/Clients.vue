<script setup>
import { ClientItem } from "@/entities";
import img1 from "@/shared/images/clients/1.jpg";
import img2 from "@/shared/images/clients/2.jpg";
import img3 from "@/shared/images/clients/3.jpg";
import img4 from "@/shared/images/clients/4.jpg";
import img5 from "@/shared/images/clients/5.jpg";
import img6 from "@/shared/images/clients/6.jpg";
import img7 from "@/shared/images/clients/7.jpg";
const clientsList = [
  { id: 1, img: img1 },
  { id: 2, img: img2 },
  { id: 3, img: img3 },
  { id: 4, img: img4 },
  { id: 5, img: img5 },
  { id: 6, img: img6 },
  { id: 7, img: img7 },
];
</script>

<template>
  <div class="clients">
    <div class="clients-inner">
      <h2 class="container">Среди наших клиентов</h2>
      <div class="clients-list">
        <ClientItem
          v-for="client in clientsList"
          :key="client.id"
          :img="client.img"
        />
        <ClientItem
          v-for="client in clientsList"
          :key="client.id"
          :img="client.img"
        />
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.clients {
  padding-top: 80px;
  overflow: hidden;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .clients-inner {
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
        padding-left: 20px;
      }
    }
    .clients-list {
      display: flex;
      gap: 30px;
      animation: scroll 35s linear infinite;
      @media (max-width: $tab) {
        animation: scroll 15s linear infinite;
        gap: 20px;
      }
    }
  }
}

@keyframes scroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(calc(-100% - 20px));
  }
}
</style>
