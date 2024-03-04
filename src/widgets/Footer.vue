<template>
  <footer id="footer" class="container">
    <div class="footer-inner">
      <div class="footer-item">
        <h3>мы всегда на связи</h3>
        <ul>
          <li>
            <p>Адрес:</p>
            <span>Москва, ул. Рабочая, 93</span>
          </li>
          <li>
            <p>Позвоните нам:</p>
            <a href="tel:+7 (495) 183-22-95">+7 (495) 183-22-95</a>
          </li>
          <li>
            <p>Напишите:</p>
            <a href="mailto:info@goroddes.ru">info@goroddes.ru</a>
          </li>
        </ul>
        <div class="info">
          <ul>
            <li>ИП <span>Малышева Наталья Анатольевна</span></li>
            <li>ИНН: <span>602712947306</span></li>
            <li>ОГРНИП: <span> 320602700000042</span></li>
          </ul>
        </div>
      </div>
      <div class="footer-item">
        <div class="footer-about">
          <p>
            ©2013–2023. Все права защищены. Данный сайт носит
            информационно-справочный характер и ни при каких условиях не
            является публичной офертой.
          </p>

          <a href="#">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

footer {
  margin-top: 10px;
  margin-bottom: 50px;
  @media (max-width: $tab) {
    margin-bottom: 20px;
  }
  .footer-inner {
    display: grid;
    background: var(--black-color);
    padding: 30px;
    border-radius: 40px;
    grid-template-columns: 1fr 0.35fr;
    gap: 30px;
    @media (max-width: $tab) {
      grid-template-columns: 1fr;
      padding: 30px 10px;
      gap: 10px;
    }
    .footer-item {
      &:first-child {
        padding-top: 20px;
        padding-left: 20px;
        @media (max-width: $tab) {
          padding-top: 0;
          padding-left: 0;
        }
      }
      h3 {
        font-family: "Cygre", sans-serif;
        font-weight: 600;
        font-size: 48px;
        line-height: 43px;
        color: var(--white-color);
        margin-bottom: 30px;
        text-transform: uppercase;
        @media (max-width: $tab) {
          font-size: 28px;
          line-height: 28px;
          margin-bottom: 20px;
          padding-left: 10px;
        }
      }
      ul {
        display: flex;
        gap: 70px;
        @media (max-width: $tab) {
          gap: 20px;
          flex-direction: column;
          padding-left: 10px;
        }
        li {
          display: flex;
          flex-direction: column;
          gap: 10px;
          @media (max-width: $tab) {
            gap: 8px;
          }
          p {
            font-family: "Cygre", sans-serif;
            font-weight: 350;
            font-size: 14px;
            line-height: 14px;
            color: var(--white-color);
            @media (max-width: $tab) {
              font-size: 12px;
              line-height: 12px;
            }
          }
          span,
          a {
            font-family: "Cygre", sans-serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;
            color: var(--orange-color);
            @media (max-width: $tab) {
              font-size: 14px;
              line-height: 14px;
            }
          }
        }
      }
      .info {
        background: rgba(217, 217, 217, 0.1);
        border-radius: 40px;
        padding: 40px 75px;
        margin-top: 40px;
        @media (max-width: $desktop-sm) {
          padding: 30px;
        }
        @media (max-width: $tab) {
          margin-top: 30px;
          padding: 10px;
          border-radius: 20px;
        }
        ul {
          display: flex;
          align-items: center;
          gap: 30px;
          justify-content: space-between;
          @media (max-width: $desktop-sm) {
            gap: 5px;
          }
          @media (max-width: $tab) {
            flex-direction: column;
            gap: 6px;
            align-items: flex-start;
          }
          li {
            font-family: "Cygre", sans-serif;
            font-weight: 350;
            font-size: 14px;
            line-height: 19px;
            color: var(--white-color);
            display: flex;
            flex-direction: row;
            @media (max-width: $tab) {
              font-size: 12px;
              line-height: 16px;
            }
            span {
              font-family: "Cygre", sans-serif;
              font-weight: 600;
              color: var(--white-color);
            }
          }
        }
      }
      .footer-about {
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 40px;
        padding: 80px 44px;
        @media (max-width: $tab) {
          border-radius: 20px;
          padding: 20px 10px;
        }
        p {
          font-family: "Cygre ", sans-serif;
          font-size: 12px;
          line-height: 14px;
          color: var(--white-color);
        }
        a {
          font-family: "Cygre ", sans-serif;
          font-size: 12px;
          line-height: 12px;
          color: var(--white-color);
          margin-top: 25px;
          display: block;
          @media (max-width: $tab) {
            margin-top: 20px;
          }
        }
      }
    }
  }
}
</style>
