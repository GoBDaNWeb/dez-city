<script setup>
import { CloseIcon } from "@/shared/icons";
import { Input, Button } from "@/shared/ui";
import { watch } from "vue";
import { useModalStore } from "@/entities";

const modal = useModalStore();

watch(
  () => modal.isActive,
  () => {
    if (modal.isActive) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.removeAttribute("style");
    }
  }
);

const success = () => {
  modal.handleOpenModal();
  modal.handleOpenSuccessModal();
};
</script>

<template>
  <div
    class="order-modal"
    @click="modal.handleOpenModal"
    :class="modal.isActive ? 'active' : ''"
  >
    <div class="modal-content" @click.stop>
      <button @click="modal.handleOpenModal" class="close-btn">
        <CloseIcon />
      </button>
      <h3>
        Заказать <br />
        обработку
      </h3>
      <form @submit.prevent>
        <input type="text" placeholder="Ваше имя" />
        <Input />
        <p>
          Нажимая на кнопку, Вы соглашаетесь
          <a href="#">с политикой конфиденциальности</a>
        </p>
        <Button :click="success" color="black">Заказать</Button>
      </form>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

.order-modal.active {
  pointer-events: all;
  opacity: 1;
  .modal-content {
    transform: translateY(0);
  }
}
.order-modal {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(43, 47, 53, 0.6);
  opacity: 0;
  z-index: 100;
  display: flex;
  align-items: center;
  justify-content: center;
  pointer-events: none;
  transition: var(--trs-300);
  .modal-content {
    background: var(--white-color);
    padding: 50px 40px;
    border-radius: 40px;
    position: relative;
    transition: var(--trs-300);
    transform: translateY(-110%);
    @media (max-width: $tab) {
      padding: 50px 20px;
      border-radius: 0;
    }
    .close-btn {
      position: absolute;
      width: 50px;
      height: 50px;
      border-radius: 20px;
      border: 1px solid rgba(43, 47, 53, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      top: 20px;
      right: 20px;
      @media (max-width: $tab) {
        width: 40px;
        height: 40px;
      }
    }
    h3 {
      font-weight: 600;
      font-size: 48px;
      line-height: 43px;
      font-family: "Cygre", sans-serif;
      color: var(--dark-color);
      @media (max-width: $tab) {
        font-size: 28px;
        line-height: 25px;
      }
    }
    form {
      margin-top: 30px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      @media (max-width: $tab) {
        gap: 10px;
      }
      label {
        border: 1px solid rgba(43, 47, 53, 0.1);
      }
      input {
        padding: 0 20px;
        height: 52px;
        border-radius: 10px;
        border: 1px solid rgba(43, 47, 53, 0.1);
        width: 100%;
        font-weight: 500;
        font-size: 16px;
        line-height: 16px;
        color: var(--dark-color);
        font-family: "Cygre", sans-serif;
        outline: none;
        &:placeholder-shown {
          opacity: 1;
          color: var(--dark-color);
        }
        &:input-placeholder {
          opacity: 1;
          color: var(--dark-color);
        }
      }
      p {
        font-family: "Cygre", sans-serif;
        font-weight: 350;
        font-size: 12px;
        line-height: 12px;
        color: var(--dark-color);
      }
      button {
        width: 100%;
        font-weight: 600;
        font-size: 16px;
        line-height: 16px;
        font-family: "Cygre", sans-serif;
      }
    }
  }
}
</style>
