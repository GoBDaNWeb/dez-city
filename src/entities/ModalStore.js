import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useModalStore = defineStore("modal", {
  state: () => {
    return { isActive: false };
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
    handleOpenModal(type) {
      if (type) {
        this.isActive = type;
      } else {
        this.isActive = !this.isActive;
      }
    },
  },
});