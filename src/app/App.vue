<script setup>
import {
  Header,
  Hero,
  Cost,
  Advantages,
  Methods,
  Banner,
  About,
  Team,
  Reviews,
  Certificates,
  Clients,
  Gallery,
  Footer,
  MobileMenu,
  OrderModal,
  SuccessModal,
} from "@/widgets";
</script>

<template>
  <Header />
  <main>
    <Hero />
    <Cost />
    <Advantages />
    <Methods />
    <Banner
      title="Закажите <br>прямо сейчас <br>со скидкой 10%"
      text="Акция на срочный выезд в течение часа"
      btnColor="black"
      btnText="получить скидку"
    />
    <About />
    <!-- <Team /> -->
    <Reviews />
    <Certificates />
    <Clients />
    <!-- <Gallery /> -->

    <Banner
      title="СКИДКА ДЛЯ ЮРИДИЧЕСКИХ <br/>ЛИЦ  20%"
      text="Акция на срочный выезд в течение часа"
      btnColor="black"
      btnText="ЗАКЛЮЧИТЬ ДОГОВОР"
    />
    <Footer />
  </main>
  <MobileMenu />
  <OrderModal />
  <SuccessModal />
</template>

<style scoped></style>
