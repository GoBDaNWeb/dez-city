import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useMenuStore = defineStore("menu", {
  state: () => {
    return { isActive: false };
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
    handleOpenMenu() {
      this.isActive = !this.isActive;
    },
  },
});
