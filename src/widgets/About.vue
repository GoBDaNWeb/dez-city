<script setup>
import { AboutItem } from "@/entities";
import { Form } from "@/features";

const aboutList = [
  {
    id: "01",
    title: "Согласование заявки и выезд дезинсектора",
    text: "Прием и согласование заявки. Инструктируем по предварительной подготовке: необходимо отодвинуть  всю мебель и технику (для помещений). Выезд дезинсектора на место по назначенному адресу и времени.",
  },
  {
    id: "02",
    title: "Проведение санитарной обработки",
    text: "Тщательно осматриваем объект, масштаб проблемы и подбираем оптимальный метод обработки и препарат. Санобработка объекта в течение 20-100 минут в зависимости от площади и уровня поражения.",
  },
  {
    id: "03",
    title: "Инструктаж заказчика",
    text: "Последний этап - оплата и выдача фирменной гарантии до 2 лет. А так же сообщаем какие необходимо провести меры,  чтобы избежать повторного появления проблемы.",
  },
];
</script>

<template>
  <div class="about container">
    <div class="about-inner">
      <h2>Как будет проходить дезинсекция</h2>
      <div class="about-list">
        <AboutItem
          v-for="about in aboutList"
          :key="about.id"
          :index="about.id"
          :title="about.title"
          :text="about.text"
        />
      </div>
      <div class="about-info">
        <div class="about-info-item">
          <h5>Внимательно <br />следим за качеством обслуживания</h5>
          <p>
            Санэпидемстанция «Onedez» оказывает санитарно-эпидемиологические
            услуги по дезинсекции, дератизации и дезинфекции. <br /><br />
            Круг клиентов насчитывает сотни организаций, включая частных лиц,
            малый, средний бизнес, крупные компании. <br /><br />
            За время нашей работы накоплен неоценимый опыт, квалифицированные
            специалисты прошли обучение по специальности «Дезинфекционное дело»,
            опробованы практически все имеющиеся на рынке дезинфицирующих
            средств препараты и методики, выбраны самые эффективные. Тем не
            менее, мы не останавливаемся на достигнутом — регулярно следим за
            рынком дезсредств, изучаем новинки, внедряем лучшие из них в работу.
          </p>
        </div>
        <div class="about-info-item">
          <div class="image-wrapper">
            <img src="@/shared/images/about-info-person.png" alt="person" />
          </div>
          <Form
            btnColor="black"
            btnText="получить скидку"
            text="Нажимая на кнопку, Вы соглашаетесь"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
@import "@/shared/styles/vars";

.about-info {
  form {
    background: var(--white-color);
    padding: 30px;
    border-radius: 30px;
    position: absolute;
    bottom: 10px;
    right: 10px;
    left: 10px;
    @media (max-width: $tab) {
      position: relative;
      margin-top: 0;
      bottom: 0;
      right: 0;
      left: 0;
    }
    p {
      color: var(--dark-color);
      a {
        color: var(--dark-color);
      }
    }
    label {
      border: 1px solid #c5c5c5;
    }
  }
}
</style>
<style lang="scss" scoped>
@import "@/shared/styles/vars";

.about {
  padding-top: 80px;
  @media (max-width: $tab) {
    padding-top: 40px;
  }
  .about-inner {
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
    .about-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
      @media (max-width: $tab) {
        gap: 20px;
      }
    }
    .about-info {
      display: flex;
      gap: 10px;
      padding-top: 80px;
      @media (max-width: $tab) {
        padding-top: 40px;
        flex-direction: column;
      }
      .about-info-item {
        width: 100%;
        border-radius: 44px;
        padding: 50px;
        position: relative;
        overflow: hidden;
        @media (max-width: $tab) {
          border-radius: 20px;
          padding: 30px 20px 40px;
        }
        h5 {
          color: var(--white-color);
          font-family: "Cygre", sans-serif;
          font-weight: 600;
          font-size: 48px;
          line-height: 48px;
          margin-bottom: 30px;
          @media (max-width: $tab) {
            font-size: 28px;
            line-height: 28px;
            margin-bottom: 20px;
          }
        }
        p {
          font-family: "Cygre", sans-serif;
          font-weight: 350;
          font-size: 18px;
          line-height: 25px;
          color: var(--white-color);
          @media (max-width: $tab) {
            font-size: 14px;
            line-height: 19px;
          }
        }
        .image-wrapper {
          width: 100%;
          height: 100%;
          position: absolute;
          max-width: 608px;
          max-height: 481px;
          left: 0;
          right: 0;
          bottom: 124px;
          @media (max-width: $tab) {
            position: relative;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
          }
          img {
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
        }
        &:first-child {
          background-image: url("@/shared/images/about-info-bg.png");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          @media (max-width: $tab) {
            background-image: url("@/shared/images/about-info-bg2.png");
          }
        }
        &:last-child {
          background-color: var(--orange-color);
          // @media (max-width: $tab) {
          //   height: calc(20vw * 5);
          // }
        }
      }
    }
  }
}
</style>
