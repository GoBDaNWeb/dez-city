import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useModalStore = defineStore("modal", {
  state: () => {
    return { isActive: false, succesIsActive: false };
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
    handleOpenModal(type) {
      this.isActive = !this.isActive;
    },
    handleOpenSuccessModal(type) {
      this.succesIsActive = !this.succesIsActive;
    },
  },
});
