<script setup>
import { CloseIcon } from "@/shared/icons";
import { Input, Button } from "@/shared/ui";
import { watch } from "vue";
import { useModalStore } from "@/entities";

const modal = useModalStore();

watch(
  () => modal.succesIsActive,
  () => {
    if (modal.succesIsActive) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.removeAttribute("style");
    }
  }
);
</script>

<template>
  <div
    class="order-modal"
    @click="modal.handleOpenSuccessModal"
    :class="modal.succesIsActive ? 'active' : ''"
  >
    <div class="modal-content" @click.stop>
      <button @click="modal.handleOpenSuccessModal" class="close-btn">
        <CloseIcon />
      </button>
      <p>
        Наш специалист<br />
        свяжется с вами <br />в ближайшее время
      </p>
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
    p {
      font-weight: 600;
      font-size: 40px;
      color: #2b2f35;
      line-height: 40px;
      text-transform: uppercase;
    }
  }
}
</style>
