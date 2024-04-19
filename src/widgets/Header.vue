<script setup>
import { LogoIcon, PhoneIcon } from "@/shared/icons";
import { useMenuStore } from "@/entities";

const menu = useMenuStore();
</script>

<template>
  <header>
    <div class="container">
      <div class="header-inner">
        <a href="#" class="logo">
          <div class="image-wrapper">
            <img src="@/shared/images/logo.png" alt="logo" />
          </div>
        </a>
        <nav>
          <a href="#cost">Стоимость</a>
          <a href="#advantages">О нас</a>
          <a href="#reviews">Отзывы</a>
          <a href="#footer">Контакты</a>
        </nav>
        <div class="info">
          <div class="info-item">
            <p>Почта</p>
            <a href="mailto:sesonedez@yandex.ru">sesonedez@yandex.ru</a>
          </div>
          <div class="info-item">
            <p>Выезд по Москве и МО</p>
            <span>
              Большая Семёновская ул., <br />
              д 40, стр. 13</span
            >
          </div>
          <div class="info-item">
            <p>Ежедневно с 8:00 до 22:00</p>
            <a href="tel:+7 (966) 888-06-52">+7 (966) 888-06-52</a>
          </div>
        </div>
        <div class="mob">
          <a class="mob-tel" href="tel:+7 (495) 183-22-95">
            <!-- <PhoneIcon /> -->
            +7 (966) 888-06-52
          </a>
          <button
            @click="menu.handleOpenMenu"
            class="burger"
            :class="menu.isActive ? 'active' : ''"
          >
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </header>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

header {
  position: fixed;
  right: 0;
  left: 0;
  top: 10px;
  z-index: 100;
  .header-inner {
    background: var(--light-color);
    border-radius: 100px;
    align-items: center;
    gap: 40px;
    padding: 10px 50px 12px 20px;
    justify-content: space-between;
    display: flex;
    @media (max-width: $tab) {
      padding: 10px;
      gap: 10px;
    }
    .logo {
      width: 167px;
      height: 52px;
      padding-left: 20px;
      @media (max-width: $tab) {
        width: 111px;
        height: 49px;
        display: flex;
        align-items: center;
        padding-left: 0;
      }
      .image-wrapper {
        width: 100%;
        height: 100%;
        @media (max-width: $tab) {
          height: 75%;
        }
        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
      }
    }
    nav {
      display: flex;
      align-items: center;
      gap: 30px;
      @media (max-width: $desktop-sm) {
        display: none;
      }
      a {
        font-weight: 600;
        font-size: 16px;
        line-height: 16px;
        font-family: "Cygre", sans-serif;
        color: var(--dark-color);
      }
    }
    .info {
      display: flex;
      gap: 30px;
      @media (max-width: $desktop-sm) {
        display: none;
      }
      .info-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
        p {
          font-weight: 350;
          font-size: 12px;
          line-height: 12px;
          font-family: "Cygre ", sans-serif;
          color: var(--dark-color);
        }
        a,
        span {
          font-family: "Cygre ", sans-serif;
          font-weight: 600;
          font-size: 14px;
          line-height: 14px;
          color: var(--orange-color);
        }
      }
    }
    .mob {
      display: none;
      @media (max-width: $desktop-sm) {
        display: flex;
        align-items: center;
        gap: 5px;
      }
    }
    .mob-tel {
      font-size: 14px;
      line-height: 14px;
      color: var(--orange-color);
      font-family: "Cygre ", sans-serif;
      display: flex;
      align-items: center;
      font-weight: 600;

      svg {
        width: 100%;
        height: 100%;
      }
    }
    .burger.active {
      span {
        width: 0;
      }
      &:before {
        transform: rotate(45deg);
        top: 16px;
      }
      &:after {
        transform: rotate(-45deg);
        bottom: 17px;
      }
    }
    .burger {
      background: var(--white-color);
      width: 34px;
      height: 34px;
      border-radius: 999px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      position: relative;
      span {
        position: relative;
        width: 20px;
        height: 1px;
        background: var(--orange-color);
        transition: var(--trs-300);
      }
      &:before {
        content: "";
        position: absolute;
        width: 20px;
        height: 1px;
        background: var(--orange-color);
        top: 12px;
        left: 7px;
        transition: var(--trs-300);
      }
      &:after {
        content: "";
        position: absolute;
        width: 20px;
        height: 1px;
        background: var(--orange-color);
        bottom: 12px;
        left: 7px;
        transition: var(--trs-300);
      }
    }
  }
}
</style>
