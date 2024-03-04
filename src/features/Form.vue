<script setup>
import { Button, Input } from "@/shared/ui";

defineProps(["btnColor", "btnText"]);
</script>

<template>
  <form>
    <div class="inputs">
      <Input />
      <Button :color="btnColor">{{ btnText }}</Button>
    </div>
    <p>
      Нажимая на кнопку «Заказать обработку», вы соглашаетесь с политикой
      конфиденциальности
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
  }
}
</style>
