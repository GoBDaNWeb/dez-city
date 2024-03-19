<script setup>
import { Button, Input } from "@/shared/ui";
import { useModalStore } from "@/entities";

defineProps(["btnColor", "btnText", "text"]);

const modal = useModalStore();
</script>

<template>
  <form @submit.prevent>
    <div class="inputs">
      <Input />
      <Button :click="modal.handleOpenSuccessModal" :color="btnColor">{{
        btnText
      }}</Button>
    </div>
    <p>
      {{ text }}

      <a href="/policy.pdf" target="_blank"> с политикой конфиденциальности </a>
    </p>
  </form>
</template>

<style lang="scss" scoped>
@import "@/shared/styles/vars";

form {
  margin-top: 20px;
  .inputs {
    display: flex;
    align-items: center;
    gap: 17px;
    margin-bottom: 20px;
    @media (max-width: $tab) {
      flex-direction: column;
      gap: 10px;
    }
    button {
      width: 100%;
    }
    label {
      width: 100%;
    }
  }
  p {
    font-family: "Cygre", sans-serif;
    font-weight: 350;
    font-size: 12px;
    line-height: 12px;
    color: var(--white-color);
    a {
      text-decoration: underline;
      color: var(--white-color);
    }
  }
}
</style>
