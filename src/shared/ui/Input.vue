<script setup></script>

<template>
  <label class="input-wrapper">
    <div class="image-wrapper">
      <img src="@/shared/images/country-icon.png" alt="country" />
    </div>
    <input
      type="text"
      placeholder="Ваш телефон"
      v-mask="'+7 (###) ###-##-##'"
    />
  </label>
</template>

<style lang="scss" scoped>
.input-wrapper {
  display: flex;
  background: var(--white-color);
  height: 52px;
  border-radius: 10px;
  align-items: center;
  gap: 18px;
  padding: 0 20px;
  .image-wrapper {
    width: 18px;
    height: 18px;
    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
  input {
    width: 100%;
    border: none;
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
}
</style>
