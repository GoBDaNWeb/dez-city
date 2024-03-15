<script setup>
import { Button, Input } from "@/shared/ui";
import { Form } from "@/features";
</script>

<template>
  <div class="hero container">
    <div class="hero-inner">
      <div class="left">
        <h1>
          <span>Уничтожение</span>
          <br />
          тараканов, клопов <br />
          и плесени
        </h1>
        <p>Гарантия результата по договору <span>на 1 год</span> вперёд</p>
        <ul>
          <li>Решим вашу проблему за один выезд</li>
          <li>⁠Уничтожаем вредителей более 15 лет</li>
          <li>
            Используем новейшее оборудование и безопасные, сертифицированные
            средства
          </li>
        </ul>
        <h4>Работаем по Москве и Московской области</h4>
        <Form
          btnColor="orange"
          btnText="Заказать обработку"
          text="Нажимая на кнопку «Заказать обработку», вы соглашаетесь"
        />
      </div>
      <div class="right">
        <div class="image-wrapper">
          <img src="@/shared/images/hero-preson.png" alt="person" />
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.hero {
  .hero-inner {
    form {
      p {
        color: var(--white-color);
      }
    }
  }
}
</style>
<style lang="scss" scoped>
@import "@/shared/styles/vars";

.hero {
  margin-top: 100px;
  .hero-inner {
    background-image: url("@/shared/images/hero-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border-radius: 40px;
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    align-items: flex-end;
    gap: 80px;
    overflow: hidden;
    @media (max-width: $tab) {
      grid-template-columns: 1fr;
      gap: 20px;
      background-image: url("@/shared/images/hero-bg-mob.jpg");
    }
    .left {
      padding: 60px 0 60px 50px;
      @media (max-width: $tab) {
        padding: 40px 15px 0;
      }
      h1 {
        color: var(--white-color);
        font-family: "Cygre ", sans-serif;
        font-weight: 600;
        font-size: 54px;
        line-height: 48px;
        margin-bottom: 30px;
        text-transform: uppercase;
        @media (max-width: $tab) {
          font-size: 36px;
          line-height: 32px;
          margin-bottom: 20px;
        }
        span {
          color: var(--orange-color);
        }
      }
      p {
        font-weight: 400;
        font-size: 24px;
        line-height: 28px;
        color: var(--white-color);
        font-family: "Cygre", sans-serif;
        margin-bottom: 30px;
        @media (max-width: $tab) {
          margin-bottom: 20px;
          font-size: 20px;
          line-height: 24px;
        }
        span {
          color: var(--orange-color);
        }
      }
      ul {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 56px;
        @media (max-width: $tab) {
          margin-bottom: 20px;
        }
        li {
          font-family: "Cygre ", sans-serif;
          position: relative;
          font-size: 16px;
          line-height: 16px;
          font-weight: 350;
          color: var(--white-color);
          padding-left: 26px;
          @media (max-width: $tab) {
            font-size: 14px;
            line-height: 14px;
          }
          &:before {
            content: "";
            position: absolute;
            width: 6px;
            height: 6px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            background: var(--orange-color);
            border-radius: 999px;
          }
        }
      }
      h4 {
        font-family: "Cygre", sans-serif;
        font-weight: 400;
        font-size: 24px;
        line-height: 28px;
        color: var(--orange-color);

        @media (max-width: $tab) {
          font-size: 20px;
          line-height: 20px;
        }
      }
      form {
        margin-top: 20px;
        .inputs {
          display: flex;
          align-items: center;
          gap: 17px;
          margin-bottom: 20px;
          button {
            width: 100%;
          }
          label {
            width: 100%;
          }
        }
        p {
          font-family: "Cygre ", sans-serif;
          font-weight: 350;
          font-size: 12px;
          line-height: 12px;
        }
      }
    }
    .right {
      width: 100%;
      height: 100%;
      aspect-ratio: 1;
      @media (max-width: $desktop-sm) {
        height: auto;
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
  }
}
</style>
