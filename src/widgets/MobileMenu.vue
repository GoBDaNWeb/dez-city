<script setup>
import { useMenuStore } from "@/entities";

const menu = useMenuStore();
</script>

<template>
  <div class="mobile-menu" :class="menu.isActive ? 'active' : ''">
    <div class="mobile-menu-content">
      <nav>
        <a href="#cost">Стоимость</a>
        <a href="#advantages">О нас</a>
        <a href="#reviews">Отзывы</a>
        <a href="#footer">Контакты</a>
      </nav>
      <ul>
        <li>
          <p>Почта:</p>
          <a href="mailto:info@goroddes.ru">info@goroddes.ru</a>
        </li>
        <li>
          <p>Выезд по Москве и +50км за МКАД</p>
          <span>Москва, ул. Рабочая, 93</span>
        </li>
        <li>
          <p>Ежедневно с 8:00 до 24:00</p>
          <a href="tel:+7 (495) 183-22-95">+7 (495) 183-22-95</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.mobile-menu.active {
  .mobile-menu-content {
    transform: translateY(0);
  }
}
.mobile-menu {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 90;
  .mobile-menu-content {
    background: #e7e6e5;
    width: 100%;
    height: 100%;
    padding: 20px;
    padding-top: 85px;
    transform: translateY(-150%);
    transition: var(--trs-300);
    nav {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 30px;
      a {
        font-weight: 600;
        font-family: "Cygre ", sans-serif;
        font-size: 16px;
        line-height: 16px;
      }
    }
    ul {
      gap: 20px;
      display: flex;

      flex-direction: column;
      li {
        display: flex;
        flex-direction: column;
        gap: 8px;

        p {
          font-family: "Cygre ", sans-serif;
          font-weight: 350;
          font-size: 12px;
          line-height: 12px;
          color: var(--dark-color);
        }
        span,
        a {
          font-family: "Cygre ", sans-serif;
          font-weight: 600;
          font-size: 14px;
          line-height: 14px;
          color: var(--orange-color);
        }
      }
    }
  }
}
</style>
